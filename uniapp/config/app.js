// 开发者环境：开|关	【注：方便微信小程序发行测试】
const SWITCH_DEVELOPMENT = false

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
    development: 'https://likeshop-open.yixiangonline.com',
    // 生产环境https://php-b2c.likeshop.cn
    production: IS_H5 ? location.origin : ''
}

const baseURL = SWITCH_DEVELOPMENT ? baseURLMap['development'] : baseURLMap[process.env.NODE_ENV]
/** E API BaseURL **/

module.exports = {
    version: '3.0.3', // 版本号
    baseURL, // API Base URL
    basePath: '/mobile'
}
