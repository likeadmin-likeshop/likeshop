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
    <div class="register-container">
        <div class="input-container">
            <div class="input-item row">
                <div class="input-label row md normal">手机号</div>
                <input v-model="mobile" class="input" placeholder="请输入手机号码" />
            </div>
            <div class="input-item row">
                <div class="input-label row md normal">短信验证码</div>
                <input v-model="smsCode" style="width: 3.8rem" placeholder="请输入" />
                <button class="bd-primary sm primary br60 row-center" @click="$sendSms()">
                    <!-- 获取验证码 -->
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
                </button>
            </div>
            <div class="input-item row">
                <div class="input-label row md normal">设置密码</div>
                <input type="password" v-model="password" placeholder="6-20位数字+字母或符号组合" />
            </div>
            <div class="input-item row">
                <div class="input-label row md normal">确认密码</div>
                <input type="password" v-model="passwordConfirm" placeholder="6-20位数字+字母或符号组合" />
            </div>
        </div>
        <van-checkbox v-model="isAgree" icon-size="15px" :checked-color="primaryColor">
            <div class="xs">已阅读并同意《隐私协议》《会员章程》</div>
        </van-checkbox>
        <div class="btn white bg-primary br60 row-center" @click="$register">
            立即注册
        </div>
    </div>
</template>

<script>
import {register, sendSms} from '@API/app'
import { ACCESS_TOKEN } from '@/configs'
import {SMSType} from '@U/type'

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
            time: 60 * 1000
        }
    },
    mounted() {
    },
    methods: {
        $register() {
            let {isAgree, mobile, password, smsCode, passwordConfirm} = this;
            if(!mobile) {
                this.$toast({message: '请填写手机号'});
                return;
            }
            if(!smsCode) {
                this.$toast({message: "请填写短信验证码"})
                return;
            }
            if(!password) {
                this.$toast({message: "请设置密码"})
                return;
            }
            if(password != passwordConfirm) {
                this.$toast({message: "两次密码输入不一致"})
                return;
            }
            if(!isAgree) {
                this.$toast({message: '请阅读并同意《隐私协议》《会员章程》'})
                return;
            }
            let data = {mobile: mobile, password: password, code: smsCode, client: 2}
            register(data).then(res => {
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

        goPage(name) {
            this.$router.push(name)
        },

        $sendSms() {
            if(this.canSendSms == false) {
                return;
            }
            if(!this.mobile) {
                this.$toast('请填写手机号信息～')
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
    }
}
</script>

<style lang="scss" scoped>
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
                    border: 1px solid $--color-text-primary;
                    cursor: pointer;
                    .seconds {
                        color: $--color-text-primary;
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