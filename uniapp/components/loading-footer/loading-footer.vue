<template>
<view class="loading-footer row-center" :style="'color: ' + color">
    <view v-if="status === 'loading' " class="loading row">
		<loading :color="color" class="mr20"></loading>
        <text :style="'color: ' + color">{{loadingText}}</text>  
    </view>
    <view v-if="status === 'finished'" class="finished">{{ finishedText }}</view>
    <view v-if="status === 'error'" @click="onRefresh">{{ errorText }}</view>
    <view v-if="status === 'empty'" class="empty">
        <text v-if="!slotEmpty">暂无数据</text>
        <slot name="empty" v-else></slot>
    </view>
</view>
</template>

<script>

export default {
  data() {
    return {};
  },

  components: {
  },
  props: {
    status: {
      type: String,
      default: 'loading'
    },
    errorText: {
      type: String,
      default: '加载失败，点击重新加载'
    },
    loadingText: {
      type: String,
      default: '加载中...'
    },
    finishedText: {
      type: String,
      default: '我可是有底线的～'
    },
    slotEmpty: {
      type: Boolean,
      default: false
    },
    color: {
      type: String,
      default: "#666"
    }
  },
  methods: {
    onRefresh() {
      this.$emit('refresh');
    }

  }
};
</script>
<style>
.loading-footer {
    padding: 30rpx 0;
    color: #666;
}
</style>