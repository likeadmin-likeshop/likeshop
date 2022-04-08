/** S 是否H5端 **/
// #ifdef H5
const IS_H5 = true
// #endif

// #ifndef H5
const IS_H5 = false
// #endif
/** E 是否H5端 **/

/** S API BaseURL **/
const baseURLMap = {
	// 开发环境 
	development: 'http://likeshopb2cos.yixiangonline.com/api/',
	// 生产环境
	production: IS_H5 ? location.origin +'/api/' : 'http://likeshopb2cos.yixiangonline.com/api/',
}

const baseURL = baseURLMap[process.env.NODE_ENV]


/** E API BaseURL **/


module.exports = {
    HEADER: {
        'content-type': 'application/json'
    },
	baseURL,					// API Base URL
}
