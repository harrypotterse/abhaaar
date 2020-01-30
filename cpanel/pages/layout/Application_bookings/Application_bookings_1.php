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
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/css.css">
    </head>
    <body>
        <?php require_once '../Component/css.php'; ?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <link href="css/tab.css" rel="stylesheet" type="text/css"/>
        <div id="wrap">
            <div class="container">
                <img src="img/responsive.gif" class="img-responsive" style="  margin: 0 auto;">
                <img src="img/1.png" class="img-responsive" style="  margin: 0 auto;">

            </div>
            <div class="container">
                <div class="form-group">

                    <input type="text" class="form-control" id="usr">
                    <div class="btn-group btn-group-justified asd">
                        <a href="#" class="btn btn-default asd">عدد الحجوزات</a>
                        <a href="#" class="btn btn-success asd" data-toggle="modal" data-target="#myModal" >حجوزات اليوم</a>
                        <a href="#" class="btn btn-info asd">العنوان</a>
                    </div>
                </div>

            </div>
            <div class="space"></div>
            <div class="container">
                <h1 class="text-center" style="
                    font-size: 30px;
                    color: white;
                    text-transform: uppercase;
                    font-weight: 700;
                    ">Search between two dates</h1>
                <div class="row">


                    <div class="col-sm-6">  <input type="text" class="form-control dd" id="datepicker"></div>
                    <div class="col-sm-6">      <input type="text" class="form-control " id="datepicker2"></div>

                </div>


            </div>
            <div class="container-fluid">
                <table cellpadding="0" cellspacing="0" border="0" id="example" class="datatable table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>الايميل</th>
                            <th>عدد الليالي</th>
                            <th>عدد الافراد</th>
                            <th>الهاتف</th>
                            <th>العنوان</th>
                            <th>تاريخ الوصول</th>
                            <th>تاريخ المغادرة</th>
                            <th>باقي علي الوصول</th>
                        </tr>
                    </thead>
                    <tbody id="tab">


                    </tbody>

                </table>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>الاسم</th>
                                        <th>الايميل</th>
                                        <th>عدد الليالي</th>
                                        <th>عدد الافراد</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                            <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mary</td>
                                        <td>Moe</td>
                                          <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>Dooley</td>
                                         <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <?php // require_once '../Component/js.php'; ?>
    <script>
        function readRecords() {
            $.post('ajx/tab.php', {}, function (data) {
                $('#tab').hide().html(data).fadeToggle("slow");
                $("#example").DataTable();
            });
            return false;
        }
        $(document).ready(function () {
            readRecords();
        });
        $(function () {
            $("#datepicker").datepicker();
            $("#datepicker").datepicker("option", "dateFormat", 'yy - m- d');
        });
        $(function () {
            $("#datepicker2").datepicker();
            $("#datepicker2").datepicker("option", "dateFormat", 'yy - m- d');
        });

    </script>


</body>
</html>

