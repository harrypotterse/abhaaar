<?php
error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
$true = TRUE;
$msgerr = "";
$Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);
$Author = filter_var($_POST['Author'], FILTER_SANITIZE_STRING);
$Section = filter_var($_POST['Section'], FILTER_SANITIZE_STRING);
$Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$Type = filter_var($_POST['Type'], FILTER_SANITIZE_STRING);
if ($Type == "أساسية"):
    $Type = "Basic";
else:
    $Type = "ordinary";
endif;
$Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$Explanation = filter_var($_POST['Explanation'], FILTER_SANITIZE_STRING);
$Tags = filter_var($_POST['Tags'], FILTER_SANITIZE_STRING);
$date = date("d-M-Y");
//=========================
$file_name = $_FILES['uploadFile']['name'];
$file_size = $_FILES['uploadFile']['size'];
$file_tmp = $_FILES['uploadFile']['tmp_name'];
$file_type = $_FILES['uploadFile']['type'];
$error = $_FILES['uploadFile']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=================================
if (!$a->empty_filed($Language)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Author)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Title)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Explanation)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Tags)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Section)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Type)):
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
    try {
          $extension = pathinfo($file_name, PATHINFO_EXTENSION);
    $extension = pathinfo($file_name, PATHINFO_EXTENSION);
    $target_path = '../uplod/' . time() . $_FILES['uploadFile']['name'];
    if (move_uploaded_file($file_tmp, $target_path)) {
        $target_path = time() . $_FILES['uploadFile']['name'];
    }
    $SQL = "INSERT INTO `blog` (`id`, `Language`, `Author`, `Tags`, `Section`, `Date`, `Title`, `Explanation`, `Image`, `Type`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $array = array($Language, $Author, $Tags, $Section, $date, $Title, $Explanation, $target_path, $Type);
    $a->sql($Data_communication, $SQL, $array);

    $msgerr .= "<div id='space'><div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
//    ===============================================
    $section = "المدونة";
    $labal = "label label-success";
    $time = time();
    $sql = "INSERT INTO `latest_additions` (`id`, `Section`, `Time`,`label`) VALUES (NULL, ?, ?,?);";
    $array = array($section, $time, $labal);
    $a->sql($Data_communication, $sql, $array);  
    } catch (PDOException $ex) {
        echo $ex;
        
    }
endif;
echo $msgerr;
?>