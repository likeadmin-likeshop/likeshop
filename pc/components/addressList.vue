<template>
  <div class="address-list">
    <el-dialog title="更换地址" :visible.sync="showDialog" width="900px">
      <div class="list black">
        <div
          :class="['item mb16', { active: item.id == selectId }]"
          v-for="(item, index) in addressList"
          :key="index"
          @click="selectId = item.id"
        >
          <div>
            <span class="bold">{{ item.contact }}</span>
            {{ item.telephone }}
            <el-tag
              size="mini"
              type="warning"
              effect="dark"
              v-if="item.is_default"
              >默认</el-tag
            >
          </div>
          <div class="lighter mt8">
            {{ item.province }} {{ item.city }} {{ item.district }}
            {{ item.address }}
          </div>
          <div class="oprate lighter row">
            <div
              class="mr16"
              @click.stop="
                editId = item.id;
                showAddressAdd = true;
              "
            >
              修改
            </div>
            <div @click.stop="setDefault(item.id)">设为默认</div>
          </div>
        </div>
      </div>
      <div slot="footer" class="dialog-footer">
        <el-button type="primary" @click="onConfirm">确认</el-button>
        <el-button @click="showDialog = false">取消</el-button>
      </div>
    </el-dialog>
    <address-add v-model="showAddressAdd" :aid="editId" @success="getAddress" />
  </div>
</template>

<script>
export default {
  components: {},
  props: {
    value: {
      type: Boolean,
      default: false,
    },
  },
  data() {
    return {
      showDialog: false,
      showAddressAdd: false,
      addressList: [],
      selectId: 0,
      editId: "",
    };
  },

  methods: {
    async getAddress() {
      const { code, data } = await this.$get("user_address/lists");
      if (code == 1) {
        this.addressList = data;
      }
    },
    async setDefault(id) {
      const { code, data, msg } = await this.$post("user_address/setDefault", {
        id,
      });
      if (code == 1) {
        this.$message({
          message: msg,
          type: "success",
        });
        this.getAddress();
      }
    },
    onConfirm() {
      this.$emit("confirm", this.selectId);
      this.showDialog = false;
    },
  },
  watch: {
    value(val) {
      this.showDialog = val;
      if (val == true) {
        this.getAddress();
      }
    },
    showDialog(val) {
      this.$emit("input", val);
    },
  },
};
</script>

<style lang="scss" scoped>
.address-list {
  ::v-deep .el-dialog__body {
    height: 460px;
    overflow-y: auto;
  }
  .list {
    margin: 0 auto;
    width: 800px;
    .item {
      position: relative;
      cursor: pointer;
      padding: 16px 20px;
      height: 100px;
      padding-right: 150px;
      border: 1px solid $-color-border;
      border-radius: 2px;
      &.active {
        border-color: $-color-primary;
      }
      .oprate {
        position: absolute;
        right: 20px;
        bottom: 9px;
      }
    }
  }
  .dialog-footer {
    text-align: center;
    .el-button {
      width: 160px;
    }
  }
}
</style>