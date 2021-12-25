<template>
   <PublicPage>
      <template v-slot:header>
         <LandingNavHeader></LandingNavHeader>
      </template>
      <template v-slot:landing-body>
       <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Row-->
								<div class="row gy-5 g-xl-8">
									<!--begin::Col-->
									<div  v-for="organization in organizations" :key="organization.id"  class="col-xxl-4">
										<!--begin::Mixed Widget 2-->
										<div class="card card-xxl-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 bg-dark py-5">
												<h3 class="card-title fw-bolder text-white">{{organization.name}}</h3>
											
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body p-0" style="position: relative;">
												<!--begin::Chart-->
												<div class="mixed-widget-2-chart card-rounded-bottom  bg-dark" data-kt-color="danger" style="height: 200px; min-height: 200px;"><div id="apexchartsral4g8n8" class="apexcharts-canvas apexchartsral4g8n8 apexcharts-theme-light" style="width: 403px; height: 200px;"><svg id="SvgjsSvg1263" width="403" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1265" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1264"><clipPath id="gridRectMaskral4g8n8"><rect id="SvgjsRect1268" width="410" height="203" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskral4g8n8"></clipPath><clipPath id="nonForecastMaskral4g8n8"></clipPath><clipPath id="gridRectMarkerMaskral4g8n8"><rect id="SvgjsRect1269" width="407" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1275" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1276" flood-color="#cb1b46" flood-opacity="0.5" result="SvgjsFeFlood1276Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1277" in="SvgjsFeFlood1276Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1277Out"></feComposite><feOffset id="SvgjsFeOffset1278" dx="0" dy="5" result="SvgjsFeOffset1278Out" in="SvgjsFeComposite1277Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1279" stdDeviation="3 " result="SvgjsFeGaussianBlur1279Out" in="SvgjsFeOffset1278Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1280" result="SvgjsFeMerge1280Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1281" in="SvgjsFeGaussianBlur1279Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1282" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1283" in="SourceGraphic" in2="SvgjsFeMerge1280Out" mode="normal" result="SvgjsFeBlend1283Out"></feBlend></filter><filter id="SvgjsFilter1285" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1286" flood-color="#cb1b46" flood-opacity="0.5" result="SvgjsFeFlood1286Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1287" in="SvgjsFeFlood1286Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1287Out"></feComposite><feOffset id="SvgjsFeOffset1288" dx="0" dy="5" result="SvgjsFeOffset1288Out" in="SvgjsFeComposite1287Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1289" stdDeviation="3 " result="SvgjsFeGaussianBlur1289Out" in="SvgjsFeOffset1288Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1290" result="SvgjsFeMerge1290Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1291" in="SvgjsFeGaussianBlur1289Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1292" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1293" in="SourceGraphic" in2="SvgjsFeMerge1290Out" mode="normal" result="SvgjsFeBlend1293Out"></feBlend></filter></defs><g id="SvgjsG1294" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1295" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1304" class="apexcharts-grid"><g id="SvgjsG1305" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1307" x1="0" y1="0" x2="403" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1308" x1="0" y1="20" x2="403" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1309" x1="0" y1="40" x2="403" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1310" x1="0" y1="60" x2="403" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1311" x1="0" y1="80" x2="403" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1312" x1="0" y1="100" x2="403" y2="100" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1313" x1="0" y1="120" x2="403" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1314" x1="0" y1="140" x2="403" y2="140" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1315" x1="0" y1="160" x2="403" y2="160" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1316" x1="0" y1="180" x2="403" y2="180" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1317" x1="0" y1="200" x2="403" y2="200" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1306" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1319" x1="0" y1="200" x2="403" y2="200" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1318" x1="0" y1="1" x2="0" y2="200" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1270" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1271" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1274" d="M 0 200L 0 125C 23.508333333333333 125 43.65833333333334 87.5 67.16666666666667 87.5C 90.67500000000001 87.5 110.82500000000002 120 134.33333333333334 120C 157.84166666666667 120 177.99166666666667 25 201.5 25C 225.00833333333333 25 245.15833333333336 100 268.6666666666667 100C 292.175 100 312.325 100 335.8333333333333 100C 359.34166666666664 100 379.4916666666667 100 403 100C 403 100 403 100 403 200M 403 100z" fill="transparent" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskral4g8n8)" filter="url(#SvgjsFilter1275)" pathTo="M 0 200L 0 125C 23.508333333333333 125 43.65833333333334 87.5 67.16666666666667 87.5C 90.67500000000001 87.5 110.82500000000002 120 134.33333333333334 120C 157.84166666666667 120 177.99166666666667 25 201.5 25C 225.00833333333333 25 245.15833333333336 100 268.6666666666667 100C 292.175 100 312.325 100 335.8333333333333 100C 359.34166666666664 100 379.4916666666667 100 403 100C 403 100 403 100 403 200M 403 100z" pathFrom="M -1 200L -1 200L 67.16666666666667 200L 134.33333333333334 200L 201.5 200L 268.6666666666667 200L 335.8333333333333 200L 403 200"></path><path id="SvgjsPath1284" d="M 0 125C 23.508333333333333 125 43.65833333333334 87.5 67.16666666666667 87.5C 90.67500000000001 87.5 110.82500000000002 120 134.33333333333334 120C 157.84166666666667 120 177.99166666666667 25 201.5 25C 225.00833333333333 25 245.15833333333336 100 268.6666666666667 100C 292.175 100 312.325 100 335.8333333333333 100C 359.34166666666664 100 379.4916666666667 100 403 100" fill="none" fill-opacity="1" stroke="#cb1b46" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskral4g8n8)" filter="url(#SvgjsFilter1285)" pathTo="M 0 125C 23.508333333333333 125 43.65833333333334 87.5 67.16666666666667 87.5C 90.67500000000001 87.5 110.82500000000002 120 134.33333333333334 120C 157.84166666666667 120 177.99166666666667 25 201.5 25C 225.00833333333333 25 245.15833333333336 100 268.6666666666667 100C 292.175 100 312.325 100 335.8333333333333 100C 359.34166666666664 100 379.4916666666667 100 403 100" pathFrom="M -1 200L -1 200L 67.16666666666667 200L 134.33333333333334 200L 201.5 200L 268.6666666666667 200L 335.8333333333333 200L 403 200"></path><g id="SvgjsG1272" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1325" r="0" cx="0" cy="125" class="apexcharts-marker whrjdx3a2 no-pointer-events" stroke="#cb1b46" fill="#f1416c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1273" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1320" x1="0" y1="0" x2="403" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1321" x1="0" y1="0" x2="403" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1322" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1323" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1324" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1303" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1266" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 100px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 11px; top: 128px;"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">Feb</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: transparent; display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Net Profit: </span><span class="apexcharts-tooltip-text-y-value">$30 thousands</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
												<!--end::Chart-->
												<!--begin::Stats-->
												<div class="card-p mt-n20 position-relative">
													<!--begin::Row-->
													
														<!--begin::Col-->
														<div  v-for="event in organization.org_to_event" :key="event" class="col-12 bg-primary px-2 py-3 rounded-2 me-7 mb-7">
															<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
															<span class="svg-icon svg-icon-3x svg-icon-dark d-block my-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="15" viewBox="0 0 24 24" fill="none">
																	<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"></rect>
																	<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black"></rect>
																	<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"></rect>
																	<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->
															<a href="#" class="text-white fw-bold fs-6">{{event.name}} (Members - {{event.total_members}} , Questions - {{event.total_questions}} , Answers - {{event.total_answers}})</a>
														</div>
														<!--end::Col-->
														
														
													</div>
													<!--end::Row-->
													
												</div>
												<!--end::Stats-->
											<div class="resize-triggers"><div class="expand-trigger"><div style="width: 404px; height: 460px;"></div></div><div class="contract-trigger"></div></div></div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 2-->
									</div>
									<!--end::Col-->
									 
								</div>
								<!--end::Row-->
								
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
      </template>
      <template v-slot:landing-footer>
         <LandingFooter></LandingFooter>
      </template>
   </PublicPage>
