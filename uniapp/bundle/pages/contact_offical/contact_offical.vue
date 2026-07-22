<template>
    <view class="service">
        <!-- Contain -->
        <view class="service-contain">
            <view class="header-image">
                <u-image
                    src="/bundle/static/images/service.png"
                    width="100rpx"
                    height="100rpx"
                    shape="circle"
                    style="margin-top: -50rpx"
                    class="circle"
                ></u-image>
            </view>
            <!-- type==1 二维码客服 -->
            <view
                class="flex lg mt40 row-center"
                v-if="ServiceConfig.remarks && ServiceConfig.way == 1"
            >
                {{ ServiceConfig.remarks }}
            </view>
            <view class="flex code row-center" v-if="ServiceConfig.way == 1">
                <u-image
                    :src="ServiceConfig.qr_code"
                    width="320rpx"
                    height="320rpx"
                    border-radius="20"
                ></u-image>
            </view>
            <view
                class="mt20 mb20 flex row-center xs muted"
                v-if="ServiceConfig.phone && ServiceConfig.way == 1"
            >
                客服电话：{{ ServiceConfig.phone }}
            </view>
            <view
                class="flex row-center xs mt10 muted mb20"
                v-if="ServiceConfig.business_time && ServiceConfig.way == 1"
            >
                服务时间: {{ ServiceConfig.business_time }}
            </view>
            <!-- logo -->

            <template v-if="ServiceConfig.way != 1">
                <view class="flex lg row-center mt20">
                    {{ appConfig.name }}
                </view>
                <view class="flex code row-center">
                    <u-image
                        :src="appConfig.shop_login_logo"
                        width="200rpx"
                        height="200rpx"
                        border-radius="20"
                    ></u-image>
                </view>
            </template>
            <!-- type==2 电话客服 -->

            <view class="mt20 flex row-center" v-if="ServiceConfig.phone && ServiceConfig.way == 2">
                <view style="text-align: center" @click="handleCall">
                    <view> 拨打客服热线 </view>
                    <view style="text-decoration: underline">
                        {{ ServiceConfig.phone }}
                    </view>
                </view>
            </view>
        </view>
        <view class="pt20" v-if="ServiceConfig.way == 1" @click="saveCode">
            <view class="br20 copy-btn flex row-center white lg">
                <text class="m-l-20">保存二维码</text>
            </view>
        </view>
        <view class="pt20" v-if="ServiceConfig.way == 2" @click="handleCall">
            <view class="br20 copy-btn flex row-center white lg">
                <text class="ml20">拨打电话</text>
            </view>
        </view>
        <!-- type==3 系统客服 -->

        <view class="pt20" v-if="ServiceConfig.way == 3" @click="goService">
            <view class="copy-btn br20 flex row-center white lg">
                <text class="ml20">联系系统客服</text>
            </view>
        </view>
        <!-- type==4 企业微信客服 -->
        <view class="pt20" v-if="ServiceConfig.way == 4" @click="handleService">
            <view class="copy-btn flex row-center white lg br20">
                <text class="ml20">联系企业微信客服</text>
            </view>
        </view>
        <view class="pt20" v-if="ServiceConfig.way == 5">
            <!-- #ifdef MP-WEIXIN -->
            <button
                open-type="contact"
                class="copy-btn icon-item white lg br20"
                style="line-height: 88rpx"
                v-if="ServiceConfig.way == 5"
            >
                <text style="line-height: 32rpx">联系微信小程序客服</text>
            </button>
            <!-- #endif -->
        </view>
    </view>
</template>

<script>
import { getService } from '@/api/app'
import { copy } from '@/utils/tools'
import { mapMutations, mapActions, mapGetters } from 'vuex'
import { getClient } from '@/utils/tools'
import { serviceEnum } from '@/utils/enum'

export default {
    name: 'contactOffical',
    data() {
        return {
            ServiceConfig: {},
            showPhoneCall: false,
            content: '即将打电话给'
        }
    },

    onLoad() {
        getService().then((res) => {
            if (res.code == 1) {
                this.ServiceConfig = res.data[serviceEnum[getClient()]] || {}
                //#ifndef H5
                this.downloadCode()
                //#endif
            }
        })
    },

    methods: {
        // 下载图片
        downloadCode() {
            uni.downloadFile({
                url: this.ServiceConfig.qr_code, //仅为示例，并非真实的资源
                success: (res) => {
                    if (res.statusCode == 200) {
                        this.tempFilePath = res.tempFilePath
                    }
                }
            })
        },
        saveCode() {
            //#ifdef H5
            this.$toast({
                title: '长按图片保存'
            })
            //#endif
            //#ifndef H5
            uni.saveImageToPhotosAlbum({
                filePath: this.tempFilePath,
                success: (res) => {
                    this.$toast({
                        title: '保存成功',
                        icon: 'success'
                    })
                },
                fail: (err) => {
                    this.$toast({
                        title: '保存失败'
                    })
                }
            })
            //#endif
        },
        handleCall() {
            if (!this.ServiceConfig.phone) {
                this.$toast('请在后台配置客服电话号码')
                return
            }
            uni.makePhoneCall({
                phoneNumber: this.ServiceConfig.phone,
                success(res) {
                    console.log(res)
                },
                fail(err) {
                    console.log(err)
                }
            })
        },
        handleService() {
            const _this = this
            // #ifdef MP-WEIXIN
            wx.openCustomerServiceChat({
                extInfo: { url: _this.ServiceConfig.kefu_link },
                corpId: _this.ServiceConfig.enterprise_id,
                success(res) {
                    console.log(res)
                },
                fail(err) {
                    console.log(err)
                    _this.$toast('请在后台配置企业微信客服')
                }
            })
            // #endif
            // #ifdef H5
            if (!_this.ServiceConfig.kefu_link) {
                _this.$toast('请在后台配置企业微信客服')
                return
            }
            window.open(_this.ServiceConfig.kefu_link, '_self')
            // #endif
            // #ifdef APP-PLUS
            plus.share.getServices((res) => {
                console.log(res)

                const wechat = res.find((i) => i.id === 'weixin')

                if (wechat) {
                    wechat.openCustomerServiceChat(
                        {
                            corpid: _this.ServiceConfig.enterprise_id, //第三步获取
                            url: _this.ServiceConfig.kefu_link
                        },
                        (src) => {
                            console.log('success:')
                        },
                        (err) => {
                            console.log('error:')
                        }
                    )
                } else {
                    uni.showToast({
                        title: '当前环境不支持',
                        icon: 'error'
                    })
                }
            })
            // #endif
        }
    },
    computed: {
        ...mapGetters(['appConfig'])
    }
}
</script>

<style lang="scss">
.header-image {
    display: flex;
    justify-content: center;
    .circle {
        border-radius: 50%;
        border: 6rpx solid #ffffff;
    }
}
.service {
    width: 100vw;
    height: 100vh;
    background-image: url(../../static/images/service_bg.jpg);
    background-size: 100% auto;
    overflow: hidden;

    &-contain {
        width: 620rpx;
        // height: 750rpx;
        margin: 140rpx auto;
        margin-bottom: 40rpx;
        padding-bottom: 80rpx;
        border-radius: 10px;
        background-color: #ffffff;

        .code {
            border-radius: 20rpx;
            padding-top: 60rpx;
        }

        .phone {
            padding: 0 20rpx;
            text-decoration: underline;
        }
    }
}
.copy-btn {
    margin: 0 80rpx;
    height: 88rpx;
    // @include background_linear(90deg, 0, 100%);
    background: #000722;
}
.br20 {
    border-radius: 20rpx;
}
</style>
