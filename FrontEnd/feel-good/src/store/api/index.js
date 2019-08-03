import http from './httpClient'
import * as placeholder from '../modules/testData'

class Api {
  //Get Requests utilise the Axios Http Client to retreive selected data groups
  //Placedholder JSON has been used in place of the axios connection until the backend application is completed
  //Once Backend Application is complete the axios calls will be un commented and placeholders will be removed.
  async getContentBlocks (params) {
    let { data } = await http.get('/content-blocks', { params })
    return data
  }

  async getProductGroups (params) {
    let { data } = await http.get('/product-groups', { params })
    //let data = placeholder.productGroups
    return data
  }

  async getEvents (params) {
    let { data } = await http.get('/events', { params })
    //let data = placeholder.events
    return data
  }

  async getProducts (params) {
    let { data } = await http.get('/products', { params })
    //let data = placeholder.products
    return data
  }

  async newEnquiry (body) {
    let { data } = await http.post('/enquire', body)
    return data
  }
}

export default Api