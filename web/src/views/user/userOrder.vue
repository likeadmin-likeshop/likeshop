<template>
    <div class="user-order">
        <van-tabs :active="active" line-width="40" swipe-threshold="5" @change="onChange">
            <van-tab v-for="(item, index) in order" :title="item.name" :name="item.type" :key="index" >
                <order-list v-if="item.isShow" :order-type="item.type" :id="item.type"></order-list>
            </van-tab>
        </van-tabs>
    </div>
</template>

<script>
import OrderList from "@C/OrderList";
import { orderType } from "@/utils/type";
export default {
    name: "userOrder",
    components: {
        OrderList,
    },
    data() {
        return {
            order: [
                {
                    name: "全部",
                    type: orderType.ALL,
                    isShow: false,
                },
                {
                    name: "待付款",
                    type: orderType.PAY,
                    isShow: false,
                },
                {
                    name: "待收货",
                    type: orderType.DELIVERY,
                    isShow: false,
                },
                {
                    name: "已完成",
                    type: orderType.FINISH,
                    isShow: false,
                },
                {
                    name: "已关闭",
                    type: orderType.CLOSE,
                    isShow: false,
                },
            ],
            active: orderType.ALL,
        };
    },
    created() {
        let type = this.$route.query.type || orderType.ALL
		this.changeShow(type)
    },
    mounted() {},
    methods: {
        changeShow(type) {
            const { order } = this
            let index = order.findIndex((item) => {
                return item.type == type;
            });
            if (index != -1) {
                this.active = type
                this.order[index].isShow = true
            }
        },
        onChange(e) {
            this.changeShow(e)
        }
    },
};
</script>

<style lang="scss" scoped>
</style>