<?php
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
$a = new Achieve();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>روابط الصفحات</title>
        <link rel="shortcut icon" type="image/x-icon" href="../icons8-code-64.png">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php require_once '../Component/css.php'; ?>
        <style>
            tr {
                font-size: 20px;
            }
            .btn {
                display: inline-block;
                padding: 6px 12px;
                margin-bottom: 0;
                font-size: 14px;
                font-weight: 400;
                line-height: 1.42857143;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px;
                font-size: 22px;
            }
        </style>
        <link href="css/datatabel.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="skin-blue fixed sidebar-mini" dir="rtl">
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php require_once '../Component/nav.php'; ?>  
            </div>
            <div class="content-wrapper" style="min-height: 274px;background: white;box-shadow: inset 2px -1px 4px black;background-image: url(../index/img/f.jpg);background-repeat: no-repeat;background-position: center center;background-attachment: fixed;">
                <div class="container">
                    <div class="container">
                        <table class="table table-bordered" style="background: white;text-align: center;vertical-align: middle;opacity: 0.9;">
                            <thead>
                                <tr>
                                    <th style="text-align: center;vertical-align: middle;">الصفحة</th>
                                    
                                    <th style="text-align: center;vertical-align: middle;">العربية</th>
                                       <th style="text-align: center;">الاختصارات</th>
                                    <th style="text-align: center;vertical-align: middle;">الأنجليزية</th>
                                    <th style="text-align: center;">الاختصارات</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>الصفحة الرئسية</td>
                                    <td><a type="button" href="index_pag.php" target="_blank" class="btn btn-primary">الرابط</a></td>
                                           <td><a type="button" href="index_pag.php" target="_blank" class="btn btn-primary">Press+1</a></td>
                                    <td><a type="button" href="index_pag_eng.php" target="_blank" class="btn btn-primary">الرابط</a></td>
                                    <td><a type="button" href="elevators.php" target="_blank" class="btn btn-primary">Press+2</a></td>
                                </tr>
                                <tr>
                                    <td>التسجيل كموظف</td>
                                    <td><a type="button" class="btn btn-success" target="_blank" href="Employee.php" >الرابط</a></td>
                                    <td><a type="button" href="Employee.php" target="_blank" class="btn btn-success">Press+3</a></td>
                                    <td><a type="button" class="btn btn-success" target="_blank" href="Employee_eng.php" >الرابط</a></td>
                                    <td><a type="button" class="btn btn-success" target="_blank" href="Employee_eng.php" >Press+4</a></td>
                                </tr>
                                <tr>
                                    <td>التسجيل كذائر </td>
                                    <td><a type="button" class="btn btn-info" target="_blank" href="Visit.php">الرابط</a></td>
                                           <td><a type="button" href="Visit.php" target="_blank" class="btn btn-info">Press+5</a></td>
                                           <td><a type="button" class="btn btn-info" target="_blank" href="Visit_eng.php">الرابط</a></td>
                                    <td><a type="button" class="btn btn-info" target="_blank" href="Visit_eng.php">Press+6</a></td>

                                </tr>
                                <tr>
                                    <td>الفوتر</td>
                                    <td><a type="button" class="btn btn-warning" target="_blank" href="footer_pag.php" >الرابط</a></td>
                                           <td><a type="button" href="footer_pag.php" target="_blank" class="btn btn-warning">Press+7</a></td>
                                    <td><a type="button" class="btn btn-warning" target="_blank" href="footer_pag_eng.php" >الرابط</a></td>
                                    <td><a type="button" class="btn btn-warning" target="_blank" href="footer_pag_eng.php" >Press+8</a></td>

                                </tr>
                                <tr>
                                    <td> صفحة التسجيل</td>
                                    <td><a type="button" class="btn btn-danger" target="_blank" href="Registration.php">الرابط</a></td>
                                           <td><a type="button" href="Registration.php" target="_blank" class="btn btn-danger">Press+9</a></td>
                                    <td><a type="button" class="btn btn-danger" target="_blank" href="Registration_eng.php">الرابط</a></td>
                                    <td><a type="button" class="btn btn-danger" target="_blank" href="Registration_eng.php">Press+0</a></td>

                                </tr>

                    


                            </tbody>
                        </table>
                    </div>
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
        <script src="../../js/Shortcuts_1.js" type="text/javascript"></script>

    </body>
</html>
