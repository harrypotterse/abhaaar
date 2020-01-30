
<?php
session_start();
if (!isset($_SESSION['user'])):
    header("location:../../../../../examples/login.php");
    exit();
endif;
?>
<?php
require_once '../../../../../FileConnection/Data_connection.php';
require_once '../../../../../Classes/Achieve.php';
$a = new Achieve();
$text = filter_var($_POST['text'], FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM visits  WHERE  id = ? ";
try {
    $stmt = $Data_communication->prepare($sql);
    $stmt->execute(array($text));
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
if (count($results) > 0) {
    foreach ($results as $value) {


        $id = $value['id'];
        $names = $value['Name'];
        $Email = $value['Email'];
        $Contact_Data = $value['Contact_Data'];
        $Membership_No = $value['Membership_No'];
        $ID_Number = $value['ID_Number'];
        $Membership_start = $value['Membership_start'];
        $Membership_expiration = $value['Membership_expiration'];
        $Entry_card = $value['Entry_card'];
        $Type_Membership = $value['Type_Membership'];
        if (strcmp($Type_Membership, 'ذهبية') !== 0 && strcmp($Type_Membership, 'Gold') !== 0) {
            $Type_Membership = '<span class="label label-danger silv">' . $Type_Membership;
        } else {
            $Type_Membership = '<span class="label label-success gold">' . $Type_Membership;
        }
        $Membership_status = $value['Membership_status'];
        if (strcmp($Membership_status, 'سارية') !== 0 && strcmp($Membership_status, 'Mast') !== 0) {
            $Membership_status = '<span class="label label-danger">' . $Membership_status;
        } else {
            $Membership_status = '<span class="label label-success ">' . $Membership_status;
        }
        $picture = $value['picture'];
        $Suggestion = $value['Suggestion'];
        $di = $value['Membership_start_'];
        $do = $value['Membership_expiration_'];
        //===================================================================
        $earlier = new DateTime();
        $later = new DateTime($do);
        $later2 = new DateTime($di);
        $diff = $later->diff($earlier)->format("%a");
        //=============
        $interval = $earlier->diff($later);
        $interval2 = $earlier->diff($later2);
        $url = "./../../../../ajax/UP/$picture"
        ?>
        <table class="table table-hover">
            <tbody>
                <tr >
                    <td colspan="2"><img   src="<?php echo $url; ?>" class="img-responsive img-thumbnail " alt="Cinque Terre"></td>

                </tr>
                <tr>
                    <td>الاسم</td>
                    <td><?php echo $names; ?></td>
                </tr>
                <tr>
                    <td>الايميل</td>
                    <td><?php echo $Email; ?></td>
                </tr>
                <tr>
                    <td>بيانات الاتصال</td>
                    <td><?php echo $Contact_Data; ?></td>
                </tr>
                <tr>
                    <td>رقم العضوية</td>
                    <td><?php echo $Membership_No; ?></td>
                </tr>
                <tr>
                    <td>رقم الهوية</td>
                    <td><?php echo $ID_Number; ?></td>
                </tr>
                <tr>
                    <td>تاريخ بدء العضوية</td>
                    <td><?php echo $Membership_start; ?></td>
                </tr>
                <tr>
                    <td>تاريخ انتهاء العضوية</td>
                    <td><?php echo $Membership_expiration; ?></td>
                </tr>
                <tr>
                    <td>رقم كارت الدخول</td>
                    <td><?php echo $Entry_card; ?></td>
                </tr>
                <tr>
                    <td>نوع العضوية</td>
                    <td><?php echo $Type_Membership; ?></td>
                </tr>
                <tr>
                    <td>حالة العضوية</td>
                    <td><?php echo $Membership_status; ?></td>
                </tr>
                     <tr>
                    <td>باقي علي انتهاء العضوية</td>
                    <td><span class="label label-danger"><?php echo $interval->format('%R%a days'); ?></td>
                </tr>
                    <tr>
                    <td>باقي علي بداية العضوية</td>
                    <td><span class="label label-success"><?php echo $interval2->format('%R%a days'); ?></td>
                </tr>
                <tr>
                    <td colspan="2">الاقتراح</td>

                </tr>

                <tr>
                    <td colspan="2"><?php echo $Suggestion; ?></td>

                </tr>
            </tbody>
        </table>
        <?php
    }
}
?>














