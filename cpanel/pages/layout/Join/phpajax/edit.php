<?php

error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
print_r($_POST);
//Array ( [Page] => 1 [Experience] => a [Details] => b [url] => c )
$true = TRUE;
//Array ( [id] => 8 [file] => 1564682947man (1).png [Language] => Arabic [Title] => [Service] => a [Explanation] => a [uploadFile] => )

$msgerr = "";
$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);
$Service = filter_var($_POST['Service'], FILTER_SANITIZE_STRING);
$Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
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
if (!$a->empty_filed($Language)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Service)):
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
if ($true == TRUE):
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
    $SQL = "UPDATE `services` SET `Language` = ?, `Title` = ?, `Service` = ?, `Explanation` = ?, `Image` = ? WHERE `services`.`id` = ?;";
    $array = array($Language, $Title, $Service, $Explanation, $target_path, $id);
    $a->sql($Data_communication, $SQL, $array);
    echo("<meta http-equiv='refresh' content=?>");
    $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";

endif;
echo $msgerr;
?>