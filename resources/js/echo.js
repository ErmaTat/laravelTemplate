import Echo from 'laravel-echo';
import Pusher from 'pusher-js';
import axios from 'axios'; // Ensure axios is imported

// Set up Pusher with Laravel Echo
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});

// Listen for broadcast events
window.Echo.channel('updates')
    .listen('UpdateNotification', (event) => {
        alert(event.message)
    });

