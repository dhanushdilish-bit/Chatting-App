#!/bin/sh
set -e

# Clear existing cache
php artisan config:clear
php artisan route:clear

# Run database migrations forcibly
php artisan migrate --force

# Seed database securely if needed (optional)

# Caching for production
php artisan config:cache
php artisan route:cache || true
php artisan view:cache

# Start the main process (supervisord)
exec "$@"
