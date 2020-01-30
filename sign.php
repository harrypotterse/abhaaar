<?php session_start() ?>
<?php require_once './FileConnection/Data_connection.php'; ?>
<?php require_once './FileConnection/Extra_functions.php';
; ?>
<?php require_once './Classes/Achieve.php'; ?>
<?php $class = new Achieve(); ?>
<?php require_once './app/multilingual.php'; ?>
<?php // require_once './app/index.php';        ?>
<?php require_once './Classes/Component.php'; ?>
<?php $Component = new Component() ?>
<?php
  $_SESSION['lang'];
if ($_SESSION['lang'] == "ar") {
    $sign = "SELECT * FROM `page_components` where id=3";
    $sql_hed = "SELECT * FROM `page_components` where id=15";
} elseif ($_SESSION['lang'] == "eng") {
    $sign = "SELECT * FROM `page_components` where id=4";
    $sql_hed = "SELECT * FROM `page_components` where id=16";
} else {
    $sign = "SELECT * FROM `page_components` where id=3";
    $sql_hed = "SELECT * FROM `page_components` where id=15";
}
$sign = $Component->fetchObject_SQL($Data_communication, $sign);
$hed= $Component->fetchObject_SQL($Data_communication, $sql_hed); 

?>
<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from html.thimpress.com/hotelwp/were-launching-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 16:15:40 GMT -->
    <?php
    require_once './Additionalcomponents/head.php';
    ?>
    <body class="page coming-soon">
        <div class="comingsoon-wrapper">
            <div class="background ">
                <ul class="slides owl-carousel owl-theme">
                    <?php
                    $c = $class->coulam_name($Data_communication, "recording_slides");
                    $query = "SELECT * FROM `recording_slides`   ";
                    $array = array();
                    $rows = $class->sql_feth($Data_communication, $query, $array);
                    foreach ($rows as $value):
                        $id = $value[$c[0]];
                        $Slices = $value[$c[1]];
                        ?>
                        <li><img src="cpanel/pages/layout/recording_slides/uplod/<?php echo $Slices; ?>" alt=""></li>
<?php endforeach; ?>
                </ul>
            </div>
            <div class="coom-inner">
                <a href="index.html" class="logo"><img src="images/logo1.png" alt=""></a>
                <h1 class="title"><?php echo $sign->statement1; ?></h1>
                <div class="content-text">
                    <p><?php echo $sign->statement2; ?>
                    </p>
                    <div class=" text-xenter">
                        <a href="sign-visitor.php" class="btn-book"><?php echo $sign->statement4; ?></a>
                        <a href="sign-employe.php" class="btn-book"><?php echo $sign->statement3; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/libs/jquery.min.js"></script><!-- jquery -->
        <script src="js/libs/jquery.mb-comingsoon.min.js"></script><!-- coming soon -->
        <script src="js/libs/owl.carousel.min.js"></script><!-- slider -->
        <script>
            $(".thim-countdown .count-down").mbComingsoon({
                expiryDate: new Date($(".thim-countdown").data('date')),
                speed: 100
            });
            $('.comingsoon-wrapper .background .slides').owlCarousel({
                loop: true,
                items: 1,
                nav: false,
                dots: false,
                animateOut: 'fadeOut',
                autoplay: true,
                autoplayTimeout: 3000,
            });
        </script>
    </body>
    <!-- Mirrored from html.thimpress.com/hotelwp/were-launching-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 16:15:40 GMT -->
</html>
<?php $Data_communication=null ?>