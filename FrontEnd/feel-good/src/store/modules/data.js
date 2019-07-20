import * as types from '../types'
import Api from '../api'

const api = new Api()


//Collection arrays for objects retrieved from the API
//Objects are stored locally until the use leaves the application
const state = {
  contentBlocks: [],
  productGroups: [],
  events: [],
  products: []
}

//Setters for the Collection Arrays, generelly call within this file, for the actions
const mutations = {
  async [types.SET_CONTENT_BLOCKS] (state, blocks) {
    state.contentBlocks = [ ...blocks ]
  },

  async [types.SET_PRODUCT_GROUPS] (state, groups) {
    state.productGroups = [ ...groups ]
  },

  async [types.SET_EVENTS] (state, events) {
    state.events = [ ...events ]
  },

  async [types.SET_PRODUCTS] (state, products) {
    state.products = [ ...products ]
  }
}

//Global Getters accessed via the matching of type names.
//They call the API for data and the returned data is set in the collection arrays
const actions = {
  async [types.GET_CONTENT_BLOCKS] ({ commit }) {
    let response = await api.getContentBlocks()
    commit(types.SET_CONTENT_BLOCKS, response)
  },

  async [types.GET_PRODUCT_GROUPS] ({ commit, state }) {
    let response = await api.getProductGroups()
    commit(types.SET_PRODUCT_GROUPS, response)
  },

  async [types.GET_EVENTS] ({ commit, state }) {
    let response = await api.getEvents()
    commit(types.SET_EVENTS, response)
  },

  async [types.GET_PRODUCTS] ({ commit, state }) {
    let response = await api.getProducts()
    commit(types.SET_PRODUCTS, response)
  }
}

//Registered Getters, return the collection arrays to components that have registered the getter in ...mapgetters
const getters = {
  getContentBlocks (state) {
    return state.contentBlocks
  },
  getProductGroups (state) {
    return state.productGroups
  },
  getEvents (state) {
    return state.events
  },
  getProducts (state) {
    return state.products
  }
}

export default {
  state,
  actions,
  mutations,
  getters
}