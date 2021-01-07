const path = require('path')
// const { config } = require('process')

function resolve(dir) {
  return path.join(__dirname, dir)
}

module.exports = {
  lintOnSave: false,
  publicPath: process.env.NODE_ENV === 'production'
    ? '/mobile/'
    : '/',
  outputDir: '../server/public/mobile',
  chainWebpack: config => {
    config.resolve.alias
      .set("@", resolve("src"))
      .set("@A", resolve("src/assets"))
      .set("@C", resolve("src/components"))
      .set("@V", resolve("src/views"))
      .set("@STYLES", resolve("src/styles"))
      .set("@API", resolve("src/api"))
      .set("@U", resolve("src/utils"))
    config
      .plugin('html')
      .tap(args => {
        args[0].title = 'likeShop'
        return args
      })
  },
  css: {
    loaderOptions: {
      // 给 sass-loader 传递选项
      sass: {
        // @/ 是 src/ 的别名
        // 所以这里假设你有 `src/variables.scss` 这个文件
        prependData: `
                @import "@STYLES/variables.scss";
            `
      },
      scss: {
        prependData: `
                @import "@STYLES/variables.scss";
            `
      },
    }
  }
}