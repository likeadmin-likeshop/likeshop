<template>
    <div class="user-withdraw">
        <div class="user-tab-container">
            <van-tabs 
                v-model="active"
                line-width="40"
                :color="primaryColor"
                title-inactive-color="#333333"
                @change="onChangeTab"
            >
                <van-tab title="账户余额" name="1">
                    <div class="bg-white withdraw-container mt10">
                        <div class="input row-center">
                            <div style="font-size: 23px;align-self: flex-end;margin-bottom: 5px">¥</div>
                            <input v-model="money" placeholder="0.00"/>
                            <div class="column" style="flex: none;">
                                <div class="xs primary" style="text-align: right;" @click="allWithdraw">全部提现</div>
                                <div class="xs" style="color: #BBBBBB">可提现余额￥{{widthDrawConfig.able_withdraw}}</div>
                            </div>
                        </div>
                        <div class="tips mt10 muted row">
                            提示：提现需扣除服务费1%
                            <!-- <div class="primary ml5">¥ {{widthDrawConfig.able_withdraw}}</div> -->
                        </div>
                    </div>
                    <div class="withdraw-btn bg-primary lg white row-center" @click="$applyWithdraw">确认提现</div>
                    <router-link :to="{name: 'userWithdrawCode'}" class="mt20 nr lighter row-center">提现记录</router-link>
                </van-tab>
                <van-tab title="微信钱包" name="2">
                    <div class="bg-white form-container">
                        <div class="input-item row md">
                            <div class="input-label">微信账号</div>
                            <input v-model="account" placeholder="请输入微信账号"/>
                        </div>
                        <div class="input-item row md">
                            <div class="input-label ">真实姓名</div>
                            <input v-model="realName" placeholder="请输入真实姓名"/>
                        </div>
                        <div class="input-item row md">
                            <div class="input-label ">备注</div>
                            <input v-model="remark" placeholder="（选填）"/>
                        </div>
                        <div class="uploader-container row mt10">
                            <van-uploader :after-read="afterRead" v-model="fileList" :max-count="1">
                                <div class="column-center" slot="default">
                                    <div class="upload-area row-center">
                                        <img width="27px" height="22px" src="@A/images/uploader_icon.png"/>
                                    </div>
                                    <div class="mt5 normal nr" style="line-height: 18px;">微信收款码</div>
                                </div>
                            </van-uploader>
                        </div>
                    </div>
                    <div class="bg-white withdraw-container mt10">
                        <div class="input row-center">
                            <div style="font-size: 23px;align-self: flex-end;margin-bottom: 5px">¥</div>
                            <input v-model="money" placeholder="0.00"/>
                            <div class="column" style="flex: none;">
                                <div class="xs primary" style="text-align: right;" @click="allWithdraw">全部提现</div>
                                <div class="xs" style="color: #BBBBBB">可提现余额￥{{widthDrawConfig.able_withdraw}}</div>
                            </div>
                        </div>
                        <div class="tips mt10 muted row">
                            提示：提现需扣除服务费1%
                            <!-- <div class="primary ml5">¥ {{widthDrawConfig.able_withdraw}}</div> -->
                        </div>
                    </div>
                    <div class="withdraw-btn bg-primary lg white row-center" @click="$applyWithdraw">确认提现</div>
                    <router-link :to="{name: 'userWithdrawCode'}" class="mt20 nr lighter row-center">提现记录</router-link>
                </van-tab>
                <van-tab title="支付宝" name="3">
                    <div class="bg-white form-container">
                        <div class="input-item row md">
                            <div class="input-label ">支付宝账号</div>
                            <input v-model="account" placeholder="请输入支付宝账号"/>
                        </div>
                        <div class="input-item row md">
                            <div class="input-label ">真实姓名</div>
                            <input v-model="realName" placeholder="请输入真实姓名"/>
                        </div>
                        <div class="input-item row md">
                            <div class="input-label ">备注</div>
                            <input v-model="remark" placeholder="（选填）"/>
                        </div>
                        <div class="uploader-container row mt10">
                            <van-uploader :after-read="afterRead" v-model="fileList" :max-count="1">
                                <div class="column-center" slot="default">
                                    <div class="upload-area row-center">
                                        <img width="27px" height="22px" src="@A/images/uploader_icon.png"/>
                                    </div>
                                    <div class="mt5 normal nr" style="line-height: 18px;">支付宝收款码</div>
                                </div>
                            </van-uploader>
                        </div>
                    </div>
                    <div class="bg-white withdraw-container mt10">
                        <div class="input row-center">
                            <div style="font-size: 23px;align-self: flex-end;margin-bottom: 5px">¥</div>
                            <input v-model="money" placeholder="0.00"/>
                            <div class="column" style="flex: none;">
                                <div class="xs primary" style="text-align: right;" @click="allWithdraw">全部提现</div>
                                <div class="xs" style="color: #BBBBBB">可提现余额￥{{widthDrawConfig.able_withdraw}}</div>
                            </div>
                        </div>
                        <div class="tips mt10 muted row">
                            提示：提现需扣除服务费1%
                            <!-- <div class="primary ml5">¥ {{widthDrawConfig.able_withdraw}}</div> -->
                        </div>
                    </div>
                    <div class="withdraw-btn bg-primary lg white row-center" @click="$applyWithdraw">确认提现</div>
                    <router-link :to="{name: 'userWithdrawCode'}" class="mt20 nr lighter row-center">提现记录</router-link>
                </van-tab>
            </van-tabs>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import { HTTP_URL, ACCESS_TOKEN } from "@/configs";
