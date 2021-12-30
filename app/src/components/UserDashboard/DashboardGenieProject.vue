<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
			  <div v-if="all_project.length > 0" class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header card-header-stretch pb-0">
									<!--begin::Title-->
									<div class="card-title">
										<h3 class="m-0">My Projects</h3>
									</div>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar m-0">
										<!--begin::Tab nav-->
										<ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
											<!--begin::Tab item-->
											<!-- <li class="nav-item" role="presentation">
												<a id="kt_billing_creditcard_tab" class="nav-link fs-5 fw-bolder me-5 active" data-bs-toggle="tab" role="tab" href="#kt_billing_creditcard">Credit / Debit Card</a>
											</li> -->
											<!--end::Tab item-->
											<!--begin::Tab item-->
											<!-- <li class="nav-item" role="presentation">
												<a id="kt_billing_paypal_tab" class="nav-link fs-5 fw-bolder" data-bs-toggle="tab" role="tab" href="#kt_billing_paypal">Paypal</a>
											</li> -->
											<!--end::Tab item-->
										</ul>
										<!--end::Tab nav-->
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Tab content-->
								<div id="kt_billing_payment_tab_content" class="card-body tab-content">
									<!--begin::Tab panel-->
									<div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel">
										<!--begin::Title-->
										
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row gx-9 gy-6">
											<!--begin::Col-->
											<div v-for="project in all_project" :key="project.id" class="col-xl-6">
												<!--begin::Card-->
												<div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
													<!--begin::Info-->
													<div class="d-flex flex-column py-2">
														<!--begin::Owner-->
														<div class="d-flex align-items-center fs-4 fw-bolder mb-5">{{ project.name  }} | {{ project.company_name  }}<br> ({{ project.url  }})
														<!-- <span class="badge badge-light-success fs-7 ms-2">{{ edu.institution  }}</span> -->
														</div>
														<!--end::Owner-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center">
															<!--begin::Icon-->
															<img src="assets/media/svg/card-logos/visa.svg" alt="" class="me-4">
															<!--end::Icon-->
															<!--begin::Details-->
															<div>
																
																<div class="badge badge-light-success fs-4 fw-bolder">{{ project.startDate}} - {{project.endDate}}</div>
																<div class="fs-6 fw-bold text-gray-400">{{ project.summary  }}</div><br>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Info-->
													<!--begin::Actions-->
													<div class="d-flex align-items-center py-2">
														<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-3">Delete</button>
														<button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Edit</button>
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Card-->
											</div>
											<div class="col-6">
											<div class="card card-stretch">
												<a href="#add_new_work_exp" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
													<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
													<span class="svg-icon svg-icon-3x mb-5">
														<img src="https://img.icons8.com/doodle/100/000000/plus--v1.png" style="margin-left: 40px;"/>
													</span>
													<!--end::Svg Icon-->
													<span class="fs-4 fw-bolder">Add new project</span>
												</a>
											</div>
										</div>
											<!--end::Col-->
											
										</div>
										<!--end::Row-->
									</div>
									<!--end::Tab panel-->
									<!--begin::Tab panel-->
									<div id="kt_billing_paypal" class="tab-pane fade" role="tabpanel" aria-labelledby="kt_billing_paypal_tab">
										<!--begin::Title-->
										<h3 class="mb-5">My Paypal</h3>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-gray-600 fs-6 fw-bold mb-5">To use PayPal as your payment method, you will need to make pre-payments each month before your bill is due.</div>
										<!--end::Description-->
										<!--begin::Form-->
										<form class="form">
											<!--begin::Input group-->
											<div class="mb-7 mw-350px">
												<select name="timezone" data-control="select2" data-placeholder="Select an option" data-hide-search="true" class="form-select form-select-solid form-select-lg fw-bold fs-6 text-gray-700 select2-hidden-accessible" data-select2-id="select2-data-7-3rey" tabindex="-1" aria-hidden="true">
													<option data-select2-id="select2-data-9-imk7">Select an option</option>
													<option value="25">US $25.00</option>
													<option value="50">US $50.00</option>
													<option value="100">US $100.00</option>
													<option value="125">US $125.00</option>
													<option value="150">US $150.00</option>
												</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-fxli" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-lg fw-bold fs-6 text-gray-700" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-timezone-xp-container" aria-controls="select2-timezone-xp-container"><span class="select2-selection__rendered" id="select2-timezone-xp-container" role="textbox" aria-readonly="true" title="Select an option">Select an option</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
											</div>
											<!--end::Input group-->
											<button type="submit" class="btn btn-primary">Pay with Paypal</button>
										</form>
										<!--end::Form-->
									</div>
									<!--end::Tab panel-->
								</div>
								<!--end::Tab content-->
				</div>

                
          <!--begin::Basic info-->
          <div class="card mb-5 mb-xl-10" >
            <!--begin::Card header-->
            <div id="add_new_work_exp"	
              class="card-header border-0 cursor-pointer"
              role="button"
              data-bs-toggle="collapse"
              data-bs-target="#kt_account_profile_details"
              aria-expanded="true"
              aria-controls="kt_account_profile_details"
            >
              <!--begin::Card title-->
              <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Project Details</h3>
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
                      >Project Name</label
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
                            name="project_name"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Project Name"
                            v-model="genie_project.project_name"
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
                      >Company</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                      <input
                        type="text"
                        name="company_name"
                        class="form-control form-control-lg form-control-solid"
                        placeholder="Company"
                        v-model="genie_project.company_name"
                      />
                      <div
                        class="fv-plugins-message-container invalid-feedback"
                      ></div>
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Input group-->

				   <!--begin::Input group-->
                  <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >URL</label
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
                            name="url"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="url"
                            v-model="genie_project.url"
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
                      >Start Date</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                      <input
                        placeholder="Pick date rage"
                        id="rg_datepicker_project_start"
                        name="start_date"
                        class="form-control form-control-lg form-control-solid"
                        v-model="genie_project.start_date"
                      /><br />

                      <!--begin::Option-->
                      <label
                        class="form-check form-check-inline form-check-solid"
                      >
                        <input
                          class="form-check-input"
                          name="communication[]"
                          type="checkbox"
						  v-model="genie_project.end_date_accept"
                          
                        />
                        <span class="fw-bold ps-2 fs-6"
                          >I currently work here</span
                        >
                      </label>
                      <!--end::Option-->
                    </div>
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div v-if ="!genie_project.end_date_accept" class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >End Date</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                      <input 
                        placeholder="Pick date rage"
                        id="rg_datepicker_project_end"
                        name="end_date"
                        class="form-control form-control-lg form-control-solid"
                        v-model="genie_project.end_date"
                      />
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Input group-->

                 
                

                  <!--begin::Input group-->
                  <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >Summary</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                      <textarea
                        class="form-control form-control-solid"
                        rows="3"
                        name="summary"
                        placeholder="Summary"
                        v-model="genie_project.summary"
                      ></textarea>
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Input group-->
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
                    type="submit"
                    class="btn btn-primary"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    Save Changes
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
            // showNewOrgLoading: false,
            // users: null,
            // urlInputs: null,
            // domainInputs: null,
			 all_project: [],
          
            genie_project: {
                project_name: "",
                company_name:"",
				url: "",
                awarder: "",
                summary: "",
				start_date:"",
                end_date:"",
                end_date_accept: ""
				

            },
            errors: [],
        };
    },
    methods: {
        


       async submitButton() {
		  
                 if(this.genie_project.project_name == "")
                {
                      this.$toast.error("Error", "Project Name is a required feild");
                    return "Error";
                }
                if (this.genie_project.company == "") {
                    this.$toast.error("Error", "awarder is a required feild");
                    return "Error";
                }
                 if (this.genie_project.url == "") {
                    this.$toast.error("Error", "Url is a required feild");
                    return "Error";
                }
                //  if (this.genie_education.start_date == "") {
                //     this.$toast.error("Error", "Start date is a required feild");
                //     return "Error";
                // }
                //  if (this.genie_education.current_location == "") {
                //     this.$toast.error("Error", "Current Location is a required feild");
                //     return "Error";
                // }
                //  if (this.genie_education.summary == "") {
                //     this.$toast.error("Error", "About is a required feild");
                //     return "Error";
                // }
               

                await API.GenieProject(this.genie_project)
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


	$("#rg_datepicker_project_start").daterangepicker({
	autoUpdateInput: true,
      locale: {
          cancelLabel: 'Clear'
      },
        singleDatePicker: true,

        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format("YYYY"),10)
    }, function(start, end, label) {

    }

);
$("#rg_datepicker_project_end").daterangepicker({
	autoUpdateInput: true,
      locale: {
          cancelLabel: 'Clear'
      },
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format("YYYY"),10)
    }, function(start, end, label) {

    }

);




    },

	async created() {
		 await API.GetAllProject().then((result) => {
                
      
                this.all_project = result.data;
               
               
               
            })
	}
};
</script>
