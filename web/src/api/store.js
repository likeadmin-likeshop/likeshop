// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------




import request from '@/utils/request'


//获取推荐商品列表
export function getBestList(params) {
	return request.get('goods/getBestList', {params})
}

//商品详情
export function getGoodsDetail(params) {
	return request.get('goods/getGoodsDetail', {params})
}


//领券中心
export function getCouponList(params) {
	return request.get("coupon/couponList", {params});
}

//获取商品的优惠券
export function getGoodsCoupon(params) {
	return request.get("coupon/getGoodsCoupon", {params});
}

// 商品分类
export function getCatrgory() {
	return request.get('goods_category/lists')
}

//获取广告列表
export function getAdList(params) {
	return request.get('ad/lists', {params: {...params, client: 1}})
}

// 获取购物车列表
export function getCartList() {
	return request.get("cart/lists")
}

// 购物车数量更改
export function changeGoodsCount(data) {
	return request.post("cart/change", data)
}

// 单选/全选/店铺选择
export function selectedOpt(data) {
	return request.post("cart/selected", data)
}

// 删除商品
export function deleteGoods(data) {
	return request.post("cart/del", data);
}

//获取首页数据接口
export function getHome() {
	return request.get('index/lists')
}

//下单
export function orderBuy(data) {
	return request.post("order/buy", {...data,  order_source: 2});
}

//订单支付结果
export function getOrderResult(params) {
	return request.get("order/getOrderResult", {params});
}

//下单获取优惠券
export function getOrderCoupon(data) {
	return request.post("coupon/orderCoupon", data);
}

// 商品搜索
export function getGoodsSearch(params) {
	return request.get('goods/getGoodsList', {params})
}

//搜索页,热门搜索列表,和历史搜索列表
export function getSearchpage(params) {
	return request.get('goods/getSearchPage', {params})
}

// 清空历史搜索
export function clearSearch() {
	return request.get('goods/clearSearch')
}


//加入购物车
export function addCart(data) {
	return request.post('cart/add', data)
}

//购物车数量
export function getCartNum() {
	return request.get("cart/num")
}

//评价列表
export function getCommentList(params) {
    return request.get("goods_comment/lists", {params})
}

//评价分类
export function getCommentCategory(id) {
    return request.get("/goods_comment/category", {params:  {goods_id: id}})
}

// 获取活动专区商品列表
export function getActivityGoodsLists(params) {
    return request.get("activity_area/activityGoodsList", {params})
}