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

// 小程序授权登录
export function mnpLogin(data) {
    return request.post('account/mnpLogin', data)
}

//预支付接口
export function prepay(data) {
    return request.post('payment/prepay', {...data, order_source: 1})
}

// 获取签到列表
export function getSignList() {
    return request.get("sign/lists")
}

// 签到
export function userSign() {
    return request.get("sign/sign")
}


// 获取签到规则
export function getSignRule() {
    return request.get("sign/rule")
}

// 获取服务协议
export function getServerProto() {
    return request.get("policy/service")
}

// 获取隐私政策
export function getPrivatePolicy() {
    return request.get("policy/privacy")
}

// 获取售后保障
export function getAfterSaleGuar() {
    return request.get('policy/afterSale')
}

// 获取首页或个人中心菜单
export function getMenu(data) {
    return request.get('menu/lists', {...data, client: 1})
}

// 获取送优惠券列表
export function getCouponPopList() {
    return request.get("coupon/registerSendCoupon");
}

// 领取注册赠送的优惠券
export function getRegisterCoupon(data) {
    return request.post("coupon/getRegisterCoupon", data)
}

//小程序模板消息订阅
export function getMnpNotice(data) {
    return request.get("subscribe/lists", data);
}