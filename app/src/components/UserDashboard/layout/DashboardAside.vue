<template>
  <div
    id="kt_aside"
    class="aside"
    data-kt-drawer="true"
    data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="auto"
    data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_toggle"
  >
    <!--begin::Logo-->
    <div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
      <router-link :to="{ name: 'DashboardPage' }">
        <img
          alt="Logo"
          src="../../../../public/theme/dist/assets/media/logos/RG.png"
          class="h-80px"
        />
      </router-link>
    </div>
    <!--end::Logo-->
    <!--begin::Nav-->
    <div
      class="aside-menu flex-column-fluid pt-0 pb-5 py-lg-5"
      id="kt_aside_menu"
    >
      <!--begin::Aside menu-->
      <div
        id="kt_aside_menu_wrapper"
        class="w-100 hover-scroll-overlay-y scroll-ps d-flex"
        data-kt-scroll="true"
        data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
        data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu"
        data-kt-scroll-offset="0"
        style="height: 195px"
      >
        <div
          id="kt_aside_menu"
          class="
            menu
            menu-column
            menu-title-gray-600
            menu-state-primary
            menu-state-icon-primary
            menu-state-bullet-primary
            menu-icon-gray-400
            menu-arrow-gray-400
            fw-bold
            fs-6
          "
          data-kt-menu="true"
        >
          <div class="menu-item py-3">
            <!-- <a
              class="menu-link active"
              href="../../../../public/theme/dist/index.html"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
              data-bs-original-title="Dashboard"
            > -->
            <router-link
              class="menu-link"
              v-bind:class="{ active: $route.name=='GenieBasic' }"
              :to="{ name: 'GenieBasic' }"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
              data-bs-original-title="About"
            >
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                <span class="svg-icon svg-icon-2x">
                  <img
                    src="https://img.icons8.com/doodle/48/000000/test-account.png"
                  />
                </span>
                <!--end::Svg Icon-->
              </span>
            </router-link>
          </div>
          <div
            data-kt-menu-trigger="click"
            data-kt-menu-placement="right-start"
            class="menu-item py-3"
          >
            <router-link
             :to="{ name: 'GenieExperience' }"
              v-bind:class="{ active: $route.name=='GenieExperience' }"
              class="menu-link"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
              data-bs-original-title="Genie Work Experience"
            >
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs037.svg-->
                <span class="svg-icon svg-icon-2x">
                  <img
                    src="https://img.icons8.com/doodle/48/000000/employee-card--v1.png"
                  />
                </span>
                <!--end::Svg Icon-->
              </span>
            </router-link>
           
          </div>
          <div
            data-kt-menu-trigger="click"
            data-kt-menu-placement="right-start"
            class="menu-item py-3"
          >
            <router-link
              class="menu-link"
               v-bind:class="{ active: $route.name=='GenieEducation' }"
              :to="{ name: 'GenieEducation' }"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
               data-bs-original-title="Genie Education"
            >
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs037.svg-->
                <span class="svg-icon svg-icon-2x">
                  <img
                    src="https://img.icons8.com/doodle/48/000000/teaching.png"
                  />
                </span>
                <!--end::Svg Icon-->
              </span>
            </router-link>
           
          </div>
          <div
            data-kt-menu-trigger="click"
            data-kt-menu-placement="right-start"
            class="menu-item py-3"
          >
            <router-link
             v-bind:class="{ active: $route.name=='GenieAward' }"
              :to="{ name: 'GenieAward' }"
              class="menu-link"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
              data-bs-original-title="Genie Awards"
            >
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                <span class="svg-icon svg-icon-2x">
                  <img
                    src="https://img.icons8.com/doodle/48/000000/medal.png"
                  />
                </span>
                <!--end::Svg Icon-->
              </span>
            </router-link>
            <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
              <div class="menu-item">
                <div class="menu-content">
                  <span class="menu-section fs-5 fw-bolder ps-1 py-1"
                    >Account</span
                  >
                </div>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/account/overview.html"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Overview</span>
                </a>
              </div>
              <div class="menu-item">
                <router-link
                  class="menu-link active"
                  :to="{ name: 'GenieBasic' }"
                  title=""
                  data-bs-toggle="tooltip"
                  data-bs-trigger="hover"
                  data-bs-dismiss="click"
                  data-bs-placement="right"
                  data-bs-original-title="About"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Settings</span>
                </router-link>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/account/security.html"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Security</span>
                </a>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/account/billing.html"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Billing</span>
                </a>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/account/statements.html"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Statements</span>
                </a>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/account/referrals.html"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Referrals</span>
                </a>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/account/api-keys.html"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">API Keys</span>
                </a>
              </div>
            </div>
          </div>
          <div
            data-kt-menu-trigger="click"
            data-kt-menu-placement="right-start"
            class="menu-item py-3"
          >
            <router-link
             v-bind:class="{ active: $route.name=='GenieProject' }"
              :to="{ name: 'GenieProject' }"
              class="menu-link"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
              data-bs-original-title="Genie Project"
            >
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                <span class="svg-icon svg-icon-2x">
                  <img
                    src="https://img.icons8.com/doodle/48/000000/repository.png"
                  />
                </span>
                <!--end::Svg Icon-->
              </span>
            </router-link>
            <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
              <div class="menu-item">
                <div class="menu-content">
                  <span class="menu-section fs-5 fw-bolder ps-1 py-1"
                    >Chat</span
                  >
                </div>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/apps/chat/private.html"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Private Chat</span>
                </a>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/apps/chat/group.html"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Group Chat</span>
                </a>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/apps/chat/drawer.html"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Drawer Chat</span>
                </a>
              </div>
            </div>
          </div>
          <div
            data-kt-menu-trigger="click"
            data-kt-menu-placement="right-start"
            class="menu-item py-3"
          >
            <router-link
             v-bind:class="{ active: $route.name=='GenieSkill' }"
              :to="{ name: 'GenieSkill' }"
              class="menu-link"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
              data-bs-original-title="Genie Skills"
            >
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/maps/map002.svg-->
                <span class="svg-icon svg-icon-2x">
                  <img
                    src="https://img.icons8.com/doodle/48/000000/shooting-stars--v1.png"
                  />
                </span>
                <!--end::Svg Icon-->
              </span>
            </router-link>
            <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
              <div class="menu-item">
                <div class="menu-content">
                  <span class="menu-section fs-5 fw-bolder ps-1 py-1"
                    >Customers</span
                  >
                </div>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/apps/customers/getting-started.html"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Getting Started</span>
                </a>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/apps/customers/list.html"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Customer Listing</span>
                </a>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/apps/customers/view.html"
                >
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Customer Details</span>
                </a>
              </div>
            </div>
          </div>
          <div
            data-kt-menu-trigger="click"
            data-kt-menu-placement="right-start"
            class="menu-item py-3"
          >
            <router-link
            v-bind:class="{ active: $route.name=='GenieContact' }"
              :to="{ name: 'GenieContact' }"
              class="menu-link"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
             data-bs-original-title="Genie Contact"
            >
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                <span class="svg-icon svg-icon-2x">
                  <img
                    src="https://img.icons8.com/doodle/48/000000/apple-contacts.png"
                  />
                </span>
                <!--end::Svg Icon-->
              </span>
            </router-link>
            <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
              <div class="menu-item">
                <div class="menu-content">
                  <span class="menu-section fs-5 fw-bolder ps-1 py-1"
                    >Resources</span
                  >
                </div>
              </div>
              <div class="menu-item">
                <router-link
                  class="menu-link active"
                  :to="{ name: 'GenieBasic' }"
                  title=""
                  data-bs-toggle="tooltip"
                  data-bs-trigger="hover"
                  data-bs-dismiss="click"
                  data-bs-placement="right"
                  data-bs-original-title="About"
                >
                  <span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/layouts/lay009.svg-->
                    <span class="svg-icon svg-icon-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                      >
                        <path
                          opacity="0.3"
                          d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z"
                          fill="black"
                        ></path>
                        <path
                          d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z"
                          fill="black"
                        ></path>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">Components</span>
                </router-link>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/documentation/getting-started.html"
                  title=""
                  data-bs-toggle="tooltip"
                  data-bs-trigger="hover"
                  data-bs-dismiss="click"
                  data-bs-placement="right"
                  data-bs-original-title="Check out the complete documentation"
                >
                  <span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                    <span class="svg-icon svg-icon-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                      >
                        <path
                          opacity="0.3"
                          d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                          fill="black"
                        ></path>
                        <path
                          d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                          fill="black"
                        ></path>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">Documentation</span>
                </a>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="https://preview.keenthemes.com/metronic8/demo9/layout-builder.html"
                  title=""
                  data-bs-toggle="tooltip"
                  data-bs-trigger="hover"
                  data-bs-dismiss="click"
                  data-bs-placement="right"
                  data-bs-original-title="Build your layout, preview and export HTML for server side integration"
                >
                  <span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                    <span class="svg-icon svg-icon-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                      >
                        <path
                          d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                          fill="black"
                        ></path>
                        <path
                          opacity="0.3"
                          d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                          fill="black"
                        ></path>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">Layout Builder</span>
                </a>
              </div>
              <div class="menu-item">
                <a
                  class="menu-link"
                  href="../../../../public/theme/dist/documentation/getting-started/changelog.html"
                >
                  <span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                    <span class="svg-icon svg-icon-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                      >
                        <path
                          opacity="0.3"
                          d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                          fill="black"
                        ></path>
                        <path
                          d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                          fill="black"
                        ></path>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">Changelog v8.0.25</span>
                </a>
              </div>
            </div>
          </div>
           <div
            data-kt-menu-trigger="click"
            data-kt-menu-placement="right-start"
            class="menu-item py-3"
          >
            <router-link
            v-bind:class="{ active: $route.name=='GenieSocial' }"
              :to="{ name: 'GenieSocial' }"
              class="menu-link"
              title=""
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss="click"
              data-bs-placement="right"
             data-bs-original-title="Genie Social"
            >
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                <span class="svg-icon svg-icon-2x">
                 <img src="https://img.icons8.com/doodle/48/000000/community.png"/>
                </span>
                <!--end::Svg Icon-->
              </span>
            </router-link>
          
          </div>
        </div>
      </div>
      <!--end::Aside menu-->
    </div>
    <!--end::Nav-->
    <!--begin::Footer-->
    <div
      class="aside-footer flex-column-auto pb-5 pb-lg-10"
      id="kt_aside_footer"
    >
      <!--begin::Menu-->
      <div
        class="d-flex flex-center w-100 scroll-px"
        data-bs-toggle="tooltip"
        data-bs-placement="right"
        data-bs-dismiss="click"
        title=""
        data-bs-original-title="Quick actions"
      >
        <router-link
          :to="{ name: 'logout' }"
          class="btn btn-custom"
          data-kt-menu-trigger="click"
          data-kt-menu-overflow="true"
          data-kt-menu-placement="top-start"
        >
          <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
          <span class="svg-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
            >
              <rect
                opacity="0.3"
                width="12"
                height="2"
                rx="1"
                transform="matrix(-1 0 0 1 15.5 11)"
                fill="black"
              ></rect>
              <path
                d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z"
                fill="black"
              ></path>
              <path
                d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
                fill="#C4C4C4"
              ></path>
            </svg>
          </span>
          <!--end::Svg Icon-->
        </router-link>
        <!--begin::Menu 2-->
        <div
          class="
            menu
            menu-sub
            menu-sub-dropdown
            menu-column
            menu-rounded
            menu-gray-800
            menu-state-bg-light-primary
            fw-bold
            w-200px
          "
          data-kt-menu="true"
        >
          <!--begin::Menu item-->
          <div class="menu-item px-3">
            <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
              Quick Actions
            </div>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu separator-->
          <div class="separator mb-3 opacity-75"></div>
          <!--end::Menu separator-->
          <!--begin::Menu item-->
          <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">New Ticket</a>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu item-->
          <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">New Customer</a>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu item-->
          <div
            class="menu-item px-3"
            data-kt-menu-trigger="hover"
            data-kt-menu-placement="right-start"
          >
            <!--begin::Menu item-->
            <a href="#" class="menu-link px-3">
              <span class="menu-title">New Group</span>
              <span class="menu-arrow"></span>
            </a>
            <!--end::Menu item-->
            <!--begin::Menu sub-->
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">Admin Group</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">Staff Group</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">Member Group</a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu sub-->
          </div>
          <!--end::Menu item-->
          <!--begin::Menu item-->
          <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">New Contact</a>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu separator-->
          <div class="separator mt-3 opacity-75"></div>
          <!--end::Menu separator-->
          <!--begin::Menu item-->
          <div class="menu-item px-3">
            <div class="menu-content px-3 py-3">
              <a class="btn btn-primary btn-sm px-4" href="#"
                >Generate Reports</a
              >
            </div>
          </div>
          <!--end::Menu item-->
        </div>
        <!--end::Menu 2-->
      </div>
      <!--end::Menu-->
    </div>
    <!--end::Footer-->
  </div>
</template>
