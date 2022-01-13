<template>
  <DashboardLayout>
    <template v-slot:dashboard-content>
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
          <div v-if="all_skill.length > 0" class="card mb-xl-8">
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
																	<!-- <th class="p-0 w-50px"></th> -->
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-140px"></th>
																	<th class="p-0 min-w-110px"></th>
																	
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr v-for="skill in all_skill" :key="skill.id">
																	<!-- <td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="https://img.icons8.com/doodle/48/000000/shooting-stars--v1.png">
																			</span>
																		</div>
																	</td> -->
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{skill.name}}</a>
																	
																	</td>
																	<td>
																		<div class="d-flex align-items-center ps-4" id="kt_toolbar">
											<div id="kt_toolbar_slider" class="noUi-target noUi-target-primary w-75px w-xxl-150px noUi-sm noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.555556, 1);"></div></div><div class="noUi-origin" style="transform: translate(-444.444%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="10.0" aria-valuenow="1.0" aria-valuetext="1.0"><div class="noUi-touch-area"></div></div></div></div></div>
											<span  id="kt_toolbar_slider_value" class="d-flex flex-center rounded-circle w-35px h-35px ms-4 fs-7 fw-bolder text-white" style="
                                  font-size: 20px !important;
                                  background-color: #218380;
                                ">{{skill.level}}</span>
												
										</div>
																	</td>
                                  									
																	<td class="text-end">
																	
                       
                        <button
                          type="reset"
                          class="
                            btn btn-sm btn-light btn-active-light-primary
                            me-3
                          "
                          @click.prevent="toogle_skill(skill.id)"
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
                <h3 class="fw-bolder m-0">Adding a skill</h3>
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
              <input class="form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0" list="browsers" id="myBrowser" v-model="genie_skill.name"  v-on:input="populateSkill" />
<datalist id="browsers">
  <option   v-for="skill in fetched_skills" :key="skill.name"  :value="skill.name"></option>
  <!-- <option value="Firefox"></option>
  <option value="Internet"></option> -->
 
</datalist>
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
              
                  <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"
                      >Rate your skill</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                      <!--begin::Row-->
                      <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                          <div id="kt_slider_basic"></div>
						  <input
                            type="number"
                            name="name"
                            class="
                              form-control form-control-lg form-control-solid
                              mb-3 mb-lg-0
                            "
							id="kt_slider_basic_min"
                            placeholder="Skill level"
							min="0"
                            v-model="genie_skill.level"
                          />
                          <!-- <div
                            class="
                              fv-plugins-message-container
                              invalid-feedback
                            "
                          ></div> -->
						  <!-- <div class="fw-bold mb-2" >Min:
							  <input type="text" id="kt_slider_basic_min"   v-model="genie_skill.level" />
							   
							   </div> -->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Input group-->
                

                

                 
                

                 
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
                    class="btn bg-rg-yellow"
                    id="kt_account_profile_details_submit"
                    @click.prevent="submitButton"
                  >
                    Save
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
			  key: {
				  value: ""
			  },
         
            genie_skill: {
				  update_skill_id: "",
					name: "",
					level:""
					
                
				

            },
			fetched_skills : [],
			
			 
            errors: [],
        };
    },
    methods: {
         async edit_skill(skill_id)
      {
        alert(skill_id);
        this.add_new_skill = false;
        this.genie_skill = this.all_skill[skill_id-1];
        this.genie_skill.update_skill_id = skill_id;

        
      },
       async toogle_skill(skill_id)
      {

        
        const skill = {toogle_skill_id:skill_id }
          await API.ToggleGenieSkill(skill).then((result) => {
            
               
              // this.genie_skill = this.all_skill[skill_id-1];
            //   this.all_skill[skill_id-1].status = status;
			 this.$toast.info("Deleted", "Genie skill deleted!");
			  this.all_skill= result.data.skill;
               
            })	

        
      },
	 async populateSkill (event) {
   if(this.genie_skill.name.length > 3)
   {
	  await API.GetGenieSkillSelect(this.genie_skill).then((result) => {
            
               
             
			 this.fetched_skills = result.data;
               
            })	
   }
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
                        this.$toast.success("Success", "Genie Skill created succesfully");

                    } else {
                        this.$toast.error("Error", "Oops error creating an skill");
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
           
               
               
                   if(this.genie_skill.name == "")
                {
                      this.$toast.error("Error", "Skill Name is a required feild");
                    return "Error";
                }

                await API.UpdateGenieSkill(this.genie_skill)
                .then((res) => {
                    if (res.status == 200) {
                        this.$toast.success("Success", "Genie Skill updated succesfully");

                    } else {
                        this.$toast.error("Error", "Oops error updating an skill");
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
 
// 	  $('#populateSkill').on("change",function(){
    
//    alert(1);
// });

// 	var slider = document.querySelector("#kt_slider_basic");
// var valueMin = document.querySelector("#kt_slider_basic_min");
// var valueMax = document.querySelector("#kt_slider_basic_max");

// noUiSlider.create(slider, {
//     start: [20, 80],
//     connect: true,
//     range: {
//         "min": 0,
//         "max": 100
//     }
// });

// slider.noUiSlider.on("update", function (values, handle) {
//     if (handle) {
//         valueMax.innerHTML = values[handle];
//     } else {
//         valueMin.innerHTML = values[handle];
//     }
// });

var connectSlider = document.getElementById('kt_slider_basic');

var valueMin = document.querySelector("#kt_slider_basic_min"); 
noUiSlider.create(connectSlider, {
    start: 20,
	step: 10,
	tooltips: true,
    connect: 'lower',
    range: {
        'min': 0,
        'max': 100
    }
});

connectSlider.noUiSlider.on("change", function (values, handle) {
	
	if (handle) {
        valueMax.innerHTML = values[handle];
    } else {
        valueMin.value = values[handle];
		// this.genie_skill.level = values[handle];
		// this.genie_skill.name = "aditya";
	
    }
	
   
});
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});

	



    },

	async created() {
		 await API.GetAllSkill().then((result) => {
                
      
                this.all_skill = result.data;
               
               
               
            })
	},
	
	
	
};


</script>
