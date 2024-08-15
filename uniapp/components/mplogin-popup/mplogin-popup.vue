<template>
    <view>
        <u-popup
            v-model="showPop"
            mode="bottom"
            border-radius="14"
            :safe-area-inset-bottom="true"
			:maskCloseAble="false"
        >
            <view class="popup-content">
                <view class="popup-header">
                    <image class="logo" mode="heightFix" :src="logo"></image>
                    <text class="title">{{ title }}</text>
                </view>
                <view class="popup-tips">
                    建议使用您的微信头像和昵称，以便获得更好的体验
                </view>
                <view class="popup-form">
                    <form @submit="handleSubmit">
                        <u-form-item required label="头像" :labelWidth="120">
                            <button
                                class="select-avatar"
                                hover-class="none"
                                open-type="chooseAvatar"
                                @chooseavatar="onChooseAvatar"
                            >
                                <image
                                    class="avatar"
                                    :src="avatar"
                                    v-if="avatar"
                                />
                                <div class="select-btn" v-else>
                                    <u-icon name="plus" :size="30" />
                                    添加图片
                                </div>
                            </button>
                        </u-form-item>
                        <u-form-item required label="昵称" :labelWidth="120">
                            <input
                                style="height: 60rpx"
                                :value="userInfo.nickname"
                                name="nickname"
                                type="nickname"
                                placeholder="请输入昵称"
                            />
                        </u-form-item>
                        <button
                            class="submit-btn bg-primary"
                            form-type="submit"
                        >
                            确定
                        </button>
                        <view class="close-btn" @tap="onClose">暂不登录</view>
                    </form>
                </view>
            </view>
        </u-popup>
    </view>
</template>

<script>
import { uploadFile } from "@/utils/tools";
export default {
    name: "mplogin-popup",
    props: {
        logo: {
            type: String,
            required: true
        },
		value: {
			type: Boolean,
            required: true
		},
        title: {
            type: String,
            required: true
        }
    },
    data() {
        return {
            avatar: "",
        };
    },
    methods: {
        onChooseAvatar(e) {
            const avatarUrl = e.detail.avatarUrl;
            if (!avatarUrl) {
                return;
            }
            uni.showLoading({
                title: "正在上传中...",
                mask: true,
            });
            uploadFile(avatarUrl)
                .then((res) => {
                    uni.hideLoading();
                    this.avatar = res.url;
                })
                .catch(() => {
                    uni.hideLoading();
                    this.$toast({
                        title: "上传失败",
                    });
                });
        },
		handleSubmit(e) {
			const { nickname } = e.detail.value
			const {avatar} = this
			if(!avatar) return  this.$toast({
				title: '请添加头像'
			})
			if(!nickname) return  this.$toast({
				title: '请输入昵称'
			})
			this.$emit('update', {
				avatar,
				nickname
			})
		},
		onClose() {
			this.showPop = false
			this.$emit('close')
		}
    },
	computed: {
		showPop: {
			get() {
				return this.value
			},
			set(val) {
				this.$emit('input', val)
			}
		}
	}
};
</script>

<style lang="scss">
.popup-content {
    padding: 40rpx 40rpx 80rpx;
    .popup-header {
        display: flex;
        align-items: center;
        .title {
            font-size: 38rpx;
            font-weight: bold;
        }
        .logo {
            flex: none;
            height: 80rpx;
            margin-right: 20rpx;
            border-radius: 4rpx;
        }
    }
    .popup-tips {
        color: #999;
        margin-top: 40rpx;
    }
    .popup-form {
        margin-top: 55rpx;
        .select-avatar {
            width: 120rpx;
            height: 120rpx;
            color: #999;
            .avatar {
                width: 100%;
                height: 100%;
            }
            .select-btn {
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                border: 1px dotted #ccc;
                font-size: 22rpx;
				border-radius: 4rpx;
            }
        }
        .submit-btn {
            height: 82rpx;
            line-height: 82rpx;
            border-radius: 41px;
            color: #fff;
            font-size: 30rpx;
            margin: 80rpx 35rpx 60rpx;
        }
        .close-btn {
            color: #999;
            font-size: 30rpx;
            text-align: center;
        }
    }
}
</style>
