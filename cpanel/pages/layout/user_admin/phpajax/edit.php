<?php

require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
//Array ( [Page] => 1 [Experience] => a [Details] => b [url] => c )
$true = TRUE;
$msgerr = "";
$id = $_POST['id'];
$user = $_POST['user'];
$password = $_POST['password'];
$mail = $_POST['mail'];
//=========================
//=================================

if (!$a->empty_filed($user)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك اسم المستخدم فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($password)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك كلمة المرور فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($mail)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك البريد الالكتروني فارغا</div>";
    $true = FALSE;
endif;

if ($true == TRUE):
    $SQL = "UPDATE `user_admin` SET `user` = ?, `password` = ?, `mail` = ? WHERE `user_admin`.`id` = ? ;";
    $array = array( $user, $password,$mail,$id);
    $a->sql($Data_communication, $SQL, $array);
    $msgerr .= "<div class='alert alert-success'>تم تعديل  بنجاح</div>";

endif;
echo $msgerr;
?>