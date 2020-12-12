require('./bootstrap');
window.Vue = require('vue');
import router from  './router'

Vue.component('main-component', require('./components/MainComponent').default );
// Vue.component('header-page', require('./components/layouts/HeaderPage'));
// Vue.component('over-flow', require('./components/layouts/OverFlow'));
// Vue.component('sidebar', require('./components/layouts/SideBar'));
// Vue.component('footer-page', require('./components/layouts/FooterPage'));
const app = new Vue({
    el: '#app',
    router
});
