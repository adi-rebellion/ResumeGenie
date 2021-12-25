<template>
  <PublicPage>
    <template v-slot:header>
      <LandingNavHeader></LandingNavHeader>
    </template>
    <template v-slot:landing-body>
      <div id="kt_content_container" class="container-xxl">
        <!--begin::Stepper-->
        <div
          class="
            stepper stepper-pills stepper-column
            d-flex
            flex-column flex-xl-row flex-row-fluid
          "
          id="kt_create_account_stepper"
          data-kt-stepper="true"
        >
          <!--begin::Aside-->
          <div
            class="
              d-flex
              justify-content-center
              bg-body
              rounded
              justify-content-xl-start
              flex-row-auto
              w-100 w-xl-300px w-xxl-400px
              me-9
            "
          >
            <!--begin::Wrapper-->
            <div class="px-6 px-lg-10 px-xxl-15 py-20">
              <!--begin::Nav-->
              <div class="stepper-nav">
                <!--begin::Step 1-->
                <div
                  v-bind:class="{ current: CreateResumeStep == 1 }"
                  class="stepper-item"
                  data-kt-stepper-element="nav"
                >
                  <!--begin::Line-->
                  <div class="stepper-line w-40px"></div>
                  <!--end::Line-->
                  <!--begin::Icon-->
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">1</span>
                  </div>
                  <!--end::Icon-->
                  <!--begin::Label-->
                  <div class="stepper-label">
                    <h3 class="stepper-title">About</h3>
                  </div>
                  <!--end::Label-->
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div
                  v-bind:class="{ current: CreateResumeStep == 2 }"
                  class="stepper-item"
                  data-kt-stepper-element="nav"
                >
                  <!--begin::Line-->
                  <div class="stepper-line w-40px"></div>
                  <!--end::Line-->
                  <!--begin::Icon-->
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">2</span>
                  </div>
                  <!--end::Icon-->
                  <!--begin::Label-->
                  <div class="stepper-label">
                    <h3 class="stepper-title">Experience</h3>
                  </div>
                  <!--end::Label-->
                </div>
                <!--end::Step 2-->
                 <!--begin::Step 2-->
                <div
                  v-bind:class="{ current: CreateResumeStep == 3 }"
                  class="stepper-item"
                  data-kt-stepper-element="nav"
                >
                  <!--begin::Line-->
                  <div class="stepper-line w-40px"></div>
                  <!--end::Line-->
                  <!--begin::Icon-->
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">3</span>
                  </div>
                  <!--end::Icon-->
                  <!--begin::Label-->
                  <div class="stepper-label">
                    <h3 class="stepper-title">Education</h3>
                  </div>
                  <!--end::Label-->
                </div>
                <!--end::Step 2-->
                 <!--begin::Step 2-->
                <div
                  v-bind:class="{ current: CreateResumeStep == 4 }"
                  class="stepper-item"
                  data-kt-stepper-element="nav"
                >
                  <!--begin::Line-->
                  <div class="stepper-line w-40px"></div>
                  <!--end::Line-->
                  <!--begin::Icon-->
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">4</span>
                  </div>
                  <!--end::Icon-->
                  <!--begin::Label-->
                  <div class="stepper-label">
                    <h3 class="stepper-title">Awards</h3>
                  </div>
                  <!--end::Label-->
                </div>
                <!--end::Step 2-->
                 <!--begin::Step 2-->
                <div
                  v-bind:class="{ current: CreateResumeStep == 5 }"
                  class="stepper-item"
                  data-kt-stepper-element="nav"
                >
                  <!--begin::Line-->
                  <div class="stepper-line w-40px"></div>
                  <!--end::Line-->
                  <!--begin::Icon-->
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">5</span>
                  </div>
                  <!--end::Icon-->
                  <!--begin::Label-->
                  <div class="stepper-label">
                    <h3 class="stepper-title">Projects</h3>
                  </div>
                  <!--end::Label-->
                </div>
                <!--end::Step 2-->
                 <!--begin::Step 2-->
                <div
                  v-bind:class="{ current: CreateResumeStep == 6 }"
                  class="stepper-item"
                  data-kt-stepper-element="nav"
                >
                  <!--begin::Line-->
                  <div class="stepper-line w-40px"></div>
                  <!--end::Line-->
                  <!--begin::Icon-->
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">6</span>
                  </div>
                  <!--end::Icon-->
                  <!--begin::Label-->
                  <div class="stepper-label">
                    <h3 class="stepper-title">Skills</h3>
                  </div>
                  <!--end::Label-->
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div
                  v-bind:class="{ current: CreateResumeStep == 7 }"
                  class="stepper-item"
                  data-kt-stepper-element="nav"
                >
                  <!--begin::Line-->
                  <div class="stepper-line w-40px"></div>
                  <!--end::Line-->
                  <!--begin::Icon-->
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">7</span>
                  </div>
                  <!--end::Icon-->
                  <!--begin::Label-->
                  <div class="stepper-label">
                    <h3 class="stepper-title">Contact</h3>
                  </div>
                  <!--end::Label-->
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <div
                  v-bind:class="{ current: CreateResumeStep == 8 }"
                  class="stepper-item"
                  data-kt-stepper-element="nav"
                >
                  <!--begin::Line-->
                  <div class="stepper-line w-40px"></div>
                  <!--end::Line-->
                  <!--begin::Icon-->
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">8</span>
                  </div>
                  <!--end::Icon-->
                  <!--begin::Label-->
                  <div class="stepper-label">
                    <h3 class="stepper-title">Design</h3>
                  </div>
                  <!--end::Label-->
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div
                  v-bind:class="{ current: CreateResumeStep == 9 }"
                  class="stepper-item"
                  data-kt-stepper-element="nav"
                >
                  <!--begin::Line-->
                  <div class="stepper-line w-40px"></div>
                  <!--end::Line-->
                  <!--begin::Icon-->
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">9</span>
                  </div>
                  <!--end::Icon-->
                  <!--begin::Label-->
                  <div class="stepper-label">
                    <h3 class="stepper-title">Completed</h3>
                  </div>
                  <!--end::Label-->
                </div>
                <!--end::Step 5-->
              </div>
              <!--end::Nav-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--begin::Aside-->
          <!--begin::Content-->
                    <div class="d-flex flex-row-fluid flex-center bg-body rounded">
                        <!--begin::Form-->
                        <form class="py-20 w-100 w-xl-700px px-9 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_create_account_form">
                           
                            <!--begin::Step 1-->
                            <div v-if="CreateResumeStep == 1" class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bolder text-dark">
                                            About
                                        </h2>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        
                                        <div class="mb-5 fv-row fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="required fs-5 fw-bold mb-2">Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="Your API Name" name="name" v-model="genie_basic.name">
														<!--end::Input-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
                          <div class="mb-5 fv-row fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="required fs-5 fw-bold mb-2">Position</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="Your API Name" name="label" v-model="genie_basic.label">
														<!--end::Input-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
                          
                                       <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="required fs-5 fw-bold mb-2">Your Description</label>
														<!--end::Label-->
														<!--begin::Input-->
														<textarea class="form-control form-control-solid" rows="3" name="description" placeholder="Describe your API" v-model="genie_basic.summary"></textarea>
														<!--end::Input-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
                                         
                                    </div>
                                   
														
												
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 1-->
                              <!--begin::Step 2-->
                            <div v-if="CreateResumeStep == 2" class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bolder text-dark">
                                           Experience
                                        </h2>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        
                                        <div class="mb-5 fv-row fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="required fs-5 fw-bold mb-2">sss</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="Your API Name" name="name" v-model="genie_basic.name">
														<!--end::Input-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
                          <div class="mb-5 fv-row fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="required fs-5 fw-bold mb-2">cscs</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="Your API Name" name="label" v-model="genie_basic.label">
														<!--end::Input-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
                          
                                       <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="required fs-5 fw-bold mb-2">scs Description</label>
														<!--end::Label-->
														<!--begin::Input-->
														<textarea class="form-control form-control-solid" rows="3" name="description" placeholder="Describe your API" v-model="genie_basic.summary"></textarea>
														<!--end::Input-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
                                         
                                    </div>
                                   
														
												
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 2-->
                            
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-10">
                                <!--begin::Wrapper-->
                                <div v-if="CreateResumeStep !=1" class="mr-2">
                                    <button type="button" class="btn btn-lg btn-dark me-3" @click.prevent="previousButton">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black"></rect>
                                                <path
                                                    d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                    fill="black"
                                                ></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Back
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Wrapper-->
                                <div>
                                    <div v-if="CreateResumeStep == 5 ">
                                          <button
                    type="button"
                    id="kt_sign_up_submit"
                    class="btn btn-lg bg-hearecho-red"
                    @click.prevent="createOrganization"
                  >
                    <span v-if="!showNewOrgLoading">Create Organization</span>
                    <span v-if="showNewOrgLoading"
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
                                    <div v-if="CreateResumeStep != 5">
                                        <button type="button" class="btn btn-lg bg-rg-green" data-kt-stepper-action="next" @click.prevent="nextButton">
                                            Continue
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="black"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </div>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
        </div>
        <!--end::Stepper-->
      </div>
    </template>
    <template v-slot:landing-footer>
      <LandingFooter></LandingFooter>
    </template>
  </PublicPage>
