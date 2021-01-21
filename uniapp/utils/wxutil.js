// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------
import { mnpLogin } from '../api/app'; //用户是否已经授权

export function isAuthorize() {
  return new Promise((resolve, reject) => {
    uni.getSetting({
      success(res) {
        if (res.authSetting['scope.userInfo']) {
          resolve(true);
        } else {
          resolve(false);
        }
      }

    });
  });
}
export function wxgetUserInfo() {
  return new Promise((resolve, reject) => {
    uni.getUserInfo({
      lang: 'zh_CN',

      success(res) {
        resolve(res);
      },

      fail(res) {
        resolve(res);
      }

    });
  });
} // 获取登录凭证（code）

export function getWxCode() {
  return new Promise((resolve, reject) => {
    uni.login({
      success(res) {
        resolve(res.code);
      },

      fail(res) {
        reject(res);
      }

    });
  });
} //微信授权登录登录 

export function wxLogin(data) {
  return new Promise(resolve => {
    getWxCode().then(code => {
      return mnpLogin({ ...data,
        code
      });
    }).then(res => {
      resolve(res);
    });
  });
} //授权后自动登录

export function wxAutoLogin() {
  return new Promise(resolve => {
    let code;
    return getWxCode().then(res => {
      code = res;
      return wxgetUserInfo();
    }).then(res => {
      if (!res.userInfo) return;
      let {
        encryptedData: encrypted_data,
        iv
      } = res;
      return mnpLogin({
        encrypted_data,
        iv,
        code
      });
    }).then(res => {
      resolve(res);
    });
  });
} // 获取wxml元素

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
} //登录提示弹窗

export function showLoginDialog() {
  uni.showModal({
    title: '提示',
    content: '不授权则无法进行更多操作，点击去授权按钮前往授权',
    confirmText: '去授权',
    success: res => {
      let {
        confirm
      } = res;

      if (confirm) {
        uni.navigateTo({
          url: '/pages/login/login'
        });
      }
    }
  });
} // 微信支付

export function wxpay(opt) {
  return new Promise((resolve, reject) => {
    uni.requestPayment({
      timeStamp: opt.timeStamp,
      // 支付签名时间戳，注意微信jssdk中的所有使用timestamp字段均为小写。但最新版的支付后台生成签名使用的timeStamp字段名需大写其中的S字符
      nonceStr: opt.nonceStr,
      // 支付签名随机串，不长于 32 位
      package: opt.package,
      // 统一支付接口返回的prepay_id参数值，提交格式如：prepay_id=***）
      signType: opt.signType,
      // 签名方式，默认为'SHA1'，使用新版支付需传入'MD5'
      paySign: opt.paySign,
      // 支付签名
      success: res => {
        resolve();
      },
      cancel: res => {
        reject();
      },
      fail: res => {
        reject();
      }
    });
  });
}