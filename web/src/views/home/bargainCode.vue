<template>
    <div class="bargain-code">
        <van-tabs 
            v-model="active"
            :title-active-color="primaryColor"
            @change="onChange"
        >
            <van-tab :title="items.name" :name="items.type" v-for="(items) in bargainCode" :key="items.name">
                <bargain-code-list v-if="items.isShow" :id="items.type"></bargain-code-list>
            </van-tab>
        </van-tabs>
    </div>
</template>

<script>
import {bargainCodeType} from "@U/type"
import BargainCodeList from "@C/BargainCodeList"
export default {
    name: "bargainCode",
    components: {
        BargainCodeList
    },
    data() {
        return {
            active: bargainCodeType.ALL,
            bargainCode: [{
                name: "全部",
                type: bargainCodeType.ALL,
                isShow: true,
            },{
                name: "进行中",
                type: bargainCodeType.RUNNING,
                isShow: true,
            },{
                name: "成功",
                type: bargainCodeType.SUCCESS,
                isShow: true,
            },{
                name: "失败",
                type: bargainCodeType.FAIL,
                isShow: true,
            },]
        }
    },
    methods: {
        onChange(name) {
            let index = this.bargainCode.findIndex(item => {
                return item.type == name
            });
            if(index != -1) {
                this.bargainCode[index].isShow = true;
            }
        }
    },
    created() {

    },
    mounted() {
        let {active} = this.$route.query;
        if(active) {
            this.active = active
        }
    },
}
</script>

<style lang="scss" scoped>

</style>