// +---------------------------------------------------------------------- // |
likeshop开源商城系统 //
+---------------------------------------------------------------------- // |
欢迎阅读学习系统程序代码，建议反馈是我们前进的动力 // |
gitee下载：https://gitee.com/likeshop_gitee // |
github下载：https://github.com/likeshop-github // |
访问官网：https://www.likeshop.cn // | 访问社区：https://home.likeshop.cn // |
访问手册：http://doc.likeshop.cn // | 微信公众号：likeshop技术社区 // |
likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |
likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布 // |
likeshop团队版权所有并拥有最终解释权 //
+---------------------------------------------------------------------- // |
author: likeshop.cn.team //
+----------------------------------------------------------------------

<template>
  <view>
    <navbar title="订单详情"></navbar>
    <view class="order-details">
      <view class="header-bg"></view>
      <view class="main">
        <view class="header">
          <view class="item" v-if="orderDetail.order_status == 0">
            <view class="white lg mb10">等待买家付款</view>
            <view
              class="white sm row"
              style="line-height: 26rpx"
              v-if="cancelTime > 0"
              >支付剩余
              <u-count-down
                separator="zh"
                :timestamp="cancelTime"
                separator-color="#fff"
                color="#fff"
                :separator-size="26"
                :font-size="26"
                bg-color="transparent"
              ></u-count-down>
              自动关闭</view
            >
          </view>
          <template v-if="orderDetail.delivery_type == 1">
            <view class="item" v-if="orderDetail.order_status == 1">
              <view class="white lg mb10">等待商家发货</view>
              <view class="white sm">您的商品正在打包中，请耐心等待…</view>
            </view>
            <view class="item" v-if="orderDetail.order_status == 2">
              <view class="white lg mb10">已发货</view>
              <view class="white sm">您的商品正在路中，请耐心等待…</view>
            </view>
            <view class="item" v-if="orderDetail.order_status == 3">
              <view class="white lg mb10">已完成</view>
              <view class="white sm">商品已签收，期待再次购买！</view>
            </view>
            <view class="item" v-if="orderDetail.order_status == 4">
              <view class="white lg mb10">订单已关闭</view>
              <!-- <view class="white sm">原因：超时未支付</view> -->
            </view>
          </template>

          <template v-if="orderDetail.delivery_type == 2">
            <view class="item" v-if="orderDetail.order_status == 1">
              <view class="white lg mb10">待取货</view>
              <view class="white sm">请前往指定门店取货</view>
            </view>
            <view class="item" v-if="orderDetail.order_status == 3">
              <view class="white lg mb10">已完成</view>
              <view class="white sm">交易已完成，感谢您的购买！</view>
            </view>
            <view class="item" v-if="orderDetail.order_status == 4">
              <view class="white lg mb10">订单已关闭</view>
            </view>
          </template>
        </view>

        <!-- 快递配送 -->
        <view
          v-if="orderDetail.delivery_type == 1"
          class="receiving-card contain"
          @click="onAddressExpress"
        >
          <u-image
            class="icon-md mr20"
            width="44"
            height="44"
            src="/static/images/icon_address.png"
            mode="scaleToFill"
          />
          <view class="receiving-content">
            <view class="md black bold">
              <text>{{ orderDetail.consignee }}</text>
              <text class="ml10">{{ orderDetail.mobile }}</text>
            </view>
            <view class="xs black mt10">{{
              orderDetail.delivery_address
            }}</view>
          </view>
        </view>

        <!-- 门店自提 -->
        <view
          v-if="orderDetail.delivery_type == 2"
          class="receiving-card contain"
        >
          <u-image
            class="icon-md mr20"
            width="44"
            height="44"
            src="/static/images/icon_address.png"
            mode="scaleToFill"
          />
          <view class="receiving-content">
            <text class="md black bold">{{
              orderDetail.selffetch_shop.name
            }}</text>
            <text class="xs black mt10">{{
              orderDetail.selffetch_shop.shop_address
            }}</text>
            <text class="xs muted mt10">
              <text>营业时间：</text>
              <text
                >{{ orderDetail.selffetch_shop.business_start_time }} -
                {{ orderDetail.selffetch_shop.business_end_time }}</text
              >
            </text>
          </view>
        </view>

        <!-- 扫码收货 -->
        <view v-if="orderDetail.delivery_type == 2" class="contain receive">
          <view v-if="orderDetail.verification_status" class="delivery--die">
            <u-image
              src="/static/images/delivery_die.png"
              width="134"
              height="98"
              mode="scaleFill"
            />
          </view>

          <view class="receive-qr" v-if="showQRSelffetch">
            <text class="xs lighter">请凭二维码取货</text>
            <view
              class="mt20 qr-contain"
              :class="{ 'qr-contain--die': orderDetail.verification_status }"
              ref="qr-image"
            >
              <tki-qrcode
                ref="qrcode"
                uni="px"
                :val="orderDetail.pickup_code"
                :size="118 * 2"
                :showLoading="false"
              />
            </view>
            <view class="mt30 xs black qr-code"
              >提货码：{{ orderDetail.pickup_code }}</view
            >
          </view>

          <view class="nr receive-info">
            <view class="receive-info-item">
              <text class="normal">提货人</text>
              <text class="black">{{ orderDetail.consignee }}</text>
            </view>
            <view class="receive-info-item">
              <text class="normal">联系方式</text>
              <text class="black">{{ orderDetail.mobile }}</text>
            </view>
          </view>
        </view>

        <view class="goods contain" style="margin-bottom: 0">
          <view class="status row-between" v-if="team.status != null">
            <view>拼团状态</view>
            <view
              :style="
                'padding: 6rpx 26rpx; ' +
                (team.status == 2 && 'background-color: #d7d7d7')
              "
              class="bg-primary br60 white sm"
            >
              {{ teamStatus(team.status) }}
            </view>
          </view>
          <order-goods
            :team="team"
            :link="true"
            :list="orderDetail.order_goods"
            :order_type="orderDetail.order_type"
          ></order-goods>
        </view>

        <view class="price contain" style="border-radius: 0rpx 14rpx">
          <view class="row-between" v-if="priceShow">
            <view>商品总价</view>
            <view class="black">
              <price-format :price="orderDetail.goods_price"></price-format>
            </view>
          </view>
          <view class="row-between" v-if="priceShow">
            <view>运费</view>
            <view class="black"
              >+
              <price-format :price="orderDetail.shipping_price"></price-format>
            </view>
          </view>
          <view
            v-if="orderDetail.discount_amount != 0 && priceShow"
            class="row-between"
          >
            <view>优惠券</view>
            <view class="primary"
              >-
              <price-format :price="orderDetail.discount_amount"></price-format>
            </view>
          </view>
          <view
            v-if="orderDetail.integral_amount != 0 && priceShow"
            class="row-between"
          >
            <view>积分抵扣</view>
            <view class="primary"
              >-
              <price-format :price="orderDetail.integral_amount"></price-format>
            </view>
          </view>
          <view class="row-between">
            <view class="">
              <text v-if="orderDetail.order_status === 0">需</text>
              <text v-else>实</text>
              付款：
            </view>
            <view class="primary xl">
              <price-format
                :first-size="34"
                :second-size="34"
                :price="orderDetail.order_amount"
              >
              </price-format>
            </view>
          </view>
          <view
            class="row-center muted"
            style="padding: 40rpx 0"
            @click="priceShow = !priceShow"
          >
            <view>
              <text class="mr10" v-if="priceShow"> 收起 </text>
              <text class="mr10" v-else> 查看更多 </text>

              <u-icon name="arrow-up" v-if="priceShow" />
              <u-icon name="arrow-down" v-else />
            </view>
          </view>
        </view>
        <view class="order-info contain">
          <view class="item row" style="align-items: flex-start">
            <view class="title">买家留言</view>
            <view class="black">{{ orderDetail.user_remark || "无" }}</view>
          </view>
        </view>
        <view class="order-info contain">
          <view class="item row">
            <view class="title">订单编号</view>
            <view class="black">{{ orderDetail.order_sn }}</view>
          </view>
          <view class="item row">
            <view class="title">订单类型</view>
            <view class="black">{{ orderDetail.order_type_desc }}</view>
          </view>
          <view class="item row">
            <view class="title">支付方式</view>
            <view class="black">{{ orderDetail.pay_way_text }}</view>
          </view>
          <view class="item row">
            <view class="title">下单时间</view>
            <view class="black">{{ orderDetail.create_time }}</view>
          </view>
          <view v-if="orderDetail.pay_time" class="item row">
            <view class="title">付款时间</view>
            <view class="black">{{ orderDetail.pay_time }}</view>
          </view>
          <view v-if="orderDetail.shipping_time" class="item row">
            <view class="title">发货时间</view>
            <view class="black">{{ orderDetail.shipping_time }}</view>
          </view>
          <view v-if="orderDetail.confirm_take_time" class="item row">
            <view class="title">成交时间</view>
            <view class="black">{{ orderDetail.confirm_take_time }}</view>
          </view>
          <view v-if="orderDetail.cancel_time" class="item row">
            <view class="title">关闭时间</view>
            <view class="black">{{ orderDetail.cancel_time }}</view>
          </view>
        </view>
        <view
          class="footer bg-white row fixed"
          v-if="
            orderDetail.cancel_btn ||
            orderDetail.delivery_btn ||
            orderDetail.take_btn ||
            orderDetail.del_btn ||
            orderDetail.pay_btn
          "
        >
          <view style="flex: 1"></view>
          <view v-if="orderDetail.cancel_btn">
            <button
              size="sm"
              class="plain br60"
              hover-class="none"
              @tap="cancelOrder"
            >
              取消订单
            </button>
          </view>
          <navigator
            v-if="orderDetail.delivery_btn"
            hover-class="none"
            :url="
              '/bundle/pages/goods_logistics/goods_logistics?id=' +
              orderDetail.id
            "
          >
            <button size="sm" class="plain br60" hover-class="none">
              查看物流
            </button>
          </navigator>
          <view v-if="orderDetail.take_btn" class="ml20">
            <button
              size="sm"
              class="plain br60 primary red"
              hover-class="none"
              @tap.stop="comfirmOrder"
            >
              确认收货
            </button>
          </view>
          <view v-if="orderDetail.del_btn">
            <button
              size="sm"
              class="plain br60"
              hover-class="none"
              @tap="delOrder"
            >
              删除订单
            </button>
          </view>
          <view class="ml20" v-if="orderDetail.pay_btn">
            <button size="sm" class="bg-primary br60 white" @tap="payNow">
              立即付款
            </button>
          </view>
        </view>
      </view>
    </view>

    <loading-view v-if="isFirstLoading"></loading-view>
    <order-dialog
      ref="orderDialog"
      :orderId="orderDetail.id"
      :type="type"
      @refresh="onRefresh"
    ></order-dialog>
    <loading-view
      v-if="showLoading"
      background-color="transparent"
      :size="50"
    ></loading-view>
  </view>
