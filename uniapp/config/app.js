module.exports = {
    HEADER: {
        'content-type': 'application/json'
    },
	// #ifdef H5
    baseURL: process.env.NODE_ENV == 'production' ? '/api/' : '/api/',
	// #endif
	// #ifdef MP-WEIXIN
	baseURL: 'http://likeshopv2.yixiangonline.com/api/'
	// #endif
}
