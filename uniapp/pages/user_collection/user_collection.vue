<template>
<!-- pages/user_collection/user_collection.wxml -->
<view class="user-collection">
    <view class="goods-list mt20">
        <view v-for="(item, index) in collectionList" :key="index" class="collection-item row bg-white" @tap="goToGoodsDetail" :data-id="item.id">
            <custom-image width="160rpx" height="160rpx" radius="6rpx" lazy-load class="mr20 goods-img" :src="item.image" />
            <view class="info">
                <view class="row-between">
                    <view class="name line2">{{item.name}}</view>
                    <image style="height: 56rpx;width: 56rpx;flex: none;margin-left: 14rpx" src="/static/images/icon_del.png" @tap.stop="deleteConfirm" :data-id="item.id"></image>
                </view>
                <view class="row-between mt20">
                    <price-format :first-size="30" :second-size="26" :price="item.price" :weight="400" :subscriptSize="30" :showSubscript="true" color="#FF2C3C" />
                    <view class="btn primary br60 sm">去购买</view>
                </view>
            </view>
        </view>
        <loading-footer :status="status" slotEmpty>
            <view class="data-null column-center" slot="empty">
                <image src="/static/images/profit_null.png" class="img-null" />
                <text class="sm muted">暂无收藏～</text>
            </view>
        </loading-footer>
    </view>
    <u-modal
        v-model="deleteSure"
        confirm-text="狠心删除"
        confirm-color="#FF2C3C"
        :showCancelButton="true"
        :show-title="false"
        @confirm="cancelCollect" 
        @cancel="deleteCancel"
    >
        <view class="column-center tips-dialog" style="padding: 20rpx 0;">
            <image class="icon-lg" src="/static/images/icon_warning.png"></image>
            <view style="margin-top:30rpx">确认删除该收藏吗？</view>
        </view>
    </u-modal>
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
import { getCollectGoods, collectGoods } from "@/api/user";
import { CollectType, loadingType } from "@/utils/type";
import {loadingFun} from "@/utils/tools"

export default {
  data() {
    return {
      page: 1,
      status: loadingType.LOADING,
      collectionList: [],
      collectionGoods: CollectType.COLLECTION,
      deleteSure: false,
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.getCollectGoodsFun();
  },

 
  onReachBottom: function () {
      this.$nextTick(() => {
        this.getCollectGoodsFun();
      })
  },
  methods: {
    deleteCancel: function (e) {
        this.deleteSure = false;
    },
    deleteConfirm: function (e) {
      this.id = e.currentTarget.dataset.id;
      this.deleteSure = true;
    },

    getCollectGoodsFun() {
        let {
          page,
          collectionList,
          status
        } = this;
          
        loadingFun(getCollectGoods, page, collectionList, status).then(res => {
            if(res) {                  
                this.page = res.page;
                this.collectionList = res.dataList
                this.status = res.status
            }
        })
    },

    reflesh() {
      this.collectionList = [];
      this.page = 1;
      this.status = loadingType.LOADING;
      this.getCollectGoodsFun();
    },

    cancelCollect() {
      collectGoods({
        is_collect: CollectType.CANCEL_COLLECTION,
        goods_id: this.id
      }).then(res => {
        if (res.code == 1) {
          this.collectionList = [];
          this.page = 1;
          this.status = loadingType.LOADING;
          this.getCollectGoodsFun();
          this.deleteSure = false;
        }
      });
    },

    goToGoodsDetail: function (e) {
      let {
        id
      } = e.currentTarget.dataset;
      uni.navigateTo({
        url: '/pages/goods_details/goods_details?id=' + id
      });
    }
  }
};
</script>
<style lang="scss">

.user-collection {
    .goods-list {
        .collection-item {
            padding: 20rpx;
            &:not(:last-of-type) {
                border-bottom: $-solid-border;
            }
            .info {
                flex: 1;
            }
            .goods-img {
                width: 160rpx;
                height: 160rpx;
                flex: none;
            }
            .btn {
                width: 148rpx;
                height: 52rpx;
                right: 20rpx;
                border: 1px solid $-color-primary;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
        .del-btn {
            height: 100%;
            width: 65px;
        }
        .store-list {
            height:  calc(100vh - 100rpx);
            overflow: hidden;
        }
        .store-item {
            height: 140rpx;
            border-bottom: 1rpx solid #E5E5E5;
            .store-img {
                height: 80rpx;
                width: 80rpx;
                border-radius: 50%;
                overflow: hidden;
            }
        }
        .tips-dialog {
            height: 230rpx;
            width: 100%;
        }
        .data-null {
            padding-top: 100rpx;
        }
    }
} 

</style>