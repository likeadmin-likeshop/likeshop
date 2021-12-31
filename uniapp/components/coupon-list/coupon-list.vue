<template>

<view class="coupon-list">
    <view v-for="(item, index) in list" :key="index" class="mb20">
        <view :class="'coupon-item row ' + (btnType == 1 || btnType == 2 ? 'gray': '')">
            <view class="price white column-center">
                <view class="xl">
                    <price-format :first-size="60" :second-size="50" :subscript-size="34" :price="item.money" :weight="500" />
                </view>
                <view class="sm" style="text-align: center">{{item.use_condition}}</view>
            </view>
            <view class="info ml20">
                <view class="bold lg mb10">{{item.name}}</view>
                <view class="xs lighter mb20">{{item.use_time_tips}}</view>
                <view class="xs lighter ">{{item.coupon_type}}</view>
            </view>
            <button type="primary" :class="'btn br60 white xs ' + (btnType != 3 ? 'plain': '')" @tap="onHandle(item.id)">
                {{getBtn}}
            </button>
            <image v-if="item.is_get" class="receive" src="/static/images/coupon_receive.png"></image>
        </view>
        <view style="padding: 14rpx 20rpx" class="bg-white" v-if="item.tips" @tap="onShowTips(index)">
            <view class="row-between">
                <view class="xs">使用说明</view>
                 <u-icon :class="showTips[index] ? 'rotate' : ''" name="arrow-down" />
            </view>
            <view v-show="showTips[index]" class="mt10 xs">{{item.tips}}</view>
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
import { getCoupon } from '../../api/user';

export default {
  data() {
    return {
      showTips: []
    };
  },

  components: {
  },
  props: {
    list: {
      type: Array,
      default: () => []
    },
    btnType: {
      // 0 去使用  1已使用 2已过期 3领取
      type: Number
    }
  },
  watch: {
    list: {
      handler: function (val) {
        let arr = val.map(item => {
          return 0;
        });
        this.showTips = arr
      },
      immediate: true,
      deep: true
    }
  },
  computed: {
  },
  computed: {
    getBtn() {
        var text = ''
        switch (this.btnType) {
          
            case 0:
                text = '去使用';
                break;
            case 1:
                text = '已使用';
                break;
            case 2:
                text = '已过期';
                 break;
            case 3:
                text = '领取';
                break;
        }
        return text
    }
  },
  methods: {
    onHandle(id) {
      this.id = id;
      const {
        btnType
      } = this;

      switch (btnType) {
        case 0:
          uni.switchTab({
            url: '/pages/index/index'
          });
          break;

        case 1:
          // text = '去使用';
          break;

        case 2:
          // text = '已使用';
          break;

        case 3:
          this.getCouponFun();
          break;
      }
    },

    onShowTips(index) {
      const {
        showTips
      } = this;
      
      this.showTips[index] = showTips[index] ? 0 : 1
      // 拷贝数组
      this.showTips = Object.assign([], this.showTips);
    },

    getCouponFun() {
      getCoupon(this.id).then(res => {
        if (res.code == 1) {
          this.$toast({title: res.msg})
          this.$emit('reflash');
        }
      });
    }

  }
};
</script>
<style lang="scss" >
/* components/coupon-list/coupon-list.wxss */
.coupon-list {
    padding:  20rpx 24rpx;
    .coupon-item {
        position: relative;
        height: 200rpx;
        background-image: url(../../static/images/coupon_bg.png);
        background-size: 100% 100%;
        &.gray {
            background-image: url(../../static/images/coupon_bg_grey.png);
            .btn{
                &.plain {
                    color: #CCCCCC;
                }   
            }
        }
        .price {
            width: 200rpx;
        }
        .btn {
            line-height: 52rpx;
            height: 52rpx;
            position: absolute;
            right: 20rpx;
            bottom: 20rpx;
            width: 120rpx;
            text-align: center;
            padding: 0;
            text-align: center;
            box-sizing: border-box;
            &.plain {
                background-color: #fff;
                color: var(--primary-color);
                border: 1px solid currentColor;
            }
        }
        .receive  {
            position: absolute;
            right: 30rpx;
            top: 0rpx;
            width: 99rpx;
            height: 77rpx;
        }
    }
    .icon {
        transition: all 0.4s;
    }
    .rotate {
        transform: rotateZ(-180deg);
    }
}

</style>