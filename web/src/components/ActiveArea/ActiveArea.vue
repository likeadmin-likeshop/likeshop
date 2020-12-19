<template>
    <div
        class="active-area"
        :class="{'hot-bg': extClass == 'hot', 'hot-store-bg': extClass == 'hot-store'}"
    >
        <div class="header">
            <slot name="header"></slot>
        </div>
        <div :class="isStoreList ? 'store-main' : 'main'">
            <div class="goods-contain row" ref="goodsContain" v-if="!isStoreList" style="touch-action: pan-y">
                <div class="goods-wrap row" ref="goodsWrap">
                    <div
                        class="goods-item"
                        v-for="(item, index) in lists"
                        :key="index"
                        @click="goGoodsDetail(item.id, item.shop_id)"
                    >
                        <div class="goods-rank-box" v-if="index<=3 && extClass == 'hot'">
                            <div class="rank-img">
                                <img :src="require('@A/images/No.' + index + '.png')" />
                            </div>
                            <div class="goods-rank xxs row-center">{{index + 1}}</div>
                        </div>
                        <div class="goods-img mb5">
                            <van-image width="100%" height="100%" lazy-load radius="6px" :src="item.image" />
                        </div>
                        <div class="goods-name mt5 sm one-txt-cut">{{item.name}}</div>
                        <div class="price">
                            <div>
                                <price-slice
                                    :price="item.price"
                                    firstClass="lg"
                                    :showSubscript="true"
                                    subScriptClass="xxs"
                                    :color="primaryColor"
                                    secondClass="xxs"
                                    weight="bold"
                                ></price-slice>
                            </div>
                            <div>
                                <price-slice
                                    color="#999999"
                                    :price="item.min_price || item.market_price"
                                    firstClass="xxs"
                                    secondClass="xxs"
                                    subScriptClass="xxs"
                                    :showSubscript="true"
                                    :lineThrough="true"
                                    class="ml5"
                                ></price-slice>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="store-contain" ref="storeContain" v-else>
                <div class="store-box column wrap">
                    <div
                        class="store-item row-between mt10"
                        v-for="(item, index) in lists"
                        :key="index"
                         @click="toStore(item.id)"
                    >
                        <div class="row">
                            <div class="store-img">
                                <van-image width="100%" height="100%" lazy-load radius="3px" :src="item.image" />
                            </div>
                            <div class="ml10">
                                <div class="md">{{item.name}}</div>
                                <div
                                    class="primary xs br60 row-center mt5 sale-container"
                                >销量 {{item.sales_sum}}</div>
                            </div>
                        </div>
                        <div
                            class="primary br60 sm row-center"
                            :style="'border:1px solid' + primaryColor +';width: 72px;height: 24px'"
                        >进店看看</div>
                    </div>
                </div>
            </div>
            <!-- <div class="row-center mt10">
                <progress-bar
                    :progressBarColor="progressBarColor"
                    :left="progressPer"
                    v-show="lists.length >= 3 && !isStoreList"
                />
            </div> -->
        </div>
    </div>
</template>

<script>
import ProgressBar from "@C/ProgressBar";
import BScroll from "@better-scroll/core";

export default {
    name: "activeArea",
    props: {
        extClass: {
            type: String,
            default: "",
        },
        isStoreList: {
            type: Boolean,
            default: false,
        },
        progressBarColor: {
            type: String,
            default: "#01B55B",
        },
        lists: {
            type: Array,
            default: () => [],
        },
    },
    watch: {
        lists: function (value) {
            let { goodsContain, goodsWrap } = this.$refs;
            this.$nextTick(() => {
                this.scrollContainerBar = new BScroll(goodsContain, {
                    scrollX: true,
                    eventPassthrough: "vertical",
                    probeType: 3,
                    bounce: true,
                });
                if (goodsContain) {
                    this.goodsContainWidth = goodsContain.clientWidth;
                    this.goodsWrapWidth = goodsWrap.clientWidth;
                }
                this.containerWidth = goodsContain.width
            }, 1000);
        },
        scrollContainerBar: function (value) {
            this.scrollContainerBar.on(
                "scroll",
                (pos) => {
                    this.progressPer =
                        (Math.abs(pos.x) /
                            (this.goodsWrapWidth - this.goodsContainWidth)) *
                        100;
                },
                this
            );
        },
    },
    data() {
        return {
            progressPer: 0,
            scrollContainerBar: null,
            goodsContainWidth: 0,
            goodsWrapWidth: 0,
        };
    },
    components: {
        "progress-bar": ProgressBar,
    },
    created() {
    },
    mounted() {
        let { goodsContain, goodsWrap } = this.$refs;
        this.$nextTick(() => {
            this.scrollContainerBar = new BScroll(goodsContain, {
                scrollX: true,
                eventPassthrough: "vertical",
                probeType: 3,
                bounce: true,
            });
            if (goodsContain) {
                this.goodsContainWidth = goodsContain.clientWidth;
                this.goodsWrapWidth = goodsWrap.clientWidth;
            }
            this.containerWidth = goodsContain.width
        }, 1000);
    },
    methods: {
        toStore(id) {
            this.$router.push({
                name: "storeDetail",
                query: {
                    id: id,
                },
            });
        },
        goGoodsDetail(id) {
            this.$router.push({
                name: "goodsDetail",
                query: {
                    id: id,
                },
            });
        },
    },
};
</script>

