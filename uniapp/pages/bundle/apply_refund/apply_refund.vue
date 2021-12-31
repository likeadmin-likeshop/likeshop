<template>
<view>
<!-- pages/apply_refund/apply_refund.wxml -->
<view class="apply-refund">
    <view class="goods">
        <view class="row">
            <custom-image width="160rpx" height="160rpx" radius="6rpx" lazy-load :src="goods.image" />
            <view class="goods-info">
                <view class="nr line2">{{goods.goods_name}}</view>
                <view class="xs muted mt10">{{goods.spec_value}}</view>
            </view>
        </view>
    </view>
    <view class="opt-box mt20" :hidden="hiddenOpt">
        <view class="opt-item row-between border-line" @tap="onlyRefund">
            <view>
                <view class="lg normal">仅退款</view>
                <view class="muted xs mt10">未收到货，与卖家协商同意无需退货只需退款</view>
            </view>
            <image style="width: 28rpx; height: 28rpx;" src="/static/images/arrow_right.png"></image>
        </view>
        <view class="opt-item row-between" @tap="allRefunds">
            <view>
                <view class="lg normal">退货退款</view>
                <view class="muted xs mt10">已收到货，需退还收到的实物</view>
            </view>
            <image style="width: 28rpx; height: 28rpx;" src="/static/images/arrow_right.png"></image>
        </view>
    </view>
    <view :hidden="!hiddenOpt">
        <view class="refund-info row-between mt20">
            <view class="lable">数量</view>
            <view>{{goods.goods_num}}</view>
        </view>
        <view class="refund-info row-between">
            <view class="lable">退款金额</view>
            <price-format color="#FF2C3C" :price="goods.goods_price" showSubscript="true" :subscriptSize="28" :firstSize="28" :secondSize="28" />
        </view>
        <view class="refund-info row-between" @tap="showPopup">
            <view class="lable">退款原因</view>
            <view class="row">
                <text :class="'nr ' + (reasonIndex == -1 ? 'muted' : 'normal')">{{reasonIndex == -1 ? '请选择' : reason[reasonIndex] }}</text>
                <image class="icon-sm ml20" src="/static/images/arrow_right.png"></image>
            </view>
        </view>
        <view class="refund-info row">
            <view class="label">备注说明</view>
            <textarea v-show="!showPop" class="bg-body" placeholder="请描述申请售后的具体原因，100字以内" v-model="remark" name="textarea" ></textarea> 
        </view>
        <view class="upload bg-white">
            <view class="title row-between">
                <view>上传凭证</view>
                <view class="muted">（选填，最多可上传1张）</view>
            </view>
            <uploader :deletable="true" preview-size="160rpx" :file-list="fileList" @after-read="afterRead" @delete="deleteImage" image-fit="aspectFill" />
        </view>
        <button class="btn br60" type="primary" size="lg" @tap="onSubmit">申请退款</button>
    </view>
</view>

    <u-popup id="popup" v-model="showPop" mode="bottom">
        <view class="pop-container bg-white">
            <view class="pop-header row-center md normal">
                退款原因
            </view>
            <scroll-view style="height: 800rpx" :scroll-y="true">
                <view class="reason-box mt20">
                    <radio-group @change="radioChange">
                        <label v-for="(item, index) in reason" :key="index" class="reason-item row-between" @tap="hidePopup">
                            <view class="reason-desc nr">
                                {{item}}
                            </view>
                            <radio :value="index"></radio>
                        </label>
                    </radio-group>
                </view>
            </scroll-view>
        </view>
    </u-popup>
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
import { refundOptType } from "@/utils/type";
import { baseURL } from '@/config/app';
import { getGoodsInfo, applyAfterSale, applyAgain } from "@/api/user";
import { uploadFile } from '@/utils/tools.js';

