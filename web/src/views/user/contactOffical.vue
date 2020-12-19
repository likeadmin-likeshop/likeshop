<template>
    <div class="contact-offical">
        <div class="header">

        </div>
        <div class="content column-center">
            <div class="content-view column-center bg-white">
                <img class="content-img" src="@A/images/customer_code.png" />
                <div class="primary wechat-num lg">客服微信号：LingQZhong</div>
                <div class="row-center copy-btn xxl white" @click="onCopy('LingQZhong')">
                    <img class="mr5" style="width: 32px;height: 25px;" src="@A/images/wechat-btn-icon.png" />
                    复制去微信添加
                </div>
                <div class="mt20 normal xs" style="line-height: 45px">服务时间：周一至周六9:00-19:00</div>
                <div class="md bold" style="line-height: 50px" @click="tipsShow()">在线客服</div>
            </div>
            <div class="xs white" style="margin-top: 40px;line-height: 49px;">
                无法添加或疑难问题请联系工作人员
            </div>
            <div class="row white">
                <div class="xs" style="line-height: 49px;">400-8489-315</div>
                <a class="ml10 phone-btn xs row-center white" href="tel:400-8489-315">拨打</a>
                <div class="ml5 copy-phone-btn xs row-center" @click="onCopy('400-8489-315')">复制</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'contactOffical',
    methods: {
        tipsShow() {
            this.$toast("该功能暂未开放")
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