<template>
	<view class="download-nav-container row-between" v-if="showDownload">
		<view class="sm white">
		    {{appConfig.download_doc}}
		</view>
        <view class="row">
            <view class="white primary-btn row-center br60 xs" @click="go2DownLoad">
                下载APP
            </view>
            <u-icon name="close" size="32" color="#fff" @click="showDownload = false" />
        </view>
	</view>
</template>

<script>
    import {mapGetters} from 'vuex'
	export default {
		name:"download-nav",
		data() {
			return {
				showDownload: true
			};
		},
        computed: {
            ...mapGetters(['appConfig'])
        },
        methods: {
            go2DownLoad() {
                // #ifdef H5
                uni.getSystemInfo({
                    success: res => {
                        res.platform == 'ios' ? window.open(this.appConfig.ios_download) : window.open(this.appConfig.android_download);
                    },
                    fail: res => {
                        window.open(this.appConfig.android_download)
                    }
                })
                
                // #endif
            }
        }
	}
</script>

<style lang="scss">
    .download-nav-container {
        height: 80rpx;
        background-color: #333333;
        padding: 0 30rpx;
        position: fixed;
        width: 100%;
        z-index: 871;
        top: 0;
        .primary-btn {
            background-color: $-color-primary;
            height: 54rpx;
            width: 154rpx;
            margin-right: 30rpx;
        }
    }
</style>
