<template>
    <div class="input-express">
        <el-dialog
            title="填写快递单号"
            :visible.sync="showDialog"
            width="926px"
        >
            <el-form
                inline
                ref="inputForm"
                label-width="100px"
                :model="form"
                :rules="rules"
            >
                <el-form-item label="物流公司：" prop="business">
                    <el-input size="small" v-model="form.business" placeholder="请输入物流公司名称" />
                </el-form-item>
                <el-form-item label="快递单号：" prop="number">
                    <el-input size="small" v-model="form.number" placeholder="请输入快递单号" />
                </el-form-item>
                <el-form-item label="备注说明：" prop="desc">
                    <el-input
                    style="width: 632px"
                    type="textarea" 
                    v-model="form.desc" 
                    placeholder="请输入详细内容，选填" 
                    resize="none"
                    rows="5"
                    />
                </el-form-item>
                <el-form-item label="上传凭证：" prop="upload">
                    <div class="xs muted">请上传快递单号凭证，选填</div>
                    <upload isSlot :file-list="fileList" @success="uploadSuccess" :limit="3">
                        <div class="column-center" style="height: 100%">
                            <i class="el-icon-camera xs" style="font-size: 24px"/>
                            <div class="muted xs mt10" style="line-height: 0">上传凭证</div>
                        </div>
                    </upload>
                </el-form-item>
            </el-form>
            <div slot="footer" class="dialog-footer">
                <el-button type="primary" @click="submitForm">确定</el-button>
                <el-button @click="showDialog = false">取消</el-button>
            </div>
        </el-dialog>
    </div>
</template>

<script>
import upload from '@/components/public/upload'
export default {
    components: {
        upload
    },
    data() {
        return {
            showDialog: false,
            form: {
                // 物流公司
                business: '',
                // 快递单号
                number: '',
                // 详细内容
                desc: ''
            },
            rules: {
                business: [{required: true, message: '请输入物流公司'}],
                number: [{required: true, message: "请输入快递单号"}],
            },
            fileList: []
        }
    },
    props: {
        value: {
            type: Boolean,
            default: false,
        },
        aid: {
            type: [String, Number],
            default: -1
        }
    },
    methods: {
        submitForm() {
            console.log(this.$refs)
            this.$refs['inputForm'].validate(async (valid) => {
                if(valid) {
                    let fileList = []
                    this.fileList.forEach(item => {
                        fileList.push(item.response.data);
                    })
                    let data = {
                        id: this.aid,
                        express_name: this.form.business,
                        invoice_no: this.form.number,
                        express_remark: this.form.desc,
                        express_image: fileList.length <= 0 ? '' : fileList[0].base_url
                    };
                    let res = await this.$post("after_sale/express", data);
                    if(res.code == 1) {
                        this.$message({
                            message: '提交成功',
                            type: 'success'
                        });
                        this.showDialog = false;
                        this.$emit("success")
                    }
                }
                else {
                    return false
                }
            })

        },
        uploadSuccess(e) {
            let fileList = Object.assign([], e);
            this.fileList = fileList;
        }
    },
    watch: {
        value(val) {
            this.showDialog = val;
        },
        showDialog(val) {
            this.$emit("input", val);
        },
    }
}
</script>

<style lang="scss" scoped>
.input-express {
    .dialog-footer {
        text-align: center;
        .el-button {
            width: 160px;
        }
    }
}
</style>