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
<template>
<view class="user-order">
    <tabs :active="active" @change="changeShow" :config="{itemWidth: 150}">
        <tab v-for="(item, index) in order" :key="index" :title="item.name" :name="item.type">
            <order-list v-if="item.isShow" :order-type="item.type" :ref="'order' + item.type"></order-list>
        </tab>
    </tabs>
	<float-tab></float-tab>
</view>
</template>

<script>

import { orderType } from '@/utils/type';

export default {
  data() {
    return {
      active: orderType.ALL,
      order: [{
        name: '全部',
        type: orderType.ALL,
        isShow: false
      }, {
        name: '待付款',
        type: orderType.PAY,
        isShow: false
      }, {
        name: '待收货',
        type: orderType.DELIVERY,
        isShow: false
      }, {
        name: '已完成',
        type: orderType.FINISH,
        isShow: false
      }, {
        name: '已关闭',
        type: orderType.CLOSE,
        isShow: false
      }]
    };
  },

  components: {
  },
  props: {},
  onLoad: function (options) {
    const{order} = this
    let type = options.type || orderType.ALL;
	let index = order.findIndex(item => item.type == type)
    this.changeShow(index);
  },

  onPullDownRefresh: function () {
   const {active, order} = this
   console.log(this.$refs['order' + order[active].type])
   this.$refs['order' + order[active].type][0].reflesh()
  },

  onReachBottom: function () {
	  const {active, order} = this
	console.log(this.$refs['order' + order[active].type])
	this.$refs['order' + order[active].type][0].getOrderListFun()
  },
  methods: {
    changeShow(index) {
		if(index != -1) {
			this.active = index
			this.order[index].isShow = true
		}
    },
  }
};
</script>
<style>

</style>