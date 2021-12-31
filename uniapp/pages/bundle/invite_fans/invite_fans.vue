<template>
<!--pages/invite_fans/invite_fans.wxml-->
<view class="invite-fans-container column-center">
  <image style="width: 600rpx;height: 980rpx;border-radius: 20rpx;z-index: 6;" :src="imgUrl" />
   <!-- #ifdef MP-WEIXIN || APP-PLUS -->
  <view class="save-btn br60 md white row-center" @click="saveImageToAlbum">保存到相册</view>
  <!-- #endif -->
   <!-- #ifdef H5 -->
  <view class="save-btn br60 md white row-center">长按保存到相册</view>
   <!-- #endif -->
</view>
</template>

<script>
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------
import { getInviteBanner } from "@/api/user";
import { Tips } from "@/utils/tools.js";

export default {
  data() {
    return {
      imgUrl: ''
    };
  },

  components: {},
  props: {},

  onLoad: function (options) {
    this.getInviteBannerFun();
  },

  methods: {
    saveImageToAlbum() {
      // 下载网络图片到本地
      uni.downloadFile({
        url: this.imgUrl,
        success: res => {
          // #ifndef H5
          uni.saveImageToPhotosAlbum({
            filePath: res.tempFilePath,
            success: res => {
                console.log(res, "success")
                this.$toast({
                  title: "保存成功"
                });
            },
            fail: err => {
                console.log(err, 'fail')
            }
          });
          // #endif
          // #ifdef H5
          this.$toast({
              title: 请长按图片保存
          })
          // #endif
        }
      });
    },

    getInviteBannerFun() {
		// #ifdef H5 || APP-PLUS
		let path = '/'
		// #endif
		// #ifdef MP-WEIXIN
		let path = 'pages/index/index'
		// #endif
      getInviteBanner({
        url: path
      }).then(res => {
        if (res.code == 1) {
          this.imgUrl = res.data.url
        }
      });
    }

  }
};
</script>
<style lang="scss">
/* pages/invite_fans/invite_fans.wxss */
.invite-fans-container {
  padding: 0rpx 75rpx;
  background: linear-gradient(180deg, #333333 0%, #767676 100%);
  min-height: 100vh;
  .save-btn {
    background-color: $-color-primary;
    margin-top: 30rpx;
    width: 100%;
    padding: 20rpx 0;
  }
}
</style>