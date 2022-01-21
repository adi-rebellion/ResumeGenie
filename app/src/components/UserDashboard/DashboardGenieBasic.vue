<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
          <!--begin::Basic info-->
          <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div
              class="card-header border-0 cursor-pointer"
              role="button"
              data-bs-toggle="collapse"
              data-bs-target="#kt_account_profile_details"
              aria-expanded="true"
              aria-controls="kt_account_profile_details"
            >
              <!--begin::Card title-->
              <div class="card-title m-0">
               <img src="https://img.icons8.com/stickers/50/000000/user-location.png"/>&nbsp;
                <h3 class="fw-bolder m-0">The Basics</h3>
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
                    <label class="col-lg-4 col-form-label fw-bold fs-6"
                      >Headshot </label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                      <!--begin::Image input-->
                      <div
                        class="image-input image-input-outline"
                        data-kt-image-input="true"
                        style="
                          background-image: url(https://img.icons8.com/stickers/80/000000/gender-neutral-user-skin-type-1.png);
                        "
                      >
                        <!--begin::Preview existing avatar-->
                        <!-- ./theme/dist/assets/media/avatars/blank.png -->
                        <div
                          class="image-input-wrapper w-125px h-125px"
                          style="
                            background-image: url(https://img.icons8.com/stickers/80/000000/gender-neutral-user-skin-type-1.png);
                          "
                        ></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label
                          class="
                            btn btn-icon btn-circle btn-active-color-primary
                            w-25px
                            h-25px
                            bg-body
                            shadow
                          "
                          data-kt-image-input-action="change"
                          data-bs-toggle="tooltip"
                          title=""
                          data-bs-original-title="Change avatar"
                        >
                          <i class="bi bi-pencil-fill fs-7"></i>
                          <!--begin::Inputs-->
                          <input
                            type="file"
                            name="avatar"
                            accept=".png, .jpg, .jpeg"
                            @change="onFileChange"
                          />
                          <input type="hidden" name="avatar_remove" />
                          <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span
                          class="
                            btn btn-icon btn-circle btn-active-color-primary
                            w-25px
                            h-25px
                            bg-body
                            shadow
                          "
                          data-kt-image-input-action="cancel"
                          data-bs-toggle="tooltip"
                          title=""
                          data-bs-original-title="Cancel avatar"
                        >
                          <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span
                          class="
                            btn btn-icon btn-circle btn-active-color-primary
                            w-25px
                            h-25px
                            bg-body
                            shadow
                          "
                          data-kt-image-input-action="remove"
                          data-bs-toggle="tooltip"
                          title=""
                          data-bs-original-title="Remove avatar"
                        >
                          <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove-->
                      </div>
                      <!--end::Image input-->
                      <!--begin::Hint-->
                      <div class="form-text">
                        Allowed file types: png, jpg, jpeg.
                      </div>
                      <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >Full name</label
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
                            name="fname"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Name"
                            v-model="genie_basic.name"
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
                      >Current position</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                      <input
                        type="text"
                        name="current_position"
                        class="form-control form-control-lg form-control-solid"
                        placeholder="Current position"
                        v-model="genie_basic.current_position"
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
                      >Current location</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                      <input
                        type="text"
                        name="current_location"
                        class="form-control form-control-lg form-control-solid"
                        placeholder="Current location"
                        v-model="genie_basic.current_location"
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
                        v-model="genie_basic.summary"
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
                    class="btn bg-rg-yellow"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    <span v-if="!showBasicLoading">Save and next</span>
                    <span v-if="showBasicLoading"
                      >Please wait...
                      <span
                        class="
                          spinner-border spinner-border-sm
                          align-middle
                          ms-2
                        "
                      ></span
                    ></span>
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
          <nav class="d-flex justify-content-between align-items-center push">
                <!-- <a class="btn btn-secondary" href="javascript:void(0)">
                  <i class="fa fa-arrow-left opacity-50 me-1"></i>
                  <span>Prev</span>
                </a> -->
                <a class="btn btn-light-success" @click.prevent="$router.push('genie-contact')">
                  <span>Next</span>
                  <i class="fa fa-arrow-right opacity-50 ms-1"></i>
                </a>
              </nav>
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
             showBasicLoading: false,
            // users: null,
            // urlInputs: null,
            // domainInputs: null,

           avatar: "",
            genie_basic: {
                name:"",
                current_position: "",
                current_location: "",
                summary: ""

            },
            genie_basic_exist: [],
            errors: [],
        };
    },
    methods: {
        onFileChange(e) {

      this.genie_basic.avatar = e.target.files[0];


    },


       async submitButton() {
                 if(this.genie_basic.avatar == "")
                {
                      this.$toast.error("Error", "Avatar is a required feild");
                    return "Error";
                }
                if (this.genie_basic.name == "") {
                    this.$toast.error("Error", "Name is a required feild");
                    return "Error";
                }

                 if (this.genie_basic.current_position == "") {
                    this.$toast.error("Error", "Current Position is a required feild");
                    return "Error";
                }
                 if (this.genie_basic.current_location == "") {
                    this.$toast.error("Error", "Current Location is a required feild");
                    return "Error";
                }
                 if (this.genie_basic.summary == "") {
                    this.$toast.error("Error", "About is a required feild");
                    return "Error";
                }
				        this.showBasicLoading = true;
                let formData = new FormData();
                formData.append('image', this.genie_basic.avatar);

                await API.GenieBasic(this.genie_basic)
                .then((res) => {
                    if (res.status == 200) {

                        this.$toast.success("Success", "Genie basic details updated succesfully");
						            this.showBasicLoading = true;
                        this.$router.push("genie-experience");

                    } else {
                        this.$toast.error("Error", "Oops error while updating genie basic details");
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

       await API.GetGenieBasic()
                .then((res) => {
                    this.genie_basic_exist = res.data;
                    this.genie_basic.name = res.data.name
                    this.genie_basic.current_position = res.data.label
                    this.genie_basic.current_location = res.data.location
                    this.genie_basic.summary = res.data.summary
                })






    },
};
</script>
