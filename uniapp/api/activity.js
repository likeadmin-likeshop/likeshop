import request from '@/utils/request'

//获取商品的优惠券
export function getGoodsCoupon(data) {
  return request.get("coupon/getGoodsCoupon",  {params: data});
} 

//领券中心
export function getCouponList(data) {
	return request.get("coupon/couponList", {params: data});
}