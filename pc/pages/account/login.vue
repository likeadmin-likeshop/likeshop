<template>
  <div class="login">
    <div class="login-container">
      <div class="login-float-form-wrap">
        <div class="login-box">
          <div class="login-header-box">
            <div class="header-tabs row-center">
              <div class="header-tab xxl" :class="{'active-tab': loginStatus == 0}" @click="changeLoginType(0)">
                验证码登录
              </div>
              <div class="header-tab xxl" :class="{'active-tab': loginStatus == 1}" @click="changeLoginType(1)">
                账号密码登录
              </div>
            </div>
            <div v-show="loginStatus == 0" @keyup.enter="smsLogin">
              <div class="login-form-box">
                <div class="login-form-item">
                  <el-input placeholder="请输入手机号码" v-model="telephone" class="input-phone-num">
                    <el-select style="width: 100px;" v-model="selectNumberType" slot="prepend" placeholder="请选择">
                      <el-option label="中国+86" value="1"></el-option>
                    </el-select>
                  </el-input>
                </div>
                <div class="login-form-item row">
                  <el-input v-model="captchaCode" placeholder="图形验证码" style="width: 210px" />
                  <img :src="captchaImg" class="verify-code-img" @click="getCaptchaImg" />
                </div>
                <div class="login-form-item row">
                  <el-input v-model="smsCode" placeholder="短信验证码" style="width: 210px" />
                  <el-button class="sms-btn" @click="sendSMSCode">
                    <div v-if="canSend">获取验证码</div>
                    <count-down v-else :time="60" format="ss秒" :autoStart="true" @finish="canSend = true" />
                  </el-button>
                </div>
              </div>
              <div class="option-box column" style="margin-top: 30px">
                <el-checkbox v-model="isRemember" class="muted">记住账号</el-checkbox>
                <div class="mt10 column">
                  <el-button type="primary" @click="smsLogin" >立即登录</el-button>
                </div>
              </div>
            </div>
            <div v-show="loginStatus == 1" @keyup.enter="accountLogin">
              <div class="login-form-box">
                <div class="login-form-item">
                  <el-input placeholder="请输入账号/手机号码" v-model="account" class="input-phone-num">
                    <i class="el-icon-user" style="font-size: 18px" slot="prepend"></i>
                  </el-input>
                </div>
                <div class="login-form-item row">
                  <el-input v-model="password" placeholder="请输入密码" show-password >
                    <i class="el-icon-more-outline" style="font-size: 18px" slot="prepend"/>
                  </el-input>
                </div>
                <div class="login-form-item row">
                  <el-input v-model="captchaCode" placeholder="图形验证码" style="width: 210px" />
                  <img :src="captchaImg" class="verify-code-img" @click="getCaptchaImg" />
                </div>
              </div>
              <div class="option-box column">
                <div class="row-between">
                  <el-checkbox v-model="isRemember" class="muted">记住账号</el-checkbox>
                  <nuxt-link class="muted" to="/account/forget_pwd">忘记密码？</nuxt-link>
                </div>
                <div class="mt10 column">
                  <el-button type="primary" @click="accountLogin">立即登录</el-button>
                </div>
              </div>
            </div>
          </div>
          <div class="login-footer-box row-between">
            <div class="row">
              <!-- <div class="muted">第三方登录：</div>
              <el-image class="ml8" style="width: 24px;height: 24px;" /> -->
            </div>
            <nuxt-link class="primary" to="/account/register">
              注册账号
            </nuxt-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {loginType, client, SMSType} from '@/utils/type'
