<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">حجوزات اليوم</h4>
                <h3 style="text-align: center"><span class="label label-danger">Today  <?php
                        echo $today = date('Y-M-d');
                        ;
                        ?></h3>
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
                    <tbody style="
                           font-family: 'Cairo', sans-serif !important;
                           ">
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
                            <tr style="
                                height: 55px;
                                ">
                                <td><span class="label label-danger"><?php echo $names; ?></td>
                                <td><span class="label label-success"><?php echo $email; ?></td>
                                <td><span class="label label-primary"><?php echo $Number_nights; ?></td>
                                <td><span class="label label-danger"><?php echo $Number_individuals; ?></td>
                            </tr>
                            <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>