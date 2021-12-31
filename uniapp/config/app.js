// h5正式环境域名
const proUrl = location.origin
// 测试环境域名
const devUrl = 'http://likeshopb2cos.yixiangonline.com'

module.exports = {
    HEADER: {
        'content-type': 'application/json'
    },
	// #ifdef H5
    baseURL: process.env.NODE_ENV == 'production' ? proUrl+'/api/' : devUrl+'/api/',
    // baseURL: process.env.NODE_ENV == 'production' ? '/api/' : '/api/',
	// #endif
	// #ifndef H5
	baseURL: devUrl+'/api/',
	// #endif
}