
// 本地访问域名
const testUrl = "https://php-b2c.yixiangonline.com"
//线上域名
const productUrl = ""
const config = {
  baseUrl:  process.env.NODE_ENV == 'production' ? productUrl : testUrl
}

export default config
