<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
          <div v-if="all_social.length>0" class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">
									<div class="card-title m-0">
                    	<img src="https://img.icons8.com/stickers/50/000000/happy-cloud.png"/> &nbsp;
										<h3 class="fw-bolder m-0">Connected Accounts</h3>
									</div>
								</div>
								<!--end::Card header-->
								<!--begin::Content-->
								<div id="kt_account_connected_accounts" class="collapse show">
									<!--begin::Card body-->
									<div class="card-body border-top p-9">
										
										<!--begin::Items-->
										<div class="py-2">
											
											<!--begin::Item-->
											<div v-for="social in all_social" :key="social.id" class="d-flex flex-stack">
												
                        <div class="d-flex">
                                                <img v-if="social.network_id == 1" src="https://img.icons8.com/color/48/000000/github--v1.png" class="me-6" />
														<img v-if="social.network_id == 5" src="https://img.icons8.com/color/48/000000/slack.png" class="me-6"/>
                          <!-- <img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt=""> -->
															<img v-if="social.network_id == 2" src="https://img.icons8.com/color/48/000000/facebook-new.png" class="me-6"/>
                         	<img  v-if="social.network_id == 4" src="https://img.icons8.com/color/48/000000/linkedin.png" class="me-6"/>
                          	<img v-if="social.network_id == 6"  src="https://img.icons8.com/fluency/48/000000/dribbble.png" class="me-6"/>
                          	<img v-if="social.network_id == 7" src="https://img.icons8.com/color/48/000000/behance.png" class="me-6"/>
                          	<img v-if="social.network_id == 3" src="https://img.icons8.com/color/48/000000/twitter.png" class="me-6"/>
                          <div class="d-flex flex-column">
														<a v-if="social.network_id == 1" href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Github</a>
                            <a v-if="social.network_id == 2" href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Facebook</a>
                            <a v-if="social.network_id == 3" href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Twitter</a>
                            <a v-if="social.network_id == 4" href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Linkedin</a>
                            <a v-if="social.network_id == 5" href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Slack</a>
                            <a v-if="social.network_id == 6" href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Dribble</a>
                            <a v-if="social.network_id == 7" href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Behance</a>
														<div class="fs-6 fw-bold text-gray-400">{{social.user_name}} @ {{social.url}}</div>
                            
													</div>
                          
												</div>
                        
												<div class="d-flex justify-content-end">
												  <div v-if="social.status != 2" >
                        
                      
                        <button
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="delete_social(social.id,'2')"
                        >
                          <i class="fas fa-trash"></i>
                        </button>
                        <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_social(social.id)"
                        >
                          <i class="far fa-edit"></i>
                        </button>
                        </div>
												</div>
                        
											</div>
                      <div class="separator separator-dashed my-5"></div>
											<!--end::Item-->
											
										
										
											
											<!--begin::Item-->
										
								
										
										</div>
										<!--end::Items-->
									</div>
									<!--end::Card body-->
								
								</div>
								<!--end::Content-->
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
                
                <h3 class="fw-bolder m-0">Social Details</h3>
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
                      >Network</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                      <!--begin::Row-->
                      <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                      <select v-model="genie_social.network_id" class="form-select"  placeholder="A social media or other profile that you would like to include (e.g. LinkedIn, Twitter)" id="kt_docs_select2_users">
                       
    <option  v-for="connect in genie_connect"  :key="connect.id" :value="connect.id"  :data-kt-select2-user="connect.image" >{{connect.name}}</option>
    
   
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
                      >Username</label
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
                            name="user_name"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Your username on this network"
                            v-model="genie_social.user_name"
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
                            name="website"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="A URL to your user profile page"
                            v-model="genie_social.url"
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
                  v-if="add_new_social"
                    type="submit"
                    class="btn bg-rg-yellow"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    Save
                  </button>
                   <button
                  v-if="!add_new_social"
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
            add_new_social: true,
            // users: null,
            // urlInputs: null,
            // domainInputs: null,
			 all_social: [],
       genie_connect:[],
      
          
            genie_social: {
              update_social_id: "",
               network_id: "",
                user_name: "",
                url:"",
               
                
				

            },
            errors: [],
        };
    },
    methods: {
        
        async delete_social(social_id,status)
      {




        
        const social = {toogle_social_id:social_id , status:status}
          await API.ToggleGenieSocial(social).then((res) => {

       
               this.genie_social = this.all_social[social_id-1];
              this.all_social[social_id-1].status = status;
              this.all_social = res.data.social;

            })


      },


       async submitButton() {
		  
                 if(this.genie_social.network_id == "")
                {
                      this.$toast.error("Error", "Network is a required feild");
                    return "Error";
                }
                if(this.genie_social.user_name == "")
                {
                      this.$toast.error("Error", "Username is a required feild");
                    return "Error";
                }
                 if(this.genie_social.url == "")
                {
                      this.$toast.error("Error", "URL is a required feild");
                    return "Error";
                }
               
               
               

                await API.GenieSocial(this.genie_social)
                .then((res) => {
                    if (res.status == 200) {
                      this.all_social = res.data.network;
                        this.$toast.success("Success", "Genie Social created succesfully");

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
           
               
               
               if(this.genie_social.network_id == "")
                {
                      this.$toast.error("Error", "Network is a required feild");
                    return "Error";
                }
                if(this.genie_social.user_name == "")
                {
                      this.$toast.error("Error", "Username is a required feild");
                    return "Error";
                }
                 if(this.genie_social.url == "")
                {
                      this.$toast.error("Error", "URL is a required feild");
                    return "Error";
                }

                await API.UpdateGenieSocial(this.genie_social)
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
            async edit_social(social_id)
      {
        
       
        // this.add_new_social = false;
        // this.genie_social = this.genie_exist_contact;
        //  this.genie_award.update_social_id = social_id;
          this.add_new_social = false;
          this.genie_social = this.all_social[social_id-1];
          this.genie_social.update_social_id = social_id;


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

    // Format options
const format = (item) => {
    if (!item.id) {
        return item.text;
    }

    var url = './theme/dist/assets/media/svg' + item.element.getAttribute('data-kt-select2-user');
    var img = $("<img>", {
        class: "rounded-circle me-2",
        width: 26,
        src: url
    });
    var span = $("<span>", {
        text: " " + item.text
    });
    span.prepend(img);
    return span;
}

// Init Select2 --- more info: https://select2.org/
// $('#kt_docs_select2_users').select2({
//     templateResult: function (item) {
//         return format(item);
      
//     }
// });
$("#kt_docs_select2_users")
    .select2({templateResult: function (item) {
         return format(item);
      
     }})
    
    .on("select2:select", e => {
      const event = new Event("change", { bubbles: true, cancelable: true });
      e.params.data.element.parentElement.dispatchEvent(event);
    })
    
    .on("select2:unselect", e => {
      const event = new Event("change", { bubbles: true, cancelable: true });
      e.params.data.element.parentElement.dispatchEvent(event);
    })
    .templateResult(item)
    {
      return format(item);
    }
    ;
	



    },

	async created() {
		 await API.GetGenieConnect().then((result) => {
                
      
                this.genie_connect = result.data;
               
               
               
            })
            await API.GetAllSocial().then((result) => {
                
      
                this.all_social = result.data;
               
               
               
            })
	}
};
</script>
