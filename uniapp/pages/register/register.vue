<template>
    <view class="register-container">
        <view class="input-container">
            <view class="input-item row">
                <view class="input-label row md normal">手机号</view>
                <input v-model="mobile" class="input" placeholder="请输入手机号码" />
            </view>
            <view class="input-item row" v-if="appConfig.register_setting">
                <view class="input-label row md normal">短信验证码</view>
                <input v-model="smsCode" style="width: 3.8rem" placeholder="请输入" />
                <button class="bd-primary sm primary br60 row-center" @click="sendSmsFun()">
                    <!-- 获取验证码 -->
                    <view v-show="canSendSms" class="sm">获取验证码</view>
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
                <view class="input-label row md normal">设置密码</view>
                <input type="password" v-model="password" placeholder="6-20位数字+字母或符号组合" />
            </view>
            <view class="input-item row">
                <view class="input-label row md normal">确认密码</view>
                <input type="password" v-model="passwordConfirm" placeholder="6-20位数字+字母或符号组合" />
            </view>
        </view>
        <checkbox :checked="isAgree" icon-size="15px" :checked-color="primaryColor" @click="changeChecked">
            <view class="sm row">
            	已阅读并同意
            	<navigator @tap.stop="" class="primary" hover-class="none" url="/pages/bundle/server_explan/server_explan?type=0">《服务协议》</navigator>
            	和
            	<navigator @tap.stop="" class="primary" hover-class="none" url="/pages/bundle/server_explan/server_explan?type=1">《隐私协议》</navigator>
            </view>
        </checkbox>
        <view class="btn white bg-primary br60 row-center" @click="registerFun">
            立即注册
        </view>
    </view>
</template>

<script>
    import {register, sendSms} from '@/api/app.js'
    import { ACCESS_TOKEN } from '@/config/app.js'
    import {SMSType} from '@/utils/type.js'
    import {
    	mapMutations,
		mapGetters
    } from 'vuex'
    
    export default {
        name: 'register',
        created() {
    
        },
        data() {
            return {
                isAgree: false,
                mobile: '',
                smsCode: '',
                password: '',
                passwordConfirm: "",
                canSendSms: true,
                time: 59,
                primaryColor: '#FF2C3C'
            }
        },
        onLoad() {
			console.log(this.appConfig)
        },
        methods: {
           
            changeChecked() {
                this.isAgree = !this.isAgree
            },
            registerFun() {
                let {isAgree, mobile, password, smsCode, passwordConfirm} = this;
                if(!mobile) {
                    this.$toast({title: '请填写手机号'});
                    return;
                }
                if(!password) {
                    this.$toast({title: "请设置密码"})
                    return;
                }
                if(password != passwordConfirm) {
                    this.$toast({title: "两次密码输入不一致"})
                    return;
                }
                if(!isAgree) {
                    this.$toast({title: '请阅读并同意《隐私协议》《会员章程》'})
                    return;
                }
                let data = {mobile: mobile, password: password, code: smsCode, client: 2}
                register(data).then(res => {
                    if(res.code == 1) {
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
                sendSms({mobile: this.mobile, key: SMSType.REGISTER}).then(res => {
                    if(res.code == 1) {
                        this.canSendSms = false;
                        this.$toast(res.msg);
                        this.$refs.countDown.start();
                    }
                })
            }
        },
		computed: {
			...mapGetters(['appConfig']),
		}
    }
</script>

<style lang="scss">
    .register-container {
        background-color: white;
        min-height: 100vh;
        padding: 40px 20px 0;
        .input-container {
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
                    cursor: pointer;
                    .seconds {
                        color: $-color-primary;
                    }
                }
            }
        }
        .btn {
            margin-top: 36px;
            padding: 10px 0px;
            width: 100%;
        }
    }
</style>
