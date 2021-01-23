<template>
<view class="order-goods bg-white">
    <view v-for="(item, index) in list" :key="index" class="item-wrap">
        <view class="item row">
            <view class="goods-img">
                <custom-image width="180rpx" radius="10rpx" height="180rpx" lazy-load :src="item.image_str || item.image"></custom-image>
            </view>
            <view class="goods-info ml20">
                <view class="goods-name line2 mb10">
                     {{item.goods_name || item.name}}</view>
                <view class="goods-spec xs muted mb20">{{item.spec_value_str}}</view>
                <view class="row-between">
                    <view class="goods-price ">
                        <view class="primary">
                            <price-format :subscript-size="24" :first-size="32" :second-size="24" :price="item.goods_price"></price-format>
                        </view>
                    </view>
                    <view class="goods-num sm ">x{{item.goods_num}}</view>
                </view>
            </view>
        </view>
        <view class="footer row" v-if="link && item.comment_btn || item.refund_btn">
            <view style="flex: 1"></view>
            <navigator class="mr20" hover-class="none" :url="'/pages/goods_reviews/goods_reviews?id=' + item.id" v-if="item.comment_btn">
                <button size="xs" class="plain br60" hover-class="none" >
                    评价晒图
                </button>
            </navigator>
            <navigator v-if="item.refund_btn" hover-class="none" :url="'/pages/apply_refund/apply_refund?order_id=' + item.order_id + '&item_id=' + item.item_id">
                <button size="xs" class="plain br60" hover-class="none">
                    申请退款
                </button>
            </navigator> 
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
      default: () => []
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


  methods: {
  

  }
};
</script>
<style lang="scss">

.order-goods {
	.item {
	    padding: 20rpx 24rpx;
	}
	.goods-footer {
	    height: 70rpx;
	    align-items: flex-start;
	    padding: 0 24rpx;
		.plain {
		    border: 1px solid #999;
		    height: 52rpx;
		    line-height: 52rpx;
		    font-size: 26rpx;
		}
	}
}




</style>