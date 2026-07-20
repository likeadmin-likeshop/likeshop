<template>
  <div class="comment-list">
    <div class="comment-con">
      <template v-if="commentList.length">
        <div class="item row" v-for="(item, index) in commentList" :key="index">
          <div class="avatar mr8">
            <img :src="item.avatar" alt="" />
          </div>
          <div class="content flex1">
            <div>{{ item.nickname }}</div>
            <div class="lighter" style="margin: 5px 0 10px">
              <span>{{ item.create_time }}</span>
              <span>|</span>
              <span>规格：{{ item.spec_value_str }}</span>
            </div>
            <div>
              {{ item.comment }}
            </div>
            <div class="comment-imglist row">
              <div class="item" v-for="(img, index) in item.image" :key="index">
                <el-image
                  :preview-src-list="item.image"
                  :src="img"
                  style="height: 100%; width: 100%"
                  fit="contain"
                ></el-image>
              </div>
            </div>
            <div class="row reply mt16" v-if="item.reply">
              <div class="primary flexnone">商家回复：</div>
              <div class="lighter">
                {{ item.reply }}
              </div>
            </div>
          </div>
        </div>
        <div class="pagination row-center" style="padding: 38px 0" v-if="count">
          <el-pagination
            background
            hide-on-single-page
            layout="prev, pager, next"
            :total="count"
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
    </div>
  </div>
</template>

<script>
export default {
  components: {},
  props: {
    list: {
      type: Array,
      default: () => [],
    },
    type: Number,
    goodsId: [String, Number],
  },
  data() {
    return {
      commentList: [],
      count: 0,
      page: 1,
    };
  },
  created() {
    this.getCommentList();
  },
  methods: {
    async getCommentList() {
      const { data, code } = await this.$get("goods_comment/lists", {
        params: {
          id: this.type,
          goods_id: this.goodsId,
          page_size: 10,
          page_no: this.page,
        },
      });
      if (code == 1) {
        this.commentList = data.list;
        this.count = data.count;
      }
    },
    changePage(current) {
      this.page = current;
      this.getCommentList();
    },
  },
};
</script>

<style lang="scss" scoped>
.comment-list {
  .comment-con {
    & > .item {
      padding: 20px;
      border-bottom: 1px dashed #e5e5e5;
      align-items: flex-start;
      .avatar {
        img {
          border-radius: 50%;
          width: 44px;
          height: 44px;
        }
      }
      .comment-imglist {
        margin-top: 10px;
        .item {
          width: 80px;
          height: 80px;
          margin-right: 6px;
        }
      }
      .reply {
        background-color: #f2f2f2;
        align-items: flex-start;
        padding: 10px;
      }
    }
  }
}
</style>