export default {
  data() {
    return {
      hiddenOpt: false,
      optTyle: refundOptType.ONLY_REFUND,
      goods: {},
      reason: [],
      showPop: false,
      reasonIndex: -1,
      fileList: [],
      remark: ""
    };
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    let {
      order_id,
      item_id,
      afterSaleId
    } = options;
    this.orderId = order_id;
    this.itemId = item_id;
    this.afterSaleId = afterSaleId;
    this.getGoodsInfoFun();
  },

  methods: {
    showPopup() {
      this.showPop = true
    },

    radioChange(e) {
      this.reasonIndex = e.detail.value
    },

    hidePopup() {
      this.showPop = false
    },

    onlyRefund: function () {
      this.optTyle = refundOptType.ONLY_REFUND
      this.hiddenOpt = true
    },

    allRefunds() {
      this.optTyle = refundOptType.REFUNDS;
      this.hiddenOpt = true;
    },

    onSubmit() {
      console.log(this.afterSaleId);

      if (this.afterSaleId) {
        this.applyAgainFun();
      } else {
        this.applyAfterSaleFun();
      }
    },

    // 重新申请
    applyAgainFun() {
      let {
        reason,
        reasonIndex,
        optTyle,
        remark,
        fileList
      } = this;

      if (!reason[reasonIndex]) {
        return this.$toast({
          title: '请选择退款原因'
        });
      }

      const data = {
        id: this.afterSaleId,
        reason: reason[reasonIndex],
        refund_type: optTyle,
        remark: remark,
        img: fileList.length <= 0 ? '' : fileList[0].base_url
      };
      applyAgain(data).then(res => {
        if (res.code == 1) {
          uni.$emit("refreshsale")
          this.$toast({
            title: res.msg
          }, {
            tab: 5,
            url: '/pages/bundle/after_sales_detail/after_sales_detail?afterSaleId=' + res.data.after_sale_id
          });
        }
      });
    },

    onInput(e) {
      this.setData({
        remark: e.detail.value
      });
      this.remark = e.detail.value
    },

    applyAfterSaleFun() {
      let {
        reason,
        reasonIndex,
        optTyle,
        remark,
        fileList
      } = this;

      if (!reason[reasonIndex]) {
        return this.$toast({
          title: '请选择退款原因'
        });
      }

      const data = {
        item_id: this.itemId,
        order_id: this.orderId,
        reason: reason[reasonIndex],
        refund_type: optTyle,
        remark: remark,
        img: fileList.length <= 0 ? '' : fileList[0].url
      };
      applyAfterSale(data).then(res => {
        if (res.code == 1) {
          uni.$emit("refreshsale")
          this.$toast({
            title: '提交成功'
          });
          uni.redirectTo({
            url: '/pages/bundle/after_sales_detail/after_sales_detail?afterSaleId=' + res.data.after_sale_id
          });
        }
      });
    },

    afterRead(e) {
      const file = e
      uni.showLoading({
        title: '正在上传中...',
        mask: true
      });
      file.map(item => {
        uploadFile(item.path).then(res => {
            uni.hideLoading();
            this.fileList.push(res)
        });
      })
    },

    deleteImage(index) {
      this.fileList.splice(index, 1);
    },

    getGoodsInfoFun() {
      let {
        orderId,
        itemId
      } = this;
      getGoodsInfo({
        order_id: orderId,
        item_id: itemId
      }).then(res => {
        if (res.code == 1) {
          this.goods = res.data.goods;
          this.reason = res.data.reason;
        }
      });
    }

  }
};
</script>
<style lang="scss">
/* pages/apply_refund/apply_refund.wxss */
.apply-refund {
    padding-bottom: 50rpx;
    .goods{
        padding: 20rpx 0;
        background-color: white;
        padding: 20rpx 24rpx;
        .goods-info{
            margin-left: 24rpx;
            flex: 1;
        }
    }
    
}

.opt-box {
    .opt-item {
        padding: 20rpx 20rpx 20rpx 30rpx;
        background-color: white;
    }
}


.border-line {
    border: 1px solid #F2F2F2;
}

.apply-refund  {
    .refund-info {
        background-color: #fff;
        padding: 24rpx 20rpx;
        border-bottom: var(--border);
        .label {
            align-self: start;
            width: 140rpx;
            line-height: 36rpx;
            margin-top: 19rpx;
        }
        textarea {
            flex: 1;
            height: 172rpx;
            border-radius: 10rpx;
            padding: 20rpx;
            box-sizing: border-box;
        }
    }
    .upload  {
        padding: 0 20rpx;
        .title{
            padding: 24rpx 0;
        }
    }
    .btn {
        width: 680rpx;
        margin-top: 30rpx;
        margin-left: 26rpx;
        margin-right: 26rpx;
    }
}

.pop-header {
    line-height: 42rpx;
    padding: 30rpx;
}

.reason-box {
    .reason-item {
        padding: 24rpx 20rpx;
        .reason-desc {
            line-height: 46rpx;
        }
    }
}
</style>