FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=UTC

RUN apt-get update && apt-get install -y software-properties-common gpg curl \
    && add-apt-repository ppa:ondrej/php -y \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update && apt-get install -y \
    nodejs \
    zip \
    unzip \
    git \
    supervisor \
    nginx \
    sqlite3 \
    php8.2-fpm \
    php8.2-cli \
    php8.2-sqlite3 \
    php8.2-mysql \
    php8.2-pgsql \
    php8.2-mbstring \
    php8.2-xml \
    php8.2-curl \
    php8.2-zip \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Replace Nginx configuration
COPY docker/nginx.conf /etc/nginx/sites-available/default

# Add Supervisor configuration
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Copy Application code
COPY . /var/www/html

# Install dependencies (optimization for production)
RUN composer install --no-dev --optimize-autoloader || true

# Compile Vite Frontend Assets
RUN npm install
RUN npm run build

# Adjust Permissions immediately (Crucial that this is AFTER npm build)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Setup directory for Unix socket and SQLite
# Ensure the database folder itself is wholly owned by www-data
RUN mkdir -p /run/php && \
    touch /var/www/html/database/database.sqlite && \
    chown -R www-data:www-data /var/www/html/database

COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 80

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
