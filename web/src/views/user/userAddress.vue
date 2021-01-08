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
    <div class="user-address">
        <div class="user-address-null column-center" v-show="isDataNull">
            <div class="user-address-img">
                <img src="@A/images/null_address.png" />
            </div>
            <div class="user-address-tips muted mt10">暂无任何地址，请添加~</div>
        </div>
        <div class="user-address-contain" v-show="!isDataNull">
            <div
                class="user-address-item bg-white"
                v-for="(item, index) in addressList"
                :key="index"
                @click="onSelectAddress(item.id)"
            >
                <div class="address-info">
                    <div class="user-info row">
                        <p>{{item.contact}}</p>
                        <p class="ml10">{{item.telephone}}</p>
                    </div>
                    <div class="address-detail muted row"
                    >{{item.province}} {{item.city}} {{item.district}} {{item.address}}</div>
                </div>
                <div class="operation row-between">
                    <van-checkbox
                        @click.stop="$setDefaultAddress(index)"
                        :value="Number(item.is_default)"
                        style="font-size:12px;font-weight:400"
                        icon-size="17px"
                        :checked-color="primaryColor"
                    >{{item.is_default == 1? '默认地址': '设为默认'}}</van-checkbox>
                    <div class="row-between">
                        <div class="row">
                            <div class="opt-icon" style="margin-right:3px">
                                <img src="@A/images/icon_edit.png" />
                            </div>
                            <div class="opt-text" @click.stop="toAddressEdit($event, index)">编辑</div>
                        </div>
                        <div class="row" style="margin-left:20px;" @click.stop="showWarn(index)">
                            <div class="opt-icon" style="margin-right:3px">
                                <img src="@A/images/icon_del.png" />
                            </div>
                            <div class="opt-text">删除</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <van-dialog
            v-model="showWarning"
            show-cancel-button
            :confirmButtonColor="primaryColor"
            confirmButtonText="确认"
            @confirm="addressDelete"
        >
            <div class="dialog-content column-center">
                <div class="icon">
                    <img src="@A/images/icon_warning.png" />
                </div>
                <div class="normal" style="margin-top: 15px">确认删除该收货地址吗?</div>
            </div>
        </van-dialog>

        <div class="address-footer row-between">
            <div class="btn row bg-primary row-center" @click="toAddressEdit">
                <div class="white">新增收货地址</div>
            </div>
        </div>
    </div>
</template>

<script>
import { getAddressLists, delAddress, setDefaultAddress, 
    // convertRegionCode, addAddress 
} from "@API/user";
import wx from "weixin-js-sdk"
import {isWeixinClient} from "@U/utils"
export default {
    name: "userAddress",
    data() {
        return {
            index: 0,
            isDataNull: false,
            isDefault: false,
            addressList: [],
            showWarning: false,
        };
    },
    methods: {
        toAddressEdit: function (e, index) {
            if (index || index == 0) {
                let id = this.addressList[index].id;
                this.$router.push({
                    name: "addressEdit",
                    query: {
                        id: id,
                    },
                });
            } else {
                this.$router.push({
                    name: "addressEdit",
                    query: {
                        id: -1,
                    },
                });
            }
        },
        addressDelete() {
            this.$delAddress();
        },
        onSelectAddress(id) {
            if (!this.type) return;
            this.$ls.set('addressid', id)
            this.$router.go(-1)
        },
        showWarn(index) {
            this.index = index;
            this.showWarning = true;
        },
        $getAddressLists() {
            getAddressLists().then((res) => {
                if (res.code == 1) {
                    if (res.data.length) {
                        this.addressList = res.data;
                        this.isDataNull = false;
                    } else {
                        this.isDataNull = true;
                    }
                }
            });
        },
        $delAddress() {
            let id = this.addressList[this.index].id;
            delAddress(id).then((res) => {
                if (res.code == 1) {
                    this.$toast({ message: res.msg });
                    this.showWarning = false
                    this.$getAddressLists();
                }
            });
        },
        $setDefaultAddress(index) {
            if (this.addressList[index].is_default) {
                this.addressList[index].is_default = true;
                return;
            }
            let id = this.addressList[index].id;
            setDefaultAddress(id).then((res) => {
                if (res.code == 1) {
                    this.$toast({ message: res.msg });
                    this.$getAddressLists();
                }
            });
        },
        chooseAddressFromWeChat() {
            // 非微信环境
            if(!isWeixinClient()) {
                console.warn("非微信环境无法导入")
                return;
            }
            else {
                wx.openAddress({
                    success: res => {
                        var data = {
                            contact: res.userName,
                            province: res.provinceName,
                            city: res.cityName,
                            district: res.countryName,
                            address: res.detailInfo,
                            telephone: res.telNumber
                        }
                        this.$ls.set("addressinfo", JSON.stringify(data));
                        this.$router.push({name: "addressEdit"});
                    },
                    fail: function(err) {
                        console.log('err:', err)
                    }
                })
            }
        }
    },
    created() {
        this.type = this.$route.query.type;
    },
    activated() {
        this.$getAddressLists();
    }
};
</script>

<style lang="scss" scoped>
img {
    height: 100%;
    width: 100%;
}
.user-address {
    height: calc(100vh - 60px);
    & .user-address-null {
        height: 100%;
        & .user-address-img {
            width: 150px;
            height: 150px;
        }
        & .user-address-tips {
            font-size: 13px;
            font-weight: 400;
        }
    }
    & .address-footer {
        background-color: white;
        height: 60px;
        padding-left: 15px;
        padding-right: 15px;
        & .btn {
            flex: 1;
            height: 37px;
            border-radius: 30px;
            .wechat-icon {
                width: 24px;
                height: 24px;
            }
        }
    }
    .dialog-content {
        height: 115px;
    }
}

.user-address-contain {
    height: 100%;
    overflow: hidden;
    & .user-address-item {
        margin-top: 10px;
        padding-left: 15px;
        padding-top: 10px;
        & .address-info {
            border-bottom: 1px solid #e5e5e5;
            & .user-info {
                font-size: 15px;
                line-height: 25px;
                font-weight: bold;
                margin-bottom: 8px;
            }
            & .address-detail {
                font-weight: 400;
                font-size: 13px;
                line-height: 23px;
                margin-bottom: 12.5px;
            }
        }
        & .operation {
            padding: 12px 15px 12px 0;
            & .opt-text {
                font-size: 13px;
                font-weight: 400;
                line-height: 19px;
            }
            .opt-icon {
                width: 22px;
                height: 22px;
            }
        }
    }
}
</style>