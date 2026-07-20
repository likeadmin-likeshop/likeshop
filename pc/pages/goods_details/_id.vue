<template>
  <div class="goods-details row" v-if="goodsDetails.id">
    <div class="flex1">
      <div class="goods-info row">
        <div class="goods-swiper mr16 bg-white column">
          <el-image
            class="current-img"
            :preview-src-list="goodsImage.map((item) => item.uri)"
            :src="goodsImage[swiperIndex].uri"
          ></el-image>
          <client-only>
            <swiper class="swiper" ref="mySwiper" :options="swiperOptions">
              <swiper-slide
                :class="{ 'swiper-item': true, active: index === swiperIndex }"
                v-for="(item, index) in goodsImage"
                :key="index"
              >
                <div style="width: 100%; height: 100%" @mouseover="swiperIndex = index">
                  <el-image style="width: 100%; height: 100%" :src="item.uri"></el-image>
                </div>
              </swiper-slide>
              <div class="swiper-button-prev" slot="button-prev"></div>
              <div class="swiper-button-next" slot="button-next"></div>
            </swiper>
          </client-only>
        </div>
        <div class="info-wrap bg-white flex1">
          <div class="name bold mb16">{{ goodsDetails.name }}</div>
          <div class="seckill row-between white" v-if="activity.type == 1">
              <div class="xxl">限时秒杀</div>
              <div class="row">
                <div class="white mr16">距离结束还有</div>
                <count-down :time="countTime" :is-slot="true" @change="onChangeDate">
                  <div class="row-center count-down xxl">
                    <div class="item white">{{ timeData.hours }}</div>
                    <div class="white" style="margin: 0 4px">:</div>
                    <div class="item white">{{ timeData.minutes }}</div>
                    <div class="white" style="margin: 0 4px">:</div>
                    <div class="item white">{{ timeData.seconds }}</div>
                  </div>
                </count-down>
              </div>
            </div>
          <div class="price-wrap lighter">
            <div class="row-between">
              <div class="price">
                <div
                  class="row"
                  v-if="Number(checkedGoods.market_price || goodsDetails.market_price)"
                >
                  
                  {{ activity.type == 1 ? '日常价' : '原价' }}
                  <span class="ml20">
                    <price-formate
                      :price="checkedGoods.market_price || goodsDetails.market_price"
                      :weight="400"
                    />
                  </span>
                </div>
                <div class="row mt10">
                  {{ activity.type == 1 ? '秒杀价' : '价格' }}
                  <div class="primary ml20">
                    <price-formate
                      :price="checkedGoods.price || goodsDetails.price"
                      :subscript-size="16"
                      :first-size="26"
                      :second-size="16"
                    />
                  </div>
                  <div
                    class="member-price ml10 row xs"
                    v-if="activity.type != 1 && (checkedGoods.member_price || goodsDetails.member_price)"
                  >
                    会员价
                    <price-formate
                      :price="checkedGoods.member_price || goodsDetails.member_price"
                      :weight="400"
                    />
                  </div>
                </div>
              </div>

              <div class="rate column-end">
                <div class="primary" style="font-size: 20px">{{ comment.percent }}</div>
                <div class="lighter">好评率</div>
              </div>
            </div>
            <div class="row-between mt10" v-if="activity.type != 1">
              <div class="row">
                优惠
                <div class="coupon-list ml20 row">
                  <div
                    class="coupon-item xs ml10"
                    v-for="(item, index) in couponLists"
                    :key="item.id"
                  >{{ item.use_condition }}</div>
                </div>
              </div>
              <nuxt-link :to="`/get_coupons?id=${goodsDetails.id}`">
                <span class="line1">去领券</span>
                <i class="el-icon-arrow-right"></i>
              </nuxt-link>
            </div>
          </div>

          <div class="sales-click row">
            <div class="flex1">销量：{{ goodsDetails.sales_sum }}件</div>
            <div class="flex1">浏览量：{{ goodsDetails.click_count }}次</div>
          </div>
          <div class="spec-wrap mt20">
            <div class="spec row mb16" v-for="(item, index) in goodsSpec" :key="index">
              <div class="lighter spec-name">{{ item.name }}</div>
              <div class="spec-list row wrap">
                <div
                  :class="['spec-item lighter', { active: specitem.checked }]"
                  v-for="(specitem, sindex) in item.spec_value"
                  :key="sindex"
                  @click="onChoseSpecItem(item.id, specitem.id)"
                >{{ specitem.value }}</div>
              </div>
            </div>
          </div>
          <div class="goods-num row">
            <div class="num lighter">数量</div>
            <number-box v-model="goodsNum" :min="1" :max="checkedGoods.stock" />
          </div>
          <div class="goods-btns row lg">
            <div class="btn bg-primary white" @click="onBuyNow">立即购买</div>
            <div class="btn primary addcart" @click="onAddCart" v-if="activity.type != 1">加入购物车</div>
            <div class="btn lighter collection row-center" @click="onCollectionGoods">
              <img
                class="start-icon mr8"
                :src="
                  goodsDetails.is_collect
                    ? require('~/assets/images/icon_star_s.png')
                    : require('~/assets/images/icon_star.png')
                "
              />
              <div>收藏该商品</div>
            </div>
          </div>
        </div>
      </div>
      <div class="details bg-white mt16">
        <el-tabs v-model="active">
          <el-tab-pane label="商品详情">
            <div class="rich-text" v-html="goodsDetails.content"></div>
          </el-tab-pane>
          <el-tab-pane label="商品评价">
            <div class="evaluation">
              <div class="evaluation-hd row">
                <div class="rate row">
                  <div class="lighter mr8">好评率</div>
                  <div class="primary" style="font-size: 30px">{{ comment.percent }}</div>
                </div>
                <div class="score lighter row">
                  <span class="mr8">评分</span>
                  <el-rate v-model="comment.avg_score" disabled allow-half></el-rate>
                </div>
              </div>
              <div class="evaluation-tab row">
                <div
                  :class="['item', { active: commentActive == item.id }]"
                  v-for="(item, index) in comment.comment"
                  :key="index"
                  @click="commentActive = item.id"
                >{{ item.name }}({{ item.count }})</div>
              </div>
            </div>
            <div>
              <template v-for="(item, index) in comment.comment">
                <comment-list
                  v-show="commentActive == item.id"
                  :goods-id="id"
                  :type="item.id"
                  :key="index"
                ></comment-list>
              </template>
            </div>
          </el-tab-pane>
        </el-tabs>
      </div>
    </div>
    <div class="goods-like ml16">
      <div class="title bg-white primary row-center">猜你喜欢</div>
      <div class="goods-list">
        <template v-for="(item, index) in goodsDetails.like">
          <nuxt-link
            :to="`/goods_details/${item.id}`"
            class="item bg-white mb16"
            v-if="index < 5"
            :key="index"
          >
            <el-image class="goods-img" :src="item.image"></el-image>
            <div class="goods-name line2">{{ item.name }}</div>
            <div class="price row mt8">
              <div class="primary mr8">
                <price-formate :price="item.price" :first-size="16" />
              </div>
              <div class="muted sm line-through">
                <price-formate :price="item.market_price" />
              </div>
            </div>
          </nuxt-link>
        </template>
      </div>
    </div>
  </div>
