<template>
<view>
<!-- pages/news_details/news_details.wxml -->
<view class="news-details">
    <view class="header">
        <view class="title xxl mb20">{{ articleDetail.title }}</view>
        <view class="row-between">
            <view class="xs lighter">发布时间：{{ articleDetail.create_time }}</view>
            <view class="row">
                <image class="icon-sm" src="/static/images/icon_see.png"></image>
                <view class="ml10 xs muted">{{ articleDetail.visit }}人浏览</view>
            </view>
        </view>
    </view>
    <view class="main">
        <u-parse :html="article_content" :tag-style="tagStyle" />
    </view>
</view>
<loading-view v-if="showLoading"></loading-view>
<!--<import src="/wxParse/wxParse.wxml"></import>-->
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
import { getArticleDetail } from '../../api/new';

export default {
  data() {
    return {
      showLoading: true,
      articleDetail: {},
      article_content: "",
      tagStyle: {
          img: 'width:100%;'
      }
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.type = options.type || '';
    this.id = options.id;

    if (this.type) {
      uni.setNavigationBarTitle({
        title: '帮助详情'
      });
    } else {
      uni.setNavigationBarTitle({
        title: '资讯详情'
      });
    }

    this.getArticleDetailFun();
  },

 
  methods: {
    getArticleDetailFun() {
      getArticleDetail({
        type: this.type,
        id: this.id
      }).then(res => {
        if (res.code == 1) {
          this.articleDetail = res.data
          //wxParse.wxParse('content', 'html', res.data.content, this, 15)
          setTimeout(() => {
            this.article_content = res.data.content;
          }, 200);
          setTimeout(() => {
              this.showLoading = false
          }, 300);
        }
      });
    }

  }
};
</script>
<style>
/* pages/news_details/news_details.wxss */
page {
    background-color: #fff;
}
.news-details .header{
    padding: 20rpx 15px;
    border-bottom: var(--border);
}
.news-details .main {
    padding: 40rpx 15px;
}
.wxParse-p image {
    width: 100%;
}
</style>