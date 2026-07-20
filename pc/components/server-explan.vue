<template>
  <div class="server-explain">
    <el-dialog
      :visible.sync="dialogTableVisible"
      width="800px"
      :show-close="false"
      :close-on-press-escape="false"
      :close-on-click-modal="false"
      top="0"
    >
      <div class="server-explain-header">
        <div class="lg">
          <!-- 服务协议和隐私政策 -->
          协议声明
        </div>
        <div class="m-t-16 nr">
          <span class="primary" @click="jumpUrl(1)" to="/server_explan?type=1"
            >《服务协议》、</span
          ><span class="primary" @click="jumpUrl(2)" to="/server_explan?type=2"
            >《隐私政策》</span
          >
          请您仔细阅读以上协议，其中有对您权利义务的特别约定等重要条款，请点击同意后方可正常使用
        </div>
      </div>
      <div class="server-explain-content">
        <div v-html="content"></div>
      </div>
      <div class="server-explain-footer flex row-center">
        <el-button type="primary" @click="onConfirm">同意并继续</el-button>
      </div>
    </el-dialog>
  </div>
</template>

<script>
export default {
  async asyncData({ $get }) {},
  data() {
    return {
      content: "",
      dialogTableVisible: false,
    };
  },
  methods: {
    onConfirm() {
      localStorage.setItem("FIRSTENTRY", true);
      this.dialogTableVisible = false;
    },
    async getPolicyServerFunc() {
      const { data } = await this.$get("policy/service");
      this.content = data
    },
    jumpUrl(type) {
      window.open(`server_explan?type=${type}`, "_blank");
    },
  },
  mounted() {
    try {
      const isFirstEntry =
        JSON.parse(localStorage.getItem("FIRSTENTRY")) ?? null;
      if (isFirstEntry == null) {
        this.dialogTableVisible = true;
        this.getPolicyServerFunc();
      }
    } catch (error) {
      console.log(error);
    }
  },
};
</script>
<style lang="scss" scoped>
.server-explain {
  &-header {
    margin-bottom: 10px;
    cursor: pointer;
    line-height: 30px;
  }
  &-content {
    height: 400px;
    overflow-y: auto;
  }
  ::v-deep .el-dialog__header {
    display: none;
  }
  ::v-deep .el-dialog {
    top: 50%;
    transform: translateY(-50%);
    border-radius: 6px;
  }
  &-footer {
    margin-top: 20px;
  }
}
</style>
