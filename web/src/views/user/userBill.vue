<template>
    <div class="user-bill">
        <van-tabs 
        v-model="active"
        line-width="40"
        :color="primaryColor"
        :title-active-color="primaryColor"
        title-inactive-color="#333333"
        @change="tabsChange"
        >
            <van-tab title="全部">
                <van-list 
                class="list"
                v-model="loading"
                :finished="finished"
                finished-text="没有更多了"
                v-show="!isEmpty"
                @load="$getAccountLog(0)"
                >
                    <div class="item" v-for="(items) in lists" :key="items.id">
                        <div class="bill-list bg-white">
                            <div class="bill-item row-between">
                                <div>
                                    <div class="black mb10">{{items.source_type}}</div>
                                    <div class="xs muted">{{items.create_time}}</div>
                                </div>
                                <div class="lg" :class="{income: items.change_type}">{{items.change_amount}}</div>
                            </div>
                        </div>
                    </div>
                </van-list>
            </van-tab>
            <van-tab title="消费">
                <van-list 
                class="list"
                v-model="loading"
                :finished="finished"
                finished-text="没有更多了"
                v-show="!isEmpty"
                @load="$getAccountLog(0)"
                >
                    <div class="item" v-for="(items) in lists" :key="items.id">
                        <div class="bill-list bg-white">
                            <div class="bill-item row-between">
                                <div>
                                    <div class="black mb10">{{items.source_type}}</div>
                                    <div class="xs muted">{{items.create_time}}</div>
                                </div>
                                <div class="lg" :class="{income: items.change_type}">{{items.change_amount}}</div>
                            </div>
                        </div>
                    </div>
                </van-list>
            </van-tab>
            <van-tab title="充值">
                <van-list 
                class="list"
                v-model="loading"
                :finished="finished"
                finished-text="没有更多了"
                v-show="!isEmpty"
                @load="$getAccountLog(0)"
                >
                    <div class="item" v-for="(items) in lists" :key="items.id">
                        <div class="bill-list bg-white">
                            <div class="bill-item row-between">
                                <div>
                                    <div class="black mb10">{{items.source_type}}</div>
                                    <div class="xs muted">{{items.create_time}}</div>
                                </div>
                                <div class="lg" :class="{income: items.change_type}">{{items.change_amount}}</div>
                            </div>
                        </div>
                    </div>
                </van-list>
            </van-tab>
        </van-tabs>
        <div class="data-null column-center" v-show="isEmpty">
            <img src="@A/images/null_order.png" class="img-null" />
            <div class="muted">{{emptyText}}</div>
        </div>
    </div>
</template>

<script>
import {getAccountLog} from '@API/user'
export default {
    name: "userBill",
    data() {
        return {
            active: 0,
            lists: [],
            page: 1,
            loading: false,
            finished: false,
            isEmpty: false,
            emptyText: '暂无记录～'
        }
    },
    methods: {
        tabsChange(e) {
            this.cleanStatus();
            this.$getAccountLog(this.active);
        },

        cleanStatus() {
            this.loading = false;
            this.finished = false;
            this.isEmpty = false;
            this.lists = [];
            this.page =  1
        },

        $getAccountLog(type) {
            var changeType = 0;
            type == 0 ? this.emptyText = '暂无记录～' : type == 1 ? this.emptyText = '暂无消费记录～' : this.emptyText = '暂无充值记录';
            type == 0 ? changeType = 0 : type == 1 ? changeType = 2 : changeType = 1
            this.loading = true;

            if(this.finished == true) {
                return;
            }
            getAccountLog({source: 1, type: changeType, page_no: this.page}).then(res => {
                if(res.code == 1) {
                    this.loading = false;
                    let {more, list} = res.data;
                    this.lists.push(...list);
                    this.page ++;
                    if(!more) {
                        this.finished = true;
                    }
                    if (this.lists.length <= 0) {
                        this.isEmpty = true;
                    }
                    return;
                }
            })
        }
    },
    mounted() {
        this.active = this.$route.query.index;
        this.$getAccountLog(this.active)
    }
}
</script>

<style lang="scss" scoped>
img {
    width: 100%;
    height: 100%;
}
.user-bill {
    .list {
        .item {
            margin-top: 10px;
            .time {
                padding: 15px;
            }
            .bill-list {
                .bill-item {
                    padding: 10px 15px;
                    border-bottom: $--border-base;
                    .income {
                        color: $--color-primary;
                    }
                }
            }
        }
    }
    .data-null {
        padding-top: 100px;
        padding-bottom: 100px;
        img {
            width: 150px;
            height: 150px;
        }
    }
}
</style>