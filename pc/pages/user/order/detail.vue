<template>
  <div class="order-detail">
    <div class="detail-hd row-between">
      <div class="lg">订单状态</div>
      <div :class="['status lg', { primary: orderDetail.order_status == 0 }]">
        {{ orderDetail.order_status_desc }}
      </div>
    </div>

    <div class="address">
      <div class="address-item">
        <div class="lighter address-item-label">收件人：</div>
        <div>{{ orderDetail.consignee }}</div>
      </div>
      <div class="address-item">
        <div class="lighter address-item-label">联系方式：</div>
        <div>{{ orderDetail.mobile }}</div>
      </div>

      <template v-if="orderDetail.delivery_type === 1">
        <div class="address-item">
          <div class="lighter address-item-label">收货地址：</div>
          <div>{{ orderDetail.delivery_address }}</div>
        </div>
      </template>

      <template v-if="orderDetail.delivery_type === 2">
        <div class="address-item">
          <div class="lighter address-item-label">门店地址：</div>
          <div>
            <div class="bold black">{{ orderDetail.selffetch_shop.name }}</div>
            <div class="lighter mt8">
              {{ orderDetail.selffetch_shop.shop_address }}
            </div>

            <div class="row">
              <div class="column-center mt10">
                <div class="qr-container" ref="qrCodeUrl"></div>
                <div class="selffetc-code mt10">
                  <span>提货码:</span>
                  <span>{{ orderDetail.pickup_code }}</span>
                  <span class="primary ml8 pointer" @click="onCopyQRCode"
                    >复制</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </template>
    </div>

    <div class="detail-con">
      <div class="title row">
        <div class="flex1">下单时间：{{ orderDetail.create_time }}</div>
        <div class="flex1">订单编号：{{ orderDetail.order_sn }}</div>
        <div class="flex1">订单类型：{{ orderDetail.order_type_desc }}</div>
      </div>
      <div class="goods">
        <div class="goods-hd lighter row">
          <div class="info row flex1">商品信息</div>
          <div class="price row-center">单价</div>
          <div class="num row-center">数量</div>
          <div class="total row-center">合计</div>
          <div class="total row-center">操作</div>
        </div>
        <div class="goods-list">
          <div
            class="goods-item row"
            v-for="(item, index) in orderDetail.order_goods"
            :key="index"
          >
            <nuxt-link
              :to="`/goods_details/${item.goods_id}`"
              class="info row flex1"
            >
              <el-image class="goods-img" :src="item.image" alt="" />
              <div class="goods-info flex1">
                <div class="goods-name line2">
                  <el-tag size="mini" effect="plain" v-if="item.is_seckill"
                    >秒杀</el-tag
                  >
                  {{ item.goods_name }}
                </div>
                <div class="sm lighter mt8">{{ item.spec_value }}</div>
              </div>
            </nuxt-link>
            <div class="price row-center">
              <div class="price column-center">
                <price-formate
                  :price="
                    orderDetail.order_type == 0 && item.is_member
                      ? item.original_price
                      : item.goods_price
                  "
                />
                <div
                  class="primary row"
                  v-if="orderDetail.order_type == 0 && item.is_member"
                >
                  会员价
                  <price-formate :price="item.member_price" />
                </div>
              </div>
            </div>
            <div class="num row-center">{{ item.goods_num }}</div>
            <div class="total row-center">
              <price-formate :price="item.total_price" />
            </div>
            <div class="total row-center">
              <el-button
                class="apply-btn row-center mr20 sm"
                @click.stop="handleclick(item.order_id, item.item_id)"
                size="small"
                v-if="
                 ( orderDetail.order_status == 1 || orderDetail.order_status == 2)&&! item.after_status_desc &&!orderDetail.cancel_btn
                "
                >申请售后</el-button
              >
              <div v-if="! item.after_status_desc&& !( orderDetail.order_status == 1 || orderDetail.order_status == 2)">-</div>
              <el-button
                class="apply-btn row-center mr20 sm"
                @click.stop="gopage"
                size="small"
                v-if="
                  item.after_status_desc
                "
                >{{item.after_status_desc}}</el-button
              >
            </div>
          </div>
        </div>
      </div>
      <div class="mt16" v-if="orderDetail.user_remark">
        <span class="lighter mr8">买家留言：</span>
        <span>{{ orderDetail.user_remark }}</span>
      </div>
    </div>
    <div class="detail-footer row">
      <div>
        <div class="column" style="align-items: flex-end">
          <div class="money row mb8">
            <div class="lighter">商品总价：</div>
            <div>
              <price-formate :price="orderDetail.goods_price" />
            </div>
          </div>
          <div class="money row mb8">
            <div class="lighter">运费：</div>
            <div>
              <price-formate :price="orderDetail.shipping_price" />
            </div>
          </div>
          <div class="money row mb16" v-if="orderDetail.discount_amount != 0">
            <div class="lighter">优惠券：</div>
            <div>
              -
              <price-formate :price="orderDetail.discount_amount" />
            </div>
          </div>
          <div class="money row mb16" v-if="orderDetail.integral_amount != 0">
            <div class="lighter">积分抵扣</div>
            <div>
              -
              <price-formate :price="orderDetail.integral_amount" />
            </div>
          </div>
          <div class="money row">
            <div class="lighter">实付金额：</div>
            <div class="primary">
              <price-formate
                :price="orderDetail.order_amount"
                :subscript-size="14"
                :first-size="28"
                :second-size="28"
              />
            </div>
          </div>
        </div>
        <div class="oprate-btn row-end mt16">
          <div
            class="btn plain row-center lighter"
            v-if="orderDetail.cancel_btn"
            @click="handleOrder(0)"
          >
            取消订单
          </div>
          <div
            class="btn plain row-center ml8 lighter"
            v-if="orderDetail.delivery_btn"
            @click="showDeliverPop = true"
          >
            物流查询
          </div>
          <div
            class="btn bg-primary row-center white ml8"
            v-if="orderDetail.take_btn"
            @click="handleOrder(2)"
          >
            确认收货
          </div>
          <div
            class="btn plain row-center lighter ml8"
            v-if="orderDetail.del_btn"
            @click="handleOrder(1)"
          >
            删除订单
          </div>
          <nuxt-link
            :to="`/payment?id=${orderDetail.id}`"
            class="btn bg-primary row-center white ml8"
            v-if="orderDetail.pay_btn"
          >
            <span class="mr8">去付款</span>
            <count-down
              v-if="getCancelTime(orderDetail.order_cancel_time) > 0"
              :time="getCancelTime(orderDetail.order_cancel_time)"
              format="hh:mm:ss"
              @finish="getOrderDetail"
            />
          </nuxt-link>
        </div>
      </div>
    </div>
    <deliver-search v-model="showDeliverPop" :aid="id" />
  </div>
