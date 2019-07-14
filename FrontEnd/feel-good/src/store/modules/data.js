import * as types from '../types'
import Api from '../api'

const api = new Api()

const state = {
  contentBlocks: [],
  productGroups: []
}

const mutations = {
  async [types.SET_CONTENT_BLOCKS] (state, blocks) {
    state.contentBlocks = [ ...blocks ]
  },

  async [types.SET_PRODUCT_GROUPS] (state, groups) {
    state.productGroups = [ ...groups ]
  }
}

const actions = {
  async [types.GET_CONTENT_BLOCKS] ({ commit }) {
    let response = await api.getContentBlocks()
    commit(types.SET_CONTENT_BLOCKS, response)
  },

  async [types.GET_PRODUCT_GROUPS] ({ commit, state }) {
    console.log("inside action");
    let response = await api.getProductGroups()
    commit(types.SET_PRODUCT_GROUPS, response)
  }
}

const getters = {
  getContentBlocks (state) {
    return state.contentBlocks
  },
  getProductGroups (state) {
    return state.productGroups
  }
}

export default {
  state,
  actions,
  mutations,
  getters
}