</template>

<script>
import {
  getOrderDetail,
  getwechatSyncCheck,
  getwxReceiveDetail,
  confirmOrder,
} from "@/api/order";
import { compareWeChatVersion } from "@/utils/tools";

import { prepay } from "@/api/app";
import { wxpay, alipay } from "@/utils/pay";

export default {
  data() {
    return {
      orderDetail: {},
      team: {},
      isFirstLoading: true,
      type: 0,
      cancelTime: 0,
      showCancel: "",
      showLoading: false,
      imageQR: "",
      priceShow: false,
    };
  },

  components: {},
  props: {},

  onLoad: function (options) {
    this.id = options.id;
    this.getOrderDetailFun();
  },

  onUnload() {
    uni.$off("payment");
  },

  onShow() {
    this.getOrderDetailFun();
  },

  methods: {
    onRefresh() {
      uni.$emit("refreshorder");
      const { type } = this;
      if ([0, 2].includes(type)) {
        this.getOrderDetailFun();
      } else if (type == 1) {
        setTimeout(() => {
          uni.navigateBack();
        }, 2000);
      }
    },
    orderDialog() {
      this.$refs.orderDialog.open();
    },

    delOrder() {
      this.type = 1;
      this.$nextTick(async () => {
        this.orderDialog();
      });
    },
    // 小程序确认收货
    comfirmReceive(transaction_id) {
      return new Promise((resolve, reject) => {
        wx.openBusinessView({
          businessType: "weappOrderConfirm",
          extraData: {
            transaction_id,
          },
          success({ extraData }) {
            if (extraData.status == "success") {
              resolve("确认收货");
            } else {
              resolve("取消收货");
            }
          },
          fail(err) {
            reject(err);
          },
        });
      });
    },
    //查询是否收货成功
    querycomfirmReceive(id) {
      return new Promise((resolve, reject) => {
        getwechatSyncCheck({ id })
          .then(({ data }) => {
            if (data.order.order_state === 4) {
              resolve("已确认收货");
            } else {
              reject("未确认收货");
            }
          })
          .catch((err) => {
            reject(err);
          });
      });
    },

    comfirmOrder() {
      this.type = 2;
      this.$nextTick(async () => {
        // #ifdef MP-WEIXIN
        let res = {};
        if (this.orderDetail.pay_way === 1) {
          res = await getwechatSyncCheck({ id: this.id });
          console.log(res);
        }
        if (
          compareWeChatVersion("2.6.0") === 1 &&
          wx.openBusinessView &&
          this.orderDetail.pay_way === 1 &&
          res.data.order.order_state !== 1
        ) {
          try {
            const { data } = await getwxReceiveDetail({
              order_id: this.id,
            });
            await this.comfirmReceive(data.transaction_id);
            await this.querycomfirmReceive(this.id);
            await confirmOrder(this.id);
          } catch (error) {
            console.log(error);
          }
          this.getOrderDetailFun();
        } else {
          this.orderDialog();
        }
        // #endif

        // #ifndef MP-WEIXIN
        this.orderDialog();
        // #endif
      });
    },

    cancelOrder() {
      this.type = 0;
      this.$nextTick(() => {
        this.orderDialog();
      });
    },

    payNow() {
      uni.$on("payment", (params) => {
        setTimeout(() => {
          if (params.result) {
            this.$toast({
              title: "支付成功",
            });
            this.getOrderDetailFun();
            uni.$emit("refreshorder");
          } else {
            this.$toast({
              title: "支付失败",
            });
          }
        }, 500);
      });

      uni.navigateTo({
        url: `/pages/payment/payment?from=${"order"}&order_id=${this.id}`,
      });
    },

    getOrderDetailFun() {
      getOrderDetail(this.id)
        .then((res) => {
          if (res.code == 1) {
            this.cancelTime = res.data.order_cancel_time - Date.now() / 1000;
            this.orderDetail = res.data;
            this.team = res.data.team || {};
            this.$nextTick(() => {
              this.isFirstLoading = false;
            });
          } else {
            setTimeout(() => uni.navigateBack(), 1500);
          }
          return res.data;
        })
        .then((data) => {
          if (data.delivery_type === 2) {
            // 提货码
            this.$nextTick(function () {
              const refQR = this.$refs["qrcode"];
              refQR._makeCode();
            });
          }
        });
    },
  },
  computed: {
    showQRSelffetch() {
      let result = false;

      if (this.orderDetail.order_status) {
        result = true;
      }

      if (this.orderDetail.order_type == 2) {
        this.orderDetail.team_status == 1 ? (result = true) : (result = false);
      }

      return result;
    },
    teamStatus() {
      return (status) => {
        switch (status) {
          case 0:
            return "拼团中";
          case 1:
            return "拼团成功";
          case 2:
            return "拼团失败";
        }
      };
    },
    getOrderType() {
      return (type) => {
        switch (type) {
          case 0:
            return "普通订单";
          case 1:
            return "秒杀订单";
          case 2:
            return "拼团订单";
          case 3:
            return "砍价订单";
        }
      };
    },
  },
};
</script>
<style lang="scss">
.order-details {
  position: relative;
  padding-bottom: calc(120rpx + env(safe-area-inset-bottom));
}

