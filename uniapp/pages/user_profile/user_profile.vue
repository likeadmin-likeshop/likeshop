<template>
	<view class="user-profile-container mt10">
		<view class="user-profile">
			<view class="user-avatar-box row-center">
				<uploader @after-read="afterRead" useSlot>
					<image class="user-avatar" :src="userInfo.avatar || require('../../../static/images/default_avatar.png')" />
				</uploader>
			</view>
			<view class="row-info row bdb-line" @click="changeName">
				<view class="label md">昵称</view>
				<view class="md row" style="flex: 1">{{userInfo.nickname}}</view>
				<u-icon type="arrow-right" size="15" />
			</view>
			<view class="row-info row bdb-line" @click="changeSex()">
				<view class="label md">性别</view>
				<view class="md row" :class="userInfo.sex == 0 ? 'muted' : '' " style="flex: 1">{{userInfo.sex == 0 ? '未设置' : userInfo.sex == 1 ? '男' : '女'}}</view>
				<u-icon type="arrow-right" size="15" />
			</view>
			<view class="row-info row bdb-line">
				<view class="label md">手机号</view>
				<view class="md row" :class="{'muted': userInfo.mobile}" style="flex: 1;">{{userInfo.mobile ? userInfo.mobile : "未绑定"}}</view>
                <!-- #ifdef H5 -->
				<view class="bd-btn br60 row-center" @click="showModifyMobile">
					{{userInfo.mobile ? '更换手机号' : '绑定手机号'}}
				</view>
                <!-- #endif -->
                <!-- #ifdef MP-WEIXIN -->
                <button class="bd-btn br60 row-center" size="sm" open-type="getPhoneNumber" @getphonenumber="getPhoneNumber">{{userInfo.mobile ? '更换手机号' : '绑定手机号'}}</button>
                <!-- #endif -->
			</view>
			<!-- #ifndef MP-WEIXIN -->
			<view class="row-info row-between" @click="showPwdPop">
				<view class="label md">登录密码</view>
				<view class="row">
					<view class="muted nr">点击设置</view>
					<u-icon type="arrow-right" size="15" />
				</view>
			</view>
			<!-- #endif -->
			<view class="row-info row-between bdb-line mt10" @click="goToExplain(0)">
				<view class="label md">服务协议</view>
				<u-icon type="arrow-right" size="15" />
			</view>
			<view class="row-info row-between bdb-line" @click="goToExplain(1)">
				<view class="label md">隐私政策</view>
				<u-icon type="arrow-right" size="15" />
			</view>
			<view class="row-info row-between">
				<view class="label md">关于我们</view>
				<view>v2.0.1.20210106</view>
			</view>
			<!-- #ifndef MP-WEIXIN -->
			<view class="bg-primary white save-btn row-center lg" @click="logout">退出登录</view>
			<!-- #endif -->
		</view>
		<u-popup type="center" closeable v-model="showMobile" mode="center" border-radius="14">
			<view class="modify-container column-center bg-white" v-show="showMobile">
				<view class="title xl">{{userInfo.mobile ? '更换手机号' : '绑定手机号'}}</view>
				<view class="modify-row row" v-if="userInfo.mobile">
					<view style="width: 56px;border-right: 1px solid #E5E5E5">+86</view>
					<view style="margin-left: 15px">{{userInfo.mobile}}</view>
				</view>
				<view class="modify-row row" v-else>
					<view style="width: 71px;">手机号</view>
					<input v-model="new_mobile" placeholder="请输入绑定手机号" />
				</view>
				<view class="modify-row row">
					<view style="width: 71px;">验证码</view>
					<input v-model="smsCode" style="padding-left: 5px;width: 130px;" placeholder="请输入验证码" />
					<view class="send-code-btn nr row-center" @click="$sendSms">
						<view v-show="canSendSms">发送验证码</view>
						<u-count-down v-if="!canSendSms" ref="countDown" :show-days="false" :timestamp="time" separator="zh" color="#FF2C3C"
						 separatorColor="#FF2C3C" :show-hours="false" :show-minutes="false" :autoplay="true" @end="countDownFinish"
						 @change="timeChange" />
					</view>
				</view>
				<view class="modify-row row" v-if="userInfo.mobile">
					<view style="width: 71px;">新手机号</view>
					<input v-model="new_mobile" placeholder="请输入新的手机号码" />
				</view>
				<view class="primary mt10">{{userInfo.mobile ? '更改' : '绑定'}}手机号码成功后，您的账号将会变更为该设置号码</view>
				<view class="btn bg-primary white row-center" @click="$changeUserMobile">确定</view>
			</view>
		</u-popup>
		<u-popup v-model="showNickName" :closeable="true" mode="center" border-radius="14">
			<view class="modify-container column-center bg-white" v-show="showNickName">
				<view class="title xl">修改用户名</view>
				<view class="modify-row row">
					<view style="width: 71px;">新昵称</view>
					<input v-model="newNickname" placeholder="请输入新的昵称" />
				</view>
				<view class="btn bg-primary white row-center" @click="changeNameConfirm">确定</view>
			</view>
		</u-popup>
		<u-popup v-model="showPwd" closeable mode="center" border-radius="14">
			<view class="modify-container column-center bg-white" v-show="showPwd">
				<view class="title xl">设置密码</view>
				<view class="modify-row row">
					<view style="width: 56px;border-right: 1px solid #E5E5E5">+86</view>
					<view style="margin-left: 15px">{{userInfo.mobile}}</view>
				</view>
				<view class="modify-row row">
					<view style="width: 142rpx;">验证码</view>
					<input v-model="smsCode" style="padding-left: 10rpx;width: 260rpx;" placeholder="请输入验证码" />
					<view class="send-code-btn nr row-center" @click="$sendSms">
						<view v-show="canSendSms">发送验证码</view>
						<u-count-down v-if="!canSendSms" ref="countDown" :show-days="false" :timestamp="time" separator="zh" color="#FF2C3C"
						 separatorColor="#FF2C3C" :show-hours="false" :show-minutes="false" :autoplay="true" @end="countDownFinish"
						 @change="timeChange" />
					</view>
				</view>
				<view class="modify-row row">
					<view style="width: 71px;">设置密码</view>
					<input type="password" v-model="pwd" placeholder="请输入新密码" />
				</view>
				<view class="modify-row row">
					<view style="width: 71px;">确认密码</view>
					<input type="password" v-model="comfirmPwd" placeholder="再次输入新密码确认" />
				</view>
				<view class="btn bg-primary white row-center" @click="$forgetPwd">确定</view>
			</view>
		</u-popup>
		<u-picker mode="selector" v-model="showPicker" :default-selector="[0]" :range="sexList" @confirm="onConfirm" />
	</view>
