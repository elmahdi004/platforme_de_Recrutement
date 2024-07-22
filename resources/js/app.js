import App from './App.vue';
import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import router from './router';
import { createPinia } from 'pinia';

const app = createApp(App);
const pinia = createPinia()
app.use(router);
app.use(pinia);
app.mount('#app');