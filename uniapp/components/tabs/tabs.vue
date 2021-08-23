<template>
	<view class="_tab-box" :style="{fontSize: defaultConfig.fontSize + 'rpx', color: defaultConfig.color,}">
		<scroll-view id="_scroll" :scroll-x="true" class="scroll-view-h" scroll-with-animation :scroll-left="slider.scrollLeft" :style="{ backgroundColor: defaultConfig.bgColor}">
			<view class="_scroll-content">
				<view class="_tab-item-box" :class="[defaultConfig.itemWidth ? '_clamp' : '_flex']">
					<block v-for="(item, index) in tabList" :key="index">
						<view class="_item" :id="'_tab_'+index" :class="{ '_active': tagIndex === index }" :style="{color: tagIndex == index ? defaultConfig.activeColor : defaultConfig.color, 'width': defaultConfig.itemWidth ? defaultConfig.itemWidth + 'rpx' : ''}"
						 @click="tabClick(index)">{{ item.title }}</view>
					</block>
				</view>
				<view class="_underline" :style="{
						transform: 'translateX(' + slider.left + 'px)',
						width: slider.width + 'px',
						height: defaultConfig.underLineHeight + 'rpx',
						backgroundColor: defaultConfig.underLineColor,
					}" />
			</view>
		</scroll-view>
	<view class="tab-content">
	  <view>
	    <slot></slot>
	  </view>
	</view>
	</view>
</template>

<script>
	export default {
		name: 'tabs',
		props: {
			active: {
				type: Number,
				default: 0
			},
			config: {
				type: Object,
				default: () => {
					return {}
				}
			},
		},
		provide() {
			return {
				tabs: this
			}
		},
		data() {
			return {
				tabList: [],
				tagIndex: 0,
				slider: {
					left: 0,
					width: 0,
					scrollLeft: 0
				},
				scorll: {},
				defaultConfig: {
					bgColor: "#fff",
					// 要显示的key
					// 字体大小 rpx
					fontSize: 26,
					// 字体颜色
					color: '#333',
					// 激活字体颜色
					activeColor: '#FF2C3C',
					// item宽度 0为自动
					itemWidth: 0,
					// 下划线左右边距，文字宽度加边距 rpx
					underLinePadding: 10,
					// 下划线宽度 rpx  注意：设置了此值 underLinePadding 失效
					underLineWidth: 0,
					// 下划线高度 rpx
					underLineHeight: 4,
					// 下划线颜色
					underLineColor: '#FF2C3C',
				},
			};
		},

		watch: {
			
		},
		created() {
			this.childrens = []
		},
		mounted() {
			this.updateTabs();

		},
		methods: {
			updateTabs() {
				this.tabList = this.childrens.map((item) => {
					const {
						title,
						info,
						name,
						dot,
						titleStyle,
						active,
						updateRender
					} = item
					return {
						title,
						info,
						name,
						dot,
						titleStyle,
						active,
						updateRender
					}
				})
				this.updateConfig();
				this.tagIndex = this.active;
				this.$nextTick(() => {
					this.calcScrollPosition();
				})
			},
			updateConfig() {
				this.defaultConfig = Object.assign(this.defaultConfig, this.config);
			},
			calcScrollPosition() {
				const query = uni.createSelectorQuery().in(this);
				query.select('#_scroll').boundingClientRect((res) => {
					this.scorll = res;
					this.updateTabWidth();
				}).exec();
			},
			updateTabWidth(index = 0) {
				let data = this.tabList;

				if (data.length == 0) return false;

				const query = uni.createSelectorQuery().in(this);

				query.select('#_tab_' + index).boundingClientRect((res) => {
					data[index]._slider = {
						width: res.width,
						left: res.left,
						scrollLeft: res.left - (data[index - 1] ? data[index - 1]._slider.width : 0),
					};
					
					if (this.tagIndex == index) {
						this.tabToIndex(this.tagIndex);
					}

					index++;
					if (data.length > index) {
						this.updateTabWidth(index);
					}
				}).exec();
			},

			tabToIndex(index) {
				let _slider = this.tabList[index]._slider;
				let width = uni.upx2px(this.defaultConfig.underLineWidth);
				
				if (!width) {
					if (this.defaultConfig.itemWidth) {
						width = uni.upx2px(this.defaultConfig.itemWidth)/3;
					} else {
						width = this.tabList[index]['title'].length * uni.upx2px(this.defaultConfig.fontSize);
					}
					width += uni.upx2px(this.defaultConfig.underLinePadding) * 2;
				}
				this.childrens.forEach((item, ind) => {
				  let active = ind === index;
				  if (active !== item.active || !item.inited) {
				    item.updateRender(active, this);
				  }
				});
				
				let scorll_left = this.scorll.left || 0;
				this.slider = {
					left: _slider.left - scorll_left + (_slider.width - width) / 2,
					width: width,
					scrollLeft: _slider.scrollLeft - scorll_left,
				}
			},

			tabClick(index) {
				this.tagIndex = index;
				this.tabToIndex(index);
				this.$emit('change', index);
			}
		}
	}
</script>

<style lang="scss" scoped>
	._tab-box {
		width: 100%;
		font-size: 26rpx;
		position: relative;
		z-index: 10;

		.scroll-view-h {
			height: 80rpx;
			line-height: 80rpx;
			white-space: nowrap;
			width: 100%;
			box-sizing: border-box;

			._scroll-content {
				width: 100%;
				height: 100%;
				position: relative;
				display: inline-block;
				._tab-item-box {
					height: 100%;
					display: inline-block;
					&._flex {
						display: flex;

						._item {
							flex: 1;
						}
					}
					&._clamp {
						._item {
							overflow: hidden;
							text-overflow: ellipsis;
							white-space: nowrap;
						}
					}
					._item {
						height: 100%;
						display: inline-block;
						text-align: center;
						position: relative;
						text-align: center;

						color: #333;

						&._active {
							color: #e54d42;
						}
					}
				}

				._underline {
					height: 4rpx;
					background-color: #e54d42;
					border-radius: 6rpx;
					transition: transform .5s;
					position: absolute;
					bottom: 0;
				}
			}
		}
	}
</style>
