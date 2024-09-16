<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            font-weight: 400;
            font-style: normal;
            line-height: 1.62em;
            text-transform: none;
            letter-spacing: 0.1px;
        }
        .footerSlogan{
            font-family: 'Moisette';
            color: white;
        }
    
        footer {
            position: relative;
            left: 0;
            right:0;
            bottom: 0;
            width: 100%;
            background-color: #0f5194;
            color: white;
            text-align: center;
        }
        a{
            color:#d2d2d2;
            font-family: 'Montserrat', sans-serif;

        }
        a:hover{
            color:#FFF;
            font-weight:700;
        }
        .title h2{
            font-size:3.5rem;
            font-family: 'Montserrat', sans-serif;

        }
        .borderTop{
            border-top:1px solid #ededed;
            Width:100%
        }
        .scrollToTop{
            color: #fff;
            background-color: #4789cc;
            border-color: #4789cc;
            width: 2.7em;
            height: 2.7em;
            text-align: center;
            -webkit-border-radius: 0;
            -ms-border-radius: 0;
            border-radius: 0;
            
        }
        .scrollToTop:hover{
            color: #4789cc;
            background-color: #fff;
            border-color: #4789cc;
            width: 2.7em;
            height: 2.7em;
            text-align: center;
            -webkit-border-radius: 0;
            -ms-border-radius: 0;
            border-radius: 0;

        }
        @media (max-width: 767px) {
            .title h2 , h3{
                font-size: 1rem !important;
            }
            .margin-top{
                margin-top:20px
            }
            .center-alignMenmt{
                text-align:center !important
            }
        }
        @media (min-width: 768px) and (max-width: 1024px) {
            .title h2 {
                font-size: 2.4rem !important;
            }
        }
    </style>
</head>
<body>
    <footer>
        <div class = "container">
            <div class="row w-100" style="padding-top: 40px;">
                <div class="col-sm-12 col-md-7 col-lg-7 mb-sm-2">
                    <div class="row h-100">
                        <div class="col-sm-12 col-md-7 col-lg-7 d-flex align-items-center" >
                            <!-- <div class="title">
                                <h2 class="text-left">
                                    <span class="footerSlogan" style="font-size: 46px">We need <br/> solutions now!</span>
                                </h2>
                            </div> -->
                            <img src="img/ALF_logo_4C.svg" style="width: 250px;">
                        </div>
                    <!-- <div class="col-sm-12 col-md-5 col-lg-5" >
                    
                    </div> -->
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5 mt-sm-3">
                    <div class="row mt-3">
                        <div class="col-sm-12 col-md-6 col-lg-6" >
                            <div class="text-left">
                                <h3 class="text-white" style="font-family: 'Montserrat'; font-size: 15px; font-weight: bold">Address</h3>    
                            </div>
                            <div class="">
                            <Address class="text-left pt-2 ">
                                200-3071 No.5 Rd<br/>
                                Richmond BC<br/>
                                V6X2T4 
                            </Address>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6" >
                            <div class="text-left">
                                <h3 class="text-white" style="font-family: 'Montserrat';font-size: 15px; font-weight: bold">Contact</h3>    
                            </div>
                            <div class="text-left">
                            <p class="mb-0 pb-2">
                                <a class="underline_anim underline_do_hover" href="mailto:info@email.com" style="text-decoration:underline">
                                    info@email.com
                                </a>
                            </p>
                                <div class="elementor-widget-container">
                                    <span class="trx_addons_alter_text">
                                        <a href="tel:+18408412569" style="color:#d2d2d2;text-decoration:underline">+1 840 841 25 69</a>
                                    </span>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-3 pb-3 borderTop">
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-between align-items-center text-center">
                    <div class="d-flex justify-content-center">
                        <a href="#about-us" class="mx-2">About Us</a>
                        <a href="#contact-us" class="mx-2">Contact Us</a>
                        <a href="#privacy" class="mx-2">Privacy</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center text-center">
                    <div>
                        © <?php echo Date('Y'); ?> Intelli Management Group. All Rights Reserved. 
                    </div>
                </div>
            </div>
    </div>
        
    </footer>

    <button id="scrollToTopBtn" class="btn scrollToTop" onclick="scrollToTop()" style="position: fixed; bottom: 20px; right: 20px; display: none; z-index:99">
        ↑ 
    </button>


    <script>
        window.onscroll = function() {
            toggleScrollToTopButton();
        };

        function toggleScrollToTopButton() {
            var scrollToTopBtn = document.getElementById("scrollToTopBtn");
            if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
                scrollToTopBtn.style.display = "block";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        }
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>

   <script type="text/javascript" src="lib/waypoints.min.js" id="waypoints-js"></script>
    <script type="text/javascript" id="green-planet-script-js-extra">
        var cmsmasters_script = {"theme_url":"https:\/\/green-planet.cmsmasters.net\/wp-content\/themes\/green-planet","site_url":"https:\/\/green-planet.cmsmasters.net\/","ajaxurl":"https:\/\/green-planet.cmsmasters.net\/wp-admin\/admin-ajax.php","nonce_ajax_like":"44eb097f84","nonce_ajax_view":"6d9b429948","project_puzzle_proportion":"0.7069","gmap_api_key":"AIzaSyCdSU-5IJU54ENHjX1zZgo-N8Tj1JJVppk","gmap_api_key_notice":"Please add your Google Maps API key","gmap_api_key_notice_link":"read more how","primary_color":"#2e404b","ilightbox_skin":"dark","ilightbox_path":"vertical","ilightbox_infinite":"0","ilightbox_aspect_ratio":"1","ilightbox_mobile_optimizer":"0","ilightbox_max_scale":"1","ilightbox_min_scale":"0.2","ilightbox_inner_toolbar":"0","ilightbox_smart_recognition":"0","ilightbox_fullscreen_one_slide":"0","ilightbox_fullscreen_viewport":"center","ilightbox_controls_toolbar":"1","ilightbox_controls_arrows":"0","ilightbox_controls_fullscreen":"1","ilightbox_controls_thumbnail":"1","ilightbox_controls_keyboard":"1","ilightbox_controls_mousewheel":"1","ilightbox_controls_swipe":"1","ilightbox_controls_slideshow":"0","ilightbox_close_text":"Close","ilightbox_enter_fullscreen_text":"Enter Fullscreen (Shift+Enter)","ilightbox_exit_fullscreen_text":"Exit Fullscreen (Shift+Enter)","ilightbox_slideshow_text":"Slideshow","ilightbox_next_text":"Next","ilightbox_previous_text":"Previous","ilightbox_load_image_error":"An error occurred when trying to load photo.","ilightbox_load_contents_error":"An error occurred when trying to load contents.","ilightbox_missing_plugin_error":"The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\\\/a>."};
    </script>
    <script type="text/javascript" src="lib/jquery.script.js" id="green-planet-script-js"></script>
   <script type="text/javascript" src="lib/jquery.theme-script.js" id="green-planet-theme-script-js"></script>
</body>
</html>
