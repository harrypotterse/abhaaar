<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $hed->statement1; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/icons/favicon.png">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="css/libs/revolution/settings.css">
    <link rel="stylesheet" href="css/style.css"><!-- Style -->
    <?php
    if ($_SESSION['lang'] == "ar") {
        $_SESSION['lang'] = "ar";
        echo '<link rel="stylesheet" href="css/rtl.css">';
        // session_destroy();
    } if ($_SESSION['lang'] == "eng") {
        echo '<link rel="stylesheet" href="css/eng.css">';

        // session_destroy();
    } elseif (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = "ar";
        echo '<link rel="stylesheet" href="css/rtl.css">';
    } elseif ($_SERVER['QUERY_STRING'] == "") {
        $_SESSION['lang'] = "ar";
        echo '<link rel="stylesheet" href="css/rtl.css">';
    }
    ?>


    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <style>
        .alert-success {
            color: #374349;
            background-color: #a8e1ff;
            border-color: #f9fdff;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }
        .alert-danger {
            color: #ffffff;
            background-color: #6e131b;
            border-color: #f5c6cb;
        }
        .slide-content {
    display: none;
}
.navigation ul.main-menu {
    padding-left: 44px;
    float: right;
    padding-right: 13px;
    width: 64%;
}

    </style>
</head>