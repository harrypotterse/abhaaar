<?php
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
require_once '../../../../FileConnection/Extra_functions.php';
$a = new Achieve();
$today = date('Y-m-d');
$sqls = "SELECT * FROM `bookings` where di = ? ";
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
    <body style="background: #38c6f3">

        <div id="wrap">
            <div class="container">
                <img src="img/responsive.gif" class="img-responsive" style="  margin: 0 auto;">
                <img src="img/2.png" class="img-responsive" style="  margin: 0 auto;">

            </div>
            <div class="container">
                <div class="form-group">

                    <input type="text" class="form-control Search" id="usr">
                    <div class="btn-group btn-group-justified asd">
                        <a href="#" class="btn btn-default asd">عدد الطلبات <span class="badge"><?php
                                $sqls2 = "SELECT * FROM `visits`  ";
                                echo rowCount($Data_communication, $sqls2, $today);
                                ?></span></a>
                        <a href="#" class="btn btn-default asd" data-toggle="modal" data-target="#myModal" >بداء العضويات اليوم <span class="badge"><?php
                                $today = date('Y-m-d');
                                $sqls = "SELECT * FROM `visits` where Membership_start_ = ? ";
                                echo rowCount($Data_communication, $sqls, $today);
                                ?></span></a>
                        <a href="#" class="btn btn-default asd2" data-toggle="modal" data-target="#myModal2" >تاريخ انتهاء العضوية اليوم<span class="badge"><?php
                                $today = date('Y-m-d');
                                $sqls = "SELECT * FROM `visits` where Membership_expiration_ = ? ";
                                echo rowCount($Data_communication, $sqls, $today);
                                ?></span></a>

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
                    /* font-family: 'Roboto Mono', monospace; */
                    margin-bottom: 26px;
                    "
                    >البحث بين تاريخين علي حسب انتهاء العضوية</h1>
                <div class="row">


                    <div class="col-sm-6">  <input type="text" class="form-control dd op" id="datepicker"></div>
                    <div class="col-sm-6">      <input type="text" class="form-control op " id="datepicker2"></div>

                </div>


            </div>
            <div class="space"></div>
            <div class="container-fluid">
                <div class="table-responsive">
                       <table cellpadding="0" cellspacing="0" border="0" id="example" class="datatable table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>الايميل</th>
                            <th>بيانات الاتصال </th>
                            <th>رقم العضوية</th>
                            <th>رقم الهوية </th>
                            <th>تاريخ بدء العضوية </th>
                            <th>تاريخ انتهاء العضوية </th>
                            <th>رقم كارت الدخول </th>
                            <th>نوع العضوية</th>
                            <th>حالة العضوية </th>
                            <th>الصورة الشخصية </th>
                            <th>باقي علي انتهاء العضوية </th>
                            <th>باقي علي بداية العضوية</th>
                            <th>عرض البيانات</th>
                        </tr>
                    </thead>
                    <tbody id="tab" class="results2">


                    </tbody>

                </table>  
                </div>
           
            </div>
            <!-- Modal -->
            <?php
            require_once './php/vist_today_.php';
            ;
            ?>
            <?php require_once './php/vist_ex.php' ?>
            <!-- Modal -->
            <?php
            require_once './php/showdata.php';
            ;
            ?>
        </div>

    </body>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php // require_once '../Component/js.php';          ?>
<script>
    function readRecords() {
        $.post('ajx/tab_visits.php', {}, function (data) {
            $('#tab').hide().html(data).fadeToggle("slow");
            $("#example").DataTable();
        });
        return false;
    }
    $(document).ready(function () {
        // readRecords();
    });
    $(function () {
        $("#datepicker").datepicker();
        $("#datepicker").datepicker("option", "dateFormat", 'yy-m-d');
    });
    $(function () {
        $("#datepicker2").datepicker();
        $("#datepicker2").datepicker("option", "dateFormat", 'yy-m-d');
        $(".op").change(function () {
            var data1 = $('#datepicker').val();
            var data2 = $('#datepicker2').val();
            $.post('ajx/data_vist.php', {data1: data1, data2: data2}, function (data) {
                $('#tab').hide().html(data).fadeToggle("slow");
                $("#example").DataTable();
            });
            return false;
        });
        $(".Search").keyup(function () {
            var Search = $(this).val();
            $.post('ajx/Search2.php', {Search: Search}, function (data) {
                $('.results2').hide().html(data).fadeToggle("slow");

            });
        });
    });

</script>
<script type="text/javascript">
    var busy = false;
    var limit = 2
    var offset = 0;
    var key = $('.Search').val();
    $.ajax({

    })
    function displayRecords(lim, off) {
        $.ajax({
            type: "GET",
            async: false,
            url: "ajx/pag_visits.php",
            data: {limit: limit, offset: offset, key: key},
            cache: false,
            beforeSend: function () {
                $("#loader_message").html("").hide();
                $('#loader_image').show();
            },
            success: function (html) {
                $(".results2").append(html);
                $('#loader_image').hide();
                if (html == "") {
                    alert(111111);
                } else {
                }
                window.busy = false;

            }
        });
    }
    $(document).ready(function () {
        // start to load the first set of data
        if (busy == false) {
            busy = true;
            // start to load the first set of data
            displayRecords(limit, offset);
        }
        $(window).scroll(function () {
            // make sure u give the container id of the data to be loaded in.
            if ($(window).scrollTop() + $(window).height() > $(".results2").height() && !busy) {
                busy = true;
                offset = limit + offset;

                // this is optional just to delay the loading of data
                setTimeout(function () {
                    displayRecords(limit, offset);
                }, 500);

                // you can remove the above code and can use directly this function
                // displayRecords(limit, offset);

            }
        });
    });
</script>
<script>
    $(document).on("click", '.btn-primary', function (event) {
        var text = $(this).attr('ids');
        $('#myModal22').modal('show');
        $.post('ajx/showdata.php', {text: text}, function (data) {
            $('.pers').hide().html(data).fadeToggle("slow");
        });
        return false;


    });
</script>

</body>
</html>

