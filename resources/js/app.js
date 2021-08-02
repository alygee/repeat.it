/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue").default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component(
//     "example-component",
//     require("./components/ExampleComponent.vue").default
// );

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import { createApp } from "vue";
import { VuesticPlugin } from "vuestic-ui";
import "vuestic-ui/dist/vuestic-ui.css";
import ExampleComponent from "./components/ExampleComponent.vue";

createApp({})
    .component("Example", ExampleComponent)
    .use(VuesticPlugin, {
        colors: {
            // Default colors
            primary: "#23e066",
            secondary: "#002c85",
            success: "#40e583",
            info: "#2c82e0",
            danger: "#e34b4a",
            warning: "#ffc200",
            gray: "#babfc2",
            dark: "#34495e",

            // Custom colors
            yourCustomColor: "#d0f55d"
        }
    })
    .mount("#app");
