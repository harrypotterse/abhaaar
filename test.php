<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'autoload.php';
$mail = new PHPMailer(true);
if ($_POST['sub']):
    // print_r($_POST);
    //  Array ( [firstname] => a [lastname] => a [email] => a [subject] => a [message] => a )
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        $msgerr .= "<div class='alert alert-info'>Message sent successfully</div>";
endif;
try {
    $body = "
<h1 style=' font-size: 50px; font-family: tahoma; color: #2cd9ee; text-align: left; text-transform: uppercase;  '>
Contact Us
</h1>
<table style='background: #fafafa;font-family: tahoma;font-size: 12px;line-height: 51px;border: 1px ridge;padding: 0.5%;width: 100%;direction: rtl;text-align: center;/* box-shadow: -1px 4px #626262; */'>
    <tr>
<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>firstname</td>
<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$firstname</td>
    </tr>
      <tr>
<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>lastname</td>
<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$lastname</td>
    </tr>
    <tr>
          <tr>
<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>email</td>
<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$email</td>
    </tr>
    <tr>
          <tr>
<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>subject</td>
<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$subject</td>
    </tr>
    <tr>
              <tr>
<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>the message</td>
<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$message</td>
    </tr>
    <tr>
</table>";


    $to = "info@terrace-sa.com";
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'mail.terrace-sa.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'test@terrace-sa.com';
    $mail->Password = 'test@terrace-sa.com';
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('test@terrace-sa.com', 'test@terrace-sa.com');
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $to;
    $mail->Body = $body;
    $mail->send();
} catch (Exception $exc) {
    echo $exc->getMessage();
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>terrace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />


        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Flexslider  -->
        <link rel="stylesheet" href="css/flexslider.css">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!-- Flaticons  -->
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <div class="colorlib-loader"></div>

        <div id="page">
            <nav class="colorlib-nav" role="navigation">
                <div class="top-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-2">
                                <div id="colorlib-logo"><img src="images/logo.png" width="250" /><a href="index.html"></a></div>
                            </div>
                            <div class="col-xs-10 text-right menu-1">
                                <ul>
                                    <li><a href="index.html">Home</a></li>

                                    </li>

                                    <li><a href="index.html">About</a></li>
                                    <li class="active"><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <aside id="colorlib-hero">
                <div class="flexslider">
                    <ul class="slides">
                        <li style="background-image: url(images/img_bg_4.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                        <div class="slider-text-inner text-center">
                                            <h2>Get in Touch</h2>
                                            <h1>Contact Us</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>

            <div id="colorlib-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 animate-box">
                            <h2>Contact Information</h2>
                            <div class="row contact-info-wrap">
                                <div class="col-md-3">
                                    <p><span><i class="icon-location-2"></i></span> Saudi Arabia, <br> Riyadh Muhammad V street</p>
                                </div>
                                <div class="col-md-3">
                                    <p><span><i class="icon-phone3"></i></span> <a href="tel:0550090009">0550090009</a></p>
                                </div>
                                <div class="col-md-3">
                                    <p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@terrace-sa.com">info@terrace-sa.com</a></p>
                                </div>
                                <div class="col-md-3">
                                    <p><span><i class="icon-globe"></i></span> <a href="#">terace.sa.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1 animate-box">
                            <h2>Get In Touch</h2>
                            <form action="contact.php" method="post">
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <label for="fname">First Name</label>
                                        <input type="text" id="fname" class="form-control" placeholder="Your firstname" name="firstname"  required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lname">Last Name</label>
                                        <input type="text" id="lname" class="form-control" placeholder="Your lastname" name="lastname" required="required">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" class="form-control" placeholder="Your email address" name="email" required="required">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="subject">Subject</label>
                                        <input type="text" id="subject" class="form-control" placeholder="Your subject of this message" name="subject" required="required">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required="required" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Send Message" name="sub" class="btn btn-primary">
                                </div>

                            </form>	
                            <div >
                                <?php
                                if ($mail->send()):
                                    echo $msgerr;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="colorlib-maps">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12" style="margin-bottom: 17px;">
                            <!-- Is Place The Work -->
                            <h2>My Google Maps Location</h2>
                            <!--The div element for the map -->
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.744419519538!2d46.703961985000355!3d24.701311084129173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03465e72424f%3A0xfb37eaf694aeaa14!2z2YXYrNmF2Lkg2KrZitix2KfYsw!5e0!3m2!1sar!2sma!4v1560624681141!5m2!1sar!2sma" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <footer id="colorlib-footer" role="contentinfo">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-4 colorlib-widget">
                            <h4>About Company</h4>
                            <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                            <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-md-4 col-md-push-1">
                            <h4>Recent Blog</h4>
                            <ul class="colorlib-footer-links">
                                <li>
                                    <span>&mdash; 20 Jan, 2019</span>
                                    <a href="#">Results of Annual General Meeting</a>
                                </li>
                                <li>
                                    <span>&mdash; 19 Jan, 2019</span>
                                    <a href="#">Construction was awarded with “The Best Construction Company” prize</a>
                                </li>
                                <li>
                                    <span>&mdash; 18 Jan, 2019</span>
                                    <a href="#">New Saint Michael’s College Residence Hall Buzzing with Student Activity</a>
                                </li>
                            </ul>
                        </div>


                        <div class="col-md-4 col-md-push-1">
                            <h4>Contact Info</h4>
                            <ul class="colorlib-footer-links">
                                <li>Saudi Arabia, <br> Riyadh Muhammad V street</li>
                                <li><a href="tel:0550090009"><i class="icon-phone"></i> 0550090009 </a></li>
                                <li><a href="mailto:info@terrace-sa.com"><i class="icon-envelope"></i>info@terrace-sa.com</a></li>
                                <li><a href="https://www.instagram.com/terace.sa/?hl=en"><i class="icon-location4"></i> terace.sa</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>
                                <small class="block">Copyright All rights reserved. </small>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Stellar Parallax -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Flexslider -->
        <script src="js/jquery.flexslider-min.js"></script>
        <!-- Owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <!-- Counters -->
        <script src="js/jquery.countTo.js"></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
        <script src="js/google_map.js"></script>

        <!-- Main -->
        <script src="js/main.js"></script>

    </body>
</html>

