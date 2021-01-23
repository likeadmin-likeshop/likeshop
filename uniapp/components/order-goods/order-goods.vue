<template>
<!-- components/order-goods/order-goods.wxml -->
<view class="order-goods bg-white">
    <view v-for="(item, index) in list" :key="index" class="item-wrap" :data-id="item.goods_id" @tap="goToDetail">
        <view class="item row">
            <view class="goods-img">
                <image width="180rpx" radius="10rpx" height="180rpx" lazy-load :src="item.image_str || item.image" />
            </view>
            <view class="goods-info ml20">
                <view class="goods-name line2 mb10">
                    <!-- <text class="bg-primary br60 white xs" style="padding: 2rpx 10rpx" wx:if="{{item.is_seckill}}">秒杀</text> -->
                     {{item.goods_name || item.name}}</view>
                <view class="goods-spec xs muted mb20">{{item.spec_value_str}}</view>
                <view class="row-between">
                    <view class="goods-price ">
                        <view class="primary">
                            <text class="xs">￥</text>
                            <price-format :first-size="32" :second-size="24" :price="item.goods_price" />
                        </view>
                    </view>
                    <view class="goods-num sm ">x{{item.goods_num}}</view>
                </view>
            </view>
        </view>
        <view class="footer row" v-if="link && item.comment_btn || item.refund_btn">
            <view style="flex: 1"></view>
            <view class="mr20" v-if="item.comment_btn">
                <button size="xs" class="plain br60" hover-class="none" :data-url="'/pages/goods_reviews/goods_reviews?id=' + item.id" @tap.stop="goPage">
                    评价晒图
                </button>
            </view>
            <view v-if="item.refund_btn" @tap.stop="goPage" :data-url="'/pages/apply_refund/apply_refund?order_id=' + item.order_id + '&item_id=' + item.item_id">
                <button size="xs" class="plain br60" hover-class="none">
                    申请退款
                </button>
            </view> 
        </view>
    </view>
</view>
</template>

<script>


export default {
  data() {
    return {};
  },

  components: {

  },
  props: {
    list: {
      type: Array,
      default: []
    },
    link: {
      type: Boolean,
      default: false
    },
    showRefund: {
      type: Boolean,
      default: false
    }
  },

  beforeMount() {},

  methods: {
    goToDetail(e) {
      let {
        link
      } = this;
      if (!link) return;
      let {
        id
      } = e.currentTarget.dataset;
      uni.navigateTo({
        url: `/pages/goods_details/goods_details?id=${id}`
      });
    },

    goPage(e) {
      let {
        url
      } = e.currentTarget.dataset;
      uni.navigateTo({
        url: url
      });
    }

  }
};
</script>
<style>
/* components/order-goods/order-goods.wxss */

.order-goods .item {
    padding: 20rpx 24rpx;
}
.order-goods .item .goods-img {
    width: 180rpx;
    height: 180rpx;
    flex: none;
}
.order-goods .item .goods-info {
    flex: 1;
}

.order-goods .title{
    padding:22rpx 24rpx;
    border-bottom: 1px solid #F6F6F6;
}
.order-goods .shop-icon {
    width: 40rpx;
    height: 40rpx;
}
.my-tag {
    width: 66rpx;
    height: 34rpx;
    font-size: 22rpx !important;
    background: linear-gradient(270deg,rgba(255,80,88,1) 0%,rgba(255,166,48,1) 100%);
    padding: 0 !important;
    justify-content: center;
}

.footer {
    height: 70rpx;
    align-items: flex-start;
    padding: 0 24rpx;
}
.footer .plain {
    border: 1px solid #999;
    height: 52rpx;
    line-height: 52rpx;
    font-size: 26rpx;
}
</style>