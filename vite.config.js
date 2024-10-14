import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { VitePWA } from 'vite-plugin-pwa';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        VitePWA({
            registerType: 'autoUpdate',
            manifest: {
                name: "CoreUI Admin Template",
                short_name: "CoreUI",
                description: "CoreUI - Open Source Bootstrap Admin Template",
                icons: [
                    {
                        src: '/images/favicon/android-icon-36x36.png',
                        sizes: '36x36',
                        type: 'image/png',
                        density: '0.75',
                    },
                    {
                        src: '/images/favicon/android-icon-48x48.png',
                        sizes: '48x48',
                        type: 'image/png',
                        density: '1.0',
                    },
                    {
                        src: '/images/favicon/android-icon-72x72.png',
                        sizes: '72x72',
                        type: 'image/png',
                        density: '1.5',
                    },
                    {
                        src: '/images/favicon/android-icon-96x96.png',
                        sizes: '96x96',
                        type: 'image/png',
                        density: '2.0',
                    },
                    {
                        src: '/images/favicon/android-icon-144x144.png',
                        sizes: '144x144',
                        type: 'image/png',
                        density: '3.0',
                    },
                    {
                        src: '/images/favicon/android-icon-192x192.png',
                        sizes: '192x192',
                        type: 'image/png',
                        density: '4.0',
                    }
                ],
                start_url: '/',
                display: 'standalone',
                background_color: '#ffffff',
                theme_color: '#ffffff',
            }
        }),
    ],
});
