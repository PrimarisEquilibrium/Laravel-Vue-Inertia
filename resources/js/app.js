import "./bootstrap";
import "../css/app.css";

import { createApp, h } from "vue";
import { createInertiaApp, Head, Link } from "@inertiajs/vue3";
import Layout from "./Layouts/Layout.vue";

createInertiaApp({
    // The global title of the app, the title argument is whatever title the current page has
    title: (title) => `My App ${title}`,
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        let page = pages[`./Pages/${name}.vue`];
        // Set the default layout of each page
        page.default.layout = page.default.layout || Layout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Head", Head) // Register global components
            .component("Link", Link)
            .mount(el);
    },
    // Custom progress indicator when loading a page takes time
    progress: {
        color: "#fff",
        includeCSS: true,
        showSpinner: true,
    },
});
