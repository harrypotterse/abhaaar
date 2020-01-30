
<div class="row" >
    <div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="box" style="
                 border: navajowhite;
                 ">
                <div class="box-header">
                    <h3 class="box-title">اخر الاضافات</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <?php
                        require_once '../../../../Classes/Achieve.php';
                        require_once '../../../../FileConnection/Data_connection.php';
                        $a = new Achieve();
                        $SQL = "SELECT * FROM `latest_additions` ORDER BY `latest_additions`.`id` DESC limit 20";
                        $array = array();
                        $rows = $a->sql_feth($Data_communication, $SQL, $array);
                        foreach ($rows as $key):
                            $id = $key['id'];
                            $Section = $key['Section'];
                            $Time = $key['Time'];
                            $label = $key['label'];
                            ?>         


                            <tr>
                                <td><?php echo $id; ?></td>
                                <td></td>
                                <td><span class="<?php echo $label; ?>"><?php echo $Section; ?></span></td>
                                <td><?php echo $a->time_since($Time); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</div>
</div>
<br>
<br>