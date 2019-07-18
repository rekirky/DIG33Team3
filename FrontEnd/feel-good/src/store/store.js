import Vue from 'vue'
import Vuex from 'vuex'
import data from './modules/data'

//Initialisation of Vuex local storage.
Vue.use(Vuex)

export default new Vuex.Store({
  modules:{
    data
  }
})
