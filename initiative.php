<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>ALF Impact | Education, Senior, Housing & AgriTech</title>
   <meta name="description" content="As a Canadian not-for-profit organization, ALF drives education, senior wellness, housing & AgriTech initiatives. Empower communities sustainably. Join us!">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta content="" name="keywords">
   <meta content="" name="description">
   <link rel="stylesheet" href="./css/style.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="apple-touch-icon" sizes="180x180" href="./img/icons/favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="./img/icons/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="./img/icons/favicon/favicon-16x16.png">
   <link rel="manifest" href="./img/icons/favicon/site.webmanifest">
   <style>
      .initiativeBanner {
         background-image: url('./img/our_initiatives/banner_initiative.jpg');
         background-position: top center;
         background-repeat: no-repeat;
         background-attachment: scroll;
         background-size: cover;
      }

      .custom-banner {
         background-image: url('./img/our_initiatives/our_initiatives_2.jpg');
         background-position: center center;
         background-repeat: no-repeat;
         background-attachment: scroll;
         background-size: cover;
      }

      .nav-tabs .nav-link {
         display: flex;
         align-items: center;
         justify-content: center;
      }

      .nav-tabs .nav-link:hover {
         color: #000000
      }

      /* .nav-tabs .nav-link .tab-icon {
            margin-right: 5px;
         } */
      .cards:hover {
         background-color: transparent !important;
         /* transform: scale(1.02); */
      }

      .card-fonts-heading-color:hover {
         color: #000000 !important;
      }

      ul li:before {
         background-color: #000 !important;
      }

      .nav-item li:before {
         list-style: none !important
      }

      .nav-item:before {
         list-style-type: none !important;
         list-style: none !important;
         background-color: transparent !important;
         padding-left: 0;
      }

      .nav-link.active,
      .nav-item.show .nav-link .icon-title {
         color: #0b9444 !important;
      }

      /* .nav-tabs{
            display: flex;
            flex-wrap: wrap;
         }
         .nav-item{
            flex: 1 1 calc(50% - 10px);
         } */
      /* .no-bullets {
            
         } */
      .nav-item {
         margin-bottom: 45px !important;
         flex: 1;
      }

      .tab-icon {
         width: 75px;
         height: 75px;
         background-size: 75px;
         background-repeat: no-repeat;
         background-position: center;
         margin-bottom: 10px;
      }

      .icon1 {
         background-image: url("./img/icons/Black/ReStart_Education.png");
      }

      .icon2 {
         background-image: url("./img/icons/Black/Aging_Grace.png");
      }

      .icon3 {
         background-image: url("./img/icons/Black/HomeStrong.png");
      }

      .icon4 {
         background-image: url("./img/icons/Black/AgriThrive.png");
      }

      .nav-link.active .icon1 {
         background-image: url("./img/icons/Green/ReStart_Education.png");
      }

      .nav-link.active .icon2 {
         background-image: url("./img/icons/Green/Aging_Grace.png");
      }

      .nav-link.active .icon3 {
         background-image: url("./img/icons/Green/HomeStrong.png");
      }

      .nav-link.active .icon4 {
         background-image: url("./img/icons/Green/AgriThrive.png");
      }

      .icon-title {
         font-family: 'Moisette';
         font-size: 26px;
         color: #000;
      }

      .nav-link.active .icon-title {
         color: #0b9444;
      }

      .tab-cards {
         font-family: 'Montserrat';
      }

      .tabs-cards-body li {
         font-family: 'Montserrat';
      }

      .tabs-cards-body ul {
         list-style-position: outside;
         padding-left: 20px;
      }

      .tabs-cards-body li {
         text-indent: -15px;
      }

      .tab-style {
         display: flex;
         flex-direction: column;
         align-items: center;
         text-align: center;
      }
   </style>
</head>

