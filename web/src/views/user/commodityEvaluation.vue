<template>
    <div class="goods-evaluate-detail">
        <order-goods :list="[goods]" />
        <div class="goods-evaluate row">
            <div class="label nr">商品评价</div>
            <van-rate v-model="goodsRate" :color="primaryColor" @change="goodsRateChange"></van-rate>
            <div
                class="rate-desc muted nr"
                :class="{primary: goodsRate>=3}"
                :hidden="goodsRate == 0"
            >{{rateDesc}}</div>
        </div>
        <div class="rate bg-white">
            <!-- <div class="item nr lighter mb10">{{goods[0] && goods[0].name}}</div> -->
            <div class="item nr lighter mb10">其他评价</div>
            <div class="item row mb10">
                <div class="label">描述相符</div>
                <van-rate :color="primaryColor" v-model="descRate" />
            </div>
            <div class="item row mb10">
                <div class="label">服务态度</div>
                <van-rate :color="primaryColor" v-model="serverRate" />
            </div>
            <div class="item row">
                <div class="label">配送服务</div>
                <van-rate :color="primaryColor" v-model="deliveryRate" />
            </div>
        </div>
        <div class="goods-dec bg-white">
            <div class="title mb10 md">商品描述</div>
            <!-- <div class="textarea bg-gray mb20"> -->
            <van-field
                v-model="comment"
                class="textarea bg-gray mb20 nr"
                rows="4"
                autosize
                type="textarea"
                placeholder="宝贝收到还满意吗，说说你的使用心得。分享给想买的他们吧！！"
            />
            <!-- </div> -->

            <van-uploader
                preview-size="80px"
                style="margin-top: 15px"
                :file-list="fileList"
                multiple
                max-count="5"
                :after-read="afterRead"
                @delete="onDelete"
            />
        </div>
        <button class="btn bg-primary white br60 row-center" @click="onSubmit">立即评价</button>
    </div>
</template>

<script>
import OrderGoods from "@C/OrderGoods";
import { HTTP_URL, ACCESS_TOKEN } from "@/configs";
import { goodsComment, getCommentInfo } from "@/api/user";
import axios from "axios";
import {mapState} from 'vuex'
export default {
    name: "commodityEvaluation",
    components: {
        OrderGoods,
    },
    data() {
        return {
            goodsRate: 0,
            descRate: 0,
            serverRate: 0,
            deliveryRate: 0,
            comment: "",
            rateDesc: "差评",
            fileList: [],
            goods: [],
        };
    },
    created() {
        let { id } = this.$route.query;
        this.id = id;
        this.$getCommentInfo();
    },
    methods: {
        goodsRateChange(value) {
            if (value <= 2) {
                this.rateDesc = "差评";
            } else if (value == 3) {
                this.rateDesc = "中评";
            } else {
                this.rateDesc = "好评";
            }
        },
        onSubmit() {
            let {
                goodsRate,
                fileList,
                comment,
                deliveryRate,
                descRate,
                serverRate,
            } = this;
            let image = fileList.map((item) => item.url);
            if (!goodsRate) return this.$toast("请对商品进行评分");
            if (!descRate) return this.$toast("请对描述相符进行评分");
            if (!serverRate) return this.$toast("请对服务态度进行评分");
            if (!deliveryRate) return this.$toast("请对配送服务进行评分");
            goodsComment({
                id: this.id,
                goods_comment: goodsRate,
                service_comment: serverRate,
                express_comment: deliveryRate,
                description_comment: descRate,
                comment,
                image,
            }).then((res) => {
                if (res.code == 1) {
                    this.$toast("评价成功");
                    setTimeout(() => {
                        this.$router.replace({
                            name: 'goodsEvaluate',
                            query: {type: 1}
                        })
                    },1000)
                }
            });
        },
        $getCommentInfo() {
            getCommentInfo({
                id: this.id,
            }).then((res) => {
                if (res.code == 1) {
                    this.goods = res.data;
                }
            });
        },
        async afterRead(e) {
            let uploadArr = [];
            if (e.length) {
                e.forEach((item) => {
                    uploadArr.push(this.uploadFile(item.file));
                });
            } else {
                uploadArr.push(this.uploadFile(e.file));
            }
            Promise.all(uploadArr).then((res) => {
                const { fileList = [] } = this;
                fileList.push(...res);
                this.$toast().clear();
                this.fileList = fileList;
            });
        },
        uploadFile(file) {
            let params = new FormData();
            params.append("file", file);
            return new Promise((resolve) => {
                axios
                    .post(HTTP_URL + "file/formimage", params, {
                        headers: { 
                            "Content-Type": "multipart/form-data",
                            "token": this.token
                        },
                    })
                    .then(({ data }) => {
                        if (data.code == 1) {
                            resolve(data.data);
                        } else {
                            this.$toast("上传失败，请重新上传");
                        }
                    });
            });
        },
        onDelete(current) {
            this.fileList = this.fileList.filter(item => item.name != current.name)
            
        },
    },
    computed: {
       ...mapState(['token'])
  }
};
</script>

<style lang="scss" scoped>
.goods-evaluate-detail {
    text-align: left;
    .goods-card {
        padding: 10px 12px;
        background-color: white;
        .goods-img {
            width: 80px;
            height: 80px;
            flex: none;
        }
        .goods-desc {
            margin-left: 12px;
        }
    }
    .goods-evaluate {
        padding: 10px 15px;
        background-color: white;
        border: 1px solid #f2f2f2;
        .label {
            width: 85px;
        }
        .rate-desc {
            margin-left: 15px;
            line-height: 20px;
        }
    }
    .rate {
        padding: 10px 15px;
        .item {
            .label {
                width: 85px;
            }
        }
    }
    .goods-dec {
        padding: 10px;
        margin-top: 10px;
        .title {
            margin-left: 5px;
            font-weight: bold;
        }
        .textarea {
            height: 120px;
            padding: 10px 16px;
            border-radius: 5px;
            line-height: 20px;
        }
    }
    .btn {
        margin: 20px 13px 0;
        padding: 10px 143px;
        border: none;
    }
}
</style>