.order-details .header-bg {
  position: absolute;
  top: 0;
  width: 100%;
  height: 200rpx;
  background-color: $-color-primary;
  z-index: 0;
}

.order-details .goods .status {
  height: 88rpx;
  padding: 0 20rpx;
}

.order-details .main {
  position: relative;
  z-index: 1;
}

.order-details .contain {
  margin: 0 20rpx 20rpx;
  border-radius: 14rpx;
  background-color: #fff;
}

.order-details .header {
  padding: 24rpx 40rpx;
  box-sizing: border-box;
}

.order-details .img-line {
  height: 1.5px;
  width: 100%;
  display: block;
}

.order-details .address-wrap {
  height: 164rpx;
  padding: 0 24rpx;
}

.order-details .order-info {
  padding: 12rpx 0;
}

.order-details .order-info .item {
  padding: 12rpx 24rpx;
}

.order-details .order-info .item .title {
  width: 180rpx;
  flex: none;
}

.order-details .price > view {
  height: 60rpx;
  padding: 0 24rpx;
}

.order-details .footer {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100rpx;
  padding: 0 24rpx;
  box-sizing: content-box;
  padding-bottom: env(safe-area-inset-bottom);
}

.footer .plain {
  border: 1px solid #bbbbbb;
}

.footer .plain.red {
  border: 1px solid $-color-primary;
}

