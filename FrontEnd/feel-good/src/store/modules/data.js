import * as types from '../types'
import Api from '../api'

const api = new Api()

const state = {
  contentBlocks: []
}

const mutations = {
  async [types.SET_CONTENT_BLOCKS] (state, blocks) {
    state.contentBlocks = [ ...blocks ]
  }
}

const actions = {
  async [types.GET_CONTENT_BLOCKS] ({ commit }) {
    let response = await api.getContentBlocks()
    commit(types.SET_CONTENT_BLOCKS, response)
  }
}

const getters = {
  getVideos (state) {
    return state.contentBlocks
  }
}

export default {
  state,
  actions,
  mutations,
  getters
}