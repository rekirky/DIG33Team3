import * as types from '../types'
import Api from '../api'

const api = new Api()

const state = {
  contentBlocks: [],
  productGroups: [],
  events: [],
  products: []
}

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