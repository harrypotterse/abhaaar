<?php 
try {
require_once '../../../FileConnection/Data_connection.php';
require_once '../../../Classes/Achieve.php';
require_once '../../../FileConnection/Extra_functions.php';
$a = new Achieve();
$bookings="SELECT * FROM `bookings` where Notifications = ? ";
(int) $bookings_=(int)rowCount_int($Data_communication, $bookings, "0");
     if ($bookings_ == 0):
        echo 0;
    else:
        echo $bookings_;
    endif; 
} catch (Exception $ex) {
     $Data_communication=NULL;   
} finally {
  $Data_communication=NULL;  
}
?>
