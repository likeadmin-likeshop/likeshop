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



import wx from "weixin-js-sdk"
import { urlencode, getUrlparams } from '@/utils/relUrl'
import { jsconfig, getCodeUrl } from '@/api/app'
import { getGoodsDetail } from "@API/store"
import { Toast } from "vant";
//  获取wxjssdk配置参数
export function wxjsconfig(to) {
	let url = location.href
	jsconfig({ url }).then(res => {
		if (res) {
			let config = res.data.config
			wx.config({
				debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
				appId: config.appId, // 必填，公众号的唯一标识
				timestamp: config.timestamp, // 必填，生成签名的时间戳
				nonceStr: config.nonceStr, // 必填，生成签名的随机串
				signature: config.signature,// 必填，签名
				jsApiList: config.jsApiList// 必填，需要使用的JS接口列表
			});
			wx.ready(function () {
				_share(to)
			});

		}
	})
}


// 批量隐藏功能按钮接口
export function wxHideMenuItems() {
	wx.ready(function () {
		// config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。
		wx.hideMenuItems({
			menuList: ["menuItem:share:appMessage", "menuItem:share:timeline", "menuItem:share:qq", "menuItem:share:weiboApp", "menuItem:favorite", "menuItem:share:facebook", "menuItem:share:QZone"] // 要隐藏的菜单项，只能隐藏“传播类”和“保护类”按钮，所有menu项见附录3
		});
	});
}

function _share(to) {
	let goodsImage = "";
	let goodsName = "";
	if (to.name == "goodsDetail") {
		getGoodsDetail({ id: to.query.id }).then(res => {
			if (res.code == 1) {
				goodsImage = res.data.image;
				goodsName = res.data.name;
				const shareTitle = "likeShop";
				const shareLink = window.location.origin + to.fullPath;
				const shareImage = goodsImage;
				const shareDesc = goodsName;
				// 朋友圈 QQ空间
				wx.updateTimelineShareData({
					title: shareTitle, // 分享标题
					link: shareLink, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
					imgUrl: shareImage, // 分享图标
					desc: shareDesc,
					success: function (res) {
						// 设置成功
					}
				});
				// 发送给好友
				wx.updateAppMessageShareData({
					title: shareTitle, // 分享标题
					link: shareLink, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
					imgUrl: shareImage, // 分享图标
					desc: shareDesc,
					success: function (res) {
						// 设置成功
					}
				});
				// 发送到tx微博
				wx.onMenuShareWeibo({
					title: shareTitle, // 分享标题
					link: shareLink, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
					imgUrl: shareImage, // 分享图标
					desc: shareDesc,
					success: function (res) {
						// 设置成功
					}
				})
			}
		})
		return;
	}
	else {
		const shareTitle = "likeShop";
		const shareLink = to.name == "goodsDetail" ? window.location.origin + to.fullPath : window.location.origin;
		const shareImage = goodsImage ? goodsName : "";
		const shareDesc = goodsName ? goodsName : "";

		// 朋友圈 QQ空间
		wx.updateTimelineShareData({
			title: shareTitle, // 分享标题
			link: shareLink, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
			imgUrl: shareImage, // 分享图标
			desc: shareDesc,
			success: function (res) {
				// 设置成功
			}
		});
		// 发送给好友
		wx.updateAppMessageShareData({
			title: shareTitle, // 分享标题
			link: shareLink, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
			imgUrl: shareImage, // 分享图标
			desc: shareDesc,
			success: function (res) {
				// 设置成功
			}
		});
		// 发送到tx微博
		wx.onMenuShareWeibo({
			title: shareTitle, // 分享标题
			link: shareLink, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
			imgUrl: shareImage, // 分享图标
			desc: shareDesc,
			success: function (res) {
				// 设置成功
			}
		})
	}
}

export function wxPay(opt) {
	return new Promise((reslove, reject) => {
		wx.ready(() => {
			wx.chooseWXPay({
				timestamp: opt.timeStamp, // 支付签名时间戳，注意微信jssdk中的所有使用timestamp字段均为小写。但最新版的支付后台生成签名使用的timeStamp字段名需大写其中的S字符
				nonceStr: opt.nonceStr, // 支付签名随机串，不长于 32 位
				package: opt.package, // 统一支付接口返回的prepay_id参数值，提交格式如：prepay_id=***）
				signType: opt.signType, // 签名方式，默认为'SHA1'，使用新版支付需传入'MD5'
				paySign: opt.paySign, // 支付签名
				success: (res) => {
					reslove()
				},
				cancel: (res) => {
					reject()
				},
				fail: (res) => {
					reject()
				},
			});
		});
	})
	
}