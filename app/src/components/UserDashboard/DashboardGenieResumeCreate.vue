<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
      
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
             <!-- <button type="button" class="js-swal-success btn btn-success" @click.prevent="GenerateResume">Download</button> -->
          <div v-if="all_social.length >0" class="card mb-xl-6">
            <!--begin::Card header-->
            <div class="card-header card-header-stretch pb-0">
              <!--begin::Title-->
              <div class="card-title">
                <img
                  class="me-6"
                  src="https://img.icons8.com/stickers/50/000000/happy-cloud.png"
                />&nbsp;
                <h3 class="m-0">Social Account(s)</h3>
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
                          <th class="p-0 w-50px"></th>
                          <th class="p-0 min-w-150px"></th>
                          <th class="p-0 min-w-140px"></th>
                          <!-- <th class="p-0 min-w-110px"></th> -->
                          <th class="p-0 min-w-50px"></th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr v-for="social in all_social" :key="social.id">
                          <td>
                            <div class="symbol symbol-45px me-2">
                              <span class="symbol-label">
                                <img
                                  v-if="social.network_id == 1"
                                  src="https://img.icons8.com/color/48/000000/github--v1.png"
                                  class="align-self-center"
                                />
                                <img
                                  v-if="social.network_id == 5"
                                  src="https://img.icons8.com/color/48/000000/slack.png"
                                  class="align-self-center"
                                />
                                <!-- <img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt=""> -->
                                <img
                                  v-if="social.network_id == 2"
                                  src="https://img.icons8.com/color/48/000000/facebook-new.png"
                                  class="align-self-center"
                                />
                                <img
                                  v-if="social.network_id == 4"
                                  src="https://img.icons8.com/color/48/000000/linkedin.png"
                                  class="align-self-center"
                                />
                                <img
                                  v-if="social.network_id == 6"
                                  src="https://img.icons8.com/fluency/48/000000/dribbble.png"
                                  class="align-self-center"
                                />
                                <img
                                  v-if="social.network_id == 7"
                                  src="https://img.icons8.com/color/48/000000/behance.png"
                                  class="align-self-center"
                                />
                                <img
                                  v-if="social.network_id == 3"
                                  src="https://img.icons8.com/color/48/000000/twitter.png"
                                  class="align-self-center"
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
                              >{{social.user_name}}</a
                            >

                            <span
                              class="text-muted fw-bold d-block"
                              v-if="social.network_id == 1"
                              href="#"
                              >Github</span
                            >
                            <span
                              class="text-muted fw-bold d-block"
                              v-if="social.network_id == 2"
                              href="#"
                              >Facebook</span
                            >
                            <span
                              class="text-muted fw-bold d-block"
                              v-if="social.network_id == 3"
                              href="#"
                              >Twitter</span
                            >
                            <span
                              class="text-muted fw-bold d-block"
                              v-if="social.network_id == 4"
                              href="#"
                              >Linkedin</span
                            >
                            <span
                              class="text-muted fw-bold d-block"
                              v-if="social.network_id == 5"
                              href="#"
                              >Slack</span
                            >
                            <span
                              class="text-muted fw-bold d-block"
                              v-if="social.network_id == 6"
                              href="#"
                              >Dribble</span
                            >
                            <span
                              class="text-muted fw-bold d-block"
                              v-if="social.network_id == 7"
                              href="#"
                              >Behance</span
                            >
                          </td>
                          <td class="text-muted fw-bold">{{social.url}}</td>
                          <!-- <td class="text-end">
                                        <span class="badge badge-light-success">Approved</span>
                                      </td> -->
                          <td class="text-end">
                            <a
                              v-if="social.com_status == 'active'"
                              href="javascript:void(0)"
                              @click.prevent="toggle_component(3,social.id,'inactive')"
                            >
                              <img
                                src="https://img.icons8.com/stickers/40/000000/checked.png"
                              />
                            </a>

                            <a
                              v-if="social.com_status == 'inactive'"
                              href="javascript:void(0)"
                              @click.prevent="toggle_component(3,social.id,'active')"
                            >
                              <img
                                src="https://img.icons8.com/stickers/40/000000/minus.png"
                              />
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
                        <a
                          v-if="exp.com_status == 'active'"
                          class="ribbon-label"
                          href="javascript:void(0)"
                          @click.prevent="toggle_component(4,exp.id,'inactive')"
                        >
                          <img
                            src="https://img.icons8.com/stickers/30/000000/checked.png"
                          />
                          <span class="ribbon-inner bg-secondary"></span>
                        </a>
                        <a
                          v-if="exp.com_status == 'inactive'"
                          class="ribbon-label"
                          href="javascript:void(0)"
                          @click.prevent="toggle_component(4,exp.id,'active')"
                        >
                          <img
                            src="https://img.icons8.com/stickers/30/000000/minus.png"
                          />
                          <span class="ribbon-inner bg-secondary"></span>
                        </a>
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
                        <img src="https://img.icons8.com/stickers/30/000000/delete-forever.png"/>
                        </button>
                        <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_work_exp(exp.id)"
                        >
                          <img src="https://img.icons8.com/stickers/30/000000/multi-edit.png"/>
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
          <div class="row g-5 g-xl-8">
            <div v-if="all_interest.length > 0" class="col-xl-6">
              <!--begin::List Widget 7-->
              <div class="card card-xl-stretch mb-xl-8">
                <div class="card-header card-header-stretch pb-0">
                  <!--begin::Title-->
                  <div class="card-title">
                    <img
                      class="me-6"
                      src="https://img.icons8.com/stickers/50/000000/watering-can.png"
                    />&nbsp;
                    <h3 class="m-0">Interest(s)</h3>
                  </div>
                  <!--end::Title-->
                </div>
                <!--begin::Body-->
                <div class="card-body pt-3">
                  <!--begin::Item-->
                  <div
                    v-for="interest in all_interest"
                    :key="interest.id"
                    class="
                      d-flex
                      align-items-center
                      bg-light-warning
                      rounded
                      pt-2
                      p-5
                      mb-7
                    "
                  >
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-warning me-5">
                      <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                      <span class="svg-icon svg-icon-1">
                        <img
                          src="https://img.icons8.com/stickers/30/000000/knitting.png"
                        />
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                      <a
                        href="#"
                        class="fw-bolder text-gray-800 text-hover-primary fs-6"
                        >{{interest.name}}</a
                      >
                      <!-- <span class="text-muted fw-bold d-block">Skill level :- {{skill.level}}</span> -->
                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->
                    <span class="fw-bolder text-warning py-1">
                      <a
                        v-if="interest.com_status == 'active'"
                        href="javascript:void(0)"
                        @click.prevent="toggle_component(9,interest.id,'inactive')"
                      >
                        <img
                          src="https://img.icons8.com/stickers/40/000000/checked.png"
                        />
                      </a>

                      <a
                        v-if="interest.com_status == 'inactive'"
                        href="javascript:void(0)"
                        @click.prevent="toggle_component(9,interest.id,'active')"
                      >
                        <img
                          src="https://img.icons8.com/stickers/40/000000/minus.png"
                        /> </a
                    ></span>
                    <!--end::Lable-->
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Body-->
              </div>
              <!--end::List Widget 7-->
            </div>
            <div v-if="all_skill.length > 0" class="col-xl-6">
              <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Card header-->
                <div class="card-header card-header-stretch pb-0">
                  <!--begin::Title-->
                  <div class="card-title">
                    <img
                      src="https://img.icons8.com/stickers/50/000000/wizard.png"
                      class="me-6"
                    />&nbsp;
                    <h3 class="m-0">Skill(s)</h3>
                  </div>
                  <!--end::Title-->
                </div>
                <!--end::Card header-->
                <!--begin::Body-->
                <div class="card-body pt-2">
                  <div
                    v-for="skill in all_skill"
                    :key="skill.id"
                    class="
                      d-flex
                      align-items-center
                      bg-light-warning
                      rounded
                      p-5
                      mb-7
                    "
                  >
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-warning me-5">
                      <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                      <span class="svg-icon svg-icon-1">
                        <img
                          src="https://img.icons8.com/stickers/30/000000/star-of-bethlehem.png"
                        />
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                      <a
                        href="#"
                        class="fw-bolder text-gray-800 text-hover-primary fs-6"
                        >{{skill.name}}</a
                      >
                      <span class="text-muted fw-bold d-block"
                        >Skill Level :- {{skill.level}}</span
                      >
                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->

                    <span class="fw-bolder text-warning py-1">
                      <a
                        v-if="skill.com_status == 'active'"
                        href="javascript:void(0)"
                        @click.prevent="toggle_component(5,skill.id,'inactive')"
                      >
                        <img
                          src="https://img.icons8.com/stickers/40/000000/checked.png"
                        />
                      </a>

                      <a
                        v-if="skill.com_status == 'inactive'"
                        href="javascript:void(0)"
                        @click.prevent="toggle_component(5,skill.id,'active')"
                      >
                        <img
                          src="https://img.icons8.com/stickers/40/000000/minus.png"
                        /> </a
                    ></span>

                    <!--end::Lable-->
                  </div>
                </div>
                <!--end::Body-->
              </div>
            </div>
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
                        <a
                          v-if="project.com_status == 'active'"
                          class="bg-secondary ribbon-label"
                          @click.prevent="toggle_component(6,project.id,'inactive')"
                        >
                          <!-- <i class="far fa-eye text-white"></i> -->
                          <img
                            src="https://img.icons8.com/stickers/30/000000/checked.png"
                          />
                          <span class="ribbon-inner"></span>
                        </a>
                        <a
                          v-if="project.com_status == 'inactive'"
                          class="bg-secondary ribbon-label"
                          @click.prevent="toggle_component(6,project.id,'active')"
                        >
                          <!-- <i class="fas fa-eye-slash text-white"></i> -->
                          <img
                            src="https://img.icons8.com/stickers/30/000000/minus.png"
                          />
                          <span class="ribbon-inner"></span>
                        </a>
                        <!-- <button v-if="project.status == 2" class="ribbon-label">
                          <i class="fas fa-trash text-white"></i>
                          <span class="ribbon-inner bg-danger"></span>
                        </button> -->
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
                        <a
                          v-if="award.com_status == 'active'"
                          class="ribbon-label"
                          @click.prevent="toggle_component(7,award.id,'inactive')"
                          href="javascript:void(0)"
                        >
                          <img
                            src="https://img.icons8.com/stickers/30/000000/checked.png"
                          />
                          <span class="ribbon-inner bg-secondary"></span>
                        </a>
                        <a
                          v-if="award.com_status == 'inactive'"
                          class="ribbon-label"
                          @click.prevent="toggle_component(7,award.id,'active')"
                          href="javascript:void(0)"
                        >
                          <img
                            src="https://img.icons8.com/stickers/30/000000/minus.png"
                          />
                          <span class="ribbon-inner bg-secondary"></span>
                        </a>
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
          <div class="row g-5 g-xl-8">
            <div v-if="all_language.length > 0" class="col-xl-6">
              <!--begin::List Widget 3-->
              <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Card header-->
                <div class="card-header card-header-stretch pb-0">
                  <!--begin::Title-->
                  <div class="card-title">
                    <img
                      src="https://img.icons8.com/stickers/50/000000/foreign-language-sound.png"
                      class="me-6"
                    />&nbsp;
                    <h3 class="m-0">Language(s)</h3>
                  </div>
                  <!--end::Title-->
                </div>
                <!--end::Card header-->
                <!--begin::Body-->
                <div class="card-body pt-2">
                  <div
                    v-for="language in all_language"
                    :key="language.id"
                    class="
                      d-flex
                      align-items-center
                      bg-light-warning
                      rounded
                      p-5
                      mb-7
                    "
                  >
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-warning me-5">
                      <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                      <span class="svg-icon svg-icon-1">
                        <img
                          src="https://img.icons8.com/stickers/30/000000/hiragana-ma.png"
                        />
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                      <a
                        href="#"
                        class="fw-bolder text-gray-800 text-hover-primary fs-6"
                        >{{language.language}}</a
                      >
                      <span
                        class="text-muted fw-bold d-block"
                        >{{language.fluency}}</span
                      >
                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->

                    <span class="fw-bolder text-warning py-1">
                      <a
                        v-if="language.com_status == 'active'"
                        href="javascript:void(0)"
                        @click.prevent="toggle_component(8,language.id,'inactive')"
                      >
                        <img
                          src="https://img.icons8.com/stickers/40/000000/checked.png"
                        />
                      </a>

                      <a
                        v-if="language.com_status == 'inactive'"
                        href="javascript:void(0)"
                        @click.prevent="toggle_component(8,language.id,'active')"
                      >
                        <img
                          src="https://img.icons8.com/stickers/40/000000/minus.png"
                        /> </a
                    ></span>

                    <!--end::Lable-->
                  </div>
                </div>
                <!--end::Body-->
              </div>
              <!--end:List Widget 3-->
            </div>
            <div v-if="all_reference.length > 0" class="col-xl-6">
              <!--begin::List Widget 3-->
              <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Card header-->
                <div class="card-header card-header-stretch pb-0">
                  <!--begin::Title-->
                  <div class="card-title">
                    <img
                      src="https://img.icons8.com/stickers/50/000000/handshake.png"
                      class="me-6"
                    />&nbsp;
                    <h3 class="m-0">Reference(s)</h3>
                  </div>
                  <!--end::Title-->
                </div>
                <!--end::Card header-->
                <!--begin::Body-->
                <div class="card-body pt-2">
                  <div
                    v-for="reference in all_reference"
                    :key="reference.id"
                    class="
                      d-flex
                      align-items-center
                      bg-light-warning
                      rounded
                      p-5
                      mb-7
                    "
                  >
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-warning me-5">
                      <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                      <span class="svg-icon svg-icon-1">
                        <img
                          src="https://img.icons8.com/stickers/30/000000/hand.png"
                        />
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                      <a
                        href="#"
                        class="fw-bolder text-gray-800 text-hover-primary fs-6"
                        >{{reference.name}} | {{reference.company}}
                      </a>
                      <span
                        class="text-muted fw-bold d-block"
                        >{{reference.reference}}</span
                      >
                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->

                    <span class="fw-bolder text-warning py-1">
                      <a
                        v-if="reference.com_status == 'active'"
                        href="javascript:void(0)"
                        @click.prevent="toggle_component(12,reference.id,'inactive')"
                      >
                        <img
                          src="https://img.icons8.com/stickers/40/000000/checked.png"
                        />
                      </a>

                      <a
                        v-if="reference.com_status == 'inactive'"
                        href="javascript:void(0)"
                        @click.prevent="toggle_component(12,reference.id,'active')"
                      >
                        <img
                          src="https://img.icons8.com/stickers/40/000000/minus.png"
                        /> </a
                    ></span>

                    <!--end::Lable-->
                  </div>
                </div>
                <!--end::Body-->
              </div>
              <!--end:List Widget 3-->
            </div>
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
                          <a
                            v-if="edu.com_status == 'active'"
                            @click.prevent="toggle_component(10,edu.id,'inactive')"
                            class="badge fs-7 ms-2"
                            ><img
                              src="https://img.icons8.com/stickers/40/000000/checked.png"
                          /></a>
                          <a
                            v-if="edu.com_status == 'inactive'"
                            class="badge fs-7 ms-2"
                            @click.prevent="toggle_component(10,edu.id,'active')"
                          >
                            <img
                              src="https://img.icons8.com/stickers/40/000000/minus.png"
                            />
                          </a>
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

          <div v-if="all_volunteer.length > 0" class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header card-header-stretch pb-0">
              <!--begin::Title-->
              <div class="card-title">
                <img
                  src="https://img.icons8.com/stickers/50/000000/trust.png"
                  class="me-6"
                />&nbsp;
                <h3 class="m-0">Volunteer(s)</h3>
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
                  <!--begin::Col-->
                  <div
                    v-for="volunteer in all_volunteer"
                    :key="volunteer.id"
                    class="col-xl-6"
                  >
                    <!--begin::Card-->
                    <div class="card card-flush shadow-lg">
                      <div class="card-header ribbon ribbon-end ribbon-clip">
                        <a
                          v-if="volunteer.com_status == 'active'"
                          class="bg-secondary ribbon-label"
                          @click.prevent="toggle_component(11,volunteer.id,'inactive')"
                        >
                          <!-- <i class="far fa-eye text-white"></i> -->
                          <img
                            src="https://img.icons8.com/stickers/30/000000/checked.png"
                          />
                          <span class="ribbon-inner"></span>
                        </a>
                        <a
                          v-if="volunteer.com_status == 'inactive'"
                          class="bg-secondary ribbon-label"
                          @click.prevent="toggle_component(11,volunteer.id,'active')"
                        >
                          <!-- <i class="fas fa-eye-slash text-white"></i> -->
                          <img
                            src="https://img.icons8.com/stickers/30/000000/minus.png"
                          />
                          <span class="ribbon-inner"></span>
                        </a>
                        <!-- <button v-if="project.status == 2" class="ribbon-label">
                          <i class="fas fa-trash text-white"></i>
                          <span class="ribbon-inner bg-danger"></span>
                        </button> -->
                        <div class="card-title fw-bolder mb-1">
                          {{ volunteer.position  }} |
                          {{ volunteer.organization}}
                        </div>

                        <span class="fs-7"
                          >{{volunteer.url}}
                          <div class="badge badge-light-success fs-7 fw-bolder">
                            {{ volunteer.start_date}} -
                            <span
                              v-if="volunteer.end_date"
                              >{{volunteer.end_date}}</span
                            >
                            <span v-if="!volunteer.end_date">now</span>
                          </div>
                        </span>
                      </div>
                      <div class="card-body">
                        {{ volunteer.summary  }}
                      </div>
                    </div>

                    <!--end::Card-->
                  </div>

                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Tab panel-->
              <!--begin::Tab panel-->
            </div>
            <!--end::Tab content-->
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
              all_language: [],
              genie_exist_contact: [],
              all_social: [],
              all_volunteer: [],
              all_reference: [],
              all_interest: [],

			all_skill: [],


            errors: [],
        };
    },
     methods: {

       async toggle_component(component,component_id,status)
       {


          const toggle_req = {component_id:component_id , status:status , resume_id:this.$route.params.resume_id ,component:component}
          await API.ToggleGenieComponent(toggle_req).then((result) => {
              if(component == 3)
              {
                this.all_social = result.data.social;

              }
              if(component == 4)
              {
                this.all_work_exp = result.data.work;
              }
              if(component == 5)
              {
                this.all_skill = result.data.skill;
              }
               if(component == 6)
              {
                this.all_project = result.data.project;
              }
               if(component == 7)
              {
                this.all_award = result.data.award;
              }
                if(component == 8)
              {
                this.all_language = result.data.language;
              }
                if(component == 9)
              {
                this.all_interest = result.data.interest;
              }
               if(component == 10)
              {
                this.all_education = result.data.education;
              }
               if(component == 11)
              {
                this.all_volunteer = result.data.volunteer;
              }
              if(component == 12)
              {
                this.all_reference = result.data.reference;
              }


            })
       },

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
		 await API.GetAllActiveCompo(resume_id).then((result) => {

        this.all_work_exp = result.data.work;
				this.all_education = result.data.education;
				this.all_project = result.data.project;
				this.all_skill = result.data.skill;
				this.all_award = result.data.award;
				this.all_basic = result.data.basic;
        this.all_social = result.data.social;
        this.all_volunteer = result.data.volunteer;
        this.all_reference = result.data.reference;
        this.genie_exist_contact = result.data.contact;
        this.all_language = result.data.language;
        this.all_interest = result.data.interest;




            })
	}
};
</script>
