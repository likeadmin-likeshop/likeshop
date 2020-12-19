<template>
    <div class="user-collection">
        <div>
            <div class="goods-collection-list mt10" v-show="!isDataNull">
                <van-list 
                v-model="goodsLoading" 
                :finished="goodsStatus" 
                finished-text="没有更多了" 
                @load="$getCollectGoods"
                >
                    <div
                        class="collection-item row bg-white"
                        v-for="(item, index) in goodsCollectionList"
                        :key="item.id"
                        @click="goToGoodsDetail(index)"
                    >
                        <div class="mr10 goods-img">
                            <van-image width="100%" height="100%" radius="10px" lazy-load :src="item.image" />
                        </div>
                        <div class="info">
                        <div class="row-between">
                            <div class="name two-txt-cut">{{item.name}}</div>
                            <img
                            class="del-img"
                            src="@A/images/address_icon_del.png"
                            @click.stop="showDialog(index)"
                            />
                        </div>
                        <div class="row-between mt10">
                            <price-slice
                                :price="item.price"
                                showSubscript
                                subScriptClass="sm"
                                secondClass="sm"
                                firstClass="lg"
                                :color="primaryColor"
                            ></price-slice>
                            <!-- <div class="price lg primary">￥{{item.price}}</div> -->
                            <div class="btn primary br60 sm">去购买</div>
                        </div>
                        </div>
                    </div>
                </van-list>
            </div>
            <div class="data-null column-center" v-show="isDataNull">
                <img src="@A/images/null_profit.png" class="img-null" />
                <div class="sm muted">暂无收藏～</div>
            </div>
        </div>
        <van-dialog
        v-model="deleteSure"
        show-cancel-button
        confirmButtonText="狠心删除"
        :confirm-button-color="primaryColor"
        @confirm="deleteConfirm"
        @cancel="hideDialog"
        >
            <div class="column-center tips-dialog">
                <img class="icon-lg" src="@A/images/icon_warning.png" />
                <div style="margin-top:15px">确认删除该收藏吗？</div>
            </div>
        </van-dialog>
    </div>
</template>

