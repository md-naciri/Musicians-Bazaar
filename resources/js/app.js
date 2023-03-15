import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
const app = createApp({});
import Test from './components/Test.vue';
app.component('testing', Test);
app.mount('#app');