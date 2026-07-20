<template>
  <div class="user-order">
    <el-tabs v-model="activeName" @tab-click="handleClick">
      <el-tab-pane
        v-for="(item, index) in order"
        :key="index"
        :label="item.name"
        :name="item.type"
      >
        <template v-if="item.list.length">
          <order-list :list="item.list" @refresh="getOrderList" />
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
          :img="require('~/assets/images/order_null.png')"
          text="暂无订单~"
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
       link: [{ rel: "icon", type: "image/x-icon", href: this.$store.getters.favicon}],
    };
  },
  layout: "user_lauout",
  async asyncData({ $get, $post }) {
    const {
      data: { list, count },
      code,
    } = await $get("order/lists", {
      params: {
        page_size: 10,
      },
    });
    if (code == 1) {
      return {
        orderList: { list, count },
      };
    }
  },
  components: {},
  data() {
    return {
      activeName: "all",
      order: [
        {
          type: "all",
          list: [],
          name: "全部",
          count: 0,
          page: 1,
        },
        {
          type: "pay",
          list: [],
          name: "待付款",
          count: 0,
          page: 1,
        },
        {
          type: "delivery",
          list: [],
          name: "待收货",
          count: 0,
          page: 1,
        },
        {
          type: "finish",
          list: [],
          name: "已完成",
          count: 0,
          page: 1,
        },
        {
          type: "close",
          list: [],
          name: "已关闭",
          count: 0,
          page: 1,
        },
      ],
    };
  },
  methods: {
    handleClick() {
      this.getOrderList();
    },
    async getOrderList() {
      const { activeName, order } = this;
      const item = order.find((item) => item.type == activeName);
      const {
        data: { list, count },
        code,
      } = await this.$get("order/lists", {
        params: {
          page_size: 10,
          page_no: item.page,
          type: activeName,
        },
      });
      if (code == 1) {
        this.orderList = { list, count };
      }
    },
    changePage(val) {
      this.order.some((item) => {
        if (item.type == this.activeName) {
          item.page = val;
        }
      });
      this.getOrderList();
    },
  },
  watch: {
    orderList: {
      immediate: true,
      handler(val) {
        this.order.some((item) => {
          if (item.type == this.activeName) {
            Object.assign(item, val);
            console.log(item);
            return true;
          }
        });
      },
    },
  },
};
</script>

<style lang="scss">
.user-order {
  padding: 20px 0;
}
</style>