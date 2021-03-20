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

//个人中心
export function getUser() {
    return request.get('user/center')
}

//用户领取优惠券
export function getCoupon(id) {
    return request.post('coupon/getCoupon', {id})
}


// 地址列表
export function getAddressLists() {
    return request.get('user_address/lists')
}

// 添加编辑地址
export function editAddress(data) {
    return request.post('user_address/update', data)
}

export function addAddress(data) {
    return request.post('user_address/add', data)
}

// 删除地址
export function delAddress(id) {
    return request.post('user_address/del', {id})
}

// 获取单个地址
export function getOneAddress(id) {
    return request.get('user_address/detail', {params: {id}})
}

// 获取默认地址
export function getDefaultAddress(id) {
    return request.get('user_address/getDefault',{params: {id}})
}

// 设置默认地址
export function setDefaultAddress(id) {
    return request.post('user_address/setDefault', {id})
}

//传省市区字符串判读是否有code
export function hasRegionCode(data) {
    return request.post('user_address/handleRegion',  data)
}

//我的优惠券
export function getMyCoupon(data) {
    return request.get('coupon/myCoupon', {
        params: data
    })
}

// 获取商品的收藏列表
export function getCollectGoods(data) {
    return request.get('collect/getCollectGoods', {
        params: data
    })
}

// 商品的增添取消收藏
export function collectGoods(data) {
    return request.post('collect/handleCollectGoods', data)
}

//删除订单
export function delOrder(id) {
    return request.post('order/del', {id})
}
//订单列表
export function getOrderList(data) {
    return request.get('order/lists', {params: data})
}
//订单详情
export function getOrderDetail(id) {
    return request.get('order/detail', {id})
}

//取消订单
export function cancelOrder(id) {
    return request.post('order/cancel', {id})
}

//物流
export function orderTraces(id) {
    return request.get("order/orderTraces", {params: {id}})
}

//确认收货
export function confirmOrder(id) {
    return request.post("order/confirm", {id})
}

// 充值模板
export function rechargeTemplate() {
    return request.get("recharge/rechargeTemplate");
}

// 获取售后列表
export function getAfterSaleList(params) {
    return request.get("after_sale/lists", {params});
}

// 申请售后
export function applyAfterSale(data) {
    return request.post("after_sale/add", data)
}

// 获取商品信息
export function getGoodsInfo(params) {
    return request.get("after_sale/goodsInfo", {params})
}

// 填写快递信息
export function inputExpressInfo(data) {
    return request.post("after_sale/express", data)
}

// 撤销申请
export function cancelApply(data) {
    return request.post("after_sale/cancel", data)
}

// 售后详情
export function afterSaleDetail(params) {
    return request.get("after_sale/detail", {params})
}

// 重新申请
export function applyAgain(data) {
    return request.post("after_sale/again", data)
}

// 账户明细 积分明细
export function getAccountLog(params) {
    return request.get("user/accountLog", {params})
}

//充值
export function recharge(data) {
    return request.post("recharge/recharge", data)
}

// 填写邀请码
export function inputInviteCode(data) {
    return request.post("distribution/code", data)
}

// 分销会员申请
export function applyVip(data) {
    return request.post("distribution/apple", data)
}

// 最新分销会员申请详情
export function applyVipDetail() {
    return request.post("distribution/appledetail")
}

// 邀请人信息
export function getInviteInfo() {
    return request.get("distribution/myleader")
}

// 获取评价信息
export function getCommentInfo(data) {
    return request.get("goods_comment/getGoods", {params: data});
}

// 分销主页
export function getPromoteHome() {
    return request.get("distribution/index")
}

// 分销订单列表
export function getPromoteOrder(data) {
    return request.get("distribution/order", {params: data})
}

//商品评价
export function goodsComment(data) {
    return request.post("goods_comment/addGoodsComment", data)
}

// 获取个人详情
export function getUserInfo() {
    return request.get('user/info')
}

// 设置个人信息
export function setUserInfo(data) {
    return request.post('user/setInfo', data)
}

// 更换手机号
export function changeUserMobile(data) {
    // #ifdef MP-WEIXIN
    return request.post('user/getMobile', {...data, client: client});
    // #endif
    // #ifdef H5
    return request.post("user/changeMobile", {...data, client: client})
    // #endif
}

//会员中心
export function getLevelList() {
    return request.get('user_level/lists');
}

// 获取活动专区商品列表
export function getActivityGoodsLists(data) {
    return request.get("activity_area/activityGoodsList", {params: data})
}

// 邀请海报
export function getInviteBanner(data) {
    return request.get("share/userPoster", {params: {...data, client: 1}})
}

// 用户钱包
export function getWallet() {
    return request.get("user/myWallet")
}

// 退出登录
export function userLogout(data) {
    return request.post('account/logout', data)
}