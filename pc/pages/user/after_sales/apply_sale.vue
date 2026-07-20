<template>
    <div class="apply-sale-list">
        <div class="goods-info">
            <div class="table-head row">
                <div class="info">商品信息</div>
                <div class="price row-center">单价</div>
                <div class="num row-center">数量</div>
                <div class="sum row-center">合计</div>
                <div class="act-pay row-center">实付</div>
            </div>
            <div class="table-content row mt10">
                <div class="info row">
                    <div class="row">
                        <el-image style="width: 72px;height: 72px; flex: none" :src="goods.image" />
                        <div class="ml10" style="flex: 1; align-self: flex-start">
                            <div class="line2">{{goods.goods_name}}</div>
                            <div class="mt10 muted sm">{{goods.spec_value}}</div>
                        </div>
                    </div>
                </div>
                <div class="price row-center" style="align-self: flex-start">
                    <price-formate :price="goods.goods_price"/>
                </div>
                <div class="num row-center" style="align-self: flex-start">
                    {{goods.goods_num}}
                </div>
                <div class="sum row-center" style="align-self: flex-start">
                    <price-formate :price="goods.total_price"/>
                </div>
                <div class="act-pay row-center" style="align-self: flex-start">
                    <price-formate :price="goods.total_pay_price"/>
                </div>
            </div>
        </div>
        <div class="apply-form" >
            <el-form ref="form" :model="form" :rules="rules" label-width="100px">
                <el-form-item label="退款类型：" prop="applyType">
                    <el-radio-group v-model="applyType" @change="applyRadioChange">
                        <el-radio label="仅退款"></el-radio>
                        <el-radio label="退货退款"></el-radio>
                    </el-radio-group>
                </el-form-item>
                <el-form-item label="退款原因：" prop="reason">
                    <el-select v-model="form.reason" placeholder="请选择">
                        <el-option :label="item" :value="item" v-for="(item, index) in reason" :key="index" />
                    </el-select>
                </el-form-item>
                <el-form-item label="退款说明：" prop="desc">
                    <el-input
                    style="width: 600px"
                    type="textarea" 
                    v-model="form.desc" 
                    placeholder="退款说明（200字以内）" 
                    maxlength="200"
                    show-word-limit
                    resize="none"
                    rows="5"
                    />
                </el-form-item>
                <el-form-item>
                    <upload isSlot :file-list="fileList" @success="uploadSuccess" :limit="3">
                        <div class="column-center" style="height: 100%">
                            <i class="el-icon-camera xs" style="font-size: 24px"/>
                            <div class="muted xs mt10" style="line-height: 0">上传凭证</div>
                        </div>
                    </upload>
                    <div class="xs muted">最多可上传3张图片，支持jpg、png格式，图片大小1M以内</div>
                </el-form-item>
                 <el-form-item>
                    <el-button type="primary" @click="onSubmit">提交申请</el-button>
                </el-form-item>
            </el-form>
        </div>
    </div>
</template>

<script>
import upload from '@/components/public/upload'
export default {
    components: {
        upload
    },
    head() {
        return {
        title: this.$store.getters.headTitle,
        link: [{ rel: "icon", type: "image/x-icon", href: this.$store.getters.favicon}],
        };
    },
    layout: "user_lauout",
    name: 'applySale',
    async asyncData({$get, $post, query}) {
        let goods = {};
        let reason = [];
        let res = await $get('after_sale/goodsInfo', {params: {
            order_id: query.order_id,
            item_id: query.item_id
        }})
        if(res.code == 1) {
            goods = res.data.goods;
            reason = res.data.reason
        }
        return {
            reason,
            goods
        }
    },
    data() {
        return {
            applyType: '仅退款',
            form: {
                applyType: 0,
                reason: '',
                desc: ""
            },
            rules: {
                applyType: [
                    {required: true, message: "请选择退款类型" }
                ],
                reason: [
                    {required: true, message: "请选择退款原因", triggle: 'blur'}
                ]
            },
            fileList: [],
        }
    },
    methods: {
        applyRadioChange(value) {
            value == '仅退款' ? this.form.applyType = 0 : this.form.applyType = 1;
        },

        onSubmit(e) {
            this.$refs['form'].validate((valid) => {
                if(valid) {
                    if (this.$route.query.afterSaleId) {
                        this.applyAgainFun();
                    } else {
                        this.$applyAfterSale();
                    }
                }
                else {
                    return false
                }
            })
        },

        onUploadChange(e) {
            let fileList = Object.assign([], this.fileList);
            fileList.push(e);
            this.fileList = fileList;
            console.log('onChange', e, ' fileList:', this.fileList)

        },

        uploadSuccess(e) {
            let fileList = Object.assign([], e);
            this.fileList = fileList;
            console.log('onSuccess', e, ' fileList:', this.fileList)
        },

        // 重新申请
        async $applyAgain() {
            let fileList = []
            this.fileList.forEach(item => {
                fileList.push(item.response.data);
            })
            const data = {
                id: this.$route.query.afterSaleId,
                reason: this.form.reason,
                refund_type: this.form.applyType,
                remark: this.form.desc,
                img: fileList.length <= 0 ? '' : fileList[0].base_url
            };
            let res = await $post("after_sale/again", data);
            if(res.code == 1) {
                this.$message({
                    message: '提交成功',
                    type: 'success'
                });
                this.$router.push("/user/after_sales/apply_result?afterSaleId=" + res.data.after_sale_id)
            }
        },

        // 初次申请售后
        async $applyAfterSale() {
            let fileList = []
            this.fileList.forEach(item => {
                fileList.push(item.response.data);
            })

            const data = {
                item_id: this.$route.query.item_id,
                order_id: this.$route.query.order_id,
                reason: this.form.reason,
                refund_type: this.form.applyType,
                remark: this.form.desc,
                // 目前只支持单个
                img: fileList.length <= 0 ? '' : fileList[0].base_url
            };
            let res = await this.$post("after_sale/add", data);
            if(res.code == 1) {
                this.$message({
                    message: '提交成功',
                    type: 'success'
                });
                this.$router.push("/user/after_sales/apply_result?afterSaleId=" + res.data.after_sale_id)
            }
        }
    }
}
</script>

<style lang="scss" scoped>
    .apply-sale-list {
        padding: 10px;
        .goods-info {
            .table-head {
                padding: 10px 20px;
                border-bottom: 1px solid #e5e5e5;

            }
            .table-content {
                padding: 10px 20px;
                border-bottom: 1px solid #e5e5e5;
            }
            .info {
                width: 500px;
            }
            .price {
                width: 100px;
            }
            .num {
                width: 100px;
            }
            .sum {
                width: 100px;
            }
            .act-pay {
                width: 100px;
            }
        }
        .apply-form {
            margin-top: 24px;

        }
    }
</style>