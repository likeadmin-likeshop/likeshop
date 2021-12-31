<template>
<!--pages/notice/notice.wxml-->
<view class="notice-container">
  <view v-for="(item, index) in lists" :key="index" class="notice-item mb20">
    <view class="row-between item-header">
      <view class="header-title md">{{item.title}}</view>
      <view class="header-time muted xs">{{item.create_time}}</view>
    </view>
    <view class="item-main">
      <view class="content sm lighter">{{item.content}}</view>
    </view>
  </view>
  <loading-footer :status="loadingStatus" slotEmpty>
    <view class="data-null column-center" slot="empty">
			<image class="img-null" src="/static/images/news_null.png" />
			<text class="nr muted">暂无消息通知～</text>
		</view>
  </loading-footer>
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
import { getNoticeLists } from '@/api/store';
import { loadingType } from '@/utils/type';

export default {
  data() {
    return {
      page: 1,
      loadingStatus: loadingType.LOADING,
      lists: []
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.type = options.type;

    switch (this.type) {
      case "system":
        uni.setNavigationBarTitle({
          title: '系统通知'
        });
        break;

      case "earning":
        uni.setNavigationBarTitle({
          title: '收益通知'
        });
        break;
    }

    this.getNoticeListsFun();
  },

  
  onReachBottom: function () {
    this.getNoticeListsFun();
  },

  methods: {
    getNoticeListsFun() {
      let {
        page,
        loadingStatus,
        lists
      } = this;
      if (loadingStatus == loadingType.FINISHED) return;
      getNoticeLists({
        type: this.type,
        page_no: page
      }).then(res => {
        if (res.code == 1) {
          let {
            list,
            more
          } = res.data;
          lists.push(...list);
          this.lists = lists;
          this.page ++;

          if (!more) {
            this.loadingStatus = loadingType.FINISHED
          }

          if (lists.length <= 0) {
            this.loadingStatus = loadingType.EMPTY
            return;
          }
        } else {
          this.loadingStatus = loadingType.ERROR
        }
      });
    }

  }
};
</script>
<style lang="scss">
/* pages/notice/notice.wxss */
.notice-container {
  padding: 0 20rpx;
  margin-top: 8rpx;
  .notice-item {
    background-color: white;
    padding: 0rpx 20rpx 30rpx;
    border-radius: 10rpx;
    .item-header {
      padding: 19rpx 0;
      border-bottom: $-solid-border;
      .header-title {
        font-weight: bold;
      }
    }
    .item-main {
        .content {
          margin-top: 15rpx;
        }
    }
  }
  .data-null {
    padding-top: 100rpx;
  }
}

</style>