import {loadingType} from './type'

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
			loadingType.FINISHED
		}
	}else {
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
  return new Promise(function (resolve) {
    let qurey =  uni.createSelectorQuery();

    if (context) {
      qurey = uni.createSelectorQuery().in(context);
    }

   qurey[all ? 'selectAll' : 'select'](selector).boundingClientRect(function (rect) {
      if (all && Array.isArray(rect) && rect.length) {
        resolve(rect);
      }

      if (!all && rect) {
        resolve(rect);
      }
    }).exec();
  });
} 