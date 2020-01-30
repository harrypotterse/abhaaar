<?php
error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
$true = TRUE;
$msgerr = "";
//Array ( [Name] => a [Details] => a [Image] => a ) 
//Array ( [Name] => a [Function] => a [YouTube] => a [Google] => a [Twitter] => a [Facebook] => a ) 
$Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
$Details = filter_var($_POST['Details'], FILTER_SANITIZE_STRING);
$Image = filter_var($_POST['Image'], FILTER_SANITIZE_STRING);
//=======================
$file_name = $_FILES['uploadFile']['name'];
$file_size = $_FILES['uploadFile']['size'];
$file_tmp = $_FILES['uploadFile']['tmp_name'];
$file_type = $_FILES['uploadFile']['type'];
$error = $_FILES['uploadFile']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=================================
if (!$a->empty_filed($Name)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Details)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Image)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقول فارغة</div>";
    $true = FALSE;
elseif (!$a->Validate_URL($Image)):
    $msgerr .= "<div class='alert alert-danger'>الرابط غير صحيح</div>";
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
    $SQL = "INSERT INTO `ٍservice` (`id`, `Icons`, `Service`, `Details`, `Image`) VALUES (NULL, ?, ?, ?, ?);";
    $array = array($target_path, $Name, $Details, $Image);
    $a->sql($Data_communication, $SQL, $array);
    $msgerr .= "<div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
//    ===============================================
    $section = "الخدمات";
    $labal = "label label-warning";
    $time = time();
    $sql = "INSERT INTO `latest_additions` (`id`, `Section`, `Time`,`label`) VALUES (NULL, ?, ?,?);";
    $array = array($section, $time, $labal);
    $a->sql($Data_communication, $sql, $array);
endif;
echo $msgerr;
?>