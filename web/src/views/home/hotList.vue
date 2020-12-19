<template>
  <div class="hot-list">
    <div class="header">
      <div class="title row mb10">
        <img src="@A/images/icon_paixu.png" class="icon mr10" />
        <div class="xs white">根据销量、搜索、好评等综合得出</div>
      </div>
      <!-- <swipers imgUrls="{{bannerList}}" height="276rpx" /> -->
      <div class="banner">
        <ad-swiper :id="15" height="142px" padding="0px" />
      </div>
    </div>
    <div class="main">
      <van-list
        v-if="!empty"
        v-model="loading"
        :finished="finished"
        finished-text="没有更多了"
        @load="$getHotGoods"
      >
        <goods-lists type="hot" :lists="goodsList" />
      </van-list>
      <div class="data-null column-center" v-else>
        <div class="img-null">
          <img src="@A/images/goods_null.png"/>
        </div>
        <div class="muted nr">
          暂无热销商品~
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import GoodsLists from "@C/GoodsList";
import { getHotGoods } from "@API/store";
import AdSwiper from "@C/AdSwiper"
export default {
  name: "hotList",
  data() {
    return {
      goodsList: [],
      page: 1,
      loading: false,
      finished: false,
      empty: false,
    };
  },
  components: {
    GoodsLists,
    AdSwiper
  },
  methods: {
    $getHotGoods() {
      let {finished, goodsList} = this;
      this.loading = true;
      if(finished) return;
      getHotGoods({page_no: this.page}).then(res => {
        if (res.code == 1) {
          this.loading = false;
          let {more, list} = res.data;
          this.goodsList.push(...list);
          this.page ++;
          if(!more) {
            this.finished = true;
          }
          if(this.goodsList.length <= 0) {
            this.empty = true;
            return;
          }
        }
      });
    }
  },
  created() {
  }
};
</script>

<style lang="scss" scoped>
.hot-list {
    background-image: url(../../assets/images/bg_hotProduct.png);
    background-size: 100% 165px;
    background-repeat: no-repeat;
    padding: 31px 15px 0;
    min-height: 165px;
  .header {
    .banner {
      // height: 142px;
    }
  }
  .main {
    padding: 10px 0px;
    .data-null {
      padding-top: 100px;
      img {
        width: 100%;
        height: 100%;
      }
    }
  }
}
</style>