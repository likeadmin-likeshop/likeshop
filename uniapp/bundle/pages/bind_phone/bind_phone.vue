<template>
    <view class="p20">
        <!-- <view class="input row" style="padding: 30rpx" v-if="mobile">
            <u-input
                type="number"
                v-model="mobile"
                style="width: 100%"
                placeholder="请输入手机号"
                :input-border="false"
                disabled
            />
        </view> -->
        <view class="input row" style="padding: 30rpx">
            <u-input
                type="number"
                v-model="new_mobile"
                style="width: 100%"
                :placeholder="mobile ? '请输入新手机号' : '请输入手机号'"
                :input-border="false"
            />
        </view>
        <view class="input row flex row-center" style="padding: 30rpx">
            <u-input
                v-model="smsCode"
                style="flex: 1"
                placeholder="请输入验证码"
                :input-border="false"
            />
            <view class="row ml10" style="">
                <view class="sms-btn primary sm row-center br60" @click="$sendSms">
                    <view v-show="canSendSms">获取验证码</view>
                    <u-count-down
                        ref="countDown"
                        :show-days="false"
                        :timestamp="time"
                        :showColon="false"
                        separator="zh"
                        color="#FF2C3C"
                        separator-color="#FF2C3C"
                        :show-hours="false"
                        :show-minutes="false"
                        :autoplay="false"
                        v-show="!canSendSms"
                        @end="countDownFinish()"
                    />
                </view>
            </view>
        </view>

        <button size="lg" class="white flex row-center btn" @click="$changeUserMobile">
            <text>确认</text>
        </button>
    </view>
</template>
<script>
import { SMSType } from '@/utils/type'
import { sendSms } from '@/api/app'
import { getUserInfo, changeUserMobile, userLogout } from '@/api/user'

export default {
    data() {
        return {
            canSendSms: true,
            time: 59,
            new_mobile: '',
            smsCode: '',
            smsType: '',
            userInfo: {},
            isBind: false,
            type: '',
            mobile: ''
        }
    },
    methods: {
        countDownFinish() {
            this.canSendSms = true
        },
        // 发送短信
        $sendSms(type) {
            if (!this.canSendSms) return
            sendSms({
                mobile: this.new_mobile,
                key: this.smsType
            }).then((res) => {
                if (res.code == 1) {
                    this.canSendSms = false
                    this.$refs.countDown.start()
                    this.$toast({
                        title: res.msg
                    })
                }
            })
        },
        $changeUserMobile() {
            if (!this.smsCode) {
                this.$toast({
                    title: '请输入验证码'
                })
                return
            }
            if (!this.new_mobile) {
                this.$toast({
                    title: '请输入新的手机号码'
                })
                return
            }
            changeUserMobile({
                mobile: this.userInfo.mobile,
                new_mobile: this.new_mobile,
                code: this.smsCode,
                action: this.userInfo.mobile ? 'change' : ''
            }).then((res) => {
                if (res.code == 1) {
                    this.$toast({
                        title: res.msg
                    })
                    this.isBind = true
                    uni.reLaunch({
                        url: '/pages/user/user'
                    })
                }
            })
        }
    },
    onReady() {
        setTimeout(() => {
            uni.setNavigationBarTitle({
                title: this.userInfo.mobile == '' ? '绑定手机号' : '更换手机号'
            })
        }, 100)
    },
    onLoad(option) {
        const { type } = option
        // type==1强制绑定手机号
        this.type = type
        getUserInfo().then((res) => {
            if (res.code == 1) {
                this.userInfo = res.data
                this.mobile = this.userInfo.mobile
                this.smsType = this.userInfo.mobile ? SMSType.CHANGE_MOBILE : SMSType.BIND
            }
        })
    },
    onUnload() {
        if (!this.isBind && this.type == 1) {
            this.$store.commit('LOGOUT')
            userLogout({
                token: this.token
            }).then((res) => {
                if (res.code == 1) {
                    this.$store.commit('LOGOUT')
                    // setTimeout(() => {
                    //     uni.navigateTo({
                    //         url: '/pages/login/login'
                    //     })
                    // }, 500)
                }
            })
        }
    }
}
</script>
<style scoped lang="scss">
.input {
    height: 100rpx;
    border-radius: 20rpx;
    width: 670rpx;
    margin-top: 30rpx;
    background-color: white;
    margin: 40rpx auto;
}
.btn {
    background-color: #ff2c3c;
    border-radius: 20rpx;
    width: 670rpx;
    height: 80rpx;
    margin: 60rpx auto;
}
</style>
