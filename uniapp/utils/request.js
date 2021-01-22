import axios from '../js_sdk/xtshadow-axios/axios.min'
import {paramsToStr} from './tools'
import Cache from './cache'
import {TOKEN} from '../config/cachekey'


const service = axios.create({
  baseURL: 'https://likeshop.yixiangonline.com/api/',
  timeout: 10000,
  header: {'content-type': 'application/json'}
});

console.log(service)
// request拦截器
service.interceptors.request.use(
    config => {
		if(config.method == 'GET') {
			config.url += paramsToStr(config.params)
		}
		config.header.token = Cache.get(TOKEN)
		console.log(config)
        return config
    },
    error => {
        // Do something with request error
        console.log(error) // for debug
        Promise.reject(error)
    }
)

// response 拦截器
service.interceptors.response.use(
    async (response) => {
       
        return Promise.resolve(response.data)
    },
    error => {
        // tryHideFullScreenLoading()
        console.log(error)
        console.log('err' + error) // for debug
        return Promise.reject(error)
    }
)

export default service