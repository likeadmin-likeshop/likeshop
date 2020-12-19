<template>
  <div class="goods-bargain-contain">
    <div class="header">
        <img src="@A/images/bargain_top_bg.png"/>
    </div>
    <div class="goods-list">
      <div class="goods-item row bg-white" @click="showSpec = true">
        <van-image class="goods-img mr10" radius="6px" />
        <div class="goods-info">
          <div class="goods-name two-txt-cut nr">控油细致面膜21片装 护肤品 补水面膜清补水面膜清洁面膜洁面膜</div>
          <div class="xs mt5 primary">最低可砍至￥1.00</div>
          <div class="xs mt5 muted">原价 ¥69.30</div>
        </div>
        <button class="btn white">发起砍价</button>
      </div>
    </div>
    <goods-spec
        :show="showSpec"
        :show-add="popupType == 1"
        :show-buy="popupType == 2"
        :show-bargain="true"
        :goods="goodsDetail"
        @close="showSpec = false"
        @change="onChangeSpec"
        @addcart="onAddCart"
        @buynow="onBuyNow"
    />
  </div>
</template>

<script>
import GoodsSpec from "@C/GoodsSpec";
export default {
  name: "goodsBargain",
  components: {
    GoodsSpec
  },
  data() {
      return {
           popupType: "",
           goodsDetail: {},
           showSpec: false,
           showBargain: true
      }
  },
  methods: {
      onChangeSpec() {
    
      },
      onAddCart() {
    
      },
      onBuyNow() {

      }
  }
};
</script>

<style lang="scss" scoped>
.goods-bargain-contain {
    min-height: 100vh;
    background-color: #EE2466;
    .header {
        img {
            height: 100%;
            width: 100%;
        }
    }
    .goods-list {
        padding: 10px;
        margin-top: -40px;
        .goods-item {
            position: relative;
            padding: 12px;
            border-radius: 10px;
            .goods-img {
                width: 90px;
                height: 90px;
            }
            .goods-info {
                width: 225px;
            }
            .btn {
                position: absolute;
                right: 12px;
                bottom: 12px;
                background: linear-gradient(270deg,rgba(255,44,60,1) 0%,rgba(249,95,47,1) 100%);
                padding: 5px 15px;
                border-radius: 5px;
            }
        }
    }
}
</style>