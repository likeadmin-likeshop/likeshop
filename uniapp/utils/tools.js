import {
	loadingType
} from './type'
import {
	baseURL
} from '@/config/app.js'

import store from '@/store'


//所在环境
let client = null
// #ifdef MP-WEIXIN
client = 1
// #endif

// #ifdef H5
client = isWeixinClient() ? 2 : 6
// #endif

// #ifdef APP-PLUS
client = 3;
uni.getSystemInfo({
	success: res => {
		client = res.platform == 'ios' ? 3 : 4;
	},
	fail: res => {
		client = 3
	}
})
// #endif
export {
	client
}


//节流
export const trottle = (func, time = 1000, context) => {
	let previous = new Date(0).getTime()
	return function(...args) {
		let now = new Date().getTime()
		if (now - previous > time) {
			func.apply(context, args)
			previous = now
		}
	}
}


//判断是否为微信环境
export function isWeixinClient() {
	var ua = navigator.userAgent.toLowerCase();
	if (ua.match(/MicroMessenger/i) == "micromessenger") {
		//这是微信环境
		return true;
	} else {
		//这是非微信环境
		return false;
	}
}

//判断是否为安卓环境
export function isAndroid() {
	let u = navigator.userAgent;
	return u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
}

//获取url后的参数  以对象返回
export function strToParams(str) {
	var newparams = {}
	for (let item of str.split('&')) {
		newparams[item.split('=')[0]] = item.split('=')[1]
	}
	return newparams
}

//重写encodeURL函数
export function urlencode(str) {
	str = (str + '').toString();
	return encodeURIComponent(str).replace(/!/g, '%21').replace(/'/g, '%27').replace(/\(/g, '%28').
	replace(/\)/g, '%29').replace(/\*/g, '%2A').replace(/%20/g, '+');
}


//一维数组截取为二维数组

export function arraySlice(data, array = [], optNum = 10) {
	data = JSON.parse(JSON.stringify(data))
	if (data.length <= optNum) {
		data.length > 0 && array.push(data);
		return array;
	}
	array.push(data.splice(0, optNum));
	return arraySlice(data, array, optNum);
}

//对象参数转为以？&拼接的字符
export function paramsToStr(params) {
	let p = '';
	if (typeof params == 'object') {
		p = '?'
		for (let props in params) {
			p += `${props}=${params[props]}&`
		}
		p = p.slice(0, -1)
	}
	return p
}

//分页加载
export async function loadingFun(fun, page, dataList = [], status, params) {
	// 拷贝对象
	dataList = Object.assign([], dataList)
	if (status == loadingType.FINISHED) return false
	const {
		code,
		data
	} = await fun({
		page_no: page,
		...params
	})
	uni.stopPullDownRefresh()
	if (code == 1) {
		let {
			list,
			more
		} = data
		dataList.push(...list)
		page = ++page
		if (!more) {
			status = loadingType.FINISHED
		}
		if (dataList.length <= 0) {
			status = loadingType.EMPTY
		}
	} else {
		status = loadingType.ERROR
	}
	return {
		page,
		dataList,
		status
	}
}


// 获取wxml元素

export function getRect(selector, all, context) {
	return new Promise(function(resolve) {
		let qurey = uni.createSelectorQuery();

		if (context) {
			qurey = uni.createSelectorQuery().in(context);
		}

		qurey[all ? 'selectAll' : 'select'](selector).boundingClientRect(function(rect) {
			if (all && Array.isArray(rect) && rect.length) {
				resolve(rect);
			}
			if (!all && rect) {
				resolve(rect);
			}
		}).exec();
	});
}


