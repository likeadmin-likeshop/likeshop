import { get, post } from "../utils/request";
import { Platform } from "react-native";
import {client} from "../utils/app"

//获取广告列表
export function getAdList(data: any) {
	return get('ad/lists', {...data, client: 3})
}

// 商品分类
export function getCatrgory() {
	return get('goods_category/lists')
}

//获取首页数据接口
export function getHome() {
	return get('index/lists')
}

//商品详情
export function getGoodsDetail(data : any, loading?: boolean) {
	return get('goods/getGoodsDetail', data, loading)
}

// 商品搜索
export function getGoodsSearch(data : any) {
	return get('goods/getGoodsList', data)
}

//搜索页,热门搜索列表,和历史搜索列表
export function getSearchpage() {
	return get('goods/getSearchPage')
}

// 清空历史搜索
export function clearSearch() {
	return get('goods/clearSearch')
}

//购物车数量
export function getCartNum() {
	return get("cart/num", )
}

//获取推荐商品列表
export function getBestList(data: any) {
	return get('goods/getBestList', data)
}

//领券中心
export function getCouponList(data?: any) {
	return get("coupon/couponList", data);
}

//获取商品的优惠券
export function getGoodsCoupon(data?: any) {
	return get("coupon/getGoodsCoupon", data);
}

//文章分类 help type == 0 article == 1
export function getCategoryList(data: any) {
    let {type} = data
    let url = type ?  'help/category' : 'article/category'
    return get(url)
}

//文章列表
export function getArticleList(data: any) {
    let {type} = data
    let url = type ? 'help/lists' : 'article/lists' 
    return get(url, data)
}

// 文章详情
export function getArticleDetail(data: any) {
    let {type} = data
    let url = type ? 'help/detail' :  'article/detail' 
    return get(url, { id: data.id })
}


//下单
export function orderBuy(data : any, loading?: boolean) {
	return post("order/buy", {...data, order_source: Platform.OS == 'android' ? 4 : 3}, loading);
}


//下单获取优惠券
export function getOrderCoupon(data : any) {
	return post("coupon/orderCoupon", data);
}

//获取商品热搜榜单
export function getHotGoods(data : any) {
	return get("goods/getHostList", data);
}

//加入购物车
export function addCart(data : any) {
	return post('cart/add', data)
}

// 获取购物车列表
export function getCartList() {
	return get("cart/lists", {})
}

// 购物车数量更改
export function changeGoodsCount(data : any) {
	return post("cart/change", data)
}

//购物车选中状态
export function changeCartSelset(data: any) {
	return post('cart/selected',  data)
}

// 删除商品
export function deleteGoods(data : any) {
	return post("cart/del", data);
}

// 评价分类
export function getCommentCategory(data: any) {
    return get("/goods_comment/category", data)
}

//评价列表
export function getCommentList(data: any) {
    return get("goods_comment/lists", data)
}

// 获取活动专区商品列表
export function getActivityGoodsLists(data: any) {
    return get("activity_area/activityGoodsList", data)
}

// 消息中心首页
export function getMessageLists() {
	return get("notice/index")
}

// 消息通知
export function getNoticeLists(data: any) {
	return get("notice/lists", data)
}