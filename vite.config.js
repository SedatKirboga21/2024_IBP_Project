import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            project: '2024_IBP_Project', // Proje adını buraya ekleyin
            refresh: true,
        }),
    ],
});
