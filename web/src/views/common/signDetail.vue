// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

<template>
    <div class="sign-detail mt10">
        <van-list
        v-model="loading"
        :finished="finished"
        finished-text="没有更多了"
        v-show="!isEmpty"
        @load="$getAccountLog"
        >
            <div class="detail-item row-between" v-for="(item) in detailList" :key="item.index"> 
                <div>
                    <div class="nr sign-type">{{item.source_type}}</div>
                    <div class="time muted xs">{{item.create_time}}</div>
                </div>
                <div class="primary lg">{{item.change_amount}}</div>
            </div>
        </van-list>
        <div class="data-null column-center" v-show="isEmpty">
            <img src="@A/images/null_order.png" class="img-null" />
            <div class="muted">{{emptyText}}</div>
        </div>
    </div>
</template>

<script>
import {getAccountLog} from "@API/user"
export default {
    name: 'signDetail',
    data() {
        return {
            loading: true,
            page: 1,
            finished: false,
            isEmpty: false,
            detailList: [],
            emptyText: '暂无签到记录'
        }
    },
    methods: {
        $getAccountLog() {
            this.loading = true;
            if(this.finished == true) {
                return;
            }
            getAccountLog({source: 2, page_no: this.page}).then(res => {
                if(res.code == 1) {
                    this.loading = false;
                    let {more, list} = res.data;
                    this.detailList.push(...list);
                    this.page ++;
                    if(!more) {
                        this.finished = true;
                    }
                    if (this.detailList.length <= 0) {
                        this.isEmpty = true;
                    }
                    return;
                }
            })
        }
    },
    mounted() {
        this.$getAccountLog()
    }
}
</script>

<style lang="scss" scoped>
    .sign-detail {
        .detail-item {
            background-color: #fff;
            padding: 9px 15px;
            .sign-type {
                line-height: 20px;
            }
            .time {
                line-height: 16px;
            }
        }
    }
    .data-null {
        padding-top: 100px;
        padding-bottom: 100px;
    }
</style>