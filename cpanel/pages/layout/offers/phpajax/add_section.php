<?php
error_reporting("E_ALL & ~E_NOTIC");
     function generateRandomString($length = 2) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
$filter=generateRandomString();
//Array ( [Page] => 1 [Experience] => a [Details] => b [url] => c )
$Name= filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
$true = TRUE;
$msgerr = "";
//=================================
if (!$a->empty_filed($Name)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقول فارغ</div>";
    $true = FALSE;
endif;
if ($true == TRUE):
    $SQL = "INSERT INTO `sections` (`id`, `Section`,`Filter`) VALUES (NULL, ?,?);";
    $array = array($Name,$filter);
    $a->sql($Data_communication, $SQL, $array);
    $msgerr .= "<div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
//    ===============================================
    $section = "قسم جديد  مشاريع المجموعة";
    $labal="label label-warning";
    $time = time();
    $sql = "INSERT INTO `latest_additions` (`id`, `Section`, `Time`,`label`) VALUES (NULL, ?, ?,?);";
    $array = array($section, $time,$labal);
    $a->sql($Data_communication, $sql, $array);
endif;
echo $msgerr;
?>