<template>
    <view class="weui-sticky" :style="'width: 100%;' + (fixed ? (`height: ${height}px; z-index: ${zIndex};`) : '')">
        <view
            :class="fixed ? 'weui-sticky__fixed' : ''"
            :style="fixed ? (`top: ${offsetTop}px;`) : ''">
            <slot></slot>
        </view>
    </view>
</template>

<script>

// 单独封装自 微信小程序扩展组件 mp-sticky，用法可参考其官方文档
// https://developers.weixin.qq.com/miniprogram/dev/extended/component-plus/sticky.html
import {getRect} from '@/utils/wxutil'
const target = '.weui-sticky';

export default {
    props: {
        offsetTop: {
            type: Number,
            default: 0
        },
        zIndex: {
            type: Number,
            default: 99
        },
        disabled: {
            type: Boolean,
            default: false
        },
        container: {
            type: null,
            default: null,
        },
    },
    data() {
        return {
            fixed: false,
            height: 0,
            attached: false,
            containerHeight: 0,
        }
    },
    watch: {
        disabled(newVal) {
            if (!this.attached) {
                return;
            }
            if (newVal) {
                this.disconnectObserver()
            } else {
                this.initObserver();
            }
        },
        container(newVal) {
            if (typeof newVal !== 'function' || !this.height) {
                return;
            }
            this.observerContainer();
        },
        offsetTop(newVal) {
            if (typeof newVal !== 'number' || !this.attached) {
                return;
            }
            this.initObserver();
        }
    },
    mounted() {
        this.attached = true;
        if (!this.disabled) {
            this.initObserver();
        }
    },
    destroyed() {
        this.attached = false;
        this.disconnectObserver();
    },
    methods: {
        getContainerRect() {
            let nodesRef = this.container();
            return new Promise(((resolve) => nodesRef.boundingClientRect(resolve).exec()));
        },
        initObserver() {
            this.disconnectObserver();
            getRect(target, false, this).then((rect) => {
				console.log(rect)
                this.height = rect.height
                this.observerContent();
                this.observerContainer();
            });
        },
        disconnectObserver(observerName) {
            if (observerName) {
                let observer = this[observerName];
                observer && observer.disconnect();
            } else {
                this.contentObserver && this.contentObserver.disconnect();
                this.containerObserver && this.containerObserver.disconnect();
            }
        },
        observerContent() {
            let offsetTop = this.offsetTop;
            this.disconnectObserver('contentObserver');
            let contentObserver = uni.createIntersectionObserver(this,{
                thresholds: [1],
                initialRatio: 1
            });
			
            contentObserver.relativeToViewport({
                top: -offsetTop
            }).observe(target, (res) => {
                if (this.disabled) {
                    return;
                }
                this.setFixed(res.boundingClientRect.top);
            });
            this.contentObserver = contentObserver;
        },
        observerContainer() {
            let container = this.container;
            let height = this.height;
            let offsetTop = this.offsetTop;

            if (typeof container !== 'function') {
                return;
            }
            this.disconnectObserver('containerObserver');
            this.getContainerRect().then((rect) => {
                getRect(target, false, this).then((contentRect) => {
                    let _contentTop = contentRect.top;
                    let _containerTop = rect.top;
                    let containerHeight = rect.height;
                    let _relativeTop = _contentTop - _containerTop;
                    let containerObserver = uni.createIntersectionObserver(this,{
                        thresholds: [1],
                        initialRatio: 1
                    });
                    containerObserver.relativeToViewport({
                        top: containerHeight - height - offsetTop - _relativeTop
                    });
                    containerObserver.observe(target, (res) => {
                        if (this.disabled) {
                            return;
                        }
                        this.setFixed(res.boundingClientRect.top);
                    });
                    this._relativeTop = _relativeTop;
                    this.containerHeight = containerHeight;
                    this.containerObserver = containerObserver;
                });
            });
        },
        setFixed(top) {
            let height = this.height;
            let containerHeight = this.containerHeight;
            let _relativeTop = this._relativeTop;
            let offsetTop = this.offsetTop;

            let fixed = containerHeight && height ? top >= height + offsetTop + _relativeTop - containerHeight && top < offsetTop : top < offsetTop;
            this.$emit('bindscroll', {
                scrollTop: top,
                isFixed: fixed
            });
			console.log(fixed)
            this.fixed = fixed;
        }
    },
}
</script>

<style>
.weui-sticky {
  position: relative;
}
.weui-sticky__fixed {
  position: fixed;
  width: 100%;
  left: 0;
  top: 0;
}
</style>
