// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

import { weichatLogin, getCodeUrl} from '@/api/app'
import Vue from 'vue'
import store from "../store";
import router from "../router";
import {getUrlparams} from './relUrl'
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

export function appSource() {
	const u = navigator.userAgent;
	const isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
	if (isiOS) {
		// 3
		return "ios";
	} else {
		// 4
		return "andriod";
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

export function login(isPush, backPath) {
	store.commit("LOGOUT");
	const { fullPath, name } = router.currentRoute;
	Vue.ls.set("back_path", backPath || fullPath)
	if (isWeixinClient()) {
		wxlogin()
	} else {
		if (name !== "Login") {
			isPush
				? router.push({ name: "login" })
				: router.replace({ name: "login" });
		}
	}
}


export function wxlogin() {
	const href = window.location.href
	const {code} = getUrlparams(href);
	if (!code) {
		getCodeUrl({url: href}).then(res => {
			if(res.code == 1) {
				location.href = res.data.url
			}
		})
	}
}

export function getWxLogin(code) {
	return new Promise((resolve) => {
		weichatLogin({
			code,
		}).then(res => {
			if(res.code == 1) {
				store.commit("LOGIN", res.data);
				resolve()
			}
		})
	})
}
	