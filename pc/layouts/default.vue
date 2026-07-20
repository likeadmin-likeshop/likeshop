<template>
  <div class="default-layout column">
    <v-header></v-header>
    <main class="content-container wrapper1180 flex1">
      <nuxt />
    </main>
    <v-footer></v-footer>
    <float-nav></float-nav>
  </div>
</template>
<script>
import VHeader from "~/components/layout/header";
import VFooter from "~/components/layout/footer";
import FloatNav from "~/components/layout/floatNav";
export default {
  components: {
    VHeader,
    VFooter,
    FloatNav
  },
};
</script>
<style scoped>
.default-layout {
  min-height: 100vh;
}

</style>
