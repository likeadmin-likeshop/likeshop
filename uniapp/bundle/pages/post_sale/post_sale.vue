<template>
    <view class="post-sale">
      <view class="contain">
        <tabs :active="active" :line-width="40" @change="onChange" sticky>
          <tab v-for="(item, index) in afterSale" :key="index" :title="item.name">
            <after-sales-list :ref="item.type" :type="item.type" v-if="item.isShow"></after-sales-list>
          </tab>
        </tabs>
      </view>
    </view>
</template>

<script>
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------
import { getAfterSaleList, applyAfterSale, getGoodsInfo, inputExpressInfo, cancelApply, afterSaleDetail, applyAgain } from "@/api/user";
import { AfterSaleType } from "@/utils/type";

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


  onReachBottom: function () {
    const {
      active
    } = this;


    let afterSaleType = AfterSaleType.NORMAL
    switch(active) {
        case 0:
            afterSaleType = AfterSaleType.NORMAL;
            break;
        case 1:
            break;
        case 2:
            afterSaleType = AfterSaleType.FINISH;
            break;
        default:
            afterSaleType = AfterSaleType.NORMAL
            break;
    }

    let myComponent = this.$refs[afterSaleType][0];
    if (myComponent.getAfterSaleListFun) {
      myComponent.getAfterSaleListFun();
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
          this.active = type == AfterSaleType.NORMAL ? 0 : type == AfterSaleType.HANDLING ? 1 : 2
      }
      
      if(this.$refs[type] && this.$refs[type][0].getAfterSaleListFun()) {
          this.$refs[type][0].getAfterSaleListFun()
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
                        border: 1px solid #CCCCCC;
                        padding: 9rpx 34rpx;
                        font-family: PingFang SC;
                    }
                }
            }
        }
    }
}
</style>