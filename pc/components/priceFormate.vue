<template>
  <span
    :style="{ color, 'font-weight': weight }"
    :class="(lineThrough ? 'line-through' : '') + 'price-format'"
  >
    <span
      v-if="showSubscript"
      :style="{ 'font-size': subscriptSize + 'px', 'margin-right': '1px' }"
      >¥</span
    >
    <span :style="{ 'font-size': firstSize + 'px', 'margin-right': '1px' }">{{
      priceSlice.first
    }}</span>
    <span v-if="priceSlice.second" :style="{ 'font-size': secondSize + 'px' }"
      >.{{ priceSlice.second }}</span
    >
  </span>
</template>

<script>
export default {
  data() {
    return {
      priceSlice: {},
    };
  },
  components: {},
  props: {
    firstSize: {
      type: Number,
      default: 14,
    },
    secondSize: {
      type: Number,
      default: 14,
    },
    color: {
      type: String,
    },
    weight: {
      type: [String, Number],
      default: 500,
    },
    price: {
      type: [String, Number],
      default: "",
    },
    showSubscript: {
      type: Boolean,
      default: true,
    },
    subscriptSize: {
      type: Number,
      default: 14,
    },
    lineThrough: {
      type: Boolean,
      default: false,
    },
  },
  created() {
    this.priceFormat();
  },
  watch: {
    price(val) {
      this.priceFormat();
    },
  },
  methods: {
    priceFormat() {
      let { price } = this;
      let priceSlice = {};
      if (price !== null) {
        price = parseFloat(price);
        price = String(price).split(".");
        priceSlice.first = price[0];
        priceSlice.second = price[1];
        this.priceSlice = priceSlice;
      }
    },
  },
};
</script>
<style>
.price-format {
  display: flex;
  align-items: baseline;
}
</style>