</template>

<script>
import NumberBox from "~/components/public/numberBox";
import CountDown from "~/components/public/countDown";
import { mapActions } from "vuex";
import { Message } from "element-ui";
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
  components: {
    NumberBox,
    CountDown,
  },
  async asyncData({ params, $get, app }) {
    const paramsObj = { id: params.id }
    const goodsGet = $get("goods/getGoodsDetail", {
      params: paramsObj,
    });
    const couponGet = $get("coupon/getGoodsCoupon", {
      params: paramsObj,
    });
    const goodsData = await goodsGet
    const couponData = await couponGet
    if (goodsData.code == 0) {
      Message({
        message: goodsData.msg,
        type: "error",
      });
      setTimeout(() => app.router.back(), 1500);
    }
    return {
      goodsDetails: goodsData.data,
      goodsImage: goodsData.data.goods_image,
      activity: goodsData.data.activity,
      couponLists: couponData.data.slice(0, 2)
    };
  },

  data() {
    return {
      goodsDetails: {},
      goodsImage: [],
      activity: {},
      swiperOptions: {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        preventClicks: true,
        slidesPerView: "auto",
      },
      couponLists: [],
      active: "0",
      commentActive: 0,
      swiperIndex: 0,
      checkedGoods: {},
      comment: {},
      goodsNum: 1,
      goodsSpec: [],
      id: "",
      timeData: {}
    };
  },
  created() {
    this.id = this.$route.params.id;
    this.getComment(this.id);
  },
  methods: {
    ...mapActions(["getPublicData"]),
    onClickSlide(e) {
      this.swiperIndex = e;
    },
    onChoseSpecItem(id, specid) {
      const { goodsSpec } = this;
      goodsSpec.forEach((item) => {
        if (item.spec_value && item.id == id) {
          item.spec_value.forEach((specitem) => {
            specitem.checked = 0;
            if (specitem.id == specid) {
              specitem.checked = 1;
            }
          });
        }
      });
      this.goodsSpec = [...goodsSpec];
    },
    async onAddCart() {
      const {
        goodsNum,
        checkedGoods: { id },
      } = this;
      const { code, data, msg } = await this.$post("/cart/add", {
        item_id: id,
        goods_num: goodsNum,
      });
      if (code == 1) {
        this.getPublicData();
        this.$message({
          message: msg,
          type: "success",
        });
      }
    },
    onBuyNow() {
      const {
        goodsNum,
        checkedGoods: { id },
      } = this;
      const goods = [
        {
          item_id: id,
          num: goodsNum,
        },
      ];
      this.$router.push({
        path: "/confirm_order",
        query: {
          data: encodeURIComponent(
            JSON.stringify({
              goods,
            })
          ),
        },
      });
    },
    async getGoodsDetail() {
      const { data, code } = await this.$get("goods/getGoodsDetail", {
        params: { id: this.id },
      });
      if (code == 1) {
        this.goodsDetails = data;
      }
    },
    async onCollectionGoods() {
      const {
        goodsDetails: { is_collect },
      } = this;
      const { data, code } = await this.$post("collect/handleCollectGoods", {
        is_collect: is_collect == 0 ? 1 : 0,
        goods_id: this.id,
      });
      if (code == 1) {
        if (is_collect == 0) {
          this.$message({
            message: "收藏成功",
            type: "success",
          });
        } else {
          this.$message({
            message: "取消收藏成功",
            type: "success",
          });
        }
        this.getGoodsDetail();
      }
    },
    async getComment() {
      const { data, code } = await this.$get("/goods_comment/category", {
        params: { goods_id: this.id },
      });
      if (code == 1) {
        this.comment = data;
        this.commentActive = data.comment[0].id;
      }
    },
    onChangeDate(e) {
      let timeData = {}
      for (let prop in e) {
        if (prop !== 'milliseconds') timeData[prop] = ('0' + e[prop]).slice(-2)
      }
      this.timeData = timeData
    },
  },
  watch: {
    goodsSpec: {
      immediate: true,
      handler(value) {
        const { goods_item } = this.goodsDetails;
        let keyArr = [];
        value.forEach((item) => {
          if (item.spec_value) {
            item.spec_value.forEach((specitem) => {
              if (specitem.checked) {
                keyArr.push(specitem.id);
              }
            });
          }
        });
        if (!keyArr.length) return;
        let key = keyArr.join(",");
        let index = goods_item.findIndex((item) => {
          return item.spec_value_ids == key;
        });
        if (index == -1) {
          index = 0;
        }
        this.checkedGoods = goods_item[index];
        console.log(this.checkedGoods);
      },
    },
    goodsDetails: {
      immediate: true,
      handler(value) {
        if (!value.goods_spec) return;
        value.goods_spec.forEach((item) => {
          item.spec_value.forEach((specitem, specindex) => {
            if (specindex == 0) {
              specitem.checked = 1;
            } else {
              specitem.checked = 0;
            }
          });
        });
        this.goodsSpec = [...value.goods_spec];
      },
    },
  },
  computed: {
    countTime() {
      const info = this.activity.info;
      return info ? info.end_time - Date.now() / 1000 : 0;
    },
  },
};
</script>

