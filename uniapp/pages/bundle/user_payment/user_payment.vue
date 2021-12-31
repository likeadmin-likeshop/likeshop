<template>
<view>
<!-- pages/user_payment/user_payment.wxml -->
<view class="user-payment">
    <form report-submit="true">
        <view class="payment bg-white">
            <view class="md normal row" style="padding: 66rpx 66rpx 0">
                充值金额
            </view>
            <view class="input row">
                <text style="font-size: 46rpx">￥</text>
                <input :placeholder="placeholder" type="digit" @focus="setPlaceholder" @blur="setPlaceholderStatus" :value="number" @input="onInput"></input>
            </view>
            <view class="tip muted mt20 row">
                提示：当前余额为
                <text class="primary">￥{{userInfo.user_money || 0}}</text>
            </view>
        </view>
        <button size="lg" class="btn white br60" @tap="rechargeRights">
            立即充值
        </button>
    </form>
    <view class="fast-payment-container">
        <view class="title bold normal row">推荐充值</view>
        <view class="fast-pay row wrap">
            <view v-for="(item, index) in rechargeObj" :key="index" class="fast-pay-item bg-white column-center" @tap="temRecharge" :data-id="item.id">
                <view class="hot-recharge white" v-if="item.is_recommend">热门充值</view>
                <view class="price primary bold">
                    <price-format weight="500" :firstSize="42" :secondSize="42" :price="item.money"></price-format>
                    <text class="xxl" style="font-weight: 500">元</text>
                </view>
                <view class="preferential primary xs">{{item.tips}}</view>
            </view>
        </view>
    </view>
</view>
<u-popup class="pay-popup" v-model="showPopup" closeable round mode="center">
    <view class="content bg-white">
        <image class="img-icon" src="/static/images/recharge_success.png"></image>
        <view class="xxl bold mt10">充值成功</view>
        <view v-if="rechargeInfo.give_integral || rechargeInfo.give_growth" class="lg" style="margin-top: 50rpx">恭喜您获得 <text><text class="primary" v-if="rechargeInfo.give_integral">{{rechargeInfo.give_integral}}</text> 积分</text> <text v-if="rechargeInfo.give_growth">+ <text class="primary">{{rechargeInfo.give_growth}}</text>成长值</text></view>
        <button class="br60 btn" type="primary" size="md" @tap="onShowPopup">好的，谢谢</button>
    </view>
</u-popup>
<loading-view id="van-toast" v-if="showLoading" backgroundColor="rgba(0, 0, 0, 0)"></loading-view>
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
import { rechargeTemplate, recharge, getUser } from '@/api/user';
import { prepay } from '@/api/app';
import { wxpay } from '@/utils/pay';

export default {
  data() {
    return {
      navRecharge: ['账户充值', '佣金转入'],
      active: 0,
      number: '',
      placeholder: "0.00",
      rechargeObj: [],
      showPopup: false,
      rechargeInfo: {},
      userInfo: {},
      showLoading: false
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.rechargeTemplateFun();
    this.getUserInfoFun();
  },

  methods: {
    onShowPopup() {
      this.showPopup = !this.showPopup
    },

    setPlaceholderStatus: function (event) {
      if (event.detail.value.length == 0) {
        this.placeholder = '0.00'
      }
    },
    setPlaceholder: function () {
      this.placeholder = ''
    },

    getUserInfoFun() {
      getUser().then(res => {
        if (res.code == 1) {
          this.userInfo = res.data
        }
      });
    },

    rechargeTemplateFun() {
      rechargeTemplate().then(res => {
        if (res.code == 1) {
          this.rechargeObj = res.data
        }
      });
    },

    rechargeRights() {
      const {
        number
      } = this;
      this.rechargeFun({
        money: Number(number)
      });
    },

    temRecharge(e) {
      let {
        id
      } = e.currentTarget.dataset;
      this.rechargeFun({
        id
      });
    },

    rechargeFun(obj) {
      this.showLoading = true
      obj = Object.assign(obj, {
        pay_way: 1
      });
      recharge(obj).then(res => {
        if (res.code == 1) {
          let {
            id
          } = res.data;
          this.rechargeInfo = res.data
          return prepay({
            from: 'recharge',
            order_id: id
          })
        } else {
            this.showLoading = false;
          return false;
        }
      }).then(res => {

        this.showLoading = false;
        if (res.code == 1) {
          let args = res.data;
          wxpay(args).then((resPay) => {
			  if(resPay == 'success') {
				this.onShowPopup();
				this.getUserInfoFun();
			  }
          })
        }
      });
    },

    checkInputText: function (text) {
      var reg = /^(\.*)(\d+)(\.?)(\d{0,2}).*$/g;

      if (reg.test(text)) {
        //正则匹配通过，提取有效文本
        text = text.replace(reg, '$2$3$4');
      } else {
        //正则匹配不通过，直接清空
        text = '';
      }

      return text; //返回符合要求的文本（为数字且最多有带2位小数）
    },

    onInput(e) {
      let number = e.detail.value;
      number = this.checkInputText(number);
      this.number = number
    }
  }
};
</script>
<style lang="scss">
/* pages/user_payment/user_payment.wxss */
.user-payment {
    padding: 20rpx 30rpx;
    .payment {
        text-align: center;
        border-radius: 20rpx;
        overflow: hidden;
        padding-bottom: 74rpx;
        .nav {
            margin: 20rpx 95rpx 80rpx;
            .item {
                flex: 1;
                .line {
                    width: 110rpx;
                    height: 2px;
                }
            }
        }
        .line {
            width: 110rpx;
            height: 2px;
        }
        .input {
            margin-left: 66rpx;
            margin-top: 35rpx;
            margin-right: 30rpx;
            input {
                height: 94rpx;
                text-align: left;
                font-size: 66rpx;
                margin-left: 30rpx;
            }
            border-bottom: $-solid-border;
        }
        .tip {
            margin: 25rpx 66rpx;
        }
        
    }
    .btn {
        background:linear-gradient(79deg,rgba(249,95,47,1) 0%,rgba(255,44,60,1) 100%);
        margin: 70rpx 0 30rpx;
    }
    .fast-payment-container {
        margin-top: 72rpx;
        .title {
            font-size: 38rpx;
            line-height: 53rpx;
        }
        .fast-pay {
            margin-top: 40rpx;
            .fast-pay-item {
                position: relative;
                width: 214rpx;
                height: 150rpx;
                border-radius: 10rpx;
                margin-bottom: 16rpx;
				border: 1px solid $-color-primary;
                &:not(:nth-of-type(3n)) {
                    margin-right: 24rpx;
                }
                .hot-recharge {
                    position: absolute;
                    padding: 2rpx 10rpx;
                    background: linear-gradient(180deg, #FF2C3C 0%, #F95F2F 100%);
                    border-radius: 0 10rpx 0 10rpx;
                    font-size: 20rpx;
                    top: 0;
                    right: 0;
                }
                .price {
                    font-size: 42rpx;
                    line-height: 50rpx;
                }
                .preferential {
                    line-height: 32rpx;
                }
            }
            
        }
    }
}

.pay-popup {
    .content{
        padding: 40rpx 0;
        text-align: center;
        width: 560rpx;
		border-radius: 20rpx;
    }
    .img-icon {
        width: 168rpx;
        height: 118rpx;
        display: inline-block;
    }
    .btn {
        margin: 80rpx 60rpx 0;
    }
}
</style>