import axios from 'axios'

// axios instance
const axiosInstance = axios.create({
  baseURL: 'http://localhost:8081',
  timeout: 30000
})

export default axiosInstance