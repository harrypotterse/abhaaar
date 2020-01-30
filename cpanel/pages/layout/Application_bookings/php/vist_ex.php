<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">انتهاء العضويات اليوم</h4>
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
                            <th>رقم العضوية</th>
                            <th>الصورة الشخصية</th>
                        </tr>
                    </thead>
                    <tbody style="
                           font-family: 'Cairo', sans-serif !important;
                           ">
                               <?php
                               $today = date('Y-m-d');
                               $sql = "SELECT * FROM `visits` where Membership_expiration_ = ? ";
                               $array = array($today);
                               $rows = $a->sql_feth($Data_communication, $sql, $array);
                               foreach ($rows as $value) {
                                   $id = $value['id'];
                                   $names = $value['Name'];
                                   $Email = $value['Email'];
                                   $Contact_Data = $value['Contact_Data'];
                                   $Membership_No = $value['Membership_No'];
                                   $picture = $value['picture'];
                             
                                   //===================================================================  
                                   $url = "./../../../../ajax/UP/$picture"
                                   ?>
                            <tr>
                                <td><span class="label label-danger"><?php echo $names; ?></td>
                                <td><span class="label label-success"><?php echo $Email; ?></td>
                                <td><span class="label label-primary"><?php echo $Membership_No; ?></td>
                                <td style="padding: 0px;margin: 0px;width: 13%;"><img   width="150" style=";"  src="<?php echo $url; ?>" class="img-responsive  " alt="Cinque Terre"></td>
                            </tr>
                            <?php
                               }
                            ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>