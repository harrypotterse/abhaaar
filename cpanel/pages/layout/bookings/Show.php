<?php
session_start();
if (!isset($_SESSION['user'])):
    header("location: ../../examples/login.php");
    exit();
endif;
?>
<?php
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
require_once '../../../../FileConnection/Extra_functions.php';
$a = new Achieve();
$sql_updata = "UPDATE `bookings` SET `Notifications` = '1' ";
$array = array();
$rows = $a->sql($Data_communication, $sql_updata, $array);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>الحجوزات</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" type="image/x-icon" href="../icons8-code-64.png">
        <link href="css/Total_adjustment.css" rel="stylesheet" type="text/css"/>
        <?php require_once '../Component/css.php'; ?>
        <link href="css/datatabel.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="skin-blue fixed sidebar-mini" dir="rtl">
        <style>

            .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
                /* border: 1px solid #f6f1f1; */
                border-bottom: 1px solid #f6f6f6;
                border-right: 0px;
            }
            .titel {
    background: #222d32;
    padding: 0.4%;
    text-align: center;
    color: white;
    box-shadow: 1px 2px 2px #a09999;
    margin-bottom: -3px;
    z-index: 38;
}
        </style>
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php require_once '../Component/nav.php'; ?>
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="titel">
                    <img src="https://www.flaticon.com/premium-icon/icons/svg/901/901010.svg" width="150" >
                    <h1>جدول عرض البيانات # الحجوزات</h1>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>الاسم</th>
                            <th>البريد</th>
                            <th>عدد الليالي </th>
                            <th>عدد الافراد</th>
                            <th>الموبيل</th>
                            <th>العنوان</th>
                            <th>تاريخ الوصول</th>
                            <th>تاريخ المغادرة </th>
                            <th>حذف</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM `bookings` ORDER BY `bookings`.`id` DESC";
                        $array = array();
                        $rows = $a->sql_feth($Data_communication, $sql, $array);
                        foreach ($rows as $value):
                            $id = $value['id'];
                            $names = $value['names'];
                             
                            $email = $value['email'];
                            $Number_nights = $value['Number_nights'];
                            $Number_individuals = $value['Number_individuals'];
                            $phone = $value['phone'];
                            $addres = $value['addres'];
                            $check_in_date = $value['check_in_date'];
                            $check_out_date = $value['check_out_date'];
                            $firstCharacter = set_first_cher($email)[0];
                            $array = array("#2aa556", "#40b7ff", "#ff7f40", "#ff40a0", "#ff4040", "#acb4b3", "#3d8346", "#2b4970", "#2b706d", "#217618", "#27dd93", "#7727dd", "#27badd", "#c0c7b1", "#e8c177", "#77e2e8", "#e877b5", "#7f3b60", "#3b4c7f", "#7f3b7c", "#0e97db", "#0edb9a", "##5796b6", "#b66957", "#3b7e7f", "#27aadd");
                            // ======================================
                            $Notifications = $value['Notifications'];
                            // $steyl='style="background: #b9f4c6;font-weight: 600;font-size: 15px;"';
                            if ($Notifications === "0") {
                                $steyl = 'style="background: #e6e6e6;font-weight: 600;font-size: 14px;"'.$st;
                            } else {
                                $steyl = '';
                            }
                            ?>
                        <tr  <?php echo $steyl; ?>  >
                                <td style="vertical-align: inherit;padding: 11px;"><span <?php echo set_first_cher_coler($email) ?>  class="badge boxs"><?php echo $firstCharacter; ?></td>
                                <td style="vertical-align: inherit;"><?php echo $names; ?></td>
                                <td style="vertical-align: inherit;"><?php echo $email; ?></td>
                                <td style="vertical-align: inherit;"><?php echo $Number_nights; ?></td>
                                <td style="vertical-align: inherit;"><?php echo $Number_individuals; ?></td>
                                <td style="vertical-align: inherit;"><?php echo $phone; ?></td>
                                <td style="vertical-align: inherit;"><?php echo $addres; ?></td>
                                <td style="vertical-align: inherit;"><span class="label label-success"><?php echo $check_in_date; ?></td>
                                <td style="vertical-align: inherit;"><span class="label label-danger"><?php echo $check_out_date; ?></td>
                                <td style="vertical-align: inherit;"><a type="button" id="<?php echo $id; ?>" Image="<?php echo $Image; ?>" style="background: #222d32;border: none;" class="btn btn-warning del">حذف</a></td>
                            </tr>
<?php endforeach; ?>
                    </tbody>
                </table>  
            </div>    
            <br>
            <br>
            <br>
<?php require_once '../Othercomponents/del_box.php'; ?>
        </div><!-- /.content-wrapper -->
            <?php require_once '../Component/footer.php'; ?>
        <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
<?php require_once '../Component/js.php'; ?>
    <script>
        $(document).on("click", '.del', function (event) {
            var id = $(this).attr('id');
            var Image = $(this).attr('Image');
            $('#delete').modal('show');
            $("#del2").click(function () {
                $.post('./phpajax/Delete_the_file.php', {id: id, Image: Image}, function (data) {
                    location.reload();
                });
            });
        });
    </script>
    <script src="../../js/Shortcuts.js" type="text/javascript"></script>
</body>
</html>
