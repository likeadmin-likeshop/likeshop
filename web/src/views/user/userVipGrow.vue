<template>
    <div class="user-vip-grow">
        <div class="md vip-grow row">当前成长值：<span>{{growth}}</span></div>
        <van-list
            v-model="loading"
            :finished="finished"
            finished-text="没有更多了"
            @load="$getAccountLog"
        >
            <div class="vip-code-container bg-white">
                <div
                    class="vip-code"
                    v-for="(item, index) in growthList"
                    :key="index"
                >
                    <div class="row-between">
                        <div class="lg normal">{{ item.source_type }}</div>
                        <div class="primary lg bold">
                            {{ item.change_amount }}
                        </div>
                    </div>
                    <div class="time row muted">{{ item.create_time }}</div>
                </div>
            </div>
        </van-list>
    </div>
</template>

<script>
import { getAccountLog, getWallet } from "@API/user";
export default {
    name: "userVipGrow",
    data() {
        return {
            loading: true,
            finished: false,
            growthList: [],
            page: 1,
            growth: ""
        };
    },
    created() {
        this.$getWallet();
        this.$getAccountLog();
    },
    methods: {
        $getWallet() {
            getWallet().then(res => {
                if (res.code == 1) {
                    this.growth = res.data.user_growth
                }
            })
        },
        $getAccountLog() {
            let { page, finished } = this;
            this.loading = true;
            if (finished == true) return;
            getAccountLog({
                page_no: page,
                source: 3,
            }).then((res) => {
                if (res.code == 1) {
                    this.loading = false;
                    let { more, list } = res.data;
                    this.growthList.push(...list);
                    this.page++;
                    if (!more) {
                        this.finished = true;
                    }
                    if (this.growthList.length <= 0) {
                        this.isEmpty = true;
                    }
                }
            });
        },
    },
};
</script>

<style lang="scss" scoped>
.user-vip-grow {
    background-image: url(./../../assets/images/bg_growth.png);
    background-size: 100% 213px;
    background-repeat: no-repeat;
    padding: 31px 15px 0;
    min-height: 213px;
    .vip-grow {
        line-height: 21px;
        color: white;
        span {
            font-size: 28px;
            line-height: 38px;
            font-weight: 500;
        }
    }
    .vip-code-container {
        padding: 0 10px;
        margin-top: 15px;
        border-radius: 5px;
        .vip-code {
            padding: 15px 0;
            border-bottom: 1px solid $--border-color-base;
            .time {
                margin-top: 4px;
            }
        }
    }
}
</style>