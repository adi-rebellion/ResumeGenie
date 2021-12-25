<template>
  <div>
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Header Section-->
      <div class="mb-0" id="home">
        <!--begin::Wrapper-->
        <div
          class="
            bgi-no-repeat
            bgi-size-contain
            bgi-position-x-center
            bgi-position-y-bottom
            landing-dark-bg
          "
          v-bind:style="{
            backgroundImage:
              'url(' +
               +
              'theme/dist/assets/media/svg/illustrations/landing.svg)',
          }"
        >
          <!--begin::Header-->
          <slot name="header"></slot>
          <!--end::Header-->
          <!--begin::Landing hero-->
         
          <!--end::Landing hero-->
        </div>
        <!--end::Wrapper-->
       
      </div>
      <!--end::Header Section-->

      <slot name="landing-body"></slot>

      <!--begin::Footer Section-->
      <!--end::Footer Section-->
      <slot name="landing-footer"></slot>
    </div>
    <!--end::Main-->
  </div>
</template>

<script>
export default {};
</script>