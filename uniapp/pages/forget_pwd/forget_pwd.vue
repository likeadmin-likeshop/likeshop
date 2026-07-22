<template>
    <view
        :style="
            'background-image: url(' +
            $getImageUri('/static/common/image/default/login_bg.png') +
            ')'
        "
    >
        <!-- #ifndef  H5 -->
        <u-sticky offset-top="0" h5-nav-height="0" bg-color="transparent">
            <u-navbar
                :is-back="true"
                title="忘记密码"
                :title-bold="true"
                :is-fixed="false"
                :border-bottom="false"
                :background="{ background: 'rgba(256,256, 256,0)' }"
            ></u-navbar>
        </u-sticky>
        <!-- #endif -->
        <view class="forget-pwd-container">
            <view class="forget-input-container">
                <view class="xxl bold">忘记登录密码</view>
                <view class="input row" style="padding: 15rpx">
                    <u-input v-model="mobile" placeholder="请输入手机号码" type="number" />
                </view>
                <view class="input row" style="padding: 15rpx">
                    <u-input
                        v-model="captchaCode"
                        style="flex: 1"
                        placeholder="请输入图形验证码"
                        :input-border="false"
                    />
                    <image
                        class="captcha-img"
                        :src="captchaImg"
                        mode="aspectFit"
                        @click="getCaptchaImg"
                    />
                </view>
                <view class="input row" style="padding: 15rpx">
                    <u-input
                        v-model="smsCode"
                        style="flex: 1"
                        placeholder="请输入验证码"
                        :input-border="false"
                    />
                    <view class="row">
                        <view
                            class="sms-btn sm row-center br60"
                            :style="{ color: mobile.length == 11 ? 'red' : 'gray' }"
                            @click="sendSmsFun()"
                        >
                            <view v-show="canSendSms">获取验证码</view>
                            <u-count-down
                                ref="countDown"
                                :show-days="false"
                                :timestamp="time"
                                separator="zh"
                                color="#FF2C3C"
                                separatorColor="#FF2C3C"
                                bg-color="rgba(0, 0, 0, 0)"
                                :show-hours="false"
                                :show-minutes="false"
                                :autoplay="false"
                                v-show="!canSendSms"
                                @end="countDownFinish()"
                            />
                        </view>
                    </view>
                </view>

                <view class="input row" style="padding: 15rpx">
                    <u-input
                        type="password"
                        style="width: 100%"
                        v-model="resetPwd"
                        placeholder="请输入新密码"
                        :input-border="false"
                    />
                </view>
                <!-- <view class="input-item row">
        <input
          type="password"
          v-model="comfirmPwd"
          placeholder="再次输入新密码确认"
        />
      </view> -->
            </view>
            <button
                class="btn bg-primary white row-center"
                :class="{ inactive }"
                @click="forgetPwdFun"
            >
                立即重置密码
            </button>
        </view>
    </view>
</template>

<script>
import { forgetPwd, sendSms, getCaptcha } from '@/api/app.js'
import { ACCESS_TOKEN } from '@/config/app.js'
import { SMSType } from '@/utils/type.js'
import { mapMutations } from 'vuex'
export default {
    name: 'forgetPwd',
    data() {
        return {
            mobile: '',
            smsCode: '',
            resetPwd: '',
            //   comfirmPwd: "",
            time: 59,
            canSendSms: true,
            captchaCode: '',
            captchaImg: '',
            captchaKey: ''
        }
    },
    onLoad() {
        this.getCaptchaImg()
    },
    computed: {
        inactive() {
            if (this.mobile.length !== 11 || !this.smsCode || !this.resetPwd) {
                return true
            } else {
                return false
            }
        }
    },
    methods: {
        ...mapMutations(['LOGIN']),
        goPage(name) {
            uni.navigateTo({
                url: name
            })
        },
        forgetPwdFun() {
            let { mobile, smsCode, resetPwd, comfirmPwd } = this
            if (!mobile) {
                this.$toast({
                    title: '请填写手机号'
                })
                return
            }
            if (!smsCode) {
                this.$toast({
                    title: '请填写短信验证码'
                })
                return
            }
            if (!resetPwd) {
                this.$toast({
                    title: '请填写重置密码'
                })
                return
            }
            //   if (!comfirmPwd) {
            //     this.$toast({
            //       title: "请填写确认密码",
            //     });
            //     return;
            //   }
            //   if (resetPwd != comfirmPwd) {
            //     this.$toast({
            //       title: "两次密码输入不一致",
            //     });
            //     return;
            //   }
            let data = {
                mobile: mobile,
                code: smsCode,
                password: resetPwd
                // repassword: comfirmPwd,
            }
            forgetPwd(data).then((res) => {
                if (res.code == 1) {
                    this.$toast({
                        title: res.msg
                    })
                    //  跳转到登录页
                    setTimeout(() => {
                        uni.navigateBack()
                    }, 1000)
                }
            })
        },
        countDownFinish() {
            this.canSendSms = true
        },
        async getCaptchaImg() {
            try {
                const res = await getCaptcha()
                if (res.code == 1) {
                    this.captchaImg = res.data.image || ''
                    this.captchaKey = res.data.key || ''
                }
            } catch (error) {
                this.captchaImg = ''
                this.captchaKey = ''
            }
        },
        sendSmsFun() {
            if (this.mobile.length !== 11) {
                this.$toast({
                    title: '请填写正确的手机号信息'
                })
                return
            }
            if (this.canSendSms == false) {
                return
            }
            if (!this.captchaCode) {
                this.$toast({
                    title: '请输入图形验证码'
                })
                return
            }
            if (!this.captchaKey) {
                this.$toast({
                    title: '图形验证码已失效，请重新获取'
                })
                this.getCaptchaImg()
                return
            }
            sendSms({
                mobile: this.mobile,
                key: SMSType.FINDPWD,
                captcha_key: this.captchaKey,
                captcha: this.captchaCode
            }).then((res) => {
                if (res.code == 1) {
                    this.canSendSms = false
                    this.$toast({
                        title: res.msg
                    })
                    this.$refs.countDown.start()
                } else {
                    this.getCaptchaImg()
                    this.captchaCode = ''
                }
            }).catch(() => {
                this.getCaptchaImg()
                this.captchaCode = ''
            })
        }
    }
}
</script>

<style lang="scss">
.forget-pwd-container {
    min-height: 100vh;
    padding: 40px 20px 0;

    .forget-input-container {
        .input {
            height: 100rpx;
            border-radius: 10rpx;
            width: 670rpx;
            border: $ls-solid-border;
            margin-top: 30rpx;
        }
    }
}

.btn {
    background-color: #ff2c3c;
    width: 100%;
    margin-top: 80rpx;
    height: 100rpx;
    //   }
}
.inactive {
    opacity: 0.5;
}
.captcha-img {
    width: 210rpx;
    height: 90rpx;
    margin-left: 20rpx;
}
</style>
