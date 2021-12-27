<template>
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
      <DashboardAside></DashboardAside>
      <!--begin::Wrapper-->
      <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <!--begin::Header-->
        <DashboardNavbar></DashboardNavbar>
        <!--end::Header-->
        <!--begin::Content-->
        <slot name="dashboard-content"></slot>
        <!--end::Content-->
        <!--begin::Footer-->
        <DashbooardFooter></DashbooardFooter>
        <!--end::Footer-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
</template>

<script>
import DashboardAside from "./DashboardAside.vue";
import DashbooardFooter from "./DashboardFooter.vue";
import DashboardNavbar from "./DashboardNavbar.vue";

export default {
  components: {
    DashboardNavbar,
    DashbooardFooter,
    DashboardAside,
  },
  mounted() {},
};
</script>