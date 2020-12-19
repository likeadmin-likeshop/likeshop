import request from '@/utils/request'


//个人中心
export function getUser() {
    return request.get('user/center')
}

// 获取商品的收藏列表
export function getCollectGoods(data) {
    return request.get('collect/getCollectGoods', data)
}

// 获取店铺的收藏列表
export function getCollectShop(data) {
    return request.get('collect/getCollectShop', data)
}

// 商品的增添取消收藏
export function handleCollectGoods(data) {
    return request.post('collect/handleCollectGoods', data)
}

// 店铺的增添取消收藏
export function handleCollectShop(data) {
    return request.post('collect/handleCollectShop', data)
}

// 获取地址列表
export function getAddressLists() {
    return request.get('user_address/lists')
}

// 添加编辑地址
export function editAddress(data) {
    return request.post('user_address/update', data)
}

// 添加地址
export function addAddress(data) {
    return request.post('user_address/add', data)
}

// 删除地址
export function delAddress(id) {
    return request.post('user_address/del', {id})
}

// 获取单个地址
export function getOneAddress(params) {
    return request.get('user_address/detail', {params})
}

// 获取默认地址
export function getDefaultAddress(id) {
    return request.get('user_address/getDefault',{id})
}

// 设置默认地址
export function setDefaultAddress(id) {
    return request.post('user_address/setDefault', {id})
}

//将省市区名称转换成省市区id
export function convertRegionCode(data) {
    return request.post('user_address/handleRegion',  data)
}

//订单列表
export function getOrderList(params) {
    return request.get('order/lists', {params})
}

//订单详情
export function getOrderDetail(id) {
    return request.get('order/detail', {params: {id}})
}

//取消订单
export function cancelOrder(id) {
    return request.post('order/cancel', {id})
}

//确认收货
export function confirmOrder(id) {
    return request.post("order/confirm", {id})
}

//删除订单
export function delOrder(id) {
    return request.post('order/del', {id})
}

// 获取评价列表
export function getOrderCommentList(params) {
    return request.get("goods_comment/getOrderGoods", {params})
}

//物流
export function orderTraces(id) {
    return request.get("order/orderTraces", {params:{id}})
}

//商品评价
export function goodsComment(data) {
    return request.post("goods_comment/addGoodsComment", data)
}

// 获取评价信息
export function getCommentInfo(params) {
    return request.get("goods_comment/getGoods", {params});
}

// 获取商品信息
export function getGoodsInfo(params) {
    return request.get("after_sale/goodsInfo", {params})
}

// 退出登录
export function userLogout(data) {
    return request.post('account/logout', data)
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
    return request.post('user/changeMobile', {...data, client: 2});
}

// 账户明细 积分明细
export function getAccountLog(params) {
    return request.get("user/accountLog", {params})
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

// 分销主页
export function getPromoteHome() {
    return request.get("distribution/index")
}

// 分销订单列表
export function getPromoteOrder(params) {
    return request.get("distribution/order", {params})
}

// 佣金提现
export function applyWithdraw(data) {
    return request.post("withdraw/apply", data);
}

// 提现记录列表
export function getWithdrawRecords(params) {
    return request.get("withdraw/records", {params})
}

// 提现详情
export function getWithdrawDetail(params) {
    return request.get("withdraw/info", {params})
}

// 提现页信息
export function getWithdrawConfig() {
    return request.get("withdraw/config")
}

//会员中心
export function getLevelList() {
    return request.get('user_level/lists');
}

// 用户钱包
export function getWallet() {
    return request.get("user/myWallet")
}