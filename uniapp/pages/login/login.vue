<template>
    <view
        class="login"
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
                title="登录"
                :title-bold="true"
                :is-fixed="false"
                :border-bottom="false"
                :background="{ background: 'rgba(256,256, 256,0)' }"
            ></u-navbar>
        </u-sticky>
        <!-- #endif -->
        <!-- #ifdef MP-WEIXIN -->
        <view class="mpwx-login">
            <image class="logo" :src="appConfig.shop_login_logo" mode="heightFix"></image>
            <block v-if="isPhonelogin == 1">
                <button size="lg" class="white flex row-center btn" @click="mnpLoginFun">
                    <text>用户一键登录</text>
                </button>

                <button size="lg" class="flex row-center phonebtn" @click="showPhoneLogin">
                    <text>手机号登录</text>
                </button>
                <view class="mt20" style="width: 100%">
                    <u-checkbox v-model="isAgree" shape="circle">
                        <view class="sm row">
                            已阅读并同意
                            <navigator
                                class="primary"
                                hover-class="none"
                                url="/bundle/pages/server_explan/server_explan?type=0"
                            >
                                《服务协议》
                            </navigator>
                            和
                            <navigator
                                class="primary"
                                hover-class="none"
                                url="/bundle/pages/server_explan/server_explan?type=1"
                            >
                                《隐私协议》
                            </navigator>
                        </view>
                    </u-checkbox>
                </view>
            </block>
            <block v-if="isPhonelogin == 0">
                <view>
                    <view v-if="loginType == 0">
                        <view class="input row" style="padding: 15rpx">
                            <u-input
                                v-model="account"
                                style="width: 100%"
                                placeholder="请输入账户"
                                :input-border="false"
                            />
                        </view>
                        <view class="input row" style="padding: 15rpx">
                            <u-input
                                v-model="password"
                                type="password"
                                style="flex: 1"
                                :password-icon="false"
                                placeholder="请输入密码"
                                :input-border="false"
                            />
                            <navigator
                                style="
                                    width: 132rpx;
                                    border-left: 1rpx solid #ccc;
                                    padding-left: 30rpx;
                                "
                                url="/pages/forget_pwd/forget_pwd"
                                hover-class="none"
                                >忘记密码</navigator
                            >
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
                    </view>
                    <view v-if="loginType == 1">
                        <view class="input row" style="padding: 15rpx">
                            <u-input
                                type="number"
                                v-model="telephone"
                                style="width: 100%"
                                placeholder="请输入手机号"
                                :input-border="false"
                            />
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
                    </view>
                    <view class="row-start mb20 mt20" style="width: 100%">
                        <u-checkbox v-model="isAgree" shape="circle">
                            <view class="sm row-start">
                                已阅读并同意
                                <navigator
                                    class="primary"
                                    hover-class="none"
                                    url="/bundle/pages/server_explan/server_explan?type=0"
                                >
                                    《服务协议》
                                </navigator>
                                和
                                <navigator
                                    class="primary"
                                    hover-class="none"
                                    url="/bundle/pages/server_explan/server_explan?type=1"
                                >
                                    《隐私协议》
                                </navigator>
                            </view>
                        </u-checkbox>
                    </view>
                    <button
                        style="margin: 0rpx 0 50rpx; width: 680rpx"
                        size="lg"
                        class="flex row-center btn"
                        type="primary"
                        @click="loginFun"
                        :class="{ inactive }"
                    >
                        登录
                    </button>
                    <view class="row-between" style="width: 680rpx">
                        <view class="lighter" @click="changeLoginType">{{
                            loginType == 0 ? '短信验证码登录' : '账号登录'
                        }}</view>
                        <navigator class="lighter" url="/pages/register/register" hover-class="none"
                            >注册账号</navigator
                        >
                    </view>
                </view>
            </block>
        </view>

        <mplogin-popup
            v-model="showLoginPop"
            :logo="appConfig.shop_login_logo"
            :title="appConfig.website_name"
            @close="closePopup"
            @update="handleSubmitInfo"
        />
        <!--  #endif -->
        <!-- #ifndef MP-WEIXIN -->
        <view class="account-login">
            <image class="logo" :src="appConfig.shop_login_logo"></image>
            <block v-if="isPhonelogin == 1">
                <button
                    size="lg"
                    class="white flex row-center btn"
                    @click="getCodeUrl"
                    v-if="isWeixin"
                >
                    <text>用户一键登录</text>
                </button>
                <!-- #ifdef APP-PLUS -->
                <button size="lg" class="white flex row-center btn" @click="appWxLogin">
                    <text>用户一键登录</text>
                </button>
                <!-- #endif -->

                <button size="lg" class="flex row-center phonebtn" @click="showPhoneLogin">
                    <text>手机号登录</text>
                </button>

                <view class="row-start mb20 mt20" style="width: 100%">
                    <u-checkbox v-model="isAgree" shape="circle">
                        <view class="sm row-start">
                            已阅读并同意
                            <navigator
                                class="primary"
                                hover-class="none"
                                url="/bundle/pages/server_explan/server_explan?type=0"
                            >
                                《服务协议》
                            </navigator>
                            和
                            <navigator
                                class="primary"
                                hover-class="none"
                                url="/bundle/pages/server_explan/server_explan?type=1"
                            >
                                《隐私协议》
                            </navigator>
                        </view>
                    </u-checkbox>
                </view>
            </block>
            <block v-if="isPhonelogin == 0">
                <view>
                    <view v-if="loginType == 0">
                        <view class="input row" style="padding: 15rpx">
                            <u-input
                                v-model="account"
                                style="width: 100%"
                                placeholder="请输入账户"
                                :input-border="false"
                            />
                        </view>
                        <view class="input row" style="padding: 15rpx">
                            <u-input
                                v-model="password"
                                type="password"
                                style="flex: 1"
                                :password-icon="false"
                                placeholder="请输入密码"
                                :input-border="false"
                            />
                            <navigator
                                style="
                                    width: 132rpx;
                                    border-left: 1rpx solid #ccc;
                                    padding-left: 30rpx;
                                "
                                url="/pages/forget_pwd/forget_pwd"
                                hover-class="none"
                                >忘记密码</navigator
                            >
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
                    </view>
                    <view v-if="loginType == 1">
                        <view class="input row" style="padding: 15rpx">
                            <u-input
                                type="number"
                                v-model="telephone"
                                style="width: 100%"
                                placeholder="请输入手机号"
                                :input-border="false"
                            />
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
                    </view>
                    <view class="row-start mb20 mt20" style="width: 100%">
                        <u-checkbox v-model="isAgree" shape="circle">
                            <view class="sm row-start">
                                已阅读并同意
                                <navigator
                                    class="primary"
                                    hover-class="none"
                                    url="/bundle/pages/server_explan/server_explan?type=0"
                                >
                                    《服务协议》
                                </navigator>
                                和
                                <navigator
                                    class="primary"
                                    hover-class="none"
                                    url="/bundle/pages/server_explan/server_explan?type=1"
                                >
                                    《隐私协议》
                                </navigator>
                            </view>
                        </u-checkbox>
                    </view>
                    <button
                        style="margin: 0rpx 0 50rpx; width: 680rpx"
                        size="lg"
                        class="flex row-center btn"
                        type="primary"
                        @click="loginFun"
                        :class="{ inactive }"
                    >
                        登录
                    </button>
                    <view class="row-between" style="width: 680rpx">
                        <view class="lighter" @click="changeLoginType">{{
                            loginType == 0 ? '短信验证码登录' : '账号登录'
                        }}</view>
                        <navigator class="lighter" url="/pages/register/register" hover-class="none"
                            >注册账号</navigator
                        >
                    </view>
                </view>
            </block>
            <!-- <view class="flex1 wx-login">
        <view v-if="appConfig.app_wechat_login" class="column-center">
          <u-divider>其他登录方式</u-divider>
          <view @click="appWxLogin">
            <image class="image" src="/static/images/icon_wechat.png"></image>
            <view class="sm">微信登录</view>
            <text selectable>{{ text }}</text>
          </view>
        </view>
      </view> -->
        </view>
        <!--  #endif -->
        <!-- 阅读协议弹框 -->
        <u-modal
            :value="showModel"
            show-cancel-button
            :show-title="false"
            @confirm=";(isAgree = true), (showModel = false)"
            @cancel="showModel = false"
            confirm-color="#FF2C3C"
        >
            <view class="comfirm-box">
                <view> 请先阅读并同意 </view>
                <view class="flex row-center">
                    <navigator
                        class="primary"
                        hover-class="none"
                        url="/bundle/pages/server_explan/server_explan?type=0"
                    >
                        <view class="agreement">《服务协议》</view>
                    </navigator>
                    和
                    <navigator
                        class="primary"
                        hover-class="none"
                        url="/bundle/pages/server_explan/server_explan?type=1"
                    >
                        <view class="agreement">《隐私协议》</view>
                    </navigator>
                </view>
            </view>
        </u-modal>
    </view>
