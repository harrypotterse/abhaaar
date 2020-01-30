<div class="container">
    <div class="row">

        <section class="content">

            <h1 style="text-align: center">التطبيقات والصفحات المنفصلة</h1>

            <p style="
               text-align: center;
               font-size: 19px;
               margin-bottom: 27px;
               ">كما تتيح لك لوحة التحكم ثلاث صفحات منفصلة للبحث وتحليل البيانات للأقسام الخاصة بالحجوزات والتسجيل كموظف والتسجيل كزائر</p>
            <div class="col-md-8 col-md-offset-2">
                <div class="btn-group   " >
                    <a type="button" class="btn btn-primary" href="../Application_bookings/Application_bookings.php">الحجوزات</a>
                    <a type="button" class="btn btn-primary">المواظفين</a>
                    <a type="button" class="btn btn-primary" href="../Application_bookings/visits.php">الذائرين</a>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-right">
                            <div class="btn-group">
                                <a type="button" class="btn btn-success btn-filter" data-target="pagado">اخر الحجوزات</a>
                                <button type="button" class="btn btn-warning btn-filter" data-target="pendiente">طلبات الزائرين</button>
                                <button type="button" class="btn btn-danger btn-filter" data-target="cancelado">حجوزات اليوم</button>
                            </div>
                        </div>
                        <div class="table-container">
                            <table class="table table-filter">
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM `bookings` ORDER BY `bookings`.`id` DESC limit 7";
                                    $array = array();
                                    $rows = $class->sql_feth($Data_communication, $query, $array);
                                    foreach ($rows as $value):
                                        $names = $value['names'];
                                        $email = $value['email'];
                                        $phone = $value['phone'];
                                        $addres = $value['addres'];                            
                                    ?>
                                    <tr data-status="pagado">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox1">
                                                <label for="checkbox1"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://image.flaticon.com/icons/svg/236/236832.svg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right"><?php echo $value['check_in_date']; ?></span>
                                                    <h4 class="title">
                                                            <?php echo $names; ?>
                                                        <span class="pull-right pagado">(<?php echo $phone; ?>)</span>
                                                    </h4>
                                                    <p class="summary"><?php echo $addres; ?></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                        endforeach;          
                        ?>
   
                                    
                                    
                                    <?php
                        $today = date('Y-m-d');
                        $sql = "SELECT * FROM `bookings` where di = ? ";
                        $array = array($today);
                        $rows = $a->sql_feth($Data_communication, $sql, $array);
                        foreach ($rows as $value):

                        $id = $value['id'];
                        $names = $value['names'];
                        $Number_nights = $value['Number_nights'];
                        $Number_individuals = $value['Number_individuals'];
                        $email = $value['email'];
                        $phone = $value['phone'];
                        $addres = $value['addres'];
                        $check_in_date = $value['check_in_date'];
                        $check_out_date = $value['check_out_date'];
                        ?>
                       
                                    <tr data-status="cancelado">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox2">
                                                <label for="checkbox2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://image.flaticon.com/icons/svg/236/236832.svg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right"><?php echo $check_in_date; ?></span>
                                                    <h4 class="title">
                                                            <?php echo $names; ?>
                                                        <span class="pull-right cancelado">(<?php echo $phone; ?>)</span>
                                                    </h4>
                                                    <p class="summary"><?php echo $addres; ?></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>    
                                    
                                                            <?php
                                    $query = "SELECT * FROM `visits` ORDER BY `visits`.`id` DESC limit 7";
                                    $array = array();
                                    $rows = $class->sql_feth($Data_communication, $query, $array);
                                    foreach ($rows as $value):
                                        $names = $value['Name'];
                                        $email = $value['Email'];
                                        $ID_Number = $value['ID_Number'];
                                        $Suggestion = $value['Suggestion'];                            
                                    ?>
                                    <tr data-status="pendiente" class="selected">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox4" checked>
                                                <label for="checkbox4"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="star star-checked">
                                                <i class="glyphicon glyphicon-star"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://image.flaticon.com/icons/svg/236/236832.svg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                    <h4 class="title">
                                                            <?php echo $names; ?>
                                                        <span class="pull-right pagado">(<?php echo $ID_Number; ?>)</span>
                                                    </h4>
                                                    <p class="summary"><?php echo $Suggestion; ?></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php   endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
</div>