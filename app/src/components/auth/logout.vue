<template></template>
<script>
export default {
  async mounted() {
    await this.$store.dispatch("logout");
    this.$router.push("/login");
  },
};
</script>