</template>

<script>
import CountDown from "~/components/public/countDown";
import { copyClipboard } from "@/utils/tools";
import QRCode from "qrcodejs2";

export default {
  head() {
    return {
      title: this.$store.getters.headTitle,
      link: [
        {
          rel: "icon",
          type: "image/x-icon",
          href: this.$store.getters.favicon,
        },
      ],
    };
  },
  layout: "user_lauout",
  components: {
    CountDown,
  },
  async asyncData({ $get, query }) {
    const { data, code } = await $get("order/detail", {
      params: {
        id: query.id,
      },
    });

    if (code == 1) {
      return {
        orderDetail: data,
        id: query.id,
      };
    }
  },
  data() {
    return {
      orderDetail: {},
      showDeliverPop: false,
    };
  },

  mounted() {
    if (this.orderDetail.delivery_type === 2) {
      this.creatQrCode(this.orderDetail.pickup_code);
    }
  },

  methods: {
    gopage(){
      this.$router.push(
        "/user/after_sales"      
      );
    },
    handleclick(orderId, itemId) {
      this.$router.push(
        "/user/after_sales/apply_sale?order_id=" +
          orderId +
          "&item_id=" +
          itemId
      );
    },
    creatQrCode(content) {
      const qrcode = new QRCode(this.$refs.qrCodeUrl, {
        text: content,
        width: 106,
        height: 106,
        colorDark: "#333333",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H,
      });
    },
    onCopyQRCode() {
      const content = this.orderDetail.pickup_code;
      copyClipboard(content)
        .then(() => {
          this.$message.success("复制成功");
        })
        .catch((err) => {
          this.$message.error("复制失败");
          console.log(err);
        });
    },

    async getOrderDetail() {
      const { data, code } = await this.$get("order/detail", {
        params: {
          id: this.id,
        },
      });
      if (code == 1) {
        this.orderDetail = data;
      }
    },
    handleOrder(type) {
      this.type = type;
      this.$confirm(this.getTipsText(type), {
        title: "温馨提示",
        center: true,
        confirmButtonText: "确定",
        cancelButtonText: "取消",
        callback: (action) => {
          if (action == "confirm") {
            this.postOrder();
          }
        },
      });
    },
    async postOrder() {
      const { type, id } = this;
      let url = "";
      switch (type) {
        case 0:
          url = "order/cancel";
          break;
        case 1:
          url = "order/del";
          break;
        case 2:
          url = "order/confirm";
          break;
      }
      let { code, data, msg } = await this.$post(url, { id });
      if (code == 1) {
        this.$message({
          message: msg,
          type: "success",
        });
        if (type == 1) {
          setTimeout(() => {
            this.$router.go(-1);
          }, 1500);
        } else {
          this.getOrderDetail();
        }
      }
    },
    getTipsText(type) {
      switch (type) {
        case 0:
          return "确认取消订单吗？";
        case 1:
          return "确认删除订单吗?";
        case 2:
          return "确认收货吗?";
      }
    },
  },
  computed: {
    getOrderStatus() {
      return (status) => {
        let text = "";
        switch (status) {
          case 0:
            text = "待支付";
            break;
          case 1:
            text = "待发货";
            break;
          case 2:
            text = "待收货";
            break;
          case 3:
            text = "已完成";
            break;
          case 4:
            text = "订单已关闭";
            break;
        }
        return text;
      };
    },
    getCancelTime() {
      return (time) => time - Date.now() / 1000;
    },
  },
};
</script>