</template>

<script>
	import {
		userLogout,
		getUserInfo,
		changeUserMobile,
		setUserInfo
	} from "@/api/user";
	import {
		HTTP_URL,
		ACCESS_TOKEN
	} from '@/config/app';
	import {
		sendSms,
		forgetPwd,
	} from '@/api/app'
	import {
		SMSType
	} from '@/utils/type'
	import {
		mapState
	} from 'vuex'
	import {
		uploadFile,
		isWeixinClient
	} from '@/utils/tools'
    import {getWxCode} from '@/utils/login'

	const FieldType = {
		NONE: '',
		SEX: 'sex',
		NICKNAME: 'nickname',
		AVATAR: 'avatar',
        MOBILE: 'mobile'
	}
	export default {
		name: 'userProfile',
		data() {
			return {
				fileList: [],
				userInfo: {},
				new_mobile: '',
				smsCode: '',
				newNickname: '',
				sexList: ['男', '女'],
				fieldType: FieldType.NONE,
				showPicker: false,
				showMobile: false,
				showPwd: false,
				showNickName: false,
				time: 59,
				canSendSms: true,
				pwd: '',
				comfirmPwd: '',
				smsType: SMSType.FINDPWD,
                code: ''
			}
		},
		methods: {
			// 文件上传读取
			afterRead(e) {
				const file = e
				console.log(file)
				uni.showLoading({
					title: '正在上传中...',
					mask: true
				});
				file.forEach(item => {
					uploadFile(item.path).then(res => {
						uni.hideLoading();
						this.fieldType = FieldType.AVATAR
						this.$setUserInfo(res.base_url)
					});
				})
			},
			// end
			logout() {
				//  退出登录
				userLogout({
					token: this.token
				}).then(res => {
					if (res.code == 1) {
						this.$store.commit("LOGOUT");
						this.$toast({
							title: '登出成功'
						})
						setTimeout(() => {
							uni.switchTab({
								url: "/pages/index/index"
							})
						}, 500)
					}
				})
			},
			goToExplain(value) {
				uni.navigateTo({
					url: '/pages/bundle/server_explan/server_explan?type=' + value
				})
			},
			// 发送短信
			$sendSms(type) {
				if(!this.canSendSms) return
				sendSms({
					mobile: this.userInfo.mobile || this.new_mobile,
					key: this.smsType
				}).then(res => {
					if (res.code == 1) {
						this.$toast({
							title: res.msg
						});
						this.canSendSms = false
					}
				})
			},
			$getUserInfo() {
				getUserInfo().then(res => {
					if (res.code == 1) {
						this.userInfo = res.data;
					}
				})
			},
			// 更换手机号
			showModifyMobile() {
				this.smsCode = '';
				this.new_mobile = '';
				this.showMobile = true
				this.smsType = SMSType.CHANGE_MOBILE
			},
			$changeUserMobile() {
				if (!this.smsCode) {
					this.$toast({
						title: '请输入验证码'
					})
					return;
				}
				if (!this.new_mobile) {
					this.$toast({
						title: '请输入新的手机号码'
					})
					return;
				}
				changeUserMobile({
					mobile: this.userInfo.mobile,
					new_mobile: this.new_mobile,
					code: this.smsCode,
                    action: this.userInfo.mobile ? 'change' : ''
				}).then(res => {
					if (res.code == 1) {
						this.showMobile = false;
						this.$toast({
							title: res.msg
						})
						this.$getUserInfo();
					}
				})
			},
			// end
			// 修改用户信息
			$setUserInfo(value) {
				setUserInfo({
					field: this.fieldType,
					value: value
				}).then(res => {
					if (res.code == 1) {
						this.$toast({
							title: res.msg
						});
						this.$getUserInfo()

					}
				})
			},
			// end
			timeChange(timestamp) {
				console.log(timestamp, "timestamp")
			},
			onConfirm(value) {
				this.$setUserInfo(value[0] + 1);
				this.showPicker = false;
			},
			changeSex(e) {
				this.showPicker = true;
				this.fieldType = FieldType.SEX;
			},

			// 定时器完成
			countDownFinish() {
				this.canSendSms = true;
			},
			// 修改密码
			showPwdPop() {
				this.smsCode = '';
				this.smsType = SMSType.FINDPWD
				this.showPwd = true
			},
			$forgetPwd() {
				let {
					smsCode,
					pwd,
					comfirmPwd
				} = this;
				if (!smsCode) {
					this.$toast({
						title: '请填写短信验证码'
					});
					return;
				}
				if (!pwd) {
					this.$toast({
						title: '请输入新密码'
					});
					return;
				}
				if (!comfirmPwd) {
					this.$toast({
						title: '再次输入新密码确认'
					});
					return;
				}
				if (pwd != comfirmPwd) {
					this.$toast({
						title: '两次密码输入不一致'
					});
					return;
				}
				let data = {
					mobile: this.userInfo.mobile,
					code: smsCode,
					password: pwd,
					repassword: comfirmPwd,
					client: 2
				};
				forgetPwd(data).then(res => {
					if (res.code == 1) {
						this.showPwd = false;
						this.$toast({
							title: '设置密码成功'
						});
						this.$getUserInfo();
					}
				})
			},
			// end
			// 修改昵称
			changeName() {
				// #ifdef H5 || APP-PLUS
				this.fieldType = FieldType.NICKNAME;
				this.newNickname = '';
				this.showNickName = true;
				// #endif
			},
			changeNameConfirm() {
				this.$setUserInfo(this.newNickname);
				this.showNickName = false;
			},
			// end
            
            getPhoneNumber(e) {
                console.log(e, "getPhoneNubmer")
                // code encryptedData iv
                const { code } = this;
                const { encryptedData, iv } = e.detail;
                let data = {
                    code,
                    encrypted_data: encryptedData,
                    iv
                }
                this.fieldType = FieldType.MOBILE
                if (encryptedData) {
                    this.$changeUserMobileMP(data)
                }
            },
            $changeUserMobileMP(data) {
                changeUserMobile(data).then(res => {
                    if (res.code == 1) {
                        this.$setUserInfo(res.data.purePhoneNumber)
                    }
                })
            }
		},
		mounted() {
			this.$getUserInfo()
            getWxCode().then(res => {
                this.code = res
            })
		},
		computed: {
			...mapState(['token'])
		}
	}
