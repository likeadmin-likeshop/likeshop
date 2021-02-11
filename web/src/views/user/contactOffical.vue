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
    <div class="contact-offical">
        <div class="header">

        </div>
        <div class="content column-center">
            <div class="content-view column-center bg-white">
                <img class="content-img" :src="server.image" />
                <div class="primary wechat-num lg">客服微信</div>
                <div class="row-center copy-btn xxl white" @click="onCopy(server.wechat)">
                    <img class="mr5" style="width: 32px;height: 25px;" src="@A/images/wechat-btn-icon.png" />
                    微信扫码添加
                </div>
                <div class="mt20 normal xs" style="line-height: 35px">{{server.time}}</div>
                <div class="sm row" @click="tipsShow()">
                    <span style="line-height: 50px;">在线客服</span>
                </div>
            </div>
            <div class="xs white" style="margin-top: 40px;line-height: 49px;">
                无法添加或疑难问题请联系工作人员
            </div>
            <div class="row white">
                <div class="xs" style="line-height: 49px;">{{server.phone}}</div>
                <a class="ml10 phone-btn xs row-center white" :href="'tel:' + server.phone">拨打</a>
                <div class="ml5 copy-phone-btn xs row-center" @click="onCopy(server.phone)">复制</div>
            </div>
        </div>
    </div>
</template>

<script>
import {getService} from "@/api/react_native"
export default {
    name: 'contactOffical',
    data() {
        return {
            server: {} 
        }
    },
    created() {
        this.$getService()
    },
    methods: {
        $getService() {
            getService().then(res => {
                if(res.code == 1) {
                    this.server = res.data
                }
            })
        },
        tipsShow() {
            this.$toast("该功能暂未开放")
        },
        onCopy(str) {
            let aux = document.createElement("input");
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

    }
}
</script>

<style lang="scss" scoped>
    .contact-offical {
        min-height: 100vh;
        background: linear-gradient(180deg, #F62318 0%, #F20407 100%);  
        .header {
            background-image: url(./../../assets/images/contact-offical-bg.png);
            background-size: 100% 100%;
            height: 383px;
            width: 100%;
        }
        .content {
            
            
            .content-view {
                border: 5px solid #FA7949;
                width: 310px;
                border-radius: 10px;
                margin-top: -350px;
                .content-img {
                    margin-top: 20px;
                    height: 192px;
                    width: 192px;
                }
                .wechat-num {
                    line-height: 45px;
                }
                .copy-btn {
                    background: linear-gradient(180deg, #FFA200 0%, #FF5E44 100%);
                    width: 230px;
                    height: 50px;
                    border-radius: 50px;
                    line-height: 49px;
                    margin-top: 30px;
                }
            }
            .phone-btn {
                background: linear-gradient(180deg, #FFA200 0%, #FF5E44 100%);
                height: 24px;
                width: 60px;
                line-height: 33px;
                border-radius: 50px;
            }
            .copy-phone-btn {
                background-color: rgba($color: #fff, $alpha: 0.5);
                height: 24px;
                width: 60px;
                line-height: 33px;
                border-radius: 50px;
            }
        }
    }
</style>