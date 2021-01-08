import { Platform } from "react-native";
import {client} from "../utils/app"
import { get, post } from "../utils/request";

//个人中心
export function getUser() {
    return get('user/center')
}

// 地址列表
export function getAddressLists() {
    return get('user_address/lists')
}

// 添加编辑地址
export function editAddress(data : any) {
    return post('user_address/update', data)
}

// 添加收货地址
export function addAddress(data : any) {
    return post('user_address/add', data)
}

// 删除地址
export function delAddress(id : any) {
    return post('user_address/del', {id})
}

// 获取单个地址
export function getOneAddress(id : any) {
    return get('user_address/detail', {id})
}

// 获取默认地址
export function getDefaultAddress(id : any) {
    return get('user_address/getDefault',{id})
}

// 设置默认地址
export function setDefaultAddress(id : any) {
    return post('user_address/setDefault', {id})
}

//传省市区字符串判读是否有code
export function hasRegionCode(data : any) {
    return post('user_address/handleRegion',  data)
}

//订单列表
export function getOrderList(data : any) {
    return get('order/lists', data)
}
//订单详情
export function getOrderDetail(id : any,) {
    return get('order/detail', {id}, true)
}

//取消订单
export function cancelOrder(id : any) {
    return post('order/cancel', {id})
}

// 获取商品的收藏列表
export function getCollectGoods(data : any) {
    return get('collect/getCollectGoods', data)
}

// 获取店铺的收藏列表
export function getCollectShop(data : any) {
    return get('collect/getCollectShop', data)
}

// 商品的增添取消收藏
export function handleCollectGoods(data : any) {
    return post('collect/handleCollectGoods', data)
}

// 店铺的增添取消收藏
export function handleCollectShop(data : any) {
    return post('collect/handleCollectShop', data)
}

//删除订单
export function delOrder(id : any) {
    return post('order/del', {id})
}

//用户领取优惠券
export function getCoupon(id : any) {
    return post('coupon/getCoupon', {id})
}

//我的优惠券
export function getMyCoupon(data : any) {
    return get('coupon/myCoupon', data)
}

// 获取评价列表
export function getGoodsCommentList(data : any) {
    return get('goods_comment/lists', data)
}

// 增加商品评价
export function addGoodsComment(data : any) {
    return post("goods_comment/addGoodsComment", data)
}

// 待评价商品列表
export function  getBeforeGoodsCommentList(data : any) {
    return get("goods_comment/ReadyComment", data)
}

// 已评价商品列表
export function getAfterGoodsCommentList(data : any) {
    return get("goods_comment/GoodsComment", data)
}

//物流
export function orderTraces(id : any) {
    return get("order/orderTraces", {id}, true)
}

//确认收货
export function confirmOrder(id : any) {
    return post("order/confirm", {id})
}

// 获取评价信息
export function getCommentInfo(data: any) {
    return get("goods_comment/getGoods", data);
}

// 获取售后列表
export function getAfterSaleList(data : any) {
    return get("after_sale/lists", data);
}

// 申请售后
export function applyAfterSale(data : any) {
    return post("after_sale/add", data)
}

// 获取商品信息
export function getGoodsInfo(data : any) {
    return get("after_sale/goodsInfo", data)
}

// 填写快递信息
export function inputExpressInfo(data : any) {
    return post("after_sale/express", data)
}

// 撤销申请
export function cancelApply(data : any) {
    return post("after_sale/cancel", data)
}

// 售后详情
export function afterSaleDetail(data : any) {
    return get("after_sale/detail", data, true)
}

// 重新申请
export function applyAgain(data : any) {
    return post("after_sale/again", data)
}

// 退出登录
export function userLogout(data: any) {
    return post("account/logout", data)
}

// 获取个人详情
export function getUserInfo() {
    return get('user/info')
}

// 设置个人信息
export function setUserInfo(data: any) {
    return post('user/setInfo', data)
}

// 更换手机号
export function changeUserMobile(data: any) {
    return post('user/changeMobile', {...data, client: client});
}

// 积分明细
export function getAccountLog(data: any) {
    return get("user/accountLog", data)
}

// 获取评价列表
export function getOrderCommentList(data: any) {
    return get("goods_comment/getOrderGoods", data)
}

//会员中心
export function getLevelList() {
    return get('user_level/lists');
}

// 用户钱包
export function getWallet() {
    return get("user/myWallet")
}