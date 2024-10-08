<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Atrium Legacy Foundation</title>
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
         .donateBanner {
            background-image: url('./img/donate/banner_donate.jpg');
            background-position: top center; 
            background-repeat: no-repeat; 
            background-attachment: scroll; 
            background-size: cover;
         }

         .form-padding{
            padding-top: 30px;
            padding-bottom: 30px;
         }

         .form-label{
            font-family: 'Montserrat';
            font-size: 18px !important;
            line-height: 28px;
            font-weight: 400;
            color: #000;
            font-weight: bold;
         }

         .radio-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        input[type="radio"] {
            width: 1em;
            height: 1em;
            padding-top: 3px !important;
        }

        input[type="checkbox"] {
            width: 1em;
            height: 1em;
            position: absolute;
            top: 4px;
        }

        .donation_amount{
            padding-left: 10px;
            font-family: 'Montserrat';
            font-size: 18px !important;
            line-height: 28px;
            font-weight: 400;
            color: #000;
        }

        .margin-top{
            margin-top: 30px
        }

        #recurrence_select, #campaign_select {
            width: 100%;
            height: 48px;
            padding: 6px 20px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 25px;
            background-color: transparent;
            color: #333;
            outline: none;
            transition: background-color 0.3s ease, color 0.3s ease;
            background-position: 100% center;
            background-repeat: no-repeat;
            background-image: url("./img/icons/select.png");
        }

        .form-control:focus {
            border-color: #2e404b !important;
            box-shadow: none !important;
        }

        .hidden {
            display: none !important;  
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
            font-family: 'Montserrat';
            font-size: 18px !important;
            line-height: 28px;
            font-weight: 400;
            color: #000;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .input-group {
            display: flex;
            gap: 10px; 
        }

        .input-group > div {
            flex: 1;
        }

        button:focus {
            outline: none !important;
        }

        .error-message{
            float: right;
            color: #2e404b;
            font-size: 11px;
            line-height: 20px;
            font-weight: bold;
            font-style: normal;
            text-transform: none;
            width: 150px;
        
            position: relative;
            z-index: 16;
        }

        /* .detail-form-label{
            font-size: 18px;
            line-height: 26px;
            font-weight: normal;
            font-style: normal;
            color: #7d7d7d;
        } */

        @media (max-width: 992px) {
            .radio-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .radio-grid {
                grid-template-columns: repeat(1, 1fr);
            }
        }

         /* @media only screen and (max-width: 540px) {
            .banner-header {
               font-size: 36px;
            }
         } */

         textarea::placeholder, input::placeholder {
            font-family: 'Montserrat';
            font-size: 18px !important;
            line-height: 28px;
            font-weight: 400;
            color: #000;
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
            <div class="donateBanner">
                <div class = "container text-center banner-paddings">
                    <h2 class = "banner-header text-center white-text">
                        Donate
                    </h2>                  
                </div>
            </div>

            <div class="header_mid_inner pd-0 content-padding">
                <h2 class="h2-title">Donation Details</h2>
                <form action="send_donation_mail.php" method="post" class="init" aria-label="Contact form" novalidate="novalidate" data-status="init" data-inited-validation="1">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 form-padding">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <label class="form-label">Donation Amount *</label>
                                </div>
                                <div class="col-md-9 col-sm-9" id="donation-group">
                                    <div class="radio-grid">
                                        <div>
                                            <input type="radio" id="donation1" name="donation_options" value="5">
                                            <label for="donation1" class="donation_amount">$5.00</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="donation2" name="donation_options" value="10">
                                            <label for="donation2" class="donation_amount">$10.00</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="donation3" name="donation_options" value="20">
                                            <label for="donation3" class="donation_amount">$20.00</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="donation4" name="donation_options" value="50">
                                            <label for="donation4" class="donation_amount">$50.00</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="donation5" name="donation_options" value="100">
                                            <label for="donation5" class="donation_amount">$100.00</label>
                                        </div>
                                        <div class="error-message" id="donation-amount-error"></div>
                                    </div>

                                    <div style="margin-top: 20px;">
                                        <input class="donation_amount" type="number" id="donation_custom_amount" name="custom_amount" min="1" placeholder="or enter your own donation amount, e.g: 85" style="width: 100%">
                                    </div>
                                </div>
                            </div>

                            <div class="row margin-top">
                                <div class="col-md-3 col-sm-3">
                                    <label class="form-label">Payment Method  *</label>
                                </div>
                                <div class="col-md-9 col-sm-9" id="payment-method-group">
                                    <div class="radio-grid">
                                        <div>
                                            <input type="radio" checked id="online" name="paymentOption" value="onlinePayment">
                                            <label for="online" class="donation_amount">Online payment</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="offline" name="paymentOption" value="offlinePayment">
                                            <label for="offline" class="donation_amount">Offline payment</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row margin-top" id="recur">
                                <div class="col-md-3 col-sm-3" id="recurrence-label">
                                    <label class="form-label">Recurrence *</label>
                                </div>
                                <div class="col-md-9 col-sm-9" id="recurrence">
                                    <select class="form-control" name="recurrence" id="recurrence_select">
                                        <option value="one-time" selected>One-Time</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="yearly">Yearly</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row margin-top">
                                <div class="col-md-3 col-sm-3">
                                    <label class="form-label">Campaigns</label>
                                </div>
                                <div class="col-md-9 col-sm-9" id="campaign">
                                    <select class="form-control" name="campaign" id="campaign_select">
                                        <option value="" selected>No specific campaign</option>
                                        <option value="9500">Let's Help the Endangered Species Today - (Target: 9500.00)</option>
                                        <option value="16000">Preserve the Water: Think outside the sink! - (Target: 16000.00)</option>
                                        <option value="10000">Keep your Earth Clean and Green - (Target: 10000.00)</option>
                                        <option value="10001">We All Must be Saving the Arctic, Come On! - (Target: 10000.00)</option>
                                        <option value="7000">Let's Fight Global Warming Right Now - (Target: 7000.00)</option>
                                        <option value="7001">Public Cry for Environmental Justice - (Target: 7000.00)</option>
                                        <option value="11000">Don’t be Mean, Think Green! - (Target: 11000.00)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row margin-top">
                                <div class="col-md-3 col-sm-3">
                                    <label class="form-label">Message</label>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <textarea class="form-control" name="message" id="message" rows="7" placeholder="Your custom message text..." style="border-radius: 10px; background-color: transparent;"></textarea>
                                </div>
                            </div>

                            <div class="row margin-top">
                                <div class="col-md-3 col-sm-3">
                                    <label class="form-label">Anonymous Donation?</label>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div>
                                        <input type="checkbox" id="anonymous-donation" name="anonymous-donation">
                                        <label for="anonymous-donation" style="margin: 0 0 0 30px; color:#7d7d7d; font-family:'Montserrat';">Check this box to hide your personal info in our donators list</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 px-0">
                        <h2 class="h2-title">Donator Details</h2>

                        <div class="row margin-top">
                            <div class="col-md-12 col-sm-12">
                                <div class="input-group">
                                    <div>
                                        <label for="first-name" class="form-label">First Name *</label> <span class="error-message" id="first-name-error"></span>
                                        <input type="text" id="first-name" name="first-name" class="form-control" placeholder="">
                                    </div>
                                    <div>
                                        <label for="last-name" class="form-label">Last Name *</label>  <span class="error-message" id="last-name-error"></span>
                                        <input type="text" id="last-name" name="last-name" class="form-control" placeholder="">
                                    </div>
                                    <div>
                                        <label for="email" class="form-label">Email *</label> <span class="error-message" id="email-error"></span>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row margin-top">
                            <div class="col-md-12 col-sm-12">
                                <div class="input-group">
                                    <div>
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" id="address" name="address" class="form-control" placeholder="">
                                    </div>
                                    <div>
                                        <label for="zip" class="form-label">Postal Code</label>
                                        <input type="text" id="zip" name="zip" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row margin-top">
                            <div class="col-md-12 col-sm-12">
                                <button class="custom-btn2" type="submit">Submit Donation</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
     

      <!-- Tabs Script -->        
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <script>
         $(document).ready(function() {
            const urlParams = new URLSearchParams(window.location.search);
            const tabToActivate = urlParams.get('tab');

            if (tabToActivate) {
               $('.nav-tabs a[href="#' + tabToActivate + '"]').tab('show');
               if (window.innerWidth < 1025){
                  $('html, body').animate({
                     scrollTop: $('#myTab').offset().top
                  }, 500);
               } else{
                  $('html, body').animate({
                     scrollTop: $('#myTab').offset().top - 80
                  }, 500);
               }
            }
         });
      </script>

        <script>
            const donationRadioButtons = document.querySelectorAll('#donation-group input[name="donation_options"]');
            const donationCustomAmountInput = document.getElementById('donation_custom_amount');

            donationRadioButtons.forEach(radio => {
                radio.addEventListener('change', function() {
                    donationCustomAmountInput.value = this.value;
                });
            });

            donationCustomAmountInput.addEventListener('input', function() {
                const inputValue = this.value;

                donationRadioButtons.forEach(radio => {
                    radio.checked = false;
                });

                const matchingRadio = Array.from(donationRadioButtons).find(radio => radio.value === inputValue);
                if (matchingRadio) {
                    matchingRadio.checked = true;
                }
            });
        </script>

        <script>
            const onlineRadio = document.getElementById('online');
            const offlineRadio = document.getElementById('offline');
            const recurren = document.getElementById('recur');
            const recurrenceDiv = document.getElementById('recurrence');
            const recurrenceLabel = document.getElementById('recurrence-label');

            function toggleRecurrence() {
                if (onlineRadio.checked) {
                    recurren.classList.remove('hidden');
                    recurrenceDiv.classList.remove('hidden');
                    recurrenceLabel.classList.remove('hidden');
                } else {
                    recurren.classList.add('hidden');
                    recurrenceDiv.classList.add('hidden');
                    recurrenceLabel.classList.add('hidden');
                }
            }

            onlineRadio.addEventListener('change', toggleRecurrence);
            offlineRadio.addEventListener('change', toggleRecurrence);

            toggleRecurrence();
        </script>

<script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.querySelector('form.init');

                const donationOptions = document.querySelectorAll('input[name="donation_options"]');
                const customAmount = document.getElementById('donation_custom_amount');
                const paymentMethod = document.querySelectorAll('input[name="paymentOption"]');
                const recurrenceSelect = document.getElementById('recurrence_select');
                const firstName = document.getElementById('first-name');
                const lastName = document.getElementById('last-name');
                const email = document.getElementById('email');

                form.addEventListener('submit', function(event) {
                    let isValid = true;

                    clearErrors();

                    let donationSelected = false;
                    donationOptions.forEach(option => {
                        if (option.checked) {
                            donationSelected = true;
                        }
                    });
                    if (!donationSelected && customAmount.value === '') {
                        isValid = false;
                        displayError('donation-amount-error', '* This field is required');
                    }

                    if (firstName.value.trim() === '') {
                        isValid = false;
                        displayError('first-name-error', '* This field is required');
                    }

                    if (lastName.value.trim() === '') {
                        isValid = false;
                        displayError('last-name-error', '* This field is required');
                    }

                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(email.value)) {
                        isValid = false;
                        displayError('email-error', '* Invalid email address');
                    }

                    if (!isValid) {
                        event.preventDefault();
                    }
                });

                function displayError(elementId, message) {
                    const errorDiv = document.getElementById(elementId);
                    if (errorDiv) {
                        errorDiv.textContent = message;
                    }
                }

                function clearErrors() {
                    const errorElements = document.querySelectorAll('.error-message');
                    errorElements.forEach(element => {
                        element.textContent = '';
                    });
                }
            });
        </script>
      <?php include 'footer.php'; ?> 

   </body>
</html>