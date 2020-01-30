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
        <title>المدونة</title>
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
                    <?php require_once '../Component/prog.php'; ?>
                    <form id="uploadImage" action="phpajax/add.php" method="post">    <div class="row setup-content" id="step-1">  <div class="col-xs-12">
                                <div class="col-md-12">
                                        <div class="hover08 column"> <div> <figure>   <img src="img/1.png" alt="" class="img-thumbnail"/>
                                               <?php require_once '../Othercomponents/info_linke.php';; ?> 
                                    <div class="form-group">
                                        <label class="control-label">اللغة </label>
                                        <select class="form-control Language" name="Language" id="sel1" style="height: 44px;font-size: 16px;font-weight: 600;">
                                            <option>Arabic</option>
                                            <option>English</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">الكاتب </label>
                                        <input maxlength="100" type="text"  class="form-control input-lg nameads" name="Author" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">التاج الرئيسي</label>
                                        <input maxlength="100" type="text"  class="form-control input-lg nameads" name="Tags" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"> القسم</label>
                                        <input maxlength="100" type="text"  class="form-control input-lg nameads" name="Section" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"> العنوان</label>
                                        <input maxlength="100" type="text"  class="form-control input-lg nameads" name="Title" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">التفاصيل</label>
                                        <textarea class="form-control" rows="5" id="comment" name="Explanation" required="تفاصيل الخبر"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">نوع المدونة </label>
                                        <select class="form-control Language" name="Type" id="sel1" style="height: 44px;font-size: 16px;font-weight: 600;">
                                            <option>أساسية</option>
                                            <option>فرعية</option>
                                        </select>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" class="custom-file-input" />
                                    </div>

                                    <button class="btn btn-success btn-lg pull-right  btn-block btnss" type="submit" >اضافة</button>
                                </div>
                            </div>
                        </div>
                                
                    </div></div></form>
                
                           <div> <div id="targetLayer" style="
                         display:none;
                         "></div></div>
          
                </div>
                           
                           
                         
                <?php require_once '../Othercomponents/lastadd.php'; ?>

          <!-- /.content-wrapper -->
            <?php require_once '../Component/footer.php'; ?>

        <!-- ./wrapper -->
        <?php require_once '../Component/js.php'; ?>
        </div>  
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
