<template>
  <div class="register-container column-center">
    <div class="register-box column-center bg-white">
      <div class="register-title">注册账号</div>
      <el-form class="form-box column">
        <div class="register-form-item">
          <el-input
            class="form-input"
            v-model="telephone"
            placeholder="请输入手机号码"
          >
            <i class="el-icon-user" style="font-size: 18px" slot="prepend" />
          </el-input>
        </div>
        <div class="register-form-item row" v-if="registerSetting">
          <el-input v-model="captchaCode" class="form-input" placeholder="图形验证码" style="width: 264px" />
          <img :src="captchaImg" class="verify-code-img" @click="getCaptchaImg" />
        </div>
        <div class="register-form-item row" v-if="registerSetting">
          <el-input
            v-model="smsCode"
            class="form-input"
            placeholder="短信验证码"
            style="width: 264px"
          />
          <el-button class="sms-btn" @click="sendSMSCode">
            <div v-if="canSend">获取验证码</div>
            <count-down
              v-else
              :time="60"
              format="ss秒"
              autoStart
              @finish="canSend = true"
            />
          </el-button>
        </div>
        <div class="register-form-item">
          <el-input
            v-model="password"
            placeholder="请输入密码 (数字与字母自由组合)"
            show-password
          >
            <i
              class="el-icon-more-outline"
              style="font-size: 18px"
              slot="prepend"
            />
          </el-input>
        </div>
        <div class="register-form-item">
          <el-input v-model="againPwd" placeholder="再次输入密码" show-password>
            <i class="el-icon-key" style="font-size: 18px" slot="prepend" />
          </el-input>
        </div>
        <div class="row-between" >
          <div class="mt20">
            <el-checkbox v-model="isAgree">
              <span class="black">已阅读并同意</span>
              <nuxt-link
                @click.stop
                class="primary"
                to="/server_explan?type=1"
                target="_blank"
              >
                《服务协议》、
                 </nuxt-link
              >
              <nuxt-link
                @click.stop
                class="primary"
                to="/server_explan?type=2"
                target="_blank"
              >
                《隐私政策》
              </nuxt-link>
            </el-checkbox>
          </div>
        </div>
        <div class="mt20 column">
          <el-button type="primary" @click="registerFun">立即注册</el-button>
        </div>
        <div class="row row-center" style="margin-top: 36px">
          <nuxt-link to="/account/login">已有账号，去登录</nuxt-link>
        </div>
      </el-form>
    </div>
  </div>
</template>

<script>
import { client, SMSType } from "@/utils/type";
import CountDown from "@/components/public/countDown";
export default {
  head() {
    return {
      title: this.$store.getters.headTitle,
      link: [
        {
          rel: "icon",
          type: "image/x-icon",
          href: this.$store.getters.favicon,
        },
      ],
    };
  },
  layout: "default_layout",
  components: {
    CountDown,
  },
  async asyncData({ $get }) {
    let registerSetting = false;
    let res = await $get("index/config");
    if (res.code == 1) {
      registerSetting = res.data.register_setting ? true : false;
    }
    return {
      registerSetting,
    };
  },
  data() {
    return {
      telephone: "",
      smsCode: "",
      password: "",
      againPwd: "",
      isAgree: false,
      canSend: true,
      captchaCode: '',
      captchaImg: '',
      captchaKey: ''
    };
  },
  mounted() {
    if (this.registerSetting) {
      this.getCaptchaImg()
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
    async sendSMSCode() {
      if (!this.canSend) {
        return;
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
        key: SMSType.REGISTER,
        captcha_key: this.captchaKey,
        captcha: this.captchaCode
      });
      if (res.code == 1) {
        this.$message({
          message: res.msg,
          type: "success",
        });
        this.canSend = false;
      } else {
        this.getCaptchaImg()
        this.captchaCode = ''
      }
    },
    async registerFun() {
      if (!this.isAgree) {
        this.$message({
          message: "请勾选已阅读并同意《服务协议》、《政策协议》",
          type: "error",
        });
        return;
      }
      if (!this.telephone) {
        this.$message({
          message: "请输入手机号",
          type: "error",
        });
        return;
      }
      if (this.registerSetting && !this.smsCode) {
        this.$message({
          message: "请输入短信验证码",
          type: "error",
        });
        return;
      }
      if (!this.password) {
        this.$message({
          message: "请输入密码",
          type: "error",
        });
        return;
      }
      if (this.password != this.againPwd) {
        this.$message({
          message: "两次密码输入不一致",
          type: "error",
        });
        return;
      }
      let res = await this.$post("account/register", {
        mobile: this.telephone,
        password: this.password,
        code: this.smsCode,
        client: client,
      });
      if (res.code == 1) {
        this.$message({
          message: "注册成功",
          type: "success",
        });
        this.$router.push("/account/login");
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.register-container {
  flex: 1;
  .register-box {
    padding-top: 40px;
    padding-bottom: 55px;
    width: 880px;
    border: 1px solid #e5e5e5;
    .register-title {
      font-size: 24px;
    }
    .form-box {
      .register-form-item {
        margin-top: 24px;
        .form-input {
          width: 400px;
        }
        .verify-code-img {
          width: 100px;
          height: 40px;
          margin-left: 26px;
          cursor: pointer;
        }
        .sms-btn {
          margin-left: 16px;
          height: 40px;
          width: 120px;
        }
      }
    }
  }
}
</style>