import Cookies from 'js-cookie'
import { mapMutations, mapActions } from 'vuex'
import CountDown from '@/components/public/countDown'
export default {
  head() {
    return {
      title: this.$store.getters.headTitle,
       link: [{ rel: "icon", type: "image/x-icon", href: this.$store.getters.favicon}],
    };
  },
  layout: "default_layout",
  components: {
    CountDown
  },
  async asyncData({$get, $post}) {
    return {
      userInfo: {}
    }
  },
  data() {
    return {
      // 选择电话类型
      selectNumberType: '中国+86',
      // 账号
      account: '',
      // 密码
      password: '',
      // 电话号码
      telephone: '',
      // 图形验证码
      verifyCode: '',
      // 短信验证码
      smsCode: '',
      isRemember: true,
      // 短信登陆或账号登陆 0 ==》 短信 1 ==》账号
      loginStatus: loginType.SMS,
      canSend: true,
      captchaCode: '',
      captchaImg: '',
      captchaKey: ''
    }
  },
  created() {
    this.getCaptchaImg()
  },
  mounted() {
    let jsonPaser = JSON.parse(localStorage.getItem("ACCOUNT"));
    let telJson = JSON.parse(localStorage.getItem("TEL"))
    if(jsonPaser && jsonPaser.account) {
      this.account = jsonPaser.account;
    }
    if(telJson && telJson.telephone) {
      this.telephone = telJson.telephone
    }
  },
  methods: {
    async getCaptchaImg() {
      try {
        const res = await this.$get('account/captcha')
        if (res.code == 1) {
          this.captchaImg = res.data.image || ''
          this.captchaKey = res.data.key || ''
        }
      } catch (error) {
        this.captchaImg = ''
        this.captchaKey = ''
      }
    },
    changeLoginType(type) {
      this.loginStatus = type
      if (type == 0 && !this.captchaImg) {
        this.getCaptchaImg()
      }
      this.telephone = '';
      this.verifyCode = '';
      this.smsCode = '';
      let jsonPaser = JSON.parse(localStorage.getItem("ACCOUNT"));
      let telJson = JSON.parse(localStorage.getItem("TEL"))
      if(jsonPaser && jsonPaser.account) {
        this.account = jsonPaser.account;
      }
      if(telJson && telJson.telephone) {
        this.telephone = telJson.telephone
      }
    },
    async sendSMSCode() {
      if(!this.canSend) {
        return
      }
      if (!this.telephone) {
        this.$message({
          message: '请输入手机号',
          type: 'error'
        })
        return
      }
      if (!this.captchaCode) {
        this.$message({
          message: '请输入图形验证码',
          type: 'error'
        })
        return
      }
      if (!this.captchaKey) {
        this.$message({
          message: '图形验证码已失效，请重新获取',
          type: 'error'
        })
        this.getCaptchaImg()
        return
      }
      let res = await this.$post("sms/send", {
        mobile: this.telephone,
        key: SMSType.LOGIN,
        client,
        captcha_key: this.captchaKey,
        captcha: this.captchaCode
      })
      if(res.code == 1) {
        this.$message({
          message: res.msg,
          type: 'success'
        });
        this.canSend = false;
      } else {
        this.getCaptchaImg()
        this.captchaCode = ''
      }
    },
    async smsLogin() {
      let res = await this.$post('account/smsLogin', {
        account: this.telephone,
        code: this.smsCode,
        client,
      })
      if(res.code == 1) {
        const token = res.data.token;
        Cookies.set("token", token, {expires: 60});
        this.setToken(token);
        this.$router.replace({
          path: Cookies.get("back_url") || '/',
        })
        Cookies.remove('back_url');
        this.getPublicData();
        if(this.isRemember) {
          localStorage.setItem('TEL', JSON.stringify({
            telephone: this.telephone,
          }))
        }
        else {
          localStorage.setItem('TEL', JSON.stringify({
            telephone: '',
          }))
        }
      }
    },
    async accountLogin() {
      if (!this.captchaCode) {
        this.$message({
          message: '请输入图形验证码',
          type: 'error'
        })
        return
      }
      if (!this.captchaKey) {
        this.$message({
          message: '图形验证码已失效，请重新获取',
          type: 'error'
        })
        this.getCaptchaImg()
        return
      }
      let res = await this.$post('account/login', {
        account: this.account,
        password: this.password,
        client,
        captcha_key: this.captchaKey,
        captcha: this.captchaCode
      })
      if(res.code == 1) {
        const token = res.data.token
        Cookies.set('token', token, { expires: 60 });
        this.setToken(token)
        this.$router.replace({
          path: Cookies.get('back_url') || '/'
        })
        Cookies.remove('back_url')
        this.getPublicData()
        if(this.isRemember) {
          localStorage.setItem('ACCOUNT', JSON.stringify({
            account: this.account,
          }))
        }
        else {
          localStorage.setItem('ACCOUNT', JSON.stringify({
            account: '',
          }))
        }
      } else {
        this.getCaptchaImg()
        this.captchaCode = ''
      }
    },
    ...mapMutations([
      'setToken'
    ]),
    ...mapActions(['getPublicData'])
  }
}
</script>

<style lang="scss" scoped>
  .login {
    background-image: url(../../assets/images/login_bg.png);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50%;
    height: 640px;
    min-width: 1180px;
    .login-container {
      margin: 0 auto;
      width: 1180px;
      height: 100%;
      position: relative;
      .login-float-form-wrap {
        position: absolute;
        top: 140px;
        right: 60px;
        width: 400px;
        .login-box {
          background-color: white;
          width: 400px;
          min-height: 400px;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          .login-header-box {
            padding-top: 20px;
            .header-tabs {
              .header-tab {
                width: 160px;
                height: 35px;             
                display: flex;
                flex-direction: column;
                align-items: center;
                cursor: pointer;
              }
              .active-tab {
                color: $-color-primary;
                text-align: center;
                &::after {
                  content: "";
                  height: 2px;
                  width: 72px;
                  margin-top: 8px;
                  background-color: $-color-primary;
                }
              }
            }
            .login-form-box {
              padding: 0 30px;
              .login-form-item {
                margin-top: 24px;
                .input-phone-num {
                  width: 340px;
                }
                .verify-code-img {
                  width: 100px;
                  height: 40px;
                  margin-left: 20px;
                  cursor: pointer;
                }
                .sms-btn {
                  margin-left: 20px;
                  height: 40px;
                }
              }
            }
            .option-box {
              padding: 0 30px;
              margin-top: 60px;
              ::v-deep .el-checkbox {
                color: #888;
              }
            }
          }
          .login-footer-box {
            height: 50px;
            background-color: #F2F2F2;
            padding: 15px ;
          }
        }
      }
    }
  }
</style>
