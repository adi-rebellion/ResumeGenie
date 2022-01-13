<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
          <div v-if="genie_exist_contact" class="card mb-5 mb-xl-10" id="kt_profile_details_view">
								<!--begin::Card header-->
								<div class="card-header cursor-pointer">
									<!--begin::Card title-->
									<div class="card-title m-0">
                  	<img src="https://img.icons8.com/stickers/50/000000/email.png"/>&nbsp;
										<h3 class="fw-bolder m-0">Primary Contact Details</h3>
									</div>
									<!--end::Card title-->
									<!--begin::Action-->
									<button @click.prevent="edit_contact()" class="btn btn-secondary btn-sm align-self-center">
                    <i class="fa fa-edit"></i>
                  </button>
									<!--end::Action-->
								</div>
								<!--begin::Card header-->
								<!--begin::Card body-->
								<div class="card-body p-9">
									<!--begin::Row-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Email</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-gray-800"> {{ genie_exist_contact.email }}</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Contact Phone
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 d-flex align-items-center">
											<span class="fw-bolder fs-6 text-gray-800 me-2">{{ genie_exist_contact.phone }}</span>
								
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Website</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ genie_exist_contact.website }}</a>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Address
									</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-gray-800">{{ genie_exist_contact.address }}<br>{{ genie_exist_contact.city }} {{ genie_exist_contact.areacode }}<br> {{ genie_exist_contact.country }}</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									
								
								</div>
								<!--end::Card body-->
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
                <h3 class="fw-bolder m-0">Contact Details</h3>
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
                      >Email</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                      <!--begin::Row-->
                      <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                          <input
                            type="email"
                            name="email"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Your email address"
                            v-model="genie_contact.email"
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
                      >Phone</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                      <!--begin::Row-->
                      <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                          <input
                            type="tel"
                            name="phone"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="A phone number, with any formatting you like. E.g. (555) 555-5555."
                            v-model="genie_contact.phone"
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
                      >Website</label
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
                            placeholder="Your website URL"
                            v-model="genie_contact.website"
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
                      >Address</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                      <!--begin::Row-->
                      <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                          <textarea
                        class="form-control form-control-solid"
                        rows="3"
                        name="address"
                        placeholder="Your street address or mailing address"
                        v-model="genie_contact.address"
                      ></textarea>
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
                       <!--begin::Row-->
                      <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                        <input
                            type="text"
                            name="areacode"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Your postal code (ZIP in the U.S.)"
                            v-model="genie_contact.areacode"
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
                         <!--begin::Row-->
                      <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                        <input
                            type="text"
                            name="city"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Your city"
                            v-model="genie_contact.city"
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
                         <!--begin::Row-->
                      <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                        <input
                            type="text"
                            name="country"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Your country (e.g. USA)"
                            v-model="genie_contact.country"
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
                  v-if="add_new_contact"
                    type="submit"
                    class="btn bg-rg-yellow"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    Save
                  </button>
                   <button
                  v-if="!add_new_contact"
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
            add_new_contact: true,
            // users: null,
            // urlInputs: null,
            // domainInputs: null,
			 genie_exist_contact: [],
          
            genie_contact: {
                email: "",
                phone:"",
                address:"",
                areacode:"",
                city:"",
                country:"",
                website:""
                
				

            },
            errors: [],
        };
    },
    methods: {
        


       async submitButton() {
		  
                 if(this.genie_contact.email == "")
                {
                      this.$toast.error("Error", "Email is a required feild");
                    return "Error";
                }
                if(this.genie_contact.phone == "")
                {
                      this.$toast.error("Error", "Phone is a required feild");
                    return "Error";
                }
                 if(this.genie_contact.address == "")
                {
                      this.$toast.error("Error", "Address is a required feild");
                    return "Error";
                }
               
               
               

                await API.GenieContact(this.genie_contact)
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
             async updateButton() {
           
               
                if(this.genie_contact.email == "")
                {
                      this.$toast.error("Error", "Email is a required feild");
                    return "Error";
                }
                if(this.genie_contact.phone == "")
                {
                      this.$toast.error("Error", "Phone is a required feild");
                    return "Error";
                }
                 if(this.genie_contact.address == "")
                {
                      this.$toast.error("Error", "Address is a required feild");
                    return "Error";
                }

                await API.GenieContact(this.genie_contact)
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
            async edit_contact()
      {
        
       
        this.add_new_contact = false;
        this.genie_contact = this.genie_exist_contact;
        // this.genie_award.update_award_id = award_id;


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
		 await API.GetAllContact().then((result) => {
                
      
                this.genie_exist_contact = result.data;
               
               
               
            })
	}
};
</script>