<style lang="scss" scoped>

.hot-bg {
    border-radius: 10px;
    background-image: url(../../assets/images/home_hot_bg.png);
    background-size: 100% 100%;
    background-repeat: no-repeat;
}

.hot-store-bg {
    border-radius: 10px;
    background-image: url(data:image/png;base64,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WoMBeW2q/1ybWoOrykNf2RsbbuqdwvVqcL1Foic6U09nV72DeSpx6TVTIA4RjDOplBEgQIAAAQIECJQsEI8/831WjEuesN4IECBAgAABAgSyBOLQM98vGGdRKSJAgAABAgQIEChZIJ5w5gcE45InrDcCBAgQIECAAIEsgTjsLME4S0oRAQIECBAgQIBA0QLxpLM+aMW46BFrjgABAgQIECBAIEcgnnz2UYJxjpQaAgQIECBAgACBogXiKWd/SDAuesSaI0CAAAECBAgQyBGIp579YcE4R0oNAQIECBAgQIBA0QLxtHmCcdET1hwBAgQIECBAgECWQDx93n9bMc6iUkSAAAECBAgQIFCyQDxj3kcE45InrDcCBAgQIECAAIEsgfiLc44WjLOoFBEgQIAAAQIECJQsEH8pGJc8X70RIECAAAECBAhkCsTh53zUinEmljICBAgQIECAAIFyBeJZ535MMC53vjojQIAAAQIECBDIFIhnn/txwTgTSxkBAgQIECBAgEC5AvFXgnG509UZAQIECBAgQIBAtkA857xPWDHO5lJIgAABAgQIECBQqkAccd7/CMalTldfBAgQIECAAAEC2QLxvPM+KRhncykkQIAAAQIECBAoVSD++nzBuNTh6osAAQIECBAgQCBfIP7m/E9ZMc73UkmAAAECBAgQIFCoQBx5/qcF40KHqy0CBAgQIECAAIF8gXj+BZ8RjPO9VBIgQIAAAQIECBQqEH8nGBc6Wm0RIECAAAECBAg0EYi/v+CzVoybiKklQIAAAQIECBAoUiD+4cL/FYyLHK2mCBAgQIAAAQIEmgjECy78nGDcREwtAQIECBAgQIBAkQLxwgs/LxgXOVpNESBAgAABAgQINBGIF10kGDcBU0uAAAECBAgQIFCmQPzTRV+wYlzmbHVFgAABAgQIECDQQCBefPEXBeMGYEoJECBAgAABAgTKFIiXXPwlwbjM2eqKAAECBAgQIECggUC8VDBuwKWUAAECBAgQIECgVIH450v+z4pxqdPVFwECBAgQIECAQLZAvOySLwvG2VwKCRAgQIAAAQIEShWIl1/yFcG41OnqiwABAgQIECBAIFsg/vVSwThbSyEBAgQIECBAgECxAvFvl37VinGx49UYAQIECBAgQIBArkC84tKvCca5WuoIECBAgAABAgSKFYhXXvZ1wbjY8WqMAAECBAgQIEAgVyBeJRjnWqkjQIAAAQIECBAoWCBefdk3rBgXPGCtESBAgAABAgQI5AnEay7/pmCcZ6WKAAECBAgQIECgYIF47eXfEowLHrDWCBAgQIAAAQIE8gTidYJxnpQqAgQIECBAgACBogXi9Vd824px0SPWHAECBAgQIECAQI5AvOGK7wjGOVJqCBAgQIAAAQIEihaIN17xXcG46BFrjgABAgQIECBAIEcg3nTl9wTjHCk1BAgQIECAAAECRQvEmwXjogesOQIECBAgQIAAgTyBeMuV37dinGeligABAgQIECBAoGCBeOsffiAYFzxgrREgQIAAAQIECOQJxNv+8EPBOM9KFQECBAgQIECAQMEC8XbBuODxao0AAQIECBAgQCBXIN5x1Y+sGOdqqSNAgAABAgQIEChWIN551Y8F42LHqzECBAgQIECAAIFcgXjX1T8RjHO11BEgQIAAAQIECBQrEO8WjIsdrsYIECBAgAABAgTyBeI9V//UinG+l0oCBAgQIECAAIFCBeK9838mGBc6XG0RIECAAAECBAjkC8T75h8jGOd7qSRAgAABAgQIEChUID4gGBc6Wm0RIECAAAECBAg0EYgPXnOsFeMmYmoJECBAgAABAgSKFIijrvm5YFzkaDVFgAABAgQIECDQRCA+dM0vBOMmYmoJECBAgAABAgSKFIgPXysYFzlZTREgQIAAAQIECDQSiI9c+0srxo3IFBMgQIAAAQIECJQoEEdf+yvBuMTJ6okAAQIECBAgQKCRQHz0ul8Lxo3IFBMgQIAAAQIECJQoEB+77jeCcYmT1RMBAgQIECBAgEAjgfi4YNwITDEBAgQIECBAgECZAvGJ639rxbjM2eqKAAECBAgQIECggUB88vrjBOMGYEoJECBAgAABAgTKFIhPXf87wbjM2eqKAAECBAgQIECggUB8+gbBuIGXUgIECBAgQIAAgUIF4jM3/L8V40KHqy0CBAgQIECAAIF8gfjsDccLxvleKgkQIECAAAECBAoViM/deIJgXOhwtUWAAAECBAgQIJAvEJ8XjPO1VBIgQIAAAQIECBQrEF+48UQrxsWOV2MECBAgQIAAAQK5AvHFm+YIxrla6ggQIECAAAECBIoViC/ddJJgXOx4NUaAAAECBAgQIJArEF9eIBjnYqkjQIAAAQIECBAoVyC+suBkK8blzldnBAgQIECAAAECmQLx1QVzBeNMLGUECBAgQIAAAQLlCsTXbj5FMC53vjojQIAAAQIECBDIFIivC8aZVMoIECBAgAABAgRKFohv3HyqFeOSJ6w3AgQIECBAgACBLIH41i2nCcZZVIoIECBAgAABAgRKFohv33K6YFzyhPVGgAABAgQIECCQJRDfueUMwTiLShEBAgQIECBAgEDJAvHdWwXjkgesNwIECBAgQIAAgTyB+N6tv7dinGeligABAgQIECBAoGCB+MGtZwrGBQ9YawQIECBAgAABAnkC8cPbzhKM86xUESBAgAABAgQIFCwQPxKMCx6v1ggQIECAAAECBHIF4se3nW3FOFdLHQECBAgQIECAQLEC8ZPb5wnGxY5XYwQIECBAgAABArkC8bPbzxGMc7XUESBAgAABAgQIFCsQxwjGxQ5XYwQIECBAgAABAvkCcezCc60Y53upJECAAAECBAgQKFQgfr7wPMG40OFqiwABAgQIECBAIF8gfrHwfME430slAQIECBAgQIBAoQLxy0WCcaGz1RYBAgQIECBAgEADgfj1ogusGDcAU0qAAAECBAgQIFCmQPxm0YWCcZmz1RUBAgQIECBAgEADgfjtHRcJxg3AlBIgQIAAAQIECJQpEMcJxmVOVlcECBAgQIAAAQKNBOJ3d1xsxbgRmWICBAgQIECAAIESBeL4Oy8RjEucrJ4IECBAgAABAgQaCcQJd14qGDciU0yAAAECBAgQIFCiQJx412WCcYmT1RMBAgQIECBAgEAjgZgjGDcCU0yAAAECBAgQIFCmQJx01+VWjMucra4IECBAgAABAgQaCMTcxVcIxg3AlBIgQIAAAQIECJQpEKcsvlIwLnO2uiJAgAABAgQIEGggEKcKxg24lBIgQIAAAQIECJQqEKfd/QcrxqVOV18ECBAgQIAAAQLZAnH63VcJxtlcCgkQIECAAAECBEoViDPuvlowLnW6+iJAgAABAgQIEMgWiDOXCMbZWgoJECBAgAABAgSKFYizlsy3YlzseDVGgAABAgQIECCQKxBnL7lGMM7VUkeAAAECBAgQIFCsQMxbeq1gXOx4NUaAAAECBAgQIJArEOcIxrlW6ggQIECAAAECBAoWiPOWXmfFuOABa40AAQIECBAgQCBPIM6/53rBOM9KFQECBAgQIECAQMECccE9NwjGBQ9YawQIECBAgAABAnkCcaFgnCeligABAgQIECBAoGiBuGjZjVaMix6x5ggQIECAAAECBHIE4pJlNwnGOVJqCBAgQIAAAQIEihaIS5ctEIyLHrHmCBAgQIAAAQIEcgTisuU3C8Y5UmoIECBAgAABAgSKFojLBeOiB6w5AgQIECBAgACBPIG4YvktVozzrFQRIECAAAECBAgULBBX3nurYFzwgLVGgAABAgQIECCQJxBX3XubYJxnpYoAAQIECBAgQKBggbj6PsG44PlqjQABAgQIECBAIFMg5t93uxXjTCxlBAgQIECAAAEC5QrENfctFIzLna/OCBAgQIAAAQIEMgXi2hWLBONMLGUECBAgQIAAAQLlCsT1gnG509UZAQIECBAgQIBAtkDcsOIOK8bZXAoJECBAgAABAgRKFYgbV94pGJc6XX0RIECAAAECBAhkC8RNK+8SjLO5FBIgQIAAAQIECJQqEAsE41Jnqy8CBAgQIECAAIEGAnHzqsVWjBuAKSVAgAABAgQIEChTIG5ddbdgXOZsdUWAAAECBAgQINBAIG5btUQwbgCmlAABAgQIECBAoEyBuH21YFzmaHVFgAABAgQIECDQRCAWrl5qxbiJmFoCBAgQIECAAIEiBWLR6nsE4yJHqykCBAgQIECAAIEmAnFn3zLBuImYWgIECBAgQIAAgSIF4q6+5YJxkaPVFAECBAgQIECAQBOBWCwYN/FSS4AAAQIECBAgUKhA3L1m+bKUYlah/WmLAAECBAgQIECAQIZAtTyWrrlvfpXSwzOqlRAgQIAAAQIECBAoUiBSuibu6V9xUqrSM4vsUFMECBAgQIAAAQIEcgQinVwH4/dESkfn1KshQIAAAQIECBAgUKJAlap311spHtsZHReX2KCeCBAgQIAAAQIECOQIDLRaB0ddeG//qvnJPuMcMzUECBAgQIAAAQLlCVyzc/eMg4aC8cDKF0Xq+Gl5PeqIAAECBAgQIECAwMYFqtT6x527en82GIzrx4r+1RemSI8DR4AAAQIECBAgQGDKCFRx7k7d0w6r+x0Jxn1V3yNarTgrpWrXKQOhUQIECBAgQIAAgSkrUKW0tLMjPWVaTLtqXDCu/6W/6n/a2lY1J6U0bcoKaZwAAQIECBAgQGAqCPR1dsSzu6P7jOFmR1aMh3/QX/U/tWqlY6uU9poKInokQIAAAQIECBCYWgKR0p3Rkf62O7rnje38fsG4/mVVVfv2VwPfTMmNP6bWx0S3BAgQIECAAIGyBSLFSf2x5hW90Xvr+p1OGIzHrB4fnqqob/7xxLKJdEeAAAECBAgQIFC4wLwU1fu7o3vuhvrcaDAeflJVVfu1Uus5qZWeXkV1YKQ4IKXkS3qFf3q0R4AAAQIECBCYpAJLIsX1rap1XWdH56kppRMi4pZN9fJHcOn5JgaJ4PEAAAAASUVORK5CYII=);
    background-size: 100% 100%;
    background-repeat: no-repeat;
}

.active-area {
    background-repeat: no-repeat;

    .main {
        position: relative;
        box-sizing: border-box;
        padding: 0px 0 10px;
        border-radius: 10px;
        .goods-contain {
            height: 170px;
            overflow: hidden;
            .goods-wrap {
                .goods-item {
                    width: 100px;
                    margin-left: 10px;
                    background-color: white;
                    border-radius: 5px;
                    position: relative;
                    .goods-rank-box {
                        position: absolute;
                        left: 0px;
                        top: 0;
                        z-index: 2;
                        .rank-img {
                            position: absolute;
                            width: 25px;
                            height: 27px;
                            left: 3px;
                            img {
                                width: 100%;
                                height: 100%;
                            }
                        }
                        .goods-rank {
                            position: absolute;
                            width: 25px;
                            height: 23px;
                            padding-top: 4px;
                            line-height: 30px;
                            left: 3px;
                            font-weight: 600;
                        }
                    }
                    .goods-img {
                        width: 100px;
                        height: 100px;
                    }
                    .goods-name {
                        margin-left: 4px;
                        margin-right: 4px;
                        line-height: 16px;
                    }
                    .price {
                        margin: 3px 4px 4px;
                        text-align: left;
                    }
                    &:last-of-type {
                        margin-right: 10px;
                    }
                }
            }
        }
    }
    .store-main {
        position: relative;
        box-sizing: border-box;
        padding: 5px 0;
        border-radius: 20px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.16);
        .store-contain {
          overflow: hidden;
          max-height: 300px;
          .store-box {
            .store-item {
              padding: 7px 12px;
              .store-img {
                  height: 50px;
                  width: 50px;
              }
              .sale-container {
                padding: 2px 13px 2px 8px;
                background-color: #FFEFF0;
                display: inline-block;
              }
            }
          }
        }
    }
}
</style>