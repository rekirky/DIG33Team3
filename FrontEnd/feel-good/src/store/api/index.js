import http from './httpClient'
import * as placeholder from '../modules/testData'

class Api {
  async getContentBlocks (params) {
    let { data } = await http.get('/content-blocks', { params })
    console.log(data)
    return data
  }

  async getProductGroups (params) {
    //let { data } = await http.get('/content-blocks', { params })
    let data = placeholder.productGroups
    return data
  }

  async getEvents (params) {
    //let { data } = await http.get('/content-blocks', { params })
    let data = placeholder.events
    return data
  }

  async getProducts (params) {
    //let { data } = await http.get('/content-blocks', { params })
    let data = placeholder.products
    return data
  }
}

export default Api