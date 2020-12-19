import Vue from 'vue'
import router from '@/router';
import { wxjsconfig } from '@/utils/wxjssdk'
import { login, isWeixinClient, getWxLogin } from '@/utils/utils'
import {inputInviteCode} from "@API/user"
import $store from "./store";
router.beforeEach(async (to, form, next) => {
	const { title, auth } = to.meta;
	const { code, invite_code } = to.query
	document.title = title
	if(invite_code) {
		Vue.ls.set("INVITE_CODE", invite_code)
	}
	if(code) return getWxLogin(code).then(() => {
		inputInviteCode({code: invite_code}).then((res) => {
			Vue.ls.remove("INVITE_CODE")
			next()
		})
	})
	if(auth === true && !$store.state.token) {
		if (form.name === "login") return;
		return login(true, to.fullPath);
	}
	if(Vue.ls.get("INVITE_CODE")) {
		inputInviteCode({code: invite_code}).then(res => {
			Vue.ls.remove("INVITE_CODE")
		});
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