import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY || 'xth6rg7jvx33vsjadmzr',
    wsHost: window.location.hostname,
    wsPort: window.location.protocol === 'https:' ? 443 : 8080,
    wssPort: window.location.protocol === 'https:' ? 443 : 8080,
    forceTLS: window.location.protocol === 'https:',
    enabledTransports: ['ws', 'wss'],
});
