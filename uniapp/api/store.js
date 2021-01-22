import request from '@/utils/request'

//获取首页数据接口
export function getHome() {
	return request.get('index/lists')
}

//获取菜单
export function getMenu(data) {
	return request.get('menu/lists', {
		params: {...data, client: 1},
	});
}

//广告位
export function getAdList(data) {
	return request.get('ad/lists', {
		params: data
	});
}

// 购物车列表
export function getCartList() {
	return request.get('cart/lists')
}


//获取好物优选商品列表
export function getBestList(data) {
	return request.get('goods/getBestList', {
		params: data
	});
}

// 商品分类
export function getCatrgory() {
	return request.get('goods_category/lists');
}


//商品详情
export function getGoodsDetail(data) {
	return request.get('goods/getGoodsDetail', {
		params: data
	});
}
