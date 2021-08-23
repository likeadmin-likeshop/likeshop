<template>
	<view :class="{ active, inactive: !active, tab: true }" :style="shouldShow ? '' : 'display: none;'">
		<slot v-if="shouldRender"></slot>
	</view>
</template>

<script>
	export default {
		props: {
			dot: {
				type: Boolean,
			},
			info: {
				type: null,
			},
			title: {
				type: String,
			},
			titleStyle: {
				type: String,
			},
			name: {
				type: [Number, String],
				value: ''
			}
		},
		inject: ['tabs'],

		data() {
			return {
				active: false,
				shouldShow: false,
				shouldRender: false
			}
		},
		created() {
			this.tabs.childrens.push(this)
		},
		mounted() {
			this.update()
		},
		methods: {
			getComputedName: function() {
				if (this.data.name !== '') {
					return this.data.name;
				}

				return this.index;
			},
			updateRender: function(active, parent) {
				
				let parentData = parent;
				this.inited = this.inited || active;
				this.active = active
				this.shouldRender = this.inited
				this.shouldShow = active
				
			},
			update: function() {
				if (this.tabs) {
					this.tabs.updateTabs();
				}
			}
		},
		computed: {
			changeData() {
				const {
					dot,
					info,
					title,
					titleStyle
				} = this
				return {
					dot,
					info,
					title,
					titleStyle
				}
			}
		},
		watch: {
			changeData(value) {
				this.update()
			},
		},
	}
</script>

<style>
	.tab.active {
		height: auto;
	}

	.tab.inactive {
		height: 0;
		overflow: visible;
	}
</style>
