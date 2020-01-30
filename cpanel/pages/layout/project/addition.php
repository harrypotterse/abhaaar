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
        <title>AdminLTE 2 | Fixed Layout</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php require_once '../Component/css.php'; ?>
        <link href="css/add.css" rel="stylesheet" type="text/css"/>
        <style>
            span.des {
                color: #8a9292;
            }
        </style>
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
                    <div class="progress " >
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0">Raise the status of the image </div>
                    </div>
                    <form id="uploadImage" action="phpajax/add.php" method="post">

                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                          
                                    <img src="../main_services/img/3.JPG" alt="" class="img-thumbnail"/>
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
                        <a type="button" class="btn btn-danger btn-lg" href="../index/Show.php" style="border-radius: 0px">الرئسية</a>
                    </div>
                                    <div class="form-group">

                                        <label for="sel1">الخدمة</label>
                                        <select class="form-control input-lg" id="ids" name="id" >
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
                                        

                                      
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">المشروع</label>
                                        <input maxlength="100" type="hidden"  class="form-control input-lg nameads" name="filter" id="filter" placeholder="العنوان"  value=""/>
                                        <input maxlength="100" type="text"  class="form-control input-lg nameads" name="Name" placeholder="العنوان" />
                                    </div>
                                    <span class="des">اسم المشروع</span>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" class="custom-file-input" />
                                    </div>

                                    <button class="btn btn-success btn-lg pull-right  btn-block btnss" type="submit" >اضافة</button>
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
