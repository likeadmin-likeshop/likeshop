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
    wechat: 1,
    balance: 3
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
    CHANGE_MOBILE: 'YZMDL'
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