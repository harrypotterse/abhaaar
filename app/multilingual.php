<?php
if ($_SERVER['QUERY_STRING'] == "ar") {
     $_SESSION['lang'] = "ar";
    // session_destroy();
} if ($_SERVER['QUERY_STRING'] == "eng") {
     $_SESSION['lang'] = "eng";
    // session_destroy();
} elseif (!isset($_SESSION['lang'])) {
     $_SESSION['lang'] = "ar";
} 

?>