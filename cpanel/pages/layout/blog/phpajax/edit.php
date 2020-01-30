<?php
error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
$true = TRUE;
$msgerr = "";
$News = filter_var($_POST['News'], FILTER_SANITIZE_STRING);
$Shortcut = filter_var($_POST['Shortcut'], FILTER_SANITIZE_STRING);
$Explanation = filter_var($_POST['Explanation'], FILTER_SANITIZE_STRING);
//=========================
$file_name = $_FILES['uploadFile']['name'];
$file_size = $_FILES['uploadFile']['size'];
$file_tmp = $_FILES['uploadFile']['tmp_name'];
$file_type = $_FILES['uploadFile']['type'];
$error = $_FILES['uploadFile']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=================================
if (!$a->empty_filed($News)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Shortcut)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Explanation)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Explanation)):
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
        if (!file_exists($file_tmp)) {
            $target_path = filter_var($_POST['file'], FILTER_SANITIZE_STRING);
        } else {
            //====================================================
            $DelFilePath = filter_var($_POST['file'], FILTER_SANITIZE_STRING);
            $Images = "../uplod/" . $DelFilePath;
            if (file_exists($Images)) {
                unlink($Images);
            } else {
                echo "no";
            }
            //=====================================================
            $extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $target_path = '../uplod/' . time() . $_FILES['uploadFile']['name'];
            if (move_uploaded_file($file_tmp, $target_path)) {
                $target_path = time() . $_FILES['uploadFile']['name'];
            }
        }
        $SQL = "UPDATE `blog` SET `Language` = ?, `Author` = ?, `Tags` = ?, `Section` = ?, `Date` = ?, `Title` = ?, `Explanation` = ?, `Image` = ?, `Type` = ? WHERE `blog`.`id` = ?;";
        $array = array($Language, $Author, $Tags, $Section, $date, $Title, $Explanation, $target_path, $Type, $id);
        $a->sql($Data_communication, $SQL, $array);
        echo("<meta http-equiv='refresh' content=?>");
        $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";
    } catch (PDOException $ex) {
        echo  $ex;
        
    }
endif;
echo $msgerr;
?>