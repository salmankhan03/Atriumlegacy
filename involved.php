<?php
    if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
        header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Atrium Legacy Foundation</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <link rel="stylesheet" href="./css/style.css">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <!-- <link rel="stylesheet" href="./css/initiative.css"> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="apple-touch-icon" sizes="180x180" href="./img/icons/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="./img/icons/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="./img/icons/favicon/favicon-16x16.png">
      <link rel="manifest" href="./img/icons/favicon/site.webmanifest">

      <style>
         .involvedBanner {
            background-image: url('./img/get_involved/banner_involved.jpg');
            background-position: top center; 
            background-repeat: no-repeat; 
            background-attachment: scroll; 
            background-size: cover;
         }

         .custom-banner {
            background-image: url('./img/get_involved/get_involved_5.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
         }
         
      </style>
   </head>
   <body>
      <?php include 'header.php'; ?> 
      <div id="middle">
         <div class="middle_inner">
            <div class="content_wrap fullwidth">
               <div class="middle_content entry"></div>
            </div>
            <!-- Banner -->
            <div class = "involvedBanner ">
                <div class = "container text-center banner-paddings">
                  <h2 class = "banner-header text-center white-text">
                     Get Involved
                  </h2>                  
               </div>
            </div> 
            <!-- Banner -->

            <div class="elementor-element elementor-element-7c02393 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited" data-id="7c02393" data-element_type="widget" data-widget_type="spacer.default">
               <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                     <div class="elementor-spacer-inner"></div>
                  </div>
               </div>
            </div>
            <!-- Empty Space -->

            <!-- second Section -->

            <div class="header_mid_inner pd-0 content-padding">
               <div class="row ml-0 mr-0" >
                  <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0">
                     <div class="p-xs-0 ">
                        <h2 class="h2-title mb-0">Ways to Get Involved</h2>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6 text-content">
                     <div class="">
                        <p class="mb-0 pb-0">We understand that creating meaningful social impact requires collective effort. Whether you are an individual, a corporation, or a community organization, there are many ways to get involved and contribute to our mission of fostering empathy, wellness, and sustainability. Your support, time, and resources are invaluable in helping us drive positive change and make a tangible difference in the lives of those we serve.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- <div class="row equal-height">
               <div class="col-md-6 col-lg-6">
                  <div class="left-section-padding left-margin-top-bottom">
                     <div class="p-xs-0 ">
                        <h2 class="h2-title mb-0">Ways to Get Involved</h2>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-6">
                  <div class="left-section-padding left-margin-top-bottom">
                     <p class="mb-0 pb-0">We understand that creating meaningful social impact requires collective effort. Whether you are an individual, a corporation, or a community organization, there are many ways to get involved and contribute to our mission of fostering empathy, wellness, and sustainability. Your support, time, and resources are invaluable in helping us drive positive change and make a tangible difference in the lives of those we serve.</p>
                  </div>
               </div>
            </div> -->

            <!--Third Section  -->
            <div class="row equal-height">
               <div class="col-md-6 col-lg-6">
                  <div class="left-section-padding left-margin-top-bottom">
                     <div class="h2-heading-section-space">
                        <h2 class="h2-title mb-4">Donate</h2>
                        <h5 class="italic-heading">
                           Your financial support allows us to continue our work and expand our initiatives.
                        </h5>
                     </div>
                     <div class="text-content-space">
                        <h4 class="text-content">
                           Every contribution, big or small, helps us create programs that foster empathy in children, support
                           the well-being of seniors, provide affordable housing, and enhance
                           global food security.
                        </h4>
                     </div>
                     <!-- <div id="" class="button_wrap">
                        <a href="./donate.php" class="custom-btn2">
                           <span>Donate Now</span>
                        </a>
                     </div> -->
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 d-flex align-items-center justify-content-center involved-right-bg">
                  <div class="text-center right-content-padding ">
                  </div>
               </div>
            </div>
            <div class="row equal-height">    
               <div class="col-md-6 col-lg-6 d-flex align-items-center justify-content-center involved-left-2-bg">
                  <div class="text-center right-content-padding ">
                  </div>
               </div>
               <div class="col-md-6 col-lg-6">
                  <div class="left-section-padding left-margin-top-bottom">
                     <div class="h2-heading-section-space">
                        <h2 class="h2-title mb-4">Volunteer</h2>
                        <h5 class="italic-heading">
                           Volunteers are the backbone of our foundation.
                        </h5>
                     </div>
                     <div class="text-content-space">
                        <h4 class="text-content">
                           By offering your time and skills, you can directly contribute to our initiatives and see the impact of your efforts firsthand. We offer a range of volunteer opportunities, from working with children and seniors to supporting our housing and agricultural projects.
                        </h4>
                     </div>
                     <div id="" class="button_wrap">
                        <a href="./contact_us.php" class="custom-btn2">
                           <span>Apply to Volunteer</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row equal-height">
               <div class="col-md-6 col-lg-6">
                  <div class="left-section-padding left-margin-top-bottom">
                     <div class="h2-heading-section-space">
                        <h2 class="h2-title mb-4">Partner with Us</h2>
                        <h5 class="italic-heading">
                           We are always looking to collaborate with like-minded organizations, businesses, and community groups.
                        </h5>
                     </div>
                     <div class="text-content-space">
                        <h4 class="text-content">
                           By partnering with Atrium Legacy Foundation, you can help amplify our impact and reach more people in need. Whether through corporate sponsorship, joint initiatives, or in-kind donations, your partnership can drive positive change.
                        </h4>
                     </div>
                     <div id="" class="button_wrap">
                        <a href="./contact_us.php" class="custom-btn2">
                           <span>Contact Us for Partnerships</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 d-flex align-items-center justify-content-center involved-right-3-bg">
                  <div class="text-center right-content-padding ">
                  </div>
               </div>
            </div>
            <div class="row equal-height">    
               <div class="col-md-6 col-lg-6 d-flex align-items-center justify-content-center involved-left-4-bg">
                  <div class="text-center right-content-padding ">
                  </div>
               </div>
               <div class="col-md-6 col-lg-6">
                  <div class="left-section-padding left-margin-top-bottom">
                     <div class="h2-heading-section-space">
                        <h2 class="h2-title mb-4">Attend an Event</h2>
                        <h5 class="italic-heading">
                           Join our initiatives in supporting our communities
                        </h5>
                     </div>
                     <div class="text-content-space">
                        <h4 class="text-content">
                           Our events are an excellent way to support our mission while engaging with our community. From fundraising galas to educational workshops, every event brings us closer to achieving our goals. Your participation not only helps raise funds but also spreads awareness about the critical issues we are addressing.
                        </h4>
                     </div>
                     <!-- hide before having sevent page -->
                     <!-- <div id="" class="button_wrap">
                        <a href="#" class="custom-btn2">
                           <span>View All Events</span>
                        </a>
                     </div> -->
                  </div>
               </div>
            </div>
            <!--Third Section  -->
            <div class="custom-banner w-100 content-padding">
               <div class="header_mid_inner pd-0 ">
                  <div class="row ml-0 mr-0" >
                     <div class="col-sm-12 col-md-6 col-lg-6 pl-3 pr-3">
                        <div class="p-xs-0">
                           <div class="h2-heading-section-space">
                              <h2 class="h2-title" style="color: #fff">Why Get Involved?</h2>
                           </div>
                           <div class="text-content-space">
                              <h4 class="text-content" style="color: #fff">
                                 Getting involved with Atrium Legacy Foundation is not just about giving; it’s about joining a collective effort to foster a supportive, equitable, and thriving society. By working together, we can create communities where every generation is empowered, respected, and has the opportunity to flourish. Your involvement helps us pave the way for a brighter future for all.
                              </h4>
                           </div>
                           <div id="" class="button_wrap">
                              <a href="./contact_us.php" class="custom-btn">
                                 <span>Join Us Today</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include 'footer.php'; ?> 
   </body>
</html>