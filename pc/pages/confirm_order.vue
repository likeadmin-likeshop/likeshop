<template>
  <div class="confirm-order">
    <!-- 配送方式 -->
    <div class="order-hd bg-white mb16">
      <!-- 快递配送 -->
      <div v-show="delivery === 1">
        <div class="title lg">收货地址</div>
        <div class="address row-between">
          <div class="address-con" v-show="address.contact">
            <div>
              <span class="bold">{{ address.contact }}</span>
              {{ address.telephone }}
              <el-tag
                size="mini"
                type="warning"
                effect="dark"
                v-if="address.is_default"
                >默认</el-tag
              >
            </div>
            <div class="lighter mt8">
              {{ address.province }} {{ address.city }} {{ address.district }}
              {{ address.address }}
            </div>
            <div class="oprate primary row">
              <div class="mr16" @click="editAddress(address.id)">修改</div>
              <div @click="showAddress = true">更换地址</div>
            </div>
          </div>
          <div class="address-add row-center" @click="editAddress('')">
            + 添加地址
          </div>
        </div>
      </div>

      <!-- 门店自提 -->
      <div v-show="delivery === 2">
        <div class="title lg">自提门店</div>
        <div class="address row-between">
          <div class="address-con" v-if="selffetchShopID">
            <div>
              <span class="bold">{{ checkedSelffetchShop.name }}</span>
              <span class="muted ml10">
                <i class="el-icon-position"></i>
                {{ checkedSelffetchShop.distance }}
              </span>
            </div>
            <div class="lighter mt8">
              {{ checkedSelffetchShop.shop_address }}
            </div>

            <div class="muted mt8">
              <i class="el-icon-time"></i>
              <span>{{
                checkedSelffetchShop.business_start_time +
                "-" +
                checkedSelffetchShop.business_end_time
              }}</span>
            </div>

            <div class="oprate primary row">
              <div @click="showSelffetch = true">更换门店</div>
            </div>
          </div>
          <div
            v-else
            class="address-add row-center"
            @click="showSelffetch = true"
          >
            + 请选择门店
          </div>
        </div>
      </div>

      <div class="title lg">配送方式</div>
      <div class="address row-between">
        <el-radio-group v-model="delivery">
          <!-- <el-radio :label="1">物流配送</el-radio> -->
          <!-- <el-radio :label="2">门店自提</el-radio> -->
          <el-radio
            v-for="item in deliveries"
            :key="item.id"
            :label="item.id"
            >{{ item.name }}</el-radio
          >
        </el-radio-group>
      </div>
    </div>

    <div class="bg-white mb16" v-show="delivery === 2">
      <div class="title lg">提货人信息</div>
      <div class="contact">
        <div class="contact-item">
          <div class="contact-item-label">提货人</div>
          <div class="contact-item-content">
            <div v-show="!contactNameEdit">
              <span class="mr10 black">{{ contactNameValue }}</span>
              <span class="primary pointer" @click="contactNameEdit = true"
                >修改</span
              >
            </div>
            <div v-show="contactNameEdit" class="row">
              <el-input
                class="mr10"
                v-model="contactName"
                placeholder="请输入内容"
                size="small"
              />
              <el-button type="primary" size="small" @click="changeContactName"
                >确认</el-button
              >
              <el-button size="small" @click="closeContactNameEdit"
                >取消</el-button
              >
            </div>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-item-label">联系方式</div>
          <div class="contact-item-content">
            <div v-show="!contactPhoneEdit">
              <span class="mr10 black">{{ contactPhoneValue }}</span>
              <span class="primary pointer" @click="contactPhoneEdit = true"
                >修改</span
              >
            </div>
            <div v-show="contactPhoneEdit" class="row">
              <el-input
                class="mr10"
                v-model="contactPhone"
                placeholder="请输入内容"
                size="small"
              />
              <el-button type="primary" size="small" @click="changeContactPhone"
                >确认</el-button
              >
              <el-button size="small" @click="closeContactPhoneEdit"
                >取消</el-button
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="order-con bg-white">
      <div class="goods mb16">
        <div class="title lg">商品信息</div>
        <div class="goods-hd row lighter">
          <div class="info row">商品信息</div>
          <div class="price row-center">单价</div>
          <div class="num row-center">数量</div>
          <div class="money row-center">合计</div>
        </div>
        <div class="goods-list">
          <div
            :class="[
              'row',
              'item',
              {
                'item-disabled':
                  delivery === 1 ? !item.is_express : !item.is_selffetch,
              },
            ]"
            v-for="(item, index) in orderInfo.goods_lists"
            :key="index"
          >
            <div class="info row">
              <div class="pictrue flexnone">
                <el-image :src="item.image_str"></el-image>
              </div>
              <div>
                <div class="name line2">
                  <el-tag size="mini" effect="plain" v-if="item.is_seckill"
                    >秒杀</el-tag
                  >
                  {{ item.goods_name }}
                </div>
                <div class="muted">
                  <span>{{ item.spec_value_str }}</span>

                  <span
                    v-show="delivery === 2 && !item.is_selffetch"
                    class="delivery-support"
                    >该商品不支持门店自提</span
                  >
                  <span
                    v-show="delivery === 1 && !item.is_express"
                    class="delivery-support"
                    >该商品不支持快递配送</span
                  >
                </div>
              </div>
            </div>
            <div class="price column-center">
              <price-formate
                :price="
                  item.is_show_member ? item.original_price : item.goods_price
                "
              />
              <div class="primary row" v-if="item.is_show_member">
                会员价
                <price-formate :price="item.goods_price" />
              </div>
            </div>
            <div class="num row-center">
              {{ item.goods_num }}
            </div>
            <div class="money row-center">
              <price-formate :price="item.sub_price" />
            </div>
          </div>
        </div>
      </div>
      <div class="input" style="padding-bottom: 16px">
        <div class="title">买家留言</div>
        <div class="textarea">
          <el-input
            type="textarea"
            placeholder="选填，给商家备注留言，100字以内"
            v-model="userRemark"
            maxlength="100"
            :rows="3"
            show-word-limit
            resize="none"
          >
          </el-input>
        </div>
      </div>
      <div class="coupons" v-if="orderInfo.order_type == 0">
        <el-tabs v-model="active">
          <el-tab-pane :label="`可用优惠券(${coupon.usable.length})`">
            <div class="coupons-con" v-if="coupon.usable.length">
              <coupons-list
                :list="coupon.usable"
                :show-more="true"
                :type="4"
                @use="useCoupon"
              />
            </div>
            <div v-else class="ml20" style="padding-bottom: 40px">
              暂无可用优惠券
            </div>
          </el-tab-pane>
          <el-tab-pane :label="`不可用优惠券(${coupon.unusable.length})`">
            <div class="coupons-con" v-if="coupon.unusable.length">
              <coupons-list
                :list="coupon.unusable"
                :show-more="true"
                :type="2"
              />
            </div>
            <div v-else class="ml20" style="padding-bottom: 40px">
              暂无不可用优惠券
            </div>
          </el-tab-pane>
        </el-tabs>
      </div>
      <div class="integral" v-if="orderInfo.integral_switch">
        <div class="title">
          积分抵扣 <i class="el-icon-question" @click="showTipsDialog"></i>
        </div>
        <div class="row check-box">
          <el-checkbox
            v-model="useIntegral"
            @change="changeIntegral"
            :disabled="orderInfo.user_integral < orderInfo.integral_limit"
            >积分抵扣</el-checkbox
          >
          <div class="muted ml8">
            共{{ orderInfo.user_integral }}积分{{
              orderInfo.user_integral < orderInfo.integral_limit
                ? "，满" + orderInfo.integral_limit + "可用"
                : ""
            }}
          </div>
        </div>
      </div>
    </div>
    <div class="order-footer row bg-white">
      <div>
        <div class="money row mb8">
          <div class="lighter">商品总价：</div>
          <div>¥{{ orderInfo.total_goods_price }}</div>
        </div>
        <div class="money row mb8">
          <div class="lighter">运费：</div>
          <div>¥{{ orderInfo.shipping_price }}</div>
        </div>
        <div class="money row mb8" v-if="orderInfo.discount_amount">
          <div class="lighter">优惠券：</div>
          <div>-¥{{ orderInfo.discount_amount }}</div>
        </div>
        <div class="money row mb8" v-if="orderInfo.integral_amount">
          <div class="lighter">积分抵扣：</div>
          <div>-¥{{ orderInfo.integral_amount }}</div>
        </div>
        <div class="money row mt16">
          <div class="lighter">实付金额：</div>
          <div class="primary" style="font-size: 20px">
            ¥{{ orderInfo.order_amount }}
          </div>
        </div>
        <div class="row" style="justify-content: flex-end">
          <div class="white bg-primary lg btn row-center" @click="submitOrder">
            提交订单
          </div>
        </div>
      </div>
    </div>
    <address-add
      v-model="showAddressAdd"
      :aid="editId"
      @success="orderBuy('info')"
    />
    <address-list v-model="showAddress" @confirm="changeAddress" />

    <selffetch-shop-list
      v-model="showSelffetch"
      :list="selffetchShop"
      @load="getShopList"
      @confirm="changeSelffetch"
    />
  </div>
