<template>
  <div class="bg-white column-center null-data">
    <img :style="imgStyle" class="img-null" :src="img" alt="" />
    <div class="muted mt8">{{ text }}</div>
  </div>
</template>

<script>
export default {
  components: {},
  props: {
    img: {
      type: String,
    },
    text: {
      type: String,
      default: "暂无数据",
    },
    imgStyle: {
      type: String,
      default: ''
    }
  },
  methods: {},
};
</script>

<style lang="scss" scoped>
.null-data {
  padding: 100px;
  .img-null {
    width: 150px;
    height: 150px;
  }
}
</style>