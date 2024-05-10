import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

import Swal from "sweetalert2/dist/sweetalert2.js";


const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

const Toast = Swal.mixin({
   toast: true,
   position: "top-end",
   timer: 2000,
   timerProgressBar: true,
   showConfirmButton: false
});

// const Toast = (timer = 3000) => {
//     return Swal.mixin({
//         toast: true,
//         position: "top-end",
//         timer: timer !== undefined ? timer : 2000, // Se timer for indefinido, use 2000ms como padrão
//         timerProgressBar: true,
//         showConfirmButton: false
//     });
// };

window.Toast = Toast;

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(VueSweetalert2)
            .mount(el);
    },
    progress: {
        // The delay after which the progress bar will appear, in milliseconds...
        delay: 250,

        // The color of the progress bar...
        color: '#29d',

        // Whether to include the default NProgress styles...
        includeCSS: true,

        // Whether the NProgress spinner will be shown...
        showSpinner: false,
    },




});

