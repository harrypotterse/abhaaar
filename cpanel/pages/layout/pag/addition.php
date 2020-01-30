<?php
session_start();
if (!isset($_SESSION['user'])):
    header("location: ../../examples/login.php");
    exit();
endif;
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
                
                    <form id="uploadImage" action="phpajax/add.php" method="post">
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="sel1">الصفحة</label>
                                        <select class="form-control input-lg" id="sel1" name="Page">
                                            <option>التواصل</option>
                                            <option> الرئيسيه</option>
                                            <option> المشاريع</option>
                                            <option> تفاصيل الخدمة</option>
                                            <option> عن الموقع</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">الاسم</label>
                                        <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" Component" name="Title" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">الوظيفة</label>
                                        <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" Function" name="Function" />
                                    </div>
                                    <div class="form-group">
                                        <label>التعليق </label>
                                        <textarea class="form-control News" rows="3"  placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="Details"></textarea>
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

    </body>
</html>
