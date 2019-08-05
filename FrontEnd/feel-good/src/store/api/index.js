import http from './httpClient'

class Api {
  //Get Requests utilise the Axios Http Client to retreive selected data groups
  async getContentBlocks (params) {
    let { data } = await http.get('/content-blocks', { params })
    return data
  }

  async getProductGroups (params) {
    let { data } = await http.get('/product-groups', { params })
    return data
  }

  async getEvents (params) {
    let { data } = await http.get('/events', { params })
    return data
  }

  async getProducts (params) {
    let { data } = await http.get('/products', { params })
    return data
  }

  async newEnquiry (body) {
    let { data } = await http.post('/enquiry', body)
    return data
  }
}

export default Api