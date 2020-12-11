import Vue from 'vue';
import Router from 'vue-router';
Vue.use(Router);

import FirstPage from './components/pages/NewPageVue';
import NewPageRoute from './components/pages/NewPageRoute';

const routes = [
    {
        path: '/my-new-vue-route',
        component: FirstPage
    },
    {
        path: '/new-route',
        component: NewPageRoute
    }
];

export default new Router({
    mode: 'history',
    routes
});