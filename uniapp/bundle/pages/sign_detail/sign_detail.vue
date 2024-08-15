<template>
<!--pages/sign_detail/sign_detail.wxml-->

<view class="sign-detail-container">
  <view v-for="(item, index) in detailList" :key="index">
    <view class="sign-item row-between">
      <view class="flexnone">
        <view class="nr sign-type">{{item.source_type}}</view>
        <view class="muted xs mt10" style="line-height: 33rpx">{{item.create_time}}</view>
      </view>
      <view class="column-end" style="align-items: flex-end;">
        <text class="lg" :class="{
			primary: item.change_type == 1,
			normal:  item.change_type == 2
		}" style="line-height: 45rpx">{{item.change_amount}}</text>
		<view v-if="item.remark" style="width: 300rpx"  class="xxs primary">备注：{{ item.remark }}</view>
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
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
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