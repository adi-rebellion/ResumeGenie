<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
			<div class="col-xl-6" style="margin-left:auto;margin-right:auto;">
											<!--begin::List Widget 3-->
											<div class="card card-xl-stretch mb-xl-8">
												<!--begin::Header-->
												<div class="card-header border-0">
													<h3 class="card-title fw-bolder text-dark">Language(s)</h3>
												
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-2">
													<!--begin::Item-->
													<div  v-for="language in all_language"
                    :key="language.id" class="d-flex align-items-center mb-8">
														<!--begin::Bullet-->
														<span class="bullet bullet-vertical h-40px bg-success"></span>
														<!--end::Bullet-->
														<!--begin::Checkbox-->
														<div class="form-check form-check-custom form-check-solid mx-5">
															<!-- <input class="form-check-input" type="checkbox" value=""> -->
														</div>
														<!--end::Checkbox-->
														<!--begin::Description-->
														<div class="flex-grow-1">
															<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">{{language.language}}</a>
															<span class="text-muted fw-bold d-block">{{language.fluency}}</span>
														</div>
														<!--end::Description-->
													 <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_language(language.id)"
                        >
                          <i class="far fa-edit"></i>
                        </button>
													</div>
													<!--end:Item-->
													
													
												
												
													
												</div>
												<!--end::Body-->
											</div>
											<!--end:List Widget 3-->
										</div>

                
          <!--begin::Basic info-->
          <div class="card mb-5 mb-xl-10" >
            <!--begin::Card header-->
            <div id="add_new_language"	
              class="card-header border-0 cursor-pointer"
              role="button"
              data-bs-toggle="collapse"
              data-bs-target="#kt_account_profile_details"
              aria-expanded="true"
              aria-controls="kt_account_profile_details"
            >
              <!--begin::Card title-->
              <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Adding a language</h3>
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
                      >Language</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                      <!--begin::Row-->
                      <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                       <select v-model="genie_language.language" class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" id="kt_docs_select2_lang">
  <option  v-for="spoken in genie_spoken"  :key="spoken.Rank" :value="spoken.Language"   >{{spoken.Language}}</option>
</select>
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
                      >Fluency</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                     <select v-model="genie_language.fluency" class="form-select form-select-solid" data-control="select2" data-placeholder="Your language fluency"  id="kt_docs_select2_fluency">
    <option></option>
    <option value="Elementary Proficiency"> Elementary Proficiency</option>
    <option value="Limited Working Proficiency"> Limited Working Proficiency</option>
      <option value="Professional Working Proficiency"> Professional Working Proficiency</option>
       <option value="Full Professional Proficiency"> Full Professional Proficiency</option>
       <option value="Native / Bilingual Proficiency"> Native / Bilingual Proficiency</option>
       
</select>
                      <div
                        class="fv-plugins-message-container invalid-feedback"
                      ></div>
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
                    v-if="add_new_language"
                    type="submit"
                    class="btn bg-rg-yellow"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    Save
                  </button>
                   <button
                    v-if="!add_new_language"
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
            // showNewOrgLoading: false,
            // users: null,
            // urlInputs: null,
            // domainInputs: null,
            add_new_language:true,
			      all_language: [],
            genie_spoken: [],
          
            genie_language: {
                update_language_id: "",
                language: "",
                fluency: "",
               
				

            },
            errors: [],
        };
    },
    methods: {
         async edit_language(language_id)
      {
        
       
        this.add_new_language = false;
        this.genie_language = this.all_language[language_id-1];
        this.genie_language.update_language_id = language_id;


      },
       async toogle_language(language_id,status)
      {

          const language = {toogle_language_id:language_id , status:status}
          await API.ToggleGenieLanguage(language).then((result) => {


              // this.genie_work = this.all_work_exp[work_id-1];
              this.all_language[language_id-1].status = status;
                this.all_language= res.data.language;

            })


      },
        


       async submitButton() {
		  
                 if(this.genie_language.language == "")
                {
                      this.$toast.error("Error", "Language is a required feild");
                    return "Error";
                }
                if (this.genie_language.fluency == "") {
                    this.$toast.error("Error", "Lluency is a required feild");
                    return "Error";
                }
                
               

                await API.GenieLanguage(this.genie_language)
                .then((res) => {
                    if (res.status == 200) {
                      this.all_language= res.data.language;
                        this.$toast.success("Success", "Genie language created succesfully");

                    } else {
                        this.$toast.error("Error", "Oops error creating an language");
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
            

                 if(this.genie_language.language == "")
                {
                      this.$toast.error("Error", "language is a required feild");
                    return "Error";
                }
                if (this.genie_language.fluency == "") {
                    this.$toast.error("Error", "fluency is a required feild");
                    return "Error";
                }
                 

                await API.UpdateGenieLanguage(this.genie_language)
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

      $("#kt_docs_select2_lang")
    .select2()
    
    .on("select2:select", e => {
      const event = new Event("change", { bubbles: true, cancelable: true });
      e.params.data.element.parentElement.dispatchEvent(event);
    })
    
    .on("select2:unselect", e => {
      const event = new Event("change", { bubbles: true, cancelable: true });
      e.params.data.element.parentElement.dispatchEvent(event);
    })
   
    
       
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


       $("#kt_docs_select2_fluency")
    .select2()
    
    .on("select2:select", e => {
      const event = new Event("change", { bubbles: true, cancelable: true });
      e.params.data.element.parentElement.dispatchEvent(event);
    })
    
    .on("select2:unselect", e => {
      const event = new Event("change", { bubbles: true, cancelable: true });
      e.params.data.element.parentElement.dispatchEvent(event);
    })
    
    
    




    
	



    },

	async created() {
     await API.GetGenieSpoken().then((result) => {
                
      
                this.genie_spoken = result.data;
               
               
               
            })
		 await API.GetAllLanguage().then((result) => {
                
      
                this.all_language = result.data;
               
               
               
            })
	}
};
</script>
