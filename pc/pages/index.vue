<template>
  <div class="index">
    <div class="banner">
      <client-only>
        <!-- <swiper ref="mySwiper" :options="swiperOptions" v-if="bannerList && bannerList.length" :autoDestroy="false">
          <swiper-slide
            class="swiper-item"
            v-for="(item, index) in bannerList"
            :key="index"
          >
            <ad-item :item="item"></ad-item>
          </swiper-slide>
          <div class="swiper-pagination" slot="pagination"></div>
          <div
            class="swiper-button-prev swiper-button-white"
            slot="button-prev"
          ></div>
          <div
            class="swiper-button-next swiper-button-white"
            slot="button-next"
          ></div>
        </swiper> -->
        <el-carousel height="440px" autoplay>
          <el-carousel-item
            v-for="(item, index) in bannerList"
            :key="index"
            class="swiper-item"
          >
            <ad-item :item="item" />
          </el-carousel-item>
        </el-carousel>
      </client-only>
    </div>
    <activity-area
      title="热销榜单"
      desc="实时更新热销火爆商品"
      url="/goods_list/1"
      :list="indexData.host_list"
      :banner="indexData.host_ad"
    />
    <activity-area
      title="新品推荐"
      desc="品质好货 件件是精品"
      url="/goods_list/2"
      :list="indexData.new_list"
      :banner="indexData.new_ad"
    />
    <activity-area
      title="好物优选"
      desc="精挑细选 挑你喜欢"
      url="/goods_list/3"
      :list="indexData.best_list"
      :banner="indexData.best_ad"
    />
    <div
      class="category-list"
      v-for="(item, index) in indexData.category_list"
      :key="index"
    >
      <div class="category-hd row">
        <div class="title bold line1">F{{ index + 1 }} / {{ item.name }}</div>
        <div class="row category-two flex1 wrap">
          <nuxt-link
            :to="`/category?id=${sitem.id}`"
            class="item muted mt8"
            v-for="(sitem, sindex) in item.sons"
            :key="sindex"
          >
            {{ sitem.name }}
          </nuxt-link>
        </div>
        <nuxt-link :to="`/category?id=${item.id}`" class="more"
          >更多 <i class="el-icon-arrow-right"></i
        ></nuxt-link>
      </div>
      <div class="category-con row">
        <div class="flexnone mr16 ad-img" v-if="item.ad.image">
          <ad-item :item="item.ad"></ad-item>
        </div>
        <goods-list
          :list="item.goods_list"
          :num="item.ad.image ? 4 : 5"
        ></goods-list>
      </div>
    </div>
    <div class="coupon-popup">
      <el-dialog
        title="新人送券"
        :visible.sync="showCoupon"
        width="700px"
        center
        top="30vh"
      >
        <div class="column-center black">
          <div class="coupons-list row">
            <template v-for="(item, index) in couponList">
              <div class="item" :key="index">
                <div :class="['info white']">
                  <div class="info-hd row">
                    <div>
                      <price-formate
                        :price="item.money"
                        :first-size="38"
                        :second-size="38"
                      />
                    </div>
                    <div class="ml8 flex1">
                      <div class="line1">{{ item.name }}</div>
                      <div class="xs line1">{{ item.use_goods_type }}</div>
                    </div>
                  </div>
                </div>
              </div>
            </template>
          </div>
        </div>
        <div slot="footer" class="dialog-footer">
          <el-button
            style="width:200px"
            type="primary"
            @click="showCoupon = false"
            >确定</el-button
          >
        </div>
      </el-dialog>
    </div>
    <!-- 服务协议 -->
    <server-explan></server-explan>
  </div>
</template>

<script>
import ActivityArea from "~/components/activityArea";
import { directive } from "vue-awesome-swiper";
import { paramsToStr } from "~/utils/tools";
import ServerExplan from "../components/server-explan.vue";
export default {
  head() {
    const { clarity_app_id } = this.$store.getters.getSiteStatistics;

    if (clarity_app_id) {
      (function(c, l, a, r, i, t, y) {
        c[a] =
          c[a] ||
          function() {
            (c[a].q = c[a].q || []).push(arguments);
          };
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
      })(window, document, "clarity", "script", clarity_app_id);
    }
    return {
      title: this.$store.getters.headTitle,
      link: [
        { rel: "icon", type: "image/x-icon", href: this.$store.getters.favicon }
      ]
    };
  },
  components: {
    ActivityArea
  },
  directives: {
    swiper: directive
  },
  async asyncData({ $get, store }) {
    const banner = $get("ad_content/lists", { params: { pid: 2, client: 2 } });
    const index = $get("pc/index");
    const { data: bannerList } = await banner;
    const { data: indexData } = await index;
    let couponList = [];
    if (store.getters.isLogin) {
      const { data } = await $get("coupon/registerSendCoupon");
      couponList = data;
    }
    return { bannerList, indexData, couponList };
  },
  data() {
    const self = this;
    return {
      bannerList: [],
      showCoupon: false,
      swiperOptions: {
        pagination: {
          el: ".swiper-pagination"
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        width: 1020,
        preventClicks: true,
        loop: true,
        observer: true, //修改swiper自己或子元素时，自动初始化swiper
        observeParents: true, //修改swiper的父元素时，自动初始化swiper
        on: {
          slideChangeTransitionStart() {
            console.log(this.activeIndex, "active", this.realIndex);
            console.log(this.isEnd, "isBegin", this.isBeginning);
            if (this.isEnd) {
              // 到达第4个
              this.slideToLoop(0);
            }
            if (this.isBeginning) {
              this.slideTo(self.bannerList.length);
            }
          }
        }
      }
    };
  },
  created() {
    // console.log(this);
  },
  mounted() {
    // if(this.$refs.mySwiper) {
    // }
  },
  // activated() {
  //   this.mySwiper.updateSwiper()
  // },
  beforeDestroy() {
    // console.log(this.mySwiper, "##");
    // this.bannerList = false;
    // this.mySwiper.destroySwiper()
  },
  destroyed() {},
  computed: {
    mySwiper() {
      return this.$refs.mySwiper;
    }
  },
  methods: {},
  watch: {
    couponList: {
      immediate: true,
      handler(val) {
        if (val.length) {
          this.showCoupon = true;
          this.$store.dispatch("getPublicData");
        }
      }
    }
  }
};
</script>

<style lang="scss">
.index {
  .banner {
    margin-left: 160px;
    margin-bottom: 16px;
    height: 440px;
    .swiper-container {
      --swiper-navigation-size: 20px;
      --swiper-pagination-color: #fff;
    }
    .swiper-item {
      height: 440px;
      a {
        display: inline-block;
        width: 100%;
        height: 100%;
      }
    }
  }
  .category-list {
    .category-hd {
      height: 79px;
      .title {
        font-size: 28px;
      }
      .category-two {
        margin-left: 24px;
        .item {
          margin-right: 24px;
          &:hover {
            color: #333;
          }
        }
      }
    }
    .category-con {
      align-items: flex-start;
      & > .ad-img {
        width: 224px;
        height: 636px;
      }
    }
  }
  .coupons-list {
    padding: 0 18px;
    flex-wrap: wrap;
    position: relative;
    .item {
      margin-bottom: 20px;
      margin-right: 16px;
      position: relative;
      cursor: pointer;
      .info {
        padding: 0 10px;
        background: url("~/assets/images/bg_coupon_s.png") no-repeat;
        width: 240px;
        height: 80px;
        background-size: 100%;
      }
    }
  }
}
</style>
