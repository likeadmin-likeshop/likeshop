<template>
  <div class="coupons-list row">
    <template v-for="(item, index) in couponsList">
      <div
        v-show="item.isShow"
        class="item"
        :key="index"
        @click.capture="onHandle(item.id)"
      >
        <div
          :class="[
            'info white',
            { gray: type == 2 || type == 1 || item.is_get },
          ]"
        >
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
              <div class="xs line1">{{ item.use_condition }}</div>
            </div>
          </div>
          <div class="info-time xs">{{ item.use_time_tips }}</div>
        </div>
        <div class="tips row-between" @click.stop="onShowTips(index)">
          <div class="muted xs">{{ item.coupon_type }}</div>
          <div v-if="item.tips">
            <i
              :class="
                showTips[index] ? 'el-icon-arrow-up' : 'el-icon-arrow-down'
              "
            ></i>
            <div
              class="tips-con xs lighter"
              v-if="item.tips && showTips[index]"
            >
              {{ item.tips }}
            </div>
          </div>
          <div class="primary sm" v-if="type == 3 && !item.is_get">
            立即领取
          </div>
        </div>
        <img
          v-if="item.is_get"
          class="receice"
          src="~/assets/images/coupons_img_receive.png"
          alt=""
        />
        <div class="choose xs" v-if="type == 4 && id == item.id">已选择</div>
      </div>
    </template>

    <div class="more muted" v-if="showMore && list.length > 4" @click="changeShow">
      {{ isMore ? '收起' :  '更多' }}
      <i :class="isMore ? 'el-icon-arrow-up' : 'el-icon-arrow-down'"></i>
    </div>
  </div>
</template>

<script>
import { mapActions } from "vuex";
export default {
  props: {
    list: {
      type: Array,
      default: () => [],
    },
    type: {
      type: Number,
    },
    showMore: {
      type:   Boolean,
      default: false,
    },
  },
  data() {
    return {
      showTips: [],
      couponsList: [],
      id: "",
      isMore: false,
    };
  },
  methods: {
    ...mapActions(["getPublicData"]),
    onHandle(id) {
      this.id = id;
      const { type } = this;
      switch (type) {
        case 0:
          // 可使用
          break;
        case 1:
          break;
        // 使用
        case 2:
          break;
        //不可以用
        case 3:
          // 领券
          this.getCoupon();
          break;
        case 4:
          //使用
          if (this.selectId == id) {
            this.id = "";
          }
          this.$emit("use", this.id);
          this.selectId = this.id;
          break;
      }
    },
    async getCoupon() {
      const { msg, code } = await this.$post("coupon/getCoupon", {
        id: this.id,
      });
      if (code == 1) {
        this.$message({
          message: msg,
          type: "success",
        });
        this.getPublicData();
        this.$emit("reflash");
      }
    },
    onShowTips(index) {
      const { showTips } = this;

      this.showTips[index] = showTips[index] ? 0 : 1;
      // 拷贝数组
      this.showTips = Object.assign([], this.showTips);
    },
    changeShow() {
      this.isMore = !this.isMore
      this.list.forEach((item, index) => {
        item.isShow = true
        if(!this.isMore && index >= 4) {
          item.isShow = false
        }
      })
      this.couponsList = [...this.list]
    },
  },
  watch: {
    list: {
      handler: function (val) {
        if (val.length) {
          // 默认选中第一张
          if (this.type == 4) {
            this.id = val[0].id;
            this.selectId = this.id;
            this.$emit("use", this.id);
          }
        }
        let arr = val.map((item) => {
          return 0;
        });
        this.showTips = arr;
        this.list.forEach((item, index) => {
          item.isShow = true;
          if (this.showMore) {
            if (index >= 4) {
              item.isShow = false;
            }
          }
        });
        this.couponsList = this.list
      },
      immediate: true,
      deep: true,
    },
  },
};
</script>

<style lang="scss" scoped>
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
      &.gray {
        background-image: url("~/assets/images/bg_coupon.png");
      }
      .info-hd {
        overflow: hidden;
      }
    }
    .tips {
      position: relative;
      background-color: #f2f2f2;
      height: 30px;
      padding: 0 8px;
      .tips-con {
        width: 100%;
        left: 0;
        background-color: #f2f2f2;
        position: absolute;
        top: 30px;
        padding: 10px;
        z-index: 99;
      }
    }
    .receice {
      position: absolute;
      top: 0;
      right: 0;
      width: 58px;
      height: 45px;
    }
    .choose {
      position: absolute;
      top: 0;
      right: 0;
      background-color: #ffe72c;
      color: $-color-primary;
      padding: 1px 5px;
    }
  }
  .more {
    position: absolute;
    bottom: 20px;
    cursor: pointer;
    right: 30px;
  }
}
</style>