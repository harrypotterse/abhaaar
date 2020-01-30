<?php
error_reporting("E_ALL & ~E_NOTIC");
session_start();
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
//Array ( [Page] => 1 [Experience] => a [Details] => b [url] => c )
$true = TRUE;
$msgerr = "";
//Array ( [Page] => المقاولات [filter] => ecommerce [Name] => a )

$Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
$filter = filter_var($_POST['filter'], FILTER_SANITIZE_STRING);
$id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);
if (empty($_POST['id'])) {
    $id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);
} else {
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
}
//=========================
$file_name = $_FILES['uploadFile']['name'];
$file_size = $_FILES['uploadFile']['size'];
$file_tmp = $_FILES['uploadFile']['tmp_name'];
$file_type = $_FILES['uploadFile']['type'];
$error = $_FILES['uploadFile']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=================================
if (!$a->empty_filed($Name)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($filter)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!file_exists($file_tmp)) {
    $msgerr .= "<div class='alert alert-danger alert-autocloseable-danger'>Choose image file to upload</div>";
    $true = FALSE;
} else if (!in_array($ext, $extensions)) {
    $msgerr .= "<div class='alert alert-danger alert-autocloseable-danger'>Upload valiid images. Only PNG and JPEG are allowed</div>";
    $true = FALSE;
} else if (($_FILES["uploadFile"]["size"] > 1000000)) {
    $msgerr .= "<div class='alert alert-danger alert-autocloseable-danger'>Image size exceeds 1MB</div>";
    $true = FALSE;
}
if ($true == TRUE):
    $extension = pathinfo($file_name, PATHINFO_EXTENSION);
    $extension = pathinfo($file_name, PATHINFO_EXTENSION);
    $target_path = '../uplod/' . time() . $_FILES['uploadFile']['name'];
    if (move_uploaded_file($file_tmp, $target_path)) {
        $target_path = time() . $_FILES['uploadFile']['name'];
    }
    $SQL = "INSERT INTO `project` (`id`, `Project`, `Image`,`Filtering`,`ids`) VALUES (NULL, ?, ?, ?, ?);";
    $array = array($Name, $target_path,$filter, $id);
    $a->sql($Data_communication, $SQL, $array);
    $msgerr .= "<div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
//    ===============================================
    $section = "مشاريع المجموعه";
    $labal = "label label-success";
    $time = time();
    $sql = "INSERT INTO `latest_additions` (`id`, `Section`, `Time`,`label`) VALUES (NULL, ?, ?,?);";
    $array = array($section, $time, $labal);
    $a->sql($Data_communication, $sql, $array);
endif;
echo $msgerr;
?>