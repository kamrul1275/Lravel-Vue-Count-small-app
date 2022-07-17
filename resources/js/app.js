import Vue from 'vue';
require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('Test', require('./components/Test.vue').default)

const app = new Vue({
    el: '#app',

  data() {
    return {
        test: 'hello testing'
    }
  },

});
