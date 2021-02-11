// #ifdef H5
import weixin from "@/js_sdk/jweixin-module";
import {
	isAndroid
} from "./tools"
import {
	getJsconfig,
	getCodeUrl,
	wechatLogin
} from '@/api/react_native'
import store from '../store'

class WechatH5 {

	//获取微信配置url
	signLink() {
		if (typeof window.entryUrl === 'undefined' || window.entryUrl === '') {
			window.entryUrl = location.href.split('#')[0]
		}
		return isAndroid() ? location.href.split('#')[0] : window.entryUrl;
	}
	//微信sdk配置
	config() {
		getJsconfig().then(res => {
			if (res.code == 1) {
				let config = res.data.config
				weixin.config({
					debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
					appId: config.appId, // 必填，公众号的唯一标识
					timestamp: config.timestamp, // 必填，生成签名的时间戳
					nonceStr: config.nonceStr, // 必填，生成签名的随机串
					signature: config.signature, // 必填，签名
					jsApiList: config.jsApiList // 必填，需要使用的JS接口列表
				});
			}
		})
	}

	//获取微信登录url
	getWxUrl() {
		console.log(weixin)
		weixin.ready(() => {
			getCodeUrl().then(res => {
				if (res.code == 1) {
					location.href = res.data.url
				}
			})
		})
	}

	//微信授权
	authLogin(code) {
		return new Promise((resolve, reject) => {
			wechatLogin({
					code
				})
				.then(res => {
					if(res.code == 1) {
						store.commit("LOGIN", {
							token: res.data.token
						});
					}
					resolve();
				})
		});
	}

	//微信分享
	share(option) {
		weixin.ready(() => {
			const {
				shareTitle,
				shareLink,
				shareImage,
				shareDesc
			} = option
			weixin.updateTimelineShareData({
				title: shareTitle, // 分享标题
				link: shareLink, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
				imgUrl: shareImage, // 分享图标
				success: function(res) {
					// 设置成功
				}
			});
			// 发送给好友
			weixin.updateAppMessageShareData({
				title: shareTitle, // 分享标题
				link: shareLink, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
				imgUrl: shareImage, // 分享图标
				desc: shareDesc,
				success: function(res) {
					// 设置成功
				}
			});
			// 发送到tx微博
			weixin.onMenuShareWeibo({
				title: shareTitle, // 分享标题
				link: shareLink, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
				imgUrl: shareImage, // 分享图标
				desc: shareDesc,
				success: function(res) {
					// 设置成功
				}
			})
		})
	}
}

export default new WechatH5()
// #endif
