<template>
    <div id="app">
        <router-view />
    </div>
</template>

<script>
export default {
    created() {
       
    },
};
</script>
<style lang="scss">
#app {
    font-family: PingFang SC, Arial, Hiragino Sans GB, Microsoft YaHei,
        sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 14px;
    &::-webkit-scrollbar {
        display: none;
    }
}
</style>
