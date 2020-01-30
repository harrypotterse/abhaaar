<?php session_start() ?>
<?php require_once './FileConnection/Data_connection.php'; ?>
<?php require_once './FileConnection/Extra_functions.php';;?>
<?php require_once './app/multilingual.php'; ?>
<?php require_once './Classes/Achieve.php'; ?>
<?php $class = new Achieve(); ?>
<?php require_once './Classes/Component.php'; ?>
<?php $Component = new Component() ?>

<?php
//=========================================================


if ($_SESSION['lang'] == "ar") {
    $sql_nav = "SELECT * FROM `page_components` where id=9";
    $sql_ = "SELECT * FROM `page_components` where id=8";
    $singel_ = "SELECT * FROM `page_components` where id=17";
    $sql_hed = "SELECT * FROM `page_components` where id=15";
} elseif ($_SESSION['lang'] == "eng") {
    $sql_nav = "SELECT * FROM `page_components` where id=14";
    $sql_ = "SELECT * FROM `page_components` where id=13";
    $singel_ = "SELECT * FROM `page_components` where id=18";
    $sql_hed = "SELECT * FROM `page_components` where id=16";
} else {
    $sql_nav = "SELECT * FROM `page_components` where id=9";
    $sql_ = "SELECT * FROM `page_components` where id=8";
    $singel_ = "SELECT * FROM `page_components` where id=17";
    $sql_hed = "SELECT * FROM `page_components` where id=15";
}
$nav = $Component->fetchObject_SQL($Data_communication, $sql_nav);
$footer = $Component->fetchObject_SQL($Data_communication, $sql_);
$singel = $Component->fetchObject_SQL($Data_communication, $singel_);
$hed = $Component->fetchObject_SQL($Data_communication, $sql_hed);
//=============================================================
$pag = "best_offers";
$Page = $_GET['Page'];
$msg = true;
$URL = $_SERVER['REQUEST_URI'];
$pinterest = "http://pinterest.com/pin/create/button/?url=$URL";
$URL_PAG_facebook = "http://www.facebook.com/sharer.php?u=$URL";
$Google = "https://plus.google.com/share?url=$URL";
$LinkedIn = "http://www.linkedin.com/shareArticle/?url=$URL";
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
if (!password_verify($pag, $Page)) {
    $msg = FALSE;
    header('Location: index.php');
    exit();
}
if (empty($id)) {
    $msg = FALSE;
    header('Location: index.php');
    exit();
} elseif (empty($Page)) {
    $msg = FALSE;
    header('Location: index.php');
    exit();
}
if (is_int($id)):
    $msg = FALSE;
    header('Location: index.php');
    exit();
endif;
if ($msg == TRUE):
    try {
        $c = $class->coulam_name($Data_communication, "services");
        $query = "select * from best_offers  where id =?  ";
        $array = array($id);
        $rows = $class->sql_feth($Data_communication, $query, $array);
        $vis = 0;
        foreach ($rows as $value):
            $vis++;
            $id = $value['id'];
            $Coin = $value['Coin'];
            $price = $value['price'];
            $Title = $value['Title'];
            $Explanation = $value['Explanation'];
            $Image = $value['Image'];
            $Visits = $value['Visits'];
            $Visits_plas = $Visits + $vis;
            $Twitter = "http://twitter.com/share?text=$Title&url=$URL&hashtags='services'";
            //====================================
            $array1 = array($Visits_plas, $id);
            $query = "UPDATE `best_offers` SET `Visits` = ? WHERE `best_offers`.`id` = ?;";
            $class->sql($Data_communication, $query, $array1);
        endforeach;
    } catch (PDOException $ex) {
        echo $ex;
    }
endif;
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
                            <h1 class="heading_primary"> <?php echo $Title; ?></h1>
                            <ul class="breadcrumbs">
                                <li class="item"><a href="index.php"><?php echo $singel->statement1; ?></a></li>
                                <li class="item"><span class="separator"></span></li>
                                <li class="item"><a href="index.php"><?php echo $Title; ?></a></li>
                                <li class="item"><span class="separator"></span></li>
                        
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="site-content container">
                    <div class="row">
                        <main class="site-main col-sm-12 col-md-12 flex-first">
                            <div class="blog-single-content">
                                <article class="post clearfix">
                                    <div class="post-content">
                                        <div class="post-media">
                                            <img src="cpanel/pages/layout/best_offers/uplod/<?php echo $Image; ?>" alt="">
                                        </div>
                                        <div class="post-summary">
                                            <h2 class="post-title"><?php echo $Title; ?></h2>
                                            <ul class="post-meta">
                                                <li><span class="separator"></span></li>
                                                <li><?php echo $Title; ?></li>
                                                <li><span class="separator"></span></li>
                                                <li><?php echo $singel->statement3; ?> <a href="#"><?php echo $Visits; ?></a></li>
                                            </ul>
                                            <div class="post-description">
                                                <p> 
                                                    <?php echo $Explanation; ?>
                                                </p>  </div>
                                            <div class="meta_post">
                                                <div class="social-share">
                                                    <ul>
                                                        <li><a class="link facebook" title="Facebook" href='<?php echo $URL_PAG_facebook; ?>' rel="nofollow" onclick="window.open(this.href, this.title, 'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                                        <li><a class="link twitter" title="Twitter" href="<?php echo $Twitter; ?>"rel="nofollow" onclick="window.open(this.href, this.title, 'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                        <li><a class="link pinterest" title="Pinterest" href="<?php echo $pinterest; ?>" onclick="window.open(this.href, 'mywin', 'left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="ion-social-pinterest"></i></a></li>
                                                        <li><a class="link google" title="Google" href="<?php echo $Google; ?>" rel="nofollow" onclick="window.open(this.href, this.title, 'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="ion-social-googleplus"></i></a>
                                                        <li><a class="link linkedin" title="LinkedIn" href="<?php echo $LinkedIn; ?>" rel="nofollow" onclick="window.open(this.href, this.title, 'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29649.368176122527!2d39.13324569424725!3d21.734894529671656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c1631f805162df%3A0x21f3d0704f7fc90a!2z2YXZhtiq2KzYuSDYo9io2K3YsQ!5e0!3m2!1sar!2seg!4v1564518765383!5m2!1sar!2seg" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- Footer -->
            <?php require_once 'Additionalcomponents/Footer.php'; ?>
        </div><!-- wrapper-container -->
        <div id="back-to-top">
            <i class="ion-ios-arrow-up" aria-hidden="true"></i>
        </div>
        <!-- Scripts -->
        <script src="js/libs/jquery.min.js"></script><!-- jQuery -->
        <script src="js/libs/stellar.min.js"></script><!-- parallax -->
        <script src="js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
        <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="js/libs/gallery.min.js"></script><!-- gallery -->
        <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script src="js/theme-customs.js"></script><!-- Theme Custom -->
           <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="Development/new.js" type="text/javascript"></script>
    </body>
    <!-- Mirrored from html.thimpress.com/hotelwp/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 16:15:29 GMT -->
</html>
<?php $Data_communication=null;  ?>