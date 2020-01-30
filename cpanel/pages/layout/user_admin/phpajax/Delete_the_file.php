<?php
require_once '../../../../../FileConnection/Data_connection.php';
require_once '../../../../../Classes/Achieve.php';
$id = $_POST['id'];
$Image = $_POST['Image'];
if (isset($id) && !empty($id) && is_numeric($id)) {
    try {
        $a = new Achieve();
        $id = $a->Filter_int($id);
        if ($query = $Data_communication->prepare("DELETE FROM questions  WHERE  id =?"))
            ;
        $query->bindValue(1, $id, PDO::PARAM_INT);
        if ($query->execute()) {
            
           
        }
    } catch (PDOException $ex) {
        
    }
}

?>