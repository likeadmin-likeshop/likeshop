<template>
	<u-modal v-model="show" :show-cancel-button	="true" :content="getTipsText" @confirm="onConfirm" confirm-color="#ff2c3c"></u-modal>
</template>

<script>
	import {
		cancelOrder,
		delOrder,
		confirmOrder
	} from '@/api/order';
	export default {
		props: {
			type: Number,
			orderId: [Number, String]
		},
		data() {
			return {
				show: false
			};
		},
		methods: {
			open() {
				this.show = true
			},
			close() {
				this.show = false
			},
			async onConfirm() {
				const {
					type,
					orderId
				} = this;
				let res = null;

				switch (type) {
					case 0:
						res = await cancelOrder(orderId);
						break;

					case 1:
						res = await delOrder(orderId);
						break;

					case 2:
						res = await confirmOrder(orderId);
						break;
				}

				if (res.code == 1) {
					this.close()
					this.$emit("refresh")
					this.$toast({
						title: res.msg
					});
				}
			},
		},
		computed: {

			getTipsText() {
				const {
					type
				} = this
				switch (type) {
					case 0:
						return "确认取消订单吗？"
					case 1:
						return "确认删除订单吗?"
					case 2:
						return "确认收货吗?"
				}
			}
		}
	}
</script>

<style>

</style>
