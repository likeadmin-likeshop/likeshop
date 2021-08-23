<template>
<view class="container">
  <view class="my-lottery row-between wrap" v-if="status">
    <view v-for="(item, index) in lotteryData" :key="index" :class="(item.type == 1 ? 'lotty-btn' : 'lottery-item') + ' column-center ' + (activeIndex == index ? 'active' : '')" style="width: 180rpx;height: 180rpx;" @tap="onLotteryClick(item.type)">
      <image :src="item.url" style="width: 80rpx;height: 80rpx"></image>
      <text :class="item.type == 1 ? 'xs mt20' : 'nr mt10'" :style="'color: ' + (item.type == 1 ? '#ED3720' : '#743C3C') + ';font-weight: 600;'">{{item.name}}</text>
    </view>
  </view>
  <view class="activity-null row-center" v-else>
    活动暂未开始
  </view>
</view>
</template>

<script>
import { userLottery } from "@/api/user"; // 顺序
// 顺序
const LOTTERY_ORDER = [0, 1, 2, 5, 8, 7, 6, 3];

export default {
  data() {
    return {
      // 是否在抽奖中
      isLottery: false,
      // 表示位移的总次数
      currentIndex: 0,
      // 中奖索引
      luckyOrder: -1,
      // 转盘的旋转速度，实际是转盘旋转间隔时间setTimeout的值
      speed: 200,
      // 当前活跃的坐标
      activeIndex: -1
    };
  },

  components: {},
  props: {
    // 转盘数据
    lotteryData: {
      type: Array,
      default: () => []
    },
    // 最少转动多少圈
    circleTimes: {
      type: Number,
      default: 30
    },
    status: {
      type: Number | String,
      default: 0
    }
  },

  beforeMount() {
    this.lotteryTimer = null;
  },

  methods: {
    onLotteryClick(type) {
      if (type == 1) {
        this.start();
      }
    },

    userLotteryFun() {
      userLottery().then(res => {
        if (res.code == 1) {
          let {
            id
          } = res.data;
          let index = this.lotteryData.findIndex(item => {
            return item.id == id;
          });

          switch (index) {
            case 0:
              index = 0;
              break;

            case 1:
              index = 1;
              break;

            case 2:
              index = 2;
              break;

            case 3:
              index = 7;
              break;

            case 5:
              index = 3;
              break;

            case 6:
              index = 6;
              break;

            case 7:
              index = 5;
              break;

            case 8:
              index = 4;
              break;

            default:
              index = -1;
              break;
          }
          this.luckyOrder = index
          this.result = res.data.text; // console.log("id:", id, "index", index, LOTTERY_ORDER[index], "####");
          // console.log(this.data.lotteryData, "data");

          this.$emit("begin");
          this.startLotteryFun();
        }
      });
    },

    startLotteryFun() {
      let {
        currentIndex
      } = this;
      let activeIndex = this.getHighLightItemIndexFun(currentIndex);
        this.activeIndex = activeIndex
        const currentOrder = currentIndex % 8;
        this.currentIndex = ++currentIndex;
        if (currentIndex > this.circleTimes + 8 && this.luckyOrder == currentOrder) {
          if (this.lotteryTimer) {
            clearTimeout(this.lotteryTimer);
          }
        
          setTimeout(() => {
            this.stopCallbackFun(LOTTERY_ORDER[this.luckyOrder]);
            setTimeout(() => {
              this.reset();
              this.activeIndex = -1
            }, 1000);
          }, 500);
        } else {
          if (currentIndex < this.circleTimes) {
            this.speed -= 10
          } else if (currentIndex > this.circleTimes + 8 && this.luckyOrder == currentOrder + 1) {
            this.speed += 80
          } else {
            this.speed += 20
          }
        
          if (this.speed < 50) {
            this.speed = 50
          }
        
          this.lotteryTimer = setTimeout(this.startLotteryFun.bind(this), this.speed);
        }
    },

    // luckyIndex: 中奖在列表中的index
    stopCallbackFun(luckyIndex) {
      this.$emit("finish", {
        detail: this.result
      });
    },

    // 根据 currentIndex 获取当前应该高亮列表中的第几个奖品
    getHighLightItemIndexFun(currentIndex) {
      return LOTTERY_ORDER[currentIndex % LOTTERY_ORDER.length];
    },

    // 根据奖品在数据中的index，获取奖品在转盘中的位置
    getLuckyItemOrderFun(index) {},

    start(e) {
      // 如果还没开始转动,开始转动转盘
      if (!this.isLottery) {
        this.isLottery = true
        this.userLotteryFun();
      }
    },

    // 停止转动
    stop(index, callback) {
      this.luckyOrder = this.getLuckyItemOrderFun(index);
      console.log("stop, ###", index);
      this._stopCallback = callback;
    },

    // 重设转盘
    reset() {
      this.isLottery = false;
      this.currentIndex = 0;
      this.speed = 100;
      this.luckyOrder = -1
    }

  }
};
</script>
<style>
.my-lottery {
  background-image: url(../../static/images/choujiang_light.png);
  width: 640rpx;
  height: 640rpx;
  background-size: 100% 100%;
  padding: 35rpx 40rpx;
}

.my-lottery .lottery-item {
  background-image: url(../../static/images/choujiang_block.png);
  background-size: 100% 100%;
}

.my-lottery .lotty-btn {
  background-image: url(../../static/images/choujiang_button.png);
  background-size: 100% 100%;
}

.container .activity-null {
  color: #FEE5BF;
  font-size: 40rpx;
  width: 640rpx;
  height: 640rpx;
}

.active {
  opacity: 0.7;
}
</style>