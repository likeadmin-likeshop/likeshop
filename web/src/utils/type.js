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


// 订单状态 

export const orderType = {
    ALL: 'all', //全部
    PAY: 'pay', //待付款
    DELIVERY: 'delivery',//待收货
    FINISH: 'finish',//待收货
    CLOSE: 'close'//待收货
}
//支付方式
export const payWayType = {
    wechat: 1
}

// 售后状态
export const AfterSaleType = {
    // 售后申请 
    NORMAL: 'normal',
    // 处理中
    HANDLING: 'apply',
    // 已处理
    FINISH: 'finish'
}

// 售后退款操作
export const refundOPtType = {
    // 仅退款
    ONLY_REFUND: 0,
    // 退货退款
    REFUNDS: 1
}

export const SMSType = {
    REGISTER: 'ZCYZ',
    FINDPWD: 'ZHMM',
    LOGIN: 'YZMDL',
    CHANGE_MOBILE: 'BGSJHM'
}

export const userOrderPromoteOrder = {
    ALL: '0',
    WAIT_RETURN: '1',
    HANDLED: '2',
    INVALED: '3'
}

export const bargainCodeType = {
    ALL: "all",
    // 进行中
    RUNNING: "running",
    // 成功
    SUCCESS: "success",
    // 失败
    FAIL: "fail"
}

export const BargainStatus = {
    NORMAL: 0,
    SUCCESS: 1,
    FAIL: 2
}


export const FansType = {
    ALL: 'all',
    FIRST: 'first',
    SECOND: 'second'
}

export const SortType = {
    //降序
    DESC: "desc",
    // 升序
    ASC: "asc",
    // 无排序方式
    NONE: "",
};