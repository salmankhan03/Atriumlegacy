<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Contact Us</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta content="" name="keywords">
            <meta content="" name="description">
            <link rel="stylesheet" href="./css/style.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <style id='green-planet-retina-inline-css' type='text/css'>
                 .contactUsBanner {
                    background-image: url('./img/contact_us.jpg');
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
                        background-image: url('./img/get_involved_6.jpg');
                        background-position: center center;
                        background-repeat: no-repeat;
                        background-attachment: scroll;
                        background-size: cover;
                        }
                /*  */
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
                /* Form Css */
                /* Flexbox for columns layout */
                .columns_wrap {
                    display: flex;
                    flex-wrap: wrap;
                    margin-bottom: 20px;
                }

                .column-1_2 {
                    width: 50%;
                    padding: 0 10px;
                }

                .column-1_1 {
                    width: 100%;
                    padding: 0 10px;
                }

                .style-line {
                    position: relative;
                    display: flex;
                    align-items: center;
                }

                .style-line input[type="text"],
                .style-line input[type="email"],
                .style-line input[type="tel"],
                .style-line input[type="text"],
                .style-line textarea {
                    width: 100%;
                    padding: 10px;
                    padding-left: 100px; /* Adds space for the icon */
                    border: none;
                    border-bottom: 2px solid #ddd !important;
                    font-size: 16px;
                    transition: border-color 0.4s;
                    background: none;
                    -webkit-border-radius:none !important

                }

                .style-line input[type="text"]:focus,
                .style-line input[type="email"]:focus,
                .style-line input[type="tel"]:focus,
                .style-line textarea:focus {
                    outline: none;
                    animation: border-slide 0.5s forwards;
                }

                .icon-name::before,
                .icon-email::before,
                .icon-phone::before,
                .icon-subject::before,
                .icon-textarea::before {
                    content: '';
                    position: absolute;
                    width: 20px;
                    height: 20px;
                    background-size: cover;
                    background-position: center;
                }

                .icon-name::before {
                    background-image: url('img/user.png'); 
                }

                .icon-email::before {
                    background-image: url('img/mail.png');
                }

                .icon-phone::before {
                    background-image: url('img/phone-call.png'); 
                }

                .icon-subject::before {
                    background-image: url('img/question.png'); 
                }
                .icon-textarea::before {
                    background-image: url('img/pencil.png'); 
                    margin-top: -50px;

                }

                /* Bottom border hover effect with animation */
                input[type="text"]:hover,
                input[type="email"]:hover,
                input[type="tel"]:hover,
                textarea:hover {
                    border-bottom-color: #007bff;
                }

                @keyframes border-slide {
                    0% {
                        border-bottom-color: #ddd;
                    }
                    100% {
                        border-bottom-color: #007bff;
                    }
                }

                /* Placeholder styling */
                ::placeholder {
                    color: #999;
                    font-size: 14px;
                }

                input[type=submit]{
                    font-size: 16px;
                    line-height: 48px;
                    font-weight: 700;
                    padding-right: 35px;
                    padding-left: 35px;
                    border-width: 2px;
                    background-color: #4789cc !important;
                    color: #fff !important;
                    border-color: #4789cc !important;                
                    font-family:'Montserrat' !important;
                }
                input[type=submit]:hover { 
                    background-color: rgba(255, 255, 255, 0) !important;
                    color: #4789cc !important;
                    border-color: #4789cc !important;
                } 
                /* Submit button */
            

                /* Checkbox */
                .wpcf7-acceptance {
                    display: flex;
                    align-items: center;
                    margin-top: 10px;
                }

                .wpcf7-acceptance input[type="checkbox"] {
                    margin-right: 10px;
                }

                /* Responsive design */
                @media (max-width: 768px) {
                    .column-1_2 {
                        width: 100%;
                        margin-bottom: 15px;
                    }
                }

                /* Custom  */
                input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
                    height: 49px;
                    -webkit-border-radius: none !important;
                    border-radius: none !important;
                    border: none !important;
                }
                input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]), textarea {
                    padding: 8px 30px !important; 
                }
                .checkbox_position{
                    padding-left: 10px !important;
                    padding-right: 0;
                    padding-top: 3px;
                    position: relative;
                    cursor: pointer;
                    float: none !important;
                }
            /* Form css  */         
             </style>
        </head>
        <body>
            <?php include 'header.php'; ?> 
                <div id="middle">
                    <div class="middle_inner ">
                        <div class="content_wrap fullwidth">
                            <div class="middle_content entry"></div>
                        </div>
                            <!-- Banner -->
                                <div class = "contactUsBanner ">
                                    <div class = "container text-center banner-paddings">
                                    <h2 class = "banner-header text-center white-text">
                                        Contact Us
                                    </h2>                  
                                    </div>
                                </div> 
                            <!-- Banner -->
                        <!-- Top Sections -->
                        <!-- <div id="cmsmasters_row_nofslyz1hn" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                            <div class="cmsmasters_row_outer_parent">
                                <div class="cmsmasters_row_outer">
                                    <div class="cmsmasters_row_inner">
                                        <div class="cmsmasters_row_margin cmsmasters_11">
                                            <div id="cmsmasters_column_tsg36hzfki" class="cmsmasters_column one_first">
                                                <div class="cmsmasters_column_inner">
                                                    <div id="cmsmasters_heading_rrgejmijg" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                        <h2 class="cmsmasters_heading">Contact Us</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                     
                        <!-- Top Sections Close -->
                        <!-- Spacer -->
                        <!-- <div class="elementor-element elementor-element-7c02393 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer trx_addons_parallax_layers_inited trx_addons_parallax_blocks_inited" data-id="7c02393" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Spacer -->
                        <!-- Intro Section -->
                        
                        <!-- <div id="cmsmasters_row_nofslyz1hr" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                            <div class="cmsmasters_row_outer_parent">
                                <div class="cmsmasters_row_outer">
                                    <div class="cmsmasters_row_inner p-0">
                                        <div class="cmsmasters_row_margin cmsmasters_11">
                                            <div id="cmsmasters_column_tsg36hzfki" class="cmsmasters_column one_first">
                                                <div class="cmsmasters_column_inner">
                                                    <div id="cmsmasters_heading_rrgejmijg" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                        <h2 class="cmsmasters_custom_heading">We are here to connect with you, answer your questions, and explore how we can work together to create a lasting impact. Please don’t hesitate to reach out to us using the contact details below.</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class = "container" style = "padding: 50px 10%">
                            <h2 style = "font-family: Moisette; font-style: italic; color: #000; text-align: center; font-weight: bold;">
                                We are here to connect with you, answer your questions, and explore how we can work together to create a lasting impact. Please don’t hesitate to reach out to us using the contact details below.
                            </h2>
                        </div> -->
                        <div class="header_mid_inner pd-0 ">
                            <div class="row ml-0 mr-0" >
                                <div class="col-12 pl-0 pr-0">
                                    <div class="pt-5 pb-5 p-xs-0 ">
                                        <div class="h2-heading-section-space">
                                            <!-- <h2 class="h2-title">Why Get Involved?</h2> -->
                                            <h2 class="pl-4 pr-4" style = "font-family: Moisette; font-style: italic; color: #000; text-align: center; font-weight: bold;">
                                                We are here to connect with you, answer your questions, and explore how we can work together to create a lasting impact. Please don’t hesitate to reach out to us using the contact details below.
                                            </h2>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="header_mid_inner pd-0 ">
                            <div class="row ml-0 mr-0" >
                                <div class="col-sm-12 col-md-4 col-lg-4 pl-0 pr-0">
                                    <div class="pt-5 pb-5 p-xs-0 ">
                                        <div class="h2-heading-section-space">
                                            <h2 class="h2-title" style="font-size:2rem">Contact Details</h2>
                                        </div>
                                        <div class="text-content-space">
                                            <h4 class="text-content mb-3">
                                                200-3071 No.5 Rd <br/>
                                                Richmond BC <br/>
                                                V6X 2T4
                                            </h4>
                                            <h3 class="text-content mb-3">
                                                info@email.com
                                            </h3>                                          
                                            <h2 class="h2-title" style="font-size:1.5rem">+1 (840) 841-2569</h2>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-8 text-content">
                                    <div class="pt-5 pb-5 p-xs-0 ">
                                        <form action="send_mail.php" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init" data-inited-validation="1">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="1324" >
                                                <input type="hidden" name="_wpcf7_version" value="5.9.8">
                                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1324-p18859-o1">
                                                <input type="hidden" name="_wpcf7_container_post" value="18859">
                                                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                            </div>
                                            <div class="">
                                                <div class="columns_wrap">
                                                    <div class="column-1_2">
                                                        <p>
                                                            <span class="style-line icon-name">
                                                                <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                                    <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fill_inited" aria-required="true" aria-invalid="false" placeholder="Name" value="" type="text" name="your-name" style="border: none !important;border-radius: 0px !important;border-bottom: 1px solid #ddd !important;background-color: transparent">
                                                                    <span class="line"></span>
                                                                </span>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="column-1_2">
                                                        <p>
                                                            <span class="style-line icon-email">
                                                                <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                                    <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email fill_inited" aria-required="true" aria-invalid="false" placeholder="Email Address" value="" type="email" name="your-email" style="border: none !important;border-radius: 0px !important;border-bottom: 1px solid #ddd !important;background-color: transparent">
                                                                    <span class="line"></span>
                                                                </span>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="columns_wrap">
                                                    <div class="column-1_2">
                                                        <p>
                                                            <span class="style-line icon-phone">
                                                                <span class="wpcf7-form-control-wrap" data-name="phone">
                                                                    <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel fill_inited" aria-required="true" aria-invalid="false" placeholder="Phone" value="" type="tel" name="phone"style="border: none !important;border-radius: 0px !important;border-bottom: 1px solid #ddd !important;background-color: transparent">
                                                                    <span class="line"></span>
                                                                </span>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="column-1_2">
                                                        <p>
                                                            <span class="style-line icon-subject">
                                                                <span class="wpcf7-form-control-wrap" data-name="subject">
                                                                    <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fill_inited" aria-required="true" aria-invalid="false" placeholder="Subject" value="" type="text" name="subject" style="border: none !important;border-radius: 0px !important;border-bottom: 1px solid #ddd !important;background-color: transparent">
                                                                    <span class="line"></span>
                                                                </span>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="columns_wrap margin-bottom">
                                                    <div class="column-1_1">
                                                        <p>
                                                            <span class="style-line icon-textarea">
                                                                <span class="wpcf7-form-control-wrap" data-name="your-message" style="width:100%">
                                                                    <textarea cols="40" rows="3" maxlength="2000" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required fill_inited" aria-required="true" aria-invalid="false" placeholder="How can we help you? Feel free to get in touch!" name="your-message" style="border: none !important;border-radius: 0px !important;border-bottom: 1px solid #ddd !important;background-color: transparent"></textarea>
                                                                    <span class="line"></span>
                                                                </span>
                                                            </span>
                                                        </p>
                                                </div>
                                            </div>
                                            <div class="columns_wrap margin-bottom">
                                                <div class="column-1_1">
                                                    <p>
                                                        <span class="wpcf7-submit-style">
                                                            <input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Get In Touch">                                                                                            
                                                            <span class="submit-style-in"></span>                                                        
                                                            <label class="ml-3">
                                                                <input type="checkbox" name="acceptance" value="1" aria-invalid="false" class="inited">
                                                                <span class="wpcf7-list-item-label checkbox_position">I agree that my data is 
                                                                    <a href="/privacy-policy/">collected and stored</a>.
                                                                </span>
                                                            </label>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>  
                        </div>

                        <!-- Intro Section Close -->
                        <!-- Main Section -->
                 
                        <!-- Main Section -->
                    </div>
                </div> 
                <?php include 'footer.php'; ?>
            </body>
    </html>