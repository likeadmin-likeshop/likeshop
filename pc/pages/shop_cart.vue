<template>
  <div class="shop-cart">
    <div class="cart-list bg-white">
      <div v-show="!isDataNull">
        <div class="cart-hd row lighter">
          <div class="check-box">
            <el-checkbox
              :indeterminate="isIndeterminate"
              v-model="isSelectedAll"
              @change="handleCheckAllChange"
              >全选</el-checkbox
            >
          </div>
          <div class="info row-center">商品信息</div>
          <div class="price row-center">单价</div>
          <div class="num row-center">数量</div>
          <div class="money row-center">合计</div>
          <div class="operate row-center">操作</div>
        </div>
        <div class="cart-con">
          <div
            class="item row"
            v-for="(item, index) in shopCartList"
            :key="item.cart_id"
          >
            <div class="check-box">
              <el-checkbox
                v-model="item.selected"
                @change="onBoxClick($event, item.cart_id)"
              ></el-checkbox>
            </div>
            <nuxt-link class="info row" :to="'/goods_details/' + item.goods_id">
              <div class="pictrue flexnone">
                <img :src="item.img" alt="" />
              </div>
              <div>
                <div class="name line2">
                  {{ item.name }}
                </div>
                <div class="muted">{{ item.spec_value_str }}</div>
              </div>
            </nuxt-link>
            <div class="price row-center">¥{{ item.price }}</div>
            <div class="num row-center">
              <number-box
                :min="1"
                :max="+item.item_stock"
                v-model="item.goods_num"
                @change="changeShopCartCount($event, item.cart_id)"
                @input="changeShopCartCount($event, item.cart_id)"
                async-change
              />
            </div>
            <div class="money row-center">¥{{ item.sub_price }}</div>
            <el-popconfirm
              title="确定删除该商品吗？"
              confirm-button-text="确定"
              cancel-button-text="取消"
              icon="el-icon-info"
              icon-color="red"
              @confirm="goodsDelete(item.cart_id)"
            >
              <div class="operate row-center delete-btn" slot="reference">
                <img src="~/assets/images/icon_cart_del.png" />
              </div>
            </el-popconfirm>
          </div>
        </div>
        <div class="cart-footer row-between">
          <div class="lighter row">
            <div class="check-box">
              <el-checkbox
                :indeterminate="isIndeterminate"
                v-model="isSelectedAll"
                @change="handleCheckAllChange"
                >全选</el-checkbox
              >
            </div>
            <div style="margin: 0 24px">已选 ({{ checkoutCount }})</div>
            <el-popconfirm
              title="确定删除选中商品吗？"
              confirm-button-text="确定"
              cancel-button-text="取消"
              icon="el-icon-info"
              icon-color="red"
              @confirm="deleteSelectedGoods"
            >
              <div style="cursor: pointer" slot="reference">删除选中商品</div>
            </el-popconfirm>
          </div>
          <div class="total column">
            <div class="row">
              <div class="lighter">商品总价：</div>
              <div class="primary" style="font-size: 20px; margin-left: 28px">
                ¥{{ totalAmount }}
              </div>
            </div>
            <div class="white bg-primary lg btn row-center" @click="toOrderBuy">
              去结算
            </div>
          </div>
        </div>
      </div>
      <div class="column-center data-null" v-show="isDataNull">
        <img
          src="@/assets/images/cart_null.png"
          style="width: 150px; height: 150px"
        />
        <div class="muted xs mt8">购物车是空的～</div>
        <div class="mt8">
          <el-button round type="primary" size="medium" @click="toIndex"
            >去逛逛～</el-button
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import NumberBox from "~/components/public/numberBox";
import { mapActions } from "vuex";
export default {
  head() {
    return {
      title: this.$store.getters.headTitle,
      link: [
        { rel: "icon", type: "image/x-icon", href: this.$store.getters.favicon }
      ]
    };
  },
  components: {
    NumberBox
  },
  async asyncData({ $get, $post }) {
    let shopCartList = [];
    let totalAmount = 0;
    let totalNum = 0;
    let isIndeterminate = false;
    let checkoutCount = 0;
    let isDataNull = true;
    let res = await $get("cart/lists");
    if (res.code == 1) {
      shopCartList = res.data.lists;
      totalAmount = res.data.total_amount;
      totalNum = res.data.total_num;
      isIndeterminate = false;
      checkoutCount = 0;
      shopCartList.forEach((item, index) => {
        // 有一个选中就是true
        if (item.selected == 1 || item.selected == true) {
          checkoutCount++;
          item.selected = true;
        } else {
          item.selected = false;
        }
      });
      isIndeterminate =
        checkoutCount > 0 && checkoutCount < shopCartList.length;
      if (shopCartList.length > 0) {
        isDataNull = false;
      } else {
        isDataNull = true;
      }
    }
    return {
      shopCartList,
      totalAmount,
      totalNum,
      isIndeterminate,
      checkoutCount,
      isDataNull
    };
  },
  data() {
    return {
      checkAll: false,
      isIndeterminate: false,
      checkoutCount: 0,
      cartQuantitySync: {},
      cartQuantityReloadPending: false
    };
  },
  mounted() {},
  computed: {
    isSelectedAll: {
      get() {
        if (this.shopCartList.length <= 0) {
          return false;
        }
        let index = this.shopCartList.findIndex(item => item.selected == 0);

        if (index == -1) {
          return true;
        }

        return false;
      },
      set(newVal) {
        let cartId = this.shopCartList.map(item => item.cart_id);

        this.changeSelected(cartId, newVal);
      }
    }
  },
  methods: {
    ...mapActions(["getPublicData"]),
    async getCartList() {
      if (Object.keys(this.cartQuantitySync).length) {
        this.cartQuantityReloadPending = true;
        return;
      }
      let res = await this.$get("cart/lists");
      if (res.code == 1) {
        this.shopCartList = Object.assign([], res.data.lists);
        this.totalAmount = res.data.total_amount;
        this.totalNum = res.data.total_num;
        this.isIndeterminate = true;
        this.checkoutCount = 0;
        this.shopCartList.forEach((item, index) => {
          // 有一个选中就是true
          if (item.selected == 1 || item.selected == true) {
            this.checkoutCount++;
            item.selected = true;
          } else {
            item.selected = false;
          }
        });
        this.isIndeterminate =
          this.checkoutCount > 0 &&
          this.checkoutCount < this.shopCartList.length;
        if (this.shopCartList.length > 0) {
          this.isDataNull = false;
        } else {
          this.isDataNull = true;
        }
      }
    },
    handleCheckAllChange(e) {},
    onBoxClick(e, cartId) {
      this.changeSelected(cartId, e);
    },
    async changeSelected(id, selected) {
      let res = await this.$post("cart/selected", {
        cart_id: id,
        selected: Number(selected)
      });
      if (res.code == 1) {
        this.getCartList();
      }
    },
    changeShopCartCount(number, cartId) {
      number = Number(number);
      const item = this.shopCartList.find(item => item.cart_id == cartId);
      if (!item || item.goods_num == number) return;

      const previousNumber = Number(item.goods_num);
      item.goods_num = number;
      item.sub_price = (Number(item.price) * number).toFixed(2);
      this.updateCartTotal();

      let syncState = this.cartQuantitySync[cartId];
      if (!syncState) {
        syncState = {
          desired: number,
          synced: previousNumber,
          pending: false,
          item
        };
        this.$set(this.cartQuantitySync, cartId, syncState);
      }
      syncState.desired = number;
      this.syncCartQuantity(cartId);
    },
    async syncCartQuantity(cartId) {
      const syncState = this.cartQuantitySync[cartId];
      if (!syncState || syncState.pending) return;

      const goodsNum = syncState.desired;
      syncState.pending = true;
      try {
        const res = await this.$post("cart/change", {
          cart_id: cartId,
          goods_num: goodsNum
        });
        syncState.pending = false;
        if (res.code != 1) {
          syncState.item.goods_num = syncState.synced;
          syncState.item.sub_price = (
            Number(syncState.item.price) * syncState.synced
          ).toFixed(2);
          this.cartQuantityReloadPending = true;
          this.$delete(this.cartQuantitySync, cartId);
          this.updateCartTotal();
          this.finishCartQuantitySync();
          return;
        }

        syncState.synced = goodsNum;
        if (syncState.desired != goodsNum) {
          this.syncCartQuantity(cartId);
          return;
        }
      } catch (error) {
        syncState.pending = false;
        syncState.item.goods_num = syncState.synced;
        syncState.item.sub_price = (
          Number(syncState.item.price) * syncState.synced
        ).toFixed(2);
        this.cartQuantityReloadPending = true;
        this.updateCartTotal();
      }

      this.$delete(this.cartQuantitySync, cartId);
      this.finishCartQuantitySync();
    },
    finishCartQuantitySync() {
      if (Object.keys(this.cartQuantitySync).length) return;

      if (this.cartQuantityReloadPending) {
        this.cartQuantityReloadPending = false;
        this.getCartList();
      }
      this.getPublicData();
    },
    updateCartTotal() {
      const summary = this.shopCartList.reduce((result, item) => {
        if (item.selected && item.cart_status == 0) {
          result.amount += Number(item.price) * Number(item.goods_num);
          result.count += Number(item.goods_num);
        }
        return result;
      }, { amount: 0, count: 0 });
      this.totalAmount = summary.amount.toFixed(2);
      this.totalNum = summary.count;
    },
    async goodsDelete(cartId) {
      let res = await this.$post("cart/del", {
        cart_id: cartId
      });
      if (res.code == 1) {
        this.getPublicData();
        this.getCartList();
        this.$message({
          message: "删除商品成功",
          type: "success"
        });
      }
    },
    deleteSelectedGoods() {
      let selectedGoodsArr = this.shopCartList.filter(item => {
        return item.selected == 1 || item.selected == true;
      });
      if (selectedGoodsArr.length <= 0) {
        this.$message({
          message: "没有选择商品",
          type: "error"
        });
        return;
      }
      let cartIdArr = selectedGoodsArr.map(item => item.cart_id);
      this.goodsDelete(cartIdArr);
    },
    toOrderBuy() {
      let { shopCartList } = this;
      let goods = [];
      shopCartList.forEach(item => {
        if (item.selected) {
          goods.push({
            item_id: item.item_id,
            num: item.goods_num
          });
        }
      });
      if (goods.length == 0)
        return this.$message({
          message: "您还没有选择商品哦"
        });
      let url =
        "/confirm_order?data=" +
        encodeURIComponent(JSON.stringify({ goods, type: "cart" }));
      this.$router.push(url);
    },
    toIndex() {
      this.$router.push("/");
    }
  }
};
</script>

<style lang="scss">
.shop-cart {
  padding: 24px 0;
  .cart-list {
    min-height: 600px;
    .cart-hd {
      height: 50px;
      margin: 0 10px;
      border-bottom: 1px solid #e5e5e5;
    }
    .cart-con {
      margin: 0 10px;
      .item {
        padding: 20px 0;
        border-bottom: 1px dashed #e5e5e5;
      }
    }
    .check-box {
      padding-left: 10px;
      width: 68px;
    }
    .info {
      width: 450px;
      .pictrue {
        margin-right: 10px;
        img {
          width: 72px;
          height: 72px;
        }
      }
      .name {
        margin-bottom: 10px;
      }
    }
    .price {
      width: 150px;
    }
    .num {
      width: 250px;
    }
    .money {
      width: 150px;
    }
    .delete-btn {
      cursor: pointer;
    }
  }
  .cart-footer {
    padding: 20px 20px 40px 10px;
    align-items: flex-start;
    .total {
      align-items: flex-end;
      .btn {
        width: 152px;
        height: 44px;
        margin-top: 18px;
        cursor: pointer;
      }
    }
  }
  .data-null {
    padding-top: 100px;
  }
}
</style>
