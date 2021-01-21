<template>
<view class="user">
    <view class="header">
        <view class="header-line" style="height: 1px;"></view>
           <view class="user-info row-between">
               <view class="info row">
                   <image class="avatar mr20" @tap="goLogin" :src="'static/images/my_portrait_empty.png'"></image>
                   <view class="white" v-if="false">
                       <view class="name xxl">{{userInfo.nickname}}</view>
                       <view class="invite-code-box row-between">
                           <view class="xs white ml20 mr20">会员ID: {{userInfo.sn}}</view>
                           <view class="xs normal copy-btn row-center ml5" @tap.stop="onCopy">复制</view>
                       </view>
                   </view>
                   <view class="white" v-else @tap="goLogin">
                       <view style="font-size: 42rpx">点击登录</view>
                       <view class="sm">登录体验更多功能</view>
                   </view>
               </view>
               <view class="row" style="align-self: flex-start;">
                   <navigator class="user-opt" style="margin-right: 30rpx;" url="/pages/message_center/message_center" hover-class="none">
                       <view class="dot row-center" v-if="userInfo.notice_num"></view>
                       <image style="width:58rpx;height: 58rpx;" src="/static/images/icon_my_news.png"></image>
                   </navigator>
                   <navigator class="user-opt" url="/pages/user_profile/user_profile" hover-class="none">
                       <image style="width:58rpx;height: 58rpx;" src="/static/images/icon_my_setting.png"></image>
                   </navigator>
               </view>
           </view>
           <view class="member">
               <navigator url="/pages/user_vip/user_vip" hover-class="none" class="member-con row-between" style="color: #FFE0A1">
                   <view class="row">
                       <image style="width: 42rpx;height: 42rpx" src="/static/images/icon_vip.png"></image>
                       <!-- <view class="ml10">{{$state.isLogin ? userInfo.level : "登录查看会员权益"}}</view> -->
                       <view class="ml10">{{"登录查看会员权益"}}</view>
                   </view>
                   <view class="row">
                       <view class="sm">{{userInfo.next_level_tips || '查看会员权益'}}</view>
                       <van-icon name="arrow"></van-icon>
                   </view>
               </navigator>
           </view>
       </view>
       <view class="my-assets bg-white">
           <view class="title row lg">我的资产</view>
           <view class="nav row">
               <view class="column-center mb20 assets-item" @tap="goPage" data-url="/pages/user_wallet/user_wallet">
                   <view class="xl primary">{{userInfo.user_money}}</view>
                   <view class="sm">余额</view>
               </view>
               <view class="column-center mb20 assets-item" @tap="goPage" data-url="/pages/user_sign/user_sign">
                   <view class="xl primary">{{userInfo.user_integral}}</view>
                   <view class="sm">积分</view>
               </view>
               <view class="column-center mb20 assets-item" @tap="goPage" data-url="/pages/user_coupon/user_coupon">
                   <view class="xl primary">{{userInfo.coupon}}</view>
                   <view class="sm">优惠券</view>
               </view>
           </view>
       </view>
       <view class="order-nav bg-white">
           <view class="title row-between" data-url="/pages/user_order/user_order" @tap="goPage">
               <view class="lg">我的订单</view>
               <view class="muted sm row">
                   全部订单
                   <image class="icon-sm ml10" src="/static/images/arrow_right.png"></image>
               </view>
           </view>
           <view class="nav row">
               <view class="item column-center mb20" data-url="/pages/user_order/user_order?type=pay" @tap="goPage">
                   <view class="icon-contain">
                       <view v-if="userInfo.wait_pay" class="badge xs row-center bg-white">
                           {{userInfo.wait_pay}}
                       </view>
                       <image class="nav-icon" src="/static/images/icon_my_payment.png"></image>
                   </view>
                   <view class="sm mt10">待付款</view>
               </view>
               <view class="item column-center mb20" data-url="/pages/user_order/user_order?type=delivery" @tap="goPage">
                   <view class="icon-contain">
                       <view v-if="userInfo.wait_delivery" class="badge xs row-center bg-white">
                           {{userInfo.wait_delivery}}
                       </view>
                       <image class="nav-icon mb10" src="/static/images/icon_my_fahuo.png"></image>
                   </view>
                   <view class="sm">待发货</view>
               </view>
               <view class="item column-center mb20" data-url="/pages/user_order/user_order?type=delivery" @tap="goPage">
                   <view class="icon-contain">
                       <view v-if="userInfo.wait_take" class="badge xs row-center bg-white">
                           {{userInfo.wait_take}}
                       </view>
                       <image class="nav-icon" src="/static/images/icon_my_shouhuo.png"></image>
                   </view>
                   <view class="sm mt10">待收货</view>
               </view>
               <view class="item column-center mb20" data-url="/pages/goods_comment_list/goods_comment_list" @tap="goPage">
                   <view class="icon-contain">
                       <view v-if="userInfo.wait_comment" class="badge xs row-center bg-white">
                           {{userInfo.wait_comment}}
                       </view>
                       <image class="nav-icon" src="/static/images/icon_my_pingjia.png"></image>
                   </view>
                   <view class="sm mt10">商品评价</view>
               </view>
               <view class="item column-center mb20" data-url="/pages/post_sale/post_sale" @tap="goPage">
                   <view class="icon-contain">
                       <view v-if="userInfo.after_sale" class="badge xs row-center bg-white">
                           {{userInfo.after_sale}}
                       </view>
                       <image class="nav-icon" src="/static/images/icon_my_shouhou.png"></image>
                   </view>
                   <view class="sm mt10">退款/售后</view>
               </view>
           </view>
       </view>
       <view class="server-nav bg-white">
           <view>
               <view class="title row-between">
                   <view class="lg">我的功能</view>
               </view>
           </view>
           <view class="nav row wrap">
               <button v-for="(item, index) in myOptList" :key="index" class="item column-center mb20" hover-class="none" :open-type="item.link_type == 3 ?'contact' :''" :data-item="item" @tap="navigateTo">
                   <image class="nav-server-icon" :src="item.image"></image>
                   <view class="sm mt10">{{item.name}}</view>
               </button>
           </view>
       </view>
