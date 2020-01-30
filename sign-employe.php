<?php session_start() ?>
<?php require_once './FileConnection/Data_connection.php'; ?>
<?php
require_once './FileConnection/Extra_functions.php';
;
?>
<?php require_once './Classes/Achieve.php'; ?>
<?php $class = new Achieve(); ?>
<?php require_once './Classes/Component.php'; ?>
<?php $Component = new Component() ?>
<?php require_once './app/multilingual.php'; ?>
<?php
if ($_SESSION['lang'] == "ar") {
    $sql_nav = "SELECT * FROM `page_components` where id=9";
    $sql_signemploye = "SELECT * FROM `page_components` where id=5";
    $sql_ = "SELECT * FROM `page_components` where id=8";
    $sql_hed = "SELECT * FROM `page_components` where id=15";
} elseif ($_SESSION['lang'] == "eng") {
    $sql_nav = "SELECT * FROM `page_components` where id=14";
    $sql_signemploye = "SELECT * FROM `page_components` where id=11";
    $sql_ = "SELECT * FROM `page_components` where id=13";
    $sql_hed = "SELECT * FROM `page_components` where id=16";
} else {
    $sql_nav = "SELECT * FROM `page_components` where id=9";
    $sql_signemploye = "SELECT * FROM `page_components` where id=5";
    $sql_ = "SELECT * FROM `page_components` where id=8";
    $sql_hed = "SELECT * FROM `page_components` where id=15";
}
$footer = $Component->fetchObject_SQL($Data_communication, $sql_);
$signemploye = $Component->fetchObject_SQL($Data_communication, $sql_signemploye);
$nav = $Component->fetchObject_SQL($Data_communication, $sql_nav);
$hed = $Component->fetchObject_SQL($Data_communication, $sql_hed);
?>
<!DOCTYPE html>
<html lang="en">
    <?php
    require_once './Additionalcomponents/head.php';
    ?>
    <body class="demo-3 home">
        <?php require_once './Additionalcomponents/preloading.php'; ?>
        <!-- Wrapper content -->
        <div id="wrapper-container" class="content-pusher">
            <div class="overlay-close-menu"></div>
            <!-- Header -->    
            <?php require_once './Additionalcomponents/Header.php'; ?>
            <!-- Main Content -->
            <div id="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
                        <div class="content container">
                            <h1 class="heading_primary"><?php echo $signemploye->statement1; ?></h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="index.html"><?php echo $signemploye->statement2; ?></a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active"> <?php echo $signemploye->statement3; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="site-content no-padding">
                    <div class="page-content">
                        <div class="container">
                            <div class="empty-space"></div>
                            <div class="row tm-flex">
                                <div class="col-sm-6">
                                    <div class="sc-heading">
                                        <p class="first-title"> <?php echo $signemploye->statement4; ?></p>
                                        <h3 class="second-title"><?php echo $signemploye->statement5; ?></h3>
                                    </div>
                                    <div class="sc-contact-form">
                                        <form action="ajax/sign-employe.php" id="uploadImage"  method="post">
                                            <input type="text" name="Name" required placeholder=" <?php echo $signemploye->statement18; ?>">
                                            <input type="email" name="Email" required placeholder="<?php echo $signemploye->statement19; ?>">
                                            <input type="tel" name="Contact_Data" required placeholder="<?php echo $signemploye->statement20; ?>">
                                            <input type="tel" name="Employee_number" required placeholder="<?php echo $signemploye->statement21; ?>">
                                            <input type="text" name="Section" required placeholder="<?php echo $signemploye->statement22; ?>">
                                            <input type="text" name="Function" required placeholder="<?php echo $signemploye->statement23; ?>">
                                            <span> <?php echo $signemploye->statement24; ?></span>
                                            <input type="file" name="uploadFile" required placeholder="الوظيفه*">
                                            <textarea name="your-message" id="your-message" cols="30" rows="10" required placeholder="<?php echo $signemploye->statement25; ?>"></textarea>
                                            <input type="submit" class="submit" value="<?php echo $signemploye->statement26; ?>">
                                        </form>
                                        <div id="targetLayer">                 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="sc-contact-info">
                                        <div class="sc-heading">
                                            <p class="first-title"> <?php echo $signemploye->statement6; ?></p>
                                            <p class="description"><a href="https://www.google.com/maps/place/%D9%85%D9%86%D8%AA%D8%AC%D8%B9+%D8%A3%D8%A8%D8%AD%D8%B1%E2%80%AD/@21.7348945,39.1332457,14z/data=!4m11!1m2!2m1!1zINmF2YbYqtis2Lkg2KPYqNit2LEg2LfYsdmK2YIg2KfZhNmD2YjYsdmG2YrYtNiMINij2KjYrdixINin2YTYrNmG2YjYqNmK2KnYjCDYrNiv2Kkg!3m7!1s0x15c1631f805162df:0x21f3d0704f7fc90a!5m2!4m1!1i2!8m2!3d21.754144!4d39.1338356">
                                                    <?php echo $signemploye->statement7; ?>
                                                </a></p>
                                        </div>
                                        <p class="phone"><?php echo $signemploye->statement8; ?>. <a href="tel:6563030 012 966+"><?php echo $signemploye->statement9; ?></a></p>
                                        <p class="phone"><?php echo $signemploye->statement10; ?> <a href="tel:6560110 012 966+"><?php echo $signemploye->statement11; ?></a></p>
                                        </br><p class="email"><?php echo $signemploye->statement12; ?></p>
                                        <ul class="sc-social-link style-03">
                                            <li><a target="_blank" class="face" href="<?php echo $signemploye->statement13; ?>"
                                                   title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" class="twitter" href="<?php echo $signemploye->statement14; ?>"
                                                   title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" class="skype" href="<?php echo $signemploye->statement16; ?>" title="Skype"><i class="fa fa-skype"></i></a></li>
                                            <li><a class="instagram" href="<?php echo $signemploye->statement15; ?>" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29649.368176122527!2d39.13324569424725!3d21.734894529671656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c1631f805162df%3A0x21f3d0704f7fc90a!2z2YXZhtiq2KzYuSDYo9io2K3YsQ!5e0!3m2!1sar!2seg!4v1564518765383!5m2!1sar!2seg" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- Footer -->
            <?php require_once './Additionalcomponents/Footer.php'; ?>
        </div><!-- wrapper-container -->
        <div id="back-to-top">
            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
        </div>
        <?php require_once './Additionalcomponents/js_emp.php'; ?>

        <script src="js/jq.js" type="text/javascript"></script>

        <script src="js/jquery.form.js" type="text/javascript"></script>
        <script src="Development/form3.js" type="text/javascript"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="Development/new.js" type="text/javascript"></script>

    </body>
    <!-- Mirrored from html.thimpress.com/hotelwp/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 16:15:43 GMT -->
</html>
<?php $Data_communication=null;  ?>