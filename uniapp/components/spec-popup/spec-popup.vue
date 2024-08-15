<template>
  <u-popup
    v-model="showPop"
    mode="bottom"
    border-radius="14"
    :closeable="true"
    @close="onClose"
    :safe-area-inset-bottom="true"
  >
    <view class="bg-white spec-contain">
      <view class="spec-header row">
        <custom-image
          class="goods-img mr20"
          radius="10rpx"
          @tap="previewImage(checkedGoods.image)"
          :src="checkedGoods.image"
        ></custom-image>
        <view class="goods-info" v-if="!isBargain">
          <view class="primary row">
            <price-format
              :first-size="46"
              :second-size="32"
              :subscript-size="32"
              :price="group ? checkedGoods.team_price : checkedGoods.price"
              :weight="500"
            ></price-format>
            <view
              class="vip-price row"
              v-if="!group && !isSeckill && checkedGoods.member_price"
            >
              <view class="price-name xxs">会员价</view>
              <view style="padding: 0 11rpx">
                <price-format
                  :price="checkedGoods.member_price"
                  :first-size="22"
                  :second-size="22"
                  :subscript-size="22"
                  :weight="500"
                  color="#7B3200"
                ></price-format>
              </view>
            </view>
          </view>
          <view class="sm" v-show="showStock">
            库存：{{ checkedGoods.stock }}件
          </view>
          <view class="sm">
            <!-- <text>已选择：{{checkedGoods.spec_value_str}}，{{goodsNum}}件</text> -->
            <text>{{ specValueText }}</text>
          </view>
        </view>
        <view class="goods-info" v-else>
          <view class="xs">
            最低可砍至<text class="sm" style="color: #f95f2f"
              >¥{{ checkedGoods.activity_price }}</text
            >
          </view>
          <view class="muted xs mt10"> 原价 ¥{{ checkedGoods.price }} </view>
          <view class="sm lighter mt20">
            <!-- <text>已选择：{{checkedGoods.spec_value_str}}</text> -->
            <text>{{ specValueText }}</text>
          </view>
        </view>
      </view>
      <view class="spec-main">
        <scroll-view style="max-height: 600rpx" scroll-y="true">
          <view class="spec-list">
            <view v-for="(item, index) in specList" :key="index" class="spec">
              <view class="name mb20">
                {{ item.name }}
                <text class="primary xs ml20">{{
                  checkedGoods.spec_value_ids_arr[index] == ""
                    ? "请选择" + item.name
                    : ""
                }}</text>
              </view>
              <view class="row wrap">
                <!-- <view v-for="(specitem, index2) in item.spec_value" :key="index2" :class="'spec-item sm ' + ( specitem.checked ? 'checked' : '' )"
								 @tap="choseSpecItem(item.id, specitem.id)">
									{{ specitem.value }}
								</view> -->
                <view
                  v-for="(specitem, index2) in item.spec_value"
                  :key="index2"
                  :class="
                    'spec-item sm ' +
                    (checkedGoods.spec_value_ids_arr[index] == specitem.id
                      ? 'checked'
                      : '') +
                    (isDisable(specitem.id) ? 'disabled' : '')
                  "
                  @click="choseSpecItem(index, index2)"
                >
                  {{ specitem.value }}
                </view>
              </view>
            </view>
          </view>
        </scroll-view>
        <view class="good-num row-between ml20 mr20">
          <view class="label">数量</view>
          <u-number-box
            v-model="goodsNum"
            :min="1"
            :max="checkedGoods.stock"
            :disabled="disabledNumberBox"
          ></u-number-box>
        </view>
      </view>
      <view
        class="btns row-between bg-white"
        :class="
          specValueText.indexOf('请选择') != -1 || checkedGoods.stock == 0
            ? 'disabled'
            : ''
        "
      >
        <button
          v-if="showAdd"
          class="add-cart br60 white btn"
          size="lg"
          @tap="onClick('addcart')"
        >
          {{ yellowBtnText }}
        </button>
        <button
          v-if="showBuy"
          class="bg-primary br60 white btn"
          size="lg"
          @tap="onClick('buynow')"
        >
          {{ redBtnText }}
        </button>
        <button
          v-if="showConfirm"
          class="bg-primary br60 white btn"
          size="lg"
          @tap="onClick('confirm')"
        >
          确定
        </button>
      </view>
    </view>
  </u-popup>
