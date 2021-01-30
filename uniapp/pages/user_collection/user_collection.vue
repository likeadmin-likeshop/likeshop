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
                    <price-format :first-size="30" :second-size="26" :price="item.price" :weight="400" :subscriptSize="30" showSubscript="true" color="#FF2C3C" />
                    <view class="btn primary br60 sm">去购买</view>
                </view>
            </view>
        </view>
        <loading-footer :status="status" slotEmpty>
            <view class="data-null column-center">
                <image src="/static/images/profit_null.png" class="img-null" />
                <text class="sm muted">暂无收藏～</text>
            </view>
        </loading-footer>
    </view>
    <uni-popup id="deleteDialog" ref="deleteDialog"  type="dialog">        
        <uni-popup-dialog
            content="确认删除该收藏吗？"
            confirmButtonText="狠心删除" 
            confirm-button-color="#FF2C3C" 
            @confirm="cancelCollect" 
            @cancel="deleteCancel"
        />
    </uni-popup>
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
import { getCollectGoods, collectGoods } from "../../api/user";
import { CollectType, loadingType } from "../../utils/type";

export default {
  data() {
    return {
      page: 1,
      status: "loading",
      collectionList: [],
      collectionGoods: CollectType.COLLECTION
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.$on("REFLASH", this.reflesh, this);
    this.getCollectGoodsFun();
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
  onUnload: function () {
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {},

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
    this.getCollectGoodsFun();
  },
  methods: {
    deleteCancel: function (e) {
        this.$refs.deleteDialog.close()
    },
    deleteConfirm: function (e) {
      this.id = e.currentTarget.dataset.id;
      this.$refs.deleteDialog.open()
    },

    getCollectGoodsFun() {
      let {
        page,
        collectionList,
        status
      } = this;

      if (status == loadingType.FINISHED) {
        return;
      }

      getCollectGoods({
        page_no: page
      }).then(res => {
        if (res.code == 1) {
          let {
            list,
            more
          } = res.data;
          collectionList.push(...list);
          this.collectionList = collectionList
          this.page ++;
          this.$nextTick(() => {
            if (!more) {
                this.status = loadingType.FINISHED
            }

            if (collectionList.length <= 0) {
                this.status = loadingType.EMPTY;
                return;
            }
          });
        } else {
            this.status = loadingType.ERROR
        }
      });
    },

    reflesh() {
      this.collectionList = [];
      this.page = 1;
      this.status = loadingType.LOADING;
      this.getCollectGoodsFun();
    },

    cancelCollect() {
      console.log(this.id);
      collectGoods({
        is_collect: CollectType.CANCEL_COLLECTION,
        goods_id: this.id
      }).then(res => {
        if (res.code == 1) {
          this.collectionList = [];
          this.page = 1;
          this.status = loadingType.LOADING;
          this.getCollectGoodsFun();
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
        height:  100vh;
        overflow: hidden;
        .collection-item {
            padding: 20rpx;
            &:not(:last-of-type) {
                border-bottom: var(--border);
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
                border: 1rpx solid $-color-primary;
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






van-dialog van-button button {
    width: 100% !important;
}


</style>