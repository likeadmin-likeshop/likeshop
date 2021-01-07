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


import Vue from 'vue'
import router from '@/router';
import { wxjsconfig } from '@/utils/wxjssdk'
import { login, isWeixinClient, getWxLogin } from '@/utils/utils'
import {inputInviteCode} from "@API/user"
import $store from "./store";
router.beforeEach(async (to, form, next) => {
	const { title, auth } = to.meta;
	const { code } = to.query
	document.title = title
	if(code) return getWxLogin(code).then(() => {
		next()
	})
	if(auth === true && !$store.state.token) {
		// if (form.name === "login") {
		// 	return;
		// }
		return login(true, to.fullPath);
	}
	next()
})

router.beforeResolve((to, from, next) => {
	if (isWeixinClient()) {
		var u = navigator.userAgent;
		var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
		// XXX: 修复iOS版微信HTML5 History兼容性问题
		if (isiOS && ('/mobile' + to.path) !== location.pathname) {
			// 此处不可使用location.replace
			location.assign('/mobile' + to.fullPath)
		} else {
			next()
		}
	} else {
		next()
	}
	// 配置jssdk
})
router.afterEach((to, from) => {
	wxjsconfig(to)
	// 配置jssdk
})