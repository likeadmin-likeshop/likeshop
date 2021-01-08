import * as WeChat from 'react-native-wechat-lib';
import { Toast } from '@ant-design/react-native';
const appid = ''
const universalLinks = ''
export const WXRegisterApp = () => {
    WeChat.registerApp(appid, universalLinks).then(res => {
       console.log(res)
    })
}

export const isWXAppInstalled = () => {
    return new Promise((resolve) => {
        WeChat.isWXAppInstalled().then((res) => {
            if(res) {
                resolve(res)
            }else {
                Toast.info('没有安装微信，请您安装微信之后再试')
            }
        })
    })
}
export const WXPay = (opt:any) => {
    return new Promise(async(resolve, reject) => {
        let isWX = await isWXAppInstalled()
        if(isWX) {
            WeChat.pay({
                partnerId: opt.partnerid,  // 商家向财付通申请的商家id
                prepayId: opt.prepayid,   // 预支付订单
                nonceStr: opt.noncestr,   // 随机串，防重发
                timeStamp: opt.timestamp,  // 时间戳，防重发
                package: opt.package,    // 商家根据财付通文档填写的数据和签名
                sign: opt.sign        // 商家根据微信开放平台文档对数据做的签名
            }).then(res => {
                if(res.errCode === 0) {
                    resolve(true)
                }
            }).catch((res => {
                reject()
            }))
        }
    })
}

export default WeChat