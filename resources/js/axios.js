import axios from "axios";

const axiosClient = axios.create({
  baseURL: 'https://api.avijitbiswas.me/api'
});

axiosClient.interceptors.request.use((config) => {
  // You can modify the request config here before it is sent
  return config;
});

axiosClient.interceptors.response.use(
  (response) => {
    // You can modify the response data here
    return response;
  },
  (error) => {
    if (error.response && error.response.status === 401) {
      // Handle 401 unauthorized error here
      return error;
    }
    // For other errors, rethrow the error
    throw error;
  }
);

export default axiosClient;
