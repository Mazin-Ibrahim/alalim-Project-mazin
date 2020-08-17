/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Seller from './Helpers/Seller'
window.Seller = Seller

import User from './Helpers/User'
window.User = User

// console.log(Seller.sellerId())

    // For common config
    


Vue.component('example-component', require('./components/ExampleComponent.vue').default);


Vue.component('Register', require('./components/seller/auth/Register.vue').default);
Vue.component('Login', require('./components/seller/auth/Login.vue').default);
Vue.component('active-code', require('./components/seller/auth/ActiveCode.vue').default);

Vue.component('Profile', require('./components/seller/Profile.vue').default);

Vue.component('add-product', require('./components/seller/product/AddProduct.vue').default);
Vue.component('Products', require('./components/seller/product/Products.vue').default);
Vue.component('edit-product', require('./components/seller/product/EditProduct.vue').default);



Vue.component('user-register', require('./components/user/auth/Register.vue').default);
Vue.component('user-login', require('./components/user/auth/Login.vue').default);


Vue.component('Categories', require('./components/Category/Categories.vue').default);




const app = new Vue({
    el: '#app',
});
