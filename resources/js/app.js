require('./bootstrap');

window.Vue = require('vue');


Vue.component('dynamic-form', require('./components/DynamicForm.vue'));
Vue.component('edit-dynamic-form', require('./components/EditDynamicForm.vue'));

const app = new Vue({
    el: '#app'
});
