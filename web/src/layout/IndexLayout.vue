<template>
    <div class="layout">
        <div class="content">
            <keep-alive v-if="$route.meta.keepAlive">
                <router-view />
            </keep-alive>
            <router-view v-else />
        </div>
        <van-tabbar route :active-color="primaryColor" style="z-index: 2000">
            <van-tabbar-item replace to="/index/home">
                <span>首页</span>
                <template #icon="props">
                    <img
                        class="tab-icon"
                        :src="props.active ? home.active : home.inactive"
                    />
                </template>
            </van-tabbar-item>
            <van-tabbar-item replace to="/index/sort">
                <span>分类</span>
                <template #icon="props">
                    <img
                        class="tab-icon"
                        :src="props.active ? sort.active : sort.inactive"
                    />
                </template>
            </van-tabbar-item>
            <van-tabbar-item replace to="/index/cart" :info="cartNum == 0 ? '' : cartNum">
                <span>购物车</span>
                <template #icon="props">
                    <img
                        class="tab-icon"
                        :src="props.active ? cart.active : cart.inactive"
                    />
                </template>
            </van-tabbar-item>
            <van-tabbar-item replace to="/index/user">
                <span>我的</span>
                <template #icon="props">
                    <img
                        class="tab-icon"
                        :src="props.active ? user.active : user.inactive"
                    />
                </template>
            </van-tabbar-item>
        </van-tabbar>
    </div>
</template>

<script>
import { mapState, mapActions } from "vuex";
export default {
    name: "IndexLayout",
    components: {},
    created() {
        this.getCartNum()
    },
    data() {
        return {
            home: {
                active: require("@A/images/tab_home_s.png"),
                inactive: require("@A/images/tab_home.png"),
            },
            sort: {
                active: require("@A/images/tab_sort_s.png"),
                inactive: require("@A/images/tab_sort.png"),
            },
            cart: {
                active: require("@A/images/tab_cart_s.png"),
                inactive: require("@A/images/tab_cart.png"),
            },
            user: {
                active: require("@A/images/tab_user_s.png"),
                inactive: require("@A/images/tab_user.png"),
            },
        };
    },
    computed: {
        ...mapState(['cartNum'])
    },
    methods: {
        ...mapActions(['getCartNum'])
    },
};
</script>

<style lang="scss" scoped>
.layout {
    .content {
        padding-bottom: 50px;
    }
    .van-tabbar .tab-icon {
        width: 22px;
        height: 22px;
    }
}
</style>