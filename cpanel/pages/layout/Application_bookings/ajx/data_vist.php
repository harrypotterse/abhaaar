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
?>
<?php
$data1=$_POST['data1'];
$data2=$_POST['data2'];
$sql = "SELECT * FROM `visits` where  Membership_expiration_  BETWEEN ? AND ?;";
$array = array($data1,$data2);
$rows = $a->sql_feth($Data_communication, $sql, $array);
    foreach ($rows as $value) {
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
        <tr class="gradeX">
            <td><span class="label label-default"><?php echo $names; ?></td>
            <td><span class="label label-default"><?php echo $Email; ?></td>
            <td><span class="label label-primary"><?php echo $Contact_Data; ?></td>
            <td><span class="label label-success"><?php echo $Membership_No; ?></td>
            <td class="center"><span class="label label-default"><?php echo $ID_Number; ?></td>
            <td class="center"><span class="label label-primary"><?php echo $Membership_start; ?></td>
            <td class="center"><span class="label label-primary"><?php echo $Membership_expiration; ?></td>
            <td class="center"><span class="label label-danger"><?php echo $Entry_card; ?></td>
            <td class="center"><?php echo $Type_Membership; ?></td>
            <td class="center"><?php echo $Membership_status; ?></td>
            <td class="center" style="padding: 0"><img  width="150" src="<?php echo $url; ?>" class="img-responsive img-thumbnail img-rounded" alt="Cinque Terre"></td>
            <td class="center"><span class="label label-danger"><?php echo $interval->format('%R%a days'); ?></td>
            <td class="center"><span class="label label-danger"><?php echo $interval2->format('%R%a days'); ?></td>
            <td class="center"><button type="button" class="btn btn-primary showdata" data-toggle="modal" data-target="#myModal22" ids="<?php echo $id; ?>">عرض البيانات</button></td>
        </tr>
        <?php
    }
?>
