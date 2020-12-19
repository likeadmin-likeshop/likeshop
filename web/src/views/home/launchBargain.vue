<template>
    <div class="launch-bargain-contain">
        <div class="header">
            <img src="@A/images/launch_top_bg.png" />
        </div>
        <div class="contain">
            <div class="goods-container">
                <div class="goods-item bg-white row ">
                    <div class="goods-image">
                        <van-image src="" width="100%" height="100%"></van-image>
                    </div>
                    <div class="goods-info ml10">
                        <div class="goods-name two-txt-cut">
                            控油细致面膜21片装 护肤品 补水面膜清洁面膜
                        </div>
                        <div class="goods-spec xs muted mt5">
                            原价 
                            <price-slice 
                                price="69.3" 
                                color="#999999"
                                showSubscript
                                subScriptClass="xs"
                                firstClass="xs"
                                secondClass="xs"
                            />
                        </div>
                        <div class="row-between mt5">
                            <div class="primary xs" style="line-height: 21px">
                                最低可砍至
                                <price-slice 
                                    price="1.01"
                                    showSubscript
                                    subScriptClass="sm"
                                    firstClass="xl"
                                    secondClass="xl"
                                    :color="primaryColor"
                                    weight="500"
                                />
                            </div>
                            <div class="xs muted">仅剩14件</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="choose-prop-container">
                <div class="normal lg title">请选择商品属性</div>
                <div class="row-between bg-white select-row">
                    <div class="row">
                        <div class="muted sm">已选</div>
                        <div class="normal nr" style="margin-left: 15px">控油 21片装</div>
                    </div>
                    <van-icon name="arrow" size="15px" />
                </div>
                <div class="launch-btn white br60 row-center">发起砍价</div>
            </div>
            <recommend></recommend>
        </div>
    </div>    
</template>

<script>
import Recommend from '@C/Recommend'
export default {
    name: "launchBargain",
    components: {
        Recommend
    }
}
</script>

<style lang="scss" scoped>
    .launch-bargain-contain {
        .header {
            img {
                width: 100%;
                height: 100%;
            }
        }
        .contain {
            margin-top: -100px;
            position: relative;
            .goods-container {
                padding: 0 12px;
                .goods-item {
                    padding: 15px 12px;
                    border-radius: 10px;
                    .goods-image {
                        width: 90px;
                        height: 90px;
                        flex: none;
                    }
                }
            }
            .choose-prop-container {
                margin-top: 25px;
                padding: 0 12px;
                .title {
                    margin-bottom: 12px;
                }
                .select-row {
                    padding: 12px;
                }
                .launch-btn {
                    background: linear-gradient(270deg, #FF2C3C 0%, #F95F2F 100%);
                    height: 42px;
                    margin-top: 20px;
                }
            }
        }
    }
</style>