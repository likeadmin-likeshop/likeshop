<template>
<view class="user-withdraw-code">
    <view class="withdraw-code-container mt10">
        <view class="withdraw-code-contain">
            <navigator v-for="(item, index) in withdrawRecords" :key="index" class="withdraw-code-item bg-white" hover-class="none"
			 :url="`/pages/bundle/widthdraw_result/widthdraw_result?id=${item.id}&type=1`">
                <view class="row-between">
                    <view>{{item.desc}}</view>
                    <price-format showSubscript :subScriptSize="26" :firstSize="36" :secondSize="36" :price="item.left_money" />
                </view>
                <view class="row-between mt10">
                    <view class="muted xs time">{{item.create_time}}</view>
                    <view class="withdraw-status xs" :class="{'error-status' : item.status == 2 || item.status == 4, 'common-status': item.status == 3}">{{item.status_text}}</view>
                </view>
				  <view v-if="item.description && item.status == 4" class="primary mt10 line1 xs">{{item.description}}</view>
            </navigator>
        </view>
        <loading-footer :status="loadingStatus" slotEmpty>                
            <view class="data-null column-center" slot="empty">
                <image src="/static/images/order_null.png" class="img-null"></image>
                <text class="muted">暂无提现记录～</text>
            </view>
        </loading-footer>
    </view>
</view>
</template>

<script>
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
import { getWithdrawRecords } from '@/api/user';
import { loadingType } from '@/utils/type.js';
import {loadingFun} from "@/utils/tools"
export default {
  data() {
    return {
      loadingStatus: loadingType.LOADING,
      page: 1,
      withdrawRecords: []
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.getWithdrawRecordsFun();
  },

  onReachBottom: function () {
      this.getWithdrawRecordsFun()
  },

  methods: {
    getWithdrawRecordsFun() {
      let {
        loadingStatus,
        withdrawRecords,
        page
      } = this;
      
      loadingFun(getWithdrawRecords, page, withdrawRecords, loadingStatus).then(res => {
          if(res) {
              this.page = res.page;
              this.withdrawRecords = res.dataList
              this.loadingStatus = res.status
          }
      })
    }

  }
};
</script>
<style lang="scss">
.user-withdraw-code {
    .withdraw-code-container {
        .withdraw-code-item {
            padding: 24rpx 30rpx;
            .time {
              line-height: 32rpx;
            }
            .withdraw-status {
              color: #0CC21E;
            }
            .common-status {
              color: #666666;
            }
            .error-status {
              color: $-color-primary;
            }
            &:not(:last-of-type) {
              border-bottom: var(--border);
            }
        }
    }
    .data-null {
      padding-top: 200rpx;
    }
}
</style>