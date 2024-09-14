<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Atriumlegacy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="./css/style.css">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    


    <style>
        .aboutUsBanner {
                    background-image: url('./img/about_us_1.jpg');
                    background-position: top center; 
                    background-repeat: no-repeat; 
                    background-attachment: scroll; 
                    background-size: cover;
                    /* padding: 250px 0 150px 0; */
                }
                .banner-paddings { 
                    padding-top: 300px; 
                } 
                .banner-paddings { 
                    padding-bottom: 320px; 
                }

                /*  */
                .custom-banner {
                        background-image: url('./img/about_us_4.jpg');
                        background-position: center center;
                        background-repeat: no-repeat;
                        background-attachment: scroll;
                        background-size: cover;
                        }
                /*  */

                .nav-link {
                  display: flex;
                  align-items: center;
                  color: #000;
               }
               .nav-link.active,
               .nav-item.show .nav-link {
                    color: #000 !important;
                }
                .nav-tabs {
                  display: flex;
                  align-items: left;
                  flex-direction: column;
               }
               .nav-tabs .nav-link:hover {
                  color:#000000
               }
               .nav-tabs .nav-link .tab-icon {
                  margin-right: 5px;
               }
               .nav-item:before{
                  list-style-type: none !important;
                  list-style:none !important;
                  background-color: transparent !important; 
                  padding-left: 0;
               }
                @media only screen and (max-width: 1024px) {
                    .banner-paddings {
                        padding-top: 160px;
                    }
                }
                @media only screen and (max-width: 1024px) {
                    .banner-paddings {
                        padding-bottom: 180px;
                    }
                }
                @media only screen and (max-width: 768px) {
                    .banner-paddings {
                        padding-top: 100px;
                    }
                }
                @media only screen and (max-width: 768px) {
                    .banner-paddings {
                        padding-bottom: 120px;
                    }
                }
                @media only screen and (max-width: 540px) {
                    .banner-paddings {
                        padding-top: 100px;
                    }
                }
                @media only screen and (max-width: 540px) {
                    .banner-paddings {
                        padding-bottom: 120px;
                    }
                }
                @media only screen and (max-width: 320px) {
                    .banner-paddings {
                        padding-top: 70px;
                    }
                }
                @media only screen and (max-width: 320px) {
                    .banner-paddings {
                        padding-bottom: 90px;
                    }
                }
                .blue-header{
                    font-size:38px;
                    line-height:50px;
                    color:#ffffff;
                    font-family:'Moisette';
                    font-weight:bold;
                    text-align:left;
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
                <div class = "aboutUsBanner">
                    <div class = "container text-center banner-paddings">
                        <h2 class = "banner-header text-center white-text">
                            About Us
                        </h2>                  
                    </div>
                </div> 
            <!-- Banner -->
            <!-- Top Section -->
                <!-- <div id="cmsmasters_row_nofslyz1hn" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                        <div class="cmsmasters_row_outer_parent">
                            <div class="cmsmasters_row_outer">
                                <div class="cmsmasters_row_inner">
                                    <div class="cmsmasters_row_margin cmsmasters_11">
                                        <div id="cmsmasters_column_tsg36hzfki" class="cmsmasters_column one_first">
                                            <div class="cmsmasters_column_inner">
                                                <div id="cmsmasters_heading_rrgejmijg" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                    <h2 class="cmsmasters_heading" style="font-family: 'Moisette'; font-weight: bold">About Us</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div> -->
            <!-- Top Section Close -->

            <div class="row equal-height">
               <div class="col-md-4 col-lg-4 col-sm-12 d-flex align-items-center justify-content-center about-story-bg">
                  <div class="text-center right-content-padding ">
                    <h2 class="blue-header"> Founded on the belief that true progress is achieved through empathy, respect, and sustainability </h2>
                  </div>
               </div>
               <div class="col-md-8 col-lg-8 col-sm-12">
                  <div class="left-section-padding left-margin-top-bottom">
                        <div class="h2-heading-section-space mb-5">
                           <!-- <h2 class="h2-title mb-4">Donate</h2> -->
                           <h2 class="h2-title mb-4" style="font-family: 'Moisette'; color: #000">Our Story</h2>
                        </div>
                        <div class="text-content-space">
                           <h4 class="text-content">
                                The Atrium Legacy Foundation was established to create meaningful social impact across generations. Our work is driven by a commitment to addressing pressing societal challenges through innovative initiatives that prioritize the well-being of our communities. We envision a world where every individual, from the youngest child to the most senior citizen, has the opportunity to thrive with dignity and purpose.
                           </h4>
                        </div>                    
                  </div>
               </div>
            </div>

            <!-- Our Story Section  -->
                <!-- <div id="cmsmasters_row_ho2wm72u7h" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
                                <div class="cmsmasters_row_margin cmsmasters_row_columns_behavior cmsmasters_1323">
                                    <div id="cmsmasters_column_fds70fuqos" class="cmsmasters_column one_third">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_heading_0lgp4yrd9u" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                <h2 class="cmsmasters_heading"> Founded on the belief that true progress is achieved through empathy, respect, and sustainability </h2>
                                            </div>                                        
                                    </div>
                                </div>
                                <div id="cmsmasters_column_9umckw2emc" class="cmsmasters_column two_third">
                                    <div class="cmsmasters_column_inner"><div id="cmsmasters_heading_k610h6ljqm" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h2 class="cmsmasters_heading" style="font-family: 'Moisette'; color: #000">Our Story</h2>
                                    </div>
                                    <div id="cmsmasters_heading_k4eli1cq0l" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h6 class="cmsmasters_heading">The Atrium Legacy Foundation was established to create meaningful social impact across generations. Our work is driven by a commitment to addressing pressing societal challenges through innovative initiatives that prioritize the well-being of our communities. We envision a world where every individual, from the youngest child to the most senior citizen, has the opportunity to thrive with dignity and purpose.</h6>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <!-- Our Story Section Closed-->

            <div style="background-color: #cfddd0;">
                <div class="header_mid_inner pd-0">
                    <div class="row ml-0 mr-0" >
                        <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 ">
                            <div class="pt-5 pb-5 p-xs-0 pr-3">
                                <div class="mt-5 mb-4" style="color:#000; text-align:left; font-size: 26px">OUR MISSION </div>
                                <h4 class="mb-4" style="color:#000; text-align:left; font-family:'Moisette'; font-size:38px; font-weight:bold">
                                    Our mission is to empower communities by instilling social values, supporting holistic wellness, and creating sustainable futures.
                                </h4>
                                <p class="" style="font-family: 'Montserrat';font-size: 18px;line-height: 28px;font-weight: 400;color: #000;">
                                    Through our initiatives, we aim to address pressing societal challenges with innovative approaches that prioritize empathy, social responsibility, and community engagement.
                                </p>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0 pr-3">
                            <div class="pt-5 pb-5 pl-3">
                                <div class="mt-5 mb-4" style="color:#000; text-align:left; font-size: 26px">OUR VISION </div>
                                <h4 class="mb-4" style="color:#000; text-align:left; font-family:'Moisette'; font-size:38px; font-weight:bold">
                                    We envision communities where every individual is empowered to thrive, with access to the resources and support they need across all stages of life.
                                </h4>
                                <p class="" style="font-family: 'Montserrat';font-size: 18px;line-height: 28px;font-weight: 400;color: #000;">
                                    By fostering collaboration and innovation, we aim to create lasting impact that uplifts not just the present generation, but also future ones.
                                </p>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>


            <!-- Our Vission Mission Section  -->
           
            <!-- <div id="cmsmasters_row_jnwhwrcnoe" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth" style="background-attachment: scroll;">
                <div class = "contentAlign" >
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
                                <div class="cmsmasters_row_margin cmsmasters_14141414">
                                    <div id="cmsmasters_column_70ununv57" class="cmsmasters_column one_half">
                                        <div class="cmsmasters_column_inner">
                                                <div id="cmsmasters_heading_k610h6ljqm" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                    <h4 class="cmsmasters_heading">OUR MISSION</h4>
                                                </div>
                                                <div id="cmsmasters_heading_khr8zu8qc" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                    <h2 class="cmsmasters_heading" style="font-weight:900">Our mission is to empower communities by instilling social values, supporting holistic wellness, and creating sustainable futures</h2>
                                                </div>
                                                <div id="cmsmasters_heading_k4eli1cq0l" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                    <h6 class="cmsmasters_heading">Through our initiatives, we aim to address pressing societal challenges with innovative approaches that prioritize empathy, social responsibility, and community engagement.</h6>
                                                </div>
=                                        </div>
                                    </div>
                                    <div id="cmsmasters_column_70ununv57" class="cmsmasters_column one_half">
                                        <div class="cmsmasters_column_inner">
                                                <div id="cmsmasters_heading_k610h6ljqm" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                    <h4 class="cmsmasters_heading">OUR VISION</h4>
                                                </div>
                                                <div id="cmsmasters_heading_khr8zu8qc" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                    <h2 class="cmsmasters_heading" style="font-weight:900">We envision communities where every individual is empowered to thrive, with access to the resources and support they need across all stages of life.</h2>
                                                </div>
                                                <div id="cmsmasters_heading_k4eli1cq0l" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                    <h6 class="cmsmasters_heading">By fostering collaboration and innovation, we aim to create lasting impact that uplifts not just the present generation, but also future ones.</h6>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <!-- Our Vission Mission Section Closed -->

            <div class="row equal-height">
               
               <div class="col-md-8 col-lg-8 col-sm-12">
                    <div class="header_mid_inner ">
                        <div class="left-section-padding left-margin-top-bottom">
                            <div class="h2-heading-section-space mb-5">
                                <h2 class="h2-title mb-4" style="font-family: 'Moisette'; color: #000">Our Team</h2>
                            </div>
                            <div class="text-content-space">
                                <h4 class="text-content">
                                    Our dedicated team comprises passionate leaders, experienced professionals, and visionary advisors who share a common goal: to make a lasting difference.
                                </h4>
                            </div>                    
                       
                            <div class="row">
                                <div class="col-md-5 col-lg-5 col-sm-12 pl-0 pr-0">
                                    <div class="d-block">
                                        <ul class="nav nav-tabs w-100 d-flex no-bullets" id="myTab" role="tablist" style=" justify-content: space-between; border-bottom: none;">
                                            <li class="nav-item p-0" role="presentation">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="background-color:transparent;border:none">
                                                    <div>
                                                        <span style="font-size:18px">Founder & CEO:</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item p-0" role="presentation">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="background-color:transparent;border:none">
                                                    <div>
                                                        <span style="font-size:18px">Treasurer:</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item p-0" role="presentation">
                                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="background-color:transparent;border:none">
                                                    <div>
                                                        <span style="font-size:18px">Advisory Board:</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item p-0" role="presentation">
                                                <a class="nav-link" id="agriThrive-tab" data-toggle="tab" href="#agriThrive" role="tab" aria-controls="agriThrive" aria-selected="false" style="background-color:transparent;border:none;">
                                                    <div>
                                                        <span style="font-size:18px">Board Members:</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-7 col-sm-12">
                                    <div class="tab-content mt-5 pl-3" id="myTabContent" style="border-left:1px solid #ccc; font-size:18px" >
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <p>A visionary leader with a deep commitment to social impact, our CEO has been the driving force beMontserrat the foundation's mission to empower communities and create lasting change.</p>   
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <p>Responsible for overseeing the financial health and sustainability of the foundation, our Treasurer brings years of experience in non-profit financial management.</p>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            <p>A diverse group of experts and thought leaders who guide our strategic direction and ensure our initiatives remain impactful and relevant.</p>     
                                        </div>
                                        <div class="tab-pane fade" id="agriThrive" role="tabpanel" aria-labelledby="agriThrive-tab">
                                            <p>Our Board Members bring a wealth of knowledge from various fields, including education, healthcare, housing, and technology, ensuring that our projects are well-rounded and effective.</p>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
               <div class="col-md-4 col-lg-4 col-sm-12 d-flex align-items-center justify-content-center about-team-bg">
                  <div class="text-center right-content-padding ">
                    <h2 class="blue-header">Together, we work tirelessly to develop and implement programs that address the most urgent needs of our communities.</h2>
                  </div>
               </div>
            </div>
             <!-- Our Team Section   -->
             <!-- <div id="cmsmasters_row_ucs4e1cfdh" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
                <div class="cmsmasters_row_outer_parent">
                    <div class="cmsmasters_row_outer">
                        <div class="cmsmasters_row_inner cmsmasters_row_fullwidth cmsmasters_row_no_margin">
                            <div class="cmsmasters_row_margin cmsmasters_row_columns_behavior cmsmasters_2313">
                                <div id="cmsmasters_column_sclh9r6jib" class="cmsmasters_column two_third">
                                    <div class="cmsmasters_column_inner">
                                        <div id="cmsmasters_heading_vb4bc56kh4" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                            <h2 class="cmsmasters_heading">Our Team</h2>
                                        </div>                                        
                                        <div id="cmsmasters_heading_pqvyo1eyi8" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                            <h4 class="cmsmasters_heading">Our dedicated team comprises passionate leaders, experienced professionals, and visionary advisors who share a common goal: to make a lasting difference.</h4>
                                        </div>                        
                                         <div id="cmsmasters_row_56518267de" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                                            <div class="cmsmasters_row_outer_parent">
                                                <div class="cmsmasters_row_outer">
                                                    <div class="cmsmasters_row_inner" style="width:100%; padding:0px"> 
                                                        <div class="cmsmasters_row_margin">
                                                            <div id="cmsmasters_column_" class="cmsmasters_column one_first">
                                                                <div class="">
                                                                    <div class="cmsmasters_tabs tabs_mode_tour tabs_pos_left">
                                                                        <div class="tab-buttons cmsmasters_tabs_list">
                                                                            <button class="tab-button active" data-tab="tab1" style="border:none; border: 0;font-size:12px; ">Founder & CEO: [Name Placeholder]</button>
                                                                            <button class="tab-button" data-tab="tab2" style="border:none; border: 0; font-size:12px; ">Treasurer: [Name Placeholder]</button>
                                                                            <button class="tab-button" data-tab="tab3" style="border:none; border: 0; font-size:12px; ">Advisory Board</button>
                                                                            <button class="tab-button" data-tab="tab4" style="border:none; border: 0; font-size:12px; ">Board Members</button>
                                                                        </div>
                                                                        <div class="cmsmasters_tabs_wrap tab-contents">
                                                                                <div id="tab1" class="tab-content active">
                                                                                    <p>A visionary leader with a deep commitment to social impact, our CEO has been the driving force beMontserrat the foundation's mission to empower communities and create lasting change.</p>
                                                                                </div>
                                                                                <div id="tab2" class="tab-content">
                                                                                    <p>Responsible for overseeing the financial health and sustainability of the foundation, our Treasurer brings years of experience in non-profit financial management.</p>
                                                                                </div>
                                                                                <div id="tab3" class="tab-content">
                                                                                    <p>A diverse group of experts and thought leaders who guide our strategic direction and ensure our initiatives remain impactful and relevant.</p>
                                                                                </div>
                                                                                <div id="tab4" class="tab-content">
                                                                                    <p>Our Board Members bring a wealth of knowledge from various fields, including education, healthcare, housing, and technology, ensuring that our projects are well-rounded and effective.</p>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="cmsmasters_column_1dxj3j9sh7" class="cmsmasters_column one_third">
                                    <div class="cmsmasters_column_inner">
                                        <div id="cmsmasters_fb_63i9tt335f" class="cmsmasters_featured_block">
                                            <div class="featured_block_inner">
                                                <div class="featured_block_text">
                                                    <div id="cmsmasters_heading_63i9tt335y" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                        <h2 class="cmsmasters_heading">Together, we work tirelessly to develop and implement programs that address the most urgent needs of our communities.</h2>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Our Team Section close -->
            <div class="custom-banner w-100">
                  <div class="header_mid_inner pd-0 ">
                     <div class="row ml-0 mr-0" >
                           <div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0">
                              <div class="pt-5 pb-5 p-xs-0 ">
                                 <div class="h2-heading-section-space">
                                    <h2 class="h2-title" style="color: #ffffff;">Partnership Opportunities</h2>
                                 </div>
                                 <div class="text-content-space">
                                    <h4 class="text-content" style="color: #ffffff;">
                                        The Atrium Legacy Foundation is always looking for new partners who share our commitment to social impact. Whether you are a corporation, non-profit, or community group, we invite you to join us in building a better future. Contact us to explore collaboration opportunities.
                                    </h4>
                                 </div>
                                 <div id="" class="button_wrap">
                                    <a href="#" class="custom-btn">
                                          <span>Join Us Now</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 col-md-6 col-lg-6 text-content p-4">
                              <div class="pt-5 pb-5">
                              </div>
                           </div>
                     </div>  
                  </div>
               </div>  
            <!-- Partnership Section  -->
            <!-- <div id="cmsmasters_row_47292o7tzc" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner cmsmasters_row_fullwidth cmsmasters_row_no_margin">
                                <div class="cmsmasters_row_margin cmsmasters_1212">
                                    <div class = "container">
                                        <div class="cmsmasters_column one_half">
                                            <div class="cmsmasters_column_inner">
                                                <div id="cmsmasters_heading_vb4bc56kh4" class="cmsmasters_heading_wrap cmsmasters_heading_align_left" style="margin-top:0">
                                                    <h2 class="cmsmasters_heading">Partnership Opportunities </h2>
                                                </div>
                                                <div id="cmsmasters_heading_ca57ezmza"
                                                    class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                    <h3 class="cmsmasters_heading">The Atrium Legacy Foundation is always looking for new partners who share our commitment to social impact. Whether you are a corporation, non-profit, or community group, we invite you to join us in building a better future. Contact us to explore collaboration opportunities.</h3>
                                                </div>
                                                <div id="cmsmasters_fb_rffzwrwsos" class="cmsmasters_featured_block cmsmasters_more_button">
                                                    <div class="featured_block_inner">
                                                        <div class="featured_block_text">
                                                            <div id="cmsmasters_button_rffzwrwsok" class="button_wrap"><a
                                                                href="https://green-planet.cmsmasters.net/contacts/"
                                                                class="cmsmasters_button"><span>Join Us Now!</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> -->
              <!--  -->
        </div>
          
    </div>

   
      <!-- Tabs Script -->        
        <!-- <script>
            document.querySelectorAll('.tab-button').forEach(button => {
                button.addEventListener('click', () => {
                    document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
                    document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
                    button.classList.add('active');
                    const tabId = button.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });
        </script> -->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <?php include 'footer.php'; ?> 

</body>
</html>
