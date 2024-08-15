<template>
<view class="user-promote-order">
    <tabs :active="active" :line-width="40" @change="onChange">
        <tab v-for="(item, index) in order" :key="index" :title="item.name">
            <spread-order :ref="'order' + item.type" class="mt20" v-if="item.isShow" :type="item.type"></spread-order>
        </tab>
    </tabs>
</view>
</template>

<script>
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
import { userOrderPromoteOrder } from "@/utils/type";

export default {
  data() {
    return {
      order: [{
        name: "全部",
        type: userOrderPromoteOrder.ALL,
        isShow: false
      }, {
        name: "待返佣",
        type: userOrderPromoteOrder.WAIT_RETURN,
        isShow: false
      }, {
        name: "已结算",
        type: userOrderPromoteOrder.HANDLED,
        isShow: false
      }, {
        name: "已失效",
        type: userOrderPromoteOrder.INVALED,
        isShow: false
      }],
      active: userOrderPromoteOrder.ALL
    };
  },

  components: {

  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    let type = parseInt(options.type) || userOrderPromoteOrder.ALL;
    this.changeShow(type);
  },
	onReachBottom: function () {
		  const {active, order} = this
		this.$refs['order' + active][0].getPromoteOrderFun()
	},
  methods: {
    onChange(e) {
      this.changeShow(e);
    },

    changeShow(type) {
      const {
        order
      } = this;
      console.log('changeShow');
      let index = order.findIndex(item => {
        return item.type == type;
      });
      console.log(index);

      if (index != -1) {
        this.active = type;
        this.order[index].isShow = true
        console.log(this.order[index].isShow);
      }
    }

  }
};
</script>
<style>
/* pages/user_spread_order/user_spread_order.wxss */
</style>