<template>
  <div>
    <body
      id="kt_body"
      data-bs-spy="scroll"
      data-bs-target="#kt_landing_menu"
      data-bs-offset="200"
      class="bg-white position-relative"
    >
      <!--begin::Main-->
      <div class="d-flex flex-column flex-root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
          <!--begin::Wrapper-->
          <div
            class="
              bgi-no-repeat
              bgi-size-contain
              bgi-position-x-center
              bgi-position-y-bottom
              landing-dark-bg
            "
            style="
              background-image: url(assets/media/svg/illustrations/landing.svg);
            "
          >
            <!--begin::Landing hero-->
            <div
              class="
                d-flex
                flex-column flex-center
                w-100
                px-9
              "
            >
              <img
                alt="Logo"
                src="theme/dist/assets/media/logos/ResumeGenieLight.png"
               width="350"
                class="logo-default "
              />
              <!--begin::Heading-->
              <div class="text-center mb-5 mb-lg-10 py-lg-20">
                <!--begin::Title-->

                <h1
                  class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15"
                  
                >
                  A way better resume maker <br />
                  <span
                    style="color:white;
                     
                    "
                  >
                   <!-- background: linear-gradient(
                        to right,
                        #12ce5d 0%,
                        #ffd80c 100%
                      );
                      -webkit-background-clip: text;
                      -webkit-text-fill-color: transparent; -->
                    <span
                      >because that resume is your entry-ticket to the job
                      interview</span
                    >
                  </span>
                </h1>
                <!--end::Title-->
                <!--begin::Action-->

                <router-link
                  :to="{ name: 'create_resume' }"
                  class="btn bg-rg-yellow"
                  data-kt-scroll-toggle="true"
                  data-kt-drawer-dismiss="true"
                  >Build now</router-link
                >
                <br /><br />
                <!--end::Action-->
                <h3 class="text-white">Get your resume in under 10 minutes</h3>
              </div>

              <!--end::Heading-->
              <!--begin::Clients-->
              <div class="d-flex flex-center flex-wrap position-relative px-5">
                <!--begin::Client-->
                <div
                  class="d-flex flex-center m-3 m-md-6"
                  data-bs-toggle="tooltip"
                  title=""
                  data-bs-original-title="Fujifilm"
                >
                  <img
                    src="theme/dist/assets/media/svg/brand-logos/fujifilm.svg"
                    class="mh-30px mh-lg-40px"
                    alt=""
                  />
                </div>
                <!--end::Client-->
                <!--begin::Client-->
                <div
                  class="d-flex flex-center m-3 m-md-6"
                  data-bs-toggle="tooltip"
                  title=""
                  data-bs-original-title="Vodafone"
                >
                  <img
                    src="theme/dist/assets/media/svg/brand-logos/vodafone.svg"
                    class="mh-30px mh-lg-40px"
                    alt=""
                  />
                </div>
                <!--end::Client-->
                <!--begin::Client-->
                <div
                  class="d-flex flex-center m-3 m-md-6"
                  data-bs-toggle="tooltip"
                  title=""
                  data-bs-original-title="KPMG International"
                >
                  <img
                    src="theme/dist/assets/media/svg/brand-logos/kpmg.svg"
                    class="mh-30px mh-lg-40px"
                    alt=""
                  />
                </div>
                <!--end::Client-->
                <!--begin::Client-->
                <div
                  class="d-flex flex-center m-3 m-md-6"
                  data-bs-toggle="tooltip"
                  title=""
                  data-bs-original-title="Nasa"
                >
                  <img
                    src="theme/dist/assets/media/svg/brand-logos/nasa.svg"
                    class="mh-30px mh-lg-40px"
                    alt=""
                  />
                </div>
                <!--end::Client-->
                <!--begin::Client-->
                <div
                  class="d-flex flex-center m-3 m-md-6"
                  data-bs-toggle="tooltip"
                  title=""
                  data-bs-original-title="Aspnetzero"
                >
                  <img
                    src="theme/dist/assets/media/svg/brand-logos/aspnetzero.svg"
                    class="mh-30px mh-lg-40px"
                    alt=""
                  />
                </div>
                <!--end::Client-->
                <!--begin::Client-->
                <div
                  class="d-flex flex-center m-3 m-md-6"
                  data-bs-toggle="tooltip"
                  title=""
                  data-bs-original-title="AON - Empower Results"
                >
                  <img
                    src="theme/dist/assets/media/svg/brand-logos/aon.svg"
                    class="mh-30px mh-lg-40px"
                    alt=""
                  />
                </div>
                <!--end::Client-->
                <!--begin::Client-->
                <div
                  class="d-flex flex-center m-3 m-md-6"
                  data-bs-toggle="tooltip"
                  title=""
                  data-bs-original-title="Hewlett-Packard"
                >
                  <img
                    src="theme/dist/assets/media/svg/brand-logos/hp-3.svg"
                    class="mh-30px mh-lg-40px"
                    alt=""
                  />
                </div>
                <!--end::Client-->
                <!--begin::Client-->
                <div
                  class="d-flex flex-center m-3 m-md-6"
                  data-bs-toggle="tooltip"
                  title=""
                  data-bs-original-title="Truman"
                >
                  <img
                    src="theme/dist/assets/media/svg/brand-logos/truman.svg"
                    class="mh-30px mh-lg-40px"
                    alt=""
                  />
                </div>
                <!--end::Client-->
              </div>
              <!--end::Clients-->
            </div>
            <!--end::Landing hero-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Curve bottom-->
          <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
            <svg
              viewBox="15 12 1470 48"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
          <!--end::Curve bottom-->
        </div>
        <!--end::Header Section-->
        <div class="mb-n10 mb-lg-n20 z-index-2">
          <!--begin::Container-->
          <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-17">
              <!--begin::Title-->
              <h3
                class="fs-2hx text-dark mb-5"
                id="how-it-works"
                data-kt-scroll-offset="{default: 100, lg: 150}"
              >
                100's of designs
              </h3>

              <div class="fs-5 text-muted fw-bold">
                Buid your resume once, change its look as often as you like. 
                <br />We keep adding new designs all the time.
              </div>
              <!--end::Text-->
            </div>
            <!--end::Heading-->

            <!--begin::Product slider-->
            <div class="tns tns-default tns-initiazlied">
              <!--begin::Slider-->
              <div class="tns-outer" id="tns1-ow">
                <div
                  class="tns-liveregion tns-visually-hidden"
                  aria-live="polite"
                  aria-atomic="true"
                >
                  slide <span class="current">2</span> of 4
                </div>
                <div id="tns1-mw" class="tns-ovh">
                  <div class="tns-inner" id="tns1-iw">
                    <div
                      data-tns="true"
                      data-tns-loop="true"
                      data-tns-swipe-angle="false"
                      data-tns-speed="2000"
                      data-tns-autoplay="true"
                      data-tns-autoplay-timeout="18000"
                      data-tns-controls="true"
                      data-tns-nav="false"
                      data-tns-items="1"
                      data-tns-center="false"
                      data-tns-dots="false"
                      data-tns-prev-button="#kt_team_slider_prev1"
                      data-tns-next-button="#kt_team_slider_next1"
                      class="
                        tns-slider
                        tns-carousel
                        tns-subpixel
                        tns-calc
                        tns-horizontal
                      "
                      id="tns1"
                      style="
                        transition-duration: 0s;
                        transform: translate3d(-16.6667%, 0px, 0px);
                      "
                    >
                      <div
                        class="
                          text-center
                          px-5
                          pt-5 pt-lg-10
                          px-lg-10
                          tns-item tns-slide-cloned
                        "
                        aria-hidden="true"
                        tabindex="-1"
                      >
                        <img
                          src="theme/dist/assets/media/product-demos/demo5.png"
                          class="card-rounded shadow mw-100"
                          alt=""
                        />
                      </div>
                      <!--begin::Item-->
                      <div
                        class="
                          text-center
                          px-5
                          pt-5 pt-lg-10
                          px-lg-10
                          tns-item tns-slide-active
                        "
                        id="tns1-item0"
                      >
                        <img
                          src="theme/dist/assets/media/product-demos/demo1.png"
                          class="card-rounded shadow mw-100"
                          alt=""
                        />
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div
                        class="text-center px-5 pt-5 pt-lg-10 px-lg-10 tns-item"
                        id="tns1-item1"
                        aria-hidden="true"
                        tabindex="-1"
                      >
                        <img
                          src="theme/dist/assets/media/product-demos/demo2.png"
                          class="card-rounded shadow mw-100"
                          alt=""
                        />
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div
                        class="text-center px-5 pt-5 pt-lg-10 px-lg-10 tns-item"
                        id="tns1-item2"
                        aria-hidden="true"
                        tabindex="-1"
                      >
                        <img
                          src="theme/dist/assets/media/product-demos/demo4.png"
                          class="card-rounded shadow mw-100"
                          alt=""
                        />
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div
                        class="text-center px-5 pt-5 pt-lg-10 px-lg-10 tns-item"
                        id="tns1-item3"
                        aria-hidden="true"
                        tabindex="-1"
                      >
                        <img
                          src="theme/dist/assets/media/product-demos/demo5.png"
                          class="card-rounded shadow mw-100"
                          alt=""
                        />
                      </div>
                      <!--end::Item-->
                      <div
                        class="
                          text-center
                          px-5
                          pt-5 pt-lg-10
                          px-lg-10
                          tns-item tns-slide-cloned
                        "
                        aria-hidden="true"
                        tabindex="-1"
                      >
                        <img
                          src="theme/dist/assets/media/product-demos/demo1.png"
                          class="card-rounded shadow mw-100"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--end::Slider-->
              <!--begin::Slider button-->
              <button
                class="btn btn-icon btn-active-color-primary"
                id="kt_team_slider_prev1"
                aria-controls="tns1"
                tabindex="-1"
                data-controls="prev"
              >
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                <span class="svg-icon svg-icon-3x">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                      fill="black"
                    ></path>
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </button>
              <!--end::Slider button-->
              <!--begin::Slider button-->
              <button
                class="btn btn-icon btn-active-color-primary"
                id="kt_team_slider_next1"
                aria-controls="tns1"
                tabindex="-1"
                data-controls="next"
              >
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                <span class="svg-icon svg-icon-3x">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                      fill="black"
                    ></path>
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </button>
              <!--end::Slider button-->
            </div>
            <!--end::Product slider-->
          </div>
          <!--end::Container-->
        </div>

        <!--begin::Statistics Section-->
        <div class="mt-sm-n10">
          <!--begin::Curve top-->
          <div class="landing-curve landing-dark-color">
            <svg
              viewBox="15 -1 1470 48"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
          <!--end::Curve top-->
          <!--begin::Wrapper-->
          <div class="pb-15 pt-18 landing-dark-bg">
            <!--begin::Container-->
            <div class="container">
              <!--begin::Heading-->
              <div
                class="text-center mt-15 mb-18"
                id="achievements"
                data-kt-scroll-offset="{default: 100, lg: 150}"
              >
                <!--begin::Title-->
                <h3 class="fs-2hx text-white fw-bolder mb-5">
                  Build Your Best Resume Ever
                </h3>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="fs-5 text-gray-700 fw-bold">
                 No more wasting your time designing your resume. Put in the content,
                  <br /> let us help you make it look good.
                </div>
                <!--end::Description-->
              </div>
              <!--end::Heading-->
              <!--begin::Statistics-->
              <div class="d-flex flex-center">
                <!--begin::Items-->
                <div
                  class="
                    d-flex
                    flex-wrap flex-center
                    justify-content-lg-between
                    mb-15
                    mx-auto
                    w-xl-900px
                  "
                >
                  <!--begin::Item-->
                  <div
                    class="
                      d-flex
                      flex-column flex-center
                      h-200px
                      w-200px
                      h-lg-250px
                      w-lg-250px
                      m-3
                      bgi-no-repeat bgi-position-center bgi-size-contain
                    "
                    style="
                      background-image: url('assets/media/svg/misc/octagon.svg');
                    "
                  >
                    <!--begin::Symbol-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                      <img
                        src="https://img.icons8.com/dusk/128/000000/design.png"
                      />
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Symbol-->
                    <!--begin::Info-->
                    <div class="mb-0">
                      <!--begin::Value-->
                      <div
                        class="
                          fs-lg-2hx fs-2x
                          fw-bolder
                          text-white
                          d-flex
                          flex-center
                        "
                      >
                        <div
                          class="min-w-70px counted"
                          style="font-size: 25px"
                          data-kt-countup="true"
                          data-kt-countup-value="700"
                          data-kt-countup-suffix="+"
                        >
                          100's of designs
                        </div>
                      </div>
                      <!--end::Value-->
                    </div>
                    <!--end::Info-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div
                    class="
                      d-flex
                      flex-column flex-center
                      h-200px
                      w-200px
                      h-lg-250px
                      w-lg-250px
                      m-3
                      bgi-no-repeat bgi-position-center bgi-size-contain
                    "
                    style="
                      background-image: url('assets/media/svg/misc/octagon.svg');
                    "
                  >
                    <!--begin::Symbol-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                      <img
                        src="https://img.icons8.com/dusk/128/000000/pdf.png"
                      />
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Symbol-->
                    <!--begin::Info-->
                    <div class="mb-0">
                      <!--begin::Value-->
                      <div
                        class="
                          fs-lg-2hx fs-2x
                          fw-bolder
                          text-white
                          d-flex
                          flex-center
                        "
                      >
                        <div
                          class="min-w-70px counted"
                          data-kt-countup="true"
                          data-kt-countup-value="700"
                          data-kt-countup-suffix="+"
                          style="font-size: 25px"
                        >
                          Save to PDF
                        </div>
                      </div>
                      <!--end::Value-->
                    </div>
                    <!--end::Info-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div
                    class="
                      d-flex
                      flex-column flex-center
                      h-200px
                      w-200px
                      h-lg-250px
                      w-lg-250px
                      m-3
                      bgi-no-repeat bgi-position-center bgi-size-contain
                    "
                    style="
                      background-image: url('assets/media/svg/misc/octagon.svg');
                    "
                  >
                    <!--begin::Symbol-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                      <img
                        src="https://img.icons8.com/dusk/128/000000/link--v1.png"
                      />
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Symbol-->
                    <!--begin::Info-->
                    <div class="mb-0">
                      <!--begin::Value-->
                      <div
                        class="
                          fs-lg-2hx fs-2x
                          fw-bolder
                          text-white
                          d-flex
                          flex-center
                        "
                      >
                        <div
                          class="min-w-70px counted"
                          data-kt-countup="true"
                          data-kt-countup-value="700"
                          data-kt-countup-suffix="+"
                          style="font-size: 25px"
                        >
                          Share as a link
                        </div>
                      </div>
                      <!--end::Value-->
                    </div>
                    <!--end::Info-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div
                    class="
                      d-flex
                      flex-column flex-center
                      h-200px
                      w-200px
                      h-lg-250px
                      w-lg-250px
                      m-3
                      bgi-no-repeat bgi-position-center bgi-size-contain
                    "
                    style="
                      background-image: url('assets/media/svg/misc/octagon.svg');
                    "
                  >
                    <!--begin::Symbol-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                      <img
                        src="https://img.icons8.com/dusk/128/000000/crowd.png"
                      />
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Symbol-->
                    <!--begin::Info-->
                    <div class="mb-0">
                      <!--begin::Value-->
                      <div
                        class="
                          fs-lg-2hx fs-2x
                          fw-bolder
                          text-white
                          d-flex
                          flex-center
                        "
                      >
                        <div
                          class="min-w-70px counted"
                          data-kt-countup="true"
                          data-kt-countup-value="700"
                          data-kt-countup-suffix="+"
                          style="font-size: 25px"
                        >
                          Used by millions
                        </div>
                      </div>
                      
                      <!--end::Value-->
                    </div>
                    <!--end::Info-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div
                    class="
                      d-flex
                      flex-column flex-center
                      h-200px
                      w-200px
                      h-lg-250px
                      w-lg-250px
                      m-3
                      bgi-no-repeat bgi-position-center bgi-size-contain
                    "
                    style="
                      background-image: url('assets/media/svg/misc/octagon.svg');
                    "
                  >
                    <!--begin::Symbol-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                      <img
                        src="https://img.icons8.com/dusk/128/000000/downloading-updates.png"
                      />
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Symbol-->
                    <!--begin::Info-->
                    <div class="mb-0">
                      <!--begin::Value-->
                      <div
                        class="
                          fs-lg-2hx fs-2x
                          fw-bolder
                          text-white
                          d-flex
                          flex-center
                        "
                      >
                        <div
                          class="min-w-70px counted"
                          data-kt-countup="true"
                          data-kt-countup-value="700"
                          data-kt-countup-suffix="+"
                          style="font-size: 25px"
                        >
                          Absolutely free!
                        </div>
                      </div>
                      <!--end::Value-->
                    </div>
                    <!--end::Info-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div
                    class="
                      d-flex
                      flex-column flex-center
                      h-200px
                      w-200px
                      h-lg-250px
                      w-lg-250px
                      m-3
                      bgi-no-repeat bgi-position-center bgi-size-contain
                    "
                    style="
                      background-image: url('assets/media/svg/misc/octagon.svg');
                    "
                  >
                    <!--begin::Symbol-->
                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                      <img
                        src="https://img.icons8.com/dusk/128/000000/learning.png"
                      />
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Symbol-->
                    <!--begin::Info-->
                    <div class="mb-0">
                      <!--begin::Value-->
                      <div
                        class="
                          fs-lg-2hx fs-2x
                          fw-bolder
                          text-white
                          d-flex
                          flex-center
                        "
                      >
                        <div
                          class="min-w-70px counted"
                          data-kt-countup="true"
                          data-kt-countup-value="80"
                          data-kt-countup-suffix="K+"
                          style="font-size: 25px"
                        >
                          AI powered
                        </div>
                      </div>
                      <!--end::Value-->
                    </div>
                    <!--end::Info-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div
                    class="
                      d-flex
                      flex-column flex-center
                      h-200px
                      w-200px
                      h-lg-250px
                      w-lg-250px
                      bgi-no-repeat bgi-position-center bgi-size-contain
                    "
                    style="
                      background-image: url('assets/media/svg/misc/octagon.svg');
                      margin-left: auto;
                      margin-right: auto;
                    "
                  >
                    <!--begin::Symbol-->
                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
                      <img
                        src="https://img.icons8.com/dusk/128/000000/cover-up.png"
                      />
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Symbol-->
                    <!--begin::Info-->
                    <div class="mb-0">
                      <!--begin::Value-->
                      <div
                        class="
                          fs-lg-2hx fs-2x
                          fw-bolder
                          text-white
                          d-flex
                          flex-center
                        "
                      >
                        <div
                          class="min-w-70px counted"
                          data-kt-countup="true"
                          data-kt-countup-value="35"
                          data-kt-countup-suffix="M+"
                          style="font-size: 25px;margin-left: 35px;"
                        >
                          Show / Hide Components
                        </div>
                      </div>
                      <!--end::Value-->
                    </div>
                    <!--end::Info-->
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Items-->
              </div>
              <!--end::Statistics--> 
              <!--begin::Testimonial-->   

              <div class="fs-2 fw-bold text-muted text-center mb-3">
                <span class="fs-1 lh-1 text-gray-700">“</span>A resume is a living document.
                 Don't write a resume once every few years.
                <br />
                <span class="text-gray-700 me-1">Update your resume every time you think of something you can add to it.</span>,
               
                <span class="fs-1 lh-1 text-gray-700">“</span>
              </div>
              <!--end::Testimonial-->
              <!--begin::Author-->
              <div class="fs-2 fw-bold text-muted text-center">
                <a
                  href="../../demo1/dist/account/security.html"
                  class="link-primary fs-4 fw-bolder"
                  >Aditya Naidu</a  
                >
                <span class="fs-4 fw-bolder text-gray-600">, Resume Genie Creator</span>
              </div>
              <!--end::Author-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Curve bottom-->
          <div class="landing-curve landing-dark-color">
            <svg
              viewBox="15 12 1470 48"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
          <!--end::Curve bottom-->
        </div>
        <!--end::Statistics Section-->

     
     
        <!--begin::Testimonials Section-->
        <div class="mt-20 mb-n20 position-relative z-index-2">
          <!--begin::Container-->
          <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-17">
              <!--begin::Title-->
              <h3
                class="fs-2hx text-dark mb-5"
                id="clients"
                data-kt-scroll-offset="{default: 125, lg: 150}"
              >
                What Our Clients Say
              </h3>
              <!--end::Title-->
              <!--begin::Description-->
              <div class="fs-5 text-muted fw-bold">
                Take us for a spin and see for yourself.  Once you use Resume Genie, <br>you're never going back to writing your resume in word or notepad!
               
              </div>
              <!--end::Description-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row g-lg-10 mb-10 mb-lg-20">
              <!--begin::Col-->
              <div class="col-lg-4">
                <!--begin::Testimonial-->
                <div
                  class="
                    d-flex
                    flex-column
                    justify-content-between
                    h-lg-100
                    px-10 px-lg-0
                    pe-lg-10
                    mb-15 mb-lg-0
                  "
                >
                  <!--begin::Wrapper-->
                  <div class="mb-7">
                    <!--begin::Rating-->
                    <div class="rating mb-6">
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                    </div>
                    <!--end::Rating-->
                    <!--begin::Title-->
                    <div class="fs-2 fw-bolder text-dark mb-3">
                      One resume, many looks
                    </div>
                    <!--end::Title-->
                    <!--begin::Feedback-->
                    <div class="text-gray-500 fw-bold fs-4">
                     Most people write a resume when they are applying for a job. I update my resume with every achievement. I can later show/hide parts of my resume based on the job.
                     I'm no longer afraid to update my resume. I look at my resume often - it shows me where I am versus where I want to be.
                    </div>
                    <!--end::Feedback-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Author-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <!-- <div class="symbol symbol-circle symbol-50px me-5">
										<img src="assets/media/avatars/150-2.jpg" class="" alt="">
									</div> -->
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <div class="flex-grow-1">
                      <a
                        href="#"
                        class="text-dark fw-bolder text-hover-primary fs-6"
                        >Richard Jenkins</a
                      >
                      <span class="text-muted d-block fw-bold"
                        >Seattle, USA</span
                      >
                    </div>
                    <!--end::Name-->
                  </div>
                  <!--end::Author-->
                </div>
                <!--end::Testimonial-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-lg-4">
                <!--begin::Testimonial-->
                <div
                  class="
                    d-flex
                    flex-column
                    justify-content-between
                    h-lg-100
                    px-10 px-lg-0
                    pe-lg-10
                    mb-15 mb-lg-0
                  "
                >
                  <!--begin::Wrapper-->
                  <div class="mb-7">
                    <!--begin::Rating-->
                    <div class="rating mb-6">
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                    </div>
                    <!--end::Rating-->
                    <!--begin::Title-->
                    <div class="fs-2 fw-bolder text-dark mb-3">
                      Clean layouts and configurable
                    </div>
                    <!--end::Title-->
                    <!--begin::Feedback-->
                    <div class="text-gray-500 fw-bold fs-4">
                     Resume Genie is super cool. I wonder why someone else hasn't thought of something so simple & useful. This is the fastest I've been able to update my resume ever! Typically I've spent days updating my resume, now it take just a few minutes
                    </div>
                    <!--end::Feedback-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Author-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <!-- <div class="symbol symbol-circle symbol-50px me-5">
										<img src="assets/media/avatars/150-3.jpg" class="" alt="">
									</div> -->
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <div class="flex-grow-1">
                      <a
                        href="#"
                        class="text-dark fw-bolder text-hover-primary fs-6"
                        >Jenna Rosenblum</a
                      >
                      <span class="text-muted d-block fw-bold"
                        >Virginia, USA</span
                      >
                    </div>
                    <!--end::Name-->
                  </div>
                  <!--end::Author-->
                </div>
                <!--end::Testimonial-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-lg-4">
                <!--begin::Testimonial-->
                <div
                  class="
                    d-flex
                    flex-column
                    justify-content-between
                    h-lg-100
                    px-10 px-lg-0
                    pe-lg-10
                    mb-15 mb-lg-0
                  "
                >
                  <!--begin::Wrapper-->
                  <div class="mb-7">
                    <!--begin::Rating-->
                    <div class="rating mb-6">
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                      <div class="rating-label me-2 checked">
                        <i class="bi bi-star-fill fs-5"></i>
                      </div>
                    </div>
                    <!--end::Rating-->
                    <!--begin::Title-->
                    <div class="fs-2 fw-bolder text-dark mb-3">
                     Simple to use and free
                    </div>
                    <!--end::Title-->
                    <!--begin::Feedback-->
                    <div class="text-gray-500 fw-bold fs-4">
                    This resume maker is by far the best out there. I've always dreaded writing a resume, the formatting and trying to make it nice and presentable is too painful. With Resume Genie I put in my content and then select from so many templates they offer. Love it!
                    </div>
                    <!--end::Feedback-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Author-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <!-- <div class="symbol symbol-circle symbol-50px me-5">
										<img src="assets/media/avatars/150-18.jpg" class="" alt="">
									</div> -->
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <div class="flex-grow-1">
                      <a
                        href="#"
                        class="text-dark fw-bolder text-hover-primary fs-6"
                        >Krishnan Matthews</a
                      >
                      <span class="text-muted d-block fw-bold"
                        >London</span
                      >
                    </div>
                    <!--end::Name-->
                  </div>
                  <!--end::Author-->
                </div>
                <!--end::Testimonial-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Highlight-->
            <div
              class="
                d-flex
                flex-stack flex-wrap flex-md-nowrap
                card-rounded
                shadow
                p-8 p-lg-12
                mb-n5 mb-lg-n13
              "
              style="
                background: linear-gradient(90deg, #20aa3e 0%, #03a588 100%);
              "
            >   
              <!--begin::Content-->
              <div class="my-2 me-5">
                <!--begin::Title-->
                <div class="fs-1 fs-lg-2qx fw-bolder text-white mb-2">
                 A better resume for all,
                  <span class="fw-normal">Share with your friends.</span>
                </div>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="fs-6 fs-lg-5 text-white fw-bold opacity-75">
                 We're looking for volunteers, interns, resume writers &  designers too!
                </div>
                <!--end::Description-->
              </div>
              <!--end::Content-->
              <!--begin::Link-->
              <a
                href="https://1.envato.market/EA4JP"
                class="
                  btn btn-lg btn-outline
                  border-2
                  btn-outline-white
                  flex-shrink-0
                  my-2
                "
                >Spread the goodness</a
              >
              <!--end::Link-->
            </div>
            <!--end::Highlight-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::Testimonials Section-->

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
          <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
          <span class="svg-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
            >
              <rect
                opacity="0.5"
                x="13"
                y="6"
                width="13"
                height="2"
                rx="1"
                transform="rotate(90 13 6)"
                fill="black"
              ></rect>
              <path
                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                fill="black"
              ></path>
            </svg>
          </span>
          <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
      </div>
      <!--end::Main-->

      <!--end::Body-->
      <svg
        id="SvgjsSvg1001"
        width="2"
        height="0"
        xmlns="http://www.w3.org/2000/svg"
        version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        xmlns:svgjs="http://svgjs.dev"
        style="
          overflow: hidden;
          top: -100%;
          left: -100%;
          position: absolute;
          opacity: 0;
        "
      >
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
      </svg>
    </body>
  </div>
</template>

<script>
// import Typewriter from "../plugin/TypeWriter.vue";
import Typewriter from "typewriter-effect/dist/core";

export default {
  mounted() {
    new Typewriter(this.$refs.landingtype, {
      strings: [
        "shareholders",
        "employees",
        "citizens",
        "constituents",
        "members",
        "stakeholders",
        "students",
        "investors",
        "residents",
        "customers",
        "donors",
      ],
      autoStart: true,
      loop: true,
    });
  },
  metaInfo() {
    return {
      title: "Resume Genie - A way better resume maker.",
      meta: [
        {
          name: "description",
          content:
            "Buid your resume once, change its look as often as you like.We keep adding new designs all the time.",
        },
        {
          property: "og:title",
          content: "Resume Genie - A way better resume maker.",
        },
        { property: "og:site_name", content: "Resume Genie" },
        {
          property: "og:description",
          content:
            "Buid your resume once, change its look as often as you like.We keep adding new designs all the time.",
        },
        { property: "og:type", content: "website" },
        { property: "og:url", content: "https://hearcho.com/" },
        {
          property: "og:image",
          content:
            "https://hearecho.com/theme/dist/assets/media/logos/hearecho.png",
        },

        { name: "twitter:card", content: "summary_large_image" },
        { property: "twitter:domain", content: "" },
        { property: "twitter:url", content: "https://hearcho.com/" },
        {
          property: "twitter:title",
          content: "Hearecho - Hear what matters to your people.",
        },
        {
          property: "twitter:description",
          content:
            "A place where communities and their leadership members can express themselves. Know what matters to everyone. Clear communication leads to better engagement.",
        },
        {
          property: "twitter:image",
          content:
            "https://hearecho.com/theme/dist/assets/media/logos/hearecho.png",
        },
      ],
    };
  },
};
</script>

