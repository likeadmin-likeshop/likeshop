<template>
  <div
    class="trigonometry"
    :class="{'up': direction==='up', 'small': size==='small'}"
    :style="{color: color, opacity: opacity}"
  ></div>
</template>

<script>
export default {
  name: "Trigonometry",
  props: {
    color: {
      type: String,
      default: ""
    },
    direction: {
      type: String
    },
    size: {
      type: String
    },
    opacity: {
      type: String,
      default: '0.8'
    }
  }
};
</script>

<style lang="scss" scoped>
.trigonometry {
  border-color: transparent transparent currentcolor currentcolor;
  border-style: solid;
  border-width: 3px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  opacity: 0.8;
  margin: -3px 5px 0;
}
.up {
  margin-top: 3px;
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
}
.small {
  border-width: 2px;
  margin-top: -2px;
  .up {
    margin-top: 2px;
  }
}
</style>