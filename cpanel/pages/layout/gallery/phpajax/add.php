
<?php
error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
$true = TRUE;
$msgerr = "";
$Service = filter_var($_POST['idg'], FILTER_SANITIZE_NUMBER_INT);
//=========================
$file_name = $_FILES['uploadFile']['name'];
$file_size = $_FILES['uploadFile']['size'];
$file_tmp = $_FILES['uploadFile']['tmp_name'];
$file_type = $_FILES['uploadFile']['type'];
$error = $_FILES['uploadFile']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=================================
if (!$a->empty_filed($Service)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!file_exists($file_tmp)) {
    $msgerr .= "<div class='alert alert-danger alert-autocloseable-danger'>Choose image file to upload</div>";
    $true = FALSE;
} else if (!in_array($ext, $extensions)) {
    $msgerr .= "<div class='alert alert-danger alert-autocloseable-danger'>Upload valiid images. Only PNG and JPEG are allowed</div>";
    $true = FALSE;
}
if ($true == TRUE):
    $extension = pathinfo($file_name, PATHINFO_EXTENSION);
    $extension = pathinfo($file_name, PATHINFO_EXTENSION);
    $target_path = '../uplod/' . time() . $_FILES['uploadFile']['name'];
    if (move_uploaded_file($file_tmp, $target_path)) {
        $target_path = time() . $_FILES['uploadFile']['name'];
    }
    $sql="INSERT INTO `gallery` (`id`, `idg`, `Gallery`) VALUES (NULL, ?, ?);";
    $array = array($Service,$target_path);
    $a->sql($Data_communication, $sql, $array);
    $msgerr .= "<div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
//    ===============================================
    $section = "اضافة صورة لمعرض ";
    $labal = "label label-success";
    $time = time();
    $sql = "INSERT INTO `latest_additions` (`id`, `Section`, `Time`,`label`) VALUES (NULL, ?, ?,?);";
    $array = array($section, $time, $labal);
    $a->sql($Data_communication, $sql, $array);
endif;
echo $msgerr;
?>