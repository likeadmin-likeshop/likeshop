// #ifdef H5
import weixin from "@/js_sdk/jweixin-module";
import {
	isAndroid
} from "./tools"
import {
	getJsconfig,
	getCodeUrl,
	wechatLogin
} from '@/api/app'
import store from '../store'
import Cache from './cache'
import {inputInviteCode} from "@/api/user"
class Wechath5 {

	//获取微信配置url
	signLink() {
		if (typeof window.entryUrl === 'undefined' || window.entryUrl === '') {
			window.entryUrl = location.href.split('#')[0]
		}
		return isAndroid() ? location.href.split('#')[0] : window.entryUrl;
	}
	//微信sdk配置
	config() {
		return new Promise((resolve) => {
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
					resolve()
				}
			})
		})
	}

	//获取微信登录url
	getWxUrl() {
		getCodeUrl().then(res => {
			if (res.code == 1) {
				location.href = res.data.url
			}
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
						resolve(res.data);
					}
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
	wxPay(opt) {
		return new Promise((reslove, reject) => {
			weixin.ready(() => {
				weixin.chooseWXPay({
					timestamp: opt.timeStamp, // 支付签名时间戳，注意微信jssdk中的所有使用timestamp字段均为小写。但最新版的支付后台生成签名使用的timeStamp字段名需大写其中的S字符
					nonceStr: opt.nonceStr, // 支付签名随机串，不长于 32 位
					package: opt.package, // 统一支付接口返回的prepay_id参数值，提交格式如：prepay_id=***）
					signType: opt.signType, // 签名方式，默认为'SHA1'，使用新版支付需传入'MD5'
					paySign: opt.paySign, // 支付签名
					success: (res) => {
						reslove('success')
					},
					cancel: (res) => {
						reslove('fail')
					},
					fail: (res) => {
						reslove('fail')
					},
				});
			});
		})
		
	}
	
	getWxAddress() {
		return new Promise((reslove, reject) => {
			weixin.ready(() => {
				weixin.openAddress({
					success: (res) => {
						reslove(res)
					},
				})
			})
		})
	}
}

export default new Wechath5()
// #endif
