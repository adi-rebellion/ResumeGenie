<template>

  <PublicPage>
    <template v-slot:header>
      <LandingNavHeader></LandingNavHeader>
    </template>
     <template v-slot:landing-body>
       
      <body id="kt_body" class="bg-body">
    <!--begin::Main-->
    
    
    <div class="d-flex flex-column flex-root">
      <!--begin::Authentication - Sign-up -->
      <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
          <!--begin::Content-->
          <div class="d-flex flex-center flex-column flex-column-fluid">
            
            <!--begin::Wrapper-->
            <div class="w-lg-600px p-10 p-lg-15 mx-auto">
              
              <!--begin::Form-->
              <form
                class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
                novalidate="novalidate"
                id="kt_sign_up_form"
              >
                <!--begin::Heading-->
                <div class="mb-10 text-center">
                  <!--begin::Title-->
                  <h1 class="text-dark mb-3">Create an Account</h1>
                  <!--end::Title-->
                  <!--begin::Link-->
                  <div class="text-gray-400 fw-bold fs-4">
                    Already have an account?
                    <router-link
                       :to= "{ name : 'landing_login' }"
                      class="text-rg-yellow fw-bolder"
                      >Sign in here</router-link>
                  </div>
                  <!--end::Link-->
                </div>
                <!--end::Heading-->
            
                <!--begin::Input group-->
                <div class="row fv-row mb-7 fv-plugins-icon-container">
                  <!--begin::Col-->
                  <div class="col-xl-12">
                    <label class="form-label fw-bolder text-dark fs-6"
                      >Name</label
                    >
                    <input
                      class="form-control form-control-lg form-control-solid"
                      type="text"
                      placeholder=""
                      name="first-name"
                      autocomplete="off"
                      v-model="register.name"
                    />
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>
                  <!--end::Col-->
                 
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                  <label class="form-label fw-bolder text-dark fs-6"
                    >Email</label
                  >
                  <input
                    class="form-control form-control-lg form-control-solid"
                    type="email"
                    placeholder=""
                    name="email"
                    autocomplete="off"
                    v-model="register.email"
                  />
                  <div
                    class="fv-plugins-message-container invalid-feedback"
                  ></div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div
                  class="mb-10 fv-row fv-plugins-icon-container"
                  data-kt-password-meter="true"
                >
                  <!--begin::Wrapper-->
                  <div class="mb-1">
                    <!--begin::Label-->
                    <label class="form-label fw-bolder text-dark fs-6"
                      >Password</label
                    >
                    <!--end::Label-->
                    <!--begin::Input wrapper-->
                    <div class="position-relative mb-3">
                      <input
                        class="form-control form-control-lg form-control-solid"
                        type="password"
                        placeholder=""
                        name="password"
                        autocomplete="off"
                        v-model="register.password"
                      />
                      <span
                        class="
                          btn btn-sm btn-icon
                          position-absolute
                          translate-middle
                          top-50
                          end-0
                          me-n2
                        "
                        data-kt-password-meter-control="visibility"
                      >
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                      </span>
                    </div>
                    <!--end::Input wrapper-->
                    <!--begin::Meter-->
                    <!-- <div
                      class="d-flex align-items-center mb-3"
                      data-kt-password-meter-control="highlight"
                    >
                      <div
                        class="
                          flex-grow-1
                          bg-secondary bg-active-success
                          rounded
                          h-5px
                          me-2
                        "
                      ></div>
                      <div
                        class="
                          flex-grow-1
                          bg-secondary bg-active-success
                          rounded
                          h-5px
                          me-2
                        "
                      ></div>
                      <div
                        class="
                          flex-grow-1
                          bg-secondary bg-active-success
                          rounded
                          h-5px
                          me-2
                        "
                      ></div>
                      <div
                        class="
                          flex-grow-1
                          bg-secondary bg-active-success
                          rounded
                          h-5px
                        "
                      ></div>
                    </div> -->
                    <!--end::Meter-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Hint-->
                  <div class="text-muted">
                    Use 8 or more characters with a mix of letters, numbers
                    &amp; symbols.
                  </div>
                  <!--end::Hint-->
                  <div
                    class="fv-plugins-message-container invalid-feedback"
                  ></div>
                </div>
                <!--end::Input group=-->
             
                <!--begin::Input group-->
                <div class="fv-row mb-10 fv-plugins-icon-container">
                  <label
                    class="
                      form-check
                      form-check-custom
                      form-check-solid
                      form-check-inline
                    "
                  >
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="termscon"
                      value="1"
                    />
                    <span class="form-check-label fw-bold text-gray-700 fs-6"
                      >I Agree to
                      <router-link :to="{ name: 'landing_terms' }" class="ms-1 text-rg-yellow"
                        >Terms and conditions</router-link
                      ></span
                    >
                  </label>
                  <div
                    class="fv-plugins-message-container invalid-feedback"
                  ></div>
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center">
                  <button
                    type="button"
                    id="kt_sign_up_submit"
                    class="btn btn-lg bg-rg-yellow"
                    @click.prevent="registerUser"
                  >
                    <span v-if="!showRegisterLoading">Create Account</span>
                    <span v-if="showRegisterLoading"
                      >Please wait...
                      <span
                        class="
                          spinner-border spinner-border-sm
                          align-middle
                          ms-2
                        "
                      ></span
                    ></span>
                    <!-- <span >Submit</span>
                    <span 
                      >Please wait...
                      <span
                        class="
                          spinner-border spinner-border-sm
                          align-middle
                          ms-2
                        "
                      ></span
                    ></span> -->
                  </button>
                </div>
                <!--end::Actions-->
                <div></div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Content-->
         
        </div>
        <!--end::Body-->
      </div>
      <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Main-->

    <!--end::Body-->
    <svg
      id="SvgjsSvg1001"
      width="2"
      height="0"
      xmlns="http://www.w3.org/2000/svg"
      version="1.1"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      xmlns:svgjs="http://svgjs.dev"
      style="
        overflow: hidden;
        top: -100%;
        left: -100%;
        position: absolute;
        opacity: 0;
      "
    >
      <defs id="SvgjsDefs1002"></defs>
      <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
      <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
  </body>
    </template>
   
   
    <template v-slot:landing-footer>
    
      <LandingFooter></LandingFooter>
    </template>
  </PublicPage>
