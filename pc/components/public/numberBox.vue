<template>
  <div class="number-box">
    <div
      @click.stop.prevent="btnTouchStart('minus')"
      :class="{ minus: true, disabled: disabled || inputVal <= min }"
      :style="{
        background: bgColor,
        height: inputHeight + 'px',
        color: color
      }"
    >
      <div :style="{ fontSize: size + 'px' }">-</div>
    </div>
    <input
      :disabled="disabledInput || disabled"
      :class="{ 'number-input': true, 'input-disabled': disabled }"
      v-model="inputVal"
      @blur="onBlur"
      @focus="onFocus"
      type="text"
      :style="{
        color: color,
        fontSize: size + 'px',
        background: bgColor,
        height: inputHeight + 'px',
        width: inputWidth + 'px'
      }"
    />
    <div
      class="plus"
      @click.stop.prevent="btnTouchStart('plus')"
      :class="{ disabled: disabled || inputVal >= max }"
      :style="{
        background: bgColor,
        height: inputHeight + 'px',
        color: color
      }"
    >
      <div :style="{ fontSize: size + 'px' }">+</div>
    </div>
  </div>
</template>

<script>
export default {
  components: {},
  props: {
    // 预显示的数字
    value: {
      type: Number,
      default: 1
    },
    // 背景颜色
    bgColor: {
      type: String,
      default: " #F2F3F5"
    },
    // 最小值
    min: {
      type: Number,
      default: 0
    },
    // 最大值
    max: {
      type: Number,
      default: 99999
    },
    // 步进值，每次加或减的值
    step: {
      type: Number,
      default: 1
    },
    // 是否禁用加减操作
    disabled: {
      type: Boolean,
      default: false
    },
    // input的字体大小，单位px
    size: {
      type: [Number, String],
      default: 14
    },
    // input宽度，单位px
    inputWidth: {
      type: [Number, String],
      default: 64
    },
    //字体颜色
    color: {
      type: String,
      default: "#333"
    },
    // input高度，单位px
    inputHeight: {
      type: [Number, String],
      default: 32
    },
    // index索引，用于列表中使用，让用户知道是哪个numberbox发生了变化，一般使用for循环出来的index值即可
    index: {
      type: [Number, String],
      default: ""
    },
    // 是否禁用输入框，与disabled作用于输入框时，为OR的关系，即想要禁用输入框，又可以加减的话
    // 设置disabled为false，disabledInput为true即可
    disabledInput: {
      type: Boolean,
      default: false
    },

    // 是否只能输入大于或等于0的整数(正整数)
    positiveInteger: {
      type: Boolean,
      default: true
    },
    asyncChange: {
      type: Boolean,
      default: false
    }
  },
  watch: {
    value(v1, v2) {
      if (!this.changeFromInner) {
        this.inputVal = v1;
        this.$nextTick(function() {
          this.changeFromInner = false;
        });
      }
    },
    inputVal(v1, v2) {
      if (v1 == "") return;
      let value = 0;
      let tmp = /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(v1);
      if (tmp && v1 >= this.min && v1 <= this.max) value = v1;
      else value = v2;
      if (this.positiveInteger) {
        if (v1 < 0 || String(v1).indexOf(".") !== -1) {
          value = v2;
          this.$nextTick(() => {
            this.inputVal = v2;
          });
        }
      }
      if (this.asyncChange) {
        return;
      }
      // 发出change事件
      this.handleChange(value, "change");
    }
  },
  data() {
    return {
      inputVal: 1, // 输入框中的值，不能直接使用props中的value，因为应该改变props的状态
      timer: null, // 用作长按的定时器
      changeFromInner: false, // 值发生变化，是来自内部还是外部
      innerChangeTimer: null // 内部定时器
    };
  },
  created() {
    this.inputVal = Number(this.value);
  },
  computed: {},
  methods: {
    btnTouchStart(callback) {
      this[callback]();
    },
    minus() {
      this.computeVal("minus");
    },
    plus() {
      this.computeVal("plus");
    },
    calcPlus(num1, num2) {
      let baseNum, baseNum1, baseNum2;
      try {
        baseNum1 = num1.toString().split(".")[1].length;
      } catch (e) {
        baseNum1 = 0;
      }
      try {
        baseNum2 = num2.toString().split(".")[1].length;
      } catch (e) {
        baseNum2 = 0;
      }
      baseNum = Math.pow(10, Math.max(baseNum1, baseNum2));
      let precision = baseNum1 >= baseNum2 ? baseNum1 : baseNum2;
      return ((num1 * baseNum + num2 * baseNum) / baseNum).toFixed(precision);
    },
    calcMinus(num1, num2) {
      let baseNum, baseNum1, baseNum2;
      try {
        baseNum1 = num1.toString().split(".")[1].length;
      } catch (e) {
        baseNum1 = 0;
      }
      try {
        baseNum2 = num2.toString().split(".")[1].length;
      } catch (e) {
        baseNum2 = 0;
      }
      baseNum = Math.pow(10, Math.max(baseNum1, baseNum2));
      let precision = baseNum1 >= baseNum2 ? baseNum1 : baseNum2;
      return ((num1 * baseNum - num2 * baseNum) / baseNum).toFixed(precision);
    },
    computeVal(type) {
      if (this.disabled) return;
      let value = 0;
      // 减
      if (type === "minus") {
        value = this.calcMinus(this.inputVal, this.step);
      } else if (type === "plus") {
        value = this.calcPlus(this.inputVal, this.step);
      }
      // 判断是否小于最小值和大于最大值
      if (value < this.min || value > this.max) {
        return;
      }
      if (this.asyncChange) {
        this.$emit("change", value);
      } else {
        this.inputVal = value;
        this.handleChange(value, type);
      }
    },
    // 处理用户手动输入的情况
    onBlur(event) {
      let val = 0;
      let value = event.target.value;
      console.log(value);

      if (!/(^\d+$)/.test(value)) {
        val = this.min;
      } else {
        val = +value;
      }
      if (val > this.max) {
        val = this.max;
      } else if (val < this.min) {
        val = this.min;
      }
      this.$nextTick(() => {
        this.inputVal = val;
      });
      this.handleChange(val, "blur");
    },
    // 输入框获得焦点事件
    onFocus() {
      this.$emit("focus");
    },
    handleChange(value, type) {
      if (this.disabled) return;
      // 清除定时器，避免造成混乱
      if (this.innerChangeTimer) {
        clearTimeout(this.innerChangeTimer);
        this.innerChangeTimer = null;
      }
      this.changeFromInner = true;
      this.innerChangeTimer = setTimeout(() => {
        this.changeFromInner = false;
      }, 150);
      this.$emit("input", Number(value));
      this.$emit(type, {
        value: Number(value),
        index: this.index
      });
    }
  }
};
</script>

<style lang="scss" scoped>
.number-box {
  display: inline-flex;
  align-items: center;
  .number-input {
    position: relative;
    text-align: center;
    padding: 0;
    margin: 0 6px;
    align-items: center;
    justify-content: center;
  }
  .plus,
  .minus {
    width: 32px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }
  .plus {
    border-radius: 0 2px 2px 0;
  }
  .minus {
    border-radius: 2px 0 0 2px;
  }
  .disabled {
    color: #c8c9cc !important;
    background: #f7f8fa !important;
  }
  .input-disabled {
    color: #c8c9cc !important;
    background-color: #f2f3f5 !important;
  }
}
</style>
