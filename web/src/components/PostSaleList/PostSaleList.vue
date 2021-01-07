<template>
  <div>
    <div v-if="isEmpty" class="column-center" style="padding-top: 100px">
      <img class="img-null" src="@A/images/goods_null.png" />
      <span class="lighter">暂无售后数据～</span>
    </div>
    <van-list
      v-else
      v-model="loading"
      :finished="finished"
      finished-text="没有更多了"
      @load="$getAfterSaleList"
      @error="error"
    >
      <div class="sale-list" v-if="showType == 'normal'">
        <div class="sale-item bg-white" v-for="(items, index) in lists" :key="index">
          <div class="sale-header row">
            <!-- <img style="width: 20px;height: 20px" src="@A/images/icon_shop.png" /> -->
            <div class="store-name nr ml5">成交时间: {{items.time}}</div>
          </div>
          <div class="sale-goods-item" v-for="(item) in items.order_goods" :key="item.goods_id">     
            <div class="sale-goods-show row">
                <div class="goods-img">
                <van-image width="100%" height="100%" radius="3px" lazy-load :src="item.image" />
                </div>
                <div class="goods-desc">
                <div class="goods-name two-txt-cut nr">{{item.goods_name}}</div>
                <div class="row-between mt10">
                    <price-slice
                    :showSubscript="true"
                    subScriptClass="sm"
                    firstClass="md"
                    secondClass="md"
                    weight="bold"
                    :price="item.goods_price"
                    ></price-slice>
                    <div class="nr">x{{item.goods_num}}</div>
                </div>
                </div>
            </div>
            <div class="sale-footer row-end" :class="items.after_sale.able_apply == 1 ? '' : 'bottom-opacity'">
                <div class="btn row-center primary br60" @click="toApply(items.order_id, item.item_id, items.after_sale.able_apply)">申请售后</div>
            </div>
          </div>
        </div>
      </div>
      <div class="sale-list" v-else-if="showType == 'apply'">
        <div class="sale-item bg-white" v-for="(items, index) in lists" :key="index">
            <div @click="toSaleDetail(items.after_sale.after_sale_id, items.order_id)">
                <div class="sale-header row-between">
                    <div class="row">
                    <!-- <img style="width: 20px;height: 20px" src="@A/images/icon_shop.png" /> -->
                    <div class="store-name nr ml5 mr5">申请时间: {{items.time}}</div>
                    </div>
                    <div class="primary nr">{{items.after_sale.type_text}}</div>
                </div>
                <div class="sale-goods-show" v-for="(item) in items.order_goods" :key="item.goods_id">
                    <div class="row">
                    <div class="goods-img">
                        <van-image width="100%" height="100%" radius="3px" lazy-load :src="item.image" />
                    </div>
                    <div class="goods-desc">
                        <div class="goods-name two-txt-cut nr">{{item.goods_name}}</div>
                        <div class="row-between mt10">
                        <price-slice
                            :showSubscript="true"
                            subScriptClass="sm"
                            firstClass="md"
                            secondClass="md"
                            weight="bold"
                            :price="item.goods_price"
                        ></price-slice>
                        <div class="nr">x{{item.goods_num}}</div>
                        </div>
                    </div>
                    </div>
                    <div class="sale-status mt10 row">
                    <div class="nr" style="font-weight: bold;">{{items.after_sale.status_text}}</div>
                    <div class="nr ml10">{{items.after_sale.desc}}</div>
                    </div>
                </div>
            </div>
          <div class="sale-footer row-end">
            <div class="row-center normal br60 mr10 grey-btn nr" @click="showDialog(items.after_sale.after_sale_id)">撤销申请</div>
            <div
              @click="toForm(items.after_sale.after_sale_id)"
              class="row-center normal br60 grey-btn nr"
              v-show="items.after_sale.status==2"
            >填写快递单号</div>
          </div>
        </div>
      </div>
      <div class="sale-list" v-else>
        <div class="sale-item bg-white" v-for="(items, index) in lists" :key="index" @click="toSaleDetail(items.after_sale.after_sale_id, items.order_id)">
          <div class="sale-header row-between">
            <div class="row">
              <img style="width: 20px;height: 20px" src="@A/images/icon_shop.png" />
              <div class="store-name nr ml5 mr5">处理时间：{{items.time}}</div>
            </div>
            <div class="primary nr">{{items.after_sale.type_text}}</div>
          </div>
          <div class="sale-goods-show" v-for="(item) in items.order_goods" :key="item.goods_id">
            <div class="row">
              <div class="goods-img">
                <van-image width="100%" height="100%" lazy-load radius="3px" :src="item.image" />
              </div>
              <div class="goods-desc">
                <div class="goods-name two-txt-cut nr">{{item.goods_name}}</div>
                <div class="row-between mt10">
                  <price-slice
                    :showSubscript="true"
                    subScriptClass="sm"
                    firstClass="md"
                    secondClass="md"
                    weight="bold"
                    :price="item.goods_price"
                  ></price-slice>
                  <div class="nr">x{{item.goods_num}}</div>
                </div>
              </div>
            </div>
            <div class="sale-status mt10 row">
              <div class="nr" style="font-weight: bold;">{{items.after_sale.status_text}}</div>
              <div class="nr ml10">{{items.after_sale.desc}}</div>
            </div>
          </div>
        </div>
      </div>
    </van-list>
    <van-dialog
      title="提示"
      v-model="confirmDialog"
      showCancelButton
      message="是否要撤销申请？"
      confirm-button-color="#primaryColor"
      @confirm="$cancelApply"
      @close="hideDialog"
    ></van-dialog>
  </div>
