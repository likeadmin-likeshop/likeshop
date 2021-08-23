<template>
<text :style="{color, 'font-weight': weight}" :class="(lineThrough ? 'line-through' : '') + ' price-format'">
    <text v-if="showSubscript" :style="{'font-size': subscriptSize + 'rpx', 'margin-right': '2rpx'}">¥</text>
    <text :style="{'font-size': firstSize + 'rpx', 'margin-right': '1rpx'}">{{priceSlice.first}}</text>
    <text v-if="priceSlice.second" :style="{'font-size': secondSize + 'rpx'}">.{{priceSlice.second}}</text>
</text>
</template>

<script>

export default {
  data() {
    return {
      priceSlice: {
	  }
    };
  },
  components: {},
  props: {
    firstSize: {
      type: [String, Number],
      default: 28
    },
    secondSize: {
      type: [String, Number],
      default: 28
    },
    color: {
      type: String
    },
    weight: {
      type:[String, Number] ,
      default: 400
    },
    price: {
      type: [String, Number],
	  default: ""
    },
    showSubscript: {
      type: Boolean,
      default: true
    },
    subscriptSize: {
      type: [String, Number],
      default: 28
    },
    lineThrough: {
      type: Boolean,
      default: false
    }
  },
  created() {
	  this.priceFormat()
  },
  watch: {
    price(val) {
		this.priceFormat()
    }
  },
  methods: {
	priceFormat() {
		let {
		  price
		} = this;
		let priceSlice = {}
		if(price !== null && price !== '' && price !== undefined) {
			price = parseFloat(price);
			price = String(price).split('.');
			priceSlice.first = price[0];
			priceSlice.second = price[1];
			this.priceSlice = priceSlice
		}
		
	}
  }
};
</script>
<style>
.price-format {
  font-family: Avenir, SourceHanSansCN, PingFang SC, Arial, Hiragino Sans GB, Microsoft YaHei, sans-serif;
}
</style>