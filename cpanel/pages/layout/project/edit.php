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
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
try {
    $SQL = "SELECT * FROM `project`  where id = ?";
    $array = array($id);
    $rows = $a->sql_feth($Data_communication, $SQL, $array);
    foreach ($rows as $value):
        $id = $value['id'];
        $Image = $value['Image'];
        $Name = $value['Project'];
        $Filtering = $value['Filtering'];
        $Images = "uplod/" . $Image;
        if (file_exists($Images)) {
            $Images;
        } else {
            $Images = "https://img.icons8.com/material/4ac144/256/camera.png";
        }
    endforeach;
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> تعديل البيانات # المصاعد</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php require_once '../Component/css.php'; ?>
        <link href="css/add.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" type="image/x-icon" href="../icons8-code-64.png">
    </head>
    <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
    <!-- the fixed layout is not compatible with sidebar-mini -->
    <body class="skin-blue fixed sidebar-mini" dir="rtl">
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php require_once '../Component/nav.php'; ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- Form Name -->
                    <legend> تعديل البيانات # مشاريع المجموعة</legend>
                         <?php require_once '../Component/prog.php'; ?>
                    <form id="uploadImage" action="phpajax/edit.php" method="post">
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label class="control-label">الرقم التعريفي</label>
                                            <input maxlength="100" type="text"  class="form-control input-lg id" name="id" placeholder="الرقم التعريفي"  value="<?php echo $id; ?>"/>
                                            <input type="hidden" name="file" value="<?php echo $Images; ?>" >
                                        </div>
                                    </div>
                                    <label for="sel1">الخدمة</label>
                                    <select class="form-control input-lg" id="ids" name="ids" >
                                        <?php
                                        $sql = "SELECT  *   FROM `main_services` where  General = 'Services' ";
                                        $array = array();
                                        $rows = $a->sql_feth($Data_communication, $sql, $array);
                                        foreach ($rows as $value):
                                            $id = $value['Name'];
                                            $Filter = $value['id'];
                                              $Filtering = $value['Filtering'];
                                            ?>
                                            <option filter="<?php echo $Filtering; ?>"  value="<?php echo $Filter; ?>"><?php echo $id; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="des">الربط بين الخدمة والمشاريع العامة</span>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label class="control-label">المشروع</label>
                                        <input maxlength="100" type="hidden"  class="form-control input-lg nameads" name="filter" id="filter" placeholder="العنوان"  value="<?php ?>"/>
                                        <input maxlength="100" type="text"  class="form-control input-lg nameads" name="Name" placeholder="العنوان"  value="<?php echo $Name; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="file" value="<?php echo $Image; ?>" >
                                        <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" class="custom-file-input" />
                                    </div>
                                    <button class="btn btn-success btn-lg pull-right  btn-block btnss" type="submit" >تعديل الخبر</button>
                                    <img src="<?php echo $Images; ?>" class=" img-responsive img-thumbnail" width="150" >

                                </div>
                            </div>
                        </div>
                    </form>

                    <div id="targetLayer" style="
                         display:none;
                         "></div>
                </div>

                <?php require_once '../Othercomponents/lastadd.php'; ?>

            </div><!-- /.content-wrapper -->
            <?php require_once '../Component/footer.php'; ?>

        </div><!-- ./wrapper -->

        <?php require_once '../Component/js.php'; ?>
        <script src="js/jquery.form.js" type="text/javascript"></script>
        <script src="js/add.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('#ids').on('change', function () {
                    var value = $('select#ids option:selected').attr('filter');
                    $('#filter').val(value);
                });
            });
        </script>
    </body>
</html>
