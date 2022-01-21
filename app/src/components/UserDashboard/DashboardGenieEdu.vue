<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
          <div v-if="all_education.length > 0" class="card mb-xl-8">
            <div class="card mb-5 mb-xl-10">
              <!--begin::Card header-->
              <div class="card-header">
                <!--begin::Title-->
                <div class="card-title">
                   <img src="https://img.icons8.com/stickers/50/000000/graduation-cap.png"/>&nbsp;
                  <h3>Education(s)</h3>
                </div>
                <!--end::Title-->
              </div>
              <!--end::Card header-->
              <!--begin::Card body-->
              <div class="card-body">
                <!--begin::Addresses-->
                <div class="row gx-9 gy-6">
                   <!--begin::Col-->
                  	<div class="col-4">
											<div class="card card-stretch">
												<a href="#add_new_work_exp" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
													<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
												 <span class="svg-icon svg-icon-3x mb-5" style="margin-left:auto; margin-right:auto;">
                        <img src="https://img.icons8.com/stickers/100/000000/add.png"  />
                       
                        </span>
                        <!--end::Svg Icon-->
                          <span class="fs-4 fw-bolder" style="margin-left:auto; margin-right:auto;">Add a education</span>
												</a>
											</div>
										</div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div
                    v-for="edu in all_education"
                    :key="edu.id"
                    class="col-xl-4"
                  >
                    <!--begin::Address-->
                    <div
                      class="
                        card card-flush shadow-lg
                        h-xl-100
                        flex-row flex-stack flex-wrap
                        p-6
                      "
                    >
                      <!--begin::Details-->
                      <div class="d-flex flex-column py-2">
                        <div
                          class="d-flex align-items-center fs-5 fw-bolder mb-1"
                        >
                          {{ edu.institution  }}
                         
                        </div>
                        <div class="fs-6 fw-bold text-gray-600">
                         {{ edu.area  }}
                           <br /><span class="badge badge-light-success">{{ edu.start_date}} -
                          <span v-if="edu.end_date">{{edu.end_date}}</span><span v-if="!edu.end_date">now</span> @ {{edu.score}}</span>
                        </div>
                      </div>
                      <!--end::Details-->
                      <!--begin::Actions-->
                      <div class="d-flex align-items-center py-2">
                    
                        <button
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_education(edu.id)"
                        >
                        <img src="https://img.icons8.com/stickers/30/000000/delete-forever.png"/>
                        </button>
                        <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_education(edu.id)"
                        >
                          <img src="https://img.icons8.com/stickers/30/000000/multi-edit.png"/>
                        </button>
                      </div>
                      <!--end::Actions-->
                    </div>
                    <!--end::Address-->
                  </div>
                  <!--end::Col-->

                 
                </div>
                <!--end::Addresses-->
              </div>
              <!--end::Card body-->
            </div>
          </div>
          <!--begin::Basic info-->
          <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div
              id="add_new_work_exp"
              class="card-header border-0 cursor-pointer"
              role="button"
              data-bs-toggle="collapse"
              data-bs-target="#kt_account_profile_details"
              aria-expanded="true"
              aria-controls="kt_account_profile_details"
            >
              <!--begin::Card title-->
              <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Adding Education details</h3>
              </div>
              <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_profile_details" class="collapse show">
              <!--begin::Form-->
              <form
                id="kt_account_profile_details_form"
                class="form fv-plugins-bootstrap5 fv-plugins-framework"
                novalidate="novalidate"
              >
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                  <!--begin::Input group-->
                  <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >Institution</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                      <!--begin::Row-->
                      <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                          <input
                            type="text"
                            name="institution"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Your school name"
                            v-model="genie_education.institution"
                          />
                          <div
                            class="
                              fv-plugins-message-container
                              invalid-feedback
                            "
                          ></div>
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >Area</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                      <input
                        type="text"
                        name="area"
                        class="form-control form-control-lg form-control-solid"
                        placeholder="Your area of study or degree earned"
                        v-model="genie_education.area"
                      />
                      <div
                        class="fv-plugins-message-container invalid-feedback"
                      ></div>
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Input group-->

                  <!--begin::Input group-->
                  <!-- <div class="row mb-6">
                   
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >Study type</label
                    >
                  
                    <div class="col-lg-8">
                  
                      <div class="row">
                       
                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                          <input
                            type="text"
                            name="studyType"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Study Type"
                            v-model="genie_education.studyType"
                          />
                          <div
                            class="
                              fv-plugins-message-container
                              invalid-feedback
                            "
                          ></div>
                        </div>
                        
                      </div>
                  
                    </div>
                   
                  </div> -->
                  <!--end::Input group-->

                  <!--begin::Input group-->
                  <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >Score</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                      <input
                        type="text"
                        name="score"
                        class="form-control form-control-lg form-control-solid"
                        placeholder="Your earned gpa score"
                        v-model="genie_education.score"
                      />
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Input group-->

                  <!--begin::Input group-->
                  <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >Start date</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                      <input
                        type="date"
                        name="start_date"
                        class="form-control form-control-lg form-control-solid"
                        v-model="genie_education.start_date"
                      />

                     
                    </div>
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div v-if="!genie_education.end_date_accept" class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >End date</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                      <input
                        placeholder="Pick date rage"
                        type="date"
                        name="end_date"
                        class="form-control form-control-lg form-control-solid"
                        v-model="genie_education.end_date"
                      />
                       <!--begin::Option-->
                      <label
                        class="form-check form-check-inline form-check-solid"
                      >
                        <input
                          class="form-check-input"
                          name="communication[]"
                          type="checkbox"
                          v-model="genie_education.end_date_accept"
                        />
                        <span class="fw-bold ps-2 fs-6"
                          >I currently study here</span
                        >
                      </label>
                      <!--end::Option-->  
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Input group-->

                  <!-- begin::Input group-->
                  <!-- <div class="row mb-6">
                  
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >Summary</label
                    >
                   
                    <div class="col-lg-8 fv-row">
                      <textarea
                        class="form-control form-control-solid"
                        rows="3"
                        name="summary"
                        placeholder="Summary"
                        v-model="genie_education.summary"
                      ></textarea>
                    </div>
                   
                  </div> -->
                  <!--end::Input group -->
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                  <button
                    type="reset"
                    class="btn btn-light btn-active-light-primary me-2"
                  >
                    Discard
                  </button>
                  <button
                  v-if="add_new_education"
                    type="submit"
                    class="btn bg-rg-yellow"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    Save
                  </button>
                   <button
                  v-if="!add_new_education"
                    type="submit"
                    class="btn btn-primary"
                    id="kt_account_profile_details_submit"
                    @click.prevent="updateButton"
                  >
                    Update Changes
                  </button>
                </div>
                <!--end::Actions-->
                <input type="hidden" />
                <div></div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Content-->
          </div>
          <!--end::Basic info-->
           <nav class="d-flex justify-content-between align-items-center push">
                <a class="btn btn-light-danger" @click.prevent="$router.push('genie-interest')">
                  <i class="fa fa-arrow-left opacity-50 me-1"></i>
                  <span>Prev</span>
                </a>
                <a class="btn btn-light-success" @click.prevent="$router.push('genie-volunteer')">
                  <span>Next</span>
                  <i class="fa fa-arrow-right opacity-50 ms-1"></i>
                </a>
              </nav>
        </div>
        <!--end::Container-->
      </div>
    </template>
  </DashboardLayout>
