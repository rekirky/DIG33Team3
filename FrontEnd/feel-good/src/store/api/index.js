import http from './httpClient'

class Api {
  async getContentBlocks (params) {
    let { data } = await http.get('/content-blocks', { params })
    console.log(data)
    return data
  }
}

export default Api