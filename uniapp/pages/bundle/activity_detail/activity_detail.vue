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

<template>
<view class="activity-detail-contain">
        <view class="header row-start" v-if="goodsList.length">
            <text class="white header-title"> {{title}}  <text class="white xxs ml20">{{name}}</text></text>
        </view>
        <view class="content">
            <view class="goods-container">
                    <navigator v-for="(item, index) in goodsList" :key="index" :url="'/pages/goods_details/goods_details?id=' + item.id" class="goods-item bg-white row mb10" hover-class="none">
                        <view class="goods-img">
                            <custom-image width="100%" height="100%" radius="6rpx" lazy-load :src="item.image"></custom-image>
                        </view>
                        <view class="goods-info ml20">
                            <view class="goods-name line2 normal nr mb10">{{item.name}}</view>
                            <view class="count-buy br60 xxs">累计{{item.sales_sum}}人购买</view>
                            <view class="row-between mt10">
                                <view class="row">
                                    <price-format :price="item.price"  :subscript-size="26" :first-size="34" :second-size="26" color="#FF2C3C"></price-format >
                                    <price-format  class="ml20" :price="item.market_price"  :subscript-size="24" :first-size="24" :second-size="24" color="#999999"></price-format>
                                </view>
                                <view class="buy-btn row-center br60">
                                    马上抢
                                </view>
                            </view>
                        </view>
                    </navigator>
                    
            </view>
            <loading-footer slot-empty :status="status">
                <view slot="empty" class="data-null column-center" style="padding-top: 500rpx">
                        <image class="img-null" src="/static/images/goods_null.png"></image>
                        <view class="lighter">暂无活动商品～</view>
                    </view>
            </loading-footer>
        </view>
    </view>
</template>

<script>

import { loadingType } from '@/utils/type';
import { getActivityGoodsLists } from "@/api/activity";

import { loadingFun } from "@/utils/tools";
export default {
  data() {
    return {
      status: loadingType.LOADING,
      goodsList: [],
      page: 1,
      name: '',
      title: ''
    };
  },

  components: {
  },
  props: {},

  onLoad: function (options) {
    this.id = options.id;
      this.title = options.title,
      this.name = options.name
    uni.setNavigationBarTitle({
      title: options.title
    });
    this.getActivityGoodsListsFun();
  },


  
  onPullDownRefresh: function () {
    this.getActivityGoodsListsFun();
  },

  methods: {
    async getActivityGoodsListsFun() {
		let {
			page,
			status,
			goodsList
		} = this;
		const data = await loadingFun(getActivityGoodsLists,page, goodsList,status, {id : this.id})
		if (!data) return
		this.page = data.page
		this.goodsList = data.dataList
		this.status = data.status
    }

  }
};
</script>
<style>
.activity-detail-contain .header {
    background-image: url(../../../static/images/activity_detail_bg.png);
    background-size: 100% 100%;
    height: 340rpx;
    width: 100%;
    padding-left: 24rpx;
    box-sizing: border-box;
    padding-top: 20rpx;
  }
.activity-detail-contain .header  .header-title {
    font-size: 47rpx;
}
.activity-detail-contain .content {
    margin-top: -240rpx;
    padding: 0 20rpx;
}

.activity-detail-contain .content .goods-container .goods-item {
      padding: 30rpx 20rpx;
      border-radius: 10rpx;
}
.activity-detail-contain .content .goods-container .goods-item  .goods-img {
    width: 180rpx;
    height: 180rpx;
    flex: none;
}
.activity-detail-contain .content .goods-container .goods-item  .goods-info {
    flex: 1;
}

.activity-detail-contain .content .goods-container .goods-item  .goods-info .goods-name {
    line-height: 40rpx;
}

.activity-detail-contain .content .goods-container .goods-item  .goods-info .count-buy {
    background-color: #FEF0DA;
    color: #F77A0C;
    padding: 4rpx 18rpx;
    display: inline-flex;
}
.activity-detail-contain .content .goods-container .goods-item  .goods-info .buy-btn {
    padding: 0rpx 34rpx;
    height: 60rpx;
    color: white;
    background: linear-gradient(90deg, #F95F2F 0%, #FF2C3C 100%);
}

.goods-container .data-null {
    padding-top: 225rpx;
}
</style>