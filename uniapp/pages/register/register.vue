<template>
  <view>
    <!-- #ifndef  H5 -->
    <u-sticky offset-top="0" h5-nav-height="0" bg-color="transparent">
      <u-navbar
        :is-back="true"
        title="注册账号"
        :title-bold="true"
        :is-fixed="false"
        :border-bottom="false"
        :background="{ background: 'rgba(256,256, 256,0)' }"
      ></u-navbar>
    </u-sticky>
    <!-- #endif -->
    <view class="register-container">
      <view class="input-container">
        <view class="xxl bold">注册新账号</view>

        <view class="input row" style="padding: 15rpx">
          <u-input
            v-model="mobile"
            placeholder="请输入手机号码"
            type="number"
          />
        </view>

        <view
          class="input row"
          style="padding: 15rpx"
          v-if="appConfig.register_setting"
        >
          <u-input
            v-model="smsCode"
            style="flex: 1"
            placeholder="请输入验证码"
            :input-border="false"
          />
          <view class="row">
            <view
              class="row-center sms-btn sm br60"
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

          <!-- <view class="input-label row md normal">短信验证码 </view>
          <input v-model="smsCode" style="width: 3.8rem" placeholder="请输入" />
          <button
            class="bd-primary sm primary br60 row-center"
            @click="sendSmsFun()"
          >

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
          </button> -->
        </view>
        <view class="input row" style="padding: 15rpx">
          <u-input
            type="password"
            v-model="password"
            placeholder="请输入密码"
          />
        </view>
        <view class="input row" style="padding: 15rpx">
          <u-input
            type="password"
            v-model="passwordConfirm"
            placeholder="请在次输入密码"
          />
        </view>
      </view>
      <u-checkbox v-model="isAgree" shape="circle" class="mt20">
        <view class="sm row">
          已阅读并同意
          <navigator
            @tap.stop=""
            class="primary"
            hover-class="none"
            url="/bundle/pages/server_explan/server_explan?type=0"
            >《服务协议》</navigator
          >
          和
          <navigator
            @tap.stop=""
            class="primary"
            hover-class="none"
            url="/bundle/pages/server_explan/server_explan?type=1"
            >《隐私协议》</navigator
          >
        </view>
      </u-checkbox>
      <button
        class="btn white bg-primary row-center"
        @click="registerFun"
        :class="{ inactive }"
      >
        注册
      </button>
    </view>
    <!-- 阅读协议弹框 -->
    <u-modal
      :value="showModel"
      show-cancel-button
      :show-title="false"
      @confirm="(isAgree = true), (showModel = false)"
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
import { register, sendSms } from "@/api/app.js";
import { ACCESS_TOKEN } from "@/config/app.js";
import { SMSType } from "@/utils/type.js";
import { mapMutations, mapGetters } from "vuex";

export default {
  name: "register",
  created() {},
  data() {
    return {
      isAgree: false,
      mobile: "",
      smsCode: "",
      password: "",
      passwordConfirm: "",
      canSendSms: true,
      time: 59,
      primaryColor: "#FF2C3C",
      showModel: false,
    };
  },
  onLoad() {
    console.log(this.appConfig);
  },
  computed: {
    ...mapGetters(["appConfig"]),

    inactive() {
      if (this.appConfig.register_setting) {
        if (
          this.mobile.length !== 11 ||
          !this.smsCode ||
          !this.password ||
          !this.passwordConfirm
        ) {
          return true;
        } else {
          return false;
        }
      } else {
        if (
          this.mobile.length !== 11 ||
          !this.password ||
          !this.passwordConfirm
        ) {
          return true;
        } else {
          return false;
        }
      }
    },
  },
  methods: {
    changeChecked() {
      this.isAgree = !this.isAgree;
    },
    registerFun() {
      let { isAgree, mobile, password, smsCode, passwordConfirm } = this;
      if (!mobile) {
        this.$toast({ title: "请填写手机号" });
        return;
      }
      if (!password) {
        this.$toast({ title: "请设置密码" });
        return;
      }
      if (password != passwordConfirm) {
        this.$toast({ title: "两次密码输入不一致" });
        return;
      }
      if (!isAgree) {
        // this.$toast({ title: "请阅读并同意《服务协议》《隐私协议》" });
        this.showModel = true;
        return;
      }
      let data = {
        mobile: mobile,
        password: password,
        code: smsCode,
        client: 2,
      };
      register(data).then((res) => {
        if (res.code == 1) {
          this.$toast({ title: res.msg });
          //  跳转到登录页
          setTimeout(() => {
            uni.navigateBack();
          }, 1000);
        }
      });
    },

    countDownFinish() {
      this.canSendSms = true;
    },

    sendSmsFun() {
      if (this.mobile.length !== 11) {
        this.$toast({
          title: "请填写正确的手机号信息",
        });
        return;
      }
      if (this.canSendSms == false) {
        return;
      }

      sendSms({ mobile: this.mobile, key: SMSType.REGISTER }).then((res) => {
        if (res.code == 1) {
          this.canSendSms = false;
          this.$toast(res.msg);
          this.$refs.countDown.start();
        }
      });
    },
  },
};
</script>

<style lang="scss">
page {
  background-image: url(data:image/png;base64,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VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVhDw4EAAAAAID8XxtBVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYgwMBAAAAACD/10ZQVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVRX24EAAAAAAAMj/tRFUVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVYU9OBAAAAAAAPJ/bQRVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVWEPDgQAAAAAgPxfG0FVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVdiDAwEAAAAAIP/XRlBVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVFfbgQAAAAAAAyP+1EVRVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVhT04EAAAAAAA8n9tBFVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVYQ8OBAAAAACA/F8bQVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV2IMDAQAAAAAg/9dGUFVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVUV9uBAAAAAAADI/7URVFVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVWlPTgkAAAAABD0/7UrbAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwCyxTIL6Xzr2zwAAAABJRU5ErkJggg==);
}
.register-container {
  min-height: 100vh;
  padding: 40px 20px 0;
  .input-container {
    .input {
      height: 100rpx;
      border-radius: 10rpx;
      width: 670rpx;
      border: $-solid-border;
      margin-top: 30rpx;
    }
    .input-item {
      padding: 0 10px;
      height: 44px;
      margin-bottom: 15px;
      border-bottom: 1px solid #d7d7d7;
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
    background-color: #ff2c3c;
    width: 100%;
    margin-top: 80rpx;
    height: 100rpx;
  }
}
.comfirm-box {
  text-align: center;
  padding: 60rpx 0 70rpx 0;
}
.agreement {
  color: $-color-primary;
}
.inactive {
  opacity: 0.5;
}
</style>
