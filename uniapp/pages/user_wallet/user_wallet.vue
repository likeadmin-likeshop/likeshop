<template>
<!--pages/user_wallet/user_wallet.wxml-->
<view class="user-wallet">
    <view class="contain bg-white mb20">
        <view class="header">
            <view class="white mb20">
                <view class="xs">总资产（元）</view>
                <view style="font-size: 76rpx">{{wallet.user_money || 0}}</view>
            </view>
            <view class="money white row">
                <view class="item">
                    <view class="xs">累计消费(元)</view>
                     <view style="font-size: 38rpx">{{wallet.total_order_amount || 0}}</view>
                </view>
                <button v-if="wallet.open_racharge" class="primary bg-white br60 btn" size="xs" data-url="/pages/user_payment/user_payment" @tap="goPage">充值</button>
            </view>
        </view>
        <view class="nav row">
            <view class="nav-item column-center" data-url="/pages/user_bill/user_bill?type=0" @tap="goPage">
                <image src="/static/images/icon_account.png"></image>
                <view class="mt10">账户明细</view>
            </view>
            <view class="nav-item column-center" data-url="/pages/user_bill/user_bill?type=1" @tap="goPage">
                <image src="/static/images/icon_consume.png"></image>
                <view class="mt10">消费记录</view>
            </view>
            <view class="nav-item column-center" data-url="/pages/user_bill/user_bill?type=2" @tap="goPage">
               
            </view>
        </view>
        <view class="activity">
            <view class="activity-title xl">
                热门活动
            </view>
            <view class="activity-header row">
                <navigator hover-class="none" url="/pages/user_sign/user_sign" class="activity-header-left">
                    <view class="lg" style="font-weight: bold;">签到领积分</view>
                    <view class="xs">赚积分抵现金</view>
                </navigator>
                <navigator hover-class="none" url="/pages/user_getcoupon/user_getcoupon" class="activity-header-right ml20">
                    <view class="lg" style="font-weight:bold;">领取优惠券</view>
                    <view class="xs">满减享优惠</view>
                </navigator>
            </view>
            <!-- <view class="activity-items-contain mt10 row-between wrap">
                <navigator hover-class="none" class="activity-item row" url="/pages/goods_combination/goods_combination">
                    <view class="activity-img">
                        <image src="/images/icon_activity_pintuan.png"></image>
                    </view>
                    <view class="ml20">
                        <view class="md" style="font-weight: bold;">火爆拼团</view>
                        <view class="xs muted">优惠商品上架拼团</view>
                    </view>
                </navigator>
                <navigator hover-class="none" class="activity-item row" url="/pages/goods_seckill/goods_seckill">
                    <view class="activity-img">
                        <image src="/images/icon_activity_seckill.png"></image>
                    </view>
                    <view class="ml20">
                        <view class="md" style="font-weight: bold;">限时秒杀</view>
                        <view class="xs muted">最新商品秒杀中</view>
                    </view>
                </navigator>
                <navigator hover-class="none" class="activity-item row" url="/pages/goods_bargain/goods_bargain">
                    <view class="activity-img">
                        <image src="/images/icon_activity_kanjia.png"></image>
                    </view>
                    <view class="ml20">
                        <view class="md" style="font-weight: bold;">砍价活动</view>
                        <view class="xs muted">最低砍至1元价</view>
                    </view>
                </navigator>
                <navigator hover-class="none" class="activity-item row">
                    <view class="activity-img">
                        <image src="/images/icon_activity_newProdect.png"></image>
                    </view>
                    <view class="ml20">
                        <view class="md" style="font-weight: bold;">新品首发</view>
                        <view class="xs muted">精选精品已上架</view>
                    </view>
                </navigator>
            </view> -->
        </view>
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
import { getWallet } from '../../api/user';
// import recommend from "../../components/recommend/recommend";

export default {
  data() {
    return {
      wallet: {}
    };
  },

  components: {
    // recommend
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
  onShow: function () {
    this.getWalletFun();
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {},

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {},

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {},

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {},
  methods: {
    goPage(e) {
      let {
        url
      } = e.currentTarget.dataset;
      uni.navigateTo({
        url
      });
    },

    getWalletFun() {
      getWallet().then(res => {
        if (res.code == 1) {
            this.wallet = res.data;
        }
      });
    }

  }
};
</script>
<style lang="scss">
/* pages/user_wallet/user_wallet.wxss */
image {
    width: 100%;
    height: 100%;
}

.user-wallet {
    .contain {
        padding: 20rpx 30rpx 36rpx;
        .header {
            position: relative;
            background:linear-gradient(180deg,rgba(255,44,60,1) 0%,rgba(255,49,106,1) 100%);
            border-radius: 20rpx;
            height: 320rpx;
            padding: 50rpx 30rpx 30rpx;
            box-sizing: border-box;
            .money {
                .item  {
                    flex: 1;
                }
            }
            .btn {
                position: absolute;
                right: 30rpx;
                top: 50rpx;
                padding: 0 51rpx;
            }
        }
        .nav  {
            border-bottom: $-solid-border;
            .nav-item{
                flex: 1;
                padding: 40rpx 0;
                image {
                    width: 62rpx;
                    height: 62rpx;
                }
            }
        }
    }
    .activity {
        padding: 40rpx 0rpx;
        .activity-title {
            font-weight: bold;
        }
        .activity-header {
            margin-top: 30rpx;
            .activity-header-left {
                padding: 43rpx 30rpx;
                color: #1579DC;
                background-size: 100% 100%;
                background-image: url(../../static/images/sign_in_bg.png);
                width: 335rpx;
            }
            .activity-header-right {
                padding: 43rpx 30rpx;
                color: #FF2C3C;
                width: 335rpx;
                background-size: 100% 100%;
                background-image: url(../../static/images/get_coupon_bg.png);
            }
        }
    }
    .activity-items-contain {
        .activity-item {
            padding: 33rpx 0;
            width: 335rpx;
            .activity-img {
                width: 74rpx;
                height: 74rpx;
            }
        }
    }
}

</style>