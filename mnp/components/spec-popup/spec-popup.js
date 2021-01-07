// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------
Component({
    /**
     * 组件的属性列表
     */
    properties: {
        show: {
            type: Boolean
        },
        goods: {
            type: Object
        },
        showAdd: {
            type: Boolean,
            value: true
        },
        showBuy: {
            type: Boolean,
            value: true
        },
        showBargain: {
            type: Boolean,
            value: false
        }
    },

    /**
     * 组件的初始数据
     */
    data: {
        checkedGoods: {},
        specList: [],
        goodsNum: 1
    },

    /**
     * 组件的方法列表
     */
    methods: {
        onClose() {
            this.triggerEvent('close')
        },
        onClick(e) {
            const {type } = e.currentTarget.dataset
            let {checkedGoods, goodsNum} = this.data
            console.log(checkedGoods, goodsNum)
            checkedGoods.goodsNum = goodsNum
            this.triggerEvent(type, checkedGoods)
        },
        onChange(e) {
            this.setData({
                goodsNum: e.detail
            })
        },
        choseSpecItem(e) {
            const { id, specid } = e.currentTarget.dataset
            let { specList } = this.data
            specList.forEach(item => {
                if (item.spec_value && item.id == id) {
                    item.spec_value.forEach(specitem => {
                        specitem.checked = 0
                        if (specitem.id == specid) {
                            specitem.checked = 1
                        }
                    })
                }
            })
            this.setData({
                specList
            })
        },
        previewImage(e) {
            const {current} = e.currentTarget.dataset
            wx.previewImage({
                current, // 当前显示图片的http链接
                urls: [current] // 需要预览的图片http链接列表
              })
        }
    },
    observers: {
        goods(value) {
            let specList = value.goods_spec || []
            let goodsItem = value.goods_item || []
            specList.forEach(item => {
                if (item.spec_value) {
                    item.spec_value.forEach((specitem, specindex) => {
                        if (specindex == 0) {
                            specitem.checked = 1
                        } else {
                            specitem.checked = 0
                        }
                    })
                }
            })
            
            this.setData({
                specList,
                checkedGoods: goodsItem.length ? goodsItem[0] : {}
            })
        },
        
        specList(value) {
            const { goods_item } = this.data.goods
            let keyArr = []
            value.forEach((item) => {
                if (item.spec_value) {
                    item.spec_value.forEach((specitem) => {
                        if (specitem.checked) {
                            keyArr.push(specitem.id)
                        }
                    })
                }
            })
            
            if (!keyArr.length) return
            let key = keyArr.join(',')
            let index = goods_item.findIndex(item => {
                return item.spec_value_ids == key
            })
            if(index == -1) return
            this.setData({
                checkedGoods: goods_item[index] 
            })
            console.log(goods_item[index])
            this.triggerEvent('change', goods_item[index])
        }
    },

})
