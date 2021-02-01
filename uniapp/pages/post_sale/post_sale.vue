<template>
    <view class="post-sale">
      <view class="contain">
        <tabs :active="active" :line-width="40" @change="onChange" sticky>
          <tab v-for="(item, index) in afterSale" :key="index" :title="item.name">
            <after-sales-list :type="item.type" v-if="item.isShow"></after-sales-list>
          </tab>
        </tabs>
      </view>
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
import { getAfterSaleList, applyAfterSale, getGoodsInfo, inputExpressInfo, cancelApply, afterSaleDetail, applyAgain } from "../../api/user";
import { AfterSaleType } from "../../utils/type";

export default {
  data() {
    return {
      active: 0,
      afterSaleType: AfterSaleType.NORMAL,
      afterSaleList: [],
      afterSale: [{
        name: '售后申请',
        type: AfterSaleType.NORMAL,
        isShow: true
      }, {
        name: '处理中',
        type: AfterSaleType.HANDLING,
        isShow: false
      }, {
        name: '已处理',
        type: AfterSaleType.FINISH,
        isShow: false
      }]
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {},

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
    const {
      active
    } = this;


    let afterSaleType = AfterSaleType.NORMAL
    switch(active) {
        case 0:
            afterSaleType = AfterSaleType.NORMAL
            break;
        case 1:
            afterSaleType = AfterSaleType.HANDLING;
            break;
        case 2:
            afterSaleType = AfterSaleType.FINISH;
            break;
        default:
            afterSaleType = AfterSaleType.NORMAL
            break;
    }
    let myComponent = this.selectComponent('#' + afterSaleType);

    if (myComponent.$getAfterSaleList) {
      myComponent.$getAfterSaleList();
    }
  },
  methods: {
    onChange(e) {
      
      // const {
      //   name
      // } = e.detail;
      
      this.changeShow(e);
    },

    changeShow(active) {
      const {
        afterSale
      } = this;
      let type = active == 0 ? AfterSaleType.NORMAL : active == 1 ? AfterSaleType.HANDLING : AfterSaleType.FINISH
      let index = afterSale.findIndex(item => {
        return item.type == type;
      });

      if (index != -1) {
          this.afterSale[index].isShow = true;
          this.active = type
      }
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
<style lang="scss">
image {
    width: 100%;
    height: 100%;
}

.post-sale {
    .contain {
        .sale-list {
            padding: 20rpx 0;
            .sale-item {
                .sale-header {
                    padding: 20rpx 24rpx;
                    .store-name {
                        font-weight: bold;
                        font-family:PingFang SC;
                        line-height: 40rpx;
                    }
                }
                .sale-goods-show {
                    padding: 20rpx 24rpx;
                    .goods-img {
                        height: 160rpx;
                        width: 160rpx;
                    }
                    .goods-desc {
                        margin-left: 24rpx;
                    }
                    .sale-status {
                        padding: 20rpx 60rpx;
                        background-color: #F6F6F6;
                    }
                }
                .sale-footer {
                    padding: 0 24rpx 22rpx;
                    .btn {
                        padding: 9rpx 34rpx;
                        font-family: PingFang SC;
                    }
                    .grey-btn {
                        border: 1rpx solid #CCCCCC;
                        padding: 9rpx 34rpx;
                        font-family: PingFang SC;
                    }
                }
            }
        }
    }
}
</style>