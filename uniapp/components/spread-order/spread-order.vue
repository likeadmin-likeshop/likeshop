<template>
<view class="spread-order">
  <view class="content">
      <view class="order-container">
          <view v-for="(item, index) in lists" :key="item.order_sn" class="order-item bg-white mt20">
              <view class="order-header row-between">
                  <view>订单编号:{{item.order_sn}}</view>
                  <view class="white guide-shop-btn row-center">{{item.status}}</view>
              </view>
              <view class="order-content row">
                  <view class="order-goods-img">
                      <u-image width="100%" height="100%" radius="6px" :src="item.image" />
                  </view>
                  <view class="order-goods-info ml20">
                      <view class="name row sm">{{item.goods_name}}</view>
                      <view class="row-between">
                          <view class="xs">数量<text class="normal nr">{{item.goods_num}}</text></view>
                          <view class="xs">
                            付款金额 
                            <price-format showSubscript :subScriptSize="28" :firstSize="28" :secondSize="28" weight="bold" :price="item.pay_price" />
                          </view>
                      </view>
                      <view class="pre-income muted">预估收益 
                          <price-format showSubscript :subScriptSize="28" :firstSize="28" :secondSize="28" color="#FF2C3C" weight="bold" :price="item.money" />
                      </view>
                  </view>
              </view>
              <view class="order-footer row-between">
                  <view class="time muted sm">{{item.create_time}}</view>
                  <view class="static sm" :style="{color: item.status == '待返佣' ? '#FF2C3C' : item.status == '已失效' ? '#909090' : '#00c735'}">{{item.status}}</view>
              </view>
          </view>
          <loading-footer slotEmpty :status="loadingStatus">              
              <view slot="empty" class="data-null column-center">
                <image class="img-null" src="/static/images/news_null.png"></image>
                <text class="sm muted">暂无其他评价～</text>
              </view>
          </loading-footer>
      </view>
  </view>
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
import { userOrderPromoteOrder } from "@/utils/type";
import { loadingType } from "@/utils/type";
import { getPromoteOrder } from "@/api/user";
import {loadingFun} from '@/utils/tools'

export default {
  data() {
    return {
      lists: [],
      page: 1,
      loadingStatus: loadingType.LOADING,
      confirmDialog: false
    };
  },

  components: {
  },
  props: {
    type: {
      type: Number | String,
      default: userOrderPromoteOrder.ALL
    }
  },

  created() {
    this.$on('RESET_LIST', this.reflesh, this);
  },

  beforeMount() {
    this.getPromoteOrderFun(); // this.$getAfterSaleList()
  },

  methods: {
    reflesh() {
      this.page = 1;
      this.lists = [];
      this.loadingStatus = loadingType.LOADING; // this.$getAfterSaleList();
    },

    getPromoteOrderFun() {
      let {
        loadingStatus,
        lists,
        page
      } = this;
      loadingFun(getPromoteOrder, page, lists, loadingStatus, {status: this.type}).then(res => {
          if(res) {
              this.page = res.page;
              this.lists = res.dataList
              this.loadingStatus = res.status
          }
      })
    }

  }
};
</script>
<style lang="scss">
.spread-order {
    .spread-header {
      height: 240rpx;
      background-color: var(--primary-color);
      padding-top: 60rpx;
      .deal-num {
        flex: 1;
        align-self: flex-start;
        .num {
            font-size: 42rpx;
        }
        .explain {
            line-height: 34rpx;
            margin-top: 16rpx;
        }
      }
      .income-num {
        flex: 1;
        align-self: flex-start;
        .explain {
          line-height: 34rpx;
          margin-top: 12rpx;
        }
      }
    }
    .content {
      padding: 0 20rpx;
      /* margin-top: -120rpx; */
      .order-container {
          .order-item {
            border-radius: 14rpx;
            .order-header {
              padding: 20rpx 30rpx;
              border-bottom: var(--border);
              .status {
                  /* background: linear-gradient(80deg, #F95F2F 0%, #FF2C3C 100%);
                  border-radius: 4rpx;
                  width: 134rpx;
                  height: 42rpx;
                  font-size: 24rpx;
                  line-height: 34rpx; */
                  color: #F95F2F;
              }
            }
            .order-content {
              padding: 20rpx 30rpx 20rpx 20rpx;
              border-bottom: var(--border);
              .order-goods-img {
                width: 140rpx;
                height: 140rpx;
                flex: none;
              }
              .order-goods-info {
                text-align: left;
                flex: 1;
                .name {
                    line-height: 36rpx;
                }
                .pre-income {
                    line-height: 34rpx;
                    margin-top: 8rpx;
                }
              }
            }
            .order-footer {
              padding: 20rpx 30rpx 20rpx 20rpx;
              .static {
                  color: #F95F2F;
              }
              .wait-return {
                  color: #F95F2F;
              }
            }
          }
      }
    }
}
.data-null {
  padding-top: 200rpx;
}
</style>