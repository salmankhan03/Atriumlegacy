<?php
    if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
        header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        exit();
    }
?>

<!-- https://www.worldvision.ca/terms-and-conditions -->
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="./img/icons/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/icons/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/icons/favicon/favicon-16x16.png">
        <link rel="manifest" href="./img/icons/favicon/site.webmanifest">

        <style>
            .termsBanner {
                /* background-image: url('./img/get_involved/banner_involved.jpg');
                background-position: top center; 
                background-repeat: no-repeat; 
                background-attachment: scroll; 
                background-size: cover; */
                background-color: #0f5194;
            }
            .link {
                font-family: 'Montserrat';
                font-size: 18px !important;
                font-weight: 400 !important;
                color: #0f5194 !important;
                text-decoration: underline !important;
            }
            .text-content ul {
                list-style-position: outside;
                padding-left: 20px;
            }
            .text-content li {
                text-indent: -15px;
            }
            ul li:before{
                background-color: #000 !important;
            } 
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?> 
        <div id="middle">
            <div class="middle_inner">
                <!-- <div class="content_wrap fullwidth">
                    <div class="middle_content entry"></div>
                </div> -->
                <div class = "termsBanner">
                    <div class = "container text-center privacy-banner-paddings">
                        <h2 class = "banner-header text-center white-text">
                            Terms of Use
                        </h2>                  
                    </div>
                </div>

                <div class="header_mid_inner content-padding">
                    <h2 class="h2-title">Your Acceptance</h2>
                    <div class="text-content">
                        <p>Welcome to the website operated by Atrium Legacy Foundation (the “Site”).</p>
                        <p>By using or visiting this Site, you agree to (1) the terms and conditions expressed on this webpage; (2) our privacy policy found at <a class="link" href="./privacy.php">Privacy</a>; and (3) all other terms referenced herein. <b>IF YOU DO NOT AGREE TO ANY OF THESE TERMS, DO NOT USE THE SITE.</b></p>
                        <p>Atrium Legacy Foundation may, at its sole discretion, modify or revise these Site Terms of Use and its related policies at any time, and you agree to be bound by such modifications. Any modifications will be effective immediately upon posting of the revisions on the Site, and you waive any right you may have to receive specific notice of such modifications. Your continued use of this Site following the posting of changes or modifications will confirm your acceptance of such changes or modifications. Therefore, you should periodically review the Site Terms of Use and applicable policies from time-to-time to understand the terms and conditions that apply to your use of the Site.</p>
                        <p>If you have a question regarding the use of the Site, please <a class="link" href="./contact_us.php">contact us</a>.</p>
                    </div>

                    <h2 class="h2-title">Content</h2>
                    <div class="text-content">
                        <p>The content, data, images, and videos found on this Site are the property of, or under license to, Atrium Legacy Foundation and may not be redistributed, copied, or modified, altered or used without the express prior written permission of Atrium Legacy Foundation.</p>
                        <p>The use of, modification of, or linking to any images, photos, videos, stories and other content found on this Site, or any Atrium Legacy Foundation website, without the express prior written permission of Atrium Legacy Foundation is strictly prohibited.</p>
                        <p>From time to time, the information displayed on this Site or other Atrium Legacy Foundation websites may be incorrect or incomplete. By using the Site, you agree to hold Atrium Legacy Foundation, its directors, officers, employees and volunteers, or related affiliates harmless from any damages resulting from any such errors or omissions.</p>
                        <p>The Site may contain links to other third party websites. Atrium Legacy Foundation is not responsible for the privacy practices or the content of any of those third party websites.</p>
                    </div>

                    <h2 class="h2-title">Linking to Atrium Legacy Foundation</h2>
                    <div class="text-content" id="linking">
                        <p>We understand that by linking to the Site you are demonstrating support for our goals of fostering values, supporting wellness and promoting sustainable communities</p>
                        <p>If you do link to our Site, you agree to the following terms:</p>
                        <ul>
                            <li>The website or other media to which you link our Site (the “Linked Media”):
                                <ul style="padding-left:10px;">
                                    <li>Will not contain any content which could be considered offensive or inappropriate for children;</li>
                                    <li>Will not contain any content which could potentially harm or exploit children, including content which could be considered to promote or depict exploitation and/or abuse of children for any illegal or immoral purpose;</li>
                                    <li>Will not contain any content that is unlawful, libelous, defamatory, obscene, pornographic, indecent, lewd, suggestive, harassing, threatening, invasive of privacy or publicity rights, abusive, inflammatory, fraudulent or otherwise objectionable;</li>
                                    <li>Will not contain any content that may infringe any patent, trademark, trade secret, copyright or other intellectual or proprietary right of any party;</li>
                                    <li>Will not contain any content that impersonates any person or entity or otherwise misrepresents an affiliation with a person or entity;</li>
                                    <li>Will not contain any personal information of anyone, including, without limitation, addresses, phone numbers, email addresses, SIN or credit card numbers;</li>
                                    <li>Will not contain any content or files that contain or knowingly may contain viruses, corrupted data or other harmful, disruptive or destructive files; and</li>
                                    <li>Will not contain any content that consists of unsolicited promotions, political campaigning, commercial advertising or business solicitations;</li>
                                </ul>
                            </li>
                            <li>You will not copy content from the Site without the prior express written consent of Atrium Legacy Foundation;</li>
                            <li>You will not embed any webpage from our Site in a frame; the Site must be viewed in a browser on its own;</li>
                            <li>You will not imply that Atrium Legacy Foundation is endorsing your organization or your products or otherwise misrepresent your relationship with Atrium Legacy Foundation;</li>
                            <li>You will ensure that any text-only link or hyperlink to the Site clearly reads <span class="highlight">“www.Atrium Legacy Foundation.ca”</span> or “Atrium Legacy Foundation”;</li>
                            <li>You will not use the Marks (as herein defined) without prior written permission of Atrium Legacy Foundation.</li>
                        </ul>
                        <p>You agree to immediately remove any link to the Site at the request of Atrium Legacy Foundation.</p>
                    </div>

                    <h2 class="h2-title">No Commercial Activity of Third-Party Products and Services</h2>
                    <div class="text-content">
                        <p>This Site is for furthering the nonprofit ministry purposes of Atrium Legacy Foundation. Unless otherwise expressly approved by Atrium Legacy Foundation, no third party shall advertise or promote its products or services on the Site.</p>
                    </div>

                    <h2 class="h2-title">Submission of Suggestions and Ideas to Atrium Legacy Foundation</h2>
                    <div class="text-content">
                        <p>You acknowledge and agree that any questions, comments, suggestions, ideas, feedback or other information about the Site or our services (“Submissions”) provided by you to Atrium Legacy Foundation are not confidential and shall become the sole property of Atrium Legacy Foundation. Atrium Legacy Foundation shall own exclusive rights, including all intellectual property rights, and shall be entitled to the unrestricted use and dissemination of these submissions for any purpose, without acknowledgement or compensation to you.</p>
                    </div>

                    <h2 class="h2-title">Termination Policy</h2>
                    <div class="text-content">
                        <p>Atrium Legacy Foundation may at its sole discretion limit access to the Site and/or terminate the accounts of any subscribers, account holders or users who may be in violation of any intellectual property rights of others and whose activities may be in contravention of these Terms of Use.</p>
                    </div>

                    <!-- <h2 class="h2-title">Registration Data & Account Security</h2>
                    <div class="text-content">
                        <p>In consideration for your use of the Site, you agree to (a) provide accurate, current and complete information about you as may be prompted by any registration or account forms on the Site (“Registration Data”); (b) maintain the security of your password and identification; (c) maintain and promptly update the Registration Data, and any other information you provide to Atrium Legacy Foundation, to keep it accurate, current and complete; and (d) accept all risks of unauthorized access to the Registration Data and any other information you provide to Atrium Legacy Foundation.</p>
                    </div> -->

                    <h2 class="h2-title">Limitation Of Liability</h2>
                    <div class="text-content">
                        <p>In no event shall Atrium Legacy Foundation, any other Atrium Legacy Foundation entity, or any of their respective directors, members, employees or agents be liable for any direct, special, indirect or consequential damages, or any other damages of any kind (including but not limited to loss of use, loss of profits or loss of data, whether in an action in contract, tort (including but not limited to negligence) or otherwise) arising out of, or in any way connected with, the use of or inability to use the Site, the services, the content or the materials contained in or accessed through the Site, including without limitation any damages caused by or resulting from reliance by user on any information obtained from Atrium Legacy Foundation, or that result from mistakes, omissions, interruptions, deletion of files or email, errors, defects, viruses, delays in operation or transmission or any failure of performance, whether or not resulting from acts of God, communications failure, theft, destruction or unauthorized access to Atrium Legacy Foundation’s records, programs or services. In no event shall the aggregate liability of Atrium Legacy Foundation, whether in contract, warranty, tort (including negligence, whether active, passive or imputed), product liability, strict liability or other theory, arising out of or relating to the use of or inability to use the Site or the services or to these Site Terms exceed any compensation you have paid, if any, to Atrium Legacy Foundation for access to or use of the Site.</p>
                    </div>

                    <h2 class="h2-title">Trademarks</h2>
                    <div class="text-content">
                        <p>The “Atrium Legacy Foundation” trademarks and trade names along with the other logos, service marks, slogans, and any other indicia for source of goods and services (collectively the “Marks”) and trade dress contained on the Site are, unless otherwise stated, owned and/or used under license by Atrium Legacy Foundation or their affiliates (collectively “Atrium Legacy Foundation”) and may not be copied, imitated or used, in whole or in part, without the prior written permission of Atrium Legacy Foundation. You may not use any metatags or any other “hidden text” utilizing the Marks or trade dress of Atrium Legacy Foundation without our prior written permission. All other trademarks, trade names, logos, service marks and slogans mentioned on the Site are the property of their respective owners. Reference to any third party trademarks, trade names, logos, service marks, products, services, processes, other information or otherwise does not constitute or imply endorsement, sponsorship or recommendation thereof by Atrium Legacy Foundation.</p>
                    </div>

                    <!-- <h2 class="h2-title">Accessibility</h2>
                    <div class="text-content">
                        <p>Atrium Legacy Foundation is committed to digital accessibility, and to conforming to the Web Content Accessibility Guidelines (WCAG) 2.0, Level A and AA and complying with the Accessibility for Ontarians with Disabilities Act (AODA) effective communication requirements, and other applicable regulations. For more information related to our Accessibility practices, please visit Accessibility at Atrium Legacy Foundation.</p>
                    </div> -->

                    <h2 class="h2-title">General</h2>
                    <div class="text-content">
                        <p>These Terms of Use are subject to change without notice. Atrium Legacy Foundation reserves the sole right to determine how its resources, the Site and Marks may be used. Decisions regarding third party use and linking are at the sole discretion of Atrium Legacy Foundation and may be revised or rescinded without prior notice.</p>
                    </div>

                    <h2 class="h2-title">Questions and Contact Information</h2>
                    <div class="text-content">
                        <p>Questions or comments about the Site may be directed via email to <span class="highlight">info@alf.com</span></p>
                        <p>Revised October, 2024</p>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?> 
    </body>
</html>