<template>
  <div class="user-evaluate">
    <el-tabs v-model="type" @tab-click="handleClick">
      <el-tab-pane
        v-for="(item, index) in evaluate"
        :key="index"
        :label="item.name"
        :name="item.type"
      >
      <template v-if="item.list.length">
          <evaluation-list :list="item.list" :type="item.type" />
          <div class="pagination row-center" v-if="item.count">
            <el-pagination
              hide-on-single-page
              background
              layout="prev, pager, next"
              :total="item.count"
              prev-text="上一页"
              next-text="下一页"
              :page-size="10"
              @current-change="changePage"
            >
            </el-pagination>
          </div>
        </template>
        <null-data
          v-else
          :img="require('~/assets/images/news_null.png')"
          text="暂无评价~"
        ></null-data>
      </el-tab-pane>
    </el-tabs>
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
  watchQuery: true,
  async asyncData({ $get, query }) {
    const type = query.type || "1";
    let { data:{list, count }} = await $get("goods_comment/getOrderGoods", {
      params: { type: type,  page_size: 10 },
    });
    return {
      commentList: { list, count },
      type,
    };
  },
  layout: "user_lauout",
  components: {},
  data() {
    return {
      evaluate: [
        {
          type: "1",
          list: [],
          name: "待评价",
          count: 0,
          page: 1,
        },
        {
          type: "2",
          list: [],
          name: "已评价",
          count: 0,
          page: 1,
        },
      ],
    };
  },
  methods: {
     handleClick() {
      this.getEvaluateList();
    },
    async getEvaluateList() {
      const { type, evaluate } = this;
      const item = evaluate.find((item) => item.type == type);
      const {
        data: { list, count },
        code,
      } = await this.$get("goods_comment/getOrderGoods", {
        params: {
          page_size: 10,
          page_no: item.page,
          type,
        },
      });
      if (code == 1) {
        this.commentList = { list, count };
      }
    },
    changePage(val) {
      this.evaluate.some((item) => {
        if (item.type == this.type) {
          item.page = val;
        }
      });
      this.getEvaluateList();
    },
  },
  watch: {
    commentList: {
      immediate: true,
      handler(val) {
        this.evaluate.some((item) => {
          if (item.type == this.type) {
            Object.assign(item, val);
            console.log(item);
            return true;
          }
        });
      },
    },
  }
};
</script>

<style lang="scss">
.user-evaluate {
  padding: 20px 0;
}
</style>