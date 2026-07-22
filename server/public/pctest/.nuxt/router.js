import Vue from 'vue'
import Router from 'vue-router'
import { normalizeURL, decode } from 'ufo'
import { interopDefault } from './utils'
import scrollBehavior from './router.scrollBehavior.js'

const _3ea589a2 = () => interopDefault(import('../pages/category.vue' /* webpackChunkName: "pages/category" */))
const _42ad5aca = () => interopDefault(import('../pages/confirm_order.vue' /* webpackChunkName: "pages/confirm_order" */))
const _25713930 = () => interopDefault(import('../pages/get_coupons.vue' /* webpackChunkName: "pages/get_coupons" */))
const _134b8ee2 = () => interopDefault(import('../pages/help_center/index.vue' /* webpackChunkName: "pages/help_center/index" */))
const _5d6e9e99 = () => interopDefault(import('../pages/news_list/index.vue' /* webpackChunkName: "pages/news_list/index" */))
const _e6e751dc = () => interopDefault(import('../pages/payment.vue' /* webpackChunkName: "pages/payment" */))
const _5e7acfbb = () => interopDefault(import('../pages/seckill.vue' /* webpackChunkName: "pages/seckill" */))
const _3e944155 = () => interopDefault(import('../pages/shop_cart.vue' /* webpackChunkName: "pages/shop_cart" */))
const _f721259e = () => interopDefault(import('../pages/account/forget_pwd.vue' /* webpackChunkName: "pages/account/forget_pwd" */))
const _78d802da = () => interopDefault(import('../pages/account/login.vue' /* webpackChunkName: "pages/account/login" */))
const _61972d69 = () => interopDefault(import('../pages/account/register.vue' /* webpackChunkName: "pages/account/register" */))
const _3cc28d9d = () => interopDefault(import('../pages/help_center/help_center_detail.vue' /* webpackChunkName: "pages/help_center/help_center_detail" */))
const _1135a8a2 = () => interopDefault(import('../pages/news_list/news_list_detail.vue' /* webpackChunkName: "pages/news_list/news_list_detail" */))
const _dee98252 = () => interopDefault(import('../pages/user/address/index.vue' /* webpackChunkName: "pages/user/address/index" */))
const _3bbfed8c = () => interopDefault(import('../pages/user/after_sales/index.vue' /* webpackChunkName: "pages/user/after_sales/index" */))
const _94478b24 = () => interopDefault(import('../pages/user/collection.vue' /* webpackChunkName: "pages/user/collection" */))
const _7924e3ed = () => interopDefault(import('../pages/user/coupons.vue' /* webpackChunkName: "pages/user/coupons" */))
const _3b11618f = () => interopDefault(import('../pages/user/evaluation/index.vue' /* webpackChunkName: "pages/user/evaluation/index" */))
const _7f72d3b1 = () => interopDefault(import('../pages/user/order/index.vue' /* webpackChunkName: "pages/user/order/index" */))
const _1ba39289 = () => interopDefault(import('../pages/user/profile.vue' /* webpackChunkName: "pages/user/profile" */))
const _a8808466 = () => interopDefault(import('../pages/user/user_wallet.vue' /* webpackChunkName: "pages/user/user_wallet" */))
const _bf1e67fa = () => interopDefault(import('../pages/user/after_sales/after_sale_details.vue' /* webpackChunkName: "pages/user/after_sales/after_sale_details" */))
const _16e81f78 = () => interopDefault(import('../pages/user/after_sales/apply_result.vue' /* webpackChunkName: "pages/user/after_sales/apply_result" */))
const _2dcd09a4 = () => interopDefault(import('../pages/user/after_sales/apply_sale.vue' /* webpackChunkName: "pages/user/after_sales/apply_sale" */))
const _5a3cc528 = () => interopDefault(import('../pages/user/evaluation/evaluate.vue' /* webpackChunkName: "pages/user/evaluation/evaluate" */))
const _073ab202 = () => interopDefault(import('../pages/user/order/detail.vue' /* webpackChunkName: "pages/user/order/detail" */))
const _58a0abe0 = () => interopDefault(import('../pages/goods_details/_id.vue' /* webpackChunkName: "pages/goods_details/_id" */))
const _2f748b15 = () => interopDefault(import('../pages/goods_list/_type.vue' /* webpackChunkName: "pages/goods_list/_type" */))
const _2cc45644 = () => interopDefault(import('../pages/index.vue' /* webpackChunkName: "pages/index" */))

