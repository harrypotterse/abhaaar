<?php session_start() ?>
<?php require_once './FileConnection/Data_connection.php'; ?>
<?php
require_once './FileConnection/Extra_functions.php';
;
?>
<?php require_once './Classes/Achieve.php'; ?>
<?php require_once './app/multilingual.php'; ?>
<?php $class = new Achieve(); ?>
<?php require_once './Classes/Component.php'; ?>
<?php $Component = new Component() ?>
<!--//======================================-->
<?php
if ($_SESSION['lang'] == "ar") {
    $sql = "SELECT * FROM `page_components` where id=1";
    $sql_ = "SELECT * FROM `page_components` where id=8";
    $sql_nav = "SELECT * FROM `page_components` where id=9";
    $sql_hed = "SELECT * FROM `page_components` where id=15";
} elseif ($_SESSION['lang'] == "eng") {
    $sql = "SELECT * FROM `page_components` where id=2";
    $sql_ = "SELECT * FROM `page_components` where id=13";
    $sql_nav = "SELECT * FROM `page_components` where id=14";
    $sql_hed = "SELECT * FROM `page_components` where id=16";
} else {
    $sql = "SELECT * FROM `page_components` where id=1";
    $sql_ = "SELECT * FROM `page_components` where id=8";
    $sql_nav = "SELECT * FROM `page_components` where id=9";
    $sql_hed = "SELECT * FROM `page_components` where id=15";
}
//=============================================================
$index_pag = $Component->fetchObject_SQL($Data_communication, $sql);
$footer = $Component->fetchObject_SQL($Data_communication, $sql_);
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
            <div id="main-content" class="main-content">
                <div id="home-main-content" class="home-main-content home-1">
                    <?php
                    require_once './Basiccomponents/slide.php';
                    require_once './Basiccomponents/room.php';
                    ?> 
                    <div class="empty-space"></div>
                    <?php
                    require_once './Basiccomponents/about.php';
                    require_once './Basiccomponents/services.php';
                    ?>
                    <div class="empty-space"></div>
                    <div class="h1-video rectangle-overlay">
                        <div class="sc-video">
                            <div class="background-video">
                                <div class="cover-image" style="background-image: url('<?php echo $index_pag->statement37; ?>');"></div>
                                <div class="content container">
                                    <h3 class="title"><?php echo $index_pag->statement7; ?> <br> <?php echo $index_pag->statement8; ?></h3>
                                    <i class="video-play ion-ios-play"></i>
                                    <span class="text-icon"><?php echo $index_pag->statement9; ?></span>
                                </div>
                                <video loop="" class="full-screen-video" data-autoplay="">
                                    <source src="images/home/hotel.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <?php require_once './Basiccomponents/list-box.php'; ?>
                    </div>
                    <?php
                    require_once './Basiccomponents/services.php';
                    require_once './Basiccomponents/banner.php';
                    require_once './Basiccomponents/offers.php';
                    require_once './Basiccomponents/testimonial.php';
                    ?>
                    <div class="group-destination" id="blog">
                        <div class="sc-content-overlay">
                            <div class="container">
                                <div class="empty-space"></div>

                                <?php
                                require_once './Basiccomponents/blog.php';
                                ?>
                                <div class="empty-space"></div>
                                <div class="sc-heading style-01 text-center">
                                    <h3 class="title"><?php echo $index_pag->statement22; ?></h3>
                                </div>
                                <?php
                                require_once './Basiccomponents/gallery.php';
                                ?>
                                <div class="empty-space"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if ($_SESSION['lang'] == "ar") {
                $t1 = "ارسل";
                $t2 = "الرسالة";
                $t7 = "أرسل الرسالة";
                $t6 = "الاسم*";
                $t3 = "البريد الالكتروني*";
                $t4 = "الموبيل*";
                $t5 = "الرسالة*";
                $t7 = "ارسل الرسالة";
            } elseif ($_SESSION['lang'] == "eng") {
                $t1 = "SEND A";
                $t2 = "MESSAGE";
                $t6 = "Your name*";
                $t3 = "Your email*";
                $t4 = "Your phone*";
                $t5 = "Your message*";
                $t7 = "Send message";
            } else {
                $t1 = "SEND A";
                $t2 = "MESSAGE";
                $t6 = "Your name*";
                $t3 = "Your email*";
                $t4 = "Your phone*";
                $t5 = "Your message*";
                $t7 = "Send message";
            }
            ?>
            <div class="site-content no-padding" style="background:#f9f9f9;" id="contact">
                <div class="page-content">
                    <div class="container">
                        <div class="empty-space"></div>
                        <div class="row tm-flex">
                            <div class="col-sm-6">
                                <div class="sc-heading">
                                    <p class="first-title"><?php echo $t1; ?></p>
                                    <h3 class="second-title"><?php echo $t2; ?></h3>

                                </div>
                                <div class="sc-contact-form">
                                    <form  id="uploadImage2"  action="ajax/contact_data.php"   method="post">
                                        <input type="text" name="your-name" required placeholder="<?php echo $t6; ?>">
                                        <input type="email" name="your-email" required placeholder="<?php echo $t3; ?>">
                                        <input type="tel" name="your-phone" required placeholder="<?php echo $t4; ?>">
                                        <textarea name="your-message" id="your-message" cols="30" rows="10" required placeholder="<?php echo $t5; ?>"></textarea>
                                        <input type="submit" class="submit" value="<?php echo $t7; ?>">
                                        <div id="targetLayer2">                 
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="sc-contact-info">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29649.368176122527!2d39.13324569424725!3d21.734894529671656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c1631f805162df%3A0x21f3d0704f7fc90a!2z2YXZhtiq2KzYuSDYo9io2K3YsQ!5e0!3m2!1sar!2seg!4v1564518765383!5m2!1sar!2seg" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>            <!-- Footer -->
            <?php require_once './Basiccomponents/gallery.php'; ?>
            <?php require_once './Additionalcomponents/Footer.php'; ?>
        </div>
        <!-- wrapper-container -->
        <div id="back-to-top">
            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
        </div>
        <!-- Scripts -->
        <?php require_once './Additionalcomponents/js.php'; ?>

        <script src="js/jq.js" type="text/javascript"></script>
        <script src="js/jquery.form.js" type="text/javascript"></script>
        <script src="Development/form.js" type="text/javascript"></script>
        <script src="Development/form2.js" type="text/javascript"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="Development/new.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $(".active ").click(function () {
                    var sec = $(this).text();
                    alert(sec);
                    $.post('app/count.php', {sec: sec}, function (data) {
                    });
                });
            });
        </script>
    </body>
    <!-- Mirrored from html.thimpress.com/hotelwp/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 16:12:43 GMT -->
</html>
<?php $Data_communication = null; ?>