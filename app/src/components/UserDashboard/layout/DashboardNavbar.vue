<template>
  <div
    id="kt_header"
    class="header py-6 py-lg-0"
    data-kt-sticky="true"
    data-kt-sticky-name="header"
    data-kt-sticky-offset="{lg: '300px'}"
  >
    <!--begin::Container-->
    <div class="header-container container-xxl">
      <!--begin::Page title-->
      <div
        class="
          page-title
          d-flex
          flex-column
          align-items-start
          justify-content-center
          flex-wrap
          me-lg-20
          py-3 py-lg-0
          me-3
        "
        style="background-image: url(./theme/dist/assets/media/misc/taieri.svg)"
      >
        <!--begin::Heading-->
        <h1 v-if="$route.name!='GenieResumeTheme'" class="d-flex flex-column text-dark fw-bolder my-1">
          <span v-if="$route.name=='GenieBasic'" class="text-white fs-1"
            >Let's first build your profile</span
          >
          <span v-if="$route.name=='DashboardPage'" class="text-white fs-1"
            >This is your career profile</span
          >
          <span v-if="$route.name=='GenieExperience'" class="text-white fs-1"
            >Now, lets add your work experiences</span
          >
          <span v-if="$route.name=='GenieEducation'" class="text-white fs-1"
            >Now, Lets add your education details</span
          >
          <span v-if="$route.name=='GenieVolunteer'" class="text-white fs-1"
            >Now, lets add your volunteering experiences</span
          >
          <span v-if="$route.name=='GenieAward'" class="text-white fs-1"
            >Now, Lets showcase any awards & achievements</span
          >
          <span v-if="$route.name=='GenieProject'" class="text-white fs-1"
            >Now, Lets add any projects you've done</span
          >
          <span v-if="$route.name=='GenieSkill'" class="text-white fs-1"
            >Now, Lets showcase all your skills
          </span>
          <span v-if="$route.name=='GenieInterest'" class="text-white fs-1"
            >Now, Lets showcase all your interests
          </span>
          <span v-if="$route.name=='GenieContact'" class="text-white fs-1"
            >Now, Lets add all your contact details
          </span>
          <span v-if="$route.name=='GenieSocial'" class="text-white fs-1"
            >Now, Lets add all your social connects
          </span>
          <span v-if="$route.name=='GenieLanguage'" class="text-white fs-1"
            >Now, Lets add all your language profiency
          </span>
          <small
            v-if="$route.name=='GenieBasic'"
            class="text-gray-600 fs-6 fw-normal pt-2"
            >Tell us your name and other simple details</small
          >
          <small
            v-if="$route.name=='GenieExperience'"
            class="text-gray-600 fs-6 fw-normal pt-2"
            >Add every place you have worked at. You can show / hide parts of
            your resume anytime</small
          >
          <small
            v-if="$route.name=='GenieVolunteer'"
            class="text-gray-600 fs-6 fw-normal pt-2"
            >Add every place you have volunteered at. You can show / hide parts
            of your resume anytime</small
          >
          <small
            v-if="$route.name=='GenieContact'"
            class="text-gray-600 fs-6 fw-normal pt-2"
            >Add all your primary contact details</small
          >
          <small
            v-if="$route.name=='GenieEducation'"
            class="text-gray-600 fs-6 fw-normal pt-2"
            >Add any school or university degrees that you have</small
          >
          <small
            v-if="$route.name=='GenieAward'"
            class="text-gray-600 fs-6 fw-normal pt-2"
            >Add all awards and achievements. Remember, you can show/hide them
            as needed</small
          >
          <small
            v-if="$route.name=='DashboardPage'"
            class="text-gray-600 fs-6 fw-normal pt-2"
            >Add everything about you in here. We will use this information to
            create one or more versions of your resume for you.<br />
            After filling up everything about you, you can start to create
            resumes from the left pane.<br />
            You can customize what you show on each version of your resume.
          </small>
          <small
            v-if="$route.name=='GenieProject'"
            class="text-gray-600 fs-6 fw-normal pt-2"
            >Feel free to add as many as you can. The more the better ...</small
          >
          <small
            v-if="$route.name=='GenieSocial'"
            class="text-gray-600 fs-6 fw-normal pt-2"
            >Feel free to add as many as you can. The more the better ...</small
          >
          <small
            v-if="$route.name=='GenieSkill'"
            class="text-gray-600 fs-6 fw-normal pt-2"
            >Add all skills you can think of, you can share your level of
            expertise in each skill</small
          >
          <small
            v-if="$route.name=='GenieInterest'"
            class="text-gray-600 fs-6 fw-normal pt-2"
            >Add all interset you can think of. The more the better ...</small
          >
          <small
            v-if="$route.name=='GenieLanguage'"
            class="text-gray-600 fs-6 fw-normal pt-2"
            >Add all languages you know, you can share your level of fluency in
            each language</small
          >
        </h1>
        <div v-if="$route.name=='GenieResumeTheme'" class="row">
        
            <div v-for="theme in all_themes" :key="theme.id" class="col-2">
											<div class="card card-dashed flex-center min-w-175px my-3 p-10">
                        <img :src="theme.image_url" height="120">
												<span class="fw-bolder d-flex justify-content-center" style="font-size:20px;">
												{{theme.name}}</span>
											</div>
										</div>
        </div>
        <!--end::Heading-->
      </div>
      <!--end::Page title=-->
      <!--begin::Wrapper-->
      <div v-if="$route.name!='GenieResumeTheme'" class="d-flex align-items-center flex-wrap">
        <!--begin::Action-->
        <div class="d-flex align-items-center py-3 py-lg-0">
          <router-link
            :to="{ name: 'GenieBasic' }"
            class="btn btn-light-warning"
            style="color: #2e1f27 !important"
            >{{$store.state.auth.user.user_name}}</router-link
          >
        </div>
        <!--end::Action-->
      </div>
  
      <!--end::Wrapper-->
    </div>
    <!--end::Container-->
    <div class="header-offset"></div>
  </div>
</template>





<script>
// const API = require("../../services/api");
const API = require("../../../services/api");


const axios = require("axios").default;


export default {
  components: {
    
  },
  data() {
        return {
           
         
			      all_themes: [],
          
           
            errors: [],
        };
    },
    methods: {
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
		 await API.GetAllTheme().then((result) => {
                
      
                this.all_themes = result.data;
               
               
               
            })
	}
};
</script>