</template>

<script>
import { mapMutations, mapActions, mapGetters } from 'vuex'
import {
    accountLogin,
    codeLogin,
    sendSms,
    wxpLogin,
    smsCodeLogin,
    opLogin,
    authLogin,
    updateUser,
    getCaptcha
} from '@/api/app'
import { inputInviteCode } from '@/api/user'
import wechath5 from '@/utils/wechath5'
import { isWeixinClient, currentPage, client } from '@/utils/tools'
import {} from '@/utils/tools'
import { SMSType } from '@/utils/type'
import Cache from '@/utils/cache'
import { BACK_URL } from '@/config/cachekey'
import { getWxCode, getUserProfile } from '@/utils/login'
const loginType = {
    ACCOUNT_LOGIN: 0,
    SMS_CODE_LOGIN: 1
}
export default {
    data() {
        return {
            password: '',
            account: '',
            code: '',
            isWeixin: '',
            loginType: 0,
            smsCode: '',
            time: 59,
            canSendSms: true,
            telephone: '',
            text: '',
            showLoginPop: false,
            isAgree: false,
            showModel: false,
            isPhonelogin: 1,
            captchaCode: '',
            captchaImg: '',
            captchaKey: ''
        }
    },

    async onLoad(option) {
        // #ifdef H5
        // H5微信登录
        this.isWeixin = isWeixinClient()
        if (this.isLogin) {
            uni.switchTab({
                url: '/pages/index/index'
            })
            return
        }
        if (this.isWeixin) {
            const { code } = option
            if (code) {
                const data = await wechath5.authLogin(code)
                this.loginHandle(data)
            } else {
                // wechath5.getWxUrl()
            }
        }
        // #endif
    },
    onUnload() {
        if (this.loginFlag) {
            this.LOGOUT()
        }
    },
    methods: {
        ...mapMutations(['LOGIN', 'LOGOUT']),
        ...mapActions(['getUser']),
        countDownFinish() {
            this.canSendSms = true
        },
        showPhoneLogin() {
            this.isPhonelogin = 0
            if (this.loginType == loginType.ACCOUNT_LOGIN && !this.captchaImg) {
                this.getCaptchaImg()
            }
        },
        // 公众号获取code
        getCodeUrl() {
            if (!this.isAgree) {
                this.showModel = true
                return
            }
            wechath5.getWxUrl()
        },
        // 小程序登录
        async mnpLoginFun() {
            if (!this.isAgree) {
                this.showModel = true
                return
            }
            const {
                userInfo: { avatarUrl, nickName, gender }
            } = await getUserProfile()
            uni.showLoading({
                title: '登录中...',
                mask: true
            })
            const wxCode = await getWxCode()
            const { code, data, msg } = await authLogin({
                code: wxCode,
                nickname: nickName,
                headimgurl: avatarUrl
            })
            if (code == 1) {
                //
                if (data.is_new_user) {
                    uni.hideLoading()
                    this.showLoginPop = true
                    this.loginData = data
                } else {
                    this.loginHandle(data)
                }
            } else {
                this.$toast({
                    title: msg
                })
            }
        },
        // 账号登录
        async loginFun() {
            const { account, password, telephone, smsCode, captchaCode, captchaKey } = this
            if (!this.isAgree) {
                this.showModel = true
                return
            }
            if (this.loginType == 0) {
                if (!captchaCode) {
                    this.$toast({
                        title: '请输入图形验证码'
                    })
                    return
                }
                if (!captchaKey) {
                    this.$toast({
                        title: '图形验证码已失效，请重新获取'
                    })
                    this.getCaptchaImg()
                    return
                }
                try {
                    const { code, data } = await accountLogin({
                        account,
                        password,
                        client: client,
                        captcha_key: captchaKey,
                        captcha: captchaCode
                    })
                    if (code == 1) {
                        this.loginHandle(data)
                    } else {
                        this.getCaptchaImg()
                        this.captchaCode = ''
                    }
                } catch (error) {
                    this.getCaptchaImg()
                    this.captchaCode = ''
                }
            } else {
                if (!telephone) {
                    this.$toast({
                        title: '请填写手机号'
                    })
                    return
                }
                if (!smsCode) {
                    this.$toast({
                        title: '请填写手机验证码'
                    })
                    return
                }
                smsCodeLogin({
                    account: telephone,
                    code: smsCode
                }).then((res) => {
                    if (res.code == 1) {
                        this.loginHandle(res.data)
                    }
                })
            }
        },
        // 登录结果处理
        async loginHandle(data) {
            this.LOGIN(data)
            uni.hideLoading()
            const inviteCode = Cache.get('INVITE_CODE')
            if (inviteCode) {
                inputInviteCode({
                    code: inviteCode
                })
            }
            if (this.isBindMobile && !data.mobile) {
                uni.redirectTo({
                    url: `/bundle/pages/bind_phone/bind_phone?type=1`
                })
                return
            }
            // #ifdef H5
            location.replace('/mobile' + (Cache.get(BACK_URL) || '/'))
            Cache.remove(BACK_URL)
            //#endif
            // #ifndef H5
            uni.navigateBack({
                success() {
                    // 刷新上一页
                    const { onLoad, options } = currentPage()
                    onLoad && onLoad(options)
                }
            })
            //#endif
        },
        changeLoginType() {
            if (this.loginType == loginType.ACCOUNT_LOGIN) {
                this.loginType = loginType.SMS_CODE_LOGIN
            } else if (this.loginType == loginType.SMS_CODE_LOGIN) {
                this.loginType = loginType.ACCOUNT_LOGIN
                if (!this.captchaImg) {
                    this.getCaptchaImg()
                }
            }
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
        // 发送短信
        $sendSms() {
            if (this.canSendSms == false) {
                return
            }
            if (!this.telephone) {
                this.$toast({
                    title: '请填写手机号信息～'
                })
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
                mobile: this.telephone,
                key: SMSType.LOGIN,
                captcha_key: this.captchaKey,
                captcha: this.captchaCode
            }).then((res) => {
                if (res.code == 1) {
                    this.canSendSms = false
                    this.$refs.countDown.start()
                    this.$toast({
                        title: res.msg
                    })
                } else {
                    this.getCaptchaImg()
                    this.captchaCode = ''
                }
            }).catch(() => {
                this.getCaptchaImg()
                this.captchaCode = ''
            })
        },
        // app微信登录
        async appWxLogin() {
            if (!this.isAgree) {
                this.showModel = true
                return
            }
            uni.login({
                provider: 'weixin',
                success: (res) => {
                    uni.showLoading({
                        title: '登录中...',
                        mask: true
                    })
                    const { openid, access_token } = res.authResult
                    opLogin({
                        openid,
                        access_token
                    }).then((res) => {
                        uni.hideLoading()
                        if (res.code == 1) {
                            this.loginHandle(res.data)
                        }
                    })
                }
            })
        },
        async handleSubmitInfo(e) {
            const loginData = this.loginData || {}
            const res = await updateUser(e, loginData.token)
            if (res.code == 1) {
                this.loginHandle(loginData)
            }
        },
        closePopup() {
            this.showLoginPop = false
        },
        /**
         * @description 同意协议
         */
        changeChecked() {
            this.isAgree = !this.isAgree
        }
    },
    computed: {
        ...mapGetters(['appConfig']),
        isBindMobile() {
            const { register_setting_must_bind_mobile } = this.appConfig
            return register_setting_must_bind_mobile
        },
        inactive() {
            if (this.loginType == 0) {
                return !this.account || !this.password || !this.captchaCode ? true : false
            } else {
                return this.telephone.length !== 11 || !this.smsCode ? true : false
            }
        }
    }
}
</script>
<style lang="scss">
page {
    .login {
        height: 100vh;

        .mpwx-login {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 60rpx;
            .logo {
                width: 180rpx;
                height: 180rpx;
                margin-bottom: 50rpx;
                margin-top: 200rpx;
            }
            .btn {
                background-color: #ff2c3c;
                width: 100%;
                margin: 80rpx auto 0;
                height: 100rpx;
            }
        }
        .phonebtn {
            border: $ls-solid-border;
            margin-top: 50rpx;
            width: 100%;
            height: 100rpx;
        }
        .input {
            height: 100rpx;
            border-radius: 10rpx;
            width: 670rpx;
            border: $ls-solid-border;
            margin-top: 30rpx;
        }
        .account-login {
            padding-top: 100rpx;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            box-sizing: border-box;
            padding-left: 60rpx;
            padding-right: 60rpx;
            .logo {
                width: 180rpx;
                height: 180rpx;
                margin-bottom: 50rpx;
                margin-top: 50rpx;
            }
            .btn {
                background-color: #ff2c3c;
                width: 100%;
                margin-top: 80rpx;
                height: 100rpx;
            }

            .sms-btn {
                border: 1px solid $ls-color-primary;
                width: 176rpx;
                height: 60rpx;
                box-sizing: border-box;
            }

            .captcha-img {
                width: 210rpx;
                height: 90rpx;
                margin-left: 20rpx;
            }

            .wx-login {
                margin-top: 60rpx;

                .image {
                    margin-top: 40rpx;
                    width: 80rpx;
                    height: 80rpx;
                }
            }
        }
    }
}
.comfirm-box {
    text-align: center;
    padding: 60rpx 0 70rpx 0;
}
.agreement {
    color: $ls-color-primary;
}
.inactive {
    opacity: 0.5;
}
</style>
