<template>
    <span class="price-slice" :style="{color: color}" :class="{'line-through': lineThrough}">
        <span v-if="showSubscript" :class="[subScriptClass]">￥</span>
        <span :class="[firstClass]" :style="{'font-weight': weight}">{{priceSlice.first}}</span>
        <span :class="[secondClass]" :style="{'font-weight': weight}" v-if="priceSlice.second">.{{priceSlice.second}}</span>
    </span>
</template>

<script>
export default {
    name: "priceSlice",
    components: {},
    props: {
        showSubscript: {
            type: Boolean,
            default: false,
        },
        subScriptClass: {
            type: String
        },
        firstClass: {
            type: String,
        },
        secondClass: {
            type: String,
        },
        color: {
            type: String
        },
        weight: {
            type: [Number, String],
            default: 400
        },
        price: {
            type: [Number, String]
        },
        lineThrough: {
            type: Boolean,
            default: false
        }
    },
    data() {
        return {
            priceSlice: {}
        };
    },
    created() {
        // this.a = 2;
        // console.log(this.price)
    },
    watch: {
        price: {
            immediate: true,
            handler(newValue, oldValue) {
                if(newValue == undefined) return
                let price = parseFloat(newValue);
                price = String(price).split(".");
                const priceSlice = {};
                priceSlice.first = price[0];
                priceSlice.second = price[1];
                this.priceSlice = priceSlice;
            }
        }
    }
};
</script>
<style lang="scss" scoped>
// .price-slice .first,
// .price-slice .second {
//     font-size: 14px;
// }
.walletSize {
    font-size: 38px;
}
.order-price-size {
    font-size: 21px;
    line-height: 17px;
}
.home-new-goods-size {
    font-size: 19px;
    line-height: 18px;
}
.width-draw-result {
    font-size: 23px;
    line-height: 38px;
}
</style>