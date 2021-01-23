<template>
<view class="shop-cart">
    <view class="main " :style="{'padding-bottom':  (cartType == 1 ?  '100rpx' : 0)}">
        <view v-for="(item, index) in cartLists" :key="index" class="cart-list mb20" v-show="!(cartType!=1)">
            <view class="cart-item bg-white">
                <view class="row-between select">
                    <checkbox :value="item.cart_id" :checked="item.selected == 1" :data-cartid="item.cart_id" :data-select="item.selected" @tap="changOneSelect">选择</checkbox>
                    <view :data-cartid="item.cart_id" @tap="changeDelPopup">
                        <image class="icon-xl" src="/static/images/icon_del.png"></image>
                    </view>
                </view>
                <view class="row" style="padding: 20rpx" @tap="goPage" :data-url="'/pages/goods_details/goods_details?id=' + item.goods_id">
                    <image width="180rpx" height="180rpx" radius="10rpx" class="goods-img mr20" lazy-load :src="item.img"></image>
                    <view class="info" style="flex: 1">
                        <view class="line2 nr">{{item.name}}</view>
                        <view class="muted xs line1 mt10">
                            {{item.spec_value_str}}
                        </view>
                        <view class="row-between mt20">
                            <view class="price row primary">
                                <price-format :price="item.price" :firstSize="32" :secondSize="32" showSubscript="true" :subscriptSize="32"></price-format>
                            </view>
                            <view class="cartNum" @tap.stop="true">
                                <van-stepper :value="item.goods_num" integer :data-cartid="item.cart_id" @change="countChange" async-change></van-stepper>
                            </view>
                        </view>
                    </view>
                </view>
            </view>
        </view>
        <view class="cart-null column-center bg-white mb20" style="padding: 80rpx 0 50rpx" v-show="!(cartType != 2)">
            <image class="img-null" src="/static/images/cart_null.png"></image>
            <view class="muted mb20">购物车暂无任何商品~</view>
            <navigator open-type="switchTab" url="/pages/index/index" hover-class="none" class="primary br60 btn row-center">去逛逛</navigator>
        </view>
        <view v-if="!isLogin" class="login column-center">
            <image class="img-null" src="/static/images/cart_null.png"></image>
            <view class="muted mt20">微信授权登录后才能查看购物车哦</view>
            <navigator class="white br60 row-center btn" url="/pages/login/login">
                <image class="mr10" src="/static/images/icon_wechat.png"></image>
                <text>去登录</text>
            </navigator>
        </view>
        <recommend v-if="isShow"></recommend>
    </view>
    <view class="footer row bg-white" v-show="!(cartType != 1)">
        <checkbox-group class="row" @change="changeAllSelect">
            <checkbox id="checkAll" value="all" :checked="isSelectedAll"></checkbox>
            <label for="checkAll" class="ml10">全选</label>
        </checkbox-group>
        <view class="all-price lg mr20 row-end">
            <view>合计：</view>
            <view class="primary">￥{{totalPrice}}</view>
        </view>
        <view class="right-btn br60 white" :style="' ' + (nullSelect ? 'background: #d7d7d7' : '')" @tap="goToConfirm">去结算</view>
    </view>
    <uni-popup id="confirmPopup" ref="confirmPopup">        
        <uni-popup-dialog 
        use-slot 
        close-on-click-overlay="true" 
        id="delete-dialog" 
        :show="delPopup" 
        showCancelButton="true" 
        confirmButtonText="狠心删除" 
        confirmButtonColor="#FF2C3C" 
        @confirm="goodsDelete" 
        @cancel="changeDelPopup">
            <view class="column-center tips-dialog" style="padding-top: 40rpx">
                <image class="icon-lg" src="/static/images/icon_warning.png"></image>
                <view style="margin:30rpx 0;">确认删除该商品吗？</view>
            </view>
        </uni-popup-dialog>
    </uni-popup>
</view>
</template>