<style lang="scss" scoped>
.order-detail {
  padding: 20px 10px;
  .detail-hd {
    padding: 14px 5px;
    border-bottom: 1px solid #e5e5e5;
  }
  .address {
    padding: 16px 15px;
    > div {
      margin-bottom: 10px;
    }

    &-item {
      display: flex;

      &-label {
        width: 70px;
        text-align: justify;
        text-align-last: justify;
      }
    }
  }
  .detail-con {
    .title {
      height: 40px;
      background: #f2f2f2;
      border: 1px solid #e5e5e5;
      padding: 0 20px;
    }
    .goods {
      .goods-hd,
      .goods-list {
        padding: 10px 20px;
        border: 1px solid #e5e5e5;
        border-top-width: 0;
        .goods-item {
          padding: 10px 0;
          .goods-name {
            line-height: 1.5;
          }
        }
      }
      .info {
        .goods-img {
          width: 72px;
          height: 72px;
          margin-right: 10px;
        }
      }
      .price,
      .num,
      .total {
        width: 150px;
      }
    }
  }
  .detail-footer {
    padding: 25px 20px;
    justify-content: flex-end;
    .money {
      > div {
        text-align: right;
        &:first-of-type {
          width: 80px;
        }
        &:last-of-type {
          width: 120px;
          display: flex;
          justify-content: flex-end;
        }
      }
    }
    .oprate-btn {
      .btn {
        width: 152px;
        height: 44px;
        cursor: pointer;
        border-radius: 2px;
        &.plain {
          border: 1px solid $-color-border;
        }
      }
    }
  }

  .selffetc-code {
    display: inline-block;
    padding: 4px 15px;
    border-radius: 60px;
    font-size: 12px;
    background-color: #f6f6f6;
    color: $-color-black;
  }

  .qr-container {
    width: 120px;
    height: 120px;
    padding: 6px;
    border: 1px solid $-color-border;
    border-radius: 6px;
  }
}
</style>
