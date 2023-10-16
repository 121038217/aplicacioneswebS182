import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
            //importamos bootstrsp
            resolve:{
                alias:{
                    '~bootstrap': path.resolve(_dirname,'node_modules/bootstrap')
                }
            },
            // fin importamos Bootstrap
        }),
    ],
});
