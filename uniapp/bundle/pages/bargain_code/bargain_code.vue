<template>
    <view class="bargain-code-container">
        <tabs :active="active" @change="onChange">
            <tab v-for="(item, index) in bargain" :key="item.type" :title="item.name" >
                <bargain-list :ref="item.ref_name" :bargainType="item.type" v-if="item.isShow" />
            </tab>
        </tabs>
    </view>
</template>

<script>
    import {bargainType} from "@/utils/type"
    export default {
        data() {
            return {
                active: 0,
                bargainCodeType: bargainType.ALL,
                bargain: [{
                    name: '全部',
                    type: bargainType.ALL,
                    ref_name: 'all',
                    isShow: true
                }, {
                    name: '砍价中',
                    type: bargainType.BARGINNING,
                    ref_name: 'barginning',
                    isShow: false
                }, {
                    name: "砍价成功",
                    type: bargainType.SUCCESS,
                    ref_name: 'success',
                    isShow: false
                }, {
                    name: '砍价失败',
                    type: bargainType.FAIL,
                    ref_name: 'fail',
                    isShow: false
                }]
            }
        },
        onLoad(options) {
        },
        onReachBottom: function () {
          const {
            active, bargain
          } = this;
          let type = bargain[active].ref_name;
          let myComponent = this.$refs[type][0];
          if (myComponent.$getBargainActivityList) {
            myComponent.$getBargainActivityList();
          }
        },
        methods: {
            onChange(active) {
                const {bargain} = this;
                console.log(active)
                let type = bargain[active].ref_name
                let index = bargain.findIndex(item => {
                  return item.ref_name == type;
                });
                
                if (index != -1) {
                    this.bargain[index].isShow = true;
                    console.log(this.bargain)
                    this.active = index;
                }
                
                this.$nextTick(() => {                    
                    console.log(this.$refs, "refs", type)
                    console.log('this.$refs[all]', this.$refs['all'])
                    if(this.$refs[type] && this.$refs[type][0].$getBargainActivityList) {
                        this.$refs[type][0].$getBargainActivityList();
                    }
                })
            }
        }
    }
</script>

<style lang="scss">
    .bargain-code-container {
        
    }
</style>
