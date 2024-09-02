<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Atriumlegacy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
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
            background-color: #fdfbf8; 
            padding: 20px 0;
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
            font-family: 'Montserrat', sans-serif;
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
            color:#000
        }
        .card-fonts-color{
            color:#7a7d7e
        }
        .cards:hover .card-fonts-heading-color, .cards:hover .card-fonts-color{
            color:#FFFFFF
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
        }

        .cards:hover .custom-icon {
            color: #fff; 
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


    </style>
</head>

<body>
    <h1>Atriumlegacy</h1>
    <div class="row no-gutters "> 
        <div class="col-lg-8 first-section">
            <div class="content text-left pt-5 pb-5">
                <h1 class="hedings">Welcome to Atrium Legacy Foundation</h1>
                <p class="mt-4 mb-4">Atrium Legacy Foundation believes that true progress lies in the values we impart, the communities we nurture, and the future we build together. We are dedicated to creating a lasting impact by fostering empathy in our youth, ensuring dignified aging for our seniors, and promoting sustainable solutions that uplift our communities.</p>
                <button class="custom-btn" >
                    FindOutMore 
                </button>
            </div>
        </div>
        <div class="col-lg-4 second-section">
            <div class="inner-div text-left pt-5 pb-5">
                <h3 class="right-headings">We envision communities where every individual is empowered to thrive, with access to the resources and support they need across all stages of life.</h3>
            </div>
        </div>
    </div>

    <div class="content-section">
        <div class="container">
            <div class="row no-gutters pt-5 pb-5"> 
                <div class="col-sm-12 col-md-6 col-lg-6 text-content">
                <h1 class="hedings">Our Initiatives </h1>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 text-content">
                    <p class="mt-4 mb-4">Empowering communities through strategic initiatives that address today’s challenges and build a better tomorrow.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section">
        <div class="container">
            <div class="row no-gutters pt-5 pb-5"> 
                <div class="col-sm-12 col-md-6 col-lg-3 text-content">
                    <div class="cards">
                        <div class="cards-heading text-center">
                            <i class="fa fa-medkit custom-icon" aria-hidden="true"></i>
                        </div>
                        <div class="cards-body text-center mt-4">
                            <h4 class="card-fonts-heading-color">ReStart Education</h4>
                            <p class="mt-3 text-left card-fonts-color">Cultivating the next generation to prioritize social values, empathy, and community engagement over material wealth.</p>
                        </div>
                        <div class="cards-footer mt-4 text-center">
                            <div class="custom-footer-icons-div">
                                <i class="fa fa-arrow-right custom-icon" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 text-content">
                    <div class="cards">
                        <div class="cards-heading text-center">
                            <i class="fa fa-medkit custom-icon" aria-hidden="true"></i>
                        </div>
                        <div class="cards-body text-center mt-4">
                            <h4 class="card-fonts-heading-color">Aging Grace</h4>
                            <p class="mt-3 text-left card-fonts-color">Promoting comprehensive wellness and societal integration for seniors, ensuring they remain vital members of the community.</p>
                        </div>
                        <div class="cards-footer mt-4 text-center">
                            <div class="custom-footer-icons-div">
                                <i class="fa fa-arrow-right custom-icon" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 text-content">
                    <div class="cards">
                        <div class="cards-heading text-center">
                            <i class="fa fa-medkit custom-icon" aria-hidden="true"></i>
                        </div>
                        <div class="cards-body text-center mt-4">
                            <h4 class="card-fonts-heading-color">HomeStrong </h4>
                            <p class="mt-3 text-left card-fonts-color">Addressing the urgent need for fast and affordable housing solutions, fostering stability and security for vulnerable populations.</p>
                        </div>
                        <div class="cards-footer mt-4 text-center">
                            <div class="custom-footer-icons-div">
                                <i class="fa fa-arrow-right custom-icon" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 text-content">
                    <div class="cards">
                        <div class="cards-heading text-center">
                            <i class="fa fa-medkit custom-icon" aria-hidden="true"></i>
                        </div>
                        <div class="cards-body text-center mt-4">
                            <h4 class="card-fonts-heading-color">AgriThrive</h4>
                            <p class="mt-3 text-left card-fonts-color">Leveraging agricultural technology to enhance global food security and empower communities to achieve self-sufficiency.</p>
                        </div>
                        <div class="cards-footer mt-4 text-center">
                            <div class="custom-footer-icons-div">
                                <i class="fa fa-arrow-right custom-icon" aria-hidden="true"></i>
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
