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
        .first-section {
            background-color: #fdfbf8;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px; 
        }
        .hedings{
            font-size: 46px;
            line-height: 58px;
            font-family: 'Montserrat', sans-serif;
        }
        .right-headings{
            /* font-size: 40px; */
            line-height: 50px;
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
        }
        .content{
            padding: 0 24% 0 28% !important;
        }
        p{
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
            height: 100%; 
            display: flex;
            justify-content: center;
            align-items: center;
            color: white; 
            text-align: center;
        }

        .inner-div{
            padding: 0 20% 0 18% !important; 
        }

        .first-section .content {
            text-align: center;
        }
        .custom-btn{
            font-size: 16px;
            line-height: 50px;
            font-weight: 700;
            padding-right: 35px;
            padding-left: 35px;
            border-radius: 30px;
            border-width:1px solid #efc94c;
            background-color: #efc94c;
            color: #254151;
        }
        .custom-btn:hover{
            background-color: transparent;
            border-color: #efc94c;
        }
    </style>
</head>

<body>
    <h1>Atriumlegacy</h1>
    <div class="row no-gutters"> 
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
    
    <?php include 'footer.php'; ?>
</body>

</html>
