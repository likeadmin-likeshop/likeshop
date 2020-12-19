<template>
    <div class="server-explain-container" v-html="serverExplain">
        
    </div>    
</template>

<script>
import {getServerProto, getPrivatePolicy, getAfterSaleGuar} from "@API/app"
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
