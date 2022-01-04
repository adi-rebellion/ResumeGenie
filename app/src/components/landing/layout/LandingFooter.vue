<template>
  <div class="mb-0" >
   
    <!--begin::Wrapper-->
    <div class="landing-rb-color pt-20">
      
      <!--begin::Separator-->
      <div class="landing-dark-separator"></div>
      <!--end::Separator-->
      <!--begin::Container-->
      <div class="container">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
          <!--begin::Copyright-->
          <div class="d-flex align-items-center order-2 order-md-1">
            <!--begin::Logo-->
            <a href="../../demo2/dist/landing.html">
              <img
                alt="Logo"
                src="theme/dist/assets/media/logos/ResumeGenieDark.png"
                height="150px"
              />
            </a>
            <!--end::Logo image-->
            <!--begin::Logo image-->
            <span
              class="mx-5 fs-6 fw-bold  pt-1"
              href="https://keenthemes.com"
              >© 2021 | made with <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAAEmklEQVRYhe2WXWwUVRTH/+fO7EcpuJKg7c6WYFHUZK3Q7iykQUwTFajKziKC8hUTrVXiV8Vggr408dX6oiGClERjJVB06UrA8BVUYpHdLTSmIkJsSruzNRYtH8Xu7M49PkjNWgotpK0+8H+8597z+59zbu4McFP/sWjwAgPUbeiVAJ5kYC6AIgASQCeAryG4QYskDg+VzDTK5gFiBYCKy+cEgC4iHGZJjVo09tU1DaQWBf1SYDOB3cyoJ+b9AM6o7n6RTrumq6TMB/gFBk7btqNq6q7mJAB0PTGnSNh2PYiLCdhIjL3C2d+e7XdLqDyNbfEQgatA1Achq7RIy4krDCSN4MMENADybW9pYgvVQg5VJVcHHKlfaR2ANWBaSQqIpWwA8IG3AHW0KZEBgG4jUMKgByXjZ81VfBD+Rk4dD1aB8Y4krCjaGTvwj4HUoqCfBQ5CyCVXa+9gpcJ6JTNv+NuVWDO4vd1GoISJqlniThvyVVVRfIWR2Dcpo+wBQNkBYVdokZYTYICSRrDZNAJVIwHfqExD32cagU8ZIDMcrDYN/TAAiO6wvpDAbm9pYstYGuizeh8H07RUKPC6d1ZsM5gnmkbZAiGZlzGj/mozHy3N2HM6bUvlWRCt72ord7FAPZFYJogw9/JtH3NN3fX9KWY+IqxsKRHvZ8ZcASZNpDOd42EAALSyhOFrin2nqulOAD4BkJXx5LvGy8DAqK1svgtAWgD4xWFZM8bLwIDUbHYGgHZBwH5JMMbbAJNYDGCvYGF/TEzPnKq8a9zG0F5R4WbCamZ8IrRIywkGmvMdnnUDG7rn35+fDOvPjZUBt6fvTWb+1heNnxQAAMlrQfRa1+LZdwOAzHNsJIY+FvBkSL+Hwa+wqr4B5HyMzFDweZCscVlqeVrNZrUvE5dMo2wBs/D5ovFReSXPVs65Je20jzDj3YGcYiCoRWMfMXAo7bQ/816YZHEtBCDqBNMPowHnigq135FtIMKB3IJE7iatADXMzCnPhe0/tvlVrSl+X6H7jpaUoUfNUHDVjcLblvqdKc+F7YKIC2/ntbmxK/6I2pb6nZOtvG0AnOlzE5eI/LN5qup8Szs3aX3Kc74cCp/RvjjWMVJ459LyPMXK7ACh/w/Hn8v9jW1WblwMPuBvbLO8BbyMmS+6PBd3K8484WtKrPttQt8UsPgcTBNGCjcXBaYoVmY3Aee9vROfGgwf0gAA0KZERnNNX0GMmJAy1hUOzrrtUn4PA/O8kZafTEPfkzL0R68FT4b0Ugg6CtCRQmfxKjp0KDska7gqkiH9aSK8D6YaLRpraA/PutUNta7QUVzdbbWvBNDjbYrv/lflYX01GO8x6GVfU2zbtfIPawAAuhbPnimk3ArQsTRlXireebwXAEwj0M5MC33R+EkA6HisZLJTdW1gYKYUYnlR5GjrcLmHHMFgFUWOttpOR4CIf3ex2mqGA/MBoM86d+8A3AwFFzpUVysIPbbTERgJHBhhB3KVDOmPEPAhiJtt5loAUIhqwVTOwIu+aHzf9eQbUQdy5YvG94G5BKAOhUSzQqIZhDNgLrle+E39L/QX/LPv6q/aCWkAAAAASUVORK5CYII="> at The Hiring Co.<br>
 icons by <a href="https://icons8.com/">icons8</a> </span
            >
            <!--end::Logo image-->
          </div>
          <!--end::Copyright-->
          <!--begin::Menu-->
          <ul
            class="
              menu menu-gray-600 menu-hover-primary
              fw-bold
              fs-6 fs-md-5
              order-1
              mb-5 mb-md-0
            "
          >
          <li class="menu-item mx-5">
             
               <router-link
                  :to="{ name: 'landing_terms' }"
                  class="menu-link px-2"
                 
                  >Terms</router-link>
            </li>
            <li class="menu-item mx-5">
              <!-- <a
                href="https://keenthemes.com"
                target="_blank"
                class="menu-link px-2"
                >Privacy</a
              > -->
               <router-link
                  :to="{ name: 'landing_privacy' }"
                  class="menu-link px-2"
                 
                  >Privacy</router-link>
            </li>
            <li class="menu-item mx-5">
              <!-- <a
                href="https://keenthemes.com/support"
                target="_blank"
                class="menu-link px-2"
                >Contact</a
              > -->
               <router-link
                  :to="{ name: 'landing_contact' }"
                  class="menu-link px-2"
                 
                  >Contact</router-link>
            </li>
                  
                 
            
              <li class="menu-item" mx-5>
              <!-- <a href="" target="_blank" class="menu-link px-2">FAQs</a> -->
              <router-link
                  :to="{ name: 'landing_faq' }"
                  class="menu-link px-2"
                 
                  >FAQs</router-link>
              
            </li>
          </ul>
          <!--end::Menu-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Wrapper-->
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
          />
          <path
            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
            fill="black"
          />
        </svg>
      </span>
      <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
  </div>
</template>

<script>
export default {};
</script>



