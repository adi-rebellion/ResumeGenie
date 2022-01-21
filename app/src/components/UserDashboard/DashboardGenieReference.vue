<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
			 <div v-if="all_reference.length > 0"  class="card mb-xl-8">
									 <!--begin::Card header-->
            <div class="card-header card-header-stretch pb-0">
              <!--begin::Title-->
              <div class="card-title">
               <img src="https://img.icons8.com/stickers/50/000000/handshake.png"/>&nbsp;
                <h3 class="m-0">Reference(s)</h3>
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
										<div class="card-body py-3">
											<div class="tab-content">
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
															<!--begin::Table head-->
															<thead>
																<tr class="border-0">
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-140px"></th>
																
																	<th class="p-0 min-w-50px"></th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>

																<tr   v-for="reference in all_reference"
                    :key="reference.id">
																	<td>
																		<div class="symbol symbol-45px me-2">
																		
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{reference.name}}</a>
																		<span class="text-muted fw-bold d-block">{{reference.reference}}</span>
																	</td>
																	<td class=" text-muted fw-bold">{{reference.company}}</td>
																	
																	<td class="text-end">
																		 <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="toggle_reference(reference.id)"
                        >
                          <img src="https://img.icons8.com/stickers/30/000000/delete-forever.png"/>
                        </button> &nbsp;
                         <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_reference(reference.id)"
                        >
                          <img src="https://img.icons8.com/stickers/30/000000/multi-edit.png"/>
                        </button>
																	</td>
																</tr>
															
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
											
									
											</div>
										</div>
										<!--end::Body-->
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
                <h3 class="fw-bolder m-0">Addding a Reference details</h3>
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
                      > Name</label
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
                            placeholder="Name"
                            v-model="genie_reference.name"
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
                      >Reference</label
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
                            placeholder="Reference"
                            v-model="genie_reference.reference"
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
                        v-model="genie_reference.company"
                      />
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
                    v-if="add_new_reference"
                    type="submit"
                    class="btn bg-rg-yellow"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    Save
                  </button>
                  <button
                    v-if="!add_new_reference"
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
          <!-- <nav class="d-flex justify-content-between align-items-center push">
                <a class="btn btn-light-danger" @click.prevent="$router.push('genie-volunteer')">
                  <i class="fa fa-arrow-left opacity-50 me-1"></i>
                  <span>Prev</span>
                </a>
                <a class="btn btn-light-success" @click.prevent="$router.push('genie-volunteer')">
                  <span>Next</span>
                  <i class="fa fa-arrow-right opacity-50 ms-1"></i>
                </a>
              </nav> -->
		
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
           add_new_reference:true,
			 all_reference: [],
          
            genie_reference: {
               update_reference_id: "",
                name: "",
                reference: "",
                company:"",
				
				

            },
            errors: [],
        };
    },
    methods: {
        async edit_reference(reference_id)
      {


        this.add_new_reference = false;
        this.genie_reference = this.all_reference[reference_id-1];
        this.genie_reference.update_reference_id = reference_id;


      },
       async toggle_reference(reference_id)
      {




        const reference = {toogle_reference_id:reference_id}
          await API.ToggleGenieReference(reference).then((result) => {


              // this.genie_reference = this.all_reference[reference_id-1];
            //  this.all_reference[reference_id-1].status = status;
               this.$toast.info("Deleted", "Genie reference deleted!");
                this.all_reference = result.data.reference;

            })


      },
        


       async submitButton() {
		  
                 if(this.genie_reference.name == "")
                {
                      this.$toast.error("Error", "Name is a required feild");
                    return "Error";
                }
                if (this.genie_reference.company_name == "") {
                    this.$toast.error("Error", "Company is a required feild");
                    return "Error";
                }
                 if (this.genie_reference.reference == "") {
                    this.$toast.error("Error", "Reference is a required feild");
                    return "Error";
                }
              
               

                await API.GenieReference(this.genie_reference)
                .then((res) => {
                    if (res.status == 200) {
                       this.all_reference= res.data.reference;
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

                 if(this.genie_reference.name == "")
                {
                      this.$toast.error("Error", "Name is a required feild");
                    return "Error";
                }
                if (this.genie_reference.company_name == "") {
                    this.$toast.error("Error", "Company is a required feild");
                    return "Error";
                }
                 if (this.genie_reference.reference == "") {
                    this.$toast.error("Error", "Reference is a required feild");
                    return "Error";
                }


                await API.UpdateGenieReference(this.genie_reference)
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
		 await API.GetAllReference().then((result) => {
                
      
                this.all_reference = result.data;
               
               
               
            })
	}
};
</script>
