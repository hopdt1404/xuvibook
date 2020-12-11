require('./bootstrap');
window.Vue = require('vue');
import router from  './router'

Vue.component('main-component', require('./components/MainComponent').default );
const app = new Vue({
    el: '#app',
    router
});
