
//分页状态
export const loadingType = {
  LOADING: 'loading',
  FINISHED: 'finished',
  ERROR: 'error',
  EMPTY: 'empty'
}; 

// 收藏状态
export const CollectType = {
    COLLECTION: 1,
    CANCEL_COLLECTION: 0
}

//支付方式
export const payWay = {
	WECHAT: 1,
	ALIPAY: 2,
	BALANCE:3
}

export const orderType = {
 ALL: 'all',
  //全部
 PAY: 'pay',
  //待付款
 DELIVERY: 'delivery',
  //待收货
 FINISH: 'finish',
  //待收货
 CLOSE: 'close' //待收货

};
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
export const refundOptType = {
    // 仅退款
    ONLY_REFUND: 0,
    // 退货退款
    REFUNDS: 1
}

// 短信发送
export const SMSType = {
    // 注册
    REGISTER: 'ZCYZ',
    // 找回密码
    FINDPWD: 'ZHMM',
    // 登陆
    LOGIN: 'YZMDL',
    // 更换手机号
    CHANGE_MOBILE: 'BGSJHM',
    // 绑定手机号
    BIND: 'BDSJHM'
}

// 分销订单状态
export const userOrderPromoteOrder = {
    ALL: 0,
    WAIT_RETURN: 1,
    HANDLED: 2,
    INVALED: 3
}

// 排序类型
export const SortType = {
    NONE: '',
    ASC: 'asc',
    DESC: 'desc'
}

// 粉丝类型 
export const FansType = {
    ALL: 'all',
    FIRST: 'first',
    SECOND: 'second'
}


export const groupType = {
  ALL: -1,
  PROGESS: 0,
  SUCCESS: 1,
  FAIL: 2
};

export const bargainType = {
    ALL: -1,
    BARGINNING: 0,
    SUCCESS: 1,
    FAIL: 2
}

export const withdrawType = {
    // 账户余额
    ACCOUNT: 1,
    // 微信零钱
    WECHAT: 2,
    // 微信收款码
    PAY_WECHAT: 3,
    // 支付宝收款码
    PAY_ALIPAY: 4,
	BANK: 5
}