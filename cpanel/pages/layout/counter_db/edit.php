<?php
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
$a = new Achieve();
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
try {
    $SQL = "SELECT * FROM `ads`  where id = ?";
    $array = array($id);
    $rows = $a->sql_feth($Data_communication, $SQL, $array);
    foreach ($rows as $value):
        $id = $value['id'];
        $Image = $value['image'];
        $Experience = $value['Title'];
        $Details = $value['Details'];
        $Page = $value['Page'];
        if (filter_var($Image, FILTER_VALIDATE_URL)) {
            $Image;
        } else {
            $Image = "https://img.icons8.com/material/4ac144/256/camera.png";
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
        <title>AdminLTE 2 | Fixed Layout</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php require_once '../Component/css.php'; ?>
        <link href="css/add.css" rel="stylesheet" type="text/css"/>
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
                    <legend> اضافة موضوع جديد</legend>
             
                    <form id="uploadImage" action="phpajax/edit.php" method="post">
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label class="control-label">الرقم التعريفي</label>
                                        <input maxlength="100" type="text"  class="form-control input-lg id" name="id" placeholder="الرقم التعريفي" value="<?php echo $id; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="sel1">الصفحة</label>
                                        <select class="form-control input-lg" id="sel1" name="Page">
                                            <option>الرئسية</option>
                                            <option>معلومات عنا</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">العنوان</label>
                                        <input maxlength="100" type="text"  class="form-control input-lg nameads" name="Experience" placeholder="العنوان" value="<?php echo $Experience; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">تفاصيل </label>
                                        <textarea class="form-control" rows="5" id="comment" name="Details" required="تفاصيل الخبر"><?php echo $Details; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">رابط الاعلان </label>
                                        <input maxlength="100" type="text"  class="form-control input-lg nameads" name="url" placeholder="رابط العنوان" value="<?php echo $Image; ?>" />
                                    </div>
                                    <button class="btn btn-success btn-lg pull-right  btn-block btnss" type="submit" >تعديل معلومات</button>
                                    <img src="<?php echo $Image; ?>" class=" img-responsive img-thumbnail" width="150" >
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
