<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Atriumlegacy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://www.onlinewebfonts.com/download/2aea0ac500c896188f9ad191c231029c" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
       body {
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            font-weight: 400;
            font-style: normal;
            line-height: 1.62em;
            text-transform: none;
            letter-spacing: 0.1px;
        }

        .content-section {
            background-color: #cfddd0; 
            /* padding: 20px 0; */
            padding-left:15%; padding-right:15%
        }

        .first-section {
            background-color: #fdfbf8;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px; 
        }

        .hedings {
            font-size: 46px;
            line-height: 58px;
            font-family: 'Orpheus Pro';
        }

        .right-headings {
            line-height: 50px;
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
        }

        .content {
            padding: 0 24% 0 28% !important;
        }

        p {
            font-family: 'Montserrat', sans-serif;
        }

        .second-section {
            background-color: #e9ecef;
            padding: 20px; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%; 
            background-image: url('./image/right-side.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            color: white; 
            text-align: center;
        }

        .inner-div {
            padding: 0 20% 0 18% !important; 
        }

        .first-section .content {
            text-align: center;
        }

        .custom-btn {
            font-size: 16px;
            line-height: 50px;
            font-weight: 700;
            padding-right: 35px;
            padding-left: 35px;
            border-radius: 30px;
            border-width: 1px solid #efc94c;
            background-color: #efc94c;
            color: #254151;
        }

        .custom-btn:hover {
            background-color: transparent;
            border-color: #efc94c;
        }

        .custom-icon {
            font-size: 30px; 
            color: #4db359;
            transition: color 0.3s, background-color 0.3s;
            position: relative;
        }

        .cards {
            background-color: transparent;
            overflow: hidden;
            padding: 15px;
            position: relative;
            transition: background-color 0.3s, transform 0.3s;
        }

        .cards:hover {
            background-color: #4db359;
            transform: scale(1.02);
        }

        .cards-heading {
            padding: 15px;
        }
        .card-fonts-heading-color{
            color:#000;
            font-family:'Orpheus Pro';
        }
        .card-fonts-color{
            color:#7a7d7e;
            font-family:'Montserrat';
        }
        .cards:hover .card-fonts-heading-color, .cards:hover .card-fonts-color{
            color:#FFFFFF;
        }

        .cards-body {
            padding: 10px;
        }

        .cards-footer {
            padding: 15px;
            position: relative;
        }
        

        .cards-footer::before {
            content: 'Read More';
            position: absolute;
            left:30%;
            transform: translateX(-50%);
            bottom: 15px;
            font-size: 14px;
            color: #fff;
            opacity: 0;
            transition: opacity 0.3s;
            font-family:'Montserrat';
        }

        .cards:hover .custom-icon {
            color: #fff; 
        }
        .cards:hover .custom-icons {
            margin-left:30px
        }

        .cards:hover .cards-footer::before {
            opacity: 1;
        }

        .custom-footer-icons-div {
            display: flex;
            align-items: center; 
            justify-content: center; 
        }
        .left-side{
          position: static;
          width: 80%;
          height: 80%;
        }
        .side-element{
          position: relative;
          background-color: #0f5194;
          color: #fff;
          width: 50%;
          font-size: x-large;
          padding: 40px;
          left: 40%;
          top: -100px;
          font-family: "Montserrat";
        }


    </style>

    <style id="green-planet-retina-inline-css" type="text/css">

        #cmsmasters_row_ucs4e1cfdh .cmsmasters_row_outer_parent { 
        	padding-top: 0px; 
        } 
        
        #cmsmasters_row_ucs4e1cfdh .cmsmasters_row_outer_parent { 
        	padding-bottom: 0px; 
        } 
        
        #cmsmasters_row_ucs4e1cfdh .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
        	padding-left:0%; 
        } 
        #cmsmasters_row_ucs4e1cfdh .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
        	padding-right:0%; 
        } 
          #cmsmasters_heading_vb4bc56kh4 { 
        	text-align:left; 
        	margin-top:190px; 
        	margin-bottom:15px; 
        } 

        #cmsmasters_column_sclh9r6jib .cmsmasters_column_inner { 
        	padding: 0 24% 0 31%; 
        } 
        
        
        			@media only screen and (max-width: 1024px) {
        				#cmsmasters_column_sclh9r6jib .cmsmasters_column_inner {
        					padding: 0px 4% 45px 18%;
        				}
        			}
        			
        			@media only screen and (max-width: 768px) {
        				#cmsmasters_column_sclh9r6jib .cmsmasters_column_inner {
        					padding: 0px 5% 45px 10%;
        				}
        			}
        			
        			@media only screen and (max-width: 540px) {
        				#cmsmasters_column_sclh9r6jib .cmsmasters_column_inner {
        					padding: 0px 4% 30px 10%;
        				}
        			}
        			
        			@media only screen and (max-width: 320px) {
        				#cmsmasters_column_sclh9r6jib .cmsmasters_column_inner {
        					padding: 0 4% 35px 10%;
        				}
        			}
        
        #cmsmasters_heading_vb4bc56kh4 .cmsmasters_heading { 
        	text-align:left; 
            font-family:'Orpheus Pro';
            color: #000;
            font-weight: bold;
        } 
        
        #cmsmasters_heading_vb4bc56kh4 .cmsmasters_heading, #cmsmasters_heading_vb4bc56kh4 .cmsmasters_heading a { 
        	font-size:46px; 
        	line-height:58px; 
        } 
        
        #cmsmasters_heading_vb4bc56kh4 .cmsmasters_heading a:hover { 
        } 
        
        #cmsmasters_heading_vb4bc56kh4 .cmsmasters_heading_divider { 
        } 
        
        @media (max-width: 540px) {
        
        #cmsmasters_heading_vb4bc56kh4 .cmsmasters_heading, #cmsmasters_heading_vb4bc56kh4 .cmsmasters_heading a { 
        	font-size:40px; 
        	line-height:45px; 
        } 
        
        } 
        
        
        				@media only screen and (max-width: 1024px) {
        					#cmsmasters_heading_vb4bc56kh4 {
        						margin-top: 125px;
        					}
        				}
        				
        				@media only screen and (max-width: 768px) {
        					#cmsmasters_heading_vb4bc56kh4 {
        						margin-top: 80px;
        					}
        				}
        				
        				@media only screen and (max-width: 540px) {
        					#cmsmasters_heading_vb4bc56kh4 {
        						margin-top: 75px;
        					}
        				}

        #cmsmasters_heading_qr7neufiw { 
        	text-align:left; 
        	margin-top:0px; 
        	margin-bottom:30px; 
        } 
        
        #cmsmasters_heading_qr7neufiw .cmsmasters_heading { 
        	text-align:left; 
        } 
        
        #cmsmasters_heading_qr7neufiw .cmsmasters_heading, #cmsmasters_heading_qr7neufiw .cmsmasters_heading a { 
        	font-size:24px; 
        	line-height:35px; 
        	font-weight:700; 
        	font-style:italic; 
        } 
        
        #cmsmasters_heading_qr7neufiw .cmsmasters_heading a:hover { 
        } 
        
        #cmsmasters_heading_qr7neufiw .cmsmasters_heading_divider { 
        } 
        
        @media (max-width: 540px) {
        
        #cmsmasters_heading_qr7neufiw .cmsmasters_heading, #cmsmasters_heading_qr7neufiw .cmsmasters_heading a { 
        	font-size:20px; 
        	line-height:35px; 
        } 
        
        } 

        #cmsmasters_heading_pqvyo1eyi8 { 
        	text-align:left; 
        	margin-top:0px; 
        	margin-bottom:50px; 
        } 
        
        #cmsmasters_heading_pqvyo1eyi8 .cmsmasters_heading { 
        	text-align:left; 
        } 
        
        #cmsmasters_heading_pqvyo1eyi8 .cmsmasters_heading, #cmsmasters_heading_pqvyo1eyi8 .cmsmasters_heading a { 
        	font-family:'Montserrat';
        	font-size:20px; 
        	line-height:28px; 
        	font-weight:400; 
        	color:#7d7d7d;
        } 

        #cmsmasters_fb_wjzk57hjpq { 
        	padding-top:0px; 
        	padding-bottom:0px; 
        	background-color:rgba(255,255,255,0);
        } 
        
        #cmsmasters_fb_wjzk57hjpq .featured_block_inner { 
        	width: 100%; 
        	text-align: left; 
        	float:left; 
        	background-color:rgba(255,255,255,0);
        } 
        
        #cmsmasters_fb_wjzk57hjpq .featured_block_text { 
        	text-align: left; 
        } 
        #cmsmasters_button_rffzwrwsok { 
        	float:left; 
        	text-align:left; 
        	
        } 
        
        #cmsmasters_button_rffzwrwsok .cmsmasters_button:before { 
        	margin-right:.5em; 
        	margin-left:0; 
        	vertical-align:baseline; 
        } 
        
        #cmsmasters_button_rffzwrwsok .cmsmasters_button { 
        	font-size:16px; 
        	line-height:48px; 
        	font-weight:700; 
        	padding-right:35px; 
        	padding-left:35px; 
        	border-width:2px; 
        	background-color:#efc94c;
        	color:#254151;
        	border-color:#efc94c;
        } 
        #cmsmasters_button_rffzwrwsok .cmsmasters_button:hover { 
        	background-color:rgba(255,255,255,0);
        	color:#254151;
        	border-color:#efc94c;
        }

        #cmsmasters_button_rffzwrwsos { 
        	float:left; 
        	text-align:left; 
        	
        } 
        
        #cmsmasters_button_rffzwrwsos .cmsmasters_button:before { 
        	margin-right:.5em; 
        	margin-left:0; 
        	vertical-align:baseline; 
        } 
        
        #cmsmasters_button_rffzwrwsos .cmsmasters_button { 
        	font-size:16px; 
        	line-height:48px; 
        	font-weight:700; 
        	padding-right:0px; 
        	padding-left:0px; 
        	border-width:2px; 
        	background-color:rgba(255,255,255,0);
        	border-color:rgba(255,255,255,0);
        } 
        #cmsmasters_button_rffzwrwsos .cmsmasters_button:hover { 
        	background-color:rgba(255,255,255,0);
        	color:#6d7c84;
        	border-color:rgba(255,255,255,0);
        } 
        #cmsmasters_column_1dxj3j9sh7 { 
        	background-image: url(img/2-1.jpg); 
        	background-position: top center; 
        	background-repeat: no-repeat; 
        	background-attachment: scroll; 
        	background-size: cover; 
        } 
        
        #cmsmasters_column_1dxj3j9sh7 .cmsmasters_column_inner { 
        	padding: 0 10% 0 10%; 
        } 
        
        
        			@media only screen and (max-width: 1024px) {
        				#cmsmasters_column_1dxj3j9sh7 .cmsmasters_column_inner {
        					padding: 0 5% 0 5%;
        				}
        			}
                    #cmsmasters_fb_63i9tt335f { 
        	padding-top:205px; 
        	padding-bottom:180px; 
        	background-color:rgba(255,255,255,0);
        } 
        
        #cmsmasters_fb_63i9tt335f .featured_block_inner { 
        	width: 100%; 
        	text-align: left; 
        	float:left; 
        	background-color:rgba(255,255,255,0);
        } 
        
        #cmsmasters_fb_63i9tt335f .featured_block_text { 
        	text-align: left; 
        } 
        
        
        
        			@media only screen and (max-width: 1024px) {
        				#cmsmasters_fb_63i9tt335f {
        					padding-top: 120px;
        				}
        			}
        			
        			@media only screen and (max-width: 1024px) {
        				#cmsmasters_fb_63i9tt335f {
        					padding-bottom: 90px;
        				}
        			}
        			
        			@media only screen and (max-width: 768px) {
        				#cmsmasters_fb_63i9tt335f {
        					padding-top: 80px;
        				}
        			}
        			
        			@media only screen and (max-width: 768px) {
        				#cmsmasters_fb_63i9tt335f {
        					padding-bottom: 75px;
        				}
        			}
                    #cmsmasters_heading_63i9tt335y { 
        	text-align:left; 
        	margin-top:0px; 
        	margin-bottom:30px; 
        } 
        
        #cmsmasters_heading_63i9tt335y .cmsmasters_heading { 
        	text-align:left; 
            font-family:'Orpheus Pro';
            font-weight: bold;
        } 
        
        #cmsmasters_heading_63i9tt335y .cmsmasters_heading, #cmsmasters_heading_63i9tt335y .cmsmasters_heading a { 
        	font-size:38px; 
        	line-height:50px; 
        	color:#ffffff;
        } 
        
        #cmsmasters_heading_63i9tt335y .cmsmasters_heading a:hover { 
        } 
        
        #cmsmasters_heading_63i9tt335y .cmsmasters_heading_divider { 
        } 
        
        @media (max-width: 540px) {
        
        #cmsmasters_heading_63i9tt335y .cmsmasters_heading, #cmsmasters_heading_63i9tt335y .cmsmasters_heading a { 
        	font-size:40px; 
        	line-height:45px; 
        } 
        
        } 
        #cmsmasters_heading_63i9tt335f { 
        	text-align:left; 
        	margin-top:0px; 
        	margin-bottom:35px; 
        } 
        
        #cmsmasters_heading_63i9tt335f .cmsmasters_heading { 
        	text-align:left; 
        } 
        
        #cmsmasters_heading_63i9tt335f .cmsmasters_heading, #cmsmasters_heading_63i9tt335f .cmsmasters_heading a { 
        	font-family:'Hind'; 
        	font-size:18px; 
        	line-height:26px; 
        	font-weight:400; 
        	color:rgba(255,255,255,0.8);
        } 
        #cmsmasters_button_63i9tt335f { 
        	float:left; 
        	text-align:left; 
        	
        } 
        
        #cmsmasters_button_63i9tt335f .cmsmasters_button:before { 
        	margin-right:.5em; 
        	margin-left:0; 
        	vertical-align:baseline; 
        } 
        
        #cmsmasters_button_63i9tt335f .cmsmasters_button { 
        	font-size:18px; 
        	font-weight:700; 
        	padding-right:0px; 
        	padding-left:0px; 
        	border-width:0px; 
        	background-color:rgba(255,255,255,0);
        	color:#efc94c;
        } 
        #cmsmasters_button_63i9tt335f .cmsmasters_button:hover { 
        	background-color:rgba(255,255,255,0);
        	color:#ffffff;
        } 

        #cmsmasters_button_wjzk57hjpe .cmsmasters_button:before { 
        	margin-right:.5em; 
        	margin-left:0; 
        	vertical-align:baseline; 
        } 
        
        #cmsmasters_button_wjzk57hjpe .cmsmasters_button { 
            font-size: 16px;
            line-height: 48px;
            font-weight: 700;
            padding-right: 35px;
            padding-left: 35px;
            border-width: 2px;
            background-color: #4789cc;
            color: #fff;
            border-color: #4789cc;
            background-color: #4789cc;
            color: #fff;
            border-color: #4789cc;
            font-family:'Montserrat';
        } 
        
        #cmsmasters_button_wjzk57hjpe .cmsmasters_button:hover { 
            background-color: rgba(255, 255, 255, 0);
            color: #4789cc;
            border-color: #4789cc;
        } 

        .banner {
            background-image: url('img/2-2.jpg'); 
            background-position: top center; 
            background-repeat: no-repeat; 
            background-attachment: scroll; 
            background-size: cover; 
        }

        .banner-title {
            color:#fff; 
            font-family:'Montserrat';
            padding-top: 300px;
        }

        .banner-header {
            color:#fff; 
            font-family:'Orpheus Pro';
            font-weight: bold;
            /* font-size: 62px; */
        }

    </style>
