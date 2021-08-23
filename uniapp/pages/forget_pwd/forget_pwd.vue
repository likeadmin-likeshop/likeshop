<template>
    <view class="forget-pwd-container">
        <view class="forget-input-container">
            <view class="input-item row">
                <view class="input-label md normal">手机号</view>
                <input class="input" v-model="mobile" placeholder="请输入手机号码" />
            </view>
            <view class="input-item row">
                <view class="input-label md normal">短信验证码</view>
                <input v-model="smsCode" placeholder="请输入" style="width: 3.8rem"/>
                <button class="bd-primary sm primary br60 row-center" @click="sendSmsFun()">
                    <view v-show="canSendSms" style="flex: none">获取验证码</view>
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
                </button>
            </view>
            <view class="input-item row">
                <view class="input-label md normal">重置密码</view>
                <input type="password" v-model="resetPwd" placeholder="6-20位数字+字母或符号组合" />
            </view>
            <view class="input-item row">
                <view class="input-label md normal">确认密码</view>
                <input type="password" v-model="comfirmPwd" placeholder="再次输入新密码确认" />
            </view>
        </view>
        <view class="btn bg-primary white br60 row-center" @click="forgetPwdFun">
            确认
        </view>
    </view>
</template>

<script>
    import {forgetPwd, sendSms} from '@/api/app.js'
    import { ACCESS_TOKEN } from '@/config/app.js'
    import {SMSType} from '@/utils/type.js'
    import {
    	mapMutations
    } from 'vuex'
    export default {
        name: 'forgetPwd',
        data() {
            return {
                mobile: '',
                smsCode: '',
                resetPwd: '',
                comfirmPwd: '',
                time: 59,
                canSendSms: true,
            }
        },
        onLoad() {
            
        },
        methods: {
            ...mapMutations(['LOGIN']),
            goPage(name) {
               uni.navigateTo({
                   url: name
               })
            },
            forgetPwdFun() {
                let {mobile, smsCode, resetPwd, comfirmPwd} = this;
                if(!mobile) {
                    this.$toast({title: '请填写手机号'});
                    return;
                }
                if(!smsCode) {
                    this.$toast({title: '请填写短信验证码'});
                    return;
                }
                if(!resetPwd) {
                    this.$toast({title: '请填写重置密码'});
                    return;
                }
                if(!comfirmPwd) {
                    this.$toast({title: '请填写确认密码'});
                    return;
                }
                if(resetPwd != comfirmPwd) {
                    this.$toast({title: '两次密码输入不一致'});
                    return;
                }
                let data = {
                    mobile: mobile,
                    code: smsCode,
                    password: resetPwd,
                    repassword: comfirmPwd
                };
                forgetPwd(data).then(res => {
                    if(res.code == 1) {
                        this.LOGIN(data);
                        this.$toast({title: res.msg});
                        //  跳转到登录页
                        setTimeout(() => {
                            uni.navigateBack()
                        }, 1000)
                    }
                })
            },
            countDownFinish() {
                this.canSendSms = true;
            },
            sendSmsFun() {
                if(this.canSendSms == false) {
                    return;
                }
                if(!this.mobile) {
                    this.$toast({title: '请填写手机号信息～'})
                    return; 
                }
                sendSms({mobile: this.mobile, key: SMSType.FINDPWD}).then(res => {
                    if(res.code == 1) {
                        this.canSendSms = false;
                        this.$toast(res.msg);
                        this.$refs.countDown.start();
                    }
                })
            }
        },
    }
</script>

<style lang="scss">
    .forget-pwd-container {
        background-color: white;
        min-height: 100vh;
        padding: 40px 20px 0;
        .forget-input-container {
            .input-item {
                padding: 0 10px;
                height: 44px;
                margin-bottom: 15px;
                border-bottom: 1px solid #D7D7D7;
                .input-label {
                    width: 90px;
                    font-size: 15px;
                    flex: none;
                }
                input {
                    flex: 1;
                    font-size: 15px;
                }
                .bd-primary {
                    height: 29px;
                    width: 88px;
                    flex: none;
                    border: 1px solid $-color-primary;
                    .seconds {
                        color: $-color-primary;
                    }
                }
            }
        }
        .btn {
            margin-top: 36px;
            width: 100%;
            padding: 10px 0px;
        }
    }
</style>
