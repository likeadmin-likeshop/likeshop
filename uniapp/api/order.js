import request from '@/utils/request'


//下单
export function orderBuy(data, isGroup) {
  let url =  "order/buy";
  return request.post(url, { ...data,
    order_source: 1
  });
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
    return request.get('order/detail', {params: {id}})
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
