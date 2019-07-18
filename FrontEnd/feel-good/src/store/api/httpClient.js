import axios from 'axios'

// axios instance
// Axios handles the HTTP requests between the front end and the backend api
const axiosInstance = axios.create({
  baseURL: 'http://localhost:8081',
  timeout: 30000
})

export default axiosInstance