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
$limit = (intval($_GET['limit']) != 0 ) ? $_GET['limit'] : 10;
$offset = (intval($_GET['offset']) != 0 ) ? $_GET['offset'] : 0;
$sql = "SELECT * FROM bookings  WHERE 1 ORDER BY id ASC LIMIT $limit OFFSET $offset";
try {
    $stmt = $Data_communication->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
if (count($results) > 0) {
    foreach ($results as $value) {
    $id = $value['id'];
    $names = $value['names'];
    $Number_nights = $value['Number_nights'];
    $Number_individuals = $value['Number_individuals'];
    $email = $value['email'];
    $phone = $value['phone'];
    $addres = $value['addres'];
    $check_in_date = $value['check_in_date'];
    $check_out_date = $value['check_out_date'];
    $di = $value['di'];
    $do = $value['do'];
    $tody = date('yy - m- d');
    $start_date = strtotime($tody);
    $end_date = strtotime($do);
    //===================================================================
    $earlier = new DateTime();
    $later = new DateTime($di);
    $diff = $later->diff($earlier)->format("%a");
    //=============
    $interval = $earlier->diff($later);
        ?>

    <tr class="gradeX">
        <td><span class="label label-default"><?php echo $names; ?></td>
        <td><span class="label label-default"><?php echo $email; ?></td>
        <td><span class="label label-primary"><?php echo $Number_nights; ?></td>
        <td><span class="label label-success"><?php echo $Number_individuals; ?></td>
        <td class="center"><span class="label label-default"><?php echo $phone; ?></td>
        <td class="center"><span class="label label-default"><?php echo $addres; ?></td>
        <td class="center"><span class="label label-warning"><?php echo $check_in_date; ?></td>
        <td class="center"><span class="label label-danger"><?php echo $check_out_date; ?></td>
        <td class="center"><span class="label label-danger"><?php echo $interval->format('%R%a days'); ?></td>
    </tr>
        <?php
    }
}
?>
<?php ?>