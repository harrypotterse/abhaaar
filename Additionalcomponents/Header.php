<header id="masthead" class="header-overlay affix-top sticky-header header_v2">
    <div class="container">
        <div class="row">
            <div class="header-menu col-sm-12 tm-table">
                <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
                    <div class="icon-wrap">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </div>
                <div class="width-logo sm-logo table-cell">
                    <a href="index.php" class="no-sticky-logo" title="Hotel HTML Template">
                        <img class="logo" src="images/logo3.png" alt="">
                        <img class="mobile-logo" src="images/logo3.png" alt="">
                    </a>
                    <a href="index.php" class="sticky-logo">
                        <img src="images/logo3.png" alt="">
                    </a>
                </div>
                <div class="width-navigation navigation table-cell">
                    <ul class="nav main-menu">
                        <li class="menu-item ">
                            <a href="#main-content" nametag="الرئيسية"><?php echo $nav->statement1; ?></a>
                        </li>
                        <li class="menu-item ">
                            <a href="#about" nametag="من نحن"><?php echo $nav->statement2; ?></a>
                        </li>
                        <li class="menu-item ">
                            <a href="#features"  nametag="خدماتنا"><?php echo $nav->statement3; ?></a>
                        </li>
                        <li class="menu-item ">
                            <a href="#offers" nametag="العروض والاسعار"> <?php echo $nav->statement4; ?></a>
                        </li>
                        <li class="menu-item ">
                            <a href="#features"  nametag="الحجز والاستعلام"><?php echo $nav->statement8; ?></a>
                        </li>
                        <li class="menu-item ">
                            <a href="#features"  nametag="معرض الصور"><?php echo $nav->statement9; ?></a>
                        </li>       
                        <li class="menu-item " nametag=" التواصل">
                            <a href="#contact" ><?php echo $nav->statement6; ?></a>
                        </li>
                    </ul>
                    <div class="header-right">
                        <div class="language">
                            <div class="dropdown">
                                <a href="?ar" class="dropdown-toggle select" data-hover="dropdown" data-toggle="dropdown" aria-expanded="false">
                                    <a href="?ar"> <i class="flag-it"></i>العربية<span class="fa fa-caret-down"></span></a> 
                                </a>
                                <ul class="dropdown-language">
                                    <li><a href="?eng"><i class="flag-it"></i>الانجليزيه</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="phone">
                            <a href="tel:0126563030" class="value"><i class="fa fa-phone"></i> +0126563030</a>
                        </div>
                        <div class="book-button">
                            <a href="sign.php" target="_blank" class="btn-book"><?php echo $nav->statement7; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Mobile menu -->
<nav class="visible-xs mobile-menu-container mobile-effect" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <div class="inner-off-canvas">
        <div class="menu-mobile-effect navbar-toggle">غلق <i class="fa fa-times"></i></div>
        <ul class="nav main-menu">
            <li class="menu-item ">
                <a href="#main-content" nametag="الرئيسية"><?php echo $nav->statement1; ?></a>
            </li>
            <li class="menu-item ">
                <a href="#about" nametag="من نحن"><?php echo $nav->statement2; ?></a>
            </li>
            <li class="menu-item ">
                <a href="#services"  nametag="خدماتنا"><?php echo $nav->statement3; ?></a>
            </li>
            <li class="menu-item ">
                <a href="#offers" nametag="العروض والاسعار"> <?php echo $nav->statement4; ?></a>
            </li>
            <li class="menu-item ">
                <a href="#features"  nametag="الحجز والاستعلام"><?php echo $nav->statement8; ?></a>
            </li>
            <li class="menu-item ">
                <a href="#pictures"  nametag="معرض الصور"><?php echo $nav->statement9; ?></a>
            </li>       
            <li class="menu-item " nametag=" التواصل">
                <a href="#contact" ><?php echo $nav->statement6; ?></a>
            </li>
            <div class="phone">
                <a href="tel:0126563030" class="value"><i class="fa fa-phone"></i> +0126563030</a>
            </div>
        </ul>
    </div>
</nav>
<!-- nav.mobile-menu-container -->