<style lang="scss">
.goods-details {
  padding: 16px 0 44px;
  align-items: flex-start;
  .goods-info {
    align-items: stretch;
    .goods-swiper {
      width: 400px;
      border-radius: 4px;
      justify-content: flex-start;
      .swiper {
        margin: 10px 0;
        padding: 0 25px;
        --swiper-navigation-size: 15px;
        --swiper-navigation-color: #888;
        .swiper-button-next,
        .swiper-button-prev {
          top: 0;
          width: 25px;
          height: 100%;
          margin-top: 0;
          background-size: 12px 22px;
        }
        .swiper-button-prev {
          left: 0;
        }
        .swiper-button-next {
          right: 0;
        }
        .swiper-item {
          cursor: pointer;
          height: 66px;
          width: 66px;
          border: 2px solid transparent;
          & ~ .swiper-item {
            margin-left: 10px;
          }
          &.active {
            border-color: $-color-primary;
          }
        }
      }
      .current-img {
        width: 100%;
        height: 400px;
      }
    }
    .info-wrap {
      min-height: 486px;
      border-radius: 4px;
      padding: 20px;
      .name {
        font-size: 20px;
      }
      .seckill {
          background-color: $-color-primary;
          padding: 6px 10px;
          .count-down {
            .item {
              width: 30px;
              height: 30px;
              background: rgba(0, 0, 0, 0.3);
              text-align: center;
              line-height: 30px;
              border-radius: 4px;
            }
          }
        }
      .price-wrap {
        background: #f6f6f6;
        background-size: 100%;
        padding: 16px;
        .coupon-list {
          .coupon-item {
            color: $-color-primary;
            border: 1px solid currentColor;
            padding: 2px 6px;
          }
        }
        .member-price {
          background-color: #482406;
          color: #fdebd5;
          border-radius: 100px 100px 100px 0px;
          padding: 0 6px;
        }
        
      }
      .sales-click {
        border-bottom: 1px dashed $-color-border;
        line-height: 28px;
        text-align: center;
        padding: 6px;
        & > div:first-of-type {
          border-right: 1px solid $-color-border;
        }
      }
      .spec-wrap {
        .spec {
          align-items: flex-start;
          .spec-name {
            margin-right: 20px;
            margin-top: 6px;
            flex: none;
          }
          .spec-item {
            padding: 0 20px;
            line-height: 32px;
            border: 1px solid $-color-border;
            border-radius: 2px;
            margin-right: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            &.active {
              color: $-color-primary;
              background-color: #ffeeef;
              border-color: currentColor;
            }
          }
        }
      }
      .goods-num {
        margin-bottom: 30px;
        .num {
          margin-right: 20px;
        }
      }
      .goods-btns {
        .btn {
          line-height: 42px;
          border-radius: 2px;
          margin-right: 14px;
          text-align: center;
          width: 120px;
          border: 1px solid $-color-primary;
          cursor: pointer;
          &.addcart {
            color: $-color-primary;
            background-color: #ffeeef;
            border-color: currentColor;
          }
          &.collection {
            width: 146px;
            color: $-color-lighter;
            background-color: transparent;
            border-color: $-color-border;
            .start-icon {
              width: 18.5px;
              height: 18px;
            }
          }
        }
      }
    }
  }
  .details {
    padding: 10px 0;
    overflow: hidden;
    .rich-text {
      padding: 0 10px;
      width: 100%;
      overflow: hidden;
      img {
        width: 100%;
      }
      p {
        margin: 0;
      }
    }
    .evaluation {
      .evaluation-hd {
        background-color: #f2f2f2;
        height: 80px;
        margin: 0 10px;
        .rate {
          height: 60px;
          width: 220px;
          border-right: 1px solid #e5e5e5;
          padding-left: 10px;
          margin-right: 40px;
        }
      }
      .evaluation-tab {
        margin: 16px 20px;
        .item {
          border-radius: 2px;
          cursor: pointer;
          height: 32px;
          padding: 6px 20px;
          color: $-color-lighter;
          background-color: #f2f2f2;
          margin-right: 10px;
          &.active {
            color: #fff;
            background-color: $-color-primary;
          }
        }
      }
    }
  }
  .goods-like {
    width: 204px;
    .title {
      border-bottom: 1px solid $-color-border;
      height: 40px;
      font-weight: 500;
    }
    .goods-list {
      .item {
        padding: 10px;
        display: block;
        .goods-img {
          width: 180px;
          height: 180px;
          margin-bottom: 10px;
        }
      }
    }
  }
}
</style>