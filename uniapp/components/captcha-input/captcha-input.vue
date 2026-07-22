<template>
    <view class="captcha-input row">
        <u-input
            class="captcha-input__field"
            v-model="inputValue"
            placeholder="请输入图形验证码"
            :input-border="false"
            @input="handleInput"
        />
        <image
            v-if="image"
            class="captcha-input__image"
            :src="image"
            mode="aspectFit"
            @tap="refresh"
        />
        <view v-else class="captcha-input__placeholder" @tap="refresh">获取验证码</view>
    </view>
</template>

<script>
import { getCaptcha } from '@/api/app'

export default {
    name: 'CaptchaInput',
    props: {
        value: {
            type: String,
            default: ''
        }
    },
    data() {
        return {
            inputValue: this.value,
            image: '',
            captchaKey: ''
        }
    },
    watch: {
        value(value) {
            if (value !== this.inputValue) {
                this.inputValue = value
            }
        }
    },
    mounted() {
        this.refresh()
    },
    methods: {
        handleInput(value) {
            this.inputValue = value
            this.$emit('input', value)
        },
        clearInput() {
            if (this.inputValue !== '') {
                this.inputValue = ''
                this.$emit('input', '')
            }
        },
        async refresh() {
            this.clearInput()
            this.image = ''
            this.captchaKey = ''
            this.$emit('captcha-key', '')
            try {
                const res = await getCaptcha()
                if (res.code == 1) {
                    this.image = res.data.image || ''
                    this.captchaKey = res.data.key || ''
                    this.$emit('captcha-key', this.captchaKey)
                }
            } catch (error) {
                this.image = ''
                this.captchaKey = ''
            }
        }
    }
}
</script>

<style lang="scss">
.captcha-input {
    min-height: 70rpx;
    width: 100%;
    align-items: center;

    &__field {
        flex: 1;
    }

    &__image {
        flex: none;
        width: 190rpx;
        height: 70rpx;
        margin-left: 16rpx;
        border: 1rpx solid #e5e5e5;
        border-radius: 8rpx;
        background-color: #f7f7f7;
    }

    &__placeholder {
        flex: none;
        width: 190rpx;
        height: 70rpx;
        line-height: 70rpx;
        color: #999;
        text-align: center;
        font-size: 24rpx;
        margin-left: 16rpx;
        border: 1rpx solid #e5e5e5;
        border-radius: 8rpx;
        background-color: #f7f7f7;
    }
}
</style>
