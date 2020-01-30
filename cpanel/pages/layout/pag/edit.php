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
    $SQL = "SELECT * FROM `main_ads`  where id = ?";
    $array = array($id);
    $rows = $a->sql_feth($Data_communication, $SQL, $array);
    foreach ($rows as $value):
        $id = $value['id'];
        $Ad_Title = $value['Ad_Title'];
        $Details = $value['Details'];
        $Pictures = $value['Pictures'];
        $Title = $value['Title'];
        $Detailshas = $value['Detailshas'];
        if ($a->Validate_URL($Pictures)) {
            $Pictures;
        } else {
            $Pictures = "https://image.flaticon.com/icons/svg/1484/1484917.svg";
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
        <title> تعديل البيانات # الاهداف</title>
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
                         <img src="img/45.JPG" alt="" class="img-thumbnail img-responsive" />
                                 <div  class="btn-group" style="
                         margin-bottom: 12px;
                         ">
                        <a type="button" class="btn btn-warning btn-lg " href="addition.php" style="border-radius: 0px">الاضافة</a>
                        <a type="button" class="btn btn-success btn-lg " href="Show.php" style="border-radius: 0px">عرض البيانات</a>
                        <a type="button" class="btn btn-danger btn-lg" href="../main_services/Show.php" style="border-radius: 0px">الخدمات</a>
                        <a type="button" class="btn btn-primary btn-lg" href="../opinions/Show.php" style="border-radius: 0px">التعليقات</a>
                        <a type="button" class="btn btn-info btn-lg" href="../performance_ratios/Show.php" style="border-radius: 0px">نسب الاداء العامة</a>
                        <a type="button" class="btn btn-danger btn-lg" href="../slides/Show.php" style="border-radius: 0px">الاهداف</a>
                        <a type="button" class="btn btn-warning btn-lg" href="../information/Show.php" style="border-radius: 0px">معلومات</a>
                        <a type="button" class="btn btn-danger btn-lg" href="../timeline/Show.php" style="border-radius: 0px">الشريط الزمني</a>
                        <a type="button" class="btn btn-primary btn-lg" href="../staff/Show.php" style="border-radius: 0px">فريق العمل</a>
                        <a type="button" class="btn btn-danger btn-lg" href="../index/Show.php" style="border-radius: 0px">الرئسية</a>
                    </div>
                    <legend> تعديل البيانات #  الاعلانات الرئسية</legend>

                    <form id="uploadImage" action="phpajax/edit.php" method="post">
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label class="control-label">الرقم التعريفي</label>
                                            <input maxlength="100" type="text"  class="form-control input-lg id" name="id" placeholder="الرقم التعريفي"  value="<?php echo $id; ?>"/>
                                        </div>
                                    </div>
                           
                                    <div class="form-group">
                                        <label class="control-label">العنوان</label>
                                        <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" Component" name="Ad_Title"  value="<?php echo htmlentities($Ad_Title); ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>التفاصيل </label>
                                        <textarea class="form-control News" rows="3"  placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="Details"><?php echo $Details; ?></textarea>
                                    </div>    
                                    <div class="form-group">
                                        <label class="control-label">الرابط</label>
                                        <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" URL" name="Pictures" value="<?php echo $Pictures; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">العنوان الفرعي</label>
                                        <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" Title" name="Title" value="<?php echo $Title; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>التفاصيل الفرعية </label>
                                        <textarea class="form-control News" rows="3"  placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="Detailshas"><?php echo $Detailshas; ?></textarea>
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
