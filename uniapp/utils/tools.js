import {
	loadingType
} from './type'
import baseURL from '@/config/app.js'

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
export function getUrlparams(url) {
	let urlparams = url.split('?')
	if (urlparams.length === 1) {
		return ''
	}
	var newparams = {}
	for (let item of urlparams[1].split('&')) {
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
	return handleArray(data, array, optNum);
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
	dataList = JSON.parse(JSON.stringify(dataList))
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
						ini.redirectTo({
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
  return new Promise(resolve => {
    uni.uploadFile({
      url: baseURL + 'file/formimage',
      filePath: path,
      name: 'file',
      fileType: 'image',
      cloudPath: '',
      success: res => {
          console.log('uploadFile res ==> ', res)
        const {
          fileList
        } = this;
        let data = JSON.parse(res.data);

        if (data.code == 1) {
          resolve(data.data);
        }
      },
      fail: (err) => {
           console.log(err)
      }
    });
  });
}

//当前页面

export function currentPage() {
	let pages = getCurrentPages();
	let currentPage = pages[pages.length - 1];
	return currentPage;
}