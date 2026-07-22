<template>
    <view class="pay-result">
        <view class="contain bg-white">
            <view style="border-top: 1rpx solid transparent">
                <view class="header column-center">
                    <view>
                        <image class="tips-icon" :src="getStatusImg"></image>
                    </view>
                    <view class="xl mt20 line1">{{ widthdrawInfo.statusDesc }}</view>
                </view>
                <view class="column-center mt10">
                    <price-format
                        :price="widthdrawInfo.money"
                        color="#FF2C3C"
                        showSubscript
                        subscriptSize="30"
                        firstSize="46"
                        secondSize="46"
                        weight="500"
                    />
                </view>
                <view class="info">
                    <view class="order-num row-between mt20">
                        <view class="ml20">流水号</view>
                        <view class="mr20">
                            {{ widthdrawInfo.sn }}
                        </view>
                    </view>
                    <view v-if="widthdrawInfo.create_time" class="order-time row-between mt20">
                        <view class="ml20">提交时间</view>
                        <view class="mr20">{{ widthdrawInfo.create_time }}</view>
                    </view>
                    <view class="order-pay-type row-between mt20">
                        <view class="ml20">提现至</view>
                        <view class="mr20">{{ widthdrawInfo.typeDesc }}</view>
                    </view>
                    <view class="order-pay-money row-between mt20">
                        <view class="ml20">服务费</view>
                        <view class="mr20">
                            <price-format :price="widthdrawInfo.poundage" />
                        </view>
                    </view>
                    <view class="order-pay-money row-between mt20">
                        <view class="ml20">实际到账</view>
                        <view class="mr20">
                            <price-format :price="widthdrawInfo.left_money" />
                        </view>
                    </view>
                </view>
                <view class="line ml20" v-if="!type"></view>
                <view class="opt-btn-contain row-center wrap" v-if="!type">
                    <navigator
                        hover-class="none"
                        class="check-order-btn row-center bg-primary br60 mt20"
                        url="/bundle/pages/user_withdraw_code/user_withdraw_code"
                    >
                        <view class="white bg-primary lg">查看历史提现记录</view>
                    </navigator>
                    <navigator
                        hover-class="none"
                        class="go-back-btn row-center br60 mt20"
                        open-type="switchTab"
                        url="/pages/index/index"
                    >
                        <view class="primary br60 lg">返回首页</view>
                    </navigator>
                </view>
            </view>
        </view>
        <view class="muted mt20 row-center xs" v-if="widthdrawInfo.type != 2"
            >* 审核通过后约72小时内到账，请留意账户明细</view
        >
        <view class="btn" v-if="widthdrawInfo.wechat_change_wait_receive" @click="handleclick"
            >立即收款</view
        >
    </view>
</template>

<script>
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likeshop_gitee/likeshop
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------
import { getWithdrawDetail, withdrawReceive } from '@/api/user'
import wechath5 from '@/utils/wechath5'
import { getMnpNotice } from '@/api/app'

export default {
    data() {
        return {
            widthdrawInfo: {},
            type: ''
        }
    },

    components: {},
    props: {},

    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function (options) {
        this.id = options.id
        this.type = options.type
        this.getWithdrawDetailFun()
    },
    // onShow() {
    //     this.getWithdrawDetailFun()
    // },

    methods: {
        // 获取微信授权
        authWechatMessage() {
            return new Promise((resolve, reject) => {
                getMnpNotice({
                    scene: 113
                })
                    .then(({ code, data, msg }) => {
                        if (code != 1) throw new Error(msg)
                        return data
                    })
                    .then((data) => {
                        if (!data.length) return reject()
                        uni.requestSubscribeMessage({
                            tmplIds: data,
                            success(res) {
                                resolve(res)
                            },
                            fail(err) {
                                reject(err)
                            }
                        })
                    })
                    .catch((err) => {
                        reject(err)
                    })
            })
        },
        getWithdrawDetailFun() {
            getWithdrawDetail({
                id: this.id
            }).then((res) => {
                if (res.code == 1) {
                    this.widthdrawInfo = res.data
                }
            })
        },
        async handleclick() {
            // #ifdef MP-WEIXIN

            if (wx.canIUse('requestMerchantTransfer')) {
                wx.requestMerchantTransfer({
                    mchId: this.widthdrawInfo.pay_config.mch_id,
                    appId: wx.getAccountInfoSync().miniProgram.appId,
                    package: this.widthdrawInfo.pay_desc.package_info,
                    success: (res) => {
                        // res.err_msg将在页面展示成功后返回应用时返回ok，并不代表付款成功
                        console.log('success:', res)
                        withdrawReceive({ id: this.id }).then((res) => {
                            this.getWithdrawDetailFun()
                        })
                    },
                    fail: (res) => {
                        console.log('fail:', res)
                    }
                })
            } else {
                wx.showModal({
                    content: '你的微信版本过低，请更新至最新版本。',
                    showCancel: false
                })
            }

            // #endif
            // #ifdef H5
            var ua = navigator.userAgent.toLowerCase()
            if (ua.match(/MicroMessenger/i) == 'micromessenger') {
                //这是微信环境
                try {
                    await wechath5.reviceTransfer(
                        this.widthdrawInfo.pay_config.mch_id,
                        this.widthdrawInfo.pay_config.oa_appid,
                        this.widthdrawInfo.pay_desc.package_info
                    )
                    withdrawReceive({ id: this.id }).then((res) => {
                        this.getWithdrawDetailFun()
                    })
                } catch (error) {
                    console.log(error)
                }
            } else {
                //这是非微信环境
                return this.$toast({
                    title: '请在微信环境内打开'
                })
            }
            // #endif
        }
    },
    computed: {
        getStatusImg() {
            switch (this.widthdrawInfo.status) {
                case 1:
                    ''
                case 2:
                    return '../../static/images/icon_cashOut_wait.png'
                case 3:
                    return '/static/images/icon_paySuccess.png'
                case 4:
                    return '../../static/images/icon_payFail.png'
            }
        }
    }
}
</script>
<style lang="scss">
.pay-result {
    overflow: hidden;

    .contain {
        /* height: 732rpx; */
        margin-left: 20rpx;
        margin-right: 20rpx;
        border-radius: 10rpx;
        margin-top: 78rpx;
        padding-left: 20rpx;
        padding-right: 20rpx;
        padding-bottom: 40rpx;
        position: relative;

        .tips-icon {
            width: 112rpx;
            height: 112rpx;
        }

        .header {
            margin-top: -56rpx;
        }

        .info {
            margin-bottom: 40rpx;

            .order-num {
                align-items: flex-start;
            }
        }

        .opt-btn-contain {
            margin-top: 40rpx;

            .check-order-btn {
                width: 650rpx;
                height: 84rpx;
            }

            .go-back-btn {
                width: 650rpx;
                height: 84rpx;
                border: solid 1rpx $ls-color-primary;
                box-sizing: border-box;
            }
        }
    }
}

.line {
    width: 650rpx;
    border-top: 1px solid rgba(229, 229, 229, 1);
}
.btn {
    height: 80rpx;
    margin: 50rpx 20rpx 0 20rpx;
    background-color: #ff2c3c;
    color: white;
    line-height: 80rpx;
    text-align: center;
    border-radius: 20rpx;
}
</style>