<body>
   <?php include 'header.php' ?>
   <div id="middle">
      <div class="middle_inner">
         <div class="content_wrap fullwidth">
            <div class="middle_content entry"></div>
         </div>
         <!-- Banner -->
         <div class="initiativeBanner">
            <div class="container text-center banner-paddings">
               <h2 class="banner-header text-center white-text">
                  Our Initiatives
               </h2>
            </div>
         </div>

         <!-- <div class="header_mid_inner pd-0 content-padding">
            <div class="row ml-0 mr-0">
               <div class="col-sm-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center">
                  <div class="pl-5 pr-5">
                     <image class="" src="./img/our_initiatives/our_initiatives_1.jpg" alt="left-side-image"></image>
                  </div>
               </div>
               <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 d-flex align-items-center">
                  <div class="text-left p-5 right-content-padding">
                     <h2 class="h2-title pb-2" style="color: #000">
                        Atrium Legacy Foundation believe that meaningful change starts with strategic, impactful initiatives.
                     </h2>
                     <p class="p-0 m-0 text-content">
                        Our programs are designed to address the most pressing challenges faced by our communities today. By focusing on education, senior wellness, housing, and agricultural technology, we aim to create lasting solutions that empower individuals and strengthen communities.
                     </p>
                  </div>
               </div>
            </div>
         </div> -->

         <div class="header_mid_inner pd-0">
            <!-- <ul class="nav nav-tabs w-100 d-flex no-bullets" id="myTab" role="tablist" style="justify-content: space-between;">
               <li class="nav-item p-0" role="presentation">
                  <a class="nav-link active" id="ReStart-Education-tab" data-toggle="tab" href="#ReStart-Education" role="tab" aria-controls="ReStart-Education" aria-selected="true" style="background-color:transparent;border:none">
                     <div class="tab-style">
                        <div class="tab-icon icon1"></div>
                        <span class="icon-title">ReStart Education</span>
                     </div>
                  </a>
               </li>

               <li class="nav-item p-0" role="presentation">
                  <a class="nav-link" id="Aging-Grace-tab" data-toggle="tab" href="#Aging-Grace" role="tab" aria-controls="Aging-Grace" aria-selected="false" style="background-color:transparent;border:none">
                     <div class="tab-style">
                        <div class="tab-icon icon2"></div>
                        <span class="icon-title">Aging Grace</span>
                     </div>
                  </a>
               </li>

               <li class="nav-item p-0" role="presentation">
                  <a class="nav-link" id="HomeStrong-tab" data-toggle="tab" href="#HomeStrong" role="tab" aria-controls="HomeStrong" aria-selected="false" style="background-color:transparent;border:none">
                     <div class="tab-style">
                        <div class="tab-icon icon3"></div>
                        <span class="icon-title">HomeStrong</span>
                     </div>
                  </a>
               </li>

               <li class="nav-item p-0" role="presentation">
                  <a class="nav-link" id="AgriThrive-tab" data-toggle="tab" href="#AgriThrive" role="tab" aria-controls="AgriThrive" aria-selected="false" style="background-color:transparent;border:none;">
                     <div class="tab-style">
                        <div class="tab-icon icon4"></div>
                        <span class="icon-title">AgriThrive</span>
                     </div>
                  </a>
               </li>
            </ul> -->

            <!-- Tab Content -->
            <!-- <div class="tab-content" id="myTabContent" style="padding-bottom: 65px;">
                  <div class="tab-pane show active" id="ReStart-Education" role="tabpanel" aria-labelledby="ReStart-Education-tab">
                     <div class="row ml-0 mr-0" >
                        <div class="col-sm-12 col-md-8 col-lg-8 pl-0 pr-0">
                           <div class="mt-5">
                              <div class="tabs-cards pl-3 pr-3">
                                 <div class="tabs-cards-body text-left mt-4">
                                    <h4 class="italic-heading mb-5">To nurture a generation that values empathy, social responsibility, and community engagement over material wealth.</h4>
                                    <P class="tab-cards-title" >OVERVIEW</p>
                                    <p class="mt-3 text-left card-fonts-color">The Empathy Education Initiative is dedicated to integrating social impact education into early childhood and primary education. By collaborating with educators, schools, and parents, we aim to counter the prevailing materialistic mindset with lessons that emphasize the importance of empathy and social values. Through interactive learning methods such as storytelling, role-playing, and community involvement projects, we make these vital lessons engaging and relatable for young learners.</p>
                                    <P class="tab-cards-title" >KEY ACTIONS</p>
                                    <ul class="mt-3 mb-5 text-left">
                                       <li>Developing a curriculum that promotes social values from an early age.</li>
                                       <li>Partnering with schools to embed social impact education within their programs.</li>
                                       <li>Engaging parents and communities to reinforce the importance of empathy and responsibility.</li>
                                    </ul>
                                    <P class="tab-cards-title" >EXPECTED IMPACT</p>
                                    <p class="mt-3 text-left card-fonts-color">This initiative will cultivate a generation that prioritizes compassion and community involvement, creating a ripple effect of positive social change for years to come.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 pl-0 pr-0 pb-5">
                           <div class="text-left p-0 p-md-5 right-content-padding">
                              <img src="img/our_initiatives/our_initiatives_ReStartEducation.jpg" alt="Image">
                           </div>
                        </div>
                     </div>
                  </div> 
                  
                  <div class="tab-pane" id="Aging-Grace" role="tabpanel" aria-labelledby="Aging-Grace-tab">
                     <div class="row ml-0 mr-0" >
                        <div class="col-sm-12 col-md-8 col-lg-8 pl-0 pr-0">
                           <div class="mt-5">
                              <div class="tabs-cards pl-3 pr-3">
                                 <div class="tabs-cards-body text-left mt-4">
                                    <h4 class="italic-heading mb-5">To promote holistic wellness and societal integration for the senior population, ensuring they remain vital members of the community.</h4>
                                    <P class="tab-cards-title" >OVERVIEW</p>
                                    <p class="mt-3 text-left card-fonts-color">The Holistic Aging Initiative is focused on challenging the traditional norms of elderly care, which often lead to institutionalization and marginalization. Our approach emphasizes comprehensive wellness—physical, mental, and emotional—for seniors, enabling them to lead fulfilling lives within their communities. By developing wellness programs tailored specifically for seniors and creating robust support networks, we strive to ensure that aging is a dignified and respected phase of life.</p>
                                    <P class="tab-cards-title" >KEY ACTIONS</p>
                                    <ul class="mt-3 mb-5 text-left">
                                       <li>Designing wellness programs that address the unique needs of seniors.</li>
                                       <li>Encouraging corporate and community investment in senior wellness.</li>
                                       <li>Establishing community centers that keep seniors engaged and active.</li>
                                    </ul>
                                    <P class="tab-cards-title" >EXPECTED IMPACT</p>
                                    <p class="mt-3 text-left card-fonts-color">This initiative will shift societal perspectives on aging, ensuring that seniors are valued and respected as integral members of their communities.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 pl-0 pr-0 pb-5">
                           <div class="text-left p-0 p-md-5 right-content-padding">
                              <img src="img/our_initiatives/our_initiatives_AgingGrace.jpg" alt="Image">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane" id="HomeStrong" role="tabpanel" aria-labelledby="HomeStrong-tab">
                     <div class="row ml-0 mr-0" >
                        <div class="col-sm-12 col-md-8 col-lg-8 pl-0 pr-0">
                           <div class="mt-5">
                              <div class="tabs-cards pl-3 pr-3">
                                 <div class="tabs-cards-body text-left mt-4">
                                    <h4 class="italic-heading mb-5">To provide fast and affordable housing solutions, fostering stability and security for vulnerable populations.</h4>
                                    <P class="tab-cards-title" >OVERVIEW</p>
                                    <p class="mt-3 text-left card-fonts-color">The Resilient Homes Initiative addresses the urgent need for affordable housing, particularly in the wake of economic challenges and the pandemic. By innovating construction methodologies that reduce costs and build time without compromising quality, we aim to make secure housing accessible to those who need it most. Our focus is on creating environments that foster stability and character development, particularly for young families and vulnerable populations.</p>
                                    <P class="tab-cards-title" >KEY ACTIONS</p>
                                    <ul class="mt-3 mb-5 text-left">
                                       <li>Implementing cost-effective and sustainable construction techniques.</li>
                                       <li>Partnering with local governments, developers, and non-profits to scale affordable housing.</li>
                                       <li>Creating safe and nurturing communities that promote growth and stability.</li>
                                    </ul>
                                    <P class="tab-cards-title" >EXPECTED IMPACT</p>
                                    <p class="mt-3 text-left card-fonts-color">This initiative will contribute to social stability and economic recovery by providing affordable and secure housing for those who need it most.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 pl-0 pr-0 pb-5">
                           <div class="text-left p-0 p-md-5 right-content-padding">
                              <img src="img/our_initiatives/our_initiatives_HomeStrong.jpg" alt="Image">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane" id="AgriThrive" role="tabpanel" aria-labelledby="AgriThrive-tab">
                     <div class="row ml-0 mr-0" >
                        <div class="col-sm-12 col-md-8 col-lg-8 pl-0 pr-0">
                           <div class="mt-5">
                              <div class="tabs-cards pl-3 pr-3">
                                 <div class="tabs-cards-body text-left mt-4">
                                    <h4 class="italic-heading mb-5">To enhance global food security by leveraging agricultural technology and promoting sustainable farming practices.</h4>
                                    <P class="tab-cards-title" >OVERVIEW</p>
                                    <p class="mt-3 text-left card-fonts-color">The Global Harvest Initiative is designed to address global food inequalities by investing in agricultural technologies that boost productivity, particularly in underdeveloped and developing countries. Through international collaborations, we aim to transfer knowledge and technology to regions facing food insecurity. Our focus is on sustainable farming practices that preserve natural resources and reduce dependency on imports, empowering communities to achieve self-sufficiency.</p>
                                    <P class="tab-cards-title" >KEY ACTIONS</p>
                                    <ul class="mt-3 mb-5 text-left">
                                       <li>Investing in and developing technologies to increase agricultural productivity.</li>
                                       <li>Promoting international partnerships for knowledge transfer.</li>
                                       <li>Encouraging sustainable farming practices that protect the environment.</li>
                                    </ul>
                                    <P class="tab-cards-title" >EXPECTED IMPACT</p>
                                    <p class="mt-3 text-left card-fonts-color">This initiative will enhance global food security, reduce food distribution inequalities, and empower developing nations to achieve food self-sufficiency.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 pl-0 pr-0 pb-5">
                           <div class="text-left p-0 p-md-5 right-content-padding">
                              <img src="img/our_initiatives/our_initiatives_AgriThrive.jpg" alt="Image">
                           </div> 
                        </div>
                     </div>
                  </div> -->
            <div class="tab-content" id="myTabContent" style="padding-bottom: 65px;">
               <!-- ReStart-Education -->
               <!-- <div class="tab-pane" id="ReStart-Education" role="tabpanel" aria-labelledby="ReStart-Education-tab">
                  <div class="row ml-0 mr-0">
                     <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 mt-5">
                        <div class="tabs-cards pl-3 pr-3">
                           <div class="tabs-cards-body text-left">
                              <h4 class="italic-heading mb-5">To nurture a generation that values empathy, social responsibility, and community engagement over material wealth.</h4>
                              <P class="tab-cards-title">OVERVIEW</p>
                              <p class="mt-3 text-left card-fonts-color">The Empathy Education Initiative is dedicated to integrating social impact education into early childhood and primary education. By collaborating with educators, schools, and parents, we aim to counter the prevailing materialistic mindset with lessons that emphasize the importance of empathy and social values. Through interactive learning methods such as storytelling, role-playing, and community involvement projects, we make these vital lessons engaging and relatable for young learners.</p>
                           </div>
                        </div>
                     </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 pl-5 pr-0 pb-5 pt-5">
                        <div class="text-left p-0 right-content-padding">
                           <img src="img/our_initiatives/our_initiatives_ReStartEducation.jpg" alt="Image">
                        </div>
                     </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 pt-4">
                        <div class="tabs-cards pl-3 pr-4">
                           <div class="tabs-cards-body text-left">
                              <p class="tab-cards-title">KEY ACTIONS</p>
                              <ul class="mt-3 mb-5 text-left">
                                 <li>Developing a curriculum that promotes social values from an early age.</li>
                                 <li>Partnering with schools to embed social impact education within their programs.</li>
                                 <li>Engaging parents and communities to reinforce the importance of empathy and responsibility.</li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 pl-5 pr-0 pt-4">
                        <div class="tabs-cards">
                           <div class="tabs-cards-body text-left">
                              <p class="tab-cards-title">EXPECTED IMPACT</p>
                              <p class="mt-3 text-left card-fonts-color">This initiative will cultivate a generation that prioritizes compassion and community involvement, creating a ripple effect of positive social change for years to come.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->

               <!-- Aging-Grace -->
               <div class="tab-pane show active" id="Aging-Grace" role="tabpanel" aria-labelledby="Aging-Grace-tab">
                  <div class="row ml-0 mr-0">
                     <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 mt-5">
                        <div class="tabs-cards pl-3 pr-3">
                           <div class="tabs-cards-body text-left">
                              <h4 class="italic-heading mb-5">To promote holistic wellness and societal integration for the senior population, ensuring they remain vital members of the community.</h4>
                              <p class="tab-cards-title">OVERVIEW</p>
                              <p class="mt-3 text-left card-fonts-color">The Holistic Aging Initiative is focused on challenging the traditional norms of elderly care, which often lead to institutionalization and marginalization. Our approach emphasizes comprehensive wellness—physical, mental, and emotional—for seniors, enabling them to lead fulfilling lives within their communities. By developing wellness programs tailored specifically for seniors and creating robust support networks, we strive to ensure that aging is a dignified and respected phase of life.</p>
                           </div>
                        </div>
                     </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 pl-5 pr-0 pb-5 pt-5">
                        <div class="text-left p-0 right-content-padding">
                           <img src="img/our_initiatives/our_initiatives_AgingGrace.jpg" alt="Image">
                        </div>
                     </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 pt-4">
                        <div class="tabs-cards pl-3 pr-4">
                           <div class="tabs-cards-body text-left">
                              <p class="tab-cards-title">KEY ACTIONS</p>
                              <ul class="mt-3 mb-5 text-left">
                                 <li>Designing wellness programs that address the unique needs of seniors.</li>
                                 <li>Encouraging corporate and community investment in senior wellness.</li>
                                 <li>Establishing community centers that keep seniors engaged and active.</li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 pl-5 pr-0 pt-4">
                        <div class="tabs-cards">
                           <div class="tabs-cards-body text-left">
                              <p class="tab-cards-title">EXPECTED IMPACT</p>
                              <p class="mt-3 text-left card-fonts-color">This initiative will shift societal perspectives on aging, ensuring that seniors are valued and respected as integral members of their communities.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- HomeStrong -->
               <!-- <div class="tab-pane" id="HomeStrong" role="tabpanel" aria-labelledby="HomeStrong-tab">
                  <div class="row ml-0 mr-0">
                     <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 mt-5">
                        <div class="tabs-cards pl-3 pr-3">
                           <div class="tabs-cards-body text-left">
                              <h4 class="italic-heading mb-5">To provide fast and affordable housing solutions, fostering stability and security for vulnerable populations.</h4>
                              <P class="tab-cards-title">OVERVIEW</p>
                              <p class="mt-3 text-left card-fonts-color">The Resilient Homes Initiative addresses the urgent need for affordable housing, particularly in the wake of economic challenges and the pandemic. By innovating construction methodologies that reduce costs and build time without compromising quality, we aim to make secure housing accessible to those who need it most. Our focus is on creating environments that foster stability and character development, particularly for young families and vulnerable populations.</p>
                           </div>
                        </div>
                     </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 pl-5 pr-0 pb-5 pt-5">
                        <div class="text-left p-0 right-content-padding">
                           <img src="img/our_initiatives/our_initiatives_HomeStrong.jpg" alt="Image">
                        </div>
                     </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 pt-4">
                        <div class="tabs-cards pl-3 pr-4">
                           <div class="tabs-cards-body text-left">
                              <p class="tab-cards-title">KEY ACTIONS</p>
                              <ul class="mt-3 mb-5 text-left">
                                 <li>Implementing cost-effective and sustainable construction techniques.</li>
                                 <li>Partnering with local governments, developers, and non-profits to scale affordable housing.</li>
                                 <li>Creating safe and nurturing communities that promote growth and stability.</li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 pl-5 pr-0 pt-4">
                        <div class="tabs-cards">
                           <div class="tabs-cards-body text-left">
                              <p class="tab-cards-title">EXPECTED IMPACT</p>
                              <p class="mt-3 text-left card-fonts-color">This initiative will contribute to social stability and economic recovery by providing affordable and secure housing for those who need it most.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->

               <!-- AgriThrive -->
               <!-- <div class="tab-pane" id="AgriThrive" role="tabpanel" aria-labelledby="AgriThrive-tab">
                  <div class="row ml-0 mr-0">
                     <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 mt-5">
                        <div class="tabs-cards pl-3 pr-3">
                           <div class="tabs-cards-body text-left">
                              <h4 class="italic-heading mb-5">To enhance global food security by leveraging agricultural technology and promoting sustainable farming practices.</h4>
                              <P class="tab-cards-title">OVERVIEW</p>
                              <p class="mt-3 text-left card-fonts-color">The Global Harvest Initiative is designed to address global food inequalities by investing in agricultural technologies that boost productivity, particularly in underdeveloped and developing countries. Through international collaborations, we aim to transfer knowledge and technology to regions facing food insecurity. Our focus is on sustainable farming practices that preserve natural resources and reduce dependency on imports, empowering communities to achieve self-sufficiency.</p>
                           </div>
                        </div>
                     </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 pl-5 pr-0 pb-5 pt-5">
                        <div class="text-left p-0 right-content-padding">
                           <img src="img/our_initiatives/our_initiatives_AgriThrive.jpg" alt="Image">
                        </div>
                     </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 pt-4">
                        <div class="tabs-cards pl-3 pr-4">
                           <div class="tabs-cards-body text-left">
                              <p class="tab-cards-title">KEY ACTIONS</p>
                              <ul class="mt-3 mb-5 text-left">
                                 <li>Investing in and developing technologies to increase agricultural productivity.</li>
                                 <li>Promoting international partnerships for knowledge transfer.</li>
                                 <li>Encouraging sustainable farming practices that protect the environment.</li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <div class="col-sm-12 col-md-6 col-lg-6 pl-5 pr-0 pt-4">
                        <div class="tabs-cards">
                           <div class="tabs-cards-body text-left">
                              <p class="tab-cards-title">EXPECTED IMPACT</p>
                              <p class="mt-3 text-left card-fonts-color">This initiative will enhance global food security, reduce food distribution inequalities, and empower developing nations to achieve food self-sufficiency.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </div>

      <!-- Horizontal Tabs -->
      <div id="cmsmasters_row_ef0f8170ae" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
         <div class="custom-banner w-100">
            <div class="header_mid_inner pd-0 ">
               <div class="row ml-0 mr-0">
                  <div class="col-sm-12 col-md-6 col-lg-6 pl-3 pr-3">
                     <div class="" style="padding: 100px 0;">
                        <div class="h2-heading-section-space">
                           <h2 class="h2-title" style="color:#fff;">Future Initiatives</h2>
                        </div>
                        <div class="">
                           <h4 class="text-content-white">
                              As we continue to grow and learn from our communities, Atrium Legacy Foundation is committed to expanding our portfolio of initiatives. Our goal is to remain responsive to emerging needs and challenges, ensuring that our work continues to create positive and sustainable change.
                           </h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>

   <!-- Tabs Script -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <script>
      // scroll and active tab
      $(document).ready(function() {
         const urlParams = new URLSearchParams(window.location.search);
         const tabToActivate = urlParams.get('tab');

         if (tabToActivate) {
            $('.nav-tabs a[href="#' + tabToActivate + '"]').tab('show');
            if (window.innerWidth < 1025) {
               $('html, body').animate({
                  scrollTop: $('#myTab').offset().top
               }, 500);
            } else {
               $('html, body').animate({
                  scrollTop: $('#myTab').offset().top - 80
               }, 500);
            }
         }
      });

      //    $(document).ready(function() {
      //       $('#ReStart-Education-tab').hover(function() {
      //           $(this).tab('show');
      //       });
      //       $('#Aging-Grace-tab').hover(function() {
      //           $(this).tab('show');
      //       });
      //       $('#HomeStrong-tab').hover(function() {
      //           $(this).tab('show');
      //       });
      //       $('#AgriThrive-tab').hover(function() {
      //           $(this).tab('show');
      //       });
      //   });

      //hover to show tab
      $(document).ready(function() {
         $('.nav-link').hover(function() {
            $(this).tab('show');
         });
      });
   </script>
   <?php include 'footer.php'; ?>

</body>

</html>