<?php
try {
    require_once '../../../FileConnection/Data_connection.php';
    require_once '../../../Classes/Achieve.php';
    require_once '../../../FileConnection/Extra_functions.php';
    $a = new Achieve();
    $visits = "SELECT * FROM `visits` where Notifications = ? ";
    $employee = "SELECT * FROM `employee` where Notifications = ? ";
    $bookings = "SELECT * FROM `bookings` where Notifications = ? ";
    $visits_ = (int) rowCount_int($Data_communication, $visits, "0");
    $employee_ = (int) rowCount_int($Data_communication, $employee, "0");
    $bookings_ = (int) rowCount_int($Data_communication, $bookings, "0");
    $as = strval($visits_ + $employee_ + $bookings_);
    if ($as == 0):
        echo 0;
    else:
        echo "You have new notifications : " . $as;
    endif;
} catch (Exception $ex) {
    $Data_communication = NULL;
} finally {
    $Data_communication = NULL;
}
?>