// 轻提示
export function toast(info = {}, navigateOpt) {
	let title = info.title || ''
	let icon = info.icon || 'none'
	let endtime = info.endtime || 2000
	if (title) uni.showToast({
		title: title,
		icon: icon,
		duration: endtime
	})
	if (navigateOpt != undefined) {
		if (typeof navigateOpt == 'object') {
			let tab = navigateOpt.tab || 1,
				url = navigateOpt.url || '';
			switch (tab) {
				case 1:
					//跳转至 table
					setTimeout(function() {
						uni.switchTab({
							url: url
						})
					}, endtime);
					break;
				case 2:
					//跳转至非table页面
					setTimeout(function() {
						uni.navigateTo({
							url: url,
						})
					}, endtime);
					break;
				case 3:
					//返回上页面
					setTimeout(function() {
						uni.navigateBack({
							delta: parseInt(url),
						})
					}, endtime);
					break;
				case 4:
					//关闭当前所有页面跳转至非table页面
					setTimeout(function() {
						uni.reLaunch({
							url: url,
						})
					}, endtime);
					break;
				case 5:
					//关闭当前页面跳转至非table页面
					setTimeout(function() {
						uni.redirectTo({
							url: url,
						})
					}, endtime);
					break;
			}

		} else if (typeof navigateOpt == 'function') {
			setTimeout(function() {
				navigateOpt && navigateOpt();
			}, endtime);
		}
	}
}

//菜单跳转
export function menuJump(item) {
	const {
		is_tab,
		link,
		link_type
	} = item
	switch (link_type) {
		case 1:
			// 本地跳转
			if (is_tab) {
				uni.switchTab({
					url: link
				});
				return;
			}
			uni.navigateTo({
				url: link
			});
			break;

		case 2:
			// webview
			uni.navigateTo({
				url: "/pages/webview/webview?url=" + link
			});
			break;

		case 3: // tabbar

	}
}

export function uploadFile(path) {
	return new Promise((resolve, reject) => {
		uni.uploadFile({
			url: baseURL + 'file/formimage',
			filePath: path,
			name: 'file',
			header: {
				token: store.getters.token
			},
			fileType: 'image',
			cloudPath: '',
			success: res => {
				console.log('uploadFile res ==> ', res)
				let data = JSON.parse(res.data);

				if (data.code == 1) {
					resolve(data.data);
				} else {
					reject()
				}
			},
			fail: (err) => {
				console.log(err)
				reject()
			}
		});
	});
}

//当前页面

export function currentPage() {
	let pages = getCurrentPages();
	let currentPage = pages[pages.length - 1];
	return currentPage || {};
}



// H5复制方法
export function copy(str) {
	// #ifdef H5
	let aux = document.createElement("input");
	aux.setAttribute("value", str);
	document.body.appendChild(aux);
	aux.select();
	document.execCommand("copy");
	document.body.removeChild(aux);
	uni.showToast({
		title: "复制成功",
	})
	// #endif

	// #ifndef H5
	uni.setClipboardData({
		data: str.toString(),
	})
	// #endif
}

export function  setTabbar() {
	const config = store.getters.appConfig
	uni.setTabBarStyle({
		color: config.navigation_setting.ust_color,
		selectedColor: config.navigation_setting.st_color,
	})
	// #ifdef APP-PLUS
	config.navigation_menu.forEach((item, index) => {
		uni.downloadFile({
		  url: item.un_selected_icon,
		  success: res => {
			uni.setTabBarItem({
				index,
				iconPath: res.tempFilePath,
			})
		  }
		});
		uni.downloadFile({
		  url: item.un_selected_icon,
		  success: res => {
			uni.setTabBarItem({
				index,
				iconPath: res.tempFilePath,
			})
		  }
		});
		uni.downloadFile({
		  url: item.selected_icon,
		  success: res => {
			uni.setTabBarItem({
				index,
				selectedIconPath: res.tempFilePath,
			})
		  }
		});
	})
	// #endif
	// #ifndef APP-PLUS
	config.navigation_menu.forEach((item, index) => {
		uni.setTabBarItem({
			index,
			text: item.name,
			iconPath: item.un_selected_icon,
			selectedIconPath: item.selected_icon,
			fail(res) {
				console.log(res)
			},
			success(res) {
				console.log(res)
			}
		})
	})
	// #endif
	uni.showTabBar()
}

// tabbar页面路径
export const tabbarList = [
	'pages/shop_cart/shop_cart',
	'pages/user/user',
	'pages/index/index',
	'pages/sort/sort',
]
// 登录注册相关
export const acountList = [
	'pages/login/login',
	'pages/forget_pwd/forget_pwd',
	'pages/register/register'
]
