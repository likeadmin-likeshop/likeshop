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
    <div class="goods-logistics">
        <div class="header row bg-white">
            <div class="goods mr10">
                <img class="goods-img" :src="order.image" />
                <div class="count xs white br60">共{{order.count}}件商品</div>
            </div>
            <div class="info sm">
                <div class="bold lg">{{order.tips}}</div>
                <div class="black mt5 mb5">物流公司：{{order.shipping_name}}</div>
                <div class="row">
                    <span class="black">快递单号：{{order.invoice_no}}</span>
                    <span class="primary ml10" @click="onCopy(order.invoice_no)">复制</span>
                </div>
            </div>
        </div>
        <div class="main mt10 bg-white column">
            <!-- 物流时间轴 -->
            <div class="express">
                <!-- 顶部收货地址 -->
                <div class="express-address row" v-if="take.contacts">
                    <div class="express-left column-center">
                        <img
                            class="express-icon"
                            :src="finish.tips ? require('@A/images/logistics_address.png') : require('@A/images/logistics_address_gray.png')"
                        />
                        <div class="express-line"></div>
                    </div>
                    <div class="express-right">
                        <div class="name bold mb5 sm">{{take.contacts}} {{take.mobile}}</div>
                        <div class="address sm lighter">{{take.address}}</div>
                    </div>
                </div>
                <div class="express-item row" v-if="finish.tips">
                    <div class="express-left column-center">
                        <img class="express-icon" src="@A/images/logistics_success.png" />
                        <div class="express-line"></div>
                    </div>
                    <div class="express-right">
                        <div class="title bold sm">{{finish.title}}</div>
                        <div class="dec sm">{{finish.tips}}</div>
                        <div class="time xs muted">{{finish.time}}</div>
                    </div>
                </div>
                <div class="express-item row" v-if="delivery.traces.length">
                    <div class="express-left column-center">
                        <img class="express-icon" src="/images/logistics_transit.png" />
                        <div class="express-line"></div>
                    </div>
                    <div class="express-right muted">
                        <div class="title bold sm">{{delivery.title}}</div>
                        <div class="xs" v-if="delivery.traces[0][0]">{{delivery.traces[0][0]}}</div>
                        <div class="xs" v-if="delivery.traces[0][1]">{{delivery.traces[0][1]}}</div>
                        <div class="xs" v-if="delivery.traces[0][2]">{{delivery.traces[0][2]}}</div>
                    </div>
                </div>
                <block v-for="(item, index) in delivery.traces" :key="index">
                    <div class="express-item row" v-if="index >= 1">
                        <div class="express-left column-center">
                            <div class="express-doted"></div>
                            <div class="express-line"></div>
                        </div>
                        <div class="express-right muted">
                            <div class="sm" v-if="item[0]">{{item[0]}}</div>
                            <div class="sm" v-if="item[1]">{{item[1]}}</div>
                            <div class="sm" v-if="item[2]">{{item[2]}}</div>
                        </div>
                    </div>
                </block>
                <div class="express-item row" v-if="shipment.tips">
                    <div class="express-left column-center">
                        <img class="express-icon" src="@A/images/logistics_pay.png" />
                        <div class="express-line"></div>
                    </div>
                    <div class="express-right muted">
                        <div class="title bold sm">{{shipment.title}}</div>
                        <div class="dec xs">{{shipment.tips}}</div>
                        <div class="time xs muted">{{shipment.time}}</div>
                    </div>
                </div>
                <div class="express-item row" v-if="buy.tips">
                    <div class="express-left column-center">
                        <img class="express-icon" src="@A/images/logistics_pay.png" />
                        <div class="express-line"></div>
                    </div>
                    <div class="express-right muted">
                        <div class="title bold sm">{{buy.title}}</div>
                        <div class="dec xs">{{buy.tips}}</div>
                        <div class="time xs muted">{{buy.time}}</div>
                    </div>
                </div>
            </div>
        </div>
        <recommend class="mt10" />
    </div>
</template>

<script>
// import { orderTraces } from "@/api/user";
import Recommend from "@C/Recommend";
export default {
    name: "goodsLogistics",
    components: {
        Recommend,
    },
    data() {
        return {
            shipment: {},
            buy: {},
            delivery: {
                traces: [],
            },
            finish: {},
            order: {},
            take: {},
        };
    },
    methods: {},
    created() {
        this.id = this.$route.query.id;
        this.$orderTraces();
    },
    methods: {
        $orderTraces() {
            orderTraces(this.id).then((res) => {
                if (res.code == 1) {
                    let {
                        shipment,
                        buy,
                        delivery,
                        finish,
                        order,
                        take,
                    } = res.data;
                    this.shipment = shipment;
                    this.buy = buy;
                    this.delivery = delivery;
                    this.finish = finish;
                    this.order = order;
                    this.take = take;
                }else {
                    setTimeout(() =>  this.$router.go(-1),1000)
                }
            });
        },
        onCopy(str) {
            var aux = document.createElement("input");
            aux.setAttribute("value", str);
            document.body.appendChild(aux);
            aux.select();
            document.execCommand("copy");
            document.body.removeChild(aux);
            this.$toast({
                type: "success",
                message: "复制成功",
            });
        },
    },
};
</script>

<style lang="scss" scoped>
.goods-logistics {
    padding-top: 10px;
    .header {
        padding: 10px;
        .goods {
            position: relative;
        }
        .goods .count {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 2px 0;
        }
        .goods-img {
            width: 80px;
            height: 80px;
            flex: none;
            border-radius: 5px;
        }
    }
    .express {
        width: 350px;
        padding-top: 15px;
        padding-bottom: 50px;
        margin: 0 auto;
        border-radius: 5px;
        .express-address,
        .express-item {
            align-items: flex-start;
            position: relative;
            padding: 10px 0;
        }
        .express-left {
            margin-top: 5px;
            margin-right: 12px;
            height: 100%;
            position: absolute;
            width: 20px;
            flex: none;
            .express-icon {
                width: 20px;
                height: 20px;
            }
            .express-line {
                flex: 1;
                border-left: 1px dotted #e5e5e5;
            }
            .express-doted {
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background-color: #e5e5e5;
            }
        }
        .express-right {
            padding-left: 30px;
            .title,
            dec {
                margin-bottom: 3px;
            }
        }
        .express-item:last-of-type .express-left .express-line {
            border: none;
        }
    }
}
</style>