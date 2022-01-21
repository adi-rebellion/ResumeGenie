<template>
  <div
    id="kt_aside"
    class="aside"
    data-kt-drawer="true"
    data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="auto"
    data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_toggle"
    style="background-color: #218380;"
  >
 
    <!--begin::Logo-->
    <div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
      <!-- <router-link :to="{ name: 'DashboardPage' }">
        <img
          alt="Logo"
          src="../../../../public/theme/dist/assets/media/logos/RG.png"
          class="h-80px"
        />
      </router-link> -->
    </div>
    <!--end::Logo-->
     <!--begin::Footer-->
    <div v-if="$route.name != 'DashboardPage'"
      class="aside-footer flex-column-auto pb-5 pb-lg-10"
      id="kt_aside_footer"
    >
      <!--begin::Menu-->
      <div
        class="d-flex flex-center w-100 scroll-px"
        data-bs-toggle="tooltip"
        data-bs-placement="right"
        data-bs-dismiss="click"
        title=""
        data-bs-original-title=""
      >
        <button
          @click.prevent="goBack"
          class="btn "
          data-kt-menu-trigger="click"
          data-kt-menu-overflow="true"
          data-kt-menu-placement="top-start"
        >
          <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
          <span class="svg-icon">
        <img src="https://img.icons8.com/stickers/60/000000/back.png"/>
          </span>
          <!--end::Svg Icon-->
        </button>
       
      </div>
      <!--end::Menu-->
    </div>
    <!--end::Footer-->
    <!--begin::Nav-->
    <div
      class="aside-menu flex-column-fluid pt-0 pb-5 py-lg-5"
      id="kt_aside_menu"
    >
      <!--begin::Aside menu-->
      <div
        id="kt_aside_menu_wrapper"
        class="w-100 hover-scroll-overlay-y scroll-ps d-flex"
        data-kt-scroll="true"
        data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
        data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu"
        data-kt-scroll-offset="0"
        style="height: 195px"
      >
        <div
          id="kt_aside_menu"
          class="
            menu
            menu-column
            menu-title-gray-600
            menu-state-primary
            menu-state-icon-primary
            menu-state-bullet-primary
            menu-icon-gray-400
            menu-arrow-gray-400
            fw-bold
            fs-6
          "
          data-kt-menu="true"
        >
        <div class="menu-item py-3">
            <!-- <a
              class="menu-link active"
              href="../../../../public/theme/dist/index.html"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
              data-bs-original-title="Dashboard"
            > -->
            <router-link
              class="menu-link"
              v-bind:class="{ active: $route.name=='DashboardPage' }"
              :to="{ name: 'DashboardPage' }"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
              data-bs-original-title="Career Dashboard"
            >
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                <span class="svg-icon svg-icon-2x">
            <img src="https://img.icons8.com/stickers/100/000000/university.png"/>
                </span>
                <!--end::Svg Icon-->
              </span>
            </router-link>
          </div>
          <br> <br>
          <div
            data-kt-menu-trigger="click"
            data-kt-menu-placement="right-start"
            class="menu-item py-3"
          >
            <router-link
             :to="{ name: 'GenieResume' }"
              v-bind:class="{ active: $route.name=='GenieResume' }"
              class="menu-link"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
              data-bs-original-title="Build Resume"
            >
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs037.svg-->
                <span class="svg-icon svg-icon-2x">
                <img src="https://img.icons8.com/stickers/100/000000/resume.png"/>
                </span>
                <!--end::Svg Icon-->
              </span>
            </router-link>
           
          </div>
          <br><br>
           <div
            data-kt-menu-trigger="click"
            data-kt-menu-placement="right-start"
            class="menu-item py-3"
          >
            <router-link
             :to="{ name: 'GenieResume' }"
              v-bind:class="{ active: $route.name=='GenieResume' }"
              class="menu-link"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
              data-bs-original-title="Build Resume"
            >
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs037.svg-->
                <span class="svg-icon svg-icon-2x">
               <img src="https://img.icons8.com/stickers/100/000000/business.png"/>
                </span>
                <!--end::Svg Icon-->
              </span>
            </router-link>
           
          </div>
         
        </div>
      </div>
      <!--end::Aside menu-->
    </div>
    <!--end::Nav-->
    <!--begin::Footer-->
    <div
      class="aside-footer flex-column-auto pb-5 pb-lg-10"
      id="kt_aside_footer"
    >
      <!--begin::Menu-->
      <div
        class="d-flex flex-center w-100 scroll-px"
        data-bs-toggle="tooltip"
        data-bs-placement="right"
        data-bs-dismiss="click"
        title=""
        data-bs-original-title=""
      >
        <router-link
          :to="{ name: 'logout' }"
          class="btn "
          data-kt-menu-trigger="click"
          data-kt-menu-overflow="true"
          data-kt-menu-placement="top-start"
        >
          <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
          <span class="svg-icon">
         <img src="https://img.icons8.com/stickers/60/000000/export.png"/>
          </span>
          <!--end::Svg Icon-->
        </router-link>
       
      </div>
      <!--end::Menu-->
    </div>
    <!--end::Footer-->
  </div>
</template>
<script>



const axios = require("axios").default;


export default {
  components: {
   
  },
  data() {
        return {
            
           
        };
    },
    methods: {
      goBack()
      {
        return this.$router.go(-1);
      }
       


      


    },
    async mounted() {

         let recaptchaScript = document.createElement('script')
      recaptchaScript.setAttribute('src', './theme/dist/assets/js/scripts.bundle.js')
      document.head.appendChild(recaptchaScript)

          let recaptchaScript2 = document.createElement('script')
      recaptchaScript.setAttribute('src', './theme/dist/assets/plugins/global/plugins.bundle.js')
      document.head.appendChild(recaptchaScript2)

        let recaptchaScript3 = document.createElement('script')
      recaptchaScript.setAttribute('src', './theme/dist/assets/plugins/custom/leaflet/leaflet.bundle.js')
      document.head.appendChild(recaptchaScript3)

      let recaptchaScript4 = document.createElement('script')
      recaptchaScript.setAttribute('src', './theme/dist/assets/js/custom/widgets.js')
      document.head.appendChild(recaptchaScript4)

     






    },
};
</script>
