<template>
<view class="user-fans-box">
    <view class="header">
        <view class="top-bar row bg-white md">
            <view :class="'bar-item row-center ' + (active == 'all' ? 'item-active' : '')" @tap="changeTab" data-active="all">全部粉丝</view>
            <view :class="'bar-item row-center ' + (active == 'first' ? 'item-active' : '')" @tap="changeTab" data-active="first">一级粉丝</view>
            <view :class="'bar-item row-center ' + (active == 'second' ? 'item-active' : '')" @tap="changeTab" data-active="second">二级粉丝</view>
        </view>         
        <u-search 
            v-model="keyword" 
            shape="round"
            background="white"
            :show-action="true"
            action-text="确定"
            placeholder="请输入搜索关键词"
            @search="onSearch"
            @custom="onSearch"
        />
        <view class="sort-bar row">
            <view class="sort-bar-item row-center nr" @tap="sortStatusChange" data-sort-type="0">
                <view :class="sortType == 0 ? 'item-active' : ''">团队排序</view>
                <view class="column">
                    <trigonometry direction="up" :color="fansSort == 'asc' ? '#FF2C3C' : '#585858'" size="small"></trigonometry>
                    <trigonometry :color="fansSort == 'desc' ? '#FF2C3C' : '#585858'" size="small"></trigonometry>
                </view>
            </view>
            <view class="sort-bar-item row-center nr" @tap="sortStatusChange" data-sort-type="1">
                <view :class="sortType == 1 ? 'item-active' : ''">金额排序</view>
                <view class="column">
                    <trigonometry direction="up" :color="moneySort == 'asc' ? '#FF2C3C' : '#585858'" size="small"></trigonometry>
                    <trigonometry :color="moneySort == 'desc' ? '#FF2C3C' : '#585858'" size="small"></trigonometry>
                </view>
            </view>
            <view class="sort-bar-item row-center nr" @tap="sortStatusChange" data-sort-type="2">
                <view :class="sortType == 2 ? 'item-active' : ''">订单排序</view>
                <view class="column">
                    <trigonometry direction="up" :color="orderSort == 'asc' ? '#FF2C3C' : '#585858'" size="small"></trigonometry>
                    <trigonometry :color="orderSort == 'desc' ? '#FF2C3C' : '#585858'" size="small"></trigonometry>
                </view>
            </view>
        </view>
    </view>
    <view class="content">
        <view class="data-null" v-if="false">
            <view class="muted">暂无相关数据...</view>
        </view>
        <view v-else class="card-box">
            <view v-for="(item, index) in fansObject" :key="index" class="card-item row-between">
                <view class="row">
                    <view class="card-img">
                        <u-image :src="item.avatar" round width="100%" height="100%" />
                    </view>
                    <view class="fans-info ml10">
                        <view class="fans-name row">{{item.nickname}}</view>
                        <view class="row lighter mt5">
                            <view>{{item.mobile}}</view>
                            <view class="ml20">{{item.create_time}}</view>
                        </view>
                    </view>
                </view>
                <view class="column xs">
                    <view class="msg"><span class="primary">{{item.fans_team}} </span>人</view>
                    <view class="mt5 msg"><span>{{item.fans_order}} </span>单</view>
                    <view class="mt5 msg"><span>{{item.fans_money}} </span>元</view>
                </view>
            </view>
            <loading-footer :status="loadingStatus" slotEmpty>                    
                <view class="data-null column-center" slot="empty">
                    <image class="img-null" src="/static/images/order_null.png"></image>
                    <text>暂无相关数据...</text>
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
import { loadingType, SortType, FansType } from '@/utils/type';
import { getUserFans } from '@/api/user';
import {loadingFun} from '@/utils/tools'

