<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
          <div v-if="all_work_exp.length > 0" class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header card-header-stretch pb-0">
              <!--begin::Title-->
              <div class="card-title">
                <h3 class="m-0">Work Experience(s)</h3>
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
                        href="#add_new_work_exp"
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
                          <span class="fs-4 fw-bolder" style="margin-left:auto; margin-right:auto;">Add an experience</span>
                       
                      </a>
                    </div>
                  </div>
                  <!--begin::Col-->
                  <div
                    v-for="exp in all_work_exp"
                    :key="exp.id"
                    class="col-xl-6"
                  >
                    <!--begin::Card-->
                    <div class="card card-flush shadow-sm">
                      <div class="card-header ribbon  ribbon-end ribbon-clip">
                        <div v-if="exp.status == 0" class="ribbon-label">
                          <i class="far fa-eye text-white "></i>
                          <span class="ribbon-inner  bg-success"></span>
                        </div>
                        <div v-if="exp.status == 1" class="ribbon-label">
                          <i class="fas fa-eye-slash text-white"></i>
                          <span class="ribbon-inner bg-info"></span>
                        </div>
                        <div v-if="exp.status == 2" class="ribbon-label">
                          <i class="fas fa-trash text-white"></i>
                          <span class="ribbon-inner bg-danger"></span>
                        </div>
                        <div class="card-title fw-bolder mb-5">
                          {{ exp.position  }} | {{ exp.company}}
                        </div>

                        <span class="fs-7"
                          >{{exp.website}}
                          <div class="badge badge-light-success fs-7 fw-bolder">
                            {{ exp.start_date}} -
                            <span v-if="exp.end_date">{{exp.end_date}}</span>
                            <span v-if="!exp.end_date">Current</span> @
                            {{exp.location}}
                          </div>
                        </span>
                      </div>
                      <div class="card-body">
                        {{ exp.summary  }}
                      </div>

                      <div v-if="exp.status != 2" class="card-footer">
                        <button
                          v-if="exp.status==1"
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_work_exp(exp.id,'0')"
                        >
                          <i class="far fa-eye"></i>
                        </button>
                        <button
                          v-if="exp.status==0"
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_work_exp(exp.id,'1')"
                        >
                          <i class="fas fa-eye-slash"></i>
                        </button>
                        <button
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_work_exp(exp.id,'2')"
                        >
                          <i class="fas fa-trash"></i>
                        </button>
                        <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_work_exp(exp.id)"
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
              
            </div>
            <!--end::Tab content-->
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
                <h3 class="fw-bolder m-0">Adding a work experience</h3>
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
                      >Position</label
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
                            name="Position"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Your job title"
                            v-model="genie_work.position"
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
                        name="company"
                        class="form-control form-control-lg form-control-solid"
                        placeholder="Your employer name"
                        v-model="genie_work.company"
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
                    <label class="col-lg-4 col-form-label fw-bold fs-6"
                      >Comapny website</label
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
                            name="website"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="The URL for the employer's website(e.g. https://site.url/ )"
                            v-model="genie_work.website"
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
                    <label class="col-lg-4 col-form-label fw-bold fs-6"
                      >Location</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                      <input
                        type="text"
                        name="location"
                        class="form-control form-control-lg form-control-solid"
                        placeholder="City name where you worked"
                        v-model="genie_work.location"
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
                        placeholder="Pick date rage"
                        name="start_date"
                        class="form-control form-control-lg form-control-solid"
                        v-model="genie_work.start_date"
                      />

                     
                    </div>
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div v-if="!genie_work.end_date_accept" class="row mb-6">
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
                        v-model="genie_work.end_date"
                      />
                       <!--begin::Option-->
                      <label
                        class="form-check form-check-inline form-check-solid"
                      >
                        <input
                          class="form-check-input"
                          name="communication[]"
                          type="checkbox"
                          v-model="genie_work.end_date_accept"
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
                        placeholder="A one-sentence to one-paragraph summary of this employer or position"
                        v-model="genie_work.summary"
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
                    v-if="add_new_work_exp"
                    type="submit"
                    class="btn bg-rg-yellow"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    Save
                  </button>
                  <button
                    v-if="!add_new_work_exp"
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
import { GenieBasic } from '../../services/api';

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
      add_new_work_exp:true,

			 all_work_exp: [],
           avatar: "",
            genie_work: {
                update_work_id: "",
                position: "",
				        website: "",
                company: "",
                location: "",
                summary: "",
				start_date: "",
				end_date_accept: "",
				end_date: ""

            },
            errors: [],
        };
    },
    methods: {

      async edit_work_exp(work_id)
      {


        this.add_new_work_exp = false;
        this.genie_work = this.all_work_exp[work_id-1];
        this.genie_work.update_work_id = work_id;


      },
       async toogle_work_exp(work_id,status)
      {




        const work_exp = {toogle_work_id:work_id , status:status}
          await API.ToggleGenieWork(work_exp).then((result) => {


              // this.genie_work = this.all_work_exp[work_id-1];
              this.all_work_exp[work_id-1].status = status;
              this.all_work_exp = res.data.work_experience;

            })


      },




       async submitButton() {

                 if(this.genie_work.position == "")
                {
                      this.$toast.error("Error", "Position is a required feild");
                    return "Error";
                }
                if (this.genie_work.company == "") {
                    this.$toast.error("Error", "Company is a required feild");
                    return "Error";
                }
                //  if (this.genie_work.location == "") {
                //     this.$toast.error("Error", "Location is a required feild");
                //     return "Error";
                // }
                 if (this.genie_work.start_date == "") {
                    this.$toast.error("Error", "Start date is a required feild");
                    return "Error";
                }
               
                 if (this.genie_work.summary == "") {
                    this.$toast.error("Error", "About is a required feild");
                    return "Error";
                }


                await API.GenieWork(this.genie_work)
                .then((res) => {
                    if (res.status == 200) {
                        this.all_work_exp = res.data.work_experience;
                       this.genie_work.position = '';
                       this.genie_work.website = '';
                       this.genie_work.location = '';
                        this.genie_work.company = '';
                       this.genie_work.start_date = '';
                        this.genie_work.end_date = '';
                       this.genie_work.end_date_accept = '';
                        this.genie_work.summary = '';
                      
                        this.$toast.success("Success", "Genie work experience added succesfully");

                    } else {
                        this.$toast.error("Error", "Oops error while updating genie work experience");
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

                 if(this.genie_work.position == "")
                {
                      this.$toast.error("Error", "Position is a required feild");
                    return "Error";
                }
                if (this.genie_work.company == "") {
                    this.$toast.error("Error", "Company is a required feild");
                    return "Error";
                }
                 if (this.genie_work.location == "") {
                    this.$toast.error("Error", "Location is a required feild");
                    return "Error";
                }
                 if (this.genie_work.start_date == "") {
                    this.$toast.error("Error", "Start date is a required feild");
                    return "Error";
                }

                 if (this.genie_work.summary == "") {
                    this.$toast.error("Error", "Summary is a required feild");
                    return "Error";
                }


                await API.UpdateGenieWork(this.genie_work)
                .then((res) => {
                    if (res.status == 200) {
                        this.$toast.success("Success", "Genie work experience updated succesfully");

                    } else {
                        this.$toast.error("Error", "Oops error while updating genie work experience");
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
		 await API.GetAllWorkExp().then((result) => {

              console.log('question',result.data);
                this.all_work_exp = result.data;



            })
	}
};
</script>
