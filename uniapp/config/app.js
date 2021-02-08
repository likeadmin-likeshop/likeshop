module.exports = {
    HEADER: {
        'content-type': 'application/json'
    },
	// #ifdef H5
    baseURL: process.env.NODE_ENV == 'production' ? '/api/' : 'http://likeshopv2.yixiangonline.com/api/', // appid： wxfb9759f93884b6d1
	// #endif
	// #ifdef MP-WEIXIN
	baseURL: 'http://likeshopv2.yixiangonline.com/api/'
	// #endif
}