.tips-dialog {
  height: 230rpx;
  width: 100%;
}

.order-details .invite-btn {
  background: linear-gradient(270deg, #ff2c3c 0%, #f95f2f 100%);
  margin: 30rpx 26rpx 40rpx;
}

.receiving-card {
  display: flex;
  align-items: center;
  min-height: 160rpx;
  padding: 20rpx;
  border-top: 1px solid #f2f2f2;
}

.receiving-content {
  flex: 1;
  display: flex;
  flex-direction: column;
}

.receive {
  position: relative;
}

.delivery--die {
  position: absolute;
  top: 0;
  right: 30rpx;
}

.receive-qr {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 460rpx;
}

.qr-contain {
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 140px;
  height: 140px;
  padding: 8px;
  border: 1px solid #cccccc;
  border-radius: 5px;
}

.qr-contain--die {
  position: relative;
}

.qr-contain--die::before {
  position: absolute;
  z-index: 99;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: block;
  content: "";
  background-color: rgba(255, 255, 255, 0.5);
}

.qr-code {
  padding: 8rpx 30rpx;
  border-radius: 60px;
  background-color: #f6f6f6;
}

.receive-info {
  padding-left: 20rpx;
}

.receive-info-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 100rpx;
  padding-right: 30rpx;
}

.receive-info-item:nth-child(n + 2) {
  border-top: $-dashed-border;
}
</style>
