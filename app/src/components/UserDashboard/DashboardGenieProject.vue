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
                <h3 class="m-0">Project(s)</h3>
              </div>
              <!--end::Title-->
              <!--begin::Toolbar-->
              <div class="card-toolbar m-0">
                <!--begin::Tab nav-->
                <ul
                  class="nav nav-stretch nav-line-tabs border-transparent"
                  role="tablist"
                >
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
            <div
              id="kt_billing_payment_tab_content"
              class="card-body tab-content"
            >
              <!--begin::Tab panel-->
              <div
                id="kt_billing_creditcard"
                class="tab-pane fade show active"
                role="tabpanel"
              >
                <!--begin::Title-->

                <!--end::Title-->
                <!--begin::Row-->
                <div class="row gx-9 gy-6">
                     <div class="col-6">
                    <div class="card card-stretch">
                      <a
                        href="#add_new_work_project"
                        class="
                          btn
                          btn-flex
                          btn-text-gray-800
                          btn-icon-gray-400
                          btn-active-color-primary
                          bg-body
                          flex-column
                          justfiy-content-start
                          align-items-start
                          text-start
                          w-100
                          p-10
                        "
                      >
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                        <span class="svg-icon svg-icon-3x mb-5" style="margin-left:auto; margin-right:auto;">
                        <img src="https://img.icons8.com/dusk/80/000000/add--v1.png"  />
                       
                        </span>
                        <!--end::Svg Icon-->
                          <span class="fs-4 fw-bolder" style="margin-left:auto; margin-right:auto;">Add a project</span>
                      </a>
                    </div>
                  </div>
                  <!--begin::Col-->
                  <div
                    v-for="project in all_project"
                    :key="project.id"
                    class="col-xl-6"
                  >
                    <!--begin::Card-->
                    <div class="card card-flush shadow-sm">
                      <div class="card-header ribbon ribbon-end ribbon-clip">
                        <div v-if="project.status == 0" class="ribbon-label">
                          <i class="far fa-eye text-white"></i>
                          <span class="ribbon-inner bg-success"></span>
                        </div>
                        <div v-if="project.status == 1" class="ribbon-label">
                          <i class="fas fa-eye-slash text-white"></i>
                          <span class="ribbon-inner bg-info"></span>
                        </div>
                        <div v-if="project.status == 2" class="ribbon-label">
                          <i class="fas fa-trash text-white"></i>
                          <span class="ribbon-inner bg-danger"></span>
                        </div>
                        <div class="card-title fw-bolder mb-5">
                          {{ project.name  }} | {{ project.company_name}}
                        </div>

                        <span class="fs-7"
                          >{{project.url}}
                          <div class="badge badge-light-success fs-7 fw-bolder">
                            {{ project.start_date}} -
                            <span v-if="project.end_date">{{project.end_date}}</span>
                            <span v-if="!project.end_date">Current</span> 
                           
                          </div>
                        </span>
                      </div>
                      <div class="card-body">
                        
                        {{ project.summary  }}
                      </div>

                      <div v-if="project.status != 2" class="card-footer">
                        <button
                          v-if="project.status==1"
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_project(project.id,'0')"
                        >
                          <i class="far fa-eye"></i>
                        </button>
                        <button
                          v-if="project.status==0"
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_project(project.id,'1')"
                        >
                          <i class="fas fa-eye-slash"></i>
                        </button>
                        <button
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_project(project.id,'2')"
                        >
                          <i class="fas fa-trash"></i>
                        </button>
                        <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_project(project.id)"
                        >
                          <i class="far fa-edit"></i>
                        </button>
                      </div>
                    </div>

                    <!--end::Card-->
                  </div>
               
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Tab panel-->
              <!--begin::Tab panel-->
              <div
                id="kt_billing_paypal"
                class="tab-pane fade"
                role="tabpanel"
                aria-labelledby="kt_billing_paypal_tab"
              >
                <!--begin::Title-->
                <h3 class="mb-5">My Paypal</h3>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="text-gray-600 fs-6 fw-bold mb-5">
                  To use PayPal as your payment method, you will need to make
                  pre-payments each month before your bill is due.
                </div>
                <!--end::Description-->
                <!--begin::Form-->
                <form class="form">
                  <!--begin::Input group-->
                  <div class="mb-7 mw-350px">
                    <select
                      name="timezone"
                      data-control="select2"
                      data-placeholder="Select an option"
                      data-hide-search="true"
                      class="
                        form-select form-select-solid form-select-lg
                        fw-bold
                        fs-6
                        text-gray-700
                        select2-hidden-accessible
                      "
                      data-select2-id="select2-data-7-3rey"
                      tabindex="-1"
                      aria-hidden="true"
                    >
                      <option data-select2-id="select2-data-9-imk7">
                        Select an option
                      </option>
                      <option value="25">US $25.00</option>
                      <option value="50">US $50.00</option>
                      <option value="100">US $100.00</option>
                      <option value="125">US $125.00</option>
                      <option value="150">US $150.00</option></select
                    ><span
                      class="
                        select2 select2-container select2-container--bootstrap5
                      "
                      dir="ltr"
                      data-select2-id="select2-data-8-fxli"
                      style="width: 100%"
                      ><span class="selection"
                        ><span
                          class="
                            select2-selection select2-selection--single
                            form-select form-select-solid form-select-lg
                            fw-bold
                            fs-6
                            text-gray-700
                          "
                          role="combobox"
                          aria-haspopup="true"
                          aria-expanded="false"
                          tabindex="0"
                          aria-disabled="false"
                          aria-labelledby="select2-timezone-xp-container"
                          aria-controls="select2-timezone-xp-container"
                          ><span
                            class="select2-selection__rendered"
                            id="select2-timezone-xp-container"
                            role="textbox"
                            aria-readonly="true"
                            title="Select an option"
                            >Select an option</span
                          ><span
                            class="select2-selection__arrow"
                            role="presentation"
                            ><b role="presentation"></b></span></span></span
                      ><span class="dropdown-wrapper" aria-hidden="true"></span
                    ></span>
                  </div>
                  <!--end::Input group-->
                  <button type="submit" class="btn btn-primary">
                    Pay with Paypal
                  </button>
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
            <div id="add_new_work_project"	
              class="card-header border-0 cursor-pointer"
              role="button"
              data-bs-toggle="collapse"
              data-bs-target="#kt_account_profile_details"
              aria-expanded="true"
              aria-controls="kt_account_profile_details"
            >
              <!--begin::Card title-->
              <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Addding a Project details</h3>
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
                      >Project name</label
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
                            name="name"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Your project name"
                            v-model="genie_project.name"
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
                        placeholder="Company under which the project is practised"
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
                            placeholder="https://site.url/"
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
                      >Start date</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                      <input
                        placeholder="Pick date rage"
                       type="date"
                        name="start_date"
                        class="form-control form-control-lg form-control-solid"
                        v-model="genie_project.start_date"
                      />

                     
                    </div>
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div v-if ="!genie_project.end_date_accept" class="row mb-6">
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
                        v-model="genie_project.end_date"
                      />
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
                        placeholder="A one-sentence to one-paragraph summary of this project or technology used"
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
                    v-if="add_new_project"
                    type="submit"
                    class="btn bg-rg-yellow"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    Save
                  </button>
                  <button
                    v-if="!add_new_project"
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
           add_new_project:true,
			 all_project: [],
          
            genie_project: {
               update_project_id: "",
                name: "",
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
        async edit_project(project_id)
      {


        this.add_new_project = false;
        this.genie_project = this.all_project[project_id-1];
        this.genie_project.update_project_id = project_id;


      },
       async toogle_project(project_id,status)
      {




        const project = {toogle_project_id:project_id , status:status}
          await API.ToggleGenieProject(project).then((result) => {


              // this.genie_project = this.all_project[project_id-1];
              this.all_project[project_id-1].status = status;
                this.all_project= res.data.project;

            })


      },
        


       async submitButton() {
		  
                 if(this.genie_project.name == "")
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
                       this.all_project= res.data.project;
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

                 if(this.genie_project.name == "")
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


                await API.UpdateGenieProject(this.genie_project)
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








    },

	async created() {
		 await API.GetAllProject().then((result) => {
                
      
                this.all_project = result.data;
               
               
               
            })
	}
};
</script>
