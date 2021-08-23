<template>
<view :class="'loading ' + ( type == 'flex' ? 'flex' : '' )" :style="{backgroundColor, }">
    <loading :color="color" :size="size"></loading>
</view>
</template>

<script>

export default {
  data() {
    return {};
  },
  props: {
    type: {
      type: String,
      default: 'fixed'
    },
		
	backgroundColor: {
		type: String,
		default: '#fff'
	},
	color: {
		type: String,
	},
	size: {
		type: Number,
		default: 40
	}
  },
  methods: {}
};
</script>
<style>
.loading {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loading.flex {
    position: static;
    flex: 1;
    width: 100%;
}
</style>