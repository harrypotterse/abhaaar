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
    $SQL = "SELECT * FROM `customer_opinions`  where id = ?";
    $array = array($id);
    $rows = $a->sql_feth($Data_communication, $SQL, $array);
    foreach ($rows as $value):
        $id = $value['id'];
        $Language = $value['Language'];
        $Explanation = $value['Explanation'];
        $Function = $value['Function'];
        $Name = $value['Name'];
    endforeach;
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> تعديل البيانات # اراء اعملاء</title>
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
                    <legend> تعديل البيانات #  اراء العملاء</legend>
                                                <div class="hover08 column"> <div> <figure> <img src="img/1.png" alt="" class="img-thumbnail"/></figure></div></div>
                          <?php require_once '../Othercomponents/info_linke.php'; ?>
                    <form id="uploadImage" action="phpajax/edit.php" method="post">
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <div class="form-group" style="display: none">
                                            <label class="control-label">الرقم التعريفي</label>
                                            <input maxlength="100" type="text"  class="form-control input-lg id" name="id" placeholder="الرقم التعريفي"  value="<?php echo $id; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">اللغة </label>
                                        <select class="form-control Language" name="Language" id="sel1" style="height: 44px;font-size: 16px;font-weight: 600;">
                                            <option>Arabic</option>
                                            <option>English</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">الاسم</label>
                                        <input maxlength="100" type="text" required="required" class="form-control input-lg Name"  placeholder=" Name" name="Name"  value="<?php echo $Name; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">الوظيفة</label>
                                        <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" Function" name="Function" value="<?php echo $Function; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>الشرح </label>
                                        <textarea class="form-control News" rows="3"  placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="Explanation"><?php echo $Explanation; ?></textarea>
                                    </div>      
                                    <button class="btn btn-success btn-lg pull-right  btn-block btnss" type="submit" >تعديل </button>
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
