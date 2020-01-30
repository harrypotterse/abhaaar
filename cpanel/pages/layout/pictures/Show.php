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
        <title> اقسام المعرض </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" type="image/x-icon" href="../icons8-code-64.png">
        <link href="css/Total_adjustment.css" rel="stylesheet" type="text/css"/>
        <?php require_once '../Component/css.php'; ?>
        <style>
.bnm {
    writing-mode: vertical-rl;
    text-orientation: mixed;
    height: 201px;
    width: 58px;
    font-size: 28px;
    font-weight: 800;
}
span.label.label-primary {
    font-size: 14px;
}
        </style>
        <link href="css/datatabel.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="skin-blue fixed sidebar-mini" dir="rtl">
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php require_once '../Component/nav.php'; ?>    
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="titel">
                    <img src="https://www.flaticon.com/premium-icon/icons/svg/901/901010.svg" width="150" >
                    <h1>جدول عرض البيانات # اقسام المعرض</h1>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th><span class="label label-default">الصورة</span></th>
                            <th> <span class="label label-default">اسم المعرض</span></th>
                            <th><span class="label label-default">اللغة</span></th>
                            <th><span class="label label-default">حذف</span></th>
                            <th><span class="label label-default">تعديل</span></th>
                            <th><span class="label label-default">معاينة</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `pictures` ORDER BY `pictures`.`id` ASC";
                        $array = array();
                        $rows = $a->sql_feth($Data_communication, $sql, $array);
                        foreach ($rows as $value):
                            $id = $value['id'];
                            $Language = $value['Language'];
                            $Title = $value['Title'];
                            $Image = $value['Image'];
                            if ($Language == "Arabic"):
                                $Language = "<span class='label label-success'>$Language</span>";
                            elseif ($Language == "English") :
                                $Language = "<span class='label label-danger'>$Language</span>";
                            endif;
                            $Images = "uplod/" . $Image;
                            if (file_exists($Images)) {
                                $Images;
                            } else {
                                $Images = "https://image.flaticon.com/icons/svg/181/181541.svg";
                            }
                            ?>
                            <tr>

                                <td style="vertical-align: inherit;"><span class="badge"><?php echo $id; ?></td>
                                <td style="vertical-align: inherit; padding: 0px;margin: 0px; width: 40%;">  <div class="hover09 column"><div><figure><img src="<?php echo $Images; ?>" class="img-responsive img-thumbnail" width="100" style="width: 100%"></figure></div></div> </td>
                                <td style="vertical-align: inherit;"><span class="label label-primary"><?php echo $Title; ?></td>
                                <td style="vertical-align: inherit;"><?php echo $Language; ?></td>
                                <td style="vertical-align: inherit;"><a type="button" id="<?php echo $id; ?>" Image="<?php echo $Image; ?>" class="btn btn-warning del bnm">Delete</a></td>
                                <td style="vertical-align: inherit;"><a type="button" class="btn btn-info bnm" href="edit.php?id=<?php echo $id; ?>">Modify</a></td>
                                <td style="vertical-align: inherit;"><a type="button" href="../../../../index.php#pictures" class="btn btn-success bnm">Preview</a></td>
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
