<?php
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
$a = new Achieve();
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
try {
    $SQL = "SELECT * FROM `user_admin`  where id = ?";
    $array = array($id);
    $rows = $a->sql_feth($Data_communication, $SQL, $array);
    foreach ($rows as $key):
        $id = $key['id'];
        $Questions = $key['user'];
        $Answer = $key['password'];
        $Answer1 = $key['mail'];
    endforeach;
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>اضافة مستخدم جديد</title>
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
                    <legend> تعديل البيانات</legend>
                    <form id="uploadImage" action="phpajax/edit.php" method="post">
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">الرقم التعريفي</label>
                                        <input maxlength="100" type="text"  class="form-control input-lg id" name="id" placeholder="الرقم التعريفي" value="<?php echo $id; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">اسم المستخدم</label>
                                        <input maxlength="100" type="text"  class="form-control input-lg nameads" name="user" placeholder="اسم المستخدم" value="<?php echo $Questions; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">كلمة السر</label>
                                        <input maxlength="100" type="text"  class="form-control input-lg nameads" name="password" placeholder="كلمة السر" value="<?php echo $Answer; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">البريد الالكتروني</label>
                                        <input maxlength="100" type="text"  class="form-control input-lg nameads" name="mail" placeholder="البريد الالكتروني" value="<?php echo $Answer1; ?>" />
                                    </div>

                                    <button class="btn btn-success btn-lg pull-right  btn-block btnss" type="submit" >تعديل معلومات</button>
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
    </body>
</html>
