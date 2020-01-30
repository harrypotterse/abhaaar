<?php
error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../../FileConnection/Data_connection.php';
require_once '../../../../../Classes/Achieve.php';
$id = $_POST['id'];
if (isset($id) && !empty($id) && is_numeric($id)) {
    try {
        $a = new Achieve();
        $id = $a->Filter_int($id);
        if ($query = $Data_communication->prepare("DELETE FROM sections  WHERE  id =?"))
            ;
        $query->bindValue(1, $id, PDO::PARAM_INT);
        if ($query->execute()) {
         
         
        }
    } catch (PDOException $ex) {       
    }
}

?>