</template>

<script>
import { mapActions } from "vuex";
import { Message } from "element-ui";
import { importCDN } from "../utils/tools";
import SelffetchShopList from "../components/selffetchShopList.vue";

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

  components: { SelffetchShopList },

  async asyncData({ query, $post, $get }) {
    let { goods } = JSON.parse(decodeURIComponent(query.data));

    const asyncData = {};

    // const getCurrentPosition = (key) => {
    //     return new Promise((resolve, reject) => {
    //         window.initBaiduMapScript = () => {
    //             try {
    //                 const geolocation = new BMap.Geolocation();
    //                 geolocation.getCurrentPosition(function(r) {
    //                     if (this.getStatus() == BMAP_STATUS_SUCCESS) {
    //                         const { lat = null, lng = null } = r.point
    //                         console.log(lat, lng)
    //                         resolve({ lat, lng })
    //                     }
    //                 })
    //             } catch (err) {
    //                 reject(err)
    //             }
    //         }
    //         loadBMap("initBaiduMapScript", key);
    //     })
    // }

    await $get("order/getDeliveryType")
      .then(({ code, data, msg }) => {
        if (code != 1) throw new Error(msg);
        return data;
      })
      .then((data) => {
        const deliveries = [];

        if (data.is_express) {
          deliveries.push({
            id: 1,
            sign: "express",
            name: "快递发货",
          });
        }

        if (data.is_selffetch) {
          deliveries.push({
            id: 2,
            sign: "store",
            name: "上门自提",
          });
        }
        asyncData.deliveries = deliveries;
        asyncData.delivery = deliveries[0]["id"];
        return deliveries;
      })
      .then(async (data) => {
        // 订单清算
        await $post("order/buy", {
          action: "info",
          goods,
          delivery_type: data[0]["id"],
        })
          .then(({ code, data, msg }) => {
            if (code != 1) throw new Error(msg);
            return data;
          })
          .then((data) => {
            asyncData.orderInfo = data;
            asyncData.address = data?.address;
          })
          .catch((err) => {
            throw new Error(err);
          });
      })
      .then(async () => {
        // 优惠券
        await $post("coupon/orderCoupon", { goods })
          .then(({ code, data, msg }) => {
            if (code != 1) throw new Error(msg);
            return data;
          })
          .then((data) => {
            asyncData.coupon = data;
          })
          .catch((err) => {
            throw new Error(err);
          });
      })
      .catch((err) => {
        Message.error("数据请求失败，请稍后重试");
        console.log(err);
      });

    return asyncData;
  },

  data() {
    return {
      orderInfo: {},
      address: {},
      coupon: {
        usable: [],
        unusable: [],
      },
      active: 0,
      userRemark: "",
      showAddress: false,
      showAddressAdd: false,
      addressId: "",
      editId: "",
      isEdit: false,
      useIntegral: 0,

      selffetchShop: [],
      checkedSelffetchShop: {},
      showSelffetch: false,
      selffetchShopID: "",

      contactName: "",
      contactPhone: "",
      contactNameValue: "",
      contactPhoneValue: "",
      contactNameEdit: false,
      contactPhoneEdit: false,

      shopPage: 1,
    };
  },

  methods: {
    ...mapActions(["getPublicData"]),
    useCoupon(id) {
      this.couponId = id;
      this.orderBuy();
    },

    changeContactName() {
      this.contactNameEdit = false;
      this.contactNameValue = this.contactName;
    },

    changeContactPhone() {
      this.contactPhoneEdit = false;
      this.contactPhoneValue = this.contactPhone;
    },

    closeContactNameEdit() {
      this.contactNameEdit = false;
      this.contactName = this.contactNameValue;
    },

    closeContactPhoneEdit() {
      this.contactPhoneEdit = false;
      this.contactPhone = this.contactPhoneValue;
    },
    getMapKey() {
      this.$get("selffetch_shop/getMapKey")
        .then(({ code, data, msg }) => {
          if (code != 1) throw new Error(msg);
          return this.getCurrentPosition(data.tx_map_key);
        })
        .then(({ lat, lng }) => {
          this.lat = lat;
          this.lng = lng;
        })
        .catch((err) => {
          Message.error("定位获取失败");
          console.log(err);
        });
    },
    // 获取当前位置
    getCurrentPosition(key) {
      return new Promise((resolve, reject) => {
        const URL =
          "https://mapapi.qq.com/web/mapComponents/geoLocation/v/geolocation.min.js";

        importCDN(URL)
          .then(() => {
            const QQ = window["qq"];
            const geolocation = new QQ.maps.Geolocation(key, "admin");
            geolocation.watchPosition((data) => {
              geolocation.clearWatch();
              console.log(data);
              resolve(data);
            });
          })
          .catch((err) => reject(err));
      });
    },
    getShopList() {
      // console.log(this.shopPage)
      if (!this.shopPage) return;
      this.$get("selffetch_shop/lists", {
        params: {
          longitude: this.lng,
          latitude: this.lat,
          page_no: this.shopPage,
          page_size: 10,
        },
      })
        .then(({ code, data, msg }) => {
          if (code != 1) throw new Error(msg);
          data.more ? (this.shopPage += 1) : (this.shopPage = 0);

          return data;
        })
        .then(({ list }) => {
          this.selffetchShop = [...this.selffetchShop, ...list];
        });
    },

    editAddress(id) {
      this.editId = id;
      this.showAddressAdd = true;
    },

    changeAddress(val) {
      this.addressId = val;
      this.orderBuy();
    },

    changeSelffetch(shop) {
      this.checkedSelffetchShop = shop;
      this.selffetchShopID = shop["id"];
      this.orderBuy();
    },

    changeIntegral() {
      this.orderBuy();
    },

    showTipsDialog() {
      const { integral_config, integral_limit } = this.orderInfo;
      this.$alert(
        `·1积分可抵扣${integral_limit}元\n·单次扣减积分不能低于${integral_config}积分`,
        {
          confirmButtonText: "确定",
          title: "积分使用说明",
        }
      );
    },

    submitOrder() {
      this.orderBuy("submit");
    },

    async orderBuy(action = "info") {
      let submitObj = {
        action,
        delivery_type: this.delivery,
        goods: this.goods,
        use_integral: Number(this.useIntegral),
        address_id: this.addressId,
        coupon_id: this.couponId,
      };

      if (action == "submit") {
        submitObj.remark = this.userRemark;
        submitObj.type = this.type;

        if (submitObj.delivery_type === 2) {
          submitObj.selffetch_shop_id = this.selffetchShopID;
          submitObj.consignee = this.contactNameValue;
          submitObj.mobile = this.contactPhoneValue;

          delete submitObj.address_id;
        }
      }

      const { data, code } = await this.$post("order/buy", submitObj);

      if (code == 1) {
        if (action == "info") {
          let { address } = data;
          this.orderInfo = data;
          this.address = address;
        } else if (action == "submit") {
          this.getPublicData();
          this.$router.replace({
            path: "/payment",
            query: {
              id: data.order_id,
            },
          });
        }
      }
    },
  },

  watch: {
    contactNameValue(value) {
      this.contactName = value;
    },

    contactPhoneValue(value) {
      this.contactPhone = value;
    },
  },

  created() {
    const { goods, type } = JSON.parse(
      decodeURIComponent(this.$route.query.data)
    );

    this.goods = goods;
    this.type = type;

    this.contactNameValue = this.orderInfo?.address?.contact ?? "";
    this.contactPhoneValue = this.orderInfo?.address?.telephone ?? "";
    this.getMapKey();
    // this.initSelffetchShop();
  },
};
</script>

