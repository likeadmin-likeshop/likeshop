
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
import VueRouter from 'vue-router'
import IndexLayout from '@/layout/IndexLayout'
import RouteView from '@/layout/RouteView'

Vue.use(VueRouter)

const routes = [
    {
        path: '*',
        redirect: 'index',
    },
    {
        path: '/index',
        name: 'index',
        redirect: '/index/home',
        component: IndexLayout,
        meta: {
            keepAlive: true,
            title: '首页',
        },
        children: [{
            path: 'home',
            name: 'home',
            component: () => import("@V/index/home"),
            meta: {
                auth: false,
                keepAlive: true,
                title: '首页'
            }
        }, {
            path: 'sort',
            name: 'sort',
            component: () => import("@V/index/sort"),
            meta: {
                auth: false,
                keepAlive: true,
                title: '分类'
            }
        }, {
            path: 'cart',
            name: 'cart',
            component: () => import("@V/index/cart"),
            meta: {
                keepAlive: true,
                auth: true,
                title: '购物车'
            }
        }, {
            path: 'user',
            name: 'user',
            component: () => import("@V/index/user"),
            meta: {
                auth: true,
                keepAlive: true,
                title: '个人中心'
            }
        }]
    },
    {
        path: '/home',
        component: RouteView,
        meta: {
            keepAlive: true
        },
        children: [ {
            path: "couponCenter",
            name: "couponCenter",
            component: () => import("@V/home/couponCenter"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "领券中心"
            }
        }]
    },
    {
        path: "/user",
        component: RouteView,
        meta: {
            keepAlive: true
        },
        children: [{
            path: "userCollection",
            name: "userCollection",
            component: () => import("@V/user/userCollection"),
            meta: {
                auth: true,
                keepAlive: false,
                title: '我的收藏'
            }
        }, {
            path: "userAddress",
            name: "userAddress",
            component: () => import("@V/user/userAddress"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "收货地址"
            }
        }, {
            path: "addressEdit",
            name: "addressEdit",
            component: () => import("@V/user/addressEdit"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "编辑地址"
            }
        }, {
            path: "afterSalesDetail",
            name: "afterSalesDetail",
            component: () => import("@V/user/afterSalesDetail"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "售后详情"
            }
        }, {
            path: "postSale",
            name: "postSale",
            component: () => import("@V/user/postSale"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "退款/售后"
            }
        }, {
            path: "applyAfterSales",
            name: "applyAfterSales",
            component: () => import("@V/user/applyAfterSales"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "申请售后"
            }
        }, {
            path: "goodsEvaluate",
            name: "goodsEvaluate",
            component: () => import("@V/user/goodsEvaluate"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "商品评价"
            }
        }, {
            path: "commodityEvaluation",
            name: "commodityEvaluation",
            component: () => import("@V/user/commodityEvaluation"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "商品评价"
            }
        }, {
            path: "userBill",
            name: "userBill",
            component: () => import("@V/user/userBill"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "账户明细"
            }
        }, {
            path: "userWallet",
            name: "userWallet",
            component: () => import("@V/user/userWallet"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "我的钱包"
            }
        }, {
            path: "userEvaluate",
            name: "userEvaluate",
            component: () => import("@V/user/userEvaluate"),
            meta: {
                auth: false,
                keepAlive: false,
                title: "全部评价"
            }
        }, {
            path: "orderDetails",
            name: "orderDetails",
            component: () => import("@V/user/orderDetails"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "订单详情"
            }
        }, {
            path: "userCoupon",
            name: "userCoupon",
            component: () => import("@V/user/userCoupon"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "我的优惠券"
            }
        }, {
            path: "goodsLogistics",
            name: "goodsLogistics",
            component: () => import("@V/user/goodsLogistics"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "物流详情"
            }
        }, {
            path: "userOrder",
            name: "userOrder",
            component: () => import("@V/user/userOrder"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "我的订单"
            }
        }, {
            path: "userVip",
            name: "userVip",
            component: () => import("@V/user/userVip"),
            meta: {
                  auth: true,
                keepAlive: false,
                title: "会员中心"
            }
        }, {
            path: "userProfile",
            name: "userProfile",
            component: () => import("@V/user/userProfile"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "个人设置"
            }
        }, {
            path: "contactOffical",
            name: "contactOffical",
            component: () => import("@V/user/contactOffical"),
            meta: {
                auth: false,
                keepAlive: false,
                title: "联系客服"
            }
        }, {
            path: "userVipGrow",
            name: "userVipGrow",
            component: () => import("@V/user/userVipGrow"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "成长值"
            }
        }]
    },
    {
        path: "/common",
        component: RouteView,
        meta: {
            keepAlive: true
        },
        children: [{
            path: "newsCenter",
            name: "newsCenter",
            component: () => import("@V/common/newsCenter"),
            meta: {
                auth: false,
                keepAlive: false,
                title: "帮助咨询"
            }
        }, {
            path: "newsDetail",
            name: "newsDetail",
            component: () => import("@V/common/newsDetail"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "咨询详情"
            }
        }, {
            path: "goodsDetail",
            name: "goodsDetail",
            component: () => import("@V/common/goodsDetail"),
            meta: {
                auth: false,
                keepAlive: false,
                title: "商品详情"
            }
        }, {
            path: "goodsSearch",
            name: "goodsSearch",
            component: () => import("@V/common/goodsSearch"),
            meta: {
                auth: false,
                keepAlive: false,
                title: "商品搜索"
            }
        }, {
            path: "payResult",
            name: "payResult",
            component: () => import("@V/common/payResult"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "支付结果"
            }
        }, {
            path: "confirmorder",
            name: "confirmOrder",
            component: () => import("@V/common/confirmOrder"),
            meta: {
                auth: true,
                keepAlive: false,
                title: "确认订单"
            }
        }, {
            path: "serverExplain",
            name: "serverExplain",
            component: () => import("@V/common/serverExplain"),
            meta: {
                title: "服务协议"
            }
        }]
    },
    {
        path: '/login',
        name: 'login',
        component: () => import("@V/login/login"),
        meta: {
            auth: false,
            keepAlive: false,
            title: '登录'
        }
    },
    {
        path: '/register',
        name: 'register',
        component: () => import("@V/login/register"),
        meta: {
            auth: false,
            keepAlive: false,
            title: '注册账号'
        }
    },
    {
        path: '/forgetpwd',
        name: 'forgetPwd',
        component: () => import("@V/login/forgetPwd"),
        meta: {
            auth: false,
            keepAlive: false,
            title: '忘记密码'
        }
    }
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router
