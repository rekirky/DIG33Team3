import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store/store'

//Import of Jquery library used under the MIT license, https://jquery.org/license/
import jQuery from 'jquery'
global.jQuery = jQuery
global.$ = jQuery

//Import of Bootstrap used under the MIT license https://getbootstrap.com/docs/4.0/about/license/
let Bootstrap = require('bootstrap')
import 'bootstrap/dist/css/bootstrap.css'


Vue.config.productionTip = false

//Initialisation of the Application
new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
