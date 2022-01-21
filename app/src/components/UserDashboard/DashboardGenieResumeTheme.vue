<template>
  <DashboardLayout>
    <template v-slot:dashboard-content >
      <div v-html="resume">

      </div>
   
    </template>
  </DashboardLayout>
</template>

<script>
import DashboardLayout from "./layout/DashboardLayout.vue";
const API = require("../../services/api");
const axios = require("axios").default;
export default {
  components: {
    DashboardLayout,
  },
   data() {
        return {

            resume: "",
			all_skill: [],


            errors: [],
        };
    },
     methods: {

      

       async GenerateResume()
       {
            const resume = { resume_id:this.$route.params.resume_id }
          await API.GenerateResume(resume).then((result) => {
             
            console.log('hello')

            })
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





    },
	async created() {
      const resume_id = {resume_id:this.$route.params.resume_id}
		 await API.RenderResume(resume_id).then((result) => {

        console.log(result.data);
        this.resume = result.data.content;




            })
	}
};
</script>