</template>

<script>
import { AfterSaleType } from "@U/type";
import { getAfterSaleList, cancelApply } from "@API/user";
import applyAfterSalesVue from '../../views/user/applyAfterSales.vue';
export default {
  name: "PostSaleList",
  props: {
    showType: {
      showType: String,
      default: AfterSaleType.NORMAL,
    },
  },
  data() {
    return {
      confirmDialog: false,
      loading: true,
      finished: false,
      isEmpty: false,
      error: false,
      page: 1,
      lists: [],
      afterSaleId: -1
    };
  },
  methods: {
    toForm(id) {
      this.$router.push({name: 'afterSalesDetailForm', query: {
        id: id
      }})
    },
    cleanStatus() {
      this.page = 1;
      this.lists = [];
      this.loading = true;
      this.finished = false;
      this.isEmpty = false;
      this.error = false;
    },
    toApply(orderId, itemId, canApply) {
      if(canApply != 1) {
        return;
      }
        this.$router.push({name: "applyAfterSales", query: {
            order_id: orderId,
            item_id: itemId
        }})
    },
    toSaleDetail(afterSaleId, orderId) {
        this.$router.push({name: "afterSalesDetail", query: {
            after_sale_id: afterSaleId,
            order_id: orderId
        }})
    },
    $getAfterSaleList() {
      this.loading = true;
      if (this.finished == true) {
        return;
      }
      getAfterSaleList({ page_no: this.page, type: this.showType }).then(
        (res) => {
          if (res.code == 1) {
            this.loading = false;
            let { list, more } = res.data;
            this.lists.push(...list);
            this.page ++;
            this.$nextTick(() => {
              if (!more) {
                this.finished = true;
              }
              if (this.lists.length <= 0) {
                this.isEmpty = true;
                return;
              }
            });
          } else {
            this.error = true;
          }
        }
      );
    },
    $cancelApply() {
        cancelApply({ id: this.afterSaleId }).then((res) => {
            if (res.code == 1) {
                this.$toast({message: res.msg});
                setTimeout(() => {
                    this.$router.go(0)
                }, 1000)
            }
        });
    },
    showDialog(afterSaleId) {
        this.afterSaleId = afterSaleId
        this.confirmDialog = true;
    },
    hideDialog() {
        this.confirmDialog = false;
    }
  },
  created() {},
  mounted() {
    this.$getAfterSaleList();
  },
};
</script>

<style lang="scss" scoped>
.sale-list {
  .sale-item {
    margin-top: 10px;
    .sale-header {
      padding: 10px 12px;
      .store-name {
        font-family: PingFang SC;
        line-height: 20px;
      }
    }
    .bottom-opacity {
      opacity: 0.5;
    }
    .sale-goods-show {
      padding: 10px 12px;
      .goods-img {
        height: 80px;
        width: 80px;
      }
      .goods-desc {
        margin-left: 12px;
        flex: 1;
      }
      .sale-status {
        padding: 10px 20px;
        background-color: #f6f6f6;
      }
    }
    .sale-footer {
      padding: 0 12px 11px;
      .btn {
        padding: 5px 17px;
        font-family: PingFang SC;
        border: 1px solid $--color-primary;
      }
      .grey-btn {
        border: 1px solid #cccccc;
        padding: 5px 17px;
        font-family: PingFang SC;
      }
    }
  }
}
</style>