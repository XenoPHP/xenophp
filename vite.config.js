import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
  server: {
    host: 'localhost',
    cors: true,
    watch: {
      usePolling: true,
    },
  },
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: [
        'resources/routes/**',
        'routes/**',
        'app/Routes/**',
        'resources/views/**',
      ],
    }),
  ],
});
