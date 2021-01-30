<template>
<!-- components/comment_list/comment_list.wxml -->
<view  height="calc(100vh - 80rpx)">
	<view slot="content" class="comment-list">
		<view v-for="(item, index) in list" :key="index" class="comment-item bg-white mt20">
			<navigator class="comment-goods row" :url="'/pages/goods_details/goods_details?id=' + item.goods_id" hover-class="none">
				<custom-image width="160rpx" height="160rpx" radius="6rpx" lazy-load :src="item.image" />
				<view class="goods-desc">
					<view class="goods-name line2 nr">{{item.goods_name}}</view>
					<view class="row-between mt20" v-show="!(type == 2)">
						<price-format :price="item.goods_price" showSubscript="true" :subscriptSize="26" :firstSize="30" :secondSize="30" />
						<view class="nr">x{{item.goods_num}}</view>
					</view>
					<view v-show="!(type == 1)" class="row mt20">
						<view class="sm mr10">评分</view>
                        <uni-rate :readonly="true" :value="item.goods_comment" activeColor="#FF2C3C" :size="17" />
					</view>
				</view>
			</navigator>
			<navigator v-show="!(type == 2)" class="evaluate-footer row-end" hover-class="none" :url="'/pages/goods_reviews/goods_reviews?id=' + item.id">
				<view class="btn row-center primary br60">评价商品</view>
			</navigator>
			<view v-show="!(type == 1 || !item.comment)" class="evaluate-footer">
				<view class="preview-evaluate">{{item.comment}}</view>
			</view>
		</view>
	</view>
    <loading-footer :status="status" slotEmpty>
        <view class="data-null column-center" slot="empty">
            <image class="img-null" src="/static/images/news_null.png"></image>
            <text class="sm muted">暂无其他评价～</text>
        </view>        
    </loading-footer>
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
import { loadingType } from '../../utils/type';
import { getOrderCommentList } from "../../api/store";

export default {
  data() {
    return {
      list: [],
      status: loadingType.LOADING,
      page: 1
    };
  },

  components: {
  },
  props: {
    type: {
      type: Number
    }
  },

  beforeMount() {
    console.log(this.type);
    this.getOrderCommentListFun();
  },

  methods: {
    getOrderCommentListFun() {
      let {
        page,
        type,
        status,
        list
      } = this;
      if (status == loadingType.FINISHED) return;
      getOrderCommentList({
        page_no: page,
        type: type
      }).then(res => {
        if (res.code == 1) {
          let {
            list: lists,
            more
          } = res.data;
          list.push(...lists);
          this.list = list;
          this.page ++;

          if (!more) {
              this.status = loadingType.FINISHED
          }

          if (list.length <= 0) {
              this.status = loadingType.EMPTY
          }
        }
      });
    },

    goPage(e) {
      let {
        url
      } = e.currentTarget.dataset;

      if (this.type == 1) {
        uni.navigateTo({
          url: url
        });
      }
    }

  }
};
</script>
<style>
/* components/comment_list/comment_list.wxss */
.comment-list .comment-goods {
  padding: 20rpx 24rpx;
}
.comment-list .comment-goods .goods-desc {
  margin-left: 24rpx;
  flex: 1;
}

.comment-list .comment-goods .btn {
  padding: 6rpx 34rpx;
  border: 1rpx solid var(--primary-color);
}

.comment-item .evaluate-footer {
  padding: 0 24rpx 28rpx;
}

.comment-item .evaluate-footer .btn {
  width: 178rpx;
  height: 52rpx;
  border: 1rpx solid var(--primary-color);
}

.data-null {
  padding-top: 200rpx;
}

.evaluate-footer .preview-evaluate {
  background-color: #F6F6F6;
  padding: 20rpx;
  border-radius: 10rpx;
}
</style>