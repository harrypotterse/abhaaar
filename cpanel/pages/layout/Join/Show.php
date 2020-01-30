<?php
session_start();
session_regenerate_id();
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
$sql_updata = "UPDATE `join_mail` SET `Notifications` = '1' ";
$array = array();
$rows = $a->sql($Data_communication, $sql_updata, $array);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>طلبات الانضمام</title>
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
            .form-control {
                display: block;
                resize: initial;
                width: 100%;
                height: 34px;
                padding: 6px 12px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #555;
                background-color: #fff;
                background-image: none;
                border: 1px solid #f4f4f4;
                border-radius: 4px;
                /* -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075); */
                /* box-shadow: inset 0 1px 1px rgba(0,0,0,.075); */
                /* -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s; */
                -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                /* transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s; */
            }
            .btn-primary {
                color: #fff;
                background-color: #5abbff;
                border-color: #5abbff;
                height: 56px;
                font-size: 31px;
            }
            .btn-primary {
                color: #fff;
                background-color: #5abbff;
                border-color: #5abbff;
                height: 56px;
                font-size: 31px;
                text-transform: uppercase;
                font-weight: 800;
                word-spacing: 23px;
                letter-spacing: -2px;
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
                    <h1>جدول عرض البيانات # طلبات الانضمام</h1>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>البريد</th>
                            <th>حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `join_mail` ORDER BY `join_mail`.`id` DESC";
                        $array = array();
                        $rows = $a->sql_feth($Data_communication, $sql, $array);
                        foreach ($rows as $value):
                            $id = $value['id'];
                            $Mail = $value['Mail'];
                            $firstCharacter = set_first_cher($Mail)[0];
                            $array = array("#2aa556", "#40b7ff", "#ff7f40", "#ff40a0", "#ff4040", "#acb4b3", "#3d8346", "#2b4970", "#2b706d", "#217618", "#27dd93", "#7727dd", "#27badd", "#c0c7b1", "#e8c177", "#77e2e8", "#e877b5", "#7f3b60", "#3b4c7f", "#7f3b7c", "#0e97db", "#0edb9a", "##5796b6", "#b66957", "#3b7e7f", "#27aadd");
                            // ======================================
                            ?>
                            <tr>
                                <td style="vertical-align: inherit;padding: 11px;"><span <?php echo set_first_cher_coler($Mail) ?>  class="badge boxs"><?php echo $firstCharacter; ?></td>
                                <td style="vertical-align: inherit;font-size: 28px;font-weight: 900;" ><?php echo $Mail; ?></td>
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
</body>
</html>
