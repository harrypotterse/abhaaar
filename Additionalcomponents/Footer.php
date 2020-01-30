<footer id="colophon" class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="newsletter">
                <h3><?php echo $footer->statement1; ?></h3>
                <form method="post" class="form-newsletter">
                    <input id="email" type="email" name="EMAIL" placeholder="<?php echo $footer->statement2; ?> " class="sda" required>
                    <button type="submit" id="sub"><?php echo $footer->statement3; ?></button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="widget-text">
                        <div class="footer-location">
                            <img src="images/logo3.png" alt="">
                            <p><?php echo $footer->statement4; ?></p>
                            <ul class="info">
                                <li><i class="ion-ios-location"></i> <span><?php echo $footer->statement5; ?></span></li>
                                <li><i class="ion-ios-telephone"></i><a href="tel:6563030 012 966+"><?php echo $footer->statement6; ?></a></li>
                                <li><i class="ion-ios-telephone"></i><a href="tel:6563030 012 966+"><?php echo $footer->statement7; ?></a></li>
                                <li><i class="ion-email"></i><a href="mailto:info@obhurresort.com"><?php echo $footer->statement8; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="widget-menu">
                        <h3 class="widget-title"><?php echo $footer->statement9; ?></h3>
                        <ul class="menu">
                            <?php
                            $c = $class->coulam_name($Data_communication, "services");
                            //$query = "SELECT * FROM `services` limit 5";
                            $sql_lng = set_lang("SELECT * FROM `services` where Language = 'English'  limit 5 ", "SELECT * FROM `services` where Language = 'Arabic' limit 5");

                            $array = array();
                            $rows = $class->sql_feth($Data_communication, $sql_lng, $array);
                            foreach ($rows as $value):
                                $statement3 = $value[$c[3]];
                                ?>
                                <li><a href="#"><?php echo $statement3; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="widget-menu">
                        <h3 class="widget-title"><?php echo $footer->statement10; ?></h3>
                        <ul class="menu">
                            <li><a href="#"> <?php echo $footer->statement18; ?></a></li>
                            <li><a href="#"><?php echo $footer->statement19; ?></a></li>
                            <li><a href="#"><?php echo $footer->statement20; ?></a></li>
                            <li><a href="#"><?php echo $footer->statement21; ?></a></li>
                            <li><a href="#"><?php echo $footer->statement22; ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="widget-menu">
                        <h3 class="widget-title"><?php echo $footer->statement11; ?></h3>
                        <ul class="list-social">
                            <li><a class="facebook" href="<?php echo $footer->statement13; ?>">Facebook</a></li>
                            <li><a class="twitter" href="<?php echo $footer->statement14; ?>">Twitter</a></li>
                            <li><a class="instagram" href="<?php echo $footer->statement15; ?>">Instagram</a></li>
                            <li><a class="youtube" href="<?php echo $footer->statement16; ?>">Youtube</a></li>
                            <li><a class="google" href="<?php echo $footer->statement17; ?>">Google +</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="copyright-content col-sm-12">
                    <p class="copyright-text"><?php echo $footer->statement12; ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>