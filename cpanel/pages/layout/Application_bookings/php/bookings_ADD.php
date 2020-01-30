<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">عدد الحجوزات بالنسبة للعناوين</h4>
                <h3 style="text-align: center"><span class="label label-danger">Today  <?php
                        echo $today = date('Y-M-d');
                        ;
                        ?></h3>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>العنوان</th>
                            <th>عدد الحجوزات</th>
                        </tr>
                    </thead>
                    <tbody style="
                           font-family: 'Cairo', sans-serif !important;
                           ">
                               <?php
                               $sql = "SELECT COUNT(*) AS `Rows`, `addres` FROM `bookings` GROUP BY `addres` ORDER BY `addres` ";
                               $array = array();
                               $rows = $a->sql_feth($Data_communication, $sql, $array);
                               foreach ($rows as $value):
                                   $Rows1= $value['Rows'];
                                   $addres1= $value['addres'];
                                   ?>
                            <tr style="
    height: 55px;
">
                                <td><span class="label label-danger" ><?php echo $addres1; ?></td>
                                <td><span class="label label-success"><?php echo $Rows1; ?></td>
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