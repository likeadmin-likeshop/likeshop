<template>
	<uni-popup id="confirmPop" ref="confirmPop" type="dialog">
		<uni-popup-dialog type="msgType" :content="getTipsText" use-slot id="delete-dialog" :show="deleteSure"
		 confirmButtonText="确认" confirm-button-color="#FF2C3C" @confirm="onConfirm" @cancel="close">
		</uni-popup-dialog>
	</uni-popup>
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
			orderId: Number
		},
		data() {
			return {

			};
		},
		methods: {
			open() {
				this.$refs.confirmPop.open()
			},
			close() {
				this.$refs.confirmPop.close()
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
