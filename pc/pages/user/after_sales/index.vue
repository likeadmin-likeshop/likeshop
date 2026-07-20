<template>
  <div class="after-sales">
    <div class="after-sales-header">
      <el-tabs v-model="activeName" @tab-click="handleClick">
        <el-tab-pane
        v-for="(item, index) in afterSale"
        :key="index"
        :label="item.name"
        :name="item.type"
        >
          <template v-if="item.list.length">
            <after-sales-list :type="item.type" :lists="item.list" @refresh="getAfterSaleList" @show="onInputShow" />
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
        </el-tab-pane>
      </el-tabs>
    </div>
    <input-express v-model="showInput" :aid="aid" @success="getAfterSaleList" />
  </div>
</template>

<script>
import {AfterSaleType} from '@/utils/type'
export default {
  head() {
    return {
      title: this.$store.getters.headTitle,
      link: [{ rel: "icon", type: "image/x-icon", href: this.$store.getters.favicon}],
    };
  },
  layout: "user_lauout",
  data() {
    return {
      activeName: AfterSaleType.NORMAL,
      afterSale: [
        {
          type: AfterSaleType.NORMAL,
          list: [],
          name: "售后申请",
          count: 0,
          page: 1,
        },
        {
          type: AfterSaleType.HANDLING,
          list: [],
          name: "处理中",
          count: 0,
          page: 1,
        },
        {
          type: AfterSaleType.FINISH,
          list: [],
          name: "已处理",
          count: 0,
          page: 1,
        }
      ],
      showInput: false,
      aid: -1
    }
  },
  async asyncData({ $get, $post }) {
    let afterList = [];
    let res = await $get("after_sale/lists", {params: {page_no: 1, page_size: 10}})
    if(res.code == 1) {
      const {list, count} = res.data
      afterList = {list, count};
    }
    return {
      afterList: afterList 
    }
  },
  methods: {
    handleClick() {
      this.getAfterSaleList()
    },

    onInputShow(e) {
      this.aid = e;
      this.showInput = true;
    },

    changePage(val) {
      this.afterSale.some((item) => {
        if (item.type == this.activeName) {
          item.page = val;
        }
      });
      this.getAfterSaleList();
    },
    async getAfterSaleList() {
      const {activeName, afterSale} = this;
      const item = afterSale.find((item) => item.type == activeName);
      const {
        data: { list, count },
        code,
      } = await this.$get("after_sale/lists", {
        params: {
          page_size: 10,
          page_no: item.page,
          type: activeName,
        },
      })
      if(code == 1) {
        this.afterList = {list, count};
      }
    }
  },
  watch: {
    afterList: {
      immediate: true,
      handler(val) {
        this.afterSale.some((item) => {
          if (item.type == this.activeName) {
            Object.assign(item, val);
            return true;
          }
        });
      },
    },
  },
};
</script>

<style lang="scss">
  .after-sales {
   .after-sales-header {
     padding: 10px;
   } 
  }
</style>