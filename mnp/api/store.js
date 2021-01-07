// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------
import request from '../utils/request'
//获取首页数据接口
export function getHome() {
	return request.get('index/lists')
}

//获取好物优选商品列表
export function getBestList(data) {
	return request.get('goods/getBestList', data)
}

//获取广告列表
export function getAdList(data) {
	return request.get('ad/lists', {...data, client: 2})
}

//购物车数量
export function getCartNum(data) {
	return request.get("cart/num", data)
}

// 商品分类
export function getCatrgory() {
	return request.get('goods_category/lists')
}

// 购物车列表
export function getCartList() {
	return request.get('cart/lists')
}

//购物车选中状态
export function changeCartSelset(data) {
	return request.post('cart/selected',  data)
}

// 购物车数量更改
export function changeGoodsCount(data) {
	return request.post("cart/change", data)
}

// 删除商品
export function deleteGoods(data) {
	return request.post("cart/del", data);
}

//商品详情
export function getGoodsDetail(data) {
	return request.get('goods/getGoodsDetail', data)
}



// 商品搜索
export function getGoodsSearch(data) {
	return request.get('goods/getGoodsList', data)
}

//搜索页,热门搜索列表,和历史搜索列表
export function getSearchpage(data) {
	return request.get('goods/getSearchPage',data)
}

// 清空历史搜索
export function clearSearch() {
	return request.get('goods/clearSearch')
}

//领券中心
export function getCouponList(data) {
	return request.get("coupon/couponList", data);
}
//获取商品的优惠券
export function getGoodsCoupon(data) {
	return request.get("coupon/getGoodsCoupon", data);
}



//文章分类
export function getCategoryList(data) {
    let {type} = data
    let url = type ? 'help/category' : 'article/category'
    delete data.type
    return request.get(url)
}

//文章列表
export function getArticleList(data) {
    let {type} = data
    let url = type ? 'help/lists' : 'article/lists'
    delete data.type
    return request.get(url, data)
}

// 文章详情
export function getArticleDetail(data) {
    let {type} = data
    let url = type ? 'help/detail' : 'article/detail'
    delete data.type
    return request.get(url, { id: data.id })
}


//加入购物车
export function addCart(data) {
	return request.post('cart/add', data)
}

//下单
export function orderBuy(data) {
	return request.post("order/buy", {...data, order_source: 1});
}

//订单支付结果
export function getOrderResult(data) {
	return request.get("order/getOrderResult", data);
}

//下单获取优惠券
export function getOrderCoupon(data) {
	return request.post("coupon/orderCoupon", data);
}



// 获取评价列表
export function getOrderCommentList(data) {
	return request.get("goods_comment/getOrderGoods", data)
}

//评价列表
export function getCommentList(data) {
	return request.get("goods_comment/lists", data)
}

//评价分类
export function getCommentCategory(id) {
	return request.get("/goods_comment/category", {goods_id: id})
}

