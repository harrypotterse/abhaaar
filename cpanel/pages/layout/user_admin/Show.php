<?php
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
$a = new Achieve();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>مستخدمين لوحة التحكم</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php require_once '../Component/css.php'; ?>
        <link href="css/datatabel.css" rel="stylesheet" type="text/css"/>
                <link rel="shortcut icon" type="image/x-icon" href="../icons8-code-64.png">
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
                        <h1>جدول عرض البيانات #مستخدمين لوحة التحكم</h1>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>المستخدم</th>
                                <th>كلمة السر</th>
                                <th>حذف</th>
                                <th>تعديل</th>
                     
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `user_admin` ORDER BY `user_admin`.`id` ASC";
                            $array = array();
                            $rows = $a->sql_feth($Data_communication, $sql, $array);
                            foreach ($rows as $key):
                                $id = $key['id'];
                                $Questions = $key['user'];
                                $Answer = $key['password'];
                                ?>
                                <tr>
                                    <td style="vertical-align: inherit;"><?php echo $id; ?></td>
                                    <td style="vertical-align: inherit;"><?php echo $Questions; ?></td>
                                    <td style="vertical-align: inherit;"><?php echo $Answer; ?></td>
                                    <td style="vertical-align: inherit;"><a type="button" id="<?php echo $id; ?>" Image="<?php echo $Image; ?>" class="btn btn-warning del">حذف</a></td>
                                    <td style="vertical-align: inherit;"><a type="button" class="btn btn-info" href="edit.php?id=<?php echo $id; ?>">تعديل</a></td>

                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>  
                    <a type="button"  href="addition.php" class="btn btn-default btn-block btn-lg">اضافة مستخدم جديد</a>
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
