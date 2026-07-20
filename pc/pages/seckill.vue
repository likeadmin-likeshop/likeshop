<template>
  <div class="seckill">
    <div class="banner mt16 column">
      <el-image :src="require('~/assets/images/seckill_banner.png')"></el-image>
    </div>
    <div class="time-list">
      <client-only>
        <swiper class="swiper" ref="mySwiper" :options="swiperOptions">
          <swiper-slide
            :class="{ 'swiper-item': true, active: index === swiperIndex }"
            v-for="(item, index) in timeList"
            :key="index"
          >
            <div
              class="column-center white"
              style="width: 100%; height: 100%"
              @click="changeTime(index)"
            >
              <div class="bold xxl">{{ item.start_time }}</div>
              <div class="xs time-status">{{ item.tips }}</div>
            </div>
          </swiper-slide>
          <div class="swiper-button-prev" slot="button-prev"></div>
          <div class="swiper-button-next" slot="button-next"></div>
        </swiper>
      </client-only>
    </div>
    <div class="goods mt16">
      <template v-if="hasData">
        <goods-list type="seckill" :list="goodsList" :status="status" />
        <div
          class="pagination row-center"
          style="padding-bottom: 38px"
          v-if="count"
        >
          <el-pagination
            background
            layout="prev, pager, next"
            :total="count"
            prev-text="上一页"
            next-text="下一页"
            hide-on-single-page
            :page-size="10"
            @current-change="changePage"
          >
          </el-pagination>
        </div>
      </template>
      <null-data
        v-else
        :img="require('~/assets/images/goods_null.png')"
        text="暂无秒杀~"
      ></null-data>
    </div>
  </div>
</template>

<script>
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
  components: {},
  watchQuery: true,
  async asyncData({ $get }) {
    const { data } = await $get("seckill/seckillTime");
    let swiperIndex = data.findIndex((item) => item.status == 1);
    if (swiperIndex == -1) {
      swiperIndex = data.findIndex((item) => item.status == 0);
    }
    return { timeList:data, swiperIndex };
  },
  data() {
    return {
      page: 1,
      swiperIndex: 0,
      count: 0,
      goodsList: [],
      timeList: [],
      hasData: true,
      swiperOptions: {
        initialSlide: 0,
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
    };
  },
  created() {
    this.swiperOptions.initialSlide = this.swiperIndex;
    this.getGoods();
  },
  methods: {
    changeTime(index) {
      this.swiperIndex = index;
      this.getGoods();
      this.page = 1
      this.goodsList = []
    },
    changePage(current) {
      this.page = current;
      this.getGoods();
    },
    async getGoods() {
      const { swiperIndex, timeList, page } = this;
      const id = timeList[swiperIndex] ? timeList[swiperIndex].id : -1
      const {
        data: { list, count },
        code
      } = await this.$get("seckill/seckillGoods", {
        params: {
          page_size: 10,
          page_no: page,
          id,
        },
      });
      if(code == 1) {
        this.goodsList = list;
        this.hasData = !!list.length
        this.count = count;
      }
    },
  },
  computed: {
    status () {
      const {swiperIndex, timeList} = this
      return timeList[swiperIndex] ? timeList[swiperIndex].status : -1
    }
  }
};
</script>

<style lang="scss" scoped>
.seckill {
  .banner {
    img {
      width: 100%;
      display: block;
    }
  }
  .time-list {
    background-color: #414141;
    .swiper {
      --swiper-navigation-size: 20px;
      --swiper-navigation-color: #fff;
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
        height: 60px;
        width: 120px;
        &.active {
          background-color: $-color-primary;
          .time-status {
            background-color: #fff;
            color: $-color-primary;
          }
        }
        .time-status {
          color: #ccc;
          border-radius: 60px;
          padding: 1px 8px;
        }
      }
    }
  }
}
</style>