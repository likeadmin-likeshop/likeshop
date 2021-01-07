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

<template>
  <div class="after-sales-detail">
    <div class="after-sales-header">
      <div class="after-sales-status white lg">{{lists.status_text}}</div>
      <!-- <div class="after-sales-explain bg-white">
          <p class="xs muted" style="line-height: 20px">
            如果商家拒绝，您可重新发起申请<br>
            如果商家同意，将通过申请原路退款至您的账户中<br>
            如果商家逾期未处理，平台将自动通过申请并退款给您<br>
          </p>
      </div>-->
    </div>
    <!-- <div class="negotiation-record row-between bg-white mt10">
        <div class="nr">协商记录</div>
        <div class="arrow">
          <img src="@A/images/arrow_right.png"/>
        </div>
    </div>-->
    <div class="return-address-contain row bg-white mt10" v-show="lists.refund_type == 1">
      <div class="nr address-title">退货地址：</div>
      <div
        class="sm address two-txt-cut"
      >{{lists.shop.address}}</div>
      <div class="xs copy-btn row-center" @click="onCopy">复制</div>
    </div>
    <div class="goods-container bg-white mt10">
      <!-- <div class="goods-header row">
        <div class="store-img mr5">
          <img src="@A/images/icon_shop.png" />
        </div>
        <div class="store-name nr bold">{{lists.shop.name}}</div>
      </div> -->
      <div class="goods-item row">
        <div class="goods-img">
          <van-image
            width="100%"
            height="100%"
            radius="3px"
            lazy-load
            :src="lists.order_goods.image"
          />
        </div>
        <div class="goods-info">
          <div class="two-txt-cut nr">{{lists.order_goods.goods_name}}</div>
          <div class="row-between mt10">
            <!-- <div class="md">￥999.00</div> -->
            <price-slice
              :price="lists.order_goods.goods_price"
              firstClass="md"
              secondClass="md"
              :showSubscript="true"
              subScriptClass="md"
            ></price-slice>
            <div class="nr">x{{lists.order_goods.goods_num}}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="return-goods-container bg-white mt10">
      <div class="return-goods-row row sm">
        <div class="return-title">退款方式：</div>
        <div class="return-explain">{{lists.refund_type == 0 ? '仅退款' : '退款退货'}}</div>
      </div>
      <div class="return-goods-row row sm mt10">
        <div class="return-title">退款原因：</div>
        <div class="return-explain">{{lists.refund_reason}}</div>
      </div>
      <div class="return-goods-row row sm mt10">
        <div class="return-title">退款金额：</div>
        <div class="return-explain primary">¥{{lists.refund_price}}</div>
      </div>
      <div class="return-goods-row row sm mt10">
        <div class="return-title">退款编号：</div>
        <div class="return-explain">{{lists.sn}}</div>
      </div>
      <div class="return-goods-row row sm mt10">
        <div class="return-title">申请时间：</div>
        <div class="return-explain">{{lists.create_time}}</div>
      </div>
    </div>
    <div class="btn-group bg-white row-end" v-if="lists.status != 6">
      <button class="btn br60 mr10" @click="showDialog">撤销申请</button>
      <button class="btn br60 mr10" @click="toApply(lists.order_goods.item_id)" v-show="lists.status == 4 || lists.status == 1">重新申请</button>
      <button class="btn br60 mr10" @click="toForm" v-show="lists.status == 2">填写快递单号</button>
      <button class="btn br60" v-show="false">平台退款</button>
    </div>
    <van-dialog
      title="提示"
      v-model="confirmDialog"
      :showCancelButton="true"
      message="是否要撤销申请？"
      :confirm-button-color="primaryColor"
      @confirm="$cancelApply"
      @close="hideDialog"
    ></van-dialog>
  </div>
</template>

<script>
import { AfterSaleType } from "@U/type";
import { afterSaleDetail, cancelApply } from "../../api/user";
export default {
  name: "afterSalesDetail",
  data() {
    return {
      lists: {
        shop: {},
        order_goods: {},
      },
      address_text: "",
      confirmDialog: false,
    };
  },
  methods: {
    toForm() {
      this.$router.push({name: "afterSalesDetailForm", query: {
        id: this.lists.id
      }})
    },
    toApply(itemId) {
      this.$router.push({name: "applyAfterSales", query: {
        order_id: this.orderId,
        after_sale_id: this.afterSaleId,
        item_id: itemId
      }})
    },
    $afterSaleDetail() {
      afterSaleDetail({ id: this.afterSaleId }).then((res) => {
        if (res.code == 1) {
          this.lists = res.data;
          this.address_text =
            this.lists.shop.address_text +
            "，" +
            this.lists.shop.r_contact +
            this.lists.shop.r_tel;
        }
      });
    },
    $cancelApply() {
      cancelApply({ id: this.afterSaleId }).then((res) => {
        if (res.code == 1) {
          this.$toast({message: res.msg});
          setTimeout(() => {
            this.$router.replace({name: 'postSale'})
          }, 1000)
        }
      });
    },
    onCopy() {
      let str = this.address_text;
      var aux = document.createElement("input");
      aux.setAttribute("value", str);
      document.body.appendChild(aux);
      aux.select();
      document.execCommand("copy");
      document.body.removeChild(aux);
      this.$toast({
        type: "success",
        message: "复制成功",
      });
    },
    showDialog() {
      this.confirmDialog = true;
    },
    hideDialog() {
      this.confirmDialog = false;
    },
  },
  created() {},
  mounted() {
    let { after_sale_id, order_id } = this.$route.query;
    this.afterSaleId = after_sale_id;
    this.orderId = order_id;
    console.log(this.afterSaleId, this.orderId)
    this.$afterSaleDetail();
  },
};
</script>

<style lang="scss" scoped>
img {
  width: 100%;
  height: 100%;
  flex: none;
}
.after-sales-detail {
  padding-bottom: 50px;
  .after-sales-header {
    .after-sales-status {
      padding: 24px 15px;
      background-color: #555555;
    }
    .after-sales-explain {
      padding: 10px 15px 12px;
    }
  }
  .negotiation-record {
    padding: 12px 15px;
    .arrow {
      width: 14px;
      height: 14px;
    }
  }
  .goods-container {
    .goods-header {
      padding: 10px 12px;
      .store-img {
        width: 20px;
        height: 20px;
      }
      .store-name {
        line-height: 20px;
        align-self: flex-end;
        font-family: PingFang SC;
      }
    }
    .goods-item {
      padding: 12.5px 12px;
      .goods-img {
        width: 90px;
        height: 90px;
        flex: none;
      }
      .goods-info {
        margin-left: 12px;
        flex: 1;
      }
    }
  }
  .return-goods-container {
    padding: 10px 12px 27.5px;
    .return-goods-row {
      line-height: 20px;
      font-weight: 400;
    }
  }
  .btn-group {
    padding: 10px 12px;
    position: fixed;
    box-sizing: border-box;
    width: 100%;
    bottom: 0;
    .btn {
      padding: 5px 17px;
      border: 1px solid #999999;
    }
  }
  .return-address-contain {
    padding: 10px 12px 14px 15px;
  }

  .address-title {
    width: 75px;
    align-self: flex-start;
    line-height: 20px;
  }

  .return-address-contain .address {
    flex: 1;
    line-height: 19px;
  }

  .return-address-contain .copy-btn {
    flex: 0 0 7%;
    background-color: #f4f4f4;
    color: #555555;
    align-self: flex-start;
    padding: 2px 8px;
    margin-left: 6px;
    border-radius: 2px;
  }
}
</style>