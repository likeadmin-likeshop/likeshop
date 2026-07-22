<template>
    <view class="container">
        <image src="/bundle/static/images/Alipay.png" class="img"></image>
    </view>
</template>
<script>
import { prepay } from '@/api/app'

export default {
    data() {
        return {
            from: '',
            id: '',
            pay_way: '',
            token: ''
        }
    },
    onLoad(option) {
        this.from = option.from
        this.id = option.id
        this.pay_way = option.pay_way
        this.token = option.key
    },
    onShow() {
        //#ifdef H5
        let ua = navigator.userAgent.toLowerCase()
        if (ua.match(/MicroMessenger/i) != 'micromessenger') {
            //不是微信游览器
            prepay(
                {
                    from: this.from,
                    order_id: this.id,
                    pay_way: this.pay_way
                },
                this.token
            ).then(({ data }) => {
                const alipayPage = document.createElement('div')
                alipayPage.innerHTML = data
                document.body.appendChild(alipayPage)
                console.log(document.body)
                document.forms[0].submit()
            })
        }
        //#endif
    }
}
</script>

<style lang="scss" scoped>
page {
    height: 100%;
    background-color: black;
}
.container {
    padding: 0 40rpx;
    display: flex;
    justify-content: end;
    .img {
        height: 750rpx;
    }
}
</style>
