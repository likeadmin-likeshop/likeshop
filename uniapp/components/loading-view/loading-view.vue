<template>
<view :class="'loading ' + ( type == 'flex' ? 'flex' : '' )">
    <loading></loading>
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
    background-color: #fff;
}

.loading.flex {
    position: static;
    flex: 1;
    width: 100%;
}
</style>