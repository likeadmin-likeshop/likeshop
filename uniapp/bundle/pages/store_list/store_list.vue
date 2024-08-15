<template>
  <view class="store-list">
    <!-- #ifndef APP-PLUS -->
    <map
      v-if="location.latitude"
      style="width: 750rpx; height: 400rpx"
      show-location
      :latitude="location.latitude"
      :longitude="location.longitude"
      :markers="markers"
    />
    <!-- #endif -->
    <view class="scroll">
      <scroll-view style="height: 100%" :scroll-y="true">
        <view class="lists">
          <view
            :class="[
              'item',
              'bg-white',
              'row',
              { 'item-disabled': !(item.business_status * 1) },
            ]"
            v-for="(item, index) in lists"
            :key="index"
            @tap="onSelect(item)"
          >
            <view class="flex1">
              <view class="name mb20">
                <text class="bold lg black">{{ item.name }}</text>
                <text class="muted xs ml10">{{ item.distance }}</text>
              </view>
              <view class="address black xs mb20 row">
                <image
                  class="icon1"
                  src="../../static/images/icon_shop.png"
                ></image>
                {{ item.shop_address }}
              </view>
              <view class="time black xs row">
                <image
                  class="icon1"
                  src="../../static/images/icon_time.png"
                ></image>
                {{ item.business_start_time }} - {{ item.business_end_time }}
              </view>
            </view>
            <view class="ml20 flexnone">
              <image
                class="icon2"
                src="../../static/images/icon_call.png"
                @tap.stop="onCall(item.mobile)"
              ></image>
            </view>
          </view>
        </view>
        <loading-footer :status="loadingStatus" slotEmpty>
          <view slot="empty" class="data-null column-center">
            <image
              src="/static/images/address_null.png"
              class="img-null"
            ></image>
            <view class="muted xs">暂无门店～</view>
          </view>
        </loading-footer>
      </scroll-view>
    </view>
  </view>
</template>

<script>
import { getStoreList } from "@/api/store";
import { loadingType } from "@/utils/type";
import { loadingFun } from "@/utils/tools";
export default {
  data() {
    return {
      loadingStatus: loadingType.LOADING,
      page: 1,
      lists: [],
      location: {},
      markers: [],
    };
  },
  methods: {
    onCall(phone) {
      uni.makePhoneCall({
        phoneNumber: String(phone),
      });
    },
    async getLocation() {
      const [error, res] = await uni.getLocation({
		// #ifndef APP
		type: 'gcj02',
		// #endif
      });
      if (!res) {
        // #ifdef MP-WEIXIN
        this.getAuthorize();
        // #endif
        return;
      }
      if (error) {
        return this.$toast({
          title: error.msg,
        });
      }
      return {
        latitude: res.latitude,
        longitude: res.longitude,
      };
    },
    async getAuthorize() {
      const [error, res] = await uni.showModal({
        title: "您已拒绝地理位置权限",
        content: "是否进入权限管理，调整授权？",
      });
      if (res.confirm) {
		// #ifdef MP
        const [error, res] = await uni.openSetting();
        if (res) this.getLocation();		
		// #endif
		// #ifdef APP-PLUS
		// #ifdef APP-PLUS
		// android平台
		if (uni.getSystemInfoSync().platform == 'android') {
		  var Intent = plus.android.importClass('android.content.Intent');
		  var Settings = plus.android.importClass('android.provider.Settings');
		  var intent = new Intent(Settings.ACTION_LOCATION_SOURCE_SETTINGS);
		  var main = plus.android.runtimeMainActivity();
		  main.startActivity(intent); // 打开系统设置GPS服务页面
		}
					 
		// ios平台
		if (uni.getSystemInfoSync().platform == 'ios') {
		  var UIApplication = plus.ios.import("UIApplication");
		  var application2 = UIApplication.sharedApplication();
		  var NSURL2 = plus.ios.import("NSURL");
		  var setting2 = NSURL2.URLWithString("App-Prefs:root=Privacy&path=LOCATION");
		  application2.openURL(setting2);
		  plus.ios.deleteObject(setting2);
		  plus.ios.deleteObject(NSURL2);
		  plus.ios.deleteObject(application2);
		}
		// #endif
		// #endif
      } else if (res.cancel) {
        this.$Router.go(-1);
      }
    },
    getLists() {
      let { loadingStatus, page, lists } = this;
      loadingFun(getStoreList, page, lists, loadingStatus, this.location).then(
        (res) => {
          if (res) {
            this.page = res.page;
            this.lists = res.dataList;
            this.loadingStatus = res.status;
            this.markers = this.lists.map((item) => {
              return {
                id: item.id,
                latitude: item.latitude,
                longitude: item.longitude,
                iconPath: "../../static/images/icon_marker.png",
                width: 34,
                height: 34,
                callout: {
                  content: item.name,
                  padding: 5,
                  borderRadius: 4,
                  fontSize: 13,
                  display: "ALWAYS",
                },
              };
            });
          }
        }
      );
    },
    onSelect(info) {
      if (!(info.business_status * 1))
        return this.$toast({
          title: "不在营业中",
        });
      // 选中门店
      uni.$emit("store", info);
      uni.navigateBack();
    },
  },
  async onLoad() {
    const res = await this.getLocation();

    if (res) {
      this.location = res;
      this.getLists();
    } else {
      this.$toast({ title: "获取定位失败" });
    }
  },
  onReachBottom: function () {
    this.getLists();
  },
};
</script>

<style lang="scss">
page {
  padding: 0;
  height: 100%;
}

.store-list {
  height: 100%;
  display: flex;
  flex-direction: column;

  .scroll {
    flex: 1;

    .lists {
      padding: 20rpx;

      .item {
        padding: 30rpx;
        border-radius: 14rpx;

        &:not(:last-of-type) {
          margin-bottom: 20rpx;
        }

        &-disabled {
          position: relative;

          &::before {
            z-index: 9;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: block;
            content: "";
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
          }
        }

        .icon1 {
          width: 36rpx;
          height: 36rpx;
          margin-right: 10rpx;
        }

        .icon2 {
          width: 60rpx;
          height: 60rpx;
          margin-right: 10rpx;
        }
      }
    }
  }
}
</style>
