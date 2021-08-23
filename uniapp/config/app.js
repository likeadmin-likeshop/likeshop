module.exports = {
    HEADER: {
        'content-type': 'application/json'
    },
	// #ifdef H5
    baseURL: process.env.NODE_ENV == 'production' ? '/api/' : 'http://www.likeshopb2c.localhost/api/',
    // baseURL: process.env.NODE_ENV == 'production' ? '/api/' : '/api/',
	// #endif
	// #ifndef H5
	baseURL: 'http://www.likeshopb2.localhost/api/'
	// #endif
}