</template>

<script>
const API = require("../../services/api");
import DashboardLayout from "./layout/DashboardLayout.vue";

const axios = require("axios").default;
import { GetAllEducation } from '../../services/api';

export default {
  components: {
    DashboardLayout,
  },
  data() {
        return {
            add_new_education:true,
            // showNewOrgLoading: false,
            // users: null,
            // urlInputs: null,
            // domainInputs: null,
			 all_education: [],

            genie_education: {
                update_edu_id: "",
                institution: "",
				// studyType: "",
                area: "",
                score: "",
                summary: "",
				start_date: "",
				end_date_accept: "",
				end_date: ""

            },
            errors: [],
        };
    },
    methods: {

  async edit_education(edu_id)
      {
        
       
        this.add_new_education = false;
        this.genie_education = this.all_education[edu_id-1];
        this.genie_education.update_edu_id = edu_id;

        
      },
       async toogle_education(edu_id)
      {
        
        
        
        
        const work_exp = {toogle_edu_id:edu_id}
          await API.ToggleGenieEducation(work_exp).then((result) => {
            
               
              // this.genie_education = this.all_education[edu_id-1];
              //this.all_education[edu_id-1].status = status;
              this.$toast.info("Deleted", "Genie Education deleted!");
               this.all_education = result.data.education;

               
            })	

        
      },

       async submitButton() {

                 if(this.genie_education.institution == "")
                {
                      this.$toast.error("Error", "Institution is a required feild");
                    return "Error";
                }
                if (this.genie_education.area == "") {
                    this.$toast.error("Error", "Area is a required feild");
                    return "Error";
                }
                 if (this.genie_education.score == "") {
                    this.$toast.error("Error", "Score is a required feild");
                    return "Error";
                }
                 if (this.genie_education.start_date == "") {
                    this.$toast.error("Error", "Start date is a required feild");
                    return "Error";
                }
                //  if (this.genie_education.current_location == "") {
                //     this.$toast.error("Error", "Current Location is a required feild");
                //     return "Error";
                // }
                //  if (this.genie_education.summary == "") {
                //     this.$toast.error("Error", "About is a required feild");
                //     return "Error";
                // }


                await API.GenieEducation(this.genie_education)
                .then((res) => {
                    if (res.status == 200) {
                        this.all_education = res.data.education;
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



        },
         async updateButton() {
           
               
                 if(this.genie_education.institution == "")
                {
                      this.$toast.error("Error", "Institution is a required feild");
                    return "Error";
                }
                if (this.genie_education.area == "") {
                    this.$toast.error("Error", "Area is a required feild");
                    return "Error";
                }
                 if (this.genie_education.score == "") {
                    this.$toast.error("Error", "Score is a required feild");
                    return "Error";
                }
                 if (this.genie_education.start_date == "") {
                    this.$toast.error("Error", "Start date is a required feild");
                    return "Error";
                }

                await API.UpdateGenieEducation(this.genie_education)
                .then((res) => {
                    if (res.status == 200) {
                      this.all_education = res.data.education;
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



        },


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

        let recaptchaScript5 = document.createElement('script')
      recaptchaScript.setAttribute('src', './theme/dist/assets/js/custom/account/api-keys/api-keys.js')
      document.head.appendChild(recaptchaScript5)







    },

	async created() {
		 await API.GetAllEducation().then((result) => {


                this.all_education = result.data;



            })
	}
};
</script>
