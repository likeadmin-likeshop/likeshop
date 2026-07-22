export const ActivityArea = () => import('../../components/activityArea.vue' /* webpackChunkName: "components/activity-area" */).then(c => wrapFunctional(c.default || c))
export const AdItem = () => import('../../components/adItem.vue' /* webpackChunkName: "components/ad-item" */).then(c => wrapFunctional(c.default || c))
export const AddressAdd = () => import('../../components/addressAdd.vue' /* webpackChunkName: "components/address-add" */).then(c => wrapFunctional(c.default || c))
export const AddressList = () => import('../../components/addressList.vue' /* webpackChunkName: "components/address-list" */).then(c => wrapFunctional(c.default || c))
export const AfterSalesList = () => import('../../components/afterSalesList.vue' /* webpackChunkName: "components/after-sales-list" */).then(c => wrapFunctional(c.default || c))
export const CommentList = () => import('../../components/commentList.vue' /* webpackChunkName: "components/comment-list" */).then(c => wrapFunctional(c.default || c))
export const CouponsList = () => import('../../components/couponsList.vue' /* webpackChunkName: "components/coupons-list" */).then(c => wrapFunctional(c.default || c))
export const DeliverSearch = () => import('../../components/deliverSearch.vue' /* webpackChunkName: "components/deliver-search" */).then(c => wrapFunctional(c.default || c))
export const EvaluationList = () => import('../../components/evaluationList.vue' /* webpackChunkName: "components/evaluation-list" */).then(c => wrapFunctional(c.default || c))
export const GoodsList = () => import('../../components/goodsList.vue' /* webpackChunkName: "components/goods-list" */).then(c => wrapFunctional(c.default || c))
export const InputExpress = () => import('../../components/inputExpress.vue' /* webpackChunkName: "components/input-express" */).then(c => wrapFunctional(c.default || c))
export const NullData = () => import('../../components/nullData.vue' /* webpackChunkName: "components/null-data" */).then(c => wrapFunctional(c.default || c))
export const OrderList = () => import('../../components/orderList.vue' /* webpackChunkName: "components/order-list" */).then(c => wrapFunctional(c.default || c))
export const PriceFormate = () => import('../../components/priceFormate.vue' /* webpackChunkName: "components/price-formate" */).then(c => wrapFunctional(c.default || c))
export const SelffetchShopList = () => import('../../components/selffetchShopList.vue' /* webpackChunkName: "components/selffetch-shop-list" */).then(c => wrapFunctional(c.default || c))
export const UserWalletTable = () => import('../../components/userWalletTable.vue' /* webpackChunkName: "components/user-wallet-table" */).then(c => wrapFunctional(c.default || c))
export const LayoutAslideNav = () => import('../../components/layout/aslideNav.vue' /* webpackChunkName: "components/layout-aslide-nav" */).then(c => wrapFunctional(c.default || c))
export const LayoutCategory = () => import('../../components/layout/category.vue' /* webpackChunkName: "components/layout-category" */).then(c => wrapFunctional(c.default || c))
export const LayoutFloatNav = () => import('../../components/layout/floatNav.vue' /* webpackChunkName: "components/layout-float-nav" */).then(c => wrapFunctional(c.default || c))
export const LayoutFooter = () => import('../../components/layout/footer.vue' /* webpackChunkName: "components/layout-footer" */).then(c => wrapFunctional(c.default || c))
export const LayoutHeader = () => import('../../components/layout/header.vue' /* webpackChunkName: "components/layout-header" */).then(c => wrapFunctional(c.default || c))
export const PublicCountDown = () => import('../../components/public/countDown.vue' /* webpackChunkName: "components/public-count-down" */).then(c => wrapFunctional(c.default || c))
export const PublicNumberBox = () => import('../../components/public/numberBox.vue' /* webpackChunkName: "components/public-number-box" */).then(c => wrapFunctional(c.default || c))
export const PublicUpload = () => import('../../components/public/upload.vue' /* webpackChunkName: "components/public-upload" */).then(c => wrapFunctional(c.default || c))

// nuxt/nuxt.js#8607
function wrapFunctional(options) {
  if (!options || !options.functional) {
    return options
  }

  const propKeys = Array.isArray(options.props) ? options.props : Object.keys(options.props || {})

  return {
    render(h) {
      const attrs = {}
      const props = {}

      for (const key in this.$attrs) {
        if (propKeys.includes(key)) {
          props[key] = this.$attrs[key]
        } else {
          attrs[key] = this.$attrs[key]
        }
      }

      return h(options, {
        on: this.$listeners,
        attrs,
        props,
        scopedSlots: this.$scopedSlots,
      }, this.$slots.default)
    }
  }
}
