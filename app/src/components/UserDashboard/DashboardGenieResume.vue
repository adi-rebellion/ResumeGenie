<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
          <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
            <!--begin::Col-->
            <div
              v-for="resume in all_resume"
              :key="resume.id"
              class="col-md-6 col-lg-4 col-xl-3"
            >
              <!--begin::Card-->
              <div class="card h-100">
                <!--begin::Card body-->
                <div
                  class="
                    card-body
                    d-flex
                    justify-content-center
                    text-center
                    flex-column
                    p-8
                  "
                >
                  <!--begin::Name-->
                  <router-link
                    :to="{ name: 'GenieResumeCreate', params: { resume_id: resume.id } }"
                    href="#"
                    class="text-gray-800 text-hover-primary d-flex flex-column"
                  >
                    <!--begin::Image-->
                    <div class=" mb-5">
                     <img src="https://img.icons8.com/stickers/220/000000/resume.png" width="120px" height="120px"/>
                    </div>
                    <!--end::Image-->
                    <!--begin::Title-->
                    <div class="fs-5 fw-bolder mb-2">{{resume.name}}</div>
                    <!--end::Title-->
                  </router-link>
                  <!--end::Name-->
                  <!--begin::Description-->
                  <div class="fs-7 fw-bold text-gray-400">
                   <!-- <button type="reset" class="btn btn-sm btn-primary" >
                        <img src="https://img.icons8.com/stickers/30/000000/download-from-ftp.png"/>
                      </button>
                      &nbsp;
											<button type="submit" class="btn btn-sm btn-primary" >
                        <img src="https://img.icons8.com/stickers/30/000000/visible.png"/>
                      </button> -->
                      <a  class="btn btn-outline btn-outline-dashed btn-outline-info me-2 mb-2">
                        <span class="svg-icon svg-icon-1"> <img src="https://img.icons8.com/stickers/30/000000/download-from-ftp.png"/></span></a>
                      &nbsp;
<a href="#" class="btn btn-outline btn-outline-dashed btn-outline-info me-2 mb-2"><span class="svg-icon svg-icon-1"> <img src="https://img.icons8.com/stickers/30/000000/visible.png"/></span></a>

                  </div>
                  <!--end::Description-->
                </div>
               
                <!--end::Card body-->
              </div>
              <!--end::Card-->
            </div>  
            <!--end::Col-->
            <div class="col-md-6 col-lg-4 col-xl-3">
              <!--begin::Card-->
              <div
                class="
                  card
                  h-100
                  flex-center
                  bg-light-primary
                  border-primary border border-dashed
                  p-8
                "
              >
                <!--begin::Image-->
                <!-- <img src="https://img.icons8.com/stickers/100/000000/add.png"/> -->
                <img src="https://img.icons8.com/stickers/100/000000/add.png" />
                <!--end::Image-->
                <a
                  href="#"
                  class="btn bg-hearecho-red er fs-6 px-8 py-4"
                  data-bs-toggle="modal"
                  data-bs-target="#kt_modal_select_users"
                  style="float: right; margin-top: -8px"
                  >Add a new resume</a
                >
                <!--begin::Description-->
                <div class="fs-7 fw-bold text-gray-400">
                  Drag and drop files here
                </div>
                <!--end::Description-->
              </div>
              <!--end::Card-->
            </div>
          </div>
        </div>
        <!--end::Container-->
        <!--begin::Modal - Select Users-->
        <div
          class="modal fade"
          id="kt_modal_select_users"
          tabindex="-1"
          aria-hidden="true"
        >
          <!--begin::Modal dialog-->
          <div class="modal-dialog mw-700px">
            <div class="modal-content rounded">
              <!--begin::Modal header-->
              <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div
                  class="btn btn-sm btn-icon btn-active-color-primary"
                  data-bs-dismiss="modal"
                >
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                  <span class="svg-icon svg-icon-1">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <rect
                        opacity="0.5"
                        x="6"
                        y="17.3137"
                        width="16"
                        height="2"
                        rx="1"
                        transform="rotate(-45 6 17.3137)"
                        fill="black"
                      ></rect>
                      <rect
                        x="7.41422"
                        y="6"
                        width="16"
                        height="2"
                        rx="1"
                        transform="rotate(45 7.41422 6)"
                        fill="black"
                      ></rect>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
              </div>
              <!--begin::Modal header-->
              <!--begin::Modal body-->
              <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form
                  id="kt_modal_new_target_form"
                  class="form fv-plugins-bootstrap5 fv-plugins-framework"
                  action="#"
                >
                  <!--begin::Heading-->
                  <div class="mb-13 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">New Resume</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-bold fs-5">
                      Add all your career details in the career dashboard. Each
                      resume you create is an different view into your career,
                      skills & achievements.
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Heading-->
                  <!--begin::Input group-->
                  <div
                    class="
                      d-flex
                      flex-column
                      mb-8
                      fv-row fv-plugins-icon-container
                    "
                  >
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                      <span class="required">Name</span>
                    </label>
                    <!--end::Label-->
                    <input
                      type="text"
                      class="form-control form-control-solid"
                      placeholder="Lets give this view of your resume a unique name"
                      name="target_title"
                      v-model="new_genie_resume.name"
                    />
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>
                  <!--end::Input group-->

                  <!--begin::Actions-->
                  <div class="text-center">
                    <button
                      @click.prevent="add_new_resume()"
                      type="submit"
                      id="kt_modal_new_target_submit"
                      class="btn bg-rg-yellow"
                    >
                      <span v-if="!showResumeSaving" class="indicator-label"
                        >Create</span
                      >
                      <span v-if="showResumeSaving"
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
                  <div></div>
                </form>
                <!--end:Form-->
              </div>
              <!--end::Modal body-->
            </div>
          </div>
          <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Select Users-->
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
             showResumeSaving: false,
            // users: null,
            // urlInputs: null,
            // domainInputs: null,
      add_new_work_exp:true,

			 all_resume: [],

            new_genie_resume: {
                name: ""
            },
            errors: [],
            props: ['homeRoute'],
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
    async add_new_resume()
    {
       this.showResumeSaving = true;
          if(this.new_genie_resume.name == "")
                {
                      this.$toast.error("Error", "Resume name is a required feild");
                      this.showResumeSaving = false;
                    return "Error";
                }

            await API.GenieResume(this.new_genie_resume)
                .then((res) => {
                    if (res.status == 200) {

                        this.$toast.success("Success", "Genie resume added succesfully");
                        this.all_resume = res.data.added_resume;
                        this.new_genie_resume.name = "";
                        this.showResumeSaving = false;
                         $("#kt_modal_select_users").modal("hide");

                    } else {
                        this.$toast.error("Error", "Oops error while updating genie resume");
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
		 await API.GetAllResume().then((result) => {

            //   console.log('question',result.data);
                this.all_resume = result.data;



            })
	}
};
</script>
