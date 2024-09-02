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
            font-family: 'Montserrat', sans-serif;
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
        @media (max-width: 767px) {
            .title h2 , h3{
                font-size: 1rem !important;
            }
            .margin-top{
                margin-top:20px
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
        <div class="row w-100 p-5">
            <div class="col-sm-7 col-md-7 col-lg-7  mt-sm-3" >
                <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-7 p-xs-0" >
                <div class="title">
                    <h2 class="text-left">
                        <span class="footerSlogan">We need solutions now!</span>
                    </h2>
                </div>
                </div>  
                <div class="col-sm-12 col-md-5 col-lg-5" >
                   
                </div>
                </div>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5 mt-sm-3">
                <div class="row margin-top">
                    <div class="col-sm-6 col-md-6 col-lg-6" >
                        <div class="text-left">
                            <h3>Address</h3>    
                        </div>
                        <div class="">
                        <Address class="text-left pt-2 ">
                            200-3071 No.5 Rd<br/>
                            Richmond BC<br/>
                            V6X2T4 
                        </Address>
                        </div>

                    </div>  
                    <div class="col-sm-6 col-md-6 col-lg-6" >
                        <div class="text-left">
                            <h3>Contact</h3>    
                        </div>
                        <div class="text-left">
                        <p>
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
        <div class="row mt-5 pt-5 borderTop">
            <div class="col-sm-7 col-md-7 col-lg-7 d-flex justify-content-between">
                <div>
                    <a href="#about-us" class="mx-2">About Us</a>
                    <a href="#contact-us" class="mx-2">Contact Us</a>
                    <a href="#privacy" class="mx-2">Privacy</a>
                </div>
            </div>
                <div class="col-sm-5 col-md-5 col-lg-5 mt-sm-3">
                    <div class="">
                        <a href="https://axiomthemes.com/" target="_blank" rel="noopener">AxiomThemes</a>
                        © 2024. All Rights Reserved.
                    </div>
                </div>
            </div>
        
    </footer>

    <button id="scrollToTopBtn" class="btn scrollToTop" onclick="scrollToTop()" style="position: fixed; bottom: 20px; right: 20px; display: none;">
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
    
</body>
</html>
