<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
          <div v-if="all_basic" class="card mb-5 mb-xl-10">
								<div class="card-body pt-9 pb-0">
									<!--begin::Details-->
									<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
										<!--begin: Pic-->
										<div class="me-7 mb-4">
											<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
												<img src="assets/media/avatars/150-26.jpg" alt="image">
												<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
											</div>
										</div>
										<!--end::Pic-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<!--begin::Title-->
											<div class="d-flex justify-content-between align-items-start flex-wrap mb-2" style="margin-top: 90px;">
												<!--begin::User-->
												<div class="d-flex flex-column">
													<!--begin::Name-->
													<div class="d-flex align-items-center mb-2">
														<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{all_basic.name}}</a>
														<a href="#">
															<!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF"></path>
																	<path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade to Pro</a>
													</div>
													<!--end::Name-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
														<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
														<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
														<span class="svg-icon svg-icon-4 me-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black"></path>
																<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black"></path>
															</svg>
														</span>
														<!--end::Svg Icon-->{{all_basic.label}}</a>
														<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
														<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
														<span class="svg-icon svg-icon-4 me-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"></path>
																<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"></path>
															</svg>
														</span>
														<!--end::Svg Icon-->{{all_basic.location}}</a>
														<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
														<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
														<span class="svg-icon svg-icon-4 me-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black"></path>
																<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black"></path>
															</svg>
														</span>
														<!--end::Svg Icon-->max@kt.com</a>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
											
											</div>
											<!--end::Title-->
										
										</div>
										<!--end::Info-->
									</div>
									<!--end::Details-->
									
								</div>
							</div>
          <div
            v-if="genie_exist_contact"
            class="card mb-5 mb-xl-10"
            id="kt_profile_details_view"
          >
            <!--begin::Card header-->
            <div class="card-header cursor-pointer">
              <!--begin::Card title-->
              <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Primary Contact Details</h3>
              </div>
              <!--end::Card title-->
              <!--begin::Action-->
              <!-- <button
                @click.prevent="edit_contact()"
                class="btn btn-primary align-self-center"
              >
                Edit Profile
              </button> -->
              <!--end::Action-->
            </div>
            <!--begin::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9">
              <!--begin::Row-->
              <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Email</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                  <span class="fw-bolder fs-6 text-gray-800">
                    {{ genie_exist_contact.email }}</span
                  >
                </div>
                <!--end::Col-->
              </div>
              <!--end::Row-->

              <!--begin::Input group-->
              <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted"
                  >Contact Phone
                </label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 d-flex align-items-center">
                  <span
                    class="fw-bolder fs-6 text-gray-800 me-2"
                    >{{ genie_exist_contact.phone }}</span
                  >
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Website</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                  <a
                    href="#"
                    class="fw-bold fs-6 text-gray-800 text-hover-primary"
                    >{{ genie_exist_contact.website }}</a
                  >
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Address </label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                  <span class="fw-bolder fs-6 text-gray-800"
                    >{{ genie_exist_contact.address
                    }}<br />{{ genie_exist_contact.city }}
                    {{ genie_exist_contact.areacode }}<br />
                    {{ genie_exist_contact.country }}</span
                  >
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->

            
            </div>
            <!--end::Card body-->
          </div>
          <div v-if="all_social.length>0" class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div
              class="card-header border-0 cursor-pointer"
              role="button"
              data-bs-toggle="collapse"
              data-bs-target="#kt_account_connected_accounts"
              aria-expanded="true"
              aria-controls="kt_account_connected_accounts"
            >
              <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Connected Accounts</h3>
              </div>
            </div>
            <!--end::Card header-->
            <!--begin::Content-->
            <div id="kt_account_connected_accounts" class="collapse show">
              <!--begin::Card body-->
              <div class="card-body border-top p-9">
                <!--begin::Items-->
                <div class="py-2">
                  <!--begin::Item-->
                  <div
                    v-for="social in all_social"
                    :key="social.id"
                    class="d-flex flex-stack"
                  >
                    <div class="d-flex">
                      <img
                        v-if="social.network_id == 1"
                        src="https://img.icons8.com/color/48/000000/github--v1.png"
                        class="me-6"
                      />
                      <img
                        v-if="social.network_id == 5"
                        src="https://img.icons8.com/color/48/000000/slack.png"
                        class="me-6"
                      />
                      <!-- <img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt=""> -->
                      <img
                        v-if="social.network_id == 2"
                        src="https://img.icons8.com/color/48/000000/facebook-new.png"
                        class="me-6"
                      />
                      <img
                        v-if="social.network_id == 4"
                        src="https://img.icons8.com/color/48/000000/linkedin.png"
                        class="me-6"
                      />
                      <img
                        v-if="social.network_id == 6"
                        src="https://img.icons8.com/fluency/48/000000/dribbble.png"
                        class="me-6"
                      />
                      <img
                        v-if="social.network_id == 7"
                        src="https://img.icons8.com/color/48/000000/behance.png"
                        class="me-6"
                      />
                      <img
                        v-if="social.network_id == 3"
                        src="https://img.icons8.com/color/48/000000/twitter.png"
                        class="me-6"
                      />
                      <div class="d-flex flex-column">
                        <a
                          v-if="social.network_id == 1"
                          href="#"
                          class="fs-5 text-dark text-hover-primary fw-bolder"
                          >Github</a
                        >
                        <a
                          v-if="social.network_id == 2"
                          href="#"
                          class="fs-5 text-dark text-hover-primary fw-bolder"
                          >Facebook</a
                        >
                        <a
                          v-if="social.network_id == 3"
                          href="#"
                          class="fs-5 text-dark text-hover-primary fw-bolder"
                          >Twitter</a
                        >
                        <a
                          v-if="social.network_id == 4"
                          href="#"
                          class="fs-5 text-dark text-hover-primary fw-bolder"
                          >Linkedin</a
                        >
                        <a
                          v-if="social.network_id == 5"
                          href="#"
                          class="fs-5 text-dark text-hover-primary fw-bolder"
                          >Slack</a
                        >
                        <a
                          v-if="social.network_id == 6"
                          href="#"
                          class="fs-5 text-dark text-hover-primary fw-bolder"
                          >Dribble</a
                        >
                        <a
                          v-if="social.network_id == 7"
                          href="#"
                          class="fs-5 text-dark text-hover-primary fw-bolder"
                          >Behance</a
                        >
                        <div class="fs-6 fw-bold text-gray-400">
                          {{social.user_name}} @ {{social.url}}
                        </div>
                      </div>
                    </div>

                    <div class="d-flex justify-content-end">
                      <div v-if="social.status != 'inactive'">
                        <button
                          v-if="social.status=='active'"
                          
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_social(social.id,'0')"
                        >
                          <i class="far fa-eye"></i>
                        </button>
                        <button
                          v-if="social.status=='inactive'"
                          
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_social(social.id,'1')"
                        >
                          <i class="fas fa-eye-slash"></i>
                        </button>
                        <!-- <button
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_social(social.id,'2')"
                        >
                          <i class="fas fa-trash"></i>
                        </button> -->
                        <!-- <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_social(social.id)"
                        >
                          <i class="far fa-edit"></i>
                        </button> -->
                      </div>
                    </div>
                  </div>
                  <div class="separator separator-dashed my-5"></div>
                  <!--end::Item-->

                  <!--begin::Item-->
                </div>
                <!--end::Items-->
              </div>
              <!--end::Card body-->
            </div>
            <!--end::Content-->
          </div>
          <div v-if="all_work_exp.length > 0" class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header card-header-stretch pb-0">
              <!--begin::Title-->
              <div class="card-title">
                <img
                  class="me-6"
                  src="https://img.icons8.com/stickers/50/000000/work.png"
                />&nbsp;
                <h3 class="m-0">Work Experience(s)</h3>
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
            <!--begin::Tab content-->
            <div
              id="kt_billing_payment_tab_content"
              class="card-body tab-content"
            >
              <!--begin::Tab panel-->
              <div
                id="kt_billing_creditcard"
                class="tab-pane fade show active"
                role="tabpanel"
              >
                <!--begin::Title-->

                <!--end::Title-->
                <!--begin::Row-->
                <div class="row gx-9 gy-6">
                  <div
                    v-for="exp in all_work_exp"
                    :key="exp.id"
                    class="col-xl-6"
                  >
                    <!--begin::Card-->
                    <div class="card card-flush shadow-lg">
                      <div class="card-header ribbon ribbon-end ribbon-clip">
                        <button v-if="exp.status == 0" class="ribbon-label" @click.prevent="toggle_component(1,exp.id,'1')">
                          <i class="far fa-eye text-white"></i>
                          <span class="ribbon-inner bg-success"></span>
                        </button>
                        <button v-if="exp.status == 1" class="ribbon-label" @click.prevent="toggle_component(1,exp.id,'0')">
                          <i class="fas fa-eye-slash text-white"></i>
                          <span class="ribbon-inner bg-danger"></span>
                        </button>
                        <!-- <button v-if="exp.status == 2" class="ribbon-label">
                          <i class="fas fa-trash text-white"></i>
                          <span class="ribbon-inner bg-danger"></span>
                        </button> -->
                        <div class="card-title fw-bolder mb-1">
                          {{ exp.position  }} | {{ exp.company}}
                        </div>

                        <span class="fs-7"
                          >{{exp.website}}
                          <img
                            src="https://img.icons8.com/stickers/20/000000/marker.png"
                          />
                          {{ exp.location}}
                          <div class="badge badge-light-success fs-7 fw-bolder">
                            {{ exp.start_date}} to
                            <span v-if="exp.end_date">{{exp.end_date}}</span>
                            <span v-if="!exp.end_date">now</span>
                          </div>
                        </span>
                      </div>
                      <div class="card-body">
                        {{ exp.summary  }}
                      </div>

                      <!-- <div v-if="exp.status != 2" class="card-footer">
                        <button
                          v-if="exp.status==1"
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_work_exp(exp.id,'0')"
                        >
                          <i class="far fa-eye"></i>
                        </button>
                        <button
                          v-if="exp.status==0"
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_work_exp(exp.id,'1')"
                        >
                          <i class="fas fa-eye-slash"></i>
                        </button>
                        <button
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_work_exp(exp.id,'2')"
                        >
                          <i class="fas fa-trash"></i>
                        </button>
                        <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_work_exp(exp.id)"
                        >
                          <i class="far fa-edit"></i>
                        </button>
                      </div> -->
                    </div>

                    <!--end::Card-->
                  </div>

                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Tab panel-->
            </div>
            <!--end::Tab content-->
          </div>
          <div v-if="all_skill.length > 0" class="card mb-xl-8">
           <!--begin::Card header-->
            <div class="card-header card-header-stretch pb-0">
              <!--begin::Title-->
              <div class="card-title">
                <img
                  class="me-6"
                  src="https://img.icons8.com/stickers/50/000000/wizard.png"
                />&nbsp;
                <h3 class="m-0">Skill(s)</h3>
              </div>
              <!--end::Title-->
             
            </div>
            <!--end::Card header-->
            <!--begin::Body-->
            <div class="card-body py-3">
              <div class="tab-content">
                <!--begin::Tap pane-->
                <div
                  class="tab-pane fade show active"
                  id="kt_table_widget_5_tab_1"
                >
                  <!--begin::Table container-->
                  <div class="table-responsive">
                    <!--begin::Table-->
                    <table
                      class="
                        table table-row-dashed table-row-gray-200
                        align-middle
                        gs-0
                        gy-4
                      "
                    >
                      <!--begin::Table head-->
                      <thead>
                        <tr class="border-0">
                        <th class="p-0 min-w-150px"></th>
                         <th class="p-0 min-w-150px"></th>
                          <th class="p-0 min-w-150px"></th>
                         <th class="p-0 min-w-150px"></th>

                          <!-- <th class="p-0 min-w-150px"></th>
                          <th class="p-0 min-w-140px"></th>
                          <th class="p-0 min-w-110px"></th>
                          <th class="p-0 min-w-50px"></th> -->
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr v-for="skill in all_skill" :key="skill.id">
                         
                          <td class="text-start">
                            <a
                              href="#"
                              class="
                                text-dark
                                fw-bolder
                                text-hover-primary
                                mb-1
                                fs-6
                              "
                              >{{skill.name}}</a
                            >
                          </td>
                          <td >
                            <div
                              class="d-flex align-items-center ps-4"
                              id="kt_toolbar"
                            >
                              <div
                                id="kt_toolbar_slider"
                                class="
                                  noUi-target noUi-target-primary
                                  w-75px w-xxl-150px
                                  noUi-sm
                                  noUi-ltr
                                  noUi-horizontal
                                  noUi-txt-dir-ltr
                                "
                              >
                                <div class="noUi-base">
                                  <div class="noUi-connects">
                                    <div
                                      class="noUi-connect"
                                      style="
                                        transform: translate(0%, 0px)
                                          scale(0.555556, 1);
                                      "
                                    ></div>
                                  </div>
                                  <div
                                    class="noUi-origin"
                                    style="
                                      transform: translate(-444.444%, 0px);
                                      z-index: 4;
                                    "
                                  >
                                    <div
                                      class="noUi-handle noUi-handle-lower"
                                      data-handle="0"
                                      tabindex="0"
                                      role="slider"
                                      aria-orientation="horizontal"
                                      aria-valuemin="1.0"
                                      aria-valuemax="10.0"
                                      aria-valuenow="1.0"
                                      aria-valuetext="1.0"
                                    >
                                      <div class="noUi-touch-area"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              
                            </div>
                          </td>
                          <td>
                            <span
                                id="kt_toolbar_slider_value"
                                class="
                                  d-flex
                                  flex-center
                                  rounded-circle
                                  w-35px
                                  h-35px
                                  ms-4
                                  fs-7
                                  fw-bolder
                                  text-white
                                "
                                style="
                                  font-size: 20px !important;
                                  background-color: #218380;
                                "
                                >{{skill.level}}</span
                              >
                          </td>
                          <td class="text-center">
                            <button
                              v-if="skill.status == 0"
                              class="btn badge badge-success fs-7 ms-2"
                              @click.prevent="toggle_component(2,skill.id,'1')"
                              ><i class="far fa-eye text-white"></i
                            ></button>
                            <button
                              v-if="skill.status == 1"
                              class="btn badge badge-danger fs-7 ms-2"
                               @click.prevent="toggle_component(2,skill.id,'0')"
                            >
                              <i class="fas fa-eye-slash text-white"></i
                            ></button>
                            <!-- <span
                              v-if="skill.status == 2"
                              class="badge badge-danger fs-7 ms-2"
                            >
                              <i class="fas fa-trash text-white"></i
                            ></span> -->
                          </td>
                         
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
                <!--end::Tap pane-->
                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                  <!--begin::Table container-->
                  <div class="table-responsive">
                    <!--begin::Table-->
                    <table
                      class="
                        table table-row-dashed table-row-gray-200
                        align-middle
                        gs-0
                        gy-4
                      "
                    >
                      <!--begin::Table head-->
                      <thead>
                        <tr class="border-0">
                          <th class="p-0 w-50px"></th>
                          <th class="p-0 min-w-150px"></th>
                          <th class="p-0 min-w-140px"></th>
                          <th class="p-0 min-w-110px"></th>
                          <th class="p-0 min-w-50px"></th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr>
                          <td>
                            <div class="symbol symbol-45px me-2">
                              <span class="symbol-label">
                                <img
                                  src="assets/media/svg/brand-logos/plurk.svg"
                                  class="h-50 align-self-center"
                                  alt=""
                                />
                              </span>
                            </div>
                          </td>
                          <td>
                            <a
                              href="#"
                              class="
                                text-dark
                                fw-bolder
                                text-hover-primary
                                mb-1
                                fs-6
                              "
                              >Brad Simmons</a
                            >
                            <span class="text-muted fw-bold d-block"
                              >Movie Creator</span
                            >
                          </td>
                          <td class="text-end text-muted fw-bold">
                            React, HTML
                          </td>
                          <td class="text-end">
                            <span class="badge badge-light-success"
                              >Approved</span
                            >
                          </td>
                          <td class="text-end">
                            <a
                              href="#"
                              class="
                                btn
                                btn-sm
                                btn-icon
                                btn-bg-light
                                btn-active-color-primary
                              "
                            >
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                              <span class="svg-icon svg-icon-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                >
                                  <rect
                                    opacity="0.5"
                                    x="18"
                                    y="13"
                                    width="13"
                                    height="2"
                                    rx="1"
                                    transform="rotate(-180 18 13)"
                                    fill="black"
                                  ></rect>
                                  <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="black"
                                  ></path>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="symbol symbol-45px me-2">
                              <span class="symbol-label">
                                <img
                                  src="assets/media/svg/brand-logos/telegram.svg"
                                  class="h-50 align-self-center"
                                  alt=""
                                />
                              </span>
                            </div>
                          </td>
                          <td>
                            <a
                              href="#"
                              class="
                                text-dark
                                fw-bolder
                                text-hover-primary
                                mb-1
                                fs-6
                              "
                              >Popular Authors</a
                            >
                            <span class="text-muted fw-bold d-block"
                              >Most Successful</span
                            >
                          </td>
                          <td class="text-end text-muted fw-bold">
                            Python, MySQL
                          </td>
                          <td class="text-end">
                            <span class="badge badge-light-warning"
                              >In Progress</span
                            >
                          </td>
                          <td class="text-end">
                            <a
                              href="#"
                              class="
                                btn
                                btn-sm
                                btn-icon
                                btn-bg-light
                                btn-active-color-primary
                              "
                            >
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                              <span class="svg-icon svg-icon-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                >
                                  <rect
                                    opacity="0.5"
                                    x="18"
                                    y="13"
                                    width="13"
                                    height="2"
                                    rx="1"
                                    transform="rotate(-180 18 13)"
                                    fill="black"
                                  ></rect>
                                  <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="black"
                                  ></path>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="symbol symbol-45px me-2">
                              <span class="symbol-label">
                                <img
                                  src="assets/media/svg/brand-logos/bebo.svg"
                                  class="h-50 align-self-center"
                                  alt=""
                                />
                              </span>
                            </div>
                          </td>
                          <td>
                            <a
                              href="#"
                              class="
                                text-dark
                                fw-bolder
                                text-hover-primary
                                mb-1
                                fs-6
                              "
                              >Active Customers</a
                            >
                            <span class="text-muted fw-bold d-block"
                              >Movie Creator</span
                            >
                          </td>
                          <td class="text-end text-muted fw-bold">
                            AngularJS, C#
                          </td>
                          <td class="text-end">
                            <span class="badge badge-light-danger"
                              >Rejected</span
                            >
                          </td>
                          <td class="text-end">
                            <a
                              href="#"
                              class="
                                btn
                                btn-sm
                                btn-icon
                                btn-bg-light
                                btn-active-color-primary
                              "
                            >
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                              <span class="svg-icon svg-icon-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                >
                                  <rect
                                    opacity="0.5"
                                    x="18"
                                    y="13"
                                    width="13"
                                    height="2"
                                    rx="1"
                                    transform="rotate(-180 18 13)"
                                    fill="black"
                                  ></rect>
                                  <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="black"
                                  ></path>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
                <!--end::Tap pane-->
                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                  <!--begin::Table container-->
                  <div class="table-responsive">
                    <!--begin::Table-->
                    <table
                      class="
                        table table-row-dashed table-row-gray-200
                        align-middle
                        gs-0
                        gy-4
                      "
                    >
                      <!--begin::Table head-->
                      <thead>
                        <tr class="border-0">
                          <th class="p-0 w-50px"></th>
                          <th class="p-0 min-w-150px"></th>
                          <th class="p-0 min-w-140px"></th>
                          <th class="p-0 min-w-110px"></th>
                          <th class="p-0 min-w-50px"></th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr>
                          <td>
                            <div class="symbol symbol-45px me-2">
                              <span class="symbol-label">
                                <img
                                  src="assets/media/svg/brand-logos/kickstarter.svg"
                                  class="h-50 align-self-center"
                                  alt=""
                                />
                              </span>
                            </div>
                          </td>
                          <td>
                            <a
                              href="#"
                              class="
                                text-dark
                                fw-bolder
                                text-hover-primary
                                mb-1
                                fs-6
                              "
                              >Bestseller Theme</a
                            >
                            <span class="text-muted fw-bold d-block"
                              >Best Customers</span
                            >
                          </td>
                          <td class="text-end text-muted fw-bold">
                            ReactJS, Ruby
                          </td>
                          <td class="text-end">
                            <span class="badge badge-light-warning"
                              >In Progress</span
                            >
                          </td>
                          <td class="text-end">
                            <a
                              href="#"
                              class="
                                btn
                                btn-sm
                                btn-icon
                                btn-bg-light
                                btn-active-color-primary
                              "
                            >
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                              <span class="svg-icon svg-icon-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                >
                                  <rect
                                    opacity="0.5"
                                    x="18"
                                    y="13"
                                    width="13"
                                    height="2"
                                    rx="1"
                                    transform="rotate(-180 18 13)"
                                    fill="black"
                                  ></rect>
                                  <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="black"
                                  ></path>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="symbol symbol-45px me-2">
                              <span class="symbol-label">
                                <img
                                  src="assets/media/svg/brand-logos/bebo.svg"
                                  class="h-50 align-self-center"
                                  alt=""
                                />
                              </span>
                            </div>
                          </td>
                          <td>
                            <a
                              href="#"
                              class="
                                text-dark
                                fw-bolder
                                text-hover-primary
                                mb-1
                                fs-6
                              "
                              >Active Customers</a
                            >
                            <span class="text-muted fw-bold d-block"
                              >Movie Creator</span
                            >
                          </td>
                          <td class="text-end text-muted fw-bold">
                            AngularJS, C#
                          </td>
                          <td class="text-end">
                            <span class="badge badge-light-danger"
                              >Rejected</span
                            >
                          </td>
                          <td class="text-end">
                            <a
                              href="#"
                              class="
                                btn
                                btn-sm
                                btn-icon
                                btn-bg-light
                                btn-active-color-primary
                              "
                            >
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                              <span class="svg-icon svg-icon-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                >
                                  <rect
                                    opacity="0.5"
                                    x="18"
                                    y="13"
                                    width="13"
                                    height="2"
                                    rx="1"
                                    transform="rotate(-180 18 13)"
                                    fill="black"
                                  ></rect>
                                  <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="black"
                                  ></path>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="symbol symbol-45px me-2">
                              <span class="symbol-label">
                                <img
                                  src="assets/media/svg/brand-logos/vimeo.svg"
                                  class="h-50 align-self-center"
                                  alt=""
                                />
                              </span>
                            </div>
                          </td>
                          <td>
                            <a
                              href="#"
                              class="
                                text-dark
                                fw-bolder
                                text-hover-primary
                                mb-1
                                fs-6
                              "
                              >New Users</a
                            >
                            <span class="text-muted fw-bold d-block"
                              >Awesome Users</span
                            >
                          </td>
                          <td class="text-end text-muted fw-bold">
                            Laravel,Metronic
                          </td>
                          <td class="text-end">
                            <span class="badge badge-light-primary"
                              >Success</span
                            >
                          </td>
                          <td class="text-end">
                            <a
                              href="#"
                              class="
                                btn
                                btn-sm
                                btn-icon
                                btn-bg-light
                                btn-active-color-primary
                              "
                            >
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                              <span class="svg-icon svg-icon-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                >
                                  <rect
                                    opacity="0.5"
                                    x="18"
                                    y="13"
                                    width="13"
                                    height="2"
                                    rx="1"
                                    transform="rotate(-180 18 13)"
                                    fill="black"
                                  ></rect>
                                  <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="black"
                                  ></path>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="symbol symbol-45px me-2">
                              <span class="symbol-label">
                                <img
                                  src="assets/media/svg/brand-logos/telegram.svg"
                                  class="h-50 align-self-center"
                                  alt=""
                                />
                              </span>
                            </div>
                          </td>
                          <td>
                            <a
                              href="#"
                              class="
                                text-dark
                                fw-bolder
                                text-hover-primary
                                mb-1
                                fs-6
                              "
                              >Popular Authors</a
                            >
                            <span class="text-muted fw-bold d-block"
                              >Most Successful</span
                            >
                          </td>
                          <td class="text-end text-muted fw-bold">
                            Python, MySQL
                          </td>
                          <td class="text-end">
                            <span class="badge badge-light-warning"
                              >In Progress</span
                            >
                          </td>
                          <td class="text-end">
                            <a
                              href="#"
                              class="
                                btn
                                btn-sm
                                btn-icon
                                btn-bg-light
                                btn-active-color-primary
                              "
                            >
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                              <span class="svg-icon svg-icon-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                >
                                  <rect
                                    opacity="0.5"
                                    x="18"
                                    y="13"
                                    width="13"
                                    height="2"
                                    rx="1"
                                    transform="rotate(-180 18 13)"
                                    fill="black"
                                  ></rect>
                                  <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="black"
                                  ></path>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </a>
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
          <div v-if="all_project.length > 0" class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header card-header-stretch pb-0">
              <!--begin::Title-->
              <div class="card-title">
                  <img
                  class="me-6"
                  src="https://img.icons8.com/stickers/50/000000/repository.png"
                />&nbsp;
                <h3 class="m-0">Project(s)</h3>
              </div>
              <!--end::Title-->
              
            </div>
            <!--end::Card header-->
            <!--begin::Tab content-->
            <div
              id="kt_billing_payment_tab_content"
              class="card-body tab-content"
            >
              <!--begin::Tab panel-->
              <div
                id="kt_billing_creditcard"
                class="tab-pane fade show active"
                role="tabpanel"
              >
                <!--begin::Title-->

                <!--end::Title-->
                <!--begin::Row-->
                <div class="row gx-9 gy-6">
               
                  <div
                    v-for="project in all_project"
                    :key="project.id"
                    class="col-xl-6"
                  >
                    <!--begin::Card-->
                    <div class="card card-flush shadow-lg">
                      <div class="card-header ribbon ribbon-end ribbon-clip">
                        <button v-if="project.status == 0" class="ribbon-label"  @click.prevent="toggle_component(3,project.id,'1')">
                          <i class="far fa-eye text-white"></i>
                          <span class="ribbon-inner bg-success"></span>
                        </button>
                        <button v-if="project.status == 1" class="ribbon-label" @click.prevent="toggle_component(3,project.id,'0')">
                          <i class="fas fa-eye-slash text-white"></i>
                          <span class="ribbon-inner bg-danger"></span>
                        </button>
                        <button v-if="project.status == 2" class="ribbon-label">
                          <i class="fas fa-trash text-white"></i>
                          <span class="ribbon-inner bg-danger"></span>
                        </button>
                        <div class="card-title fw-bolder mb-1">
                          {{ project.name  }} | {{ project.company_name}}
                        </div>

                        <span class="fs-7"
                          >{{project.url}}
                          <div class="badge badge-light-success fs-7 fw-bolder">
                            {{ project.start_date}} -
                            <span
                              v-if="project.end_date"
                              >{{project.end_date}}</span
                            >
                            <span v-if="!project.end_date">now</span>
                          </div>
                        </span>
                      </div>
                      <div class="card-body">
                        {{ project.summary  }}
                      </div>

                      <!-- <div v-if="project.status != 2" class="card-footer">
                        <button
                          v-if="project.status==1"
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_project(project.id,'0')"
                        >
                          <i class="far fa-eye"></i>
                        </button>
                        <button
                          v-if="project.status==0"
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_project(project.id,'1')"
                        >
                          <i class="fas fa-eye-slash"></i>
                        </button>
                        <button
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_project(project.id,'2')"
                        >
                          <i class="fas fa-trash"></i>
                        </button>
                        <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_project(project.id)"
                        >
                          <i class="far fa-edit"></i>
                        </button>
                      </div> -->
                    </div>

                    <!--end::Card-->
                  </div>

                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Tab panel-->
            
            </div>
            <!--end::Tab content-->
          </div>
          <div v-if="all_award.length > 0" class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header card-header-stretch pb-0">
              <!--begin::Title-->
              <div class="card-title">
                 <img
                  class="me-6"
                  src="https://img.icons8.com/stickers/50/000000/medal.png"
                />&nbsp;
                <h3 class="m-0">Awards and Achievements</h3>
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
            <!--begin::Tab content-->
            <div
              id="kt_billing_payment_tab_content"
              class="card-body tab-content"
            >
              <!--begin::Tab panel-->
              <div
                id="kt_billing_creditcard"
                class="tab-pane fade show active"
                role="tabpanel"
              >
                <!--begin::Title-->

                <!--end::Title-->
                <!--begin::Row-->
                <div class="row gx-9 gy-6">
                 
                  <div
                    v-for="award in all_award"
                    :key="award.id"
                    class="col-xl-6"
                  >
                    <!--begin::Card-->
                    <div class="card card-flush shadow-lg">
                      <div class="card-header ribbon ribbon-end ribbon-clip">
                        <button v-if="award.status == 0" class="ribbon-label" @click.prevent="toggle_component(4,award.id,'1')">
                          <i class="far fa-eye text-white"></i>
                          <span class="ribbon-inner bg-success"></span>
                        </button>
                        <button v-if="award.status == 1" class="ribbon-label" @click.prevent="toggle_component(4,award.id,'0')">
                          <i class="fas fa-eye-slash text-white"></i>
                          <span class="ribbon-inner bg-danger"></span>
                        </button>
                        <!-- <button v-if="award.status == 2" class="ribbon-label">
                          <i class="fas fa-trash text-white"></i>
                          <span class="ribbon-inner bg-danger"></span>
                        </button> -->
                        <div class="card-title fw-bolder mb-5">
                          {{ award.title  }} | By- {{ award.awarder}}
                        </div>

                        <span class="fs-7"
                          >{{award.url}}
                          <div class="badge badge-light-success fs-7 fw-bolder">
                            {{ award.date}}
                          </div>
                        </span>
                      </div>
                      <div class="card-body">
                        {{ award.summary  }}
                      </div>

                     
                    </div>

                    <!--end::Card-->
                  </div>

                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Tab panel-->
            </div>
            <!--end::Tab content-->
          </div>
          <div v-if="all_education.length > 0" class="card mb-xl-8">
            <div class="card mb-5 mb-xl-10">
              <!--begin::Card header-->
              <div class="card-header">
                <!--begin::Title-->
                <div class="card-title">
                    <img
                  class="me-6"
                  src="https://img.icons8.com/stickers/50/000000/graduation-cap.png"
                />&nbsp;
                  <h3>Education(s)</h3>
                </div>
                <!--end::Title-->
              </div>
              <!--end::Card header-->
              <!--begin::Card body-->
              <div class="card-body">
                <!--begin::Addresses-->
                <div class="row gx-9 gy-6">
                
                  <!--begin::Col-->
                  <div
                    v-for="edu in all_education"
                    :key="edu.id"
                    class="col-xl-4"
                  >
                    <!--begin::Address-->
                    <div
                      class="
                        card card-flush
                        shadow-lg
                        h-xl-100
                        flex-row flex-stack flex-wrap
                        p-6
                      "
                    >
                      <!--begin::Details-->
                      <div class="d-flex flex-column py-2">
                        <div
                          class="d-flex align-items-center fs-5 fw-bolder mb-5"
                        >
                          {{ edu.institution  }}
                          <button
                            v-if="edu.status == 0"  @click.prevent="toggle_component(5,edu.id,'1')"
                            class="badge badge-success fs-7 ms-2"
                            ><i class="far fa-eye text-white"></i
                          ></button>
                          <button
                            v-if="edu.status == 1"
                            class="badge badge-danger fs-7 ms-2" @click.prevent="toggle_component(5,edu.id,'0')"
                          >
                            <i class="fas fa-eye-slash text-white"></i
                          ></button>
                          <button
                            v-if="edu.status == 2"
                            class="badge badge-danger fs-7 ms-2" 
                          >
                            <i class="fas fa-trash text-white"></i
                          ></button>
                        </div>
                        <div class="fs-6 fw-bold text-gray-600">
                          {{ edu.area  }}
                          ({{ edu.studyType  }}) <br />{{ edu.start_date}} -
                          {{edu.end_date}} @ {{edu.score}}
                        </div>
                      </div>
                      <!--end::Details-->
                     
                    </div>
                    <!--end::Address-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Addresses-->
              </div>
              <!--end::Card body-->
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
			 all_basic: [],
      genie_exist_contact: [],
             all_social: [],

			all_skill: [],


            errors: [],
        };
    },
     methods: {

       async toggle_component(component,component_id,status)
       {
         console.log(component,component_id,status);
          const toggle_req = {component_id:component_id , status:status , resume_id:this.$route.params.resume_id ,component:component}
          await API.ToggleGenieComponent(toggle_req).then((result) => {


              // this.genie_work = this.all_work_exp[work_id-1];
              if(component == 1)
              {
                this.all_work_exp[component_id-1].status = status;
              }
               if(component == 2)
              {
                this.all_skill[component_id-1].status = status;
              }
               if(component == 3)
              {
                this.all_project[component_id-1].status = status;
              }
                if(component == 4)
              {
                this.all_award[component_id-1].status = status;
              }
                if(component == 5)
              {
                this.all_education[component_id-1].status = status;
              }
              
            //   this.all_work_exp = res.data.work_experience;

            })
       },





        async toogle_social(social_id,status)
      {




        const social = {toogle_social_id:social_id , status:status, resume_id:this.$route.params.resume_id ,component:2}
          await API.ToggleGenieSocial(social).then((res) => {


               this.genie_social = this.all_social[social_id-1];
              this.all_social[social_id-1].status = status;


            })


      },
       async toogle_work_exp(work_id,status)
      {




        const work_exp = {toogle_work_id:work_id , status:status , resume_id:this.$route.params.resume_id ,component:1}
          await API.ToggleGenieWork(work_exp).then((result) => {


              // this.genie_work = this.all_work_exp[work_id-1];
              this.all_work_exp[work_id-1].status = status;
            //   this.all_work_exp = res.data.work_experience;

            })


      },
        async toogle_skill(skill_id,status)
      {


        const skill = {toogle_skill_id:skill_id , status:status}
          await API.ToggleGenieSkill(skill).then((result) => {


              // this.genie_skill = this.all_skill[skill_id-1];
              this.all_skill[skill_id-1].status = status;
			//   this.all_skill= res.data.skill;

            })


      },
       async toogle_project(project_id,status)
      {




        const project = {toogle_project_id:project_id , status:status}
          await API.ToggleGenieProject(project).then((result) => {


              // this.genie_project = this.all_project[project_id-1];
              this.all_project[project_id-1].status = status;
                this.all_project= res.data.project;

            })


      },
        async toogle_education(edu_id,status)
      {




        const work_exp = {toogle_edu_id:edu_id , status:status}
          await API.ToggleGenieEducation(work_exp).then((result) => {


              // this.genie_education = this.all_education[edu_id-1];
              this.all_education[edu_id-1].status = status;
               this.all_education = res.data.education;


            })


      },
      async toogle_award(award_id,status)
      {

          const award = {toogle_award_id:award_id , status:status}
          await API.ToggleGenieAward(award).then((result) => {


              // this.genie_work = this.all_work_exp[work_id-1];
              this.all_award[award_id-1].status = status;
                this.all_award= res.data.award;

            })


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
		 await API.GetAllActiveCompo().then((result) => {


                this.all_work_exp = result.data.work;
				this.all_education = result.data.education;
				this.all_project = result.data.project;
				this.all_skill = result.data.skill;
				this.all_award = result.data.award;
				this.all_basic = result.data.basic;
        this.all_social = result.data.social;
        this.genie_exist_contact = result.data.contact;




            })
	}
};
</script>
