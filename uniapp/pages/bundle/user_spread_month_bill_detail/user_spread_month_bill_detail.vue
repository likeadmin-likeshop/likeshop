<template>
<view class="user-spread-month-bill">
    <view class="header row white">
        <view class="header-show column-center">
            <view class="num">{{month}}</view>
            <view class="label sm row" @tap="openPop">月份  <trigonometry color="white" opacity="1"></trigonometry></view>
        </view>
        <view class="header-show column-center">
            <view class="num">{{order}}</view>
            <view class="label sm">成交笔数</view>
        </view>
        <view class="header-show column-center">
            <view>
                <price-format showSubscript :subscriptSize="26" :firstSize="42" :secondSize="42" color="#ffffff" :price="money" />
            </view>
            <view class="label sm">累计预估收益</view>
        </view>
    </view>
    <view class="content">
        <view class="order-container">
                <view v-for="(item, index) in orderList" :key="index" class="order-item bg-white mb20">
                    <view class="order-header row-between">
                        <view>订单编号:{{item.order_sn}}</view>
                        <view class="white guide-shop-btn row-center">导购订单</view>
                    </view>
                    <view class="order-content row">
                        <view class="order-goods-img">
                            <custom-image :src="item.image" width="100%" height="100%" radius="6px" />
                        </view>
                        <view class="order-goods-info ml10">
                            <view class="name row sm">{{item.goods_name}}</view>
                            <view class="pre-income muted">预估收益 
                                <price-format showSubscript subScriptClass="nr" firstClass="nr" secondClass="nr" :color="primaryColor" weight="bold" :price="item.money" />
                            </view>
                        </view>
                    </view>
                    <view class="order-footer row-between">
                        <view class="time muted">{{item.create_time}}</view>
                        <view class="static" :style="'color: ' + (item.status == '待返佣' ? '#F95F2F' : '#07CE1B')">{{item.status}}</view>
                    </view>
                </view>
                <loading-footer :status="loadingStatus" slotEmpty>                    
                    <view class="data-null column-center" slot="empty">
                        <image class="img-null" src="/static/images/order_null.png"></image>
                        <view class="xs muted">暂无账单明细</view>
                    </view>
                </loading-footer>
        </view>
    </view>
    <u-select v-model="showPop" :list="months" mode="single-column" @confirm="changeMonths" ></u-select>
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
import { getMonthOrderDetail } from "@/api/user";
import { loadingType } from '@/utils/type';
const months = [];

for(let i = 1; i <= 12; i ++) {
    months.push({
        value: i,
        label: i + "月"
    })
}

export default {
  data() {
    return {
      loadingStatus: loadingType.LOADING,
      page: 1,
      orderList: [],
      month: 1,
      year: 2010,
      // 累计预估收益
      money: 0,
      // 成交笔数
      order: 0,
      // 选择器月份
      months: months,
      chooseMonth: 1,
      showPop: false
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.year = options.year;
    this.chooseMonth = [Number(options.month)]
    this.month = Number(options.month)
  },

  
  onShow: function () {
    this.getMonthOrderDetailFun();
  },

 
  onReachBottom: function () {
      this.getMonthOrderDetailFun();
  },

  methods: {
    getMonthOrderDetailFun() {
      let {
        page,
        orderList,
        loadingStatus,
        year,
        month
      } = this;
      if (loadingStatus == loadingType.FINISHED) return;
      getMonthOrderDetail({
        page_no: page,
        year: year,
        month: month
      }).then(res => {
        if (res.code == 1) {
          let {
            more,
            list,
            total_money,
            total_order
          } = res.data;
          orderList.push(...list);

          this.orderList = orderList;
          this.page ++;
          this.money = total_money;
          this.order = total_order

          if (!more) {
            this.loadingStatus = loadingType.FINISHED;
          }

          if (orderList.length <= 0) {
            this.loadingStatus = loadingType.EMPTY
            return;
          }
        } else {
          this.loadingStatus = loadingType.ERROR
        }
      });
    },

    openPop() {
      this.showPop = true
    },

    closePop() {
      this.showPop = false
    },

    changeMonths(e) {
      const val = e[0].value;
      this.chooseMonth = val
      this.selectMonth()
    },

    cleanStatus() {
      this.loadingStatus = loadingType.LOADING;
      this.page = 1;
      this.orderList = []
    },

    selectMonth(e) {
      const {
        chooseMonth,
        month
      } = this;
      this.month = chooseMonth;
      this.showPop = false
      this.cleanStatus();
      this.getMonthOrderDetailFun();
    }

  }
};
</script>
<style lang="scss">
.user-spread-month-bill .header {
  height: 240rpx;
  background-color: $-color-primary;
  padding-top: 60rpx;
}

.user-spread-month-bill .header .header-show {
  flex: 1;
  align-self: flex-start;
}

.user-spread-month-bill .header .header-show .num {
    font-size: 42rpx;
}

.user-spread-month-bill .content {
  padding: 0 20rpx;
  margin-top: -60rpx;
}

.user-spread-month-bill .content .order-container .order-item {
  border-radius: 14rpx;
}

.user-spread-month-bill .content .order-container .order-item .order-header {
  padding: 20rpx 30rpx;
  border-bottom: $-solid-border;
}

.user-spread-month-bill .content .order-container .order-item .order-header .guide-shop-btn {
    background: linear-gradient(80deg, #F95F2F 0%, #FF2C3C 100%);
    border-radius: 4rpx;
    width: 134rpx;
    height: 42rpx;
}

.user-spread-month-bill .content .order-container .order-item .order-content {
  padding: 20rpx 30rpx 20rpx 20rpx;
  border-bottom: $-solid-border;
}

.user-spread-month-bill .content .order-container .order-item .order-content .order-goods-img {
    width: 140rpx;
    height: 140rpx;
    flex: none;
}

.user-spread-month-bill .content .order-container .order-item .order-content .order-goods-info {
  text-align: left;
}

.user-spread-month-bill .content .order-container .order-item .order-content .order-goods-info .name {
  line-height: 36rpx;
}

.user-spread-month-bill .content .order-container .order-item .order-content .order-goods-info .pre-income {
  line-height: 34rpx;
  margin-top: 8rpx;
}

.user-spread-month-bill .content .order-container .order-item .order-footer {
  padding: 20rpx 30rpx 20rpx 20rpx;
}

.user-spread-month-bill .content .order-container .order-item .order-footer .static {
    color: #F95F2F;
}

.user-spread-month-bill .content .order-container .order-item .order-footer .wait-return {
    color: #F95F2F;
}

.user-spread-month-bill .pop-header {
  height: 80rpx;
}

.content .order-container .data-null {
  padding-top: 200rpx;
}
</style>