

require('./bootstrap');

window.Vue = require('vue');

import { extend } from 'vee-validate';
import { required } from 'vee-validate/dist/rules';
import { email } from 'vee-validate/dist/rules';
import { numeric } from 'vee-validate/dist/rules';
import { ValidationProvider } from 'vee-validate';




Vue.component('ValidationProvider', ValidationProvider);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('perfil-component', require('./components/PerfilComponent.vue').default);

const app = new Vue({
    el: '#app',
});

extend('required', {
    ...required,
    message: 'Este campo es obligatorio'
  });
extend('email', {
    ...email,
    message: 'Email invalido'
  });

  extend('numeric', {
    ...numeric,
    message: 'Solo numeros'
  });  

  export default {
    components: {
      ValidationProvider
    }
  };