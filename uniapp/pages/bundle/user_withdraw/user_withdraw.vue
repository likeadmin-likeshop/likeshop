<template>
	<view class="user-withdraw">
		<view class="user-tab-container">
			<tabs :active="active" :line-width="40" @change="onChange" :config="{itemWidth: 200}">
				<tab :title="item.name" :name="item.value" v-for="(item, index) in widthDrawWay" :key="index">
					<template v-if="item.value == 1 || item.value == 2">
						<view class="bg-white withdraw-container mt20">
							<view class="input row-center">
								<view style="font-size: 23px;align-self: flex-end;margin-bottom: 5px">¥</view>
								<input v-model="money" placeholder="0.00"></input>
								<view class="column" style="flex: none;">
									<view class="xs primary" style="text-align: right;" @tap="allWithdraw">全部提现</view>
									<view class="xs" style="color: #BBBBBB">可提现余额￥{{widthDrawConfig.able_withdraw}}
									</view>
								</view>
							</view>
							<view class="tips mt20 muted row xs" v-if="item.value == 2">
								提示：提现需扣除服务费{{widthDrawConfig.poundage_percent}}%，请自行缴纳税款
								<!-- <view class="primary ml10">¥ {{widthDrawConfig.able_withdraw}}</view> -->
							</view>
						</view>
						<view class="withdraw-btn bg-primary lg white row-center" @tap="applyWithdrawFun(item.value)">
							确认提现</view>
						<navigator url="/pages/bundle/user_withdraw_code/user_withdraw_code" hover-class="none"
							class="mt20 nr lighter row-center">提现记录</navigator>
					</template>
					<template v-if="item.value == 3">
						<view class="bg-white form-container">
							<view class="input-item row md">
								<view class="input-label ">微信账号</view>
								<input v-model="account" placeholder="请输入微信账号"></input>
							</view>
							<view class="input-item row md">
								<view class="input-label ">真实姓名</view>
								<input v-model="realName" placeholder="请输入真实姓名"></input>
							</view>
							<view class="input-item row md">
								<view class="input-label ">备注</view>
								<input v-model="remark" placeholder="（选填）"></input>
							</view>
							<view class="uploader-container row mt20">
								<uploader @after-read="afterRead" :file-list="fileList" :max-upload="1"
									:deletable="true" useSlot @delete="handleDelete">
									<view>
										<view class="upload-area row-center">
											<image src="/static/images/uploader_icon.png"></image>
										</view>
										<view class="mt10 normal nr" style="line-height: 36rpx;text-align: center;">
											微信收款码</view>
									</view>
								</uploader>
							</view>
						</view>
						<view class="bg-white withdraw-container mt10">
							<view class="input row-center">
								<view style="font-size: 23px;align-self: flex-end;margin-bottom: 5px">¥</view>
								<input v-model="money" placeholder="0.00"></input>
								<view class="column" style="flex: none;">
									<view class="xs primary" style="text-align: right;" @tap="allWithdraw">全部提现</view>
									<view class="xs" style="color: #BBBBBB">可提现余额￥{{widthDrawConfig.able_withdraw}}
									</view>
								</view>
							</view>
							<view class="tips mt10 muted row xs">
								提示：提现需扣除服务费{{widthDrawConfig.poundage_percent}}%，请自行缴纳税款
								<!-- <view  class="primary ml5">¥ {{widthDrawConfig.able_withdraw}}</view> -->
							</view>
						</view>
						<view class="withdraw-btn bg-primary lg white row-center" @tap="applyWithdrawFun(item.value)">
							确认提现</view>
						<navigator url="/pages/bundle/user_withdraw_code/user_withdraw_code" hover-class="none"
							class="mt20 nr lighter row-center">提现记录</navigator>
					</template>
					<template v-if="item.value == 4">
						<view class="bg-white form-container">
							<view class="input-item row md">
								<view class="input-label ">支付宝账号</view>
								<input v-model="account" placeholder="请输入支付宝账号"></input>
							</view>
							<view class="input-item row md">
								<view class="input-label ">真实姓名</view>
								<input v-model="realName" placeholder="请输入真实姓名"></input>
							</view>
							<view class="input-item row md">
								<view class="input-label ">备注</view>
								<input v-model="remark" placeholder="（选填）"></input>
							</view>
							<view class="uploader-container row mt20">
								<uploader @after-read="afterRead" :file-list="fileList" :max-upload="1"
									:deletable="true" useSlot @delete="handleDelete">
									<view class="column-center">
										<view class="upload-area row-center">
											<image src="/static/images/uploader_icon.png"></image>
										</view>
										<view class="mt10 normal nr" style="line-height: 36rpx;text-align: center;">
											支付宝收款码</view>
									</view>
								</uploader>
							</view>
						</view>
						<view class="bg-white withdraw-container mt10">
							<view class="input row-center">
								<view style="font-size: 23px;align-self: flex-end;margin-bottom: 5px">¥</view>
								<input v-model="money" placeholder="0.00"></input>
								<view class="column" style="flex: none;">
									<view class="xs primary" style="text-align: right;" @tap="allWithdraw">全部提现</view>
									<view class="xs" style="color: #BBBBBB">可提现余额￥{{widthDrawConfig.able_withdraw}}
									</view>
								</view>
							</view>
							<view class="tips mt10 muted row xs">
								提示：提现需扣除服务费{{widthDrawConfig.poundage_percent}}%，请自行缴纳税款
								<!-- <view class="primary ml5">¥ {{widthDrawConfig.able_withdraw}}</view> -->
							</view>
						</view>
						<view class="withdraw-btn bg-primary lg white row-center" @tap="applyWithdrawFun(item.value)">
							确认提现</view>
						<navigator url="/pages/bundle/user_withdraw_code/user_withdraw_code" hover-class="none"
							class="mt20 nr lighter row-center">
							提现记录
						</navigator>
					</template>
					<template v-if="item.value == 5">
						<view class="bg-white form-container">
							<view class="input-item row md">
								<view class="input-label ">银行卡账号</view>
								<input v-model="account" placeholder="请输入银行卡账号"></input>
							</view>
							<view class="input-item row md">
								<view class="input-label ">真实姓名</view>
								<input v-model="realName" placeholder="请输入真实姓名"></input>
							</view>
							<view class="input-item row md">
								<view class="input-label ">提现银行</view>
								<input v-model="bank" placeholder="请输入提现银行"></input>
							</view>
							<view class="input-item row md">
								<view class="input-label ">银行支行</view>
								<input v-model="subbank" placeholder="请输入银行支行"></input>
							</view>
							<view class="input-item row md">
								<view class="input-label ">备注</view>
								<input v-model="remark" placeholder="（选填）"></input>
							</view>
						</view>
						<view class="bg-white withdraw-container mt10">
							<view class="input row-center">
								<view style="font-size: 23px;align-self: flex-end;margin-bottom: 5px">¥</view>
								<input v-model="money" placeholder="0.00"></input>
								<view class="column" style="flex: none;">
									<view class="xs primary" style="text-align: right;" @tap="allWithdraw">全部提现</view>
									<view class="xs" style="color: #BBBBBB">可提现余额￥{{widthDrawConfig.able_withdraw}}
									</view>
								</view>
							</view>
							<view class="tips mt10 muted row xs">
								提示：提现需扣除服务费{{widthDrawConfig.poundage_percent}}%，请自行缴纳税款
								<!-- <view class="primary ml5">¥ {{widthDrawConfig.able_withdraw}}</view> -->
							</view>
						</view>
						<view class="withdraw-btn bg-primary lg white row-center" @tap="applyWithdrawFun(item.value)">
							确认提现</view>
						<navigator url="/pages/bundle/user_withdraw_code/user_withdraw_code" hover-class="none"
							class="mt20 nr lighter row-center">
							提现记录
						</navigator>
					</template>
				</tab>
			</tabs>
		</view>
	</view>
