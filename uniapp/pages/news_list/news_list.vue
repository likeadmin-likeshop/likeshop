<template>
<view>
<!-- pages/news_list/news_list.wxml -->
<view class="news_list">
    <view class="contain">
        <view class="banner">
            <!-- 存在就是10 不存在为7 -->
            <swipers :pid="type ? 11 : 8" height="300rpx" radius="0rpx"></swipers>
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
                            <image class="icon-sm" src="/static/images/icon_see.png"></image>
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
import { getCategoryList, getArticleList } from '../../api/new';
import { loadingType } from '../../utils/type';
import swipers from "../../components/swipers/swipers";

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
      type: 0
    };
  },

  components: {
    swipers,
  },
  props: {},

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
      if (status == loadingType.FINISHED) return;
      getArticleList({
        type: this.type,
        id: active ? active.toString() : '',
        page_no: page
      }).then(res => {
        if (res.code == 1) {
          let {
            list,
            more
          } = res.data;
          newsList.push(...list);
          this.newsList = newsList
          this.page ++;
          this.showLoading = false
          
          this.$nextTick(() => {
            if (!more) {
                this.status = loadingType.FINISHED
            }

            if (newsList.length <= 0) {
                this.status = loadingType.EMPTY;
                return;
            }
          });
        }
      });
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