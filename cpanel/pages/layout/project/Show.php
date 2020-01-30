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
$a = new Achieve();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> مشاريع المجموعه </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" type="image/x-icon" href="../icons8-code-64.png">
        <link href="css/Total_adjustment.css" rel="stylesheet" type="text/css"/>
        <?php require_once '../Component/css.php'; ?>
        <link href="css/datatabel.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="skin-blue fixed sidebar-mini" dir="rtl">
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php require_once '../Component/nav.php'; ?>
            <div class="space" style="margin-top: 31px;">      
            </div>
            <div class="content-wrapper">
                <div class="container">
                    <div class="titel">
                        <img src="https://www.flaticon.com/premium-icon/icons/svg/901/901010.svg" width="150" >
                        <h1>جدول عرض البيانات # مشاريع المجموعه </h1>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>الصورة</th>
                                <th>الاسم</th>
                                <th>الخدمة</th>
                                <th>حذف</th>
                                <th>تعديل</th>
                                <th>معاينة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `project` ORDER BY `project`.`id` ASC";
                            $array = array();
                            $rows = $a->sql_feth($Data_communication, $sql, $array);
                            foreach ($rows as $value):
                                $id = $value['id'];
                                $Image = $value['Image'];
                                $Name = $value['Project'];
                                $ids = $value['ids'];
                                $Images = "uplod/" . $Image;
                                if (file_exists($Images)) {
                                    $Images;
                                } else {
                                    $Images = "https://image.flaticon.com/icons/svg/181/181541.svg";
                                }
                                ?>
                                <tr>
                                    <td style="vertical-align: inherit;"><span class="badge"><?php echo $id; ?></td>
                                    <td style="vertical-align: inherit;"><img src="<?php echo $Images; ?>" class="img-circle img-responsive img-thumbnail" width="70"></td>
                                    <td style="vertical-align: inherit;"><?php echo $Name; ?></td>
                                    <td style="vertical-align: inherit;"><span class="label label-primary"><?php $sql = "SELECT * FROM `main_services` where id = ? ";
                            $array = array($ids);
                            $rowss = $a->sql_feth($Data_communication, $sql, $array);
                            foreach ($rowss as $v): echo $v['Name'];
                            endforeach; ?></span></td>

                                    <td style="vertical-align: inherit;"><a type="button" id="<?php echo $id; ?>" Image="<?php echo $Image; ?>" class="btn btn-warning del">حذف</a></td>
                                    <td style="vertical-align: inherit;"><a type="button" class="btn btn-info" href="edit.php?id=<?php echo $id; ?>">تعديل</a></td>
                                    <td style="vertical-align: inherit;"><a type="button" href="../../../../gallery.php#project" class="btn btn-success">معاينة</a></td>

                                </tr>
<?php endforeach; ?>

                        </tbody>
                    </table>  
                    <a type="button"  href="addition.php" class="btn btn-default btn-block btn-lg">أضافة موضوع جديد</a>

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