<script>
import { getCartList, changeCartSelset, changeGoodsCount, deleteGoods } from '../../api/store';
import { getUser } from '../../api/user';
import PriceFormat from '@/components/price-format/price-format'
import {mapGetters} from 'vuex'
export default {
  data() {
    return {
      //购物车状态 1为有 2为空 0则什么都不显示
      cartType: 0,
      isShow: false,
      cartLists: [],
      delPopup: false,
      totalPrice: ''
    };
  },

  components: {
    PriceFormat,
  },
  props: {},
  computed: {
    nullSelect() {
        let index = this.cartLists.findIndex(item => item.selected == 1);

        if (index == -1) {
          return true;
        }

        return false;
    },
    isSelectedAll() {

        let index = this.cartLists.findIndex(item => item.selected == 0);

        if (index == -1) {
          return true;
        }

        return false;
    },
    ...mapGetters(['isLogin']),
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
      
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
    this.getCartListFun();
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
    this.getCartListFun();
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {},

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: async function () {
    let query = "";
    let res = await getUser();

    if (res.code == 1) {
      query = res.data.distribution_code;
      return {
        path: "pages/index/index?invite_code=" + query
      };
    }
  },
  methods: {
    goodsDelete() {
      deleteGoods({
        cart_id: this.cartId
      }).then(res => {
        if (res.code == 1) {
          this.getCartListFun();
        }
      });
    },

    changeDelPopup(e) {
      const {
        cartid
      } = e.currentTarget.dataset;

      if (cartid) {
        this.cartId = cartid;
      }

      this.delPopup = !this.delPopup
    },

    getCartListFun() {
      getCartList().then(res => {
        uni.stopPullDownRefresh({
          success: res => {}
        });

        if (res.code == 1) {
          let {
            lists,
            total_amount
          } = res.data;
          let cartType = 0;

          if (lists.length == 0) {
            cartType = 2;
          } else {
            cartType = 1;
          }

          this.cartLists = lists;
          this.cartType = cartType;
          this.totalPrice = total_amount;
          this.isShow = true

          this.$emit("GET_CART_NUM");
        }
      });
    },

    changOneSelect(e) {
      const {
        cartid,
        select
      } = e.currentTarget.dataset;
      let selected = !select;
      this.changeCartSelsetFun([cartid], selected);
    },

    changeAllSelect() {
      const {
        isSelectedAll,
        cartLists
      } = this;
      let cartid = cartLists.map(item => item.cart_id);
      this.changeCartSelsetFun(cartid, !isSelectedAll);
    },

    changeCartSelsetFun(cartId, selected) {
      changeCartSelset({
        cart_id: cartId,
        selected: selected ? 1 : 0
      }).then(res => {
        if (res.code == 1) {
          this.getCartListFun();
        }
      });
    },

    countChange(e) {
      const {
        cartid
      } = e.currentTarget.dataset;
      changeGoodsCount({
        cart_id: cartid,
        goods_num: e.detail
      }).then(res => {
        if (res.code == 1) {
          this.getCartListFun();
        }
      });
    },

    goToConfirm() {
      let {
        cartLists
      } = this;
      let goods = [];
      cartLists.forEach(item => {
        if (item.selected) {
          goods.push({
            item_id: item.item_id,
            num: item.goods_num
          });
        }
      });
      if (goods.length == 0) return this.$toast({
        title: '您还没有选择商品哦'
      });
      uni.navigateTo({
        url: `/pages/confirm_order/confirm_order?goods=${JSON.stringify(goods)}&type=cart`
      });
    },

    goPage(e) {
      const {
        url
      } = e.currentTarget.dataset;
      uni.navigateTo({
        url
      });
    }

  }
};
</script>
<style lang="scss">
/* pages/shop_cart/shop_cart.wxss */
.shop-cart { 
    .main {
        padding-bottom: 100rpx;
    }
    .cart-list { 
        .cart-item {
            margin: 20rpx 20rpx 0;
            border-radius: 10rpx;
        }
        .select {
            height: 80rpx;
            padding: 0 20rpx;
            border-bottom: $-solid-border;
        }
    }
    .cart-null {
        .btn {
            border: 1rpx solid $-color-primary;
            width: 184rpx;
            margin-left: auto;
            margin-right: auto;
            padding: 8rpx 24rpx;
        }
    }
    .footer {
        position: fixed;
        padding: 0 24rpx;
        width: 100%;
        height: 100rpx;
        box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.1);
        bottom: 0;
        box-sizing: border-box;
        z-index: 1000;
        .all-price {
            text-align: right;
            flex: 1;
        }
        .right-btn {
            padding: 13rpx 45rpx;
            background: linear-gradient(90deg, rgba(249, 95, 47, 1) 0%, rgba(255, 44, 60, 1) 100%);
        }
    }
    .login {
        height: 100vh;
        background: #fff;
        text-align: center;
        .btn {
            background-color: #09BB07;
            width: 280rpx;
            line-height: 70rpx;
            margin: 40rpx auto 0;
            image {
                width: 50rpx;
                height: 50rpx;
            }
        }
    }
}
</style>