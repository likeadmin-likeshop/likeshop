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


<template>
  <div class="address-edit">
    <form class="form-submit" @submit="formSubmit">
      <div class="form-item bg-white">
        <div class="row content" style="height:100%;">
          <div class="label nr">收货人</div>
          <input v-model="contact" class="ml10 nr" name="contact" type="text" placeholder="请填写收货人姓名" />
        </div>
      </div>
      <div class="form-item bg-white">
        <div class="row content" style="height:100%;">
          <div class="label nr">联系方式</div>
          <input
            v-model="telephone"
            class="ml10 nr"
            name="telephone"
            type="text"
            placeholder="请填写手机号码"
          />
        </div>
      </div>
      <div class="form-item bg-white">
        <van-field
          readonly
          clickable
          name="area"
          :value="region"
          label="地区选择"
          placeholder="点击选择省市区"
          @click="showArea = true"
          right-icon="arrow"
        />
      </div>
      <div class="form-item bg-white" style="height:100px">
        <van-field
          v-model="address"
          rows="4"
          name="address"
          autosize
          label="详细地址"
          type="textarea"
          placeholder="请填写小区、街道、门牌号等信息"
          :border="false"
        />
      </div>
      <div class="set-default mt5 mb5 bg-white">
        <van-checkbox
          v-model="is_model"
          style="font-size:14px;font-weight:400"
          icon-size="17px"
          :checked-color="primaryColor"
        >设置为默认</van-checkbox>
      </div>
      <button class="bg-primary white btn row-center" type="submit">完成</button>
      <div v-show="id >= 0" class="bg-white btn row-center" @click="showWarn">删除该收货地址</div>
    </form>

    <van-dialog
      v-model="showWarning"
      show-cancel-button
      :confirmButtonColor="primaryColor"
      confirmButtonText="确认"
      @confirm="addressDelete"
    >
      <div class="dialog-content column-center">
        <div class="icon">
          <img src="@A/images/icon_warning.png" />
        </div>
        <div class="normal" style="margin-top: 15px">确认删除该收货地址吗?</div>
      </div>
    </van-dialog>

    <van-popup v-model="showArea" position="bottom">
      <van-area :area-list="areaList" @confirm="onConfirm" @cancel="showArea = false" />
    </van-popup>
  </div>
</template>

