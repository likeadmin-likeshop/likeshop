<template>
  <div class="address-add">
    <el-dialog
      :title="aid ? '修改地址' : '添加地址'"
      :visible.sync="showDialog"
      width="900px"
      @closed="onClosed"
    >
      <el-form
        inline
        ref="form"
        :model="address"
        label-width="100px"
        :rules="rules"
      >
        <el-form-item label="收货人：" prop="contact">
          <el-input size="small" v-model="address.contact" />
        </el-form-item>
        <el-form-item label="联系方式：" prop="telephone">
          <el-input size="small" v-model="address.telephone" />
        </el-form-item>

        <el-form-item label="所在地区：" prop="region">
          <el-cascader
            :options="options"
            v-model="address.region"
            @change="handleChange"
            placeholder="请选择省市区"
            clearable
            size="small"
          >
          </el-cascader>
        </el-form-item>
        <el-form-item label="详细地址："  prop="address">
          <el-input
            type="textarea"
            placeholder="请输入详细地址，如街道、门牌号等"
            v-model="address.address"
            :rows="3"
            resize="none"
          >
          </el-input>
        </el-form-item>
        <div>
          <el-form-item label="  ">
            <el-checkbox v-model="address.is_default">设为默认</el-checkbox>
          </el-form-item>
        </div>
      </el-form>

      <div slot="footer" class="dialog-footer">
        <el-button type="primary" @click="submitForm">保存地址</el-button>
        <el-button @click="showDialog = false">取消</el-button>
      </div>
    </el-dialog>
  </div>
</template>

<script>
import regionData from "~/utils/area";
// @event success 修改/添加成功
// @event change 详细地址更改
export default {
  components: {},
  props: {
    value: {
      type: Boolean,
      default: false,
    },
    aid: {
      type: [Number, String],
    },
  },
  data() {
    return {
      showDialog: false,
      options: regionData,
      address: {
        is_default: false,
      },
      rules: {
        contact: [{ required: true, message: "请输入收货人", trigger: "change" }],
        telephone: [
          { required: true, message: "请输入联系方式", trigger: "change" },
        ],
        address: [
          {
            required: true,
            message: "请输入详细地址",
            trigger: "change",
          },
        ],
        region: [
          {
            required: true,
            validator: (rule, value, callback) => {
              if (!value || !value.length > 0) {
                return callback(new Error("请选择省市区"));
              } else {
                callback();
              }
            },
          },
        ],
      },
    };
  },
  methods: {
    onClosed() {
      this.address = {
        is_default: false,
        region: []
      };
      this.$refs.form.resetFields();
    },
    async getOneAddress() {
      const { data, code } = await this.$get("user_address/detail", {
        params: { id: this.aid },
      });
      if (code == 1) {
        const { province_id, city_id, district_id, is_default } = data;
        data.region = [province_id, city_id, district_id];
        data.is_default = Boolean(is_default);
        this.address = data;
      }
    },
    handleChange(val) {
      console.log(val)
      this.address.province_id = val[0];
      this.address.city_id = val[1];
      this.address.district_id = val[2];
    },
    submitForm() {
      this.$refs.form.validate(async (valid) => {
        if (valid) {
          let address = JSON.parse(JSON.stringify(this.address));
          delete address.region;
          const { code, msg } = this.aid
            ? await this.$post("user_address/update", {
                ...address,
                id: this.aid,
              })
            : await this.$post("user_address/add", address);
          if (code == 1) {
            this.$message({
              message: msg,
              type: "success",
            });
            this.showDialog = false;
            this.$emit("success");
          }
        } else {
          return false;
        }
      });
    },
  },
  watch: {
    value(val) {
      this.showDialog = val;
    },
    showDialog(val) {
      if(val) {
        if(this.aid) {
          this.getOneAddress();
        }
      }
      this.$emit("input", val);
    },
    aid(val) {
      if (val) {
        this.getOneAddress();
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.address-add {
  .el-cascader {
    width: 468px;
  }
  .el-textarea {
    width: 468px;
  }
  .dialog-footer {
    text-align: center;
    .el-button {
      width: 160px;
    }
  }
}
</style>