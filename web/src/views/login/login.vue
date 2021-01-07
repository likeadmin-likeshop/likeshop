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

<template>
    <div class="login-container">
        <div class="login-logo row-center">
            <img src="@A/images/shop_logo.png" />
        </div>
        <div class="login-input-container" v-if="loginType == 0">
            <div class="login-input-item row">
                <input v-model="telephone" name="mobile" placeholder="请输入手机号码" />
            </div>
            <div class="row login-input-item">
                <input v-model="password" type="password" name="pwd" placeholder="请输入密码" />
                <div class="line"></div>
                <div class="forget-pwd nr row" @click="goPage('forgetPwd')">
                    <span>
                        忘记密码
                    </span>
                </div>
            </div>
        </div>
        <div class="login-input-container" v-if="loginType == 1">
            <div class="login-input-item row">
                <input v-model="telephone" name="mobile" placeholder="请输入手机号码"/>
            </div>
            <div class="row login-input-item">
                <input v-model="smsCode" name="code" placeholder="请输入验证码"/>
                <div class="btn primary sm row-center br60" @click="$sendSms">
                    <div v-show="canSendSms">获取验证码</div>
                        <van-count-down
                        ref="countDown"
                        :auto-start="false" 
                        :time="time" 
                        format=" ss 秒" 
                        v-show="!canSendSms" 
                        @finish="countDownFinish">
                            <template #default="timeData">
                                <div class="seconds" >{{timeData.seconds}}秒</div>
                            </template>
                        </van-count-down>
                </div>
            </div>
        </div>
        <button class="primary-btn row-center br60" style="margin-top: 40px;" @click="login" type="submit">
            登录
        </button>
        <div class="row-between" style="margin-top: 25px;">
            <div class="lighter nr" @click="changeLoginType"> {{this.loginType == 0 ? '短信验证码登录' : '账号密码登录'}}</div>
            <div class="lighter nr" @click="goPage('register')">注册账号</div>
        </div>
        <div class="other-way-contain column-center">
            <div class="row">
                <div class="row-line"></div>
                <div class="sm ml10 mr10 muted">其他登录方式</div>
                <div class="row-line"></div>
            </div>
            <div class="login-way-contain column-center" @click="$weichatLogin()">
                <div class="img-wechat">
                    <img src="@A/images/pay_wechat.png"/>
                </div>
                <div class="mt5">
                    微信登录
                </div>
            </div>
        </div>
        <div class="row-center">
            <div class="server-explain row-center">
                登录即代表您已同意likeShop<span class="primary" @click="goPage('serverExplain', 0)">服务协议</span>和<span class="primary" @click="goPage('serverExplain', 1)">隐私协议</span>
            </div>
        </div>
    </div>
</template>

<script>
import {pwdLogin, smsCodeLogin, sendSms, weichatLogin, getCodeUrl} from '@API/app'
import { ACCESS_TOKEN } from '@/configs'
import {inputInviteCode} from "@API/user"
import {SMSType} from '@U/type'
const loginType = {
    ACCOUNT_LOGIN: 0,
    SMS_CODE_LOGIN: 1,
}
export default {
    name: 'login',
    data() {
        return {
            loginType: 0,
            telephone: '',
            password: '',
            smsCode: '',
            time: 60 * 1000,
            canSendSms: true,
        }
    },
    methods: {
        goPage(name, query) {
            if(query) {
                this.$router.push({name: name, query: {
                    type: query
                }})
                return;
            }
            this.$router.push({name: name})
        },
        changeLoginType() {
            if(this.loginType == loginType.ACCOUNT_LOGIN) {
                this.loginType = loginType.SMS_CODE_LOGIN
            }
            else if(this.loginType == loginType.SMS_CODE_LOGIN) {
                this.loginType = loginType.ACCOUNT_LOGIN
            }
        },

        login() {
            if(this.loginType == loginType.ACCOUNT_LOGIN) {
                this.$pwdLogin()
            }
            else {
                this.$smsCodeLogin()
            }
        },
        $weichatLogin() {
            getCodeUrl({
                url: window.location.href
            }).then(res => {
                window.location.href = res.data.url;
                // weichatLogin().then(res => {
                //     if(res.code == 1) {
    
                //     }
                // })
            })
        },
        $pwdLogin() {
            let {telephone, password, client} = this;
            if(!telephone) {
                this.$toast({ message: "请填写手机号" });
                return;
            }
            if(!password) {
                this.$toast({ message: "请填写密码" });
                return;
            }
            pwdLogin({account: telephone, password: password}).then(res => {
                if(res.code == 1) {
                    this.$store.commit("LOGIN", res.data);
                    const backPath =  this.$ls.get("back_path") || "/";
                    this.$ls.remove("back_path");
                    this.$toast({message: "登录成功"});
                    this.$router.replace({ path: backPath });
                }
            })
        },
        $smsCodeLogin() {
            let {telephone, smsCode, client} = this;
            if(!telephone) {
                this.$toast({message: '请填写手机号'});
                return;
            }
            if(!smsCode) {
                this.$toast({message: '请填写手机验证码'});
                return;
            }
            smsCodeLogin({account: telephone, code: smsCode}).then(res => {
                if(res.code == 1) {
                    this.$store.commit("LOGIN", res.data);
                    const backPath =  this.$ls.get("back_path") || "/";
                    this.$ls.remove("back_path");
                    this.$router.replace({ path: backPath });
                }
            })
        },
        countDownFinish() {
            this.$refs.countDown.reset()
            this.canSendSms = true;
        },
        $sendSms() {
            if(this.canSendSms == false) {
                return;
            }
            if(!this.telephone) {
                this.$toast('请填写手机号信息～')
                return; 
            }
            
            sendSms({
                mobile: this.telephone, 
                key: SMSType.LOGIN
            }).then(res => {
                if(res.code == 1) {
                    this.canSendSms = false;
                    this.$refs.countDown.start();
                    this.$toast(res.msg);
                }
            })
        },
    },
    created() {

    }
}
</script>

<style lang="scss" scoped>
img {
    width: 100%;
    height: 100%;
}
.login-container {
    padding: 6px 20px;
    background-color: #fff;
    min-height: 100vh;
    .login-logo {
        margin: 30px 0;
        img{
            width: 140px;
            height: 40px;
        }
    }
    .server-explain {
        position: fixed;
        bottom: 20px;
    }
    .login-input-container {
        .login-input-item {
            padding: 12px 0 12px 10px; 
            border-bottom: 1px solid #D7D7D7;
            margin-bottom: 15px;
            input {
                height: 21px;
                font-size: 15px;
                flex: 1;
            }
            .line {
                background-color: #cccccc;
                width: 1px;
                height: 17px;
                margin: 0 10px;
            }
            .forget-pwd {
                width: 66px;
                line-height: 18px;
            }
            .btn {
                border: 1px solid $--color-text-primary;
                width: 88px;
                height: 29px;
                box-sizing: border-box;
                .seconds {
                    color: $--color-text-primary;
                }
            }
        }
    }
    .primary-btn {
        background-color: $--color-text-primary;
        color: white;
        width: 100%;
        padding: 10px 0;
    }
    .other-way-contain {
        margin-top: 93px;
        .row-line {
            width: 100px;
            height: 1px;
            background-color: #D7D7D7;
        }
        .img-wechat {
            width: 40px;
            height: 40px;
            flex: none;
        }
        .login-way-contain {
            margin-top: 20px;
        }
    }
}
</style>