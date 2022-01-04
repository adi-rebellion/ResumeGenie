<template>
  <PublicPage>
    <!-- <template v-slot:header>
      <LandingNavHeader></LandingNavHeader>
    </template> -->
    <template v-slot:landing-body>
     <body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #434343">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
						<!--begin::Content-->
						<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
							<!--begin::Logo-->
							<a href="../../demo9/dist/index.html" class="py-9 mb-5">
								<img alt="Logo" src="theme/dist/assets/media/logos/ResumeGenieLight.png"  height="200">
							</a>
							<!--end::Logo-->
							
						</div>
						<!--end::Content-->
						<!--begin::Illustration-->
						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-550px" style="background-image: url(theme/dist/assets/media/illustrations/rg/Login.png"></div>
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
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_in_form" action="#">
								<!--begin::Heading-->
								<br><br><br><br><br><br><br><br><br><br>
								<div class="text-center mb-10">
									<!--begin::Title-->
									<!-- <h1 class="text-dark mb-3">Sign In to ResumeGenie</h1> -->
									<!--end::Title-->
									<!--begin::Link-->
									<div class="text-gray-400 fw-bold fs-4">New Here?
									<a href="../../demo9/dist/authentication/flows/aside/sign-up.html" class="link-primary fw-bolder">Create an Account</a></div>
									<!--end::Link-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-10 fv-plugins-icon-container">
									<!--begin::Label-->
									<label class="form-label fs-6 fw-bolder text-dark">Email</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off"  v-model="login.email">
									<!--end::Input-->
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10 fv-plugins-icon-container">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack mb-2">
										<!--begin::Label-->
										<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
										<!--end::Label-->
										<!--begin::Link-->
										<a href="../../demo9/dist/authentication/flows/aside/password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
										<!--end::Link-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Input-->
									<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" v-model="login.password">
									<!--end::Input-->
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="text-center">
									  <button
                    type="button"
                    id="kt_sign_up_submit"
                    class="btn btn-lg btn-primary"
                    @click.prevent="loginUser"
                  >
                    <span v-if="!showLoginLoading">Login</span>
                    <span v-if="showLoginLoading"
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
									<!--begin::Separator-->
									<div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
									<!--end::Separator-->
									<!--begin::Google link-->
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="theme/dist/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3">Continue with Google</a>
									<!--end::Google link-->
									<!--begin::Google link-->
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="theme/dist/assets/media/logos/TheHiringCo.jpg" class="h-20px me-3">Continue with Hiring Company</a>
									<!--end::Google link-->
									
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
			<!--end::Authentication - Sign-in-->
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
import PublicPage from "./layout/PublicPage.vue";
import LandingFooter from "./layout/LandingFooter.vue";
import LandingNavHeader from "./layout/LandingNavHeader.vue";
axios.defaults.withCredentials = true;

export default {
  components: {
    PublicPage,
    LandingNavHeader,
    LandingFooter,
  },
  data() {
    return {
		showLoginLoading: false,
      login: {
        email: "",
        password: "",
      },
      errors: [],
    };
  },
  mounted() {
    console.log(this.$store.state);
  },
  methods: {
    async loginUser() {
      if (this.login.email == "") {
        this.$toast.error("Error", "Email field is required.");
        return;
      } else if (this.login.password == "") {
        this.$toast.error("Error", "Password field is required.");
        return;
      }
	   this.showLoginLoading = true;
      const loginStatus = await this.$store.dispatch("login", this.login);
      console.log({
        loginStatus,
      });
      if (loginStatus.status == "success") {
        await this.$store.dispatch("getUser");
		 this.showLoginLoading = false;
        this.$router.push("dashboard");
      } else {
        this.$toast.error("Error", " Incorrect username or password.");
      }
    },
    logout() {
      this.$store.dispatch("logout");
    },
  },
};
</script>
