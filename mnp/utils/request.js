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
import { HEADER, baseURL } from '../config'
import { wxAutoLogin, isAuthorize } from '../utils/wxutil'
import { Tips } from '../utils/util'
import axios from 'wx-axios-promise'
import Toast from '../components/weapp/toast/toast';
let app = {}
const service = axios({
    url: baseURL,
    header: HEADER
})
let index = 0
async function login() {
    let isAuth = await isAuthorize()
    console.log(isAuth)
    if(!isAuth) return
    if (index <= 0) {
        index++
        wxAutoLogin().then(res => {
            if (res.code == 1) {
                index = 0
                let { token, nickname, avatar } = res.data
                wx.setStorageSync('token', token)
                wx.setStorageSync('nickname', nickname)
                wx.setStorageSync('avatar', avatar)
                let page = getCurrentPages()
                app = getApp()
                app.store.setState({
                    isLogin: true,
                });
                page[page.length - 1].onLoad()
                page[page.length - 1].onShow()
            }
        })
    }

}
service.interceptors.request.use(config => {
    let token = wx.getStorageSync("token")
    config.header.token = token
    return config
}, () => {

})
service.interceptors.response.use(
    async response => {

       if(response.statusCode == 502 || response.statusCode == 500) {
        //    return Tips({ title: '系统错误' })
       }
        if (response.data) {
            const { code, show, msg } = response.data
            if (code == 0) {
                if (show && msg) {
                    Tips({ title: msg })
                }
            } else if (code == -1) {
                app = getApp()
                app.store.setState({
                    isLogin: false,
                });
                login()
            }
            return Promise.resolve(response.data)

        }

    }, error => {
        console.log(error)
        return Promise.reject(error)
    })
export default service 