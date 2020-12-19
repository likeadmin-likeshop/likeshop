<template>
    <div class="bargain-code-list">
        <van-list
            v-model="loading"
            :finished="finished"
            finished-text="没有更多了"
        >
            <div class="bargain-code-item bg-white">
                <div class="header row-between">
                    <div class="sm">剩余 3 天 22 时 57 分</div>
                    <div class="primary sm">活动进行中</div>
                </div>
                <div class="goods-container">
                    <div class="row">
                        <div class="goods-image">
                            <van-image width="100%" height="100%" radius="6px" />
                        </div>
                        <div class="goods-info column">
                            <div class="two-txt-cut nr normal">控油细致面膜21片装 护肤品 补水面膜清洁面膜</div>
                            <div class="mt5 row">
                                <div class="bargain-to-money primary">
                                    已砍至
                                    <price-slice
                                        price="59.99"
                                        showSubscript
                                        subScriptClass="sm"
                                        firstClass="xl"
                                        secondClass="xl"
                                        :color="primaryColor"
                                    />
                                </div>
                                <div class="xs muted" style="margin-left: 8px">
                                    原价 ¥69.30
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer row-end">
                    <div class="bargain-btn br60 row-center white bg-primary">继续砍价</div>
                </div>
            </div>
        </van-list>
    </div>
</template>

<script>
export default {
    name: "BargainCodeList",
    data() {
        return {
            loading: true,
            finished: false,
            lists: []
        }
    }
}
</script>

<style lang="scss" scoped>
    .bargain-code-list {
        .bargain-code-item {
            margin-top: 10px;
            .header {
                padding: 10px 12px;
                border-bottom: 1px solid $--border-color-base;
            }
            .goods-container {
                padding: 15px 12px;
                border-bottom: 1px solid $--border-color-base;
                .goods-image {
                    width: 80px;
                    height: 80px;
                }
                .goods-info {
                    margin-left: 12px;
                    .bargain-to-money {
                        line-height: 24px;
                    }
                }
            }
            .footer {
                padding: 10px 12px;
                .bargain-btn {
                    height: 31px;
                    width: 122px;
                }
            }
        }
    }
</style>