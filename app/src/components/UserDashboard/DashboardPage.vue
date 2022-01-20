<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
          <div class="card mb-5 mb-xl-10">
            <!-- style="margin-top:150px;" -->
            <div class="card-body pt-9 pb-0">
              <!--begin::Details-->
              <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                <!--begin: Pic-->
                <div class="me-7 mb-4">
                  <div
                    class="
                      symbol symbol-100px symbol-lg-160px symbol-fixed
                      position-relative
                    "
                    style="margin-left: 25px"
                  >
                    <img
                      src="https://img.icons8.com/stickers/80/000000/gender-neutral-user-skin-type-1.png"
                    />
                  </div>
                  <div
                    class="d-flex align-items-center mb-2"
                    style="margin-left: 30px"
                  >
                    <a
                      href="#"
                      class="
                        text-gray-900 text-hover-primary
                        fs-2
                        fw-bolder
                        me-1
                      "
                      >{{all_basic.name}}</a
                    >
                  </div>
                  <!--end::Name-->
                  <!--begin::Info-->
                  <div
                    class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2"
                    style="margin-left: 25px"
                  >
                    <a
                      href="#"
                      class="
                        d-flex
                        align-items-center
                        text-gray-400 text-hover-primary
                        me-5
                        mb-2
                      "
                    >
                      <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                      <span class="svg-icon svg-icon-4 me-1">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            opacity="0.3"
                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                            fill="black"
                          ></path>
                          <path
                            d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                            fill="black"
                          ></path>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->{{all_basic.label}}</a
                    >
                    <a
                      href="#"
                      class="
                        d-flex
                        align-items-center
                        text-gray-400 text-hover-primary
                        me-5
                        mb-2
                      "
                    >
                      <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                      <span class="svg-icon svg-icon-4 me-1">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            opacity="0.3"
                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                            fill="black"
                          ></path>
                          <path
                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                            fill="black"
                          ></path>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->{{all_basic.location}}</a
                    >
                    <a
                      href="#"
                      class="
                        d-flex
                        align-items-center
                        text-gray-400 text-hover-primary
                        mb-2
                      "
                    >
                      <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                      <span class="svg-icon svg-icon-4 me-1">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            opacity="0.3"
                            d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                            fill="black"
                          ></path>
                          <path
                            d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                            fill="black"
                          ></path>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->max@kt.com</a
                    >
                  </div>
                  <!--end::Info-->
                </div>

                <!--end::Pic-->
                <!--begin::Info-->
                <div class="flex-grow-1" style="margin-left: 60px">
                  <!--begin::Stats-->
                  <div class="d-flex flex-wrap flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1 pe-8">
                      <!--begin::Stats-->
                      <div class="d-flex flex-wrap">
                        <!--begin::Stat-->
                        <router-link
                          :to="{ name: 'GenieBasic' }"
                          title=""
                          data-bs-toggle="tooltip"
                          data-bs-trigger="hover"
                          data-bs-dismiss="click"
                          data-bs-placement="top"
                          data-bs-original-title="The Basics"
                        >
                          <div
                            class="
                              border border-gray-300 border-dashed
                              rounded
                              min-w-125px
                              py-3
                              px-4
                              me-6
                              mb-3
                            "
                          >
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                              <span
                                class="
                                  svg-icon svg-icon-3 svg-icon-success
                                  me-2
                                "
                              >
                                <img
                                  src="https://img.icons8.com/stickers/80/000000/user-location.png"
                                />
                              </span>
                              <!--end::Svg Icon-->
                              <!-- <div class="fs-2 fw-bolder counted" data-kt-countup="true" :data-kt-countup-value="all_education.length" data-kt-countup-prefix="">{{all_education.length}}</div> -->
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-6 text-center text-gray-600">
                              The Basics
                            </div>
                            <!--end::Label-->
                          </div>
                        </router-link>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <router-link
                          :to="{ name: 'GenieContact' }"
                          title=""
                          data-bs-toggle="tooltip"
                          data-bs-trigger="hover"
                          data-bs-dismiss="click"
                          data-bs-placement="top"
                          data-bs-original-title="Contact"
                        >
                          <div
                            class="
                              border border-gray-300 border-dashed
                              rounded
                              min-w-125px
                              py-3
                              px-4
                              me-6
                              mb-3
                            "
                          >
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                              <span
                                class="
                                  svg-icon svg-icon-3 svg-icon-success
                                  me-2
                                "
                              >
                                <img
                                  src="https://img.icons8.com/stickers/80/000000/email.png"
                                />
                              </span>
                              <!--end::Svg Icon-->
                              <!-- <div class="fs-2 fw-bolder counted" data-kt-countup="true" :data-kt-countup-value="all_education.length" data-kt-countup-prefix="">{{all_education.length}}</div> -->
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-6 text-center text-gray-600">
                              Contact
                            </div>
                            <!--end::Label-->
                          </div>
                        </router-link>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <router-link
                          :to="{ name: 'GenieSocial' }"
                          title=""
                          data-bs-toggle="tooltip"
                          data-bs-trigger="hover"
                          data-bs-dismiss="click"
                          data-bs-placement="top"
                          data-bs-original-title="Social"
                        >
                          <div
                            class="
                              border border-gray-300 border-dashed
                              rounded
                              min-w-125px
                              py-3
                              px-4
                              me-6
                              mb-3
                            "
                          >
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                              <span
                                class="
                                  svg-icon svg-icon-3 svg-icon-success
                                  me-2
                                "
                              >
                                <img
                                  src="https://img.icons8.com/stickers/80/000000/happy-cloud.png"
                                />
                              </span>
                              <!--end::Svg Icon-->
                              <div
                                class="fs-2 fw-bolder counted"
                                data-kt-countup="true"
                                :data-kt-countup-value="all_social.length"
                                data-kt-countup-prefix=""
                              >
                                {{all_social.length}}
                              </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-6 text-center text-gray-600">
                              Social
                            </div>
                            <!--end::Label-->
                          </div>
                        </router-link>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <router-link
                          :to="{ name: 'GenieExperience' }"
                          title=""
                          data-bs-toggle="tooltip"
                          data-bs-trigger="hover"
                          data-bs-dismiss="click"
                          data-bs-placement="top"
                          data-bs-original-title="Work Experience"
                        >
                          <div
                            class="
                              border border-gray-300 border-dashed
                              rounded
                              min-w-125px
                              py-3
                              px-4
                              me-6
                              mb-3
                            "
                          >
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                              <span
                                class="
                                  svg-icon svg-icon-3 svg-icon-success
                                  me-2
                                "
                              >
                                <img
                                  src="https://img.icons8.com/stickers/80/000000/work.png"
                                />
                              </span>
                              <!--end::Svg Icon-->
                              <div
                                class="fs-2 fw-bolder counted"
                                data-kt-countup="true"
                                :data-kt-countup-value="all_work_exp.length"
                                data-kt-countup-prefix=""
                              >
                                {{all_work_exp.length}}
                              </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-6 text-center text-gray-600">
                              Work Ex
                            </div>
                            <!--end::Label-->
                          </div>
                        </router-link>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <router-link
                          :to="{ name: 'GenieSkill' }"
                          title=""
                          data-bs-toggle="tooltip"
                          data-bs-trigger="hover"
                          data-bs-dismiss="click"
                          data-bs-placement="top"
                          data-bs-original-title="Skills"
                        >
                          <div
                            class="
                              border border-gray-300 border-dashed
                              rounded
                              min-w-125px
                              py-3
                              px-4
                              me-6
                              mb-3
                            "
                          >
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                              <span
                                class="
                                  svg-icon svg-icon-3 svg-icon-success
                                  me-2
                                "
                              >
                                <img
                                  src="https://img.icons8.com/stickers/80/000000/wizard.png"
                                />
                              </span>
                              <!--end::Svg Icon-->
                              <div
                                class="fs-2 fw-bolder counted"
                                data-kt-countup="true"
                                :data-kt-countup-value="all_skill.length"
                                data-kt-countup-prefix=""
                              >
                                {{all_skill.length}}
                              </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-6 text-center text-gray-600">
                              Skills
                            </div>
                            <!--end::Label-->
                          </div>
                        </router-link>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <router-link
                          :to="{ name: 'GenieProject' }"
                          title=""
                          data-bs-toggle="tooltip"
                          data-bs-trigger="hover"
                          data-bs-dismiss="click"
                          data-bs-placement="top"
                          data-bs-original-title="Projects"
                        >
                          <div
                            class="
                              border border-gray-300 border-dashed
                              rounded
                              min-w-125px
                              py-3
                              px-4
                              me-6
                              mb-3
                            "
                          >
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                              <span
                                class="
                                  svg-icon svg-icon-3 svg-icon-success
                                  me-2
                                "
                              >
                                <img
                                  src="https://img.icons8.com/stickers/80/000000/repository.png"
                                />
                              </span>
                              <!--end::Svg Icon-->
                              <div
                                class="fs-2 fw-bolder counted"
                                data-kt-countup="true"
                                :data-kt-countup-value="all_project.length"
                                data-kt-countup-prefix=""
                              >
                                {{all_project.length}}
                              </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-6 text-center text-gray-600">
                              Projects
                            </div>
                            <!--end::Label-->
                          </div>
                        </router-link>
                        <!--end::Stat-->
                        <router-link
                          :to="{ name: 'GenieAward' }"
                          title=""
                          data-bs-toggle="tooltip"
                          data-bs-trigger="hover"
                          data-bs-dismiss="click"
                          data-bs-placement="top"
                          data-bs-original-title="Awards"
                        >
                          <!--begin::Stat-->
                          <div
                            class="
                              border border-gray-300 border-dashed
                              rounded
                              min-w-125px
                              py-3
                              px-4
                              me-6
                              mb-3
                            "
                          >
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                              <span
                                class="
                                  svg-icon svg-icon-3 svg-icon-success
                                  me-2
                                "
                              >
                                <img
                                  src="https://img.icons8.com/stickers/80/000000/medal.png"
                                />
                              </span>
                              <!--end::Svg Icon-->
                              <div
                                class="fs-2 fw-bolder counted"
                                data-kt-countup="true"
                                :data-kt-countup-value="all_award.length"
                                data-kt-countup-prefix=""
                              >
                                {{all_award.length}}
                              </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-6 text-center text-gray-600">
                              Awards
                            </div>
                            <!--end::Label-->
                          </div>
                        </router-link>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <router-link
                          :to="{ name: 'GenieLanguage' }"
                          title=""
                          data-bs-toggle="tooltip"
                          data-bs-trigger="hover"
                          data-bs-dismiss="click"
                          data-bs-placement="top"
                          data-bs-original-title="Language"
                        >
                          <div
                            class="
                              border border-gray-300 border-dashed
                              rounded
                              min-w-125px
                              py-3
                              px-4
                              me-6
                              mb-3
                            "
                          >
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                              <span
                                class="
                                  svg-icon svg-icon-3 svg-icon-success
                                  me-2
                                "
                              >
                                <img
                                  src="https://img.icons8.com/stickers/80/000000/foreign-language-sound.png"
                                />
                              </span>
                              <!--end::Svg Icon-->
                              <div
                                class="fs-2 fw-bolder counted"
                                data-kt-countup="true"
                                :data-kt-countup-value="all_langugae.length"
                                data-kt-countup-prefix=""
                              >
                                {{all_langugae.length}}
                              </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-6 text-center text-gray-600">
                              Languages
                            </div>
                            <!--end::Label-->
                          </div>
                        </router-link>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <router-link
                          :to="{ name: 'GenieInterest' }"
                          title=""
                          data-bs-toggle="tooltip"
                          data-bs-trigger="hover"
                          data-bs-dismiss="click"
                          data-bs-placement="top"
                          data-bs-original-title="Interest"
                        >
                          <div
                            class="
                              border border-gray-300 border-dashed
                              rounded
                              min-w-125px
                              py-3
                              px-4
                              me-6
                              mb-3
                            "
                          >
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                              <span
                                class="svg-icon svg-icon-3 svg-icon-danger me-2"
                              >
                                <img
                                  src="https://img.icons8.com/stickers/80/000000/watering-can.png"
                                />
                              </span>

                              <!--end::Svg Icon-->
                              <div
                                class="fs-2 fw-bolder counted"
                                data-kt-countup="true"
                                :data-kt-countup-value="all_interest.length"
                              >
                                {{ all_interest.length }}
                              </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-6 text-center text-gray-600">
                              Interests
                            </div>
                            <!--end::Label-->
                          </div>
                        </router-link>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <router-link
                          :to="{ name: 'GenieEducation' }"
                          title=""
                          data-bs-toggle="tooltip"
                          data-bs-trigger="hover"
                          data-bs-dismiss="click"
                          data-bs-placement="top"
                          data-bs-original-title="Eduall_projectcation"
                        >
                          <div
                            class="
                              border border-gray-300 border-dashed
                              rounded
                              min-w-125px
                              py-3
                              px-4
                              me-6
                              mb-3
                            "
                          >
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                              <span
                                class="svg-icon svg-icon-3 svg-icon-danger me-2"
                              >
                                <img
                                  src="https://img.icons8.com/stickers/80/000000/graduation-cap.png"
                                />
                              </span>
                              <!--end::Svg Icon-->
                              <div
                                class="fs-2 fw-bolder counted"
                                data-kt-countup="true"
                                :data-kt-countup-value="all_education.length"
                              >
                                {{ all_education.length }}
                              </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-6 text-center text-gray-600">
                              Education
                            </div>
                            <!--end::Label-->
                          </div>
                        </router-link>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <router-link
                          :to="{ name: 'GenieVolunteer' }"
                          title=""
                          data-bs-toggle="tooltip"
                          data-bs-trigger="hover"
                          data-bs-dismiss="click"
                          data-bs-placement="top"
                          data-bs-original-title="Volunteer"
                        >
                          <div
                            class="
                              border border-gray-300 border-dashed
                              rounded
                              min-w-125px
                              py-3
                              px-4
                              me-6
                              mb-3
                            "
                          >
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                              <span
                                class="svg-icon svg-icon-3 svg-icon-danger me-2"
                              >
                                <img
                                  src="https://img.icons8.com/stickers/80/000000/trust.png"
                                />
                              </span>
                              <!--end::Svg Icon-->
                              <div
                                class="fs-2 fw-bolder counted"
                                data-kt-countup="true"
                                :data-kt-countup-value="all_volunteer.length"
                              >
                                {{ all_volunteer.length }}
                              </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-6 text-center text-gray-600">
                              Volunteer
                            </div>
                            <!--end::Label-->
                          </div>
                        </router-link>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <router-link
                          :to="{ name: 'GenieReference' }"
                          title=""
                          data-bs-toggle="tooltip"
                          data-bs-trigger="hover"
                          data-bs-dismiss="click"
                          data-bs-placement="top"
                          data-bs-original-title="Reference"
                        >
                          <div
                            class="
                              border border-gray-300 border-dashed
                              rounded
                              min-w-125px
                              py-3
                              px-4
                              me-6
                              mb-3
                            "
                          >
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                              <span
                                class="
                                  svg-icon svg-icon-3 svg-icon-success
                                  me-2
                                "
                              >
                                <img
                                  src="https://img.icons8.com/stickers/80/000000/handshake.png"
                                />
                              </span>
                              <!--end::Svg Icon-->
                              <div
                                class="fs-2 fw-bolder counted"
                                data-kt-countup="true"
                                :data-kt-countup-value="all_reference.length"
                              >
                                {{ all_reference.length }}
                              </div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold fs-6 text-center text-gray-600">
                              References
                            </div>
                            <!--end::Label-->
                          </div>
                        </router-link>
                        <!--end::Stat-->
                      </div>
                      <!--end::Stats-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Stats-->
                </div>
                <!--end::Info-->
              </div>
              <!--end::Details-->
            </div>
          </div>
          <div v-if="!all_basic" class="card mb-5 mb-xl-10">
            <div
              class="
                card
                bgi-position-y-bottom
                bgi-position-x-end
                bgi-no-repeat
                bgi-size-cover
                min-h-250px
                bg-primary
                mb-5 mb-xl-8
              "
              style="
                background-position: 100% 50px;
                background-size: 500px auto;
                background-image: url('./theme/dist/assets/media/misc/city.png');
              "
            >
              <!--begin::Body-->
              <div class="card-body d-flex flex-column justify-content-center">
                <!--begin::Title-->
                <h3 class="text-white fs-2x fw-bolder line-height-lg mb-5">
                  One step away from a better resume <br />because that resume
                  is your entry-ticket <br />
                  to the job interview
                </h3>
                <!--end::Title-->
                <!--begin::Action-->
                <div class="m-0">
                  <router-link
                    :to="{name : 'GenieBasic'}"
                    class="btn btn-success fw-bold px-6 py-3"
                    >Create an resume</router-link
                  >
                </div>
                <!--begin::Action-->
              </div>
              <!--end::Body-->
            </div>
          </div>
        </div>
        <!--end::Container-->
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

			 all_work_exp: [],
			 all_education: [],
			 all_project: [],
			 all_award: [],
			 all_volunteer: [],
			  all_skill: [],
			   all_reference: [],
			    all_interest: [],
			 	all_basic: [],
				 all_social: [],
				  all_langugae: [],
			all_skill: [],
			all_contact: [],


            errors: [],
        };
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
		 await API.GetAllActiveCompo().then((result) => {


                this.all_work_exp = result.data.work;
				this.all_education = result.data.education;
				this.all_project = result.data.project;
				this.all_skill = result.data.skill;
				this.all_award = result.data.award;
				this.all_basic = result.data.basic;
				this.all_reference = result.data.reference;
				this.all_volunteer = result.data.volunteer;
				this.all_interest = result.data.interest;
				this.all_contact = result.data.contact;
				this.all_social = result.data.social;
				this.all_langugae = result.data.language;




            })
	}
};
</script>
