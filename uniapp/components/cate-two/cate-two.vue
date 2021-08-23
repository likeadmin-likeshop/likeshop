<template>
	<view class="cate-two">
		<tabs :active="selectIndex" @change="changeShow" :config="{itemWidth: 150}">
			<tab v-for="(item, index) in cateList" :key="index" :title="item.name">
				<cate-list v-if="item.isShow" :type="2" :cate="item"></cate-list>
			</tab>
		</tabs>
	</view>
</template>

<script>
	export default {
		name:"cate-two",
		props: {
			list: {
				type: Array,
				default: () => ([])
			}
		},
		data() {
			return {
				selectIndex: 0,
				cateList: []
			};
		},
		methods:{
			changeShow(index) {
				this.selectIndex = index
				this.cateList[this.selectIndex].isShow = true
			},
		},
		watch: {
			list: {
				immediate: true,
				handler(val) {
					let index = val.findIndex((item) => item.type == 1)
					this.selectIndex = index == -1 ? 0 : index
					val.forEach((item, index) => item.isShow = this.selectIndex == index ? true : false)
					this.cateList = val
				}
			}
		},
	}
</script>

<style lang="scss">

</style>