<script>
import {getCollectGoods, getCollectShop, handleCollectGoods, handleCollectShop} from "@API/user"
const CollectType = {
    COLLECTION: 1,
    CANCEL_COLLECTION: 0
}
export default {
    name: "userCollection",
    components: {
    },
    data() {
        return {
            active: 0,
            goodsLoading: true,
            storeLoading: true,
            isGoodsDataNull: false,
            isShopDataNull: false,
            isDataNull: false,

            goodsCollectionList: [],
            goodsPage: 1,
            goodsStatus: false,

            collectionShopList: [],
            shopPage: 1,
            shopStatus: false,

            deleteSure: false,

            index: 0
        }
    },
    methods: {
        goToGoodsDetail(index) {
            let {id, shop_id} = this.goodsCollectionList[index];
            this.$router.push({name: "goodsDetail", query: {
                    id: id,
                }
            })
        },
        goToShopDetail(index) {
            let {id} = this.collectionShopList[index]
            this.$router.push({name: "storeDetail", query: {id: id}})
        },
        onTabChange() {
            if(this.active == 0) {
                this.goodsPage = 1;
                this.goodsCollectionList = [];
                this.isDataNull = false;
                this.goodsStatus = false
                this.$getCollectGoods();
            }
            else {
                this.shopPage = 1;
                this.collectionShopList = [];
                this.isShopDataNull = false;
                this.isDataNull = false;
                this.shopStatus = false;
                this.$getCollectShop();
            }
        },
        $getCollectGoods() {
            this.goodsLoading = true;
            if(this.goodsStatus) { return; }
            getCollectGoods({page_no: this.goodsPage}).then(res => {
                if(res.code == 1) {
                    this.goodsLoading = false;
                    let {list, more} = res.data
                    this.goodsCollectionList.push(...list);
                    this.goodsPage ++;
                    this.$nextTick(() => {
                        if(!more) {
                            this.goodsStatus = true;
                        }
                        if(this.goodsCollectionList.length <= 0) {
                            this.goodsStatus = true;
                            this.isDataNull = true;
                        }
                        return;
                    })
                }else {
                
                }
            })
        },
        $getCollectShop() {
            this.storeLoading = true;
            if(this.shopStatus) { return; }
            getCollectShop({page_no: this.shopPage}).then(res => {
                if(res.code == 1) {
                    this.storeLoading = false;
                    let {more, list} = res.data;
                    this.collectionShopList = list;
                    this.shopPage ++;
                    this.$nextTick(() => {
                        if(!more) {
                            this.shopStatus = true;
                        }
                        if(this.collectionShopList.length <= 0) {
                            this.shopStatus = true;
                            this.isDataNull = true;
                        }
                        return;
                    })
                }
            })
        },
        refresh() {
            this.goodsPage = 1;
            this.goodsCollectionList = [];
            this.goodsStatus = false;
            this.shopPage = 1;
            this.collectionShopList = [];
            this.shopStatus = false;
            this.isDataNull = false;
            if(this.active == 0) {
                this.$getCollectGoods();
            }
            else {
                this.$getCollectShop();
            }
        },
        showDialog(index) {
            this.index = index;
            this.deleteSure = true;
        },
        hideDialog() {
            this.deleteSure = false
        },
        deleteConfirm() {
            this.isDataNull = false;
            if(this.active == 0) {
                let {is_collect, id} = this.goodsCollectionList[this.index];
                handleCollectGoods({is_collect: CollectType.CANCEL_COLLECTION, goods_id: id}).then(res => {
                    if(res.code == 1) {
                        this.goodsPage = 1;
                        this.goodsCollectionList = [];
                        this.goodsStatus = false;
                        this.isGoodsDataNull = false;
                        this.$getCollectGoods();
                    }
                })
            }
            else {
                let {is_collect, id} = this.collectionShopList[this.index];
                handleCollectShop({is_collect: CollectType.CANCEL_COLLECTION, shop_id: id}).then(res => {
                    if(res.code == 1) {
                        this.shopPage = 1;
                        this.collectionShopList = [];
                        this.shopStatus = false;
                        this.isShopDataNull = false;
                        this.$getCollectShop();
                    }
                })
            }
        },
    },
    created() {
        // if(this.active == 0) {
            this.$getCollectGoods();
        // }
        // else {
        //     this.$getCollectShop();
        // }
    },
    mounted() {

    }
}
</script>

<style lang="scss" scoped>
    .user-collection {
        & .tips-dialog {
            height: 115px;
            width: 100%;
            .icon-lg {
                width: 28px;
                height: 28px;
            }
        }
        .goods-collection-list {
            .collection-item {
                height: 100px;
                padding: 5px;
                &:not(:last-of-type) {
                    border-bottom: $--border-base;
                }
                & .info {
                    flex: 1;
                    & .name {
                        font-size: 14px;
                        text-align: left;
                    }
                    & .del-img {
                        height: 28px;
                        width: 28px;
                        flex: none;
                        margin-left: 7px;
                    }
                }
                & .goods-img {
                    width: 80px;
                    height: 80px;
                    flex: none;
                }
                & .btn {
                    width: 74px;
                    height: 26px;
                    right: 10px;
                    border: 1px solid $--color-primary;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            }
            & .store-item {
                padding: 10px;
            }
            & .tips-dialog {
                height: 115px;
                width: 100%;
                .icon-lg {
                    width: 28px;
                    height: 28px;
                }
            }
        }
        .shop-collection-list {
            .store-item {
                height: 70px;
                border-bottom: 1px solid #e5e5e5;
                .store-img {
                    height: 40px;
                    width: 40px;
                    border-radius: 50%;
                    overflow: hidden;
                }
                .store-info {
                    margin-left: 20px;
                    .store-type {
                        border: 1px solid #BF000F;
                        color: #BF000F;
                        border-radius: 4px;
                        font-size: 10px;
                        width: 60px;
                        height: 15px;
                    }
                }
            }
        }
        .data-null {
            padding-top: 100px;
        }
    }
</style>