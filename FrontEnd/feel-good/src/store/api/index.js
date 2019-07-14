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
    console.log(placeholder.productGroups)
    let data = placeholder.productGroups
    console.log(data)
    return data
  }
}

export default Api