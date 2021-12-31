// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------





import wechath5 from './wechath5'
import {
	currentPage,
	isWeixinClient
} from './tools'
export function wxpay(opt) {
	//#ifdef  H5
	if(isWeixinClient()) {
		return wechath5.wxPay(opt)
	}else {
		console.log(opt)
		location.href=opt
	}
	// #endif
	//#ifndef H5
	return new Promise((resolve, reject) => {
		// #ifdef MP-WEIXIN
		const params = {
			timeStamp: opt.timeStamp,
			// 支付签名时间戳，注意微信jssdk中的所有使用timestamp字段均为小写。但最新版的支付后台生成签名使用的timeStamp字段名需大写其中的S字符
			nonceStr: opt.nonceStr,
			// 支付签名随机串，不长于 32 位
			package: opt.package,
			// 统一支付接口返回的prepay_id参数值，提交格式如：prepay_id=***）
			signType: opt.signType,
			// 签名方式，默认为'SHA1'，使用新版支付需传入'MD5'
			paySign: opt.paySign,
		}
		// #endif
		// #ifdef APP-PLUS
		const params = {
			orderInfo: opt
		}
		// #endif
		console.log(params)
		uni.requestPayment({
			provider: 'wxpay',
			...params,
			success: res => {
				resolve('success');
			},
			cancel: res => {
				resolve('fail');
			},
			fail: res => {
				resolve('fail');
			}
		});
	});
	// #endif
}

export function alipay(opt) {

	//#ifdef  H5
	const div = document.createElement('div')
	console.log(opt)
	/* 此处form就是后台返回接收到的数据 */
	div.innerHTML = opt
	document.body.appendChild(div)
	document.forms[0].submit()
	return
	// #endif
	// #ifdef APP-PLUS
	return new Promise((resolve, reject) => {
		const params = {
			orderInfo: opt
		}
		console.log(params)
		uni.requestPayment({
			provider: 'alipay',
			...params,
			success: res => {
				resolve('success');
			},
			cancel: res => {
				console.log(res)
				resolve('fail');
			},
			fail: res => {
				console.log(res)
				resolve('fail');
			}
		});
	})
	// #endif

}
