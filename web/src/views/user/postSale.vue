// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------


<template>
  <div class="post-sale">
    <van-tabs
      v-model="active"
      line-width="40"
      :color="primaryColor"
      :title-active-color="primaryColor"
      title-inactive-color="#333333"
      sticky
      @change="onChange"
    >
      <van-tab :title="items.name" :name="items.type" v-for="(items, index) in afterSale" :key="index">
          <post-sale-list :showType="items.type" v-if="items.isShow" :id="items.type"></post-sale-list>
      </van-tab>
    </van-tabs>
  </div>
</template>

<script>
import { AfterSaleType } from '@U/type'
import PostSaleList from '@C/PostSaleList'
export default {
  name: "postSale",
  components: {
    PostSaleList,
  },
  data() {
    return {
      active: AfterSaleType.NORMAL,
      afterSale: [
        {
          name: "售后申请",
          type: AfterSaleType.NORMAL,
          isShow: true,
        },
        {
          name: "处理中",
          type: AfterSaleType.HANDLING,
          isShow: false,
        },
        {
          name: "已处理",
          type: AfterSaleType.FINISH,
          isShow: false,
        },
      ],
    };
  },
  methods: {
    onChange(name) {
      let index = this.afterSale.findIndex(item => {
        return item.type == name
      });
      if(index != -1) {
        this.afterSale[index].isShow = true;
      }
    }
  },
  created() {},
  mounted() {
    let {active} = this.$route.query;
    if(active) {
      this.active = active
    }
    // this.onChange(this.active)
  },
};
</script>

<style lang="scss" scoped>
img {
  width: 100%;
  height: 100%;
}
.post-sale {
  .sale-list {
    padding: 10px 0;
    .sale-item {
      .sale-header {
        padding: 10px 12px;
        .store-name {
          font-weight: bold;
          font-family: PingFang SC;
          line-height: 20px;
        }
      }
      .sale-goods-show {
        padding: 10px 12px;
        .goods-img {
          height: 80px;
          width: 80px;
        }
        .goods-desc {
          margin-left: 12px;
        }
        .sale-status {
          padding: 10px 30px;
          background-color: #f6f6f6;
        }
      }
      .sale-footer {
        padding: 0 12px 11px;
        .btn {
          padding: 5px 17px;
          font-family: PingFang SC;
          border: 1px solid $--color-primary;
        }
        .grey-btn {
          border: 1px solid #cccccc;
          padding: 5px 17px;
          font-family: PingFang SC;
        }
      }
    }
  }
}
</style>