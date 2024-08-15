// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------
<template>
<view class="user-order">
	<navbar title="我的订单"></navbar>
    <tabs :active="active" @change="changeShow" :config="{itemWidth: 150}">
		<tab v-for="(item, index) in order" :key="index" :title="item.name" :name="item.type">
		    <order-list v-if="item.isShow" :order-type="item.type" :ref="'order' + item.type"></order-list>
		</tab>
    </tabs>
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