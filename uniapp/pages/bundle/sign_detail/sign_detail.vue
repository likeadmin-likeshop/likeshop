<template>
<!--pages/sign_detail/sign_detail.wxml-->

<view class="sign-detail-container">
  <view v-for="(item, index) in detailList" :key="index">
    <view class="sign-item row-between">
      <view>
        <view class="nr sign-type">{{item.source_type}}</view>
        <view class="muted xs mt10" style="line-height: 33rpx">{{item.create_time}}</view>
      </view>
      <view>
        <text class="primary lg" style="line-height: 45rpx">{{item.change_amount}}</text>
      </view>
    </view>
  </view>
  <loading-footer :status="loadingStatus" slotEmpty>
    <view class="data-null column-center" slot="empty">
      <image src="/static/images/order_null.png" class="img-null"></image>
      <view class="muted sm">暂无其他记录～</view>
    </view>
  </loading-footer>
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
import { loadingType } from '@/utils/type';
import { getAccountLog } from '@/api/user.js';
import {loadingFun} from "@/utils/tools"

export default {
  data() {
    return {
      rule: '',
      loadingStatus: loadingType.LOADING,
      detailList: [],
      page: 1
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.getAccountLogFun();
  },

  onReachBottom: function () {
    this.getAccountLogFun();
  },

  methods: {
    getAccountLogFun() {
      let {
        detailList,
        loadingStatus,
        page
      } = this;
      
      loadingFun(getAccountLog, page, detailList, loadingStatus, {source: 2}).then(res => {
          if(res) {                  
              this.page = res.page;
              this.detailList = res.dataList
              this.loadingStatus = res.status
          }
      })
    }

  }
};
</script>
<style lang="scss">
/* pages/sign_detail/sign_detail.wxss */

.sign-detail-container {
  margin-top: 20rpx;
}

.sign-detail-container .sign-item {
  padding: 18rpx 30rpx;
  background-color: #fff;
  border-bottom: $-solid-border;
}

.sign-type {
  line-height: 40rpx;
}

.data-null {
  padding-top: 100rpx;
}
</style>