<style lang="scss" scoped>
.confirm-order {
  padding: 16px 0;
  .title {
    padding: 12px 20px;
    font-weight: bold;
    > i {
      cursor: pointer;
    }
  }

  .contact {
    padding: 10px 20px 22px;

    &-item {
      display: flex;
      align-items: center;
      height: 36px;

      &-label {
        width: 72px;
        color: $-color-muted;
      }
    }
  }

  .order-hd {
    .address {
      padding: 10px 20px 22px;
      .address-con {
        position: relative;
        cursor: pointer;
        padding: 16px 20px;
        width: 800px;
        height: 100px;
        padding-right: 150px;
        border: 1px solid $-color-primary;
        border-radius: 2px;
        &:hover {
          .oprate {
            display: flex;
          }
        }
        .oprate {
          display: none;
          position: absolute;
          right: 20px;
          bottom: 9px;
        }
      }
      .address-add {
        cursor: pointer;
        width: 320px;
        height: 100px;
        border: 1px dashed $-color-border;
      }
    }
  }

  .order-con {
    .goods {
      border-bottom: 1px dashed $-color-border;
      .goods-hd {
        height: 40px;
        margin: 0 20px;
      }
      .goods-list {
        .item {
          padding: 10px 20px;
          &-disabled {
            position: relative;
            &::before {
              z-index: 9;
              position: absolute;
              top: 0;
              left: 0;
              bottom: 0;
              right: 0;
              height: 100%;
              display: block;
              content: "";
              background-color: rgba($color: #ffffff, $alpha: 0.5);
            }
          }
        }
      }
      .info {
        width: 500px;
        .pictrue {
          margin-right: 10px;
          .el-image {
            width: 72px;
            height: 72px;
          }
        }
        .name {
          margin-bottom: 10px;
        }

        .delivery-support {
          font-size: 12px;
          padding: 4px 15px;
          border-radius: 60px;
          margin-left: 20px;
          background-color: #f4f4f4;
          color: $-color-lighter;
        }
      }
      .price {
        width: 200px;
      }
      .num {
        width: 250px;
      }
      .money {
        width: 200px;
      }
    }
    .input {
      .textarea {
        margin: 0 20px;
        width: 1000px;
      }
    }
    .integral {
      .check-box {
        padding: 0 20px 12px;
      }
    }
  }
  .order-footer {
    margin-top: 2px;
    padding: 25px 20px;
    justify-content: flex-end;
    .money {
      > div {
        text-align: right;
        &:first-of-type {
          width: 80px;
          margin-right: 50px;
        }
        &:last-of-type {
          flex: 1;
        }
      }
    }
    .btn {
      width: 152px;
      height: 44px;
      margin-top: 18px;
      border-radius: 2px;
      cursor: pointer;
    }
  }
}
</style>