const emptyFn = () => {}

Vue.use(Router)

export const routerOptions = {
  mode: 'history',
  base: '/',
  linkActiveClass: 'nuxt-link-active',
  linkExactActiveClass: 'nuxt-link-exact-active',
  scrollBehavior,

  routes: [{
    path: "/category",
    component: _3ea589a2,
    name: "category"
  }, {
    path: "/confirm_order",
    component: _42ad5aca,
    name: "confirm_order"
  }, {
    path: "/get_coupons",
    component: _25713930,
    name: "get_coupons"
  }, {
    path: "/help_center",
    component: _134b8ee2,
    name: "help_center"
  }, {
    path: "/news_list",
    component: _5d6e9e99,
    name: "news_list"
  }, {
    path: "/payment",
    component: _e6e751dc,
    name: "payment"
  }, {
    path: "/seckill",
    component: _5e7acfbb,
    name: "seckill"
  }, {
    path: "/shop_cart",
    component: _3e944155,
    name: "shop_cart"
  }, {
    path: "/account/forget_pwd",
    component: _f721259e,
    name: "account-forget_pwd"
  }, {
    path: "/account/login",
    component: _78d802da,
    name: "account-login"
  }, {
    path: "/account/register",
    component: _61972d69,
    name: "account-register"
  }, {
    path: "/help_center/help_center_detail",
    component: _3cc28d9d,
    name: "help_center-help_center_detail"
  }, {
    path: "/news_list/news_list_detail",
    component: _1135a8a2,
    name: "news_list-news_list_detail"
  }, {
    path: "/user/address",
    component: _dee98252,
    name: "user-address"
  }, {
    path: "/user/after_sales",
    component: _3bbfed8c,
    name: "user-after_sales"
  }, {
    path: "/user/collection",
    component: _94478b24,
    name: "user-collection"
  }, {
    path: "/user/coupons",
    component: _7924e3ed,
    name: "user-coupons"
  }, {
    path: "/user/evaluation",
    component: _3b11618f,
    name: "user-evaluation"
  }, {
    path: "/user/order",
    component: _7f72d3b1,
    name: "user-order"
  }, {
    path: "/user/profile",
    component: _1ba39289,
    name: "user-profile"
  }, {
    path: "/user/user_wallet",
    component: _a8808466,
    name: "user-user_wallet"
  }, {
    path: "/user/after_sales/after_sale_details",
    component: _bf1e67fa,
    name: "user-after_sales-after_sale_details"
  }, {
    path: "/user/after_sales/apply_result",
    component: _16e81f78,
    name: "user-after_sales-apply_result"
  }, {
    path: "/user/after_sales/apply_sale",
    component: _2dcd09a4,
    name: "user-after_sales-apply_sale"
  }, {
    path: "/user/evaluation/evaluate",
    component: _5a3cc528,
    name: "user-evaluation-evaluate"
  }, {
    path: "/user/order/detail",
    component: _073ab202,
    name: "user-order-detail"
  }, {
    path: "/goods_details/:id?",
    component: _58a0abe0,
    name: "goods_details-id"
  }, {
    path: "/goods_list/:type?",
    component: _2f748b15,
    name: "goods_list-type"
  }, {
    path: "/",
    component: _2cc45644,
    name: "index"
  }],

  fallback: false
}

export function createRouter (ssrContext, config) {
  const base = (config._app && config._app.basePath) || routerOptions.base
  const router = new Router({ ...routerOptions, base  })

  // TODO: remove in Nuxt 3
  const originalPush = router.push
  router.push = function push (location, onComplete = emptyFn, onAbort) {
    return originalPush.call(this, location, onComplete, onAbort)
  }

  const resolve = router.resolve.bind(router)
  router.resolve = (to, current, append) => {
    if (typeof to === 'string') {
      to = normalizeURL(to)
    }
    return resolve(to, current, append)
  }

  return router
}
