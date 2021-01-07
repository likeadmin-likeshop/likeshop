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
// 订单状态 

export const orderType = {
    ORDER_ALL: 'all', //全部
    ORDER_PAY: 'pay', //待付款
    ORDER_DELIVERY: 'delivery',//待收货
    ORDER_FINISH: 'finish',//待收货
    ORDER_CLOSE: 'close'//待收货
}

// 分销订单状态
export const userOrderPromoteOrder = {
    ALL: "0",
    WAIT_RETURN: "1",
    HANDLED: '2',
    INVALED: '3'
}

//分页状态
export const loadingType = {
    LOADING: 'loading',
    FINISHED: 'finished',
    ERROR: 'error',
    EMPTY: 'empty'
}

// 选择类型
export const SelectType = {
    // 全选
    SELECT_ALL: 1,
    // 取消全选
    CANCEL_SELECT_ALL: 2,
    // 选中店铺
    SELECT_SHOP: 3,
    // 取消选中店铺
    CANCEL_SELECT_SHOP: 4,
    // 单选/取消 选中一样商品
    SELECT_SINGLE: 5
}

// 选择状态
export const SelectStatus = {
    NOT_SELECT: 0,
    SELECTED: 1
}

// 购物车状态
export const CarType = {
    EMPTY: 1,
    HAVE: 2
}

// 收藏状态
export const CollectType = {
    COLLECTION: 1,
    CANCEL_COLLECTION: 0
}

// 秒杀时间段状态
export const SeckillTimeType = {
    // 已结束
    HAVE_BEEN_END: 0,
    // 抢购中
    SECKILLING: 1,
    // 未开始
    HAVE_NOT_BEGIN: 2
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

// 售后详情状态
export const AfterSaleDetailType = {
    // 申请退款
    APPLY_REFUND: 0,
    // 商家拒绝
    STORE_REFUSE: 1,
    // 商品待退货
    WAIT_GOODS_REFUNDS: 2,
    // 商家待收货
    STORE_WAIT_EXPRESS: 3,
    // 商家拒收货
    STORE_REFUSE_EXPRESS: 4,
    // 等待退款
    WAIT_REFUND: 5,
    // 退款成功
    REFUND_SUCCESS: 6
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


export const payWay = {
    wechat: 1
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
    NONE: '',
    ASC: 'asc',
    DESC: 'desc'
}