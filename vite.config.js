import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/adm_styles.css',
                'resources/css/client_styles.css',
                'resources/css/normalize.css',
                'resources/js/app.js',
                'resources/js/accordeon.js',
                'resources/js/admin_editor.js',
                'resources/js/client_everyday.js',
                'resources/js/client_place.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
