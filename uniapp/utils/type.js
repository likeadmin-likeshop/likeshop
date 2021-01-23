
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