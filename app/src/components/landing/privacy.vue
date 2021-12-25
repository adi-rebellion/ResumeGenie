<template>
  <PublicPage>
    <template v-slot:header>
      <LandingNavHeader></LandingNavHeader>
    </template>
     <template v-slot:landing-body>
   <div class="container">
       <div class="content content-top text-center">
                <div class="py-50">
                    <h1 class="font-w700 text-dark-blue mb-10">Privacy Policy – hearecho.com</h1>
                    <h2 class="h4 font-w400 text-black-op">Last updated October 10, 2021</h2>
                </div>
        </div>
            <br>
    <h4>hearecho.com(hereinafter referred to as hearecho) knows that you care how information about you is used and shared, and we appreciate your trust that we will do so carefully and sensibly. This notice describes our privacy policy. <b>By visiting hearecho.com or using our mobile apps, you are using the hearecho platform and are agreeing to accept the practices described in this Privacy Notice.</b>
    </h4>
   <br>

   <h3>What Personal Information About Customers Does hearecho Gather?</h3>
   <p>The information we learn from customers helps us personalize and continually improve your hearecho experience. Here are the types of information we gather.<br><br>
   Information You Give Us: We receive and store any information you enter on our Web site or give us in any other way. <br><br>
   Automatic Information: We receive and store certain types of information whenever you interact with us. For example, like many Web sites, we use "cookies," and we obtain certain types of information when your Web browser accesses hearecho.com<br><br>
   Mobile: When you download or use apps created by hearecho or our subsidiaries, we may receive information about your location and your mobile device, including a unique identifier for your device. We may use this information to provide you with location-based services, such as advertisingand other personalized content. Most mobile devices allow you to turn off location services.<br><br>
   E-mail Communications: To help us make e-mails more useful and interesting, we often receive a confirmation when you open e-mail from hearecho.com if your computer supports such capabilities. We also compare our customer list to lists received from other companies, in an effort to avoid sending unnecessary messages to our customers. If you do not want to receive e-mail or other mail from us, please adjust your Customer Communication preferences.
   </p>

   <h3>What About Cookies?</h3>
   <p>Cookies are unique identifiers that we transfer to your device to enable our systems to recognize your device and to provide you personalized recommendations, to remember your preferences between visits and to improve your overall experience on our platform. The Help feature on most browsers will tell you how to prevent your browser from accepting new cookies, how to have the browser notify you when you receive a new cookie, or how to disable cookies altogether. Additionally, you can disable or delete similar data used by browser add-ons, such as Flash cookies, by changing the add-on's settings or visiting the Web site of its manufacturer. Because cookies allow you to take advantage of some of CC’s essential features, we recommend that you leave them turned on. For instance, if you block or otherwise reject our cookies, you will not be able to use some of the product features and services that require you to Sign in.
   </p>

   <h3>Does hearecho Share the Information It Receives?</h3>
   <p>Information about our customers is an important part of our business, and we are not in the business of selling it to others. We share customer information only as described below and with subsidiaries  thatCC controls that either are subject to this Privacy Notice or follow practices at least as protective as those described in this Privacy Notice.
   </p>

   <h3>How Secure Is Information About Me?</h3>
   <p>•	We work to protect the security of your information during transmission by using Secure Sockets Layer (SSL) software, which encrypts information you input.<br><br>
   •	It is important for you to protect against unauthorized access to your password and to your computer. Be sure to sign off when finished using a shared computer.
   </p>

   <h3>Conditions of Use, Notices, and Revisions</h3>
   <p>If you choose to visit hearecho.com, download & use our mobile apps or in general, use the hearecho platform, your visit and any dispute over privacy is subject to this Notice and our terms of Use, including limitations on damages, resolution of disputes, and application of the law of the state of Texas. If you have any concern about privacy at hearecho.com, please contact us with a thorough description, and we will try to resolve it. Our business changes constantly, and our Privacy Notice and the “Terms of use” will change also. We may e-mail periodic reminders of our notices and conditions, but you should check our Web site frequently to see recent changes. Unless stated otherwise, our current Privacy Notice applies to all information that we have about you and your account. We stand behind the promises we make, however, and will never materially change our policies and practices to make them less protective of customer information collected in the past without the consent of affected customers.
   </p>

   </div>


    
    </template>
   
   
    <template v-slot:landing-footer>
    
      <LandingFooter></LandingFooter>
    </template>
  </PublicPage>
</template>

<script>
import PublicPage from "./layout/PublicPage.vue";
import LandingFooter from "./layout/LandingFooter.vue";
import LandingNavHeader from "./layout/LandingNavHeader.vue";




export default {
  components: {
    PublicPage,
    LandingNavHeader,
    LandingFooter
   
    
  
  },
  mounted() {},
};

</script>
