<template>
  <div class="address-list">
    <el-dialog title="更换地址" :visible.sync="showDialog" width="900px">
      <div class="list black infinite-list" v-infinite-scroll="loadShopList" style="overflow:auto">
        <div
          :class="['item mb16', { active: item.id == selectId }, { disabled:  !item.business_status }]"
          v-for="item in list"
          :key="item.id"
          @click="onSelectShop(item)"
        >
          <div>
            <span class="bold">{{ item.name }}</span>
            <span class="muted ml10">
              <i class="el-icon-position"></i>
              {{ item.distance }}
            </span>
          </div>

          <div class="lighter mt8">{{ item.shop_address }}</div>

          <div class="muted mt8">
            <i class="el-icon-time"></i>
            <span>{{ item.business_start_time + '-' + item.business_end_time }}</span>
          </div>
        </div>
      </div>
      
      <div slot="footer" class="dialog-footer">
        <el-button type="primary" @click="onConfirm">确认</el-button>
        <el-button @click="showDialog = false">取消</el-button>
      </div>
    </el-dialog>
    <!-- <address-add v-model="showAddressAdd" :aid="editId" @success="getAddress" /> -->
  </div>
</template>

<script>

export default {

  props: {
    value: {
      type: Boolean,
      default: false,
    },

    list: {
      type: Array,
      require: true,
    }
  },

  data() {
    return {
      showDialog: false,
      selectId: '',
    };
  },

  methods: {
    onConfirm() {
      const index = this.selectId;
      const shop = this.list.find(item => item.id === index)

      this.$emit("confirm", shop);
      this.showDialog = false;
    },

    onSelectShop(shop) {
      if (!(shop.business_status * 1)) return this.$message.error('不在营业中')
      this.selectId = shop.id
    },

    loadShopList() {
      console.log('Loading Shopping ...')
      this.$emit("load", this.selectId)
    },
  },

  watch: {
    value(val) {
      this.showDialog = val;
    },

    showDialog(val) {
      this.$emit("input", val);
    },

    list(data) {
      this.selectId = data?.[0]?.['id']
    }
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
      &.disabled {
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
          background-color: rgba(255, 255, 255, .5);
        }
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