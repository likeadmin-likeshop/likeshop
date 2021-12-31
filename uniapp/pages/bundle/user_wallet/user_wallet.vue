<template>
<!--pages/user_wallet/user_wallet.wxml-->
<view class="user-wallet">
    <view class="contain bg-white mb20">
        <view class="header">
            <view class="white mb20">
                <view class="xs">总资产（元）</view>
                <view style="font-size: 76rpx">{{wallet.user_money}}</view>
            </view>
            <view class="money white row">
                <view class="item">
                    <view class="xs">累计充值(元)</view>
                     <view style="font-size: 38rpx">{{wallet.total_recharge_amount || 0}}</view>
                </view>
                <view class="item">
                    <view class="xs">累计消费(元)</view>
                     <view style="font-size: 38rpx">{{wallet.total_order_amount || 0}}</view>
                </view>
                <navigator v-if="wallet.open_racharge" style="height: 58rpx;" hover-class="none" url="/pages/bundle/user_payment/user_payment" class="row-center primary bg-white br60 btn" size="xs">充值</navigator>
            </view>
        </view>
        <view class="nav row">
			<navigator class="nav-item column-center" hover-class="none" url="/pages/bundle/balance_transfer/balance_transfer">
			    <image src="/static/images/icon_yezz.png"></image>
			    <view class="mt10">余额转账</view>
			</navigator>
            <navigator class="nav-item column-center" hover-class="none" url="/pages/bundle/user_bill/user_bill?type=0">
                <image src="/static/images/icon_zhmx.png"></image>
                <view class="mt10">账户明细</view>
            </navigator>
			
			<navigator class="nav-item column-center" hover-class="none" url="/pages/bundle/transfer_record/transfer_record">
			    <image src="/static/images/icon_zzjl.png"></image>
			    <view class="mt10">转账记录</view>
			</navigator>
            <navigator class="nav-item column-center" hover-class="none" url="/pages/bundle/recharge_code/recharge_code">
                <image src="/static/images/icon_czjl.png"></image>
                <view class="mt10">充值记录</view>
            </navigator>
        </view>
        <view class="activity">
            <view class="activity-title xl row">
               <view class="mr20" style="width: 6rpx;height: 30rpx;background-color: #FF2C3C;"></view> 热门活动
            </view>
            <view class="activity-item row-between">
                <view>
                    <view class="xl normal" style="font-weight: 500;">会员积分 限时兑换</view>
                    <view class="muted sm mt10">积分签到抵现金</view>
                    <navigator class="br60 bg-primary white join-btn row-center" url="/pages/bundle/user_sign/user_sign" hover-class="none">立即参与</navigator>
                </view>
                <image style="width:274rpx;height: 210rpx;" src="/static/images/img_activity_jifen.png"></image>
            </view>
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
import { getWallet } from '@/api/user';
export default {
  data() {
    return {
      wallet: {}
    };
  },

  components: {
    
  },
  props: {},

 
  onShow: function () {
    this.getWalletFun();
  },

  methods: {

    getWalletFun() {
      getWallet().then(res => {
        if (res.code == 1) {
          this.wallet = res.data
        }
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
            .nav-item {
                width: 25%;
                padding: 40rpx 0;
                image {
                    width: 52rpx;
                    height: 52rpx;
                }
            }
        }
    }
}

.activity {
    padding: 40rpx 0rpx;
    .activity-title {
        font-weight: bold;
    }
    .activity-item {
        padding: 15rpx 40rpx;
        box-shadow: 0px 0rpx 20rpx rgba(0, 0, 0, 0.16);
        margin-top: 34rpx;
        .join-btn {
            height: 52rpx;
            width: 156rpx;
            margin-top: 24rpx;
        }
    }
}

</style>