</template>

<script>
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------
	import {
		applyWithdraw,
		getWithdrawConfig
	} from "@/api/user";
	import {
		uploadFile,
		trottle
	} from "@/utils/tools";
	import {
		baseURL
	} from '@/config/app';
	import {
		withdrawType
	} from "@/utils/type"
	export default {
		data() {
			return {
				active: 0,
				money: '',
				account: '',
				realName: '',
				bank: '',
				subbank: '',
				qrCode: '',
				remark: '',
				fileList: [],
				widthDrawConfig: {},
				widthDrawWay: []
			};
		},

		components: {},
		props: {},

		/**
		 * 生命周期函数--监听页面加载
		 */
		onLoad: function(options) {
			this.getWithdrawConfigFun();
			this.applyWithdrawFun = trottle(this.applyWithdrawFun, 1000, this)
		},


		methods: {
			allWithdraw(e) {
				const {
					widthDrawConfig
				} = this;
				console.log(widthDrawConfig, "widthDrawConfig")
				this.money = widthDrawConfig.able_withdraw.toString()
			},

			onChange(e) {
				this.active = e
				this.account = "";
				this.realName = "";
				this.qrCode = "";
				this.remark = ""
				this.fileList = [];
			},

			getWithdrawConfigFun() {
				getWithdrawConfig().then(res => {
					if (res.code == 1) {
						this.widthDrawConfig = res.data
						this.widthDrawWay = res.data.type
					}
				});
			},

			afterRead(e) {
				const file = e;
				uni.showLoading({
					title: '正在上传中...',
					mask: true
				});
				file.forEach(item => {
					uploadFile(item.path).then(res => {
						uni.hideLoading();
						this.fileList.push(res);
						this.qrCode = res.url;
					});
				})
			},

			handleDelete(index) {
				this.fileList.splice(index, 1)
			},

			// 申请提现
			applyWithdrawFun(type) {
				let {
					active,
					account,
					realName,
					qrCode,
					remark,
					money,
					bank,
					subbank,
					widthDrawWay
				} = this;
				console.log(realName, "###", active, "###", money);

				switch (parseInt(type)) {
					case withdrawType.ACCOUNT:
						break;
					case withdrawType.WECHAT:
						break
					case withdrawType.PAY_WECHAT:
					case withdrawType.PAY_ALIPAY:
						if (!account) return this.$toast({
							title: '请输入账户信息'
						})
						if (!realName) return this.$toast({
							title: '请输入真实姓名'
						})
						if (!qrCode) return this.$toast({
							title: '请上传收款码'
						})
						break;
					case withdrawType.BANK:
						if (!account) return this.$toast({
							title: '请输入账户信息'
						})
						if (!realName) return this.$toast({
							title: '请输入真实姓名'
						})
						if (!bank) return this.$toast({
							title: '请输入提现银行'
						})
						if (!subbank) return this.$toast({
							title: '请输入银行支行'
						})
				}
				
				if (!money) {
					this.$toast({
						title: '请输入提现金额'
					});
					return;
				}
				
				const data = {
					type: widthDrawWay[active].value,
					money: money,
					account: account,
					real_name: realName,
					money_qr_code: qrCode,
					remark: remark,
					bank,
					subbank
				};
				applyWithdraw(data).then(res => {
					if (res.code == 1) {
						this.$toast({
							title: '提交成功'
						}, {
							tab: 2,
							url: '/pages/bundle/widthdraw_result/widthdraw_result?id=' + res.data.id
						});
					}
				});
			}

		}
	};
