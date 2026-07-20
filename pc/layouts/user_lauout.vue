<template>
  <div class="default-layout column">
    <v-header></v-header>
    <main class="content-container wrapper1180 row flex1">
      <aslide-nav />
      <div class="content bg-white flex1 ml16">
      <nuxt />
      </div>
    </main>
    <v-footer></v-footer>
    <float-nav></float-nav>
  </div>
</template>
<script>
import VHeader from "~/components/layout/header";
import VFooter from "~/components/layout/footer";
import AslideNav from "~/components/layout/aslideNav";
import FloatNav from "~/components/layout/floatNav";
export default {
  components: {
    VHeader,
    VFooter,
    AslideNav,
    FloatNav
  },
};
</script>
<style scoped>
.default-layout {
  min-height: 100vh;
}
.content-container {
  padding: 24px 0;
  align-items: flex-start;
}
.content-container > .content {
  min-height: 680px;
}
</style>