</head>

<body>
<?php include 'header.php'; ?> 
    <div id="middle">
        <div class="middle_inner">
            <div class="content_wrap fullwidth">
                <!-- Start Content -->
                <div class="middle_content entry"></div>
            </div>
            <!-- <div id="cmsmasters_row_83hce86sns" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
                <div class="cmsmasters_row_outer_parent">
                    <div class="cmsmasters_row_outer">
                        <div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
                            <div class="cmsmasters_row_margin cmsmasters_11">
                                <div id="cmsmasters_column_" class="cmsmasters_column one_first">
                                    <div class="cmsmasters_column_inner">
                                        
                                        <div class="cmsmasters_slider">
                                            <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                                <rs-module id="rev_slider_1_1" style="" data-version="6.7.15">
                                                    <rs-slides style="overflow: hidden; position: absolute;">
                                                        <rs-slide style="position: absolute;" data-key="rs-2" data-title="Slide" data-thumb="//green-planet.cmsmasters.net/wp-content/uploads/2017/12/1-3-100x50.jpg" data-anim="adpr:false;">
                                                            <img decoding="async" src="img/2-2.jpg" alt="" title="Home" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="img/2-2.jpg" data-panzoom="d:10000;ss:100;se:103;oe:10/0;" data-no-retina>
                                                            <rs-layer
                                                                id="slider-1-slide-2-layer-3"
                                                                data-type="text"
                                                                data-color="#e3e2db||#e3e2db||#e3e2db||#ffffff"
                                                                data-rsp_ch="on"
                                                                data-xy="xo:110px,90px,90px,50px;yo:248px,199px,199px,137px;"
                                                                data-text="w:nowrap,nowrap,nowrap,normal;s:24;l:68,68,68,36;a:inherit;"
                                                                data-dim="w:auto,auto,auto,364px;"
                                                                data-frame_0="tp:600;"
                                                                data-frame_1="tp:600;sp:1300;sR:10;"
                                                                data-frame_999="o:0;tp:600;st:w;sR:3690;"
                                                                style="z-index:7;font-family:'Montserrat';"
                                                            >OUR MISSION 
                                                            </rs-layer>

                                                            <rs-layer
                                                                id="slider-1-slide-2-layer-1" 
                                                                data-type="text"
                                                                data-color="#fffef7||#fffef7||#fffef7||#ffffff"
                                                                data-rsp_ch="on"
                                                                data-xy="xo:110px,90px,90px,50px;yo:318px,269px,269px,207px;"
                                                                data-text="s:62,62,62,48;l:70;fw:900;a:inherit;"
                                                                data-frame_0="tp:600;"
                                                                data-frame_1="tp:600;sp:700;sR:10;"
                                                                data-frame_999="o:0;tp:600;st:w;sR:4290;"
                                                                style="z-index:5;font-family:'Orpheus Pro';"
                                                            >Fostering Values,
                                                            </rs-layer>

                                                            <rs-layer
                                                                id="slider-1-slide-2-layer-2" 
                                                                data-type="text"
                                                                data-color="#fffef7||#fffef7||#fffef7||#ffffff"
                                                                data-rsp_ch="on"
                                                                data-xy="xo:110px,90px,90px,50px;yo:388px,339px,339px,277px;"
                                                                data-text="s:62,62,62,48;l:70;fw:900;a:inherit;"
                                                                data-frame_0="tp:600;"
                                                                data-frame_1="tp:600;sp:700;sR:10;"
                                                                data-frame_999="o:0;tp:600;st:w;sR:4290;"
                                                                style="z-index:6;font-family:'Orpheus Pro';"
                                                            >Supporting Wellness &
                                                            </rs-layer>

                                                            <rs-layer
                                                                id="slider-1-slide-2-layer-3" 
                                                                data-type="text"
                                                                data-color="#fffef7||#fffef7||#fffef7||#ffffff"
                                                                data-rsp_ch="on"
                                                                data-xy="xo:110px,90px,90px,50px;yo:457px,414px,414px,349px;"
                                                                data-text="s:62,62,62,48;l:70;fw:900;a:inherit;"
                                                                data-frame_0="tp:600;"
                                                                data-frame_1="tp:600;sp:700;sR:10;"
                                                                data-frame_999="o:0;tp:600;st:w;sR:4290;"
                                                                style="z-index:6;font-family:'Orpheus Pro';"
                                                            >Promoting Sustainable
                                                            </rs-layer>

                                                            <rs-layer
                                                            id="slider-1-slide-2-layer-4" 
                                                                data-type="text"
                                                                data-color="#fffef7||#fffef7||#fffef7||#ffffff"
                                                                data-rsp_ch="on"
                                                                data-xy="xo:110px,90px,90px,50px;yo:527px,484px,484px,419px;"
                                                                data-text="s:62,62,62,48;l:70;fw:900;a:inherit;"
                                                                data-frame_0="tp:600;"
                                                                data-frame_1="tp:600;sp:700;sR:10;"
                                                                data-frame_999="o:0;tp:600;st:w;sR:4290;"
                                                                style="z-index:6;font-family:'Orpheus Pro';"
                                                            >Communities
                                                            </rs-layer>

                                                            <rs-layer
                                                                id="slider-1-slide-2-layer-6" 
                                                                class="rev-btn"
                                                                data-type="button"
                                                                data-color="#90c1f2"
                                                                data-rsp_ch="on"
                                                                data-xy="xo:110px,90px,90px,50px;yo:630px,580px,580px,415px;"
                                                                data-text="s:16;l:14;fw:700;a:inherit;"
                                                                data-actions='o:click;a:simplelink;target:_self;url:https://green-planet.cmsmasters.net/about-us/;'
                                                                data-padding="t:18;r:40;b:18;l:40;"
                                                                data-border="bos:solid;boc:#90c1f2;bow:2,2,2,2;bor:30px,30px,30px,30px;"
                                                                data-frame_0="tp:600;"
                                                                data-frame_1="tp:600;sp:1800;sR:10;"
                                                                data-frame_999="o:0;tp:600;st:w;sR:3190;"
                                                                data-frame_hover="c:#0f5194;bgc:#4789cc;boc:#4789cc;bor:30px,30px,30px,30px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;e:none;"
                                                                style="z-index:8;background-color:rgba(255,255,255,0);font-family:'Montserrat';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
                                                            >Learn more 
                                                            </rs-layer>
                                                    </rs-slide>
                                                </rs-module>
                                            </rs-module-wrap>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class = "banner">
                <div class = "container">
                    <h2 class = "banner-title">
                        OUR MISSION
                    </h2>
                    <h1 class = "banner-header display-3">
                        Fostering Values, <br/>
                        Supporting Wellness & <br/>
                        Promoting Sustainable <br/>
                        Communities
                    </h1>
                    <div id="cmsmasters_button_wjzk57hjpe" class="button_wrap" style="padding-bottom: 300px; padding-top: 10px">
                        <a href="https://green-planet.cmsmasters.net/about-us/" class="cmsmasters_button">
                            <span>Find Out More</span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="cmsmasters_row_ucs4e1cfdh" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
                <div class="cmsmasters_row_outer_parent">
                    <div class="cmsmasters_row_outer">
                        <div class="cmsmasters_row_inner cmsmasters_row_fullwidth cmsmasters_row_no_margin">
                            <div class="cmsmasters_row_margin cmsmasters_row_columns_behavior cmsmasters_2313">
                                <div id="cmsmasters_column_sclh9r6jib" class="cmsmasters_column two_third">
                                    <div class="cmsmasters_column_inner">
                                        <div id="cmsmasters_heading_vb4bc56kh4" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                            <h2 class="cmsmasters_heading">Welcome to <br/> Atrium Legacy Foundation </h2>
                                        </div>
                                        <!-- <div id="cmsmasters_heading_qr7neufiw" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                            <h5 class="cmsmasters_heading">Green. That’s how we’d like the world to be</h5>
                                        </div> -->
                                        <div id="cmsmasters_heading_pqvyo1eyi8" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                            <h4 class="cmsmasters_heading">Atrium Legacy Foundation believe that true progress lies in the values we impart, the communities we nurture, and the future we build together. We are dedicated to creating a lasting impact by fostering empathy in our youth, ensuring dignified aging for our seniors, and promoting sustainable solutions that uplift our communities. </h4>
                                        </div>
                                        <div id="cmsmasters_fb_wjzk57hjpq" class="cmsmasters_featured_block cmsmasters_custom_margin">
                                            <div class="featured_block_inner">
                                                <div class="featured_block_text">
                                                    <div id="cmsmasters_button_wjzk57hjpe" class="button_wrap"><a href="https://green-planet.cmsmasters.net/about-us/" class="cmsmasters_button"><span>Find Out More</span></a></div>

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
                                                        <h2 class="cmsmasters_heading">We envision communities where every individual is empowered to thrive, with access to
                                                        the resources and support they need across all stages of life.</h2>
                                                    </div>
                                                    <!-- <div id="cmsmasters_heading_63i9tt335f" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                        <h6 class="cmsmasters_heading">Water covers two-thirds of the surface of the Earth, but Fresh water is 0.002% on Earth. What will your children drink?</h6>
                                                    </div>
                                                    <div id="cmsmasters_button_63i9tt335f" class="button_wrap"><a href="https://green-planet.cmsmasters.net/project/saving-the-arctic/" class="cmsmasters_button"><span>Make a difference now!</span></a></div> -->

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
            
            <div class="content-section">
                <div class="">
                    <div class="row no-gutters pt-5 pb-5"> 
                        <div class="col-sm-12 col-md-6 col-lg-6 text-content">
                        <h2 class="hedings mt-4 mb-4" style="color:#000">Our Initiatives </h2>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 text-content">
                            <p class="mt-4 mb-4" style="font-size: 20px">Empowering communities through strategic initiatives that address today’s challenges and build a better tomorrow.</p>
                        </div>
                    </div>
                </div>
                <!-- </div>
                <div class="content-section"> -->
                <div class="">
                    <div class="row no-gutters pt-5 pb-5"> 
                        <div class="col-sm-12 col-md-6 col-lg-3 text-content">
                            <div class="cards">
                                <div class="cards-heading text-center">
                                    <i class="fa fa-medkit custom-icon" style="font-size:60px" aria-hidden="true"></i>
                                </div>
                                <div class="cards-body text-center mt-4">
                                    <h4 class="card-fonts-heading-color">ReStart Education</h4>
                                    <p class="mt-3 text-center card-fonts-color">Cultivating the next generation to prioritize social values, empathy, and community engagement over material wealth.</p>
                                </div>
                                <div class="cards-footer mt-4 text-center">
                                    <div class="custom-footer-icons-div">
                                        <i class="fa fa-arrow-right  custom-icons custom-icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 text-content">
                            <div class="cards">
                                <div class="cards-heading text-center">
                                    <i class="fa fa-medkit custom-icon" style="font-size:60px" aria-hidden="true"></i>
                                </div>
                                <div class="cards-body text-center mt-4">
                                    <h4 class="card-fonts-heading-color">Aging Grace</h4>
                                    <p class="mt-3 text-center card-fonts-color">Promoting comprehensive wellness and societal integration for seniors, ensuring they remain vital members of the community.</p>
                                </div>
                                <div class="cards-footer mt-4 text-center">
                                    <div class="custom-footer-icons-div">
                                        <i class="fa fa-arrow-right custom-icons custom-icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 text-content">
                            <div class="cards">
                                <div class="cards-heading text-center">
                                    <i class="fa fa-medkit custom-icon" style="font-size:60px" aria-hidden="true"></i>
                                </div>
                                <div class="cards-body text-center mt-4">
                                    <h4 class="card-fonts-heading-color">HomeStrong </h4>
                                    <p class="mt-3 text-center card-fonts-color">Addressing the urgent need for fast and affordable housing solutions, fostering stability and security for vulnerable populations.</p>
                                </div>
                                <div class="cards-footer mt-4 text-center">
                                    <div class="custom-footer-icons-div">
                                        <i class="fa fa-arrow-right custom-icons custom-icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 text-content">
                            <div class="cards">
                                <div class="cards-heading text-center">
                                    <i class="fa fa-medkit custom-icon" style="font-size:60px" aria-hidden="true"></i>
                                </div>
                                <div class="cards-body text-center mt-4">
                                    <h4 class="card-fonts-heading-color">AgriThrive</h4>
                                    <p class="mt-3 text-center card-fonts-color">Leveraging agricultural technology to enhance global food security and empower communities to achieve self-sufficiency.</p>
                                </div>
                                <div class="cards-footer mt-4 text-center">
                                    <div class="custom-footer-icons-div">
                                        <i class="fa fa-arrow-right custom-icons custom-icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class = "container">    
        <div class="row no-gutters Third Section">
            <div class="col-lg-6">
                <div class="m-5">
                    <image class="left-side" src="./image/left-side.jpg" alt="left-side-image" ></image>
                    <div class="side-element">
                        <div> Empathy.</div>
                        <div> Wellness.</div>
                        <div> Sustainability.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="text-left m-5 p-5">
                    <h1 class="hedings pb-2" style="color: #000">Together, we can make a difference</h1>
                    <div style="font-family: Orpheus Pro; font-style:italic; font-size:x-large">Join us in making a meaningful impact</div>
                    <p class="mt-4 mb-4" style="font-family: Montserrat;">Whether through donations, volunteer work, or partnerships, your support plays a crucial role in creating a brighter, more inclusive future for everyone.</p>
                    <div id="cmsmasters_button_wjzk57hjpe" class="button_wrap"><a href="" class="cmsmasters_button"><span>Join Us</span></a></div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?> 


</body>


</html>
