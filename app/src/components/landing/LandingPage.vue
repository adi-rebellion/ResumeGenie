<template>
  <LandingLayout>
    <template v-slot:header>
      <LandingNavHeader></LandingNavHeader>
    </template>
    <template v-slot:header-hero>
      <LandingHero></LandingHero>
    </template>

    <template v-slot:landing-footer>
      <LandingFooter></LandingFooter>
    </template>
  </LandingLayout>
</template>

<script>
import LandingLayout from "./layout/LandingLayout.vue";
import LandingFooter from "./layout/LandingFooter.vue";
import LandingNavHeader from "./layout/LandingNavHeader.vue";
import LandingHero from "./LandingHero.vue";

export default {
  components: {
    LandingLayout,
    LandingNavHeader,
    LandingFooter,
    LandingHero,
  },
  mounted() {},
};
</script>