</script>
<style lang="scss">
	.van-tabs .van-tabs__wrap {
		border-radius: 10rpx;
	}

	.van-tabs__line {
		background: linear-gradient(90deg, #F79C0C 0%, #FF2C3C 100%);
		bottom: 8rpx !important;
		/* width: 50rpx !important; */
		height: 6rpx !important;
		border-radius: 100rpx;
	}

	.user-withdraw {
		.user-tab-container {
			padding: 20rpx 30rpx;

			::v-deep .scroll-view-h {
				background-color: #FFFFFF;
			}

			.withdraw-container {
				padding: 52rpx 72rpx;
				border-radius: 20rpx;

				.input {
					border-bottom: $-solid-border;

					input {
						width: 100%;
						height: 94rpx;
						text-align: left;
						font-size: 66rpx;
						margin-left: 30rpx;
					}
				}
			}

			.withdraw-btn {
				background: linear-gradient(80deg, #F95F2F 0%, #FF2C3C 100%);
				line-height: 44rpx;
				height: 84rpx;
				margin-top: 30rpx;
				border-radius: 100rpx;
			}

			.form-container {
				border-radius: 20rpx;
				padding: 0 36rpx 26rpx;
				line-height: 36rpx;
				margin-top: 10rpx;

				.input-item {
					padding: 28rpx 0 30rpx;
					border-bottom: $-solid-border;
				}

				.input-label {
					width: 200rpx;
					text-align: left;
					line-height: 36rpx;
				}

				input {
					flex: 1;
				}

				.uploader-container {
					.upload-area {
						width: 160rpx;
						height: 160rpx;
						border: 4rpx dashed #E5E5E5;
						border-radius: 10rpx;

						image {
							width: 54rpx;
							height: 44rpx;
						}
					}
				}
			}
		}
	}
</style>
