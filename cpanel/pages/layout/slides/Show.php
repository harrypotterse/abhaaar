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
        <title> الاعلانات الرئسية</title>
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
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="titel">
                    <img src="https://image.flaticon.com/icons/svg/1649/1649579.svg" width="150" >
                    <h1>جدول عرض البيانات  # الاعلانات الاساسية</h1>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>الصورة</th>
                            <th>العنوان</th>
                            <th>العنوان الفرعي</th>
                            <th>العنوان الاضافي</th>
                            <th>اللغة</th>
                            <th>تعديل</th>
                            <th>معاينة</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `slides` ";
                        $array = array();
                        $rows = $a->sql_feth($Data_communication, $sql, $array);
                        foreach ($rows as $value):
                            $id = $value['id'];
                            $language = $value['language'];
                            $Image = $value['Image'];
                            $Title = $value['Title'];
                            $Subtitle = $value['Subtitle'];
                            $Additional_Address = $value['Additional_Address'];
                            $Images = "uplod/" . $Image;
                            if ($language == "Arabic"):
                                $language = "<span class='label label-success'>$language</span>";
                            elseif ($language == "English") :
                                $language = "<span class='label label-danger'>$language</span>";
                            endif;
                            if (file_exists($Images)) {
                                $Images;
                            } else {
                                $Images = "https://image.flaticon.com/icons/svg/1649/1649579.svg";
                            }
                            ?>
                            <tr>
                                <td style="vertical-align: inherit;"><span class="badge"><?php echo $id; ?></td>
                                <td style="vertical-align: inherit;">  <div class="hover09 column"><div><figure><img src="<?php echo $Images; ?>" class="img-responsive img-thumbnail" width="300"></figure></div></div> </td>
                                <td style="vertical-align: inherit;"><?php echo $Title; ?></td>
                                <td style="vertical-align: inherit;"><?php echo $Subtitle; ?></td>
                                <td style="vertical-align: inherit;"><?php echo $Additional_Address; ?></td>
                                <td style="vertical-align: inherit;"><?php echo $language; ?></td>
                                <td style="vertical-align: inherit;"><a type="button" class="btn btn-info" href="edit.php?id=<?php echo $id; ?>">تعديل</a></td>
                                <td style="vertical-align: inherit;"><a type="button" href="../../../../index.php#rev_slider_2_1_wrapper" class="btn btn-success">معاينة</a></td>

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
