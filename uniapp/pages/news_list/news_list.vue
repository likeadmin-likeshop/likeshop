<template>
<view>
<!-- pages/news_list/news_list.wxml -->
<view class="news_list">
    <view class="contain">
        <view class="banner" v-if="showAd">
            <!-- 存在就是10 不存在为7 -->
            <swipers :pid="type ? 10 : 7" height="300rpx" radius="0rpx"></swipers>
        </view>
        <tabs :active="active" @change="changeActive" v-if="categoryList.length">
            <tab title="全部"></tab>
            <tab v-for="(item, index) in categoryList" :key="index" :title="item.name" ></tab>
        </tabs>
        <view class="main">
            <view class="article-list">
                <view v-for="(item, index) in newsList" :key="index" :data-id="item.id" class="article-item bg-white" @tap="goPage">
                    <view class="row">
                        <view class="info">
                            <view class="title lg line2 mb20">{{ item.title }}</view>
                            <view class="lighter line2">
                                <view>{{ item.synopsis }}</view>
                            </view>
                        </view>
                        <image width="240rpx" height="180rpx" lazy-load class="img ml20" :src="item.image" />
                    </view>
                    <view class="row-between mt20">
                        <view class="xs muted">发布时间: {{item.create_time}}</view>
                        <view class="row">
                            <!-- <image class="icon-sm" src="/static/images/icon_see.png"></image> -->
                            <view class="ml10 xs muted">{{ item.visit }}人浏览</view>
                        </view>
                    </view>
                </view>
            </view>
            <loading-footer :status="status" slotEmpty>
                <view slot="empty" class="column-center" style="padding-top: 100rpx">
                    <image class="img-null" src="/static/images/news_null.png"></image>
                    <text class="nr muted">暂无数据～</text>
                </view>
            </loading-footer>
        </view>
    </view>
</view>
<!-- <loading-view v-if="showLoading"></loading-view> -->
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
import { getCategoryList, getArticleList } from '@/api/new';
import { loadingType } from '@/utils/type';
import {loadingFun} from '@/utils/tools'

export default {
  data() {
    return {
      active: 0,
      showLoading: true,
      categoryList: [],
      newsList: [],
      page: 1,
      status: loadingType.LOADING,
      bannerList: [],
      type: 0,
	  showAd: false
    };
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    //分类id
    this.id = options.id; //type存在则为帮助中心

    this.type = options.type || '';
    
    if (this.type) {
      uni.setNavigationBarTitle({
        title: '帮助中心'
      });
    } else {
      uni.setNavigationBarTitle({
        title: '商城资讯'
      });
    }
	this.showAd = true
    this.getCategoryListFun();
  },

  onReachBottom: function () {
    this.getArticleListFun();
  },


  methods: {
    changeActive(e) {
      this.active = e;
      this.page = 1;
      this.newsList = [];
      this.status = loadingType.LOADING
      setTimeout(() => {
        this.getArticleListFun();
      }, 100);
    },

    getCategoryListFun() {
      getCategoryList({
        type: this.type
      }).then(res => {
        if (res.code == 1) {
            this.categoryList = res.data
            console.log(this.categoryList)
            this.getArticleListFun();
        }
      });
    },

    getArticleListFun() {
      let {
        active,
        page,
        newsList,
        status
      } = this;
	  
	  // active是选中的分类索引，索引0是全部，索引1开始才是的分类列表的数据
	  let id = active ? this.categoryList[active - 1].id : '';
	  
      loadingFun(getArticleList, page, newsList, status, {
        type: this.type,
		id,
        page_no: page}).then(res => {
            if(res) {
                this.page = res.page;
                this.newsList = res.dataList
                this.status = res.status
            }
        })
    },

    goPage(e) {
      let {
        id
      } = e.currentTarget.dataset;
      uni.navigateTo({
        url: `/pages/news_details/news_details?id=${id}&type=${this.type}`
      });
    }

  }
};
</script>
<style lang="scss">
/* pages/information/information.wxss */
.news_list {
    .banner {
    
    }
    .main {        
        .article-list {
            padding-top: 20rpx;
            .article-item {
                padding: 20rpx;
                border-bottom: var(--border);
                align-items: flex-start;
                .info {
                    flex: 1;
                }
                .img {
                    width: 240rpx;
                    height: 180rpx;
                    flex: none;
                }
            }
            &:last-of-type {
                border: none;
            }
        }
    }
    .footer {
        padding: 30rpx 0;
    }
}

page .van-tabs .van-tab--active {
    color: #333;
}


.news_list .van-tab {
    width: 25%;
    flex: none;
}

</style>