<template>
    <div class="user-withdraw-code">
        <div class="withdraw-code-container mt5" v-if="!isEmpty">
            <van-list
                v-model="loading"
                :finished="finished"
                @load="$getWithdrawRecords"
            >
                <div class="withdraw-code-item bg-white" v-for="item in recordsList" :key="item.id">
                    <div class="row-between">
                        <div>{{item.desc}}</div>
                        <price-slice
                            showSubscript
                            subScriptClass="sm"
                            firstClass="xxl"
                            secondClass="xxl"
                            :price="item.left_money"
                        ></price-slice>
                    </div>
                    <div class="row-between mt5">
                        <div class="muted xs time">{{item.create_time}}</div>
                        <div class="withdraw-status xs">{{item.status_text}}</div>
                    </div>
                </div>
            </van-list>
        </div>
        <div class="data-null column-center" v-else>
            <img class="img-null" src="@A/images/order_null.png" alt="">
            <div class="muted">暂无提现记录～</div>
        </div>
    </div>
</template>

<script>
import {getWithdrawRecords} from "@API/user"
export default {
    name: 'userWithdrawCode',
    data() {
        return {
            recordsList: [],
            loading: true,
            finished: false,
            isEmpty: false,
            page: 1,
        }
    },
    methods: {
        cleanStatus() {
            this.page = 1;
            this.isEmpty = false;
            this.finished = false;
            this.recordsList = []
        },
        $getWithdrawRecords() {
            let {finished, recordsList} = this;
            this.loading = true;
            if(finished) return;
            getWithdrawRecords({
                page_no:  this.page
            }).then(res => {
                if(res.code == 1) {
                    this.loading = false;
                    let {more, list} = res.data
                    recordsList.push(...list);
                    this.recordsList = recordsList;
                    this.page ++
                    if(!more) {
                        this.finished = true;
                    }
                    if(recordsList.length <= 0) {
                        this.isEmpty = true;
                        return;
                    }
                }
            })
        },
    },
    mounted() {
        this.$getWithdrawRecords()
    }
}
</script>

<style lang="scss" scoped>
.user-withdraw-code {
    .withdraw-code-container {
        .withdraw-code-item {
            padding: 12px 15px;
            .time {
                line-height: 16px;
            }
            .withdraw-status {
                color: #0CC21E;
            }
            .common-status {
                color: $--color-text-regular;
            }
            .error-status {
                color: $--color-primary;
            }
            &:not(:nth-last-of-type(2)) {
                border-bottom: 1px solid $--border-color-base;
            }
        }
    }
    .data-null {
        padding-top: 150px;
    }
}
</style>