</script>

<style lang="scss">
	.user-profile-container {
		.user-profile {
			border-top-left-radius: 28rpx;
			border-top-right-radius: 28rpx;

			.user-avatar-box {
				padding: 30rpx;
				background-color: white;
				border-top-left-radius: 28rpx;
				border-top-right-radius: 28rpx;

				.user-avatar {
					width: 120rpx;
					height: 120rpx;
					border-radius: 50%;
				}
			}

			.row-info {
				padding: 30rpx 20rpx;
				background-color: white;

				.label {
					width: 180rpx;
				}

				.bd-btn {
					padding: 8rpx 24rpx;
					border: 1px solid $-color-primary;
					color: $-color-primary;
				}
			}

			.bdb-line {
				border-bottom: 1rpx solid #E5E5E5;
			}

			.save-btn {
				margin-top: 40rpx;
				height: 88rpx;
				margin-left: 54rpx;
				margin-right: 54rpx;
				border-radius: 10rpx;
				box-sizing: border-box;
			}
		}

		.modify-container {
			padding-left: 30rpx;
			padding-right: 30rpx;
			padding-bottom: 30rpx;
			width: 580rpx;
			border-radius: 30rpx;

			.title {
				padding: 26rpx 0rpx;
			}

			.modify-row {
				padding: 32rpx 0rpx;
				width: 100%;
				border-bottom: 1rpx solid #E5E5E5;

				.send-code-btn {
					border: 1px solid $-color-primary;
					width: 184rpx;
					height: 62rpx;
					color: $-color-primary;
				}
			}

			.btn {
				height: 80rpx;
				padding: 0 180rpx;
				border-radius: 20rpx;
				margin-top: 60rpx;
			}
		}

	}
</style>
