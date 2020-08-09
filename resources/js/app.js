/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Seller from './Helpers/Seller'
window.Seller = Seller

console.log(Seller.sellerId())

    // For common config
    


Vue.component('example-component', require('./components/ExampleComponent.vue').default);


Vue.component('Register', require('./components/seller/Register.vue').default);
Vue.component('Login', require('./components/seller/Login.vue').default);



const app = new Vue({
    el: '#app',
});
