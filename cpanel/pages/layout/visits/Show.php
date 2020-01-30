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
$sql_updata = "UPDATE `visits` SET `Notifications` = '1' ";
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
        <style>
            span.label.label-success.gold {
                background: gold !important;
                color: #2c2c2b !important;
                font-size: 14px;
            }
            span.label.label-danger.silv {
                background: silver !important;
                color: black !important;
                font-size: 14px;
            }
        table.table-bordered.dataTable tbody th, table.table-bordered.dataTable tbody td {
    /* border-bottom-width: 2px; */
    /* border: 1px solid #dbdbdb; */
    border-bottom: 1px solid #dfdfe3;
    border-left: none;
    border-right: none;
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
.btn-warning {
    color: #fff;
    background-color: #222d32;
    border-color: #ffffff;
}
        </style>
    </head>
    <body class="skin-blue fixed sidebar-mini" dir="rtl">
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php require_once '../Component/nav.php'; ?>
        </div>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="titel">
                    <img src="https://www.flaticon.com/premium-icon/icons/svg/901/901010.svg" width="150" >
                    <h1>جدول عرض البيانات # تسجيل الزائرين</h1>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                               <th>#</th>
                            <th>الصورة الشخصية </th>
                            <th>الاسم</th>
                            <th>الايميل</th>
                            <th> الاتصال </th>
                            <th>رقم العضوية</th>
                            <th>رقم الهوية </th>
                            <th> بدء العضوية </th>
                            <th> انتهاء العضوية </th>
                            <th> كارت الدخول </th>
                            <th>نوع العضوية</th>
                            <th>حالة العضوية </th>

                            <th>حذف </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `visits` ORDER BY `visits`.`id` DESC";
                        $array = array();
                        $rows = $a->sql_feth($Data_communication, $sql, $array);
                        foreach ($rows as $value) :
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
                              $firstCharacter = set_first_cher($Email)[0];
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
                            $url = "../../../../ajax/UP/$picture";
                            $Notifications = $value['Notifications'];
                            // $steyl='style="background: #b9f4c6;font-weight: 600;font-size: 15px;"';
                            if ($Notifications === "0") {
                                $steyl = 'style="background: #eaeaea;font-weight: 600;font-size: 14px;"';
                            } else {
                                $steyl = '';
                            }
                            ?>
                            <tr <?php echo $steyl; ?>>
                                <td style="vertical-align: inherit;padding: 11px;"><span <?php echo set_first_cher_coler($Email) ?>  class="badge boxs"><?php echo $firstCharacter; ?></td>
                                <td class="center" style="padding: 0"><img  width="150" src="../../../../ajax/UP/<?php echo $picture; ?>" class="img-responsive  img-rounded" alt="Cinque Terre"></td>
                                <td style="vertical-align: inherit;"><span class="label label-default"><?php echo $names; ?></td>
                                <td style="vertical-align: inherit;"><span class="label label-default"><?php echo $Email; ?></td>
                                <td style="vertical-align: inherit;"><span class="label label-primary"><?php echo $Contact_Data; ?></td>
                                <td style="vertical-align: inherit;"><span class="label label-success"><?php echo $Membership_No; ?></td>
                                <td style="vertical-align: inherit;" class="center"><span class="label label-default"><?php echo $ID_Number; ?></td>
                                <td style="vertical-align: inherit;" class="center"><span class="label label-primary"><?php echo $Membership_start; ?></td>
                                <td  style="vertical-align: inherit;" class="center"><span class="label label-primary"><?php echo $Membership_expiration; ?></td>
                                <td style="vertical-align: inherit;" class="center"><span class="label label-danger"><?php echo $Entry_card; ?></td>
                                <td  style="vertical-align: inherit;" class="center"><?php echo $Type_Membership; ?></td>
                                <td style="vertical-align: inherit;" class="center"><?php echo $Membership_status; ?></td>
                                <td style="vertical-align: inherit;"><a type="button" id="<?php echo $id; ?>" Image="<?php echo $picture; ?>" class="btn btn-warning del">حذف</a></td>

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
               //     alert(data);
                    location.reload();
                });
            });
        });
    </script>
    <script src="../../js/Shortcuts.js" type="text/javascript"></script>
</body>
</html>
