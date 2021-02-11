<template>
<!--components/recommend/recommend.wxml-->
<view class="recommend" v-if="goodsList.length">
    <!-- <view class="header row-center">
        <image class="title" src="/images/recommend_title.png" />
    </view> -->
    <view class="goods-title row-center">
        <text class="line"></text>
        <view class="row">
            <image class="mr10" src="/static/images/icon_like.png"></image>
            <text class="bold xxl">好物优选</text>
        </view>
        <text class="line"></text>
    </view>
    <goods-list :list="goodsList"></goods-list>
</view>
</template>

<script>
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
import { getBestList } from '../../api/store';
import goodsList from "../goods-list/goods-list";

export default {
  data() {
    return {
      goodsList: []
    };
  },

  components: {
    goodsList
  },
  props: {},
  beforeMount: function () {
    this.getBestListFun();
  },
  destroyed: function () {// 在组件实例被从页面节点树移除时执行
  },
  methods: {
    getBestListFun() {
      getBestList({
        page_no: 1,
        page_size: 6
      }).then(res => {
        if (res.code == 1) {
            this.goodsList = res.data.list
        }
      });
    }

  }
};
</script>
<style>
/* components/recommend/recommend.wxss */
.recommend {
    padding-bottom: 50rpx;
}
.recommend .header .title {
    width: 468rpx;
    height: 45rpx;
    margin: 10rpx 0;
}

.recommend .goods-title {
	height: 100rpx;
}
.recommend .goods-title .line {
		width: 58rpx;
		height: 1px;
		background-color: #ccc;
		margin: 0 22rpx;
}
.recommend .goods-title image {
	width: 38rpx;
	height: 38rpx;
}
</style>