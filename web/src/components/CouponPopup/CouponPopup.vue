<template>
    <div class="coupon-popup">
        <div class="coupon-list">
            <van-radio-group v-model="radio" :checked-color="primaryColor">
                <div class="mb10" v-for="(items) in coupons" :key="items.id" @click="selectCoupon(items.id)">
                    <div class="row coupon-item">
                        <div class="price white column-center">
                            <div class="row xl">
                                <div style="margin-top: 7px">￥</div>
                                <!-- <div style="font-size: 30px;font-weight: bold">{{items.money}}</div> -->
                                <price-slice :price="items.money" firstClass="couponSize"></price-slice>
                            </div>
                            <div style="font-size: 14px;margin-top: 4px">{{items.use_condition}}</div>
                        </div>
                        <div class="info" style="flex: 1">
                            <div class="bold lg" style="margin-bottom: 9px">{{items.name}}</div>
                            <div class="row-between">
                                <div class="xxs lighter two-txt-cut">{{items.coupon_type}}</div>
                            </div>
                            <div class="xxs lighter">{{items.use_time_tips}}</div>
                        </div>
                        <van-radio v-if="type == 0" class="mr10" :name="items.id"></van-radio>
                    </div>
                    <div class="tips-container bg-white" v-if="items.tips">
                        <div class="row-between" style=" padding: 5px 10px;">
                            <div class="tips xs mt5">{{items.tips}}</div>
                        </div>
                    </div>
                </div>
            </van-radio-group>
        </div>
        <div v-if="list.length == 0" class="column-center" style="padding-top: 30px">
            <img class="img-null" src="@A/images/null_coupon.png" />
            <span class="muted mt10">暂无优惠券～</span>
        </div>
    </div>
</template>

<script>
export default {
    name: "couponPopup",
    props: {
        list: {
            type: Array,
        },
        type: {
            type: Number,
        },
    },
    data() {
        return {
            coupons: [],
            radio: ''
        };
    },
    created() {},
    methods: {
        selectCoupon(id) {
            if(this.type == 0)
            if(this.radio == id) {
                this.radio = ''
            } else {
                this.radio = id
            }
            this.$emit('select', this.radio)
        }
    },
    watch: {
        list: {
            immediate: true,
            handler(val) {
                this.coupons = val;
            },
        },
    },
};
</script>

<style lang="scss" scoped>
.coupon-popup {
    height: 320px;
    background-color: $--background-color-base;
    overflow-y: auto;
    .coupon-list {
        padding: 10px 10px 0;
        .coupon-item {
            height: 80px;
            background: url(../../assets/images/coupon_bg.png);
            background-size: 100%;
            .price {
                width: 100px;
                margin-right: 10px;
            }
        }
    }
}
</style>