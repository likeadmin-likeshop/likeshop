<template>
  <div class="content">
    <div v-html="content"></div>
  </div>
</template>

<script>
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
  layout: "void",
  async asyncData({ $get, query }) {
    let content;
    if (query.type == 1) {
      const { data } = await $get("policy/service");
      content = data;
    } else if (query.type == 2) {
      const { data } = await $get("policy/privacy");
      content = data;
    }
    return { content };
  },
  data() {
    return {
      content: "",
    };
  },
};
</script>
<style lang="scss">
.content {
  padding: 30px;
  max-width: 1200px;
  margin: 0 auto;
  background-color: #ffffff;
}
</style>
