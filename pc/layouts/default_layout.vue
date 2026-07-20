<template>
  <div class="default-layout column">
    <nuxt-link class="default-header" to="/" v-if="publicData.logo">
        <img class="header-logo" :src="publicData.logo" />
    </nuxt-link>
    <div class="default-main flex1">
      <nuxt />
    </div>
    <v-footer />
  </div>
</template>

<script>
import VFooter from "~/components/layout/footer";
import { mapState } from "vuex";
export default {
  components: {
    VFooter
  },
  data() {
    return {

    }
  },
  created() {
  },
  computed: {
     ...mapState(['publicData'])
  },
  methods: {
   
  }
};
</script>

<style lang="scss" scoped>
.default-layout {
  min-height: 100vh;
  .default-header {
    padding: 22px 0;
    background-color: white;
    min-width: 1180px;
    border-bottom: 1px solid #e5e5e5;
    .header-logo {
      margin-left: 370px;
      height: 56px;
    }
  }
  .default-main {
    display: flex;
    flex-direction: column;
  }
}
</style>
