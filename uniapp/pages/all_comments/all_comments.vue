<template>
<view>
    <view class="all_comments">
        <view class="header bg-white" v-if="!isEmpty">
            <view class="title xs">
                <text class="lighter mr10">商品好评率</text>
                <text class="primary">{{percent}}</text>
            </view>
            <view class="tab row">
                <block v-for="(item, index) in categoryList" :key="index">
                    <view :class="'tab-item xs mr10  br60 mb20 ' + (type == item.id ?  'bg-primary white' : 'bg-gray' )" :key="index" :data-id="item.id" @tap="onChangType" v-if="item.count">
                        {{item.name}}({{item.count}})
                    </view>
                </block>
            </view>
        </view>
        <view class="main bg-white">
            <view class="evaluation-list">
                <view v-for="(item, index) in commentList" :key="index" class="evaluation-item">
                    <view class="user-info row">
                        <image class="avatar mr20" :src="item.avatar"></image>
                        <view class="user-name md mr10">{{item.nickname}}</view>
                        <u-rate disabled size="26rpx" color="#FF2C3C" v-model="item.goods_comment"></u-rate>
                    </view>
                    <view class="muted xs mt10">
                        <text class="mr20">{{item.create_time}}</text>
                        <text v-show="item.spec_value_str">{{item.spec_value_str}}</text>
                    </view>
                    <view v-if="item.comment" class="dec mt20">{{item.comment}}</view>
                    <view class="img mt20 row" style="flex-wrap: wrap;" v-if="item.image.length">
                        <view v-for="(imgitem, imgindex) in item.image" :key="imgindex" class="img-item mr20 mb20" :data-current="imgitem" :data-uri="item.image" @tap="previewImage">
                            <custom-image width="160rpx" fit="cover" height="160rpx" radius="6rpx" lazy-load class="goods-img" :src="imgitem" />
                        </view>
                    </view>
                    <view class="seller-recall-container bg-gray mt10" v-if="item.reply">
                        <view class="lighter nr" style="word-wrap:break-word;">
                            商家回复：<span class="normal two-txt-cut">{{item.reply}}</span>
                        </view>
                    </view>
                </view>
            </view>
        </view>
    </view>
    <loading-footer :status="status" slotEmpty>        
        <view slot="empty" class="column-center" style="padding-top: 200rpx">
            <image class="img-null" src="/static/images/goods_null.png"></image>
            <text class="lighter">暂无评价</text>
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
import { getCommentList, getCommentCategory } from '../../api/store';
import { loadingType } from '../../utils/type';

export default {
  data() {
    return {
      status: loadingType.LOADING,
      page: 1,
      type: '',
      commentList: [],
      categoryList: [],
      percent: '',
      isEmpty: true
    };
  },

  components: {

  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: async function (options) {
    this.id = options.id;
    await this.getCommentCategoryFun();
    this.getCommentListFun();
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {},

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {},

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {},

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {},

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {},

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
      this.getCommentListFun()
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {},
  methods: {
    onChangType(e) {
      let {
        id
      } = e.currentTarget.dataset;
      let {
        type
      } = this;
      if (id == type) return;
      this.type = id;
      this.page = 1;
      this.commentList = [];
      this.status = loadingType.LOADING
      this.$nextTick(() => this.getCommentListFun());
    },

    getCommentCategoryFun() {
      return new Promise(resolve => {
        getCommentCategory(this.id).then(res => {
          let {
            code,
            data: {
              comment,
              percent
            }
          } = res;
          if (code == 1) {
            this.categoryList = comment;
            this.percent = percent;
            this.type = comment[0].id
            this.$nextTick(() => resolve());
          }
        });
      });
    },

    getCommentListFun() {
      let {
        page,
        status,
        commentList,
        type
      } = this;
      if (status == loadingType.FINISHED) return;
      getCommentList({
        id: type,
        goods_id: this.id,
        page_no: page
      }).then(res => {
        if (res.code == 1) {
          let {
            list,
            more
          } = res.data;
          commentList.push(...list);
          this.commentList = commentList;
          this.page ++;
          this.$nextTick(() => {
            if (!more) {
              this.status = loadingType.FINISHED
            }

            if (commentList.length <= 0) {
              this.status = loadingType.EMPTY
            } else {
                console.log("commentList false")
              this.isEmpty = false
            }
          });
        }
      });
    },

    previewImage(e) {
      const {
        current,
        uri
      } = e.currentTarget.dataset;
      let urls = uri;
      uni.previewImage({
        current,
        // 当前显示图片的http链接
        urls // 需要预览的图片http链接列表

      });
    }

  }
};
</script>
<style lang="scss">
.all_comments {
  padding-top: 20rpx;
  .header {
    .title{
        padding: 24rpx 26rpx;
        border-bottom: var(--border);
    }
    .tab {
       padding: 30rpx 0 10rpx 20rpx;
       flex-wrap: wrap;
       .tab-item {
         padding: 9rpx 29rpx;
       }
    }
  }
  .main {
      .evaluation-list {
        .evaluation-item {
            padding: 20rpx;
            &:not(:last-of-type) {
              border-bottom: $-solid-border;
            }
            .avatar {
                width: 60rpx;
                height: 60rpx;
                border-radius: 50%;
            }
            .seller-recall-container {
              padding: 24rpx 20rpx;
              border-radius: 12rpx;
            }
        }
      }
  }
}
</style>