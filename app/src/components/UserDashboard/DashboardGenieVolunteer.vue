<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
			    <div v-if="all_volunteer.length > 0" class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header card-header-stretch pb-0">
              <!--begin::Title-->
              <div class="card-title">
                <img src="https://img.icons8.com/stickers/50/000000/trust.png"/>&nbsp;
                <h3 class="m-0">Volunteer(s)</h3>
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
                        href="#add_new_work_volunteer"
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
                        <img src="https://img.icons8.com/stickers/100/000000/add.png"  />
                       
                        </span>
                        <!--end::Svg Icon-->
                          <span class="fs-4 fw-bolder" style="margin-left:auto; margin-right:auto;">Add a volunteer</span>
                      </a>
                    </div>
                  </div>
                  <!--begin::Col-->
                  <div
                    v-for="volunteer in all_volunteer"
                    :key="volunteer.id"
                    class="col-xl-6"
                  >
                    <!--begin::Card-->
                    <div class="card card-flush shadow-lg">
                      <div class="card-header">
                       
                        <div class="card-title fw-bolder mb-1">
                          {{ volunteer.position  }} | {{ volunteer.organization}}
                        </div>

                        <span class="fs-7"
                          >{{volunteer.url}}
                          <div class="badge badge-light-success fs-7 fw-bolder">
                            {{ volunteer.start_date}} -
                            <span v-if="volunteer.end_date">{{volunteer.end_date}}</span>
                            <span v-if="!volunteer.end_date">now</span> 
                           
                          </div>
                        </span>
                      </div>
                      <div class="card-body">
                        
                        {{ volunteer.summary  }}
                      </div>

                      <div class="card-footer">
                     
                        <button
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_volunteer(volunteer.id)"
                        >
                          <i class="fas fa-trash"></i>
                        </button>
                        <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_volunteer(volunteer.id)"
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
            
            </div>
            <!--end::Tab content-->
          </div>
                
          <!--begin::Basic info-->
          <div class="card mb-5 mb-xl-10" >
            <!--begin::Card header-->
            <div id="add_new_work_volunteer"	
              class="card-header border-0 cursor-pointer"
              role="button"
              data-bs-toggle="collapse"
              data-bs-target="#kt_account_profile_details"
              aria-expanded="true"
              aria-controls="kt_account_profile_details"
            >
              <!--begin::Card title-->
              <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Addding a volunteer details</h3>
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
                      >Organization</label
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
                            name="organization"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Your volunteer organization name"
                            v-model="genie_volunteer.organization"
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
                      >Position</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                      <input
                        type="text"
                        name="position"
                        class="form-control form-control-lg form-control-solid"
                        placeholder="Your job title"
                        v-model="genie_volunteer.position"
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
                            v-model="genie_volunteer.url"
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
                        v-model="genie_volunteer.start_date"
                      />

                     
                    </div>
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div v-if ="!genie_volunteer.end_date_accept" class="row mb-6">
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
                        v-model="genie_volunteer.end_date"
                      />
                       <!--begin::Option-->
                      <label
                        class="form-check form-check-inline form-check-solid"
                      >
                        <input
                          class="form-check-input"
                          name="communication[]"
                          type="checkbox"
						  v-model="genie_volunteer.end_date_accept"
                          
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
                        placeholder="A one-sentence to one-paragraph summary of this volunteer or technology used"
                        v-model="genie_volunteer.summary"
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
                    v-if="add_new_volunteer"
                    type="submit"
                    class="btn bg-rg-yellow"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    Save
                  </button>
                  <button
                    v-if="!add_new_volunteer"
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
           add_new_volunteer:true,
			 all_volunteer: [],
          
            genie_volunteer: {
               update_volunteer_id: "",
                organization: "",
                position:"",
			        	url: "",
                summary: "",
				        start_date:"",
                end_date:"",
                end_date_accept: ""
				

            },
            errors: [],
        };
    },
    methods: {
        async edit_volunteer(volunteer_id)
      {


        this.add_new_volunteer = false;
        this.genie_volunteer = this.all_volunteer[volunteer_id-1];
        this.genie_volunteer.update_volunteer_id = volunteer_id;


      },
       async toogle_volunteer(volunteer_id)
      {




        const volunteer = {toogle_volunteer_id:volunteer_id}
          await API.ToggleGenieVolunteer(volunteer).then((result) => {


              // this.genie_volunteer = this.all_volunteer[volunteer_id-1];
             // this.all_volunteer[volunteer_id-1].status = status;
              this.$toast.info("Deleted", "Genie volunteer deleted!");
                this.all_volunteer= result.data.volunteer;

            })


      },
        


       async submitButton() {
		  
                 if(this.genie_volunteer.organization == "")
                {
                      this.$toast.error("Error", "volunteer Name is a required feild");
                    return "Error";
                }
                if (this.genie_volunteer.company == "") {
                    this.$toast.error("Error", "Awarder is a required feild");
                    return "Error";
                }
                 if (this.genie_volunteer.url == "") {
                    this.$toast.error("Error", "Url is a required feild");
                    return "Error";
                }
                 if (this.genie_volunteer.start_date == "") {
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
               

                await API.GenieVolunteer(this.genie_volunteer)
                .then((res) => {
                    if (res.status == 200) {
                       this.all_volunteer= res.data.volunteer;
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

                 if(this.genie_volunteer.organization == "")
                {
                      this.$toast.error("Error", "volunteer Name is a required feild");
                    return "Error";
                }
                if (this.genie_volunteer.company == "") {
                    this.$toast.error("Error", "awarder is a required feild");
                    return "Error";
                }
                 if (this.genie_volunteer.url == "") {
                    this.$toast.error("Error", "Url is a required feild");
                    return "Error";
                }


                await API.UpdateGenieVolunteer(this.genie_volunteer)
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
		 await API.GetAllVolunteer().then((result) => {
                
      
                this.all_volunteer = result.data;
               
               
               
            })
	}
};
</script>
