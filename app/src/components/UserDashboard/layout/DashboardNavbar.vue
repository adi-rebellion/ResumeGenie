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
      >
        <!--begin::Heading-->
        <h1 class="d-flex flex-column text-dark fw-bolder my-1">
          <span v-if="$route.name=='GenieBasic'" class="text-white fs-1">Let's first build your profile</span>
           <span v-if="$route.name=='GenieExperience'" class="text-white fs-1">Now, lets add your work  experiences</span>
            <span v-if="$route.name=='GenieEducation'" class="text-white fs-1">Now, Lets add your education details</span>
             <span v-if="$route.name=='GenieAward'" class="text-white fs-1">Now, Lets  showcase any awards & achievements</span>
              <span v-if="$route.name=='GenieProject'" class="text-white fs-1">Now, Lets add any projects you've done</span>
               <span v-if="$route.name=='GenieSkill'" class="text-white fs-1">Now, Lets showcase all your skills </span>
          <small v-if="$route.name=='GenieBasic'" class="text-gray-600 fs-6 fw-normal pt-2"
            >Tell us your name and other simple details</small
          >
           <small v-if="$route.name=='GenieExperience'" class="text-gray-600 fs-6 fw-normal pt-2"
            >Add every place you have worked at. You can show / hide parts of your resume anytime</small
          >
            <small v-if="$route.name=='GenieEducation'" class="text-gray-600 fs-6 fw-normal pt-2"
            >Add any school or university degrees that you have</small
          >
          <small v-if="$route.name=='GenieAward'" class="text-gray-600 fs-6 fw-normal pt-2"
            >Add all awards and achievements. Remember, you can show/hide them as needed</small
          >
           <small v-if="$route.name=='GenieProject'" class="text-gray-600 fs-6 fw-normal pt-2"
            >Feel free to add as many as you can. The more the better ...</small
          >
          <small v-if="$route.name=='GenieSkill'" class="text-gray-600 fs-6 fw-normal pt-2"
            >Add all skills you can think of, you can share your level of expertise in each skill</small
          >
        </h1>
        <!--end::Heading-->
      </div>
      <!--end::Page title=-->
      <!--begin::Wrapper-->
      <div class="d-flex align-items-center flex-wrap">
       
        <!--begin::Action-->
        <div class="d-flex align-items-center py-3 py-lg-0">
        
         
          <router-link
           :to="{ name: 'GenieBasic' }"
            class="btn bg-rg-yellow"
            
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