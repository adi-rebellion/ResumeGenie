<template>
  <!--begin::Header-->
  <div
    class="landing-header landing-rb-color"
    data-kt-sticky="true"
    data-kt-sticky-name="landing-header"
    data-kt-sticky-offset="{default: '200px', lg: '300px'}"
  >
    <!--begin::Container-->
    <div class="container">
      <!--begin::Wrapper-->
      <div class="d-flex align-items-center justify-content-between">
        <!--begin::Logo-->
        <div class="d-flex align-items-center flex-equal">
          <!--begin::Mobile menu toggle-->
          <button
            class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
            id="kt_landing_menu_toggle"
          >
            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
            <span class="svg-icon svg-icon-2hx">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                  fill="black"
                />
                <path
                  opacity="0.3"
                  d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                  fill="black"
                />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </button>
          <!--end::Mobile menu toggle-->
          <!--begin::Logo image-->
          <router-link :to="{name: 'landing_page'}">
            <!-- <img
              alt="Logo"
              src= "theme/dist/assets/media/logos/ResumeFoot.png"
               width="200px"
                style="margin-top:10px;"
              class="logo-default "
            /> -->
            <img
              alt="Logo"
              src= "theme/dist/assets/media/logos/ResumeGenieDark.png"
              height="150px"
               
                
              class="logo-sticky "
            />
          </router-link> <span style="font-size:30px;color:black;">&nbsp; </span>
          <!--end::Logo image-->
        </div>
        <!--end::Logo-->
        <!--begin::Menu wrapper-->
        <div class="d-lg-block" id="kt_header_nav_wrapper">
          <div
            class="d-lg-block p-5 p-lg-0"
            data-kt-drawer="true"
            data-kt-drawer-name="landing-menu"
            data-kt-drawer-activate="{default: true, lg: false}"
            data-kt-drawer-overlay="true"
            data-kt-drawer-width="200px"
            data-kt-drawer-direction="start"
            data-kt-drawer-toggle="#kt_landing_menu_toggle"
            data-kt-swapper="true"
            data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}"
          >
            <!--begin::Menu-->
            <div
              class="
                menu menu-column
                flex-nowrap
                menu-rounded
                menu-lg-row
                menu-title-gray-500
                menu-state-title-primary
                nav nav-flush
                fs-5
                fw-bold
              "
              id="kt_landing_menu"
            >
            <!--begin::Menu item-->
              <!-- <div class="menu-item">
               
                 <router-link
                  :to="{ name: 'create_resume' }"
                  class="menu-link nav-link py-3 px-4 px-xxl-6 text-white"
                  data-kt-scroll-toggle="true"
                  data-kt-drawer-dismiss="true"
                  >Create Resume</router-link>


               
              </div> -->
              <!--end::Menu item-->
             
              
            
             
             

            
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </div>
        </div>
        <!--end::Menu wrapper-->
        <!--begin::Toolbar-->
        <div class="flex-equal text-end ms-1">
        
         
          <!-- <a
            id="signInButton"
            href="../../demo2/dist/authentication/flows/basic/sign-in.html"
            class="btn" style="background-color: #e64f34; color:white"
            >Sign In</a
          > -->
          
          <!-- <router-link v-if ="!$store.state.auth.hasAuth" v-show="$route.name!=='landing_register'"
                  
                  :to="{ name: 'landing_register' }"
                  class="btn"
                   style="background-color: #e64f34; color:white"
                  >Sign Up</router-link>
                   &nbsp; -->
                    <router-link v-if ="!$store.state.auth.hasAuth" v-show="$route.name!=='landing_login'"
                  :to="{ name: 'landing_login' }"
                  class="btn bg-rg-yellow"
                   
                  >Sign In</router-link>
                    &nbsp;
                    <router-link v-if="$store.state.auth.hasAuth"
                  
                  :to="{ name: 'home' }"
                  class="btn bg-rg-yellow"  
                  
                  >{{$store.state.auth.user.user_name}}</router-link>
                  &nbsp;
                  
                
                  <!-- <router-link v-if="$store.state.auth.hasAuth"
                  :to="{ name: 'logout' }"
                  class="btn"
                   style="background-color: #e64f34; color:white"
                  >Logout</router-link> -->
                 
        </div>
        
        <!--end::Toolbar-->
        <div v-if="$store.state.auth.hasAuth" class="d-flex align-items-center flex-shrink-0">
										<!--begin::Label-->
								
										<!--end::Label-->
										<!--begin::Actions-->
										<div class="d-flex flex-shrink-0">
											<!--begin::Button-->
										
                     
											<!--end::Button-->
                      	<!--begin::Button-->
											<!-- <div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="" data-bs-original-title="Add a team member">
												<router-link v-if="$store.state.auth.hasAuth"
                      :to="{ name: 'create_org' }" class="btn btn-sm btn-icon btn-active-color-success">
												
													<span class="svg-icon svg-icon-2x">
														<img src="https://img.icons8.com/wired/32/000000/small-business.png"/>
													</span>
												
												</router-link>
											</div>
                      &nbsp; &nbsp; &nbsp; -->
											<!--end::Button-->
											<!--begin::Button-->
											<!-- <div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="" data-bs-original-title="Create new account">
												<router-link v-if="$store.state.auth.hasAuth"
                      :to="{ name: 'home' }" class="btn btn-sm btn-icon btn-active-color-success">
												
													<span class="svg-icon svg-icon-2x">
													<img src="https://img.icons8.com/wired/32/000000/home.png"/>
													</span>
												
												</router-link>
											</div>
                      &nbsp; &nbsp; &nbsp; -->
											&nbsp; &nbsp; &nbsp;
                      	<div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="" data-bs-original-title="Logout">
												<router-link v-if="$store.state.auth.hasAuth"
                      :to="{ name: 'logout' }" class="btn btn-sm btn-icon btn-active-color-success">
												
													<span class="svg-icon svg-icon-2x">
												<img src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/50/000000/external-exit-emergency-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png"/>
													</span>
													
												</router-link>
											</div>
										
										</div>
										<!--end::Actions-->
									</div>
      </div>
      <!--end::Wrapper-->
      
    </div>
    <!--end::Container-->
  </div>
  <!--end::Header-->
</template>

<script>
export default {
 
};

</script>
