<template>
    <keep-alive v-if="$route.meta.keepAlive">
        <router-view />
    </keep-alive>
    <router-view v-else />
</template>

<script>
export default {
    name: "RouteView",
    components: {}
};
</script>