export default {
  data() {
    return {
      active: FansType.ALL,
      loadingStatus: loadingType.LOADING,
      sortType: 0,
      keyword: "",
      page: 1,
      fansSort: SortType.ASC,
      moneySort: SortType.NONE,
      orderSort: SortType.NONE,
      fansObject: []
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.getUserFansFun();
  },

  onReachBottom() {
      this.getUserFansFun();
  },
 
  methods: {
    onSearch() {
      console.log(this.keyword);
      this.cleanStatus();
      this.getUserFansFun();
    },

    changeTab(e) {
      let {
        active
      } = e.currentTarget.dataset;
      this.active = active
      this.cleanStatus();
      this.getUserFansFun();
    },

    // 获取粉丝列表
    getUserFansFun() {
      const {
        fansSort,
        moneySort,
        orderSort,
        active,
        loadingStatus,
        keyword,
        fansObject,
        page,
      } = this;
      const inputData = {
        type: active,
        keyword,
        fans: fansSort,
        money: moneySort,
        order: orderSort
      };
      
      loadingFun(getUserFans, page, fansObject, loadingStatus, inputData).then(res => {
          if(res) {
              this.page = res.page;
              this.fansObject = res.dataList
              this.loadingStatus = res.status
          }
      })
    },

    // 清理状态
    cleanStatus() {
      this.loadingStatus = loadingType.LOADING;
      this.fansObject = [];
      this.page = 1
    },

    // 排序状态变化 
    sortStatusChange(e) {
      let {
        sortType
      } = e.currentTarget.dataset;
      let {
        fansSort,
        moneySort,
        orderSort
      } = this;

      this.sortType = parseInt(sortType)

      switch (parseInt(sortType)) {
        case 0:
          // 团队排序
          if (fansSort == SortType.NONE || fansSort == SortType.DESC) {
            this.fansSort = SortType.ASC;
            this.moneySort = SortType.NONE
            this.orderSort = SortType.NONE
          } 
          else if (fansSort == SortType.ASC) {
            this.fansSort = SortType.DESC;
            this.moneySort = SortType.NONE;
            this.orderSort = SortType.NONE;
          }
          break;

        case 1:
          // 金额排序
          if (moneySort == SortType.DESC || moneySort == SortType.NONE) {
            this.moneySort = SortType.ASC;
            this.fansSort = SortType.NONE;
            this.orderSort = SortType.NONE
          } else if (moneySort == SortType.ASC) {
              this.moneySort = SortType.DESC;
              this.fansSort = SortType.NONE;
              this.orderSort = SortType.NONE;
          }

          break;
        case 2:
          // 订单排序
          if (orderSort == SortType.DESC || orderSort == SortType.NONE) {
              this.orderSort = SortType.ASC;
              this.moneySort = SortType.NONE;
              this.fansSort = SortType.NONE;
          } else if (orderSort == SortType.ASC) {
              this.orderSort = SortType.DESC;
              this.moneySort = SortType.NONE;
              this.fansSort = SortType.NONE;
          }

          break;
      }

      this.cleanStatus();
      this.getUserFansFun();
    }

  }
};
</script>
<style lang="scss">
/* pages/user_fans/user_fans.wxss */
.user-fans-box {
    .header {
        .top-bar {
            padding: 18rpx 50rpx;
            height: 100rpx;
            .bar-item {
                flex: 1;
                line-height: 34rpx;
                height: 100%;
                &:not(:last-of-type) {
                    margin-right: 54rpx;
                }
            }
            .item-active {
                color: white;
                background-color: $-color-primary;
                border-radius: 100rpx;
                height: 100%;
            }
        }
        .sort-bar {
            background-color: white;
            height: 80rpx;
            .sort-bar-item {
                flex: 1;
                line-height: 40rpx;
                height: 100%;
                .item-active {
                    color: $-color-primary;
                }
            }
        }
    }
}

.content {
    .data-null {
        padding-top: 200rpx;
        line-height: 40rpx;
    }
    .card-box {
        margin-top: 20rpx;
        .card-item {
            padding: 20rpx;
            background-color: white;
            .card-img {
                width: 100rpx;
                height: 100rpx;
                flex: none;
            }
            .fans-info {
                .fans-name {
                  line-height: 44rpx;
                }
            }
            .msg {
                line-height: 32rpx;
                text-align: right;
            }
            &:not(:nth-last-of-type(3)) {
                border-bottom: $-solid-border;
            }
        }
    }
}

</style>