</template>

<script>
export default {
  data() {
    return {
      checkedGoods: {
        stock: 0,
      }, //选中的
      outOfStock: [], //缺货的
      specList: [], //规格
      disable: [], //不可选择的
      goodsNum: 1,
      showPop: false,
    };
  },

  components: {},
  props: {
    show: {
      type: Boolean,
    },
    goods: {
      type: Object,
    },
    showAdd: {
      type: Boolean,
      default: true,
    },
    showBuy: {
      type: Boolean,
      default: true,
    },
    showConfirm: {
      type: Boolean,
      default: false,
    },
    redBtnText: {
      type: String,
      default: "立即购买",
    },
    yellowBtnText: {
      type: String,
      default: "加入购物车",
    },
    group: {
      type: Boolean,
      default: false,
    },
    isSeckill: {
      type: Boolean,
      default: false,
    },
    showStock: {
      type: Boolean,
      default: true,
    },
    disabledNumberBox: {
      type: Boolean,
      default: false,
    },
    isBargain: {
      type: Boolean,
      default: false,
    },
    goodsType: {
      type: Number,
    },
  },
  mounted() {},

  computed: {
    // 选择的规格参数等
    specValueText() {
      let arr = this.checkedGoods.spec_value_ids?.split(",");
      let spec_str = "";
      if (arr)
        arr.forEach((item, index) => {
          if (item == "") spec_str += this.specList[index].name + ",";
        });
      if (this.checkedGoods?.stock != 0 && spec_str == "")
        return `已选择 ${this.checkedGoods.spec_value_str} ${this.goodsNum} 件`;
      else return `请选择 ${spec_str.slice(0, spec_str.length - 1)}`;
    },
  },

  watch: {
    goods(value) {
      this.specList = value.goods_spec || [];
      let goodsItem = value.goods_item || [];
      this.outOfStock = goodsItem.filter((item) => item.stock == 0);
      // 找出库存不为0的
      const resultArr = goodsItem.filter((item) => item.stock != 0);
      if (resultArr.length != 0) {
        resultArr[0].spec_value_ids_arr =
          resultArr[0].spec_value_ids.split(",");
        this.checkedGoods = resultArr[0];
      } else {
        // 无法选择
        goodsItem[0].spec_value_ids_arr = [];

        this.disable = goodsItem.map((item) => item.spec_value_ids.split(","));
        this.checkedGoods = goodsItem[0];
      }
    },

    specList(value) {
      if (this.checkedGoods.stock == 0) return;

      const res = this.goods.goods_item.filter((item) => {
        return this.checkedGoods.spec_value_ids === item.spec_value_ids;
      });

      // 库存为0的规格
      const idsArr = this.checkedGoods.spec_value_ids_arr;
      const outOfStock = this.outOfStock;
      // 找出规格相同和规格不相同的余数
      const getArrGather = this.getArrResult(idsArr, outOfStock);
      // 计算出缺货的规格项
      this.disable = this.getOutOfStockArr(getArrGather, idsArr);

      if (res.length != 0) {
        console.log(res, "-----");

        let result = JSON.parse(JSON.stringify(res[0]));
        result.spec_value_ids_arr = result.spec_value_ids.split(",");
        if (this.goodsNum > result.stock) {
          this.goodsNum = result.stock;
        }
        this.checkedGoods = result;
        // 同步到父组件
        this.$emit("change", {
          detail: this.checkedGoods,
        });
      }
    },

    show(val) {
      this.showPop = val;
    },
  },
  created() {
    console.log("spec");
  },
  methods: {
    isDisable(e) {
      const res = this.disable.filter((item) => item == e);
      if (res.length != 0) return true;
      else return false;
    },

    onClose() {
      this.$emit("close");
    },

    onClick(type) {
      let { checkedGoods, goodsNum } = this;
      if (this.specValueText.indexOf("请选择") != -1)
        return this.$toast({
          title: this.specValueText,
        });
      if (checkedGoods.stock == 0)
        return this.$toast({
          title: "当前选择库存不足",
        });
      checkedGoods.goodsNum = goodsNum;
      this.$emit(type, {
        detail: checkedGoods,
      });
    },

    // 选择规格
    choseSpecItem(index, index2) {
      const id = this.specList[index].spec_value[index2].id;

      // 无法选择
      const disable = this.disable.filter((item) => item == id);
      if (disable.length != 0) return;

      let idsArr = this.checkedGoods.spec_value_ids_arr;
      if (id == idsArr[index]) idsArr[index] = "";
      else idsArr[index] = id;
      //保存已选规格
      this.checkedGoods.spec_value_ids_arr = idsArr;
      this.checkedGoods.spec_value_ids = idsArr.join(",");
      // 重新渲染页面
      this.specList = [...this.specList];
    },

    // 过滤出需要进行禁用的规格
    getOutOfStockArr(arr, arr1, result = []) {
      arr.forEach((el) => {
        if (el.num >= arr1.length - 1) {
          result.push(...el.different);
        }
      });
      return result;
    },

    // 匹配出缺货库存和已选中对比结果
    getArrIdentical(arr1, arr2, arr = [], num = 0) {
      arr1.forEach((el) => {
        arr2.forEach((el2) => {
          if (el == el2) {
            num += 1;
            arr.push(el);
          }
        });
      });
      return {
        num, //n个相同的
        different: this.getArrDifference(
          [...new Set(arr)].map(Number),
          arr2.map(Number)
        ),
        identical: [...new Set(arr)],
      };
    },

    // 匹配出已选择和缺库存的
    getArrResult(arr, outOfStock, result = []) {
      outOfStock.forEach((item) => {
        const res = this.getArrIdentical(arr, item.spec_value_ids.split(","));
        if (res != undefined && res.length != 0) {
          result.push(res);
        }
      });
      return result;
    },

    // 找出两个数组中参数不同的
    getArrDifference(arr1, arr2) {
      return arr1.concat(arr2).filter(function (v, i, arr) {
        return arr.indexOf(v) == arr.lastIndexOf(v);
      });
    },

    // 查看商品图片
    previewImage(current) {
      uni.previewImage({
        current,
        urls: [current], // 需要预览的图片http链接列表
      });
    },
  },
};
</script>
<style lang="scss" scoped>
.spec-contain {
  border-radius: 10rpx 10rpx 0 0;
  overflow: hidden;
  position: relative;

  .close {
    position: absolute;
    right: 10rpx;
    top: 10rpx;
  }

  .spec-header {
    padding: 30rpx 20rpx;
    padding-right: 70rpx;
    align-items: flex-start;
    border: $-solid-border;
    .vip-price {
      margin: 0 24rpx;
      background-color: #ffe9ba;
      line-height: 36rpx;
      border-radius: 6rpx;
      overflow: hidden;
      .price-name {
        background-color: #101010;
        padding: 3rpx 12rpx;
        color: #ffd4b7;
        position: relative;
        overflow: hidden;
        &::after {
          content: "";
          display: block;
          width: 20rpx;
          height: 20rpx;
          position: absolute;
          right: -15rpx;
          background-color: #ffe9ba;
          border-radius: 50%;
          top: 50%;
          transform: translateY(-50%);
          box-sizing: border-box;
        }
      }
    }
    .goods-img {
      width: 180rpx;
      height: 180rpx;
      flex: none;
    }
  }

  .spec-main {
    .spec-list {
      padding: 30rpx 20rpx;

      .spec-item {
        line-height: 52rpx;
        padding: 0 20rpx;
        background-color: #f4f4f4;
        border-radius: 60rpx;
        margin: 0 20rpx 20rpx 0;
        border: 1px solid #f4f4f4;

        // &.checked {
        // 	background-color: $-color-primary;
        // 	color: #fff;
        // }

        &.checked {
          background-color: #ffe9eb;
          color: $-color-primary;
          border-color: $-color-primary;
        }

        &.disabled {
          opacity: 0.5;
          text-decoration: line-through;
        }
      }
    }
  }

  // 底部按钮无法选择
  .disabled {
    opacity: 0.4;
  }
  .btns {
    height: 120rpx;
    padding: 0 30rpx;
    margin-top: 80rpx;

    .add-cart {
      background-color: #ff9e1e;
    }

    .btn {
      margin: 0 10rpx;
      flex: 1;
    }
  }
}
</style>