</template>
<script>
   const API = require('../../services/api')
   import PublicPage from "./layout/PublicPage.vue";
   import LandingFooter from "./layout/LandingFooter.vue";
   import LandingNavHeader from "./layout/LandingNavHeader.vue";
   
    import { eventToOrg } from '../../services/api';
   
   const axios = require("axios").default;
      export default {
     components: {
       PublicPage,
       LandingNavHeader,
       LandingFooter,
       
     },
      data () {
         return{
			 organizations: [],
			 org_to_events: []
			 
    

   
    
           };
     
      },
     methods: {
   
     },
    async created() {
   
    //   const params = {params:{org_id:this.$route.params.org_id}}
	//    this.showNewEveLoading = true;
    //     this.event.id = this.$route.params.org_id;
      
          
          
    //    axios
    //     .get("http://127.0.0.1:8000/api/auth/asso/org")
    //     .then((res) => {
	// 		this.organizations = res.data;
			
    //        console.log('Org',res.data);
	// 	    console.log('Id',res.data[0].org_to_event);
		  
		  
		 
    //     })
	 await API.getAuthOrgs().then((res) => {
                	this.organizations = res.data;
				 
   
               
               
            })
        .catch((error) => {
          
            if (error.response.status == 422) {
            this.errors = error.response.data.errors;
          } else {
            console.log(error.message);
          }
         
        });
   
     
   
              
               
               
         
     }, 
   async mounted() {
            // You can receive these data via api,
            // hence before a component is loaded
            // use mount function to get initial data.
           
        },
   
     
   };
   
   
</script>