</template>

<script>
const axios = require("axios").default;
  const API = require('../../services/api')
import PublicPage from "./layout/PublicPage.vue";
import LandingFooter from "./layout/LandingFooter.vue";
import LandingNavHeader from "./layout/LandingNavHeader.vue";

export default {
  components: {
    PublicPage,
    LandingNavHeader,
    LandingFooter
   
    
  
  },
  data() {
    return {
       showRegisterLoading: false,
      register: {
        name: "",
        email: "",
        password: "",
        termscon: ""
      },
      errors: [],
    };
  },
  methods: {
    async registerUser() {
      if(this.register.name == '')
      {
         this.$toast.error("Error",'Name field is required.');
         return;
      }
      else if(this.register.email == '')
      {
         this.$toast.error("Error",'Email field is required.');
          return;
      }
      else if(this.register.password == '')
      {
         this.$toast.error("Error",'Password field is required.');
          return;
      }
      else if(this.register.password.length < 6)
      {
         this.$toast.error("Error",'Password strength is required to be more than 6 chars.');
          return;
      }
     
       this.showRegisterLoading = true;
        await API.register(this.register).then((res) => {
                      console.log(res.data.message)
                      this.showRegisterLoading = false;
                      if(res.data.command == 'success')
                      {
                         this.$toast.success("Success",res.data.message);
                           this.$router.push("login");
                      }
                      else
                      {
                         this.$toast.error("Error",res.data.message);
                      }
                     
                  })
            
          },
  },
};
</script>
