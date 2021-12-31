<template>
<!-- pages/address_edit/address_edit.wxml -->
<view class="address-edit">
    <form @submit="formSubmit" report-submit="true">
        <view class="form bg-white">
            <view class="form-item row">
                <view class="label">收货人</view>
                <input class="ml10" v-model="addressObj.contact" name="contact" type="text" placeholder="请填写收货人姓名" />
            </view>
            <view class="form-item row">
                <view class="label">联系方式</view>
                <input class="ml10" name="telephone" v-model="addressObj.telephone" type="number" placeholder="请填写手机号码"></input>
            </view>
            <view @click="showRegion = true">
                <view class="form-item row">
                    <view class="label">所在地区</view>
                    <input class="ml10" name="region" v-model="region" disabled type="text" placeholder="请选择省、市、区"></input>
                    <image class="icon-sm ml10" src="/static/images/arrow_right.png" />
                </view>
            </view>
            <view>
                <u-field 
                v-model="addressObj.address" 
                type="textarea"
                label="详细地址" 
                placeholder="请填写小区、街道、门牌号等信息"
                :field-style="{flex: 1, 'margin-left': '20rpx', height: '160rpx'}"
                />
                <!-- <view class="form-item row" style="height: 200rpx;">					 -->
                    <!-- <view class="label mt20" style="align-self: flex-start;">详细地址</view> -->
                    <!-- <textarea name="address" style="height: 160rpx;padding: 20rpx 20rpx 20rpx 30rpx;" v-model="addressObj.address"  @input="textareaChange" placeholder="请填写小区、街道、门牌号等信息" auto-blur /> -->
                <!-- </view> -->
            </view>
        </view>
        <view class="mt10 mb10 bg-white check-wrap">
            <radio-group class="row" @click="ChangeIsDefault">
                <radio id="checkbox" style="border-radius: 50%;transform:scale(0.7)" :checked="addressObj.is_default ? true : false" color="#FF2C3C" />
                <label for="checkbox">
                    <text>设置为默认</text>
                </label>
            </radio-group>
        </view>
        <button class="my-btn bg-primary white br60" form-type="submit">完成</button>
    </form>
    <u-select v-model="showRegion" mode="mutil-column-auto" @confirm="regionChange" :list="lists"></u-select>
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
import { editAddress, getOneAddress, hasRegionCode, addAddress } from '@/api/user';
import area from '@/utils/area'
export default {
  data() {
    return {
      addressObj: {
        contact: '',
        telephone: '',
        province: '',
        city: '',
        district: '',
        address: '',
        is_default: 0
      },
      region: '',
      addressId: '',
	  defaultRegion:['广东省','广州市','番禺区'],
	  defaultRegionCode:'440113',
      showRegion: false,
      lists: []
    };
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.addressId = parseInt(options.id)
    if (options.id) {
      uni.setNavigationBarTitle({
        title: '编辑地址'
      });
      this.getOneAddressFun();
    } else {
      uni.setNavigationBarTitle({
        title: '添加地址'
      });
      this.getWxAddressFun();
    }
    this.$nextTick(() => {
        this.lists = area
    })
  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
    uni.removeStorageSync('wxAddress');
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {},
  methods: {
    formSubmit(e) {
      let {
        value
      } = e.detail;
      let {
        addressObj: {
          province_id,
          city_id,
          district_id,
          is_default,
          address
        },
        addressId
      } = this;
      value.address = address;
      if (!value.contact) return this.$toast({
        title: '请填写收货人姓名'
      });
      if (!value.telephone) return this.$toast({
        title: '请填写手机号码'
      });
      if (!value.region) return this.$toast({
        title: '请选择省、市、区'
      });
      if (!value.address) return this.$toast({
        title: '请填写小区、街道、门牌号等信息'
      });
      value.province_id = parseInt(province_id);
      value.city_id = parseInt(city_id);
      value.district_id = parseInt(district_id);
      value.is_default = is_default;
      value.id = addressId;
      delete value.region;

      if (addressId) {
        editAddress(value).then(res => {
          if (res.code == 1) {
            this.$toast({
              title: res.msg
            }, {
              tab: 3,
              url: 1
            });
          }
        }).catch(err => {
          return this.$toast({
            title: err
          });
        });
      } else {
        addAddress(value).then(res => {
          if (res.code == 1) {
            this.$toast({
              title: res.msg
            }, {
              tab: 3,
              url: 1
            });
          }
        }).catch(err => {
          return this.$toast({
            title: err
          });
        });
      }
    },
    regionChange(region) {
      this.addressObj.province_id = region[0].value;
      this.addressObj.city_id = region[1].value;
      this.addressObj.district_id = region[2].value;
      this.region = region[0].label + " " + region[1].label + " " + region[2].label
    },

    ChangeIsDefault: function (e) {
      if (this.addressObj.is_default == 0) {
          this.addressObj.is_default = 1;
      } else {
        this.addressObj.is_default = 0;
      }
    },
    
    textareaChange: function (e) {
        this.addressObj.address = e.detail.value;
    },

    getOneAddressFun() {
      getOneAddress(this.addressId).then(res => {
        if (res.code == 1) {
          let {
            city,
            province,
            district
          } = res.data;
          this.addressObj = res.data;
          this.region = `${province} ${city} ${district}`
        }
      });
    },

    getWxAddressFun() {
      let wxAddress = uni.getStorageSync('wxAddress');
      if (!wxAddress) return;
	  wxAddress = JSON.parse(wxAddress)
      let {
        userName: contact,
        telNumber: telephone,
        provinceName: province,
        cityName: city,
        detailInfo: address
      } = wxAddress;
	  let district = wxAddress.countryName || wxAddress.countyName
      hasRegionCode({
        province,
        city,
        district
      }).then(res => {
        if (res.code == 1) {
          if (res.data.province) {
            this.region = `${province} ${city} ${district}`;
            this.addressObj.contact = contact;
            this.addressObj.telephone = telephone
            this.addressObj.address = address
            this.addressObj.province_id = res.data.province;
            this.addressObj.city_id = res.data.city;
            this.addressObj.district_id = res.data.district;
          }
        }
      });
    }

  }
};
</script>
<style lang="scss">
/* pages/address_edit/address_edit.wxss */

.address-edit {
    padding-top: 10rpx;
    .form {
        flex: 1;
        .form-item {
            padding: 0 24rpx;
            height: 80rpx;
            &:not(:nth-of-type(3)) {
                border-bottom: $-solid-border;
            }
            .label {
                width: 150rpx;
            }
            input {
                height: 100%;
                flex: 1;
            }
        }
    }
    .check-wrap {
        padding: 20rpx;
    }
    .my-btn {
        margin: 30rpx 26rpx;
        text-align: center;
    }
}

van-field view {
    height: 100%;
}

van-field textarea {
    height: 100% !important;
    padding-top: 10rpx !important;
}

.van-cell {
    padding: 20rpx !important;
}

.van-field__body--textarea, .van-field__input {
    margin-left: 15rpx;
}
</style>