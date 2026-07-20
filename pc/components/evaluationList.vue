<template>
  <div class="evaluation-list">
    <div class="list1" v-if="type == 1">
      <div class="item row" v-for="(item, index) in list" :key="index">
        <div class="goods">
          <div class="goods-item row">
            <el-image class="goods-img" :src="item.image" alt="" />
            <div class="goods-info flex1">
              <div class="goods-name  row-between" style="align-items: flex-start;">
                <div class="line1" style="width: 600px">
                  {{ item.goods_name }}
                </div>
                <div class="operate row-end">
                  <nuxt-link
                    :to="`/user/evaluation/evaluate?id=${item.id}`"
                    class="btn lighter sm row-center"
                    >去评价</nuxt-link
                  >
                </div>
              </div>
              <div class="sm lighter mb8">{{item.spec_value_str}}</div>
              <div class="primary"><price-formate :price="item.goods_price"  /></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="list2" v-if="type == 2">
      <div class="item" v-for="(item, index) in list" :key="index">
          <div class="muted sm">评价时间：{{ item.create_time }}</div>
          <div class="mt10">
            {{ item.comment }}
          </div>
          <div class="comment-imglist row">
            <div
              class="item"
              v-for="(img, index) in item.comment_image"
              :key="index"
            >
              <el-image
                :preview-src-list="item.comment_image"
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
          <div class="goods row mt16">
             <el-image class="goods-img" :src="item.image" alt="" />
             <div class="goods-info ml10">
               <div class="line1 mb8">{{item.goods_name}}</div>
                 <div class="sm lighter mb8">{{item.spec_value_str}}</div>
               <div class="mt8 primary">
                 <price-formate :price="item.goods_price"  />
               </div>
             </div>
          </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    list: {
      type: Array,
      default: () => [],
    },
    type: {
      type: String,
    },
  },
};
</script>

<style lang="scss" scoped>
.evaluation-list {
  padding: 0 10px;
  .list1 {
    .item {
      border-bottom: 1px solid #e5e5e5;
      .item-hd {
        height: 40px;
        background: #f2f2f2;
        padding: 0 20px;
        .status {
          width: 300px;
          text-align: right;
        }
      }
      align-items: stretch;
      .goods {
        padding: 17px 0;
        .goods-item {
          padding: 10px 20px;
          .goods-img {
            margin-right: 10px;
            width: 72px;
            height: 72px;
          }
        }
      }
      .operate {
        width: 200px;
        .btn {
          width: 104px;
          height: 32px;
          border: 1px solid $-color-border;
          border-radius: 2px;
          cursor: pointer;
        }
      }
    }
  }

  .list2 {
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
        background-color: #FFFCE3;
        align-items: flex-start;
        padding: 10px;
      }
      .goods {
        .goods-img {
          width: 72px;
          height: 72px;
        }
      }
    }
  }
}
</style>