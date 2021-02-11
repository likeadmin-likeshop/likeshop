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
    <div class="server-explain-container" v-html="serverExplain">
        
    </div>    
</template>

<script>
import {getServerProto, getPrivatePolicy, getAfterSaleGuar} from "@API/react_native"
export default {
    name: 'serverExplain',
    data() {
        return {
            serverExplain: {}
        }
    },
    methods: {
        $getServerProto() {
            getServerProto().then(res => {
                if(res.code == 1) {
                    this.serverExplain = res.data
                }
            })
        },
        $getPrivatePolicy() {
            getPrivatePolicy().then(res => {
                if(res.code == 1) {
                    this.serverExplain = res.data
                }
            })
        },
        $getAfterSaleGuar() {
            getAfterSaleGuar().then(res => {
                if(res.code == 1) {
                    this.serverExplain = res.data
                }
            })
        },
    },
    mounted() {
        let {type} = this.$route.query;
        type = parseInt(type);
        document.title = type == 0 ? '服务协议' : type == 1 ? '隐私政策' : '售后保障';
        switch(type) {
            case 0:
                this.$getServerProto() 
                break;
            case 1:
                this.$getPrivatePolicy()
                break;
            case 2:
                this.$getAfterSaleGuar()
                break;
            default:
                this.$getServerProto() 
                break;
        }
    }
}
</script>

<style lang="scss" scoped>
    .server-explain-container {
        padding: 10px;
    }
</style>
