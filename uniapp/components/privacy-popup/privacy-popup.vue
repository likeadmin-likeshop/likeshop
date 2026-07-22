<template>
  <view>
    <u-popup
      v-model="value"
      mode="bottom"
      zIndex="9999"
      border-radius="14"
      :maskCloseAble="false"
      safeAreaInsetBottom
    >
      <view class="privacy-containter" v-if="appConfig">
        <view class="privacy-containter-tital"
          >{{ appConfig.name || "" }}隐私政策</view
        >
        <view class="privacy-containter-tip"
          >欢迎你使用{{
            appConfig.name || ""
          }}！请仔细阅读以下内容，并作出适当的选择：</view
        >
        <view class="privacy-containter-outline">隐私政策概要</view>
        <view class=""
          >主要说明：我们所处理的信息种类、方式和目的；你所享有的权益；第三方插件信息等。</view
        >
        <view class="privacy-containter-read primary" @click="handleOpen"
          >点击阅读《隐私政策（小程序）》完整版 ></view
        >

        <button
          class="btn-comfirm"
          open-type="agreePrivacyAuthorization"
          @agreeprivacyauthorization="handleAgreePrivacyAuthorization"
        >
          同意并继续
        </button>
        <button class="btn-cancel" @click="handlecancel">取消</button>
      </view>
    </u-popup>
  </view>
</template>
<script>
import { mapGetters, mapActions } from "vuex";

export default {
  props: {
    value: {
      type: Boolean,
      default: false,
    },
  },

  data() {
    return {};
  },
  computed: {
    ...mapGetters(["appConfig"]),
  },
  methods: {
    handleOpen() {
      wx.openPrivacyContract({
        success: (res) => {
          console.log(res);
        },
        fail: (err) => {
          console.log(err);
        },
      });
    },
    handlecancel() {
      this.$toast({
        title: "须同意后才可继续使用",
      });
    },
    handleAgreePrivacyAuthorization() {
      this.$emit("input", false);
      uni.showTabBar();
      // if (this.appConfig.is_open_nearby) {
      //   // this.initLocationFunc();
      // }
    },
  },
};
</script>
<style lang="scss">
.privacy-containter {
  background-color: white;
  height: 750rpx;
  padding: 42rpx;
  &-tital {
    text-align: center;
    font-weight: 500;
    font-size: 36rpx;
  }
  &-tip {
    margin: 50rpx 0;
  }
  &-outline {
    font-weight: 500;
    margin-bottom: 15rpx;
  }
  &-read {
    margin-top: 15rpx;
  }
  .btn-comfirm {
    background-color: $-color-primary;
    color: white;
    height: 80rpx;
    line-height: 80rpx;
    margin-top: 50rpx;
  }
  .btn-cancel {
    background-color: #f7f7f7;
    height: 80rpx;
    line-height: 80rpx;
    margin-top: 30rpx;
  }
}
</style>
