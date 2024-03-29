import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
const app = createApp({});
import First from './components/form-img/First.vue';
import Second from './components/form-img/Second.vue';
import Third from './components/form-img/Third.vue';
import SelectCategory from './components/SelectCategory.vue';
import SelectLocation from './components/SelectLocation.vue';
app.component('show-image1', First);
app.component('show-image2', Second);
app.component('show-image3', Third);
app.component('select-category', SelectCategory);
app.component('select-location', SelectLocation);
app.mount('#app');
// app.mount('.my-app');
