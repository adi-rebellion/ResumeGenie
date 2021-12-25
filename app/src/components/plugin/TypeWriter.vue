<template>
  <div ref="typeTest"></div>
</template>

<script>
import Typewriter from "typewriter-effect/dist/core";

export default {
  name: "TypeWriter",
  props: {
    typing: {
      type: [Array],
      required: true,
    },
  },
  mounted() {
    new Typewriter(this.$refs.typeTest, {
      strings: this.typing,
      autoStart: true,
      loop: true,
    });
  },
};
</script>
