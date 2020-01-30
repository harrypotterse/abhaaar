<?php

require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
//Array ( [Page] => 1 [Experience] => a [Details] => b [url] => c )
$true = TRUE;
$msgerr = "";
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
    $SQL = "INSERT INTO `user_admin` (`id`, `user`, `password`, `mail`) VALUES (NULL, ?,  ?, ?);";
    $array = array( $user, $password,$mail);
     
    $a->sql($Data_communication, $SQL, $array);
    $msgerr .= "<div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
//    ===============================================
    $section = "اضافة مستخدم";
    $labal="label label-primary";
    $time = time();
    $sql = "INSERT INTO `latest_additions` (`id`, `Section`, `Time`,`label`) VALUES (NULL, ?, ?,?);";
    $array = array($section, $time,$labal);
    $a->sql($Data_communication, $sql, $array);
endif;
echo $msgerr;
?>