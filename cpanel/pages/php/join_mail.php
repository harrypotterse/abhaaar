<?php
try {
    require_once '../../../FileConnection/Data_connection.php';
    require_once '../../../Classes/Achieve.php';
    require_once '../../../FileConnection/Extra_functions.php';
    $a = new Achieve();
    $visits = "SELECT * FROM `join_mail` where Notifications = ? ";
   (int) $visits_ = (int) rowCount_int($Data_communication, $visits, "0");
       if ($visits_ == 0):
        echo 0;
    else:
        echo $visits_;
    endif;
} catch (Exception $ex) {
    $Data_communication = NULL;
} finally {
    $Data_communication = NULL;
}
?>