</template>

<script>
const API = require("../../services/api");
import PublicPage from "./layout/PublicPage.vue";
import LandingFooter from "../landing/layout/LandingFooter.vue";
import LandingNavHeader from "../landing/layout/LandingNavHeader.vue";

const axios = require("axios").default;
import { GenieBasic } from '../../services/api';

export default {
    components: {
        PublicPage,
        LandingNavHeader,
        LandingFooter,
    },

    data() {
        return {
            // showNewOrgLoading: false,
            // users: null,
            // urlInputs: null,
            // domainInputs: null,

            CreateResumeStep: 1,
            genie_basic: {
                name: "",
                label: "",
                // location: "",
                summary: "",
            },
            errors: [],
        };
    },
    methods: {


       async nextButton() {
            if (this.CreateResumeStep == 1) {
                if (this.genie_basic.name == "") {
                    this.$toast.error("Error", "Name is a required feild");
                    return "Error";
                }
                 if (this.genie_basic.label == "") {
                    this.$toast.error("Error", "Current Position is a required feild");
                    return "Error";
                }
                //  if (this.genie_basic.location == "") {
                //     this.$toast.error("Error", "Current Location is a required feild");
                //     return "Error";
                // }
                 if (this.genie_basic.summary == "") {
                    this.$toast.error("Error", "About is a required feild");
                    return "Error";
                }
               
                await API.GenieBasic(this.genie_basic)
                .then((res) => {
                    if (res.status == 200) {
                        this.$toast.success("Success", "Organization created succesfully");
                         
                    } else {
                        this.$toast.error("Error", "Oops error creating an organization");
                    }
                })
                .catch((error) => {
                    // this.showNewOrgLoading = false;
                    if (error.response.status == 422) {
                        this.errors = error.response.data.errors;
                    } else {
                        console.log(error.message);
                    }
                });

            }
            // else if (this.CreateResumeStep == 2) {
            //     if (this.org.name == "") {
            //         this.$toast.error("Error", "Organization name is required");
            //         return "Error";
            //     } else if (this.org.url == "") {
            //         this.$toast.error("Error", "Organization website url is required");
            //         return "Error";
            //     } else if (this.org.domain == "") {
            //         this.$toast.error("Error", "Organization domain url is required");
            //         return "Error";
            //     } else if (this.website_exist == 1) {
            //         this.$toast.error("Error", "This web URL is taken");
            //         return "Error";
            //     } else if (this.domain_exist == 1) {
            //         this.$toast.error("Error", "This domain is taken");
            //         return "Error";
            //     }

            //     // else if(this.org.domain)
            //     // {
            //     //    regex = "^((?!-)[A-Za-z0–9-]{1, 63}(?<!-)\.)+[A-Za-z]{2, 6}$"
            //     //    var check = regex.test(this.org.domain);
            //     //    alert(check);
            //     //     if(!regex.test(this.org.domain))
            //     //     {
            //     //        this.$toast.error("Error","Organization domain is not valid");
            //     //       return 'Error';
            //     //     }
            //     // }
            // }

            this.CreateResumeStep = this.CreateResumeStep + 1;
        },
        previousButton() {
            this.CreateResumeStep = this.CreateResumeStep - 1;
        },
        // async createOrganization() {
        //     this.showNewOrgLoading = true;
        //     await API.CreateOrg(this.org)
        //         .then((res) => {
        //             if (res.status == 200) {
        //                 this.$toast.success("Success", "Organization created succesfully");
        //                   this.$router.push("p-search-org");
        //             } else {
        //                 this.$toast.error("Error", "Oops error creating an organization");
        //             }
        //         })
        //         .catch((error) => {
        //             this.showNewOrgLoading = false;
        //             if (error.response.status == 422) {
        //                 this.errors = error.response.data.errors;
        //             } else {
        //                 console.log(error.message);
        //             }
        //         });
        //     //  axios
        //     //   .post("http://127.0.0.1:8000/api/new/organization", this.org)
        //     //   .then((res) => {
        //     //     if(res.status == 200)
        //     //     {
        //     //        this.$toast.success("Success","Organization created succesfully");
        //     //     }
        //     //     else
        //     //     {
        //     //        this.$toast.error("Error","Oops error creating an organization");
        //     //     }
        //     //   })
        //     //   .catch((error) => {
        //     //      this.showNewOrgLoading = false;
        //     //       if (error.response.status == 422) {
        //     //       this.errors = error.response.data.errors;
        //     //     } else {
        //     //       console.log(error.message);
        //     //     }

        //     //   });
        // },
        // addNewUser() {
        //     this.users.push({
        //         name: "New user",
        //         desc: "Tester",
        //     });
        // },
        // addUrlInput() {
        //   if(this.website_exist != 1)
        //   {
        //     this.urlInputs.push({
        //         name: "New user",
        //         desc: "Tester",
        //     });
        //   }
        //   else
        //   {
        //     this.$toast.error("Error", "This web URL is taken");
        //   }

        // },
        // addDomainInput() {
        //   if(this.domain_exist != 1)
        //   {
        //     this.domainInputs.push({
        //         name: "New user",
        //         desc: "Tester",
        //     });
        //   }
        //   else
        //   {
        //     this.$toast.error("Error", "This Domain is taken");
        //   }

        // },
    },
    async mounted() {
        // You can receive these data via api,
        // hence before a component is loaded
        // use mount function to get initial data.
        // this.users = [
        //     {
        //         name: "Nisheal",
        //         desc: "Engineer",
        //     },
        //     {
        //         name: "Aditya",
        //         desc: "Engineer",
        //     },
        // ];
        // this.urlInputs = [
        //     {
        //         name: "Nisheal",
        //         desc: "Engineer",
        //     }

        // ];
        // this.domainInputs = [
        //     {
        //         name: "Nisheal",
        //         desc: "Engineer",
        //     }

        // ];
    },
};
</script>
