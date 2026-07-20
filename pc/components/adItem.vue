<template>
  <div class="ad-item" @click.stop="goPage(item)">
    <el-image :src="item.image"  style="width: 100%; height: 100%"></el-image>
  </div>
</template>

<script>
import { paramsToStr } from "~/utils/tools";
export default {
  components: {},
  props: {
    item: {
      type: Object,
      default: () => ({}),
    },
  },
  methods: {
    goPage(item) {
      let { link_type, link, params } = item;
      switch (link_type) {
        case 3:
          window.open(item.link);
          break;
        default:
          if (["/goods_details"].includes(link)) {
            link += `/${params.id}`;
          } else {
            link += paramsToStr(params);
          }
          this.$router.push({
            path: link,
          });
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.ad-item {
  width: 100%;
  height: 100%;
  cursor: pointer;
}
</style>