export default {
  // Global page headers: https://go.nuxtjs.dev/config-head

  ssr: true,
  head: {
    title: '',
    htmlAttrs: {
      lang: 'zh'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' }
    ]
  },
  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
    'swiper/css/swiper.css',
    '~/assets/css/global.scss',
    '~/assets/fonts/iconfont.css'
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
    '@/plugins/element-ui',
    { src: '@/plugins/vue-awesome-swiper', mode: 'client' },
    '@/plugins/axios',
    '@/plugins/init',
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    '@nuxtjs/axios',
    '@nuxtjs/style-resources',
    ['cookie-universal-nuxt', { parseJSON: true }]
  ],

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
    transpile: [/^element-ui/],
  },
  axios: {
    // Axios options here
  },
  styleResources: {
    scss: "./assets/css/variable.scss"
  },
  router: {
    middleware: 'route',  // 即每次路由跳转会调用该中间件
    // base: '/pc/'
   //多个中间件写法
   // middleware: ['route']
  },
  generate: {

  }
}
