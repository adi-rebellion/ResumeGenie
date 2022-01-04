<template>

  <PublicPage>
    
     <template v-slot:landing-body>
    <body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-up -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #434343">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
						<!--begin::Content-->
						<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
							<!--begin::Logo-->
							<a href="../../demo9/dist/index.html" class="py-9 mb-5">
								<img alt="Logo" src="theme/dist/assets/media/logos/ResumeGenieDark.png" class="h-80px">
							</a>
							<!--end::Logo-->
							<!--begin::Title-->
							<h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to ResumeGenie</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<p class="fw-bold fs-2" style="color: #986923;">Discover Amazing ResumeGenie
							<br>with great build tools</p>
							<!--end::Description-->
						</div>
						<!--end::Content-->
						<!--begin::Illustration-->
						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(theme/dist/assets/media/illustrations/sigma-1/13.png"></div>
						<!--end::Illustration-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-600px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_up_form">
								<!--begin::Heading-->
								<div class="mb-10 text-center">
									<!--begin::Title-->
									<h1 class="text-dark mb-3">Create an Account</h1>
									<!--end::Title-->
									<!--begin::Link-->
									<div class="text-gray-400 fw-bold fs-4">Already have an account?
									<router-link :to="{ name: 'landing_login' }"  class="txt-rg-yellow fw-bolder">Sign in here</router-link></div>
									<!--end::Link-->
								</div>
								<!--end::Heading-->
								<!--begin::Action-->
								<button type="button" class="btn bg-rg-yellow fw-bolder w-100 mb-10">
								<img alt="Logo" src="theme/dist/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3">Sign in with Google</button>
								<!--end::Action-->
                	<!--begin::Google link-->
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="theme/dist/assets/media/logos/TheHiringCo.jpg" class="h-20px me-3">Continue with Hiring Company</a>
									<!--end::Google link-->
								<!--begin::Separator-->
								<div class="d-flex align-items-center mb-10">
									<div class="border-bottom border-gray-300 mw-50 w-100"></div>
									<span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
									<div class="border-bottom border-gray-300 mw-50 w-100"></div>
								</div>
								<!--end::Separator-->
								<!--begin::Input group-->
								<div class="row fv-row mb-7 fv-plugins-icon-container">
									<!--begin::Col-->
									<div class="col-xl-12">
										<label class="form-label fw-bolder text-dark fs-6">Name</label>
										<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="first-name" autocomplete="off" v-model="register.name">
									<div class="fv-plugins-message-container invalid-feedback"></div></div>
									<!--end::Col-->
								
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-7 fv-plugins-icon-container">
									<label class="form-label fw-bolder text-dark fs-6">Email</label>
									<input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off"  v-model="register.email">
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
									<!--begin::Wrapper-->
									<div class="mb-1">
										<!--begin::Label-->
										<label class="form-label fw-bolder text-dark fs-6">Password</label>
										<!--end::Label-->
										<!--begin::Input wrapper-->
										<div class="position-relative mb-3">
											<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off"  v-model="register.password">
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
										</div>
										<!--end::Input wrapper-->
										<!--begin::Meter-->
										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
										<!--end::Meter-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Hint-->
									<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
									<!--end::Hint-->
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Input group=-->
								<!--begin::Input group-->
								<!-- <div class="fv-row mb-5 fv-plugins-icon-container">
									<label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
									<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm-password" autocomplete="off">
								<div class="fv-plugins-message-container invalid-feedback"></div></div> -->
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10 fv-plugins-icon-container">
									<label class="form-check form-check-custom form-check-solid form-check-inline">
										<input class="form-check-input" type="checkbox" name="toc" value="1">
										<span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
										<a href="#" class="ms-1 txt-rg-yellow">Terms and conditions</a>.</span>
									</label>
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
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
							<div></div></form>
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
<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></body>   
    
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