<script>
import {
  editAddress,
  addAddress,
  delAddress,
  getOneAddress,
  convertRegionCode
} from "@API/user";
import area from "@U/area";
export default {
  name: "addressEdit",
  data() {
    return {
      contact: "",
      telephone: "",
      address: "",
      region: "",
      province_id: 0,
      city_id: 0,
      district_id: 0,
      is_default: 0,
      is_model: false,
      showArea: false,
      areaList: area,
      showWarning: false,
      id: -1
    };
  },
  methods: {
    onConfirm: function(values) {
      this.region = values.map(item => item.name).join(" ");
      this.province_id = values[0].code;
      this.city_id = values[1].code;
      this.district_id = values[2].code;
      this.showArea = false;
    },
    formSubmit(e) {
      // 防止页面刷新
      e.preventDefault();

      if (this.id < 0 || !this.id) {
        // 添加新地址
        this.$addAddress();
      } else {
        this.$editAddress();
      }
    },
    showWarn() {
      this.showWarning = true;
    },
    $getOneAddress(id) {
      getOneAddress({ id: id }).then(res => {
        if (res.code == 1) {
          let {
            id,
            contact,
            telephone,
            province,
            city,
            district,
            address,
            is_default,
            province_id,
            city_id,
            district_id,
          } = res.data;
          this.id = id;
          this.contact = contact;
          this.telephone = telephone;
          this.address = address;
          this.region = province + " " + city + " " + district;
          this.is_model = parseInt(is_default);
          this.province_id = province_id;
          this.city_id = city_id;
          this.district_id = district_id;
        }
      });
    },
    // 更新
    $editAddress() {
      if (!this.contact) {
        this.$toast({ message: "请填写收货人姓名" });
        return;
      }
      if (!this.telephone) {
        this.$toast({ message: "请填写手机号码" });
        return;
      }
      if (!this.region) {
        this.$toast({ message: "请选择省、市、区" });
        return;
      }
      if (!this.address) {
        this.$toast({ message: "请填写小区、街道、门牌号等信息" });
        return;
      }
      let data = {
        id: this.id,
        contact: this.contact,
        telephone: this.telephone,
        province_id: this.province_id,
        city_id: this.city_id,
        district_id: this.district_id,
        address: this.address,
        is_default: this.is_model ? 1 : 0
      };
      editAddress(data).then(res => {
        if (res.code == 1) {
          this.$toast({message: res.msg});
          this.$router.back(-1)
        }
      });
    },
    // 添加
    $addAddress() {
      if (!this.contact) {
        this.$toast({ message: "请填写收货人姓名" });
        return;
      }
      if (!this.telephone) {
        this.$toast({ message: "请填写手机号码" });
        return;
      }
      if (!this.region) {
        this.$toast({ message: "请选择省、市、区" });
        return;
      }
      if (!this.address) {
        this.$toast({ message: "请填写小区、街道、门牌号等信息" });
        return;
      }
      let data = {
        contact: this.contact,
        telephone: this.telephone,
        province_id: this.province_id,
        city_id: this.city_id,
        district_id: this.district_id,
        address: this.address,
        is_default: this.is_model ? 1 : 0
      };
      addAddress(data).then(res => {
        if (res.code == 1) {
          this.$toast({message: res.msg});
          this.$router.back(-1)
        }
      });
    },
    // 删除地址
    $delAddress() {
      delAddress(this.id).then(res => {
        if (res.code == 1) {
          this.$toast({ message: res.msg });
          this.$router.back(-1);
        }
      });
    },
    addressDelete() {
      this.$delAddress();
    },
    $getWxAddress() {
      let wxAddress = this.$ls.get("addressinfo");
      if (!wxAddress) return
      let data = JSON.parse(wxAddress);
      this.region = data.province + " " + data.city + " " + data.district
      convertRegionCode({
        province: data.province,
        city: data.city,
        district: data.district
      }).then(res => {
        if(res.code == 1) {
          let {province, city, district} = res.data;
          this.contact = data.contact;
          this.telephone = data.telephone;
          this.address = data.address;
          this.province_id = province;
          this.city_id = city;
          this.district_id = district;
        }
      })
    }
  },
  created() {
    this.id = this.$route.query.id;
    // 有id属于地址编辑
    if (this.id >= 0) {
      this.$getOneAddress(this.id);
    }
    else {
      document.title = "添加地址"
      this.$getWxAddress();
    }
  }
};
</script>

<style lang="scss" scoped>
img {
  width: 100%;
  height: 100%;
}
.address-edit {
  & .form-submit {
    margin-top: 10px;
    & .form-item {
      height: 50px;
      padding: 0 12px;
      border-bottom: 1px solid #f2f2f2;
      & .content {
        & .label {
          width: 75px;
          text-align: left;
        }
        & input {
          height: 100%;
          flex: 1;
        }
      }
    }
    & .btn {
      width: 349px;
      height: 42px;
      border-radius: 30px;
      margin: 15px 13px;
      font-size: 16px;
      font-weight: 400;
    }
    & .set-default {
      padding: 12px;
    }
  }
  .dialog-content {
    height: 115px;
  }
}
.van-cell /deep/ {
  height: 100%;
  padding: 0;
  & .van-field__label {
    margin-right: 0 !important;
    padding-top: 15px;
    & span {
      font-size: 14px;
      font-weight: 400;
      line-height: 24px;
      color: #333333;
    }
  }
  & .van-field__value {
    padding-top: 13px;
    font-size: 14px;
    line-height: 25px;
  }
}
</style>