<template>
	<view class="address row bg-white">
	    <image class="icon-md mr20" src="/static/images/icon_address.png"></image>
	    <view class="flex1 mr20">
	        <view class="black md" v-if="!address.contact && isSelect">设置收货地址</view>
	        <view v-else>
	            <text class="name md mr10">{{address.contact}}</text>
	            <text class="phone md">{{address.telephone}}</text>
	            <view class="area sm mt10 lighter">
	                {{address.province}} {{address.city}} {{address.district}} {{address.address}}
	            </view>
	        </view>
	    </view>
	    <image v-if="isSelect" class="icon-sm" src="/static/images/arrow_right.png"></image>
	</view>
</template>

<script>
	export default {
		props:{
			isSelect: {
				type: Boolean,
				default: true
			},
			address: {
				type: [Object, Array],
				default: () => ({})
			}
		},
		data() {
			return {
				
			};
		}
	}
</script>

<style lang="scss">
.address {
    min-height: 164rpx;
    padding: 0 24rpx;
	border-radius: 14rpx;
	margin: 20rpx 20rpx 0;
}

</style>
