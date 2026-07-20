<template>
  <div class="evaluate">
    <div class="goods">
      <div class="goods-hd lighter row">
        <div class="info row flex1">商品信息</div>
        <div class="price row-center">单价</div>
        <div class="num row-center">数量</div>
        <div class="total row-center">合计</div>
      </div>
      <div class="goods-con">
        <div class="goods-item row">
          <div class="info row flex1">
            <img class="goods-img" :src="goodsInfo.image" alt="" />
            <div class="goods-info flex1">
              <div class="goods-name line2">
                {{ goodsInfo.name }}
              </div>
              <div class="sm lighter mt8">{{goodsInfo.spec_value_str}}</div>
            </div>
          </div>
          <div class="price row-center"><price-formate :price="goodsInfo.goods_price" weight="400" /></div>
          <div class="num row-center">{{ goodsInfo.goods_num }}</div>
          <div class="total row-center"><price-formate :price="goodsInfo.total_price" weight="400" /></div>
        </div>
      </div>
    </div>
    <div class="evaluate-con">
      <div class="goods-rate">
        <div class="row item">
          <div class="name">商品评价</div>
          <el-rate
            v-model="goodsRate"
            show-text
            text-color="#FF9E2C"
            :texts="goodsTexts"
          ></el-rate>
        </div>
        <div class="row item">
          <div class="name">描述相符</div>
          <el-rate v-model="descRate"></el-rate>
        </div>
        <div class="row item">
          <div class="name">服务态度</div>
          <el-rate v-model="serverRate"></el-rate>
        </div>
        <div class="row item">
          <div class="name">配送服务</div>
          <el-rate v-model="deliveryRate"></el-rate>
        </div>
      </div>
      <div class="evaluate-input row">
        <div class="name">商品评价</div>
        <div>
          <el-input
            type="textarea"
            placeholder="收到商品您有什么想法或者反馈，用几个字来评价下商品吧～"
            v-model="comment"
            maxlength="150"
            :rows="6"
            show-word-limit
            resize="none"
          >
          </el-input>
          <div class="upload mt16">
            <upload :limit="9" @success="onSuccess" />
            <div class="muted mt8">
              最多可上传9张图片，支持jpg、png格式，图片大小1M以内
            </div>
          </div>
          <div
            class="submit-btn white bg-primary mt16 row-center"
            @click="onSubmit"
          >
            提交评价
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Upload from "~/components/public/upload";
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
  async asyncData({ $get, query }) {
    const id = query.id;
    let { data } = await $get("goods_comment/getGoods", {
      params: { id },
    });
    return {
      goodsInfo: data,
      id,
    };
  },
  layout: "user_lauout",
  components: {
    Upload,
  },
  data() {
    return {
      goodsInfo: {},
      goodsRate: 0,
      descRate: 0,
      serverRate: 0,
      deliveryRate: 0,
      comment: "",
      fileList: [],
      goodsTexts: ["差评", "差评", "中评", "好评", "好评"],
    };
  },
  methods: {
    onSuccess(res) {
      this.fileList = res.map((item) => item.response.data);
    },
    onSubmit() {
      let {
        goodsRate,
        fileList,
        comment,
        deliveryRate,
        descRate,
        serverRate,
      } = this;
      let image = fileList.map((item) => item.url);
      if (!goodsRate)
        return this.$message({
          message: "请对商品进行评分",
          type: "error",
        });
      if (!descRate)
        return this.$message({
          message: "请对描述相符进行评分",
          type: "error",
        });
      if (!serverRate)
        return this.$message({
          message: "请对服务态度进行评分",
          type: "error",
        });
      if (!deliveryRate)
        return this.$message({
          message: "请对配送服务进行评分",
          type: "error",
        });
      this.$post("goods_comment/addGoodsComment", {
        id: parseInt(this.id),
        goods_comment: goodsRate,
        service_comment: serverRate,
        express_comment: deliveryRate,
        description_comment: descRate,
        comment,
        image,
      }).then((res) => {
        if (res.code == 1) {
          this.$message({
            message: "评价成功",
            type: "success",
          });
          setTimeout(() => {
            this.$router.replace({
              path: "/user/evaluation",
              query: {
                type: 2,
              },
            });
          }, 1500);
        }
      });
    },
  },
};
</script>

<style lang="scss" scoped>
.evaluate {
  padding: 0 10px;
  .goods {
    .goods-hd,
    .goods-con {
      padding: 10px 20px;
      border-bottom: 1px solid #e5e5e5;
      .goods-item {
        padding: 10px 0;
      }
    }
    .info {
      .goods-img {
        width: 72px;
        height: 72px;
        margin-right: 10px;
      }
    }
    .price,
    .num,
    .total {
      width: 150px;
    }
  }
  .evaluate-con {
    padding: 20px;
    .goods-rate {
      .item {
        margin-bottom: 18px;
      }
    }
    .name {
      margin-right: 24px;
      flex: none;
    }
    .evaluate-input {
      align-items: flex-start;
      .el-textarea {
        width: 630px;
      }
      .submit-btn {
        width: 100px;
        height: 32px;
        cursor: pointer;
      }
    }
  }
}
</style>