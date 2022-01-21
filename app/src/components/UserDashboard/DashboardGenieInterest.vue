<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
       
					<div v-if="all_interest.length > 0" class="col-xl-6" style="margin-left:auto;margin-right:auto;">
											<!--begin::List Widget 3-->
											<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Card header-->
            <div class="card-header card-header-stretch pb-0">
              <!--begin::Title-->
              <div class="card-title">
                 <img src="https://img.icons8.com/stickers/50/000000/watering-can.png"/>&nbsp;
                <h3 class="m-0">Interest(s)</h3>
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
												<!--begin::Body-->
												<div class="card-body pt-2">
													<!--begin::Item-->
													<div v-for="interest in all_interest" :key="interest.id" class="d-flex align-items-center mb-8">
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
															<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">{{interest.name}}</a>
															<!-- <span class="text-muted fw-bold d-block">Due in 2 Days</span> -->
														</div>
														<!--end::Description-->
														 <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_interest(interest.id)"
                        >
                          <img src="https://img.icons8.com/stickers/30/000000/multi-edit.png"/>
                        </button>
                        &nbsp;
                         <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="toogle_interest(interest.id)" 
                        >
                          <img src="https://img.icons8.com/stickers/30/000000/delete-forever.png"/>
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
            <div id="add_new_interest"	
              class="card-header border-0 cursor-pointer"
              role="button"
              data-bs-toggle="collapse"
              data-bs-target="#kt_account_profile_details"
              aria-expanded="true"
              aria-controls="kt_account_profile_details"
            >
              <!--begin::Card title-->
              <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Adding a interest</h3>
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
                      >Interest Name</label
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
                            name="interest"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Your Interest"
                            v-model="genie_interest.name"
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
                  v-if="add_new_interest"
                    type="submit"
                    class="btn bg-rg-yellow"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    Save
                  </button>
                   <button
                  v-if="!add_new_interest"
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
                <a class="btn btn-light-danger" @click.prevent="$router.push('genie-language')">
                  <i class="fa fa-arrow-left opacity-50 me-1"></i>
                  <span>Prev</span>
                </a>
                <a class="btn btn-light-success" @click.prevent="$router.push('genie-education')">
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
			 add_new_interest:true,
            // showNewOrgLoading: false,
            // users: null,
            // urlInputs: null,
            // domainInputs: null,
			 all_interest: [],
			  key: {
				  value: ""
			  },
         
            genie_interest: {
				  update_interest_id: "",
					name: "",
				
					
                
				

            },
		
			
			 
            errors: [],
        };
    },
    methods: {
         async edit_interest(interest_id)
      {
        
        this.add_new_interest = false;
        this.genie_interest = this.all_interest[interest_id-1];
        this.genie_interest.update_interest_id = interest_id;

        
      },
       async toogle_interest(interest_id)
      {

        
        const interest = {toogle_interest_id:interest_id}
          await API.ToggleGenieInterest(interest).then((result) => {
            
               
              // this.genie_interest = this.all_interest[interest_id-1];
             // this.all_interest[interest_id-1].status = status;
             this.$toast.info("Deleted", "Genie interest deleted!");
			  this.all_interest= result.data.interest;
               
            })	

        
      },

    
	 


       async submitButton() {
		  
                 if(this.genie_interest.name == "")
                {
                      this.$toast.error("Error", "Interest Name is a required feild");
                    return "Error";
                }
               
               
               

                await API.GenieInterest(this.genie_interest)
                .then((res) => {
                    if (res.status == 200) {
						this.all_interest= res.data.interest;
						 this.genie_interest.name = '';
                        this.$toast.success("Success", "Genie Interest created succesfully");

                    } else {
                        this.$toast.error("Error", "Oops error updating an interest");
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
           
               
                if(this.genie_interest.name == "")
                {
                      this.$toast.error("Error", "Interest Name is a required feild");
                    return "Error";
                }
               
               

                await API.UpdateGenieInterest(this.genie_interest)
                .then((res) => {
                    if (res.status == 200) {
                      	this.all_interest= res.data.interest;
                         this.$toast.success("Success", "Genie Interest created succesfully");

                    } else {
                     this.$toast.error("Error", "Oops error updating an interest");
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
 
// 	  $('#populateinterest').on("change",function(){
    
//    alert(1);
// });

// 	var slider = document.querySelector("#kt_slider_basic");
// var valueMin = document.querySelector("#kt_slider_basic_min");
// var valueMax = document.querySelector("#kt_slider_basic_max");

// noUiSlider.create(slider, {
//     start: [20, 80],
//     connect: true,
//     range: {
//         "min": 0,
//         "max": 100
//     }
// });

// slider.noUiSlider.on("update", function (values, handle) {
//     if (handle) {
//         valueMax.innerHTML = values[handle];
//     } else {
//         valueMin.innerHTML = values[handle];
//     }
// });



    },

	async created() {
		 await API.GetAllInterest().then((result) => {
                
      
                this.all_interest = result.data;
               
               
               
            })
	},
	
	
	
};


</script>
