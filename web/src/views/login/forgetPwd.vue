<template>
    <div class="forget-pwd-container">
        <div class="forget-input-container">
            <div class="input-item row">
                <div class="input-label md normal">手机号</div>
                <input class="input" v-model="mobile" placeholder="请输入手机号码" />
            </div>
            <div class="input-item row">
                <div class="input-label md normal">短信验证码</div>
                <input v-model="smsCode" placeholder="请输入" style="width: 3.8rem"/>
                <button class="bd-primary sm primary br60" @click="$sendSms()">
                <div v-show="canSendSms" style="flex: none">获取验证码</div>
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
                </button>
            </div>
            <div class="input-item row">
                <div class="input-label md normal">重置密码</div>
                <input type="password" v-model="resetPwd" placeholder="6-20位数字+字母或符号组合" />
            </div>
            <div class="input-item row">
                <div class="input-label md normal">确认密码</div>
                <input type="password" v-model="comfirmPwd" placeholder="再次输入新密码确认" />
            </div>
        </div>
        <div class="btn bg-primary white br60" @click="$forgetPwd">
            确认
        </div>
    </div>
</template>

<script>
import {forgetPwd, sendSms} from '@API/app'
import { ACCESS_TOKEN } from '@/configs'
import {SMSType} from '@U/type'
export default {
    name: 'forgetPwd',
    data() {
        return {
            mobile: '',
            smsCode: '',
            resetPwd: '',
            comfirmPwd: '',
            time: 60 * 1000,
            canSendSms: true,
        }
    },
    methods: {
        goPage(name) {
            this.$router.push(name)
        },
        $forgetPwd() {
            let {mobile, smsCode, resetPwd, comfirmPwd} = this;
            if(!mobile) {
                this.$toast({message: '请填写手机号'});
                return;
            }
            if(!smsCode) {
                this.$toast({message: '请填写短信验证码'});
                return;
            }
            if(!resetPwd) {
                this.$toast({message: '请填写重置密码'});
                return;
            }
            if(!comfirmPwd) {
                this.$toast({message: '请填写确认密码'});
                return;
            }
            if(resetPwd != comfirmPwd) {
                this.$toast({message: '两次密码输入不一致'});
                return;
            }
            let data = {
                mobile: mobile,
                code: smsCode,
                password: resetPwd,
                repassword: comfirmPwd,
                client: 2
            };
            forgetPwd(data).then(res => {
                if(res.code == 1) {
                    this.$ls.set(ACCESS_TOKEN, res.data.token);
                    this.$toast({message: res.msg});
                    //  跳转到登录页
                    setTimeout(() => {
                        this.goPage("login");
                    }, 1000)
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
            if(!this.mobile) {
                this.$toast('请填写手机号信息～')
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
    created() {

    },
    mounted() {

    }
}
</script>

<style lang="scss" scoped>
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
                    border: 1px solid $--color-text-primary;
                    .seconds {
                        color: $--color-text-primary;
                    }
                }
            }
        }
        .btn {
            margin-top: 36px;
            padding: 10px 135.5px;
        }
    }
</style>