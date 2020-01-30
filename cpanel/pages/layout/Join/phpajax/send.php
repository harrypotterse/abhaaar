<?php


try {
    print_r($_POST);
    
} catch (Exception $exc) {
    echo $exc->getMessage();
}


?>