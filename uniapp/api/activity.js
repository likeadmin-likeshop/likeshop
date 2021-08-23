import request from '@/utils/request'
import {client} from '@/utils/tools'
//获取商品的优惠券
export function getGoodsCoupon(data) {
  return request.get("coupon/getGoodsCoupon",  {params: data});
} 

//领券中心
export function getCouponList(data) {
	return request.get("coupon/couponList", {params: data});
}

// 获取活动专区商品列表
export function getActivityGoodsLists(data) {
    return request.get("activity_area/activityGoodsList", {params: data})
}


// 获取秒杀时间段
export function getSeckillTime() {
	return request.get("seckill/seckillTime");
}

// 获取秒杀商品
export function getSeckillGoods(params) {
	return request.get("seckill/seckillGoods", {params})
}



export function getGroupList(params) {
  return request.get('team/teamGoodsList', {params});
} 

//我的拼团
export function getUserGroup(params) {
  return request.get('user/myTeam', {params});
} 

//拼团详情
export function getTeamInfo(params) {
  return request.get('team/teamInfo', {params});
} 

//参与拼团验证
export function teamCheck(data) {
  return request.post('team/check', data);
}

 //拼团下单
export function teamBuy(data) {
  return request.post("team/buy",data);
}

// 获取砍价列表
export function getBargainList(data) {
    return request.get('bargain/lists', {params: data})
}

// 获取砍价详情
export function getBargainDetail(data) {
    return request.get('bargain/detail', {params: data})
}

// 获取砍价成功人数
export function getBargainNumber() {
    return request.get("bargain/barginNumber")
}

// 发起砍价
export function launchBargain(data) {
    return request.post('bargain/sponsor', data)
}

// 获取砍价活动商品列表
export function getBargainActivityList(data) {
    return request.get('bargain/orderList', {params: data})
}

// 砍价详情
export function getBargainActivityDetail(data) {
    return request.get("bargain/bargainDetail", {params: data})
}

// 砍价海报
export function getBargainPost(data) {
    return request.get("share/shareBargain", {params: data})
}

// 好友助力
export function helpBargain(data) {
    return request.post('bargain/knife', data)
}

// 关闭结算订单
export function closeBargainOrder(data) {
    return request.get("bargain/closeBargain", {params: data})
}