<?php

try {
    require_once '../../../FileConnection/Data_connection.php';
    require_once '../../../Classes/Achieve.php';
    require_once '../../../FileConnection/Extra_functions.php';
    $a = new Achieve();
    $employee = "SELECT * FROM `employee` where Notifications = ? ";
    (int) $employee_ = (int) rowCount_int($Data_communication, $employee, "0");
    if ($employee_ == 0):
        echo 0;
    else:
        echo $employee_;
    endif;
} catch (Exception $ex) {
    $Data_communication = NULL;
} finally {
    $Data_communication = NULL;
}
?>
