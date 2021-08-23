<template>
    <picker mode="multiSelector" 
            :value="multiIndex" 
            :range="multiArray" 
            @change="handleValueChange"
            @columnchange="handleColumnChange">
        <slot></slot>
    </picker>
</template>

<script>
    const CHINA_REGIONS = require('./regions.json')
	export default {
        props:{
            defaultRegions:{
                type:Array,
                default(){
                    return []
                }
            },
            defaultRegionCode:{
                type:String
            },
            defaultRegion:[String,Array]
        },
		data() {
			return {
                cityArr:CHINA_REGIONS[0].child,
                districtArr:CHINA_REGIONS[0].child[0].child,
                multiIndex: [0, 0, 0],
                isInitMultiArray:true,
			}
		},
        watch:{
            defaultRegion:{
                handler(region,oldRegion){
                    if(Array.isArray(region)){
                        // 避免传的是字面量的时候重复触发
                        oldRegion = oldRegion || []
                        if(region.join('')!==oldRegion.join('')){
                            this.handleDefaultRegion(region)
                        }
                    }else if(region&&region.length == 6){
                        this.handleDefaultRegion(region)
                    }else{
                        console.warn('defaultRegion非有效格式')
                    }
                },
                immediate:true,
            }
        },
        computed:{
            multiArray(){
                return this.pickedArr.map(arr=>arr.map(item=>item.name))
            },
            pickedArr(){
                // 进行初始化
                if(this.isInitMultiArray){
                    return [
                        CHINA_REGIONS,
                        CHINA_REGIONS[0].child,
                        CHINA_REGIONS[0].child[0].child
                    ]
                }
                return [CHINA_REGIONS,this.cityArr,this.districtArr];
            }
        },
		methods: {
            handleColumnChange(e){
                // console.log(e);
                this.isInitMultiArray = false;
                const that = this;
                let col = e.detail.column;
                let row = e.detail.value;
                that.multiIndex[col] = row;
                try{
                    switch(col){
                        case 0:
                            if(CHINA_REGIONS[that.multiIndex[0]].child.length==0){
                                that.cityArr = that.districtArr = [CHINA_REGIONS[that.multiIndex[0]]]
                                break;
                            }
                            that.cityArr = CHINA_REGIONS[that.multiIndex[0]].child
                            that.districtArr = CHINA_REGIONS[that.multiIndex[0]].child[that.multiIndex[1]].child
                            break;
                        case 1:
                            that.districtArr = CHINA_REGIONS[that.multiIndex[0]].child[that.multiIndex[1]].child
                            break;
                        case 2:
                            break;
                    }
                }catch(e){
                    // console.log(e);
                    that.districtArr = CHINA_REGIONS[that.multiIndex[0]].child[0].child
                }
                
            },
            handleValueChange(e){
                // 结构赋值
                let [index0,index1,index2] = e.detail.value;
                let [arr0,arr1,arr2] = this.pickedArr;
                let address = [arr0[index0],arr1[index1],arr2[index2]];
                // console.log(address);
                this.$emit('getRegion',address)
            },
            handleDefaultRegion(region){
                const isCode = !Array.isArray(region)
                this.isInitMultiArray = false;
                let children = CHINA_REGIONS
                for(let i=0;i<3;i++){
                    for(let j=0;j<children.length;j++){
                       let condition = isCode?children[j].value==region.slice(0,(i+1)*2):children[j].name.includes(region[i]);
                       if(condition){
                           // 匹配成功进行赋值
                           // console.log(i,j,children.length-1);
                           children = children[j].child;
                           if(i==0){
                               this.cityArr = children
                           }else if(i==1){
                               this.districtArr = children
                           }
                           this.$set(this.multiIndex,i,j)
                           // console.log(this.multiIndex);
                           break;
                       }else{
                           // 首次匹配失败就用默认的初始化
                           // console.log(i,j,children.length-1);
                           if(i==0 && j==(children.length-1)){
                               this.isInitMultiArray = true;
                           }
                       }
                    }
                }
            }
		},
	}
</script>