import {getWithdrawConfig, applyWithdraw} from "@API/user"
import {mapState} from 'vuex'
export default {
    name: 'userWithdraw',
    data() {
        return {
            active: "1",
            money: '',
            account: '',
            realName: '',
            qrCode: '',
            remark: '',
            fileList: [],
            widthDrawConfig: {},
        }
    },
    methods: {
        // 图片文件上传
        afterRead(e) {
            let uploadArr = [];
            if(e.length) {
                e.forEach((item) => {
                    uploadArr.push(this.uploadFile(item.file))
                })
            } else {
                uploadArr.push(this.uploadFile(e.file));
            }
            Promise.all(uploadArr).then((res) => {
                this.qrCode = res[0].url
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

        onChangeTab(e) {
            this.fileList = []
            this.active = e;
            // this.money = '';
            // this.account = '';
            // this.realName = '';
            // this.remark = ''
        },

        $getWithdrawConfig() {
            getWithdrawConfig().then(res => {
                if(res.code == 1) {
                    this.widthDrawConfig = res.data;
                }
            })
        },

        allWithdraw() {
            const {widthDrawConfig} = this
            this.money = widthDrawConfig.able_withdraw
        },
        
        // 申请提现
        $applyWithdraw() {
            if(!this.money) {
                this.$toast("请输入提现金额")
                return;
            }
            switch(this.active) {
                case "1":
                    
                    break;
                case "2":
                case "3":
                    if(!this.account) {
                        this.$toast("请输入账号信息");
                        return;
                    }
                    if(!this.realName) {
                        this.$toast("请输入真实姓名");
                        return;
                    }
                    if(!this.qrCode) {
                        this.$toast("请上传收款码");
                        return;
                    }
                    break;
            }
            const data = {
                type: this.active,
                money: this.money,
                account: this.account,
                real_name: this.realName,
                money_qr_code: this.qrCode,
                remark: this.remark
            }
            applyWithdraw(data).then(res => {
                if(res.code == 1) {
                    this.$router.push({name: 'widthdrawResult', query: {
                        id: res.data.id
                    }})
                }
            })
        }
    },
    mounted() {
        this.$getWithdrawConfig()
    },
    computed: {
       ...mapState(['token'])
  }
}
</script>

<style lang="scss" scoped>
    .user-withdraw {
        .user-tab-container {
            padding: 10px 15px;
            .withdraw-container {
                padding: 26px 36px;
                border-radius: 10px;
                .input {
                    border-bottom: $--border-base;
                    input {
                        width: 100%;
                        height: 47px;
                        text-align: left;
                        font-size: 33px;
                        margin-left: 15px;
                    }
                }
            }
            .withdraw-btn {
                background: linear-gradient(80deg, #F95F2F 0%, #FF2C3C 100%);
                line-height: 22px;
                height: 42px;
                margin-top: 15px;
                border-radius: 50px;
            }
            .form-container {
                border-radius: 10px;
                padding: 0 18px 13px;
                line-height: 18px;
                margin-top: 5px;
                .input-item {
                    padding: 14px 0 15px;
                    border-bottom: 1px solid $--border-color-base;
                    .input-label {
                        width: 100px;
                        text-align: left;
                        line-height: 18px;
                    }
                    input {
                        flex: 1;
                    }
                }
                .uploader-container  {
                   .upload-area {
                        width: 80px;
                        height: 80px;
                        border: 2px dashed $--border-color-base;
                        border-radius: 5px;
                   }
                }
            }
        }
    }
    /deep/.van-tabs .van-tabs__wrap  {
        border-radius: 5px;
    }
    /deep/.van-tabs__line {
        background: linear-gradient(90deg, #F79C0C 0%, #FF2C3C 100%);
        bottom: 0.5rem;
        width: 25px !important;
        height: 3px !important;
        border-radius: 50px;
    }
</style>