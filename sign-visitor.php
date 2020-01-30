<?php session_start() ?>
<?php require_once './FileConnection/Data_connection.php'; ?>
<?php require_once './FileConnection/Extra_functions.php';;?>
<?php require_once './Classes/Achieve.php'; ?>
<?php $class = new Achieve(); ?>
<?php require_once './Classes/Component.php'; ?>
<?php $Component = new Component() ?>
<?php require_once './app/multilingual.php'; ?>
<?php
if ($_SESSION['lang'] == "ar") {
$sql_2 = "SELECT * FROM `page_components` where id=6";
$sql_ = "SELECT * FROM `page_components` where id=8";
$sql_nav = "SELECT * FROM `page_components` where id=9";
  $sql_hed = "SELECT * FROM `page_components` where id=15";
} elseif ($_SESSION['lang'] == "eng") {
$sql_2 = "SELECT * FROM `page_components` where id=12";
$sql_ = "SELECT * FROM `page_components` where id=13";
$sql_nav = "SELECT * FROM `page_components` where id=14";
  $sql_hed = "SELECT * FROM `page_components` where id=16";
} else {
$sql_2 = "SELECT * FROM `page_components` where id=6";
$sql_ = "SELECT * FROM `page_components` where id=8";
$sql_nav = "SELECT * FROM `page_components` where id=9";
  $sql_hed = "SELECT * FROM `page_components` where id=15";
}


$footer = $Component->fetchObject_SQL($Data_communication, $sql_);  
$visitor = $Component->fetchObject_SQL($Data_communication, $sql_2); 
$nav= $Component->fetchObject_SQL($Data_communication, $sql_nav); 
$hed= $Component->fetchObject_SQL($Data_communication, $sql_hed);




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
            <?php require_once './Additionalcomponents/Header.php'; ?>
            <!-- Main Content -->
            <div id="main-content">
                <div class="page-title">
                    <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
                        <div class="content container">
                            <h1 class="heading_primary"><?php echo $visitor->statement1; ?></h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="index.php"><?php echo $visitor->statement2; ?></a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item active"><?php echo $visitor->statement3; ?></li>
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
                                        <p class="first-title"> <?php echo $visitor->statement4; ?></p>
                                        <h3 class="second-title"><?php echo $visitor->statement5; ?></h3>
                                    </div>
                                    <div class="sc-contact-form">    
                                        <form action="ajax/sign-visitor.php" id="uploadImage" method="post">
                                            <span class="input_msg"></span>
                                            <input type="text" name="your-name" required placeholder="<?php echo $visitor->statement17; ?>" class="inputname">
                                            <span></span>
                                            <input type="email" name="your-email" required placeholder="<?php echo $visitor->statement18; ?>" class="input">
                                            <span></span>
                                            <input type="tel" name="your-phone" required placeholder="<?php echo $visitor->statement19; ?>" class="input">
                                            <span></span>
                                            <input type="tel" name="your-Membership" required placeholder="<?php echo $visitor->statement20; ?>" class="input">
                                            <span></span>
                                            <input type="text" name="your-Identity" required placeholder="<?php echo $visitor->statement21; ?>" class="input">
                                            <span></span>
                                            <span><?php echo $visitor->statement22; ?></span>
                                            <input type="date" name="your-Start" required  class="input">
                                            <span></span>
                                            <span><?php echo $visitor->statement23; ?></span>
                                            <input type="date" name="your-End" required  class="input">
                                            <span></span>
                                            <input type="text" name="card-number" required placeholder="<?php echo $visitor->statement24; ?>" class="input">
                                            <span><?php echo $visitor->statement25; ?></span>
                                            <span></span>
                                            <select name="Membership">
                                                <option><?php echo $visitor->statement30; ?></option>
                                                <option><?php echo $visitor->statement31; ?></option>
                                            </select>
                                            <span><?php echo $visitor->statement26; ?></span>
                                            <span></span>
                                            <select id="status" name="status">
                                                <option><?php echo $visitor->statement32; ?> </option>
                                                <option><?php echo $visitor->statement33; ?></option>
                                            </select>
                                            <span><?php echo $visitor->statement27; ?></span>
                                            <span></span>
                                            <input type="file" name="uploadFile" required placeholder="الوظيفه*" class="input">
                                            <textarea name="your-message" id="your-message" cols="30" rows="10" required placeholder="<?php echo $visitor->statement28; ?>" class="input"></textarea>
                                            <input type="submit" class="submit" value="<?php echo $visitor->statement29; ?>">
                                        </form>
                                        <div id="targetLayer">                 
                                        </div>
                                    </div>
                                </div>
                                <?php require_once './Basiccomponents/contact-info.php'; ?>
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
        <!-- Scripts -->
        <?php require_once './Additionalcomponents/js_vist.php'; ?>
        <script src="js/jq.js" type="text/javascript"></script>

        <script src="js/jquery.form.js" type="text/javascript"></script>
        <script src="Development/form3.js" type="text/javascript"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="Development/new.js" type="text/javascript"></script>
    </body>
    <!-- Mirrored from html.thimpress.com/hotelwp/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 16:15:43 GMT -->
</html>
<?php $Data_communication=null ?>