</view>
</template>

// <script>
// import { getUser } from '../../api/user';
// import { showLoginDialog } from '../../utils/wxutil';
// import event from '../../utils/events';
// import { getMenu } from '../../api/app';
// const app = getApp();
// import mpNavigationBar from "../../components/navigation-bar/navigation-bar";
// import recommend from "../../components/recommend/recommend";
// import vanIcon from "../../components/weapp/icon/index";
// import priceSlice from "../../components/price-slice/price-slice";

export default {
  data() {
    return {
      showNav: false,
      navH: 0,
      navBg: 'transparent',
      navC: '#fff',
      userInfo: {},
      myOptList: [],
      statusBarH: ""
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    // this.setData({
    //   navH: app.globalData.navHeight,
    //   statusBarH: app.globalData.statusBarHeight
    // });
    // this.getMenuFun();
    // uni.nextTick(() => {
    //   this.observeHeader();
    // });
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {},

  /**
   * 生命周期函数--监听页面显示
   */
  onShow() {
    // this.getUserInfoFun();
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {},

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
    this.observeLine.disconnect();
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
    this.getUserInfoFun();
    this.getMenuFun();
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {},
  methods: {
    goLogin() {
      let {
        $state
      } = this;

      if ($state.isLogin) {
        uni.navigateTo({
          url: '/pages/user_profile/user_profile'
        });
        return;
      }

      uni.navigateTo({
        url: '/pages/login/login'
      });
    },

    goPage(e) {
      let {
        url
      } = e.currentTarget.dataset;
      let {
        $state
      } = this;

      if (!$state.isLogin) {
        showLoginDialog();
        return;
      }

      uni.navigateTo({
        url
      });
    },

    navigateTo(e) {
      const {
        item: {
          is_tab,
          link,
          link_type
        }
      } = e.currentTarget.dataset;
      let {
        $state
      } = this;
      if (!$state.isLogin) return showLoginDialog();
      console.log(e);

      switch (link_type) {
        case 1:
          // 本地跳转
          if (is_tab) {
            uni.switchTab({
              url: link
            });
            return;
          }

          uni.navigateTo({
            url: link
          });
          break;

        case 2:
          // webview
          uni.navigateTo({
            url: "/pages/webview/webview?url=" + link
          });
          break;

        case 3: // tabbar

      }
    },

    getUserInfoFun() {
      getUser().then(res => {
        uni.stopPullDownRefresh({
          success: res => {}
        });

        if (res.code == 1) {
          this.setData({
            userInfo: res.data
          });
        } else {
          this.setData({
            userInfo: {
              user_money: 0,
              user_integral: 0,
              coupon: 0
            }
          });
        }
      });
    },

    observeHeader() {
      this.observeLine = uni.createIntersectionObserver();
      this.observeLine.relativeToViewport({
        top: 0
      }).observe('.header-line', res => {
        if (res.intersectionRatio == 0) {
          uni.setNavigationBarColor({
            frontColor: "#000000",
            backgroundColor: '#fff'
          });
          this.setData({
            navBg: '#fff',
            navC: '#000'
          });
        } else {
          uni.setNavigationBarColor({
            frontColor: "#ffffff",
            backgroundColor: '#000'
          });
          this.setData({
            navBg: 'transparent',
            navC: '#fff'
          });
        }
      });
    },

    onCopy(e) {
      uni.setClipboardData({
        data: this.userInfo.sn
      });
    },

    getMenuFun() {
      getMenu({
        type: 2
      }).then(res => {
        if (res.code == 1) {
          this.setData({
            myOptList: res.data
          });
        }
      });
    }

  }
};
</script>
<style>
/* pages/user/user.wxss */
.user {
    background-image: url(../../static/images/my_topbg.png);
    background-size: 100% 400rpx;
    background-repeat: no-repeat;
}

.user .header {
    display: flex;
    flex-direction: column;
    height: 400rpx;
}

.user .header .user-info {
    padding: 10rpx 30rpx;
}

.user .header .user-info .info {
    margin: 0;
}

.user .header .user-info .avatar {
    height: 110rpx;
    width: 110rpx;
    border-radius: 50%;
    overflow: hidden;
}

.user .header .user-info .user-opt {
    position: relative;
}
.user .header .user-info .user-opt .dot {
    position: absolute;
    background-color: #ee0a24;
    border: 2rpx solid #FFFFFF;
    color: var(--primary-color);
    border-radius: 100%;
    top: 6rpx;
    right: 0rpx;
    font-size: 22rpx;
    min-width: 16rpx;
    height: 16rpx;
}

.user .header .user-info .info .buyer-type {
    background-color: #FFA200;
    height: 38rpx;
    padding: 0 10rpx;
}

.user .member {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 0 20rpx;
}
.member-con {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAsYAAABQCAMAAAAtFkPwAAACplBMVEUAAAAAAAAgICAXFy4kJCQiIjMmJjMhISwgICooKDAjIzIiIjAjJjAiJS8kJDEnKTAnKTIiJC8iJDIkJzEmJjAlJzEnKTMmKDImKDIjJTEjJDIkJTEjJzIkJjEoKTMlJjEjJjEjJjAkJzElJzEnKjIkJTEmKTMpKjMoKjMjJjIjJjEjJTEkJjImJzMkJjImKTIpKzMmKDMoKjQkJjEkJjElJzIlJzEnKDIkJjIlJjIlJzImJzImJzMmKDImKDMnKDInKDMnKTMoKTMoKTQoKjMoKjQpKTMpKjMpKjQpKzMpKzQqKjQqKzQqKzUqLDQrKzQrKzUrLDQrLDUrLTQrLTUsLDQsLDUsLTUsLTYsLjUtLTUtLTYtLjUtLjYtLzUuLjUuLjYuLjcuLzUuLzYuLzcuMDYvLzUvLzYvLzgvMDYwMDYwMDcwMDgwMTYwMTcxMDcxMDgxMTYxMTcxMTgxMjcyMTgyMjcyMjgyMzczMjgzMjkzMzczMzgzMzkzMzozNDg0Mzc0Mzg0Mzk0Mzs0NDg0NTg1NDg1NDk1NDo1NDs1NTg1Njg1Njk2NDg2NTg2NTk2NTs2Njg2Njk2Njs2Nzk3NTo3NTs3Njk3Njo3Njs3Njw3Nzg3Nzk3ODk4Njk4Njo4Njs4Njw4Nzk4Nzs4Nzw4ODk4ODo5Njs5Nzo5Nzs5ODk5ODo5ODs5OTk5OTo5Ojo6Nzw6ODs6ODw6OTo6Ojo7ODo7ODs7ODw7OTw7Ojo8OTw8Ojo8Ojs8Ojw8Ozo9Ojs9Ojw9Ozw+Ojw+Ozs+Ozw+PDw/Ozs/Oz0/PDs/PDw/PTxAPDxAPTxBPTtBPTxBPT1BPjtBPj1CPjxCPj1CPzxCPz1DPzxDPz1EPzxEPz1EQD1FQD1FQT1FQT5GQT1GQT5GQj1HQj2z3XVEAAAAOHRSTlMAAQgLDg8UFxggJCVQYWJvcHFxd3p9fX+Ag4WIioyhp6iprKy9wc/V19jZ2uvr7O/v8PHz9Pz9/iB8RGQAAARdSURBVBgZ7cH9b5RVGsfhz7nP/UynVlre1MKiWH5Q4+4Pi8aXRN2YJTGYmM3qX7pZzBLIUg2RpNSsxsYY3FUURNlUSCm2QDtTxoIg9Omc6TOTeHwm/V5XYIOxkQlvNAvkt/IuXf2jQ9Kr+0hanm6zzbRurbYWV27wMOeB5p6JcaRu/ryPpNUzbbabooBJFq9fWeFXzn3++H5HaufpKdJml9mmJiYmf/ixzT3OPTumHkHq57HDpJ37ke2rOLjn4nV+4dwVDjyJ5DBCV9ahq7HXRkj67ktjOxv/08XvO9zh3GFTTyBZfM+64nGqGTnSJOnqDNvdU41vb7POuePJJ5A8zrBu/CiVxNebJN36qMO2N7l2gXXOur0HkJxigxJv08Xr+0ha/Wg1IAeWrgIOPHrIkJxCpMzY7IWnSZtdNAQOrSyBQzHVRLIKgZIQ2OSZP5I2dykg60anvljDYPcupIYmXybt2znkF7t2g9PYb0hecYQSo2zHkRGSLs8Ycs/+xVVn904kM4uUBTYafWuMpOXTnYDcs3vnvDOOZNdhC+GNnR1S1k7cRB7YOe+juwKSmTco8TYbvHmItOlrAXlg16g3diC5hUhJMB724vOkffy1IQ/ZMWITSO08+xJp//sPstG4NZC6+cNfSLtyGilpuDuSmzslHvjVxNERkm5OdxzZKPojhuRmRkkw7mu+M0baiSVDSkZtEsmuQ5q9NUHav+eRTfa7IdnFgpLIfUcOkvbxeUM2M6RWXnqOtPOzSDduSHYxUGId7nruFdIWpw3pxpAaOfBX0laOtZCuPCLZuVHi3DH+jpF2YjkiXRmSX6DMWDf2npN2+jKS4BHJziJlEeLfHyVt7lxEEjwi2YVISQSO7iXt/zMRSTGkJl6dIu3G+0iaIXVgPH+YtPaxFpLmhmQXA2UH36SHk9cMSfOIZOeRksfejqSd/SEiPRiSX5uyvxWk/fdTpCdD8nPKCtIWPkR68waSXVFQ3Y3jjvTmAcnvNpW1jq0EpDdD6u2DRWQrbkh2ZlT1ySVDtuKOZBeNiubnHNmSITW29D5SgSH11fonUoU7kl+girWTbUcqMKS2zlxFKjEkv0AV579BqvECya4Z2dq1mQKpxg3Jz9jS0nFDKjKkllr/uo1UZUh+xlbWTq4glbkh2bmxhc+uGVKZG5Kf0dulLwypzpHfQYeeFj5A+uERyc6NXm6eikg/DMkv0kv7VAvpizuSXQj0MLvsSF8Mya+gh6++Q/rkBZKfkTT/WYH0yQOSXRFIuX46IP0ypE5uTSP98wLJrhHobu0sBdI3Q2pkbgEZgAckuxjo6uKFgAzAA5JdI9DN1U8CMghvIPkZXfw000AG4sjvoMNmrVlkQG5IdtHYpP35LUMG400kuyKwyTcLTWRAhtTC5QvIwAzJL1C28DkyOA9IdovnKLkSkMF5E8nvCmVNZHAeEBl2hsjQ8yYiw84QGXqGyNDzgMiw8wKRYWeIDD1DZOj9DDCoyfzbDOnTAAAAAElFTkSuQmCC);
    background-size: 100% 100%;
    height: 80rpx;
    padding: 0 10rpx;
}

.user .order-nav,.user .my-assets {
    margin: 20rpx 20rpx 0;
    border-radius: 8rpx;
}

.user .server-nav {
    margin: 20rpx;
    border-radius: 8rpx;
}

.user .my-assets .title,
.user .order-nav .title,
.user .server-nav .title {
    height: 88rpx;
    padding: 0 30rpx;
    border-bottom: 1px dashed #E5E5E5;
}

.user .nav {
    padding: 26rpx 0 0;
}

.user .nav .nav-icon, .user .nav .nav-server-icon {
    width: 52rpx;
    height: 52rpx;
}


.user .order-nav .nav .item {
    width: 20%;
    flex: 1;
}
.user .nav .assets-item {
    flex: 1;
}
.user .order-nav .nav .icon-contain {
    position: relative;
}

.user .order-nav .nav .badge {
    padding: 0 6rpx;
    min-width: 28rpx;
    height: 28rpx;
    border-radius: 28rpx;
    box-sizing: border-box;
    border: solid 1rpx #FF2C3C;
    color: #FF2C3C;
    position: absolute;
    left: 33rpx;
    top: -10rpx;
    z-index: 2;
}

.user .server-nav .nav .item {
    width: 25%;
    margin-bottom: 40rpx;
}

.user .header .user-info .name {
    text-align: left;
    margin-bottom: 5rpx;
}

.invite-code-box {
    border: 1rpx solid white;
    border-radius: 100rpx;
    height: 40rpx;
}
.invite-code-box .copy-btn {
    background-color: #FFDFDA;
    height: 100%;
    width: 90rpx;
    border-radius: 100rpx;
}
</style>