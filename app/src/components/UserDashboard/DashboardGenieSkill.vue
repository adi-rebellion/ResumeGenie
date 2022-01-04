<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
          <div v-if="all_skill.length > 0" class="card mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
												<span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
											</h3>
											<!-- <div class="card-toolbar">
												<ul class="nav">
													<li class="nav-item">
														<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark active fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
													</li>
													<li class="nav-item">
														<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
													</li>
													<li class="nav-item">
														<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark fw-bolder px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
													</li>
												</ul>
											</div> -->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<div class="tab-content">
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
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
																<tr v-for="skill in all_skill" :key="skill.id">
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="https://img.icons8.com/doodle/48/000000/shooting-stars--v1.png">
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{skill.name}}</a>
																	
																	</td>
                                  									<td class="text-end">
																		<span
                            v-if="skill.status == 0"
                            class="badge badge-success fs-7 ms-2"
                            ><i class="far fa-eye text-white"></i
                          ></span>
                          <span
                            v-if="skill.status == 1"
                            class="badge badge-info fs-7 ms-2"
                          >
                            <i class="fas fa-eye-slash text-white"></i
                          ></span>
                          <span
                            v-if="skill.status == 2"
                            class="badge badge-danger fs-7 ms-2"
                          >
                            <i class="fas fa-trash text-white"></i
                          ></span>
																	</td>
																	<td class="text-end">
																		  <button
                          v-if="skill.status==1"
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_skill(skill.id,'0')"
                        >
                          <i class="far fa-eye"></i>
                        </button>
                        <button
                          v-if="skill.status==0"
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_skill(skill.id,'1')"
                        >
                          <i class="fas fa-eye-slash"></i>
                        </button>
                        <button
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_skill(skill.id,'2')"
                        >
                          <i class="fas fa-trash"></i>
                        </button>
                        <button
                          class="btn btn-sm btn-light btn-active-light-primary"
                          @click.prevent="edit_skill(skill.id)"
                        >
                          <i class="far fa-edit"></i>
                        </button>
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
														<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
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
																				<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">React, HTML</td>
																	<td class="text-end">
																		<span class="badge badge-light-success">Approved</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
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
																				<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
																		<span class="text-muted fw-bold d-block">Most Successful</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Python, MySQL</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
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
																				<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																	<td class="text-end">
																		<span class="badge badge-light-danger">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
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
														<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
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
																				<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller Theme</a>
																		<span class="text-muted fw-bold d-block">Best Customers</span>
																	</td>
																	<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
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
																				<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																	<td class="text-end">
																		<span class="badge badge-light-danger">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
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
																				<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
																		<span class="text-muted fw-bold d-block">Awesome Users</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Laravel,Metronic</td>
																	<td class="text-end">
																		<span class="badge badge-light-primary">Success</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
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
																				<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
																		<span class="text-muted fw-bold d-block">Most Successful</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Python, MySQL</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
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

                
          <!--begin::Basic info-->
          <div class="card mb-5 mb-xl-10" >
            <!--begin::Card header-->
            <div id="add_new_skill"	
              class="card-header border-0 cursor-pointer"
              role="button"
              data-bs-toggle="collapse"
              data-bs-target="#kt_account_profile_details"
              aria-expanded="true"
              aria-controls="kt_account_profile_details"
            >
              <!--begin::Card title-->
              <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Skill Details</h3>
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
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >Skill Name</label
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
                            name="name"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
                            placeholder="Skill Name"
                            v-model="genie_skill.name"
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
                  <div class="mb-0">
    <label class="form-label">Example</label>
    <div id="kt_slider_basic"></div>

    <div class="pt-5">
        <div class="fw-bold mb-2">Min: <span id="kt_slider_basic_min"></span></div>
        <div class="fw-bold mb-2">Max: <span id="kt_slider_basic_max"></span></div>
    </div>
</div>

                

                 
                

                 
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
                  v-if="add_new_skill"
                    type="submit"
                    class="btn btn-primary"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    Save Changes
                  </button>
                   <button
                  v-if="!add_new_skill"
                    type="submit"
                    class="btn btn-primary"
                    id="kt_account_profile_details_submit"
                    @click.prevent="updateButton"
                  >
                    Update Changes
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
import { GetAllEducation } from '../../services/api';



export default {
  components: {
    DashboardLayout,
  },
  data() {
        return {
			 add_new_skill:true,
            // showNewOrgLoading: false,
            // users: null,
            // urlInputs: null,
            // domainInputs: null,
			 all_skill: [],
          
            genie_skill: {
				  update_skill_id: "",
                name: "",
                
				

            },
            errors: [],
        };
    },
    methods: {
         async edit_skill(skill_id)
      {
        
        this.add_new_skill = false;
        this.genie_skill = this.all_skill[skill_id-1];
        this.genie_skill.update_skill_id = skill_id;

        
      },
       async toogle_skill(skill_id,status)
      {

        
        const skill = {toogle_skill_id:skill_id , status:status}
          await API.ToggleGenieSkill(skill).then((result) => {
            
               
              // this.genie_skill = this.all_skill[skill_id-1];
              this.all_skill[skill_id-1].status = status;
			  this.all_skill= res.data.skill;
               
            })	

        
      },


       async submitButton() {
		  
                 if(this.genie_skill.name == "")
                {
                      this.$toast.error("Error", "Skill Name is a required feild");
                    return "Error";
                }
               
               
               

                await API.GenieSkill(this.genie_skill)
                .then((res) => {
                    if (res.status == 200) {
						this.all_skill= res.data.skill;
						 this.genie_skill.name = '';
                        this.$toast.success("Success", "Organization created succesfully");

                    } else {
                        this.$toast.error("Error", "Oops error creating an organization");
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
	   async updateButton() {
           
               
                 if(this.genie_skill.institution == "")
                {
                      this.$toast.error("Error", "Institution is a required feild");
                    return "Error";
                }
                if (this.genie_skill.area == "") {
                    this.$toast.error("Error", "Area is a required feild");
                    return "Error";
                }
                 if (this.genie_skill.score == "") {
                    this.$toast.error("Error", "Score is a required feild");
                    return "Error";
                }
                 if (this.genie_skill.start_date == "") {
                    this.$toast.error("Error", "Start date is a required feild");
                    return "Error";
                }

                await API.UpdateGenieSkill(this.genie_skill)
                .then((res) => {
                    if (res.status == 200) {
                        this.$toast.success("Success", "Organization created succesfully");

                    } else {
                        this.$toast.error("Error", "Oops error creating an organization");
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
		 await API.GetAllSkill().then((result) => {
                
      
                this.all_skill = result.data;
               
               
               
            })
	}
	
};

</script>
