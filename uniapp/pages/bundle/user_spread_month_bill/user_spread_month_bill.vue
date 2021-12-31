<template>
<view class="user-spread-month-bill">
    <view v-for="(item, index) in orderList" :key="index">
        <view class="bill-time row normal sm">
            {{item.date}}
        </view>
        <view class="show-panel row">
            <view class="panel-item column-center">
                <price-format :price="item.total_money" showSubscript :subScriptSize="26" color="#FF2C3C" :firstSize="36" :secondSize="36" />
                <view class="lighter label mt10">预估收入</view>
            </view>
            <view class="panel-item column-center">
                <view class="normal xxl">{{item.order_num}}</view>
                <view class="lighter label mt10">成交笔数</view>
            </view>
            <view class="panel-item column-center" style="align-self: flex-end;">
                <navigator hover-class="none" :url="'/pages/bundle/user_spread_month_bill_detail/user_spread_month_bill_detail?year=' + item.year + '&month=' + item.month" class="row lighter">
                    查看详情<u-icon name="arrow-right" size="28rpx" color="#666666" />
                </navigator>
            </view>
        </view>
    </view>
    <loading-footer :status="loadingStatus" slotEmpty>            
        <view slot="empty" class="data-null column-center">
            <image src="/static/images/order_null.png" class="img-null"></image>
            <view class="muted xs">暂无相关数据～</view>
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
import { getMonthBill } from "@/api/user";
import { loadingType } from '@/utils/type';
import {loadingFun} from "@/utils/tools"
export default {
  data() {
    return {
      loadingStatus: loadingType.LOADING,
      page: 1,
      orderList: []
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.getMonthBillFun();
  },

  
  onReachBottom: function () {
      this.getMonthBillFun()
  },

  methods: {
    getMonthBillFun() {
      let {
        loadingStatus,
        page,
        orderList
      } = this;
      loadingFun(getMonthBill, page, orderList, loadingStatus).then(res => {
          if(res) {
              this.page = res.page;
              this.orderList = res.dataList
              this.loadingStatus = res.status
          }
      })
    }
  }
};
</script>
<style lang="scss">

.user-spread-month-bill {
    .bill-time {
        padding: 20rpx;
        line-height: 34rpx;
    }
    .show-panel {
        background-color: white;
        padding: 36rpx 0 26rpx;
    }
    .show-panel {
        .panel-item {
            flex: 1;
            line-height: 34rpx;
        }
    }
}

.data-null {
    padding-top: 200rpx;
}
</style>