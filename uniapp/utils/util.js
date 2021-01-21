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

// 轻提示
export function Tips(info = {}, navigateOpt) {
	let title = info.title || ''
	let icon = info.icon || 'none'
	let endtime = info.endtime || 2000
	if (title) wx.showToast({ title: title, icon: icon, duration: endtime })
	if (navigateOpt != undefined) {
		if (typeof navigateOpt == 'object') {
			let tab = navigateOpt.tab || 1, url = navigateOpt.url || '';
			switch (tab) {
				case 1:
					//跳转至 table
					setTimeout(function () {
						wx.switchTab({
							url: url
						})
					}, endtime);
					break;
				case 2:
					//跳转至非table页面
					setTimeout(function () {
						wx.navigateTo({
							url: url,
						})
					}, endtime);
					break;
				case 3:
					//返回上页面
					setTimeout(function () {
						wx.navigateBack({
							delta: parseInt(url),
						})
					}, endtime);
					break;
				case 4:
					//关闭当前所有页面跳转至非table页面
					setTimeout(function () {
						wx.reLaunch({
							url: url,
						})
					}, endtime);
					break;
				case 5:
					//关闭当前页面跳转至非table页面
					setTimeout(function () {
						wx.redirectTo({
							url: url,
						})
					}, endtime);
					break;
			}

		} else if (typeof navigateOpt == 'function') {
			setTimeout(function () {
				navigateOpt && navigateOpt();
			}, endtime);
		}
	}
}


export function getUrlParams(params, s1 = '&', s2 = '=') {
	let value = {};
	if (typeof params != 'string') return {}
	params = params.split(s1);
	for (let prop in params) {
		let item = params[prop].split(s2);
		value[item[0]] = item[1];
	}
	return value;
}


export const trottle = (func, time = 1000, context) => {
	let previous = new Date(0).getTime()
	return function (...args) {
		let now = new Date().getTime()
		if (now - previous > time) {
			func.apply(context, args)
			previous = now
		}
	}
}

export const debounce = (func, time = 1000, context) => {
	let timer = null
	return function (...args) {
		if (timer) {
			clearTimeout(timer)
		}
		console.log(this)
		timer = setTimeout(() => {
			func.apply(context, args)
		}, time)
	}
}

//跳转
export const navigateTo = (url, params) => {

	let p = '';
	if (params) {
		p = '?'
		for (let props in params) {
			p += `${props}=${params[props]}&`
		}
		p = p.slice(0,-1)
	}

	wx.navigateTo({
		url: url + p
	})
}