// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

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