<template>
<!-- pages/active/goods_seckill/goods_seckill.wxml -->
<view class="goods-seckill">
    <view class="banner">
        <swipers :pid="14" height="284rpx" radius="10rpx" padding="20rpx"></swipers>
    </view>
    <view class="time-list">
        <scroll-view style="height: 120rpx; white-space: nowrap;" :scroll-into-view="'item-' + currentView" scroll-x="true" scroll-with-animation="true">
            <view v-for="(item, index) in seckillTime" :key="index" :id="'item-' + index" class="time-item column-center" @tap="exchangeTime" :data-id="item.id" :data-index="index">
                <view :class="'xl bold ' + (item.active==1 ? 'primary': '')">{{ item.start_time }}</view>
                <view :class="'sm br60 state ' + ( item.active === 1 ? 'bg-primary white': '' ) + ' ' + ( item.status === 2 ? 'muted': '' )" :style="item.active==1 ? 'background-color: #FF2C3C;color: white': ''">
                    {{ item.tips }}
                </view>
            </view>
        </scroll-view>
    </view>
    <view class="goods-list">
        <view v-for="(item, index) in seckillGoods" :key="index" class="goods-item row bg-white" @tap="goGoodsDetail" :data-id="item.id" :data-shop_id="item.shop_id">
            <custom-image width="180rpx" height="180rpx" radius="10rpx" lazy-load class="goods-img mr20" :src="item.image" />
            <view class="goods-info">
                <view style="width: 490rpx" class="goods-name line2 mb10">{{item.name}}</view>
                <label class="sale-info xs primary br60">
                    已抢{{item.sales_sum}}件
                </label>
                <view class="info-footer row-between" style="margin-top: 5rpx">
                    <view class="price">
                        <price-format class="mr10" :price="item.seckill_price" color="#FF2C3C" :firstSize="34" :secondSize="26" :showSubscript="true" :subscriptSize="26" />
                        <price-format class="line-through muted" :price="item.min_price" color="#999999" :firstSize="24" :secondSize="24" :showSubscript="true" :subscriptSize="24" />
                    </view>
                    <button :class="'br60 white ' + (currentStatus == 2? 'bg-gray' : currentStatus == 1 ? 'primary-btn' : 'border-btn')" size="sm" @tap.stop="goGoodsDetail" :data-id="item.id" :data-shop_id="item.shop_id">{{currentStatus == 2? '已结束': currentStatus == 1 ? '立即抢购' : '未开始'}}</button>
                </view>
            </view>
        </view>
        <loading-footer :status="loadingStatus" slotEmpty>
            <view class="data-null column-center" slot="empty">
                <image class="img-null" src="/static/images/goods_null.png"></image>
                <view class="muted nr">暂无商品～</view>
            </view>
        </loading-footer>
    </view>
	<float-tab></float-tab>
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
import { getSeckillTime, getSeckillGoods } from "@/api/activity";
import { loadingType } from "@/utils/type";
import {loadingFun} from "@/utils/tools";

export default {
  data() {
    return {
      currentView: 0,
      bannerList: [],
      seckillTime: [],
      seckillGoods: [],
      page: 1,
      loadingStatus: "loading",
      currentId: 0,
      // 当前状态
      currentStatus: 0,
      isDataNull: false,
      id: ""
    };
  },

  components: {
  },
  props: {},
  onLoad: function (options) {
    this.getSeckillTimeFun();
  },

 
  onReachBottom: function () {
    this.getSeckillGoodsFun(this.currentId);
  },

  methods: {
    // 获取秒杀时间段
    getSeckillTimeFun() {
      let {
        currentView,
        currentStatus
      } = this;
      getSeckillTime().then(res => {
        if (res.code == 1) {
          if (!res.data.length && res.data.length <= 0) {
            this.isDataNull = true
            return;
          }

          let index = res.data.findIndex(item => item.status == 1);

          if (index == -1) {
            index = res.data.findIndex(item => item.status == 0);
          }

          if (index == -1) {
            index = 0;
          }

          res.data[index].active = 1;
          currentView = index - 2;
          currentStatus = res.data[index].status;

          if (currentView < 0) {
            currentView = 0;
          }

          this.seckillTime = res.data;
          this.id = res.data[index].id;
          this.currentView = currentView;
          this.currentStatus = currentStatus;
          
          this.getSeckillGoodsFun(res.data[index].id);
        }
      });
    },

    // 获取秒杀时间段商品
    getSeckillGoodsFun(id) {
      let {
        page,
        seckillGoods
      } = this;

      loadingFun(getSeckillGoods, page, seckillGoods, this.loadingStatus, {id: id}).then(res => {
          if(res) {
              this.page = res.page;
              this.seckillGoods = res.dataList
              this.loadingStatus = res.status
          }
      })
    },

    // 查看其他时间段
    exchangeTime(e) {
      let {
        id,
        index
      } = e.currentTarget.dataset;
      let {
        currentView,
        seckillTime,
        currentStatus
      } = this;
      seckillTime.forEach((item, idx) => {
        if (index == idx) {
          item.active = 1;
          currentStatus = item.status;
        } else {
          item.active = 0;
        }
      });

      if (index == -1) {
        index = 0;
      }

      currentView = index - 2;

      if (currentView < 0) {
        currentView = 0;
      }

      this.page = 1;
      this.currentView = currentView;
      this.isDataNull = false;
      this.currentId = id;
      this.seckillGoods = []
      this.loadingStatus = loadingType.LOADING;
      this.seckillTime = seckillTime;
      this.currentStatus = currentStatus;
      
      this.getSeckillGoodsFun(id);
    },

    goGoodsDetail(e) {
      let {
        id,
        shop_id
      } = e.currentTarget.dataset;
      uni.navigateTo({
        url: '/pages/goods_details/goods_details?id=' + id
      });
    },

    goToBuy(e) {
      console.log("goToBuy");
      console.log(e);
    }

  }
};
</script>
<style lang="scss">
/* pages/active/goods_seckill/goods_seckill.wxss */
.bg-gray {
    background-color: #CCCCCC !important;
}

.goods-seckill .banner {
}

.goods-seckill {
    .time-list {
        .time-item {
            display: inline-flex;
            width: 160rpx;
            height: 100%;
            .state {
                padding: 0 10rpx;
            }
        }
    }
    .goods-list {
        .goods-item{
            padding: 30rpx;
            .goods-img {
                width: 180rpx;
                height: 180rpx;
                flex: none;
            }
            .goods-info {
                flex: 1;
                width: 470rpx;
                .sale-info {
                    padding: 4rpx 16rpx;
                    background-color: #FFE9EB;
                }
                .info-footer {
                    .btn {
                        padding: 0 30rpx;
                    }
                }
                .progress-wrap {
                    .progress {
                        width: 260rpx;
                        display: inline-block;
                    }
                }
            }
        }
    }
}

.primary-btn {
    padding: 0 30rpx;
    background: linear-gradient(
        270deg,
        rgba(255, 44, 60, 1) 0%,
        rgba(249, 95, 47, 1) 100%
    );
}

.border-btn {
    padding: 0 30rpx;
    border: 1px solid #FF2C3C !important;
    color: #FF2C3C !important;
}

.data-null {
    padding-top: 100rpx;
    .img-null {
        width: 300rpx;
        height: 300rpx;
        flex: none;
    }
}
</style>