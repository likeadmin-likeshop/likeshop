<template>
<!--pages/user_bill/user_bill.wxml-->
<view class="user-bill">
    <tabs :active="active" line-width="40" @change="onChange">
        <tab title="全部">
            <view class="list mt20">
                <view v-for="(item, index) in lists" :key="index" class="item">
                    <view class="bill-list bg-white">
                        <view class="bill-item row-between">
                            <view>
                                <view class="black mb10">{{item.source_type}}</view>
                                <view class="xs muted">{{item.create_time}}</view>
                            </view>
                            <view :class="'lg ' + (item.change_type == 1 ? 'income' : '')">{{item.change_amount}}</view>
                        </view>
                    </view>
                </view>
            </view>
            <loading-footer :status="loadingStatus" slotEmpty>
                <view class="data-null column-center">
                    <image class="img-null" src="/static/images/order_null.png" />
                    <text class="nr muted">暂无记录～</text>
                </view>
            </loading-footer>
        </tab>
        <tab title="消费">
            <view class="list mt20">
                <view v-for="(item, index) in lists" :key="index" class="item">
                    <view class="bill-list bg-white">
                        <view class="bill-item row-between">
                            <view>
                                <view class="black mb10">{{item.source_type}}</view>
                                <view class="xs muted">{{item.create_time}}</view>
                            </view>
                            
                            <view class="lg">{{item.change_amount}}</view>
                        </view>
                    </view>
                </view>
            </view>
            <loading-footer :status="loadingStatus" slotEmpty>
                <view class="data-null column-center">
                    <image class="img-null" src="/static/images/order_null.png" />
                    <text class="nr muted">暂无消费记录～</text>
                </view>
            </loading-footer>
        </tab>
    </tabs>
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
import { getAccountLog } from "../../api/user";
import { loadingType } from "../../utils/type";

export default {
  data() {
    return {
      active: 0,
      lists: [],
      page: 1,
      loadingStatus: loadingType.LOADING
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
      console.log(options.type, "option.type")
    this.active = parseInt(options.type);

    this.getAccountLogFun(this.active);
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {},

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {},

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {},

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {},

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {},

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
    this.getAccountLogFun(this.active);
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {},
  methods: {
    onChange(e) {
      this.active = e;
      this.cleanStatus();
      this.getAccountLogFun(e);
    },

    cleanStatus() {
      // 清理状态
      this.page = 1;
      this.lists = [];
      this.loadingStatus = loadingType.LOADING
    },

    getAccountLogFun(type) {
      var changeType = 0;
      type == 0 ? changeType = 0 : type == 1 ? changeType = 2 : changeType = 1;
      let {
        lists,
        loadingStatus,
        page
      } = this;
      if (loadingStatus == loadingType.FINISHED) return;
      getAccountLog({
        source: 1,
        type: changeType,
        page_no: page
      }).then(res => {
        if (res.code == 1) {
          let {
            more,
            list
          } = res.data;
          lists.push(...list);
          this.lists = lists;
          this.page ++;

          if (!more) {
              this.loadingStatus = loadingType.FINISHED;
          }

          if (lists.length <= 0) {
              this.loadingStatus = loadingType.EMPTY;
          }

          return;
        } else {
            this.loadingStatus = loadingType.ERROR;
        }
      });
    }

  }
};
</script>
<style>
/* pages/user_bill/user_bill.wxss */
.user-bill .list .item .time{
    padding: 30rpx;
}
.user-bill .list .item .bill-list .bill-item {
    padding: 20rpx 30rpx;
    border-bottom: var(--border);
}

.user-bill .list .item .bill-list .bill-item .income {
    color: var(--primary-color);
}

.order-null {
    padding-top: 200rpx;
}

image {
    width: 100%;
    height: 100%;
}

.data-null {
    padding-top: 150rpx;
}
</style>