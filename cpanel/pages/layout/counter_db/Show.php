7<?php
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
$a = new Achieve();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>أحصائيات الزيارات</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php require_once '../Component/css.php'; ?>
        <link href="css/datatabel.css" rel="stylesheet" type="text/css"/>
        <link href="../index/css/index.css" rel="stylesheet" type="text/css"/>
                <link rel="shortcut icon" type="image/x-icon" href="../icons8-code-64.png">
    </head>
    <body class="skin-blue fixed sidebar-mini" dir="rtl">
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php require_once '../Component/nav.php'; ?>
            <div class="space" style="margin-top: 31px;">      
            </div>
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">                   
                        <div class="container">
                            <div class="row">     
                                <table class="table table-bordered">
                                    <thead style="
                                           background: #5cb85c;
                                           color: white;
                                           font-size: 17px;
                                           border-color: #5cb85c;
                                           ">
                                        <tr>
                                            <th style="
                                                text-align: center;
                                                ">المركز</th>
                                            <th style="
                                                text-align: center;
                                                ">النسبة المئوية</th>
                                            <th style="
                                                text-align: center;
                                                "> الزيارات</th>
                                                       <th style="
                                                text-align: center;
                                                "> أخر زيارة</th>
                                        </tr>
                                    </thead>
                                    <tbody style="
                                           background: white;
                                           text-align: center;
                                           font-size: 16px;
                                           font-weight: 700;
                                           ">
                                               <?php
                                               $sql = "SELECT * FROM `counter_db`  ORDER BY `counter_db`.`count` DESC limit 1  ";
                                               $sql2 = "SELECT * FROM `counter_db` ORDER BY `counter_db`.`count` DESC";

                                               $sth = $Data_communication->prepare($sql);
                                               $sth->execute();
                                               $sth->bindColumn('count', $count);
                                               $result = $sth->fetchAll();
                                               (int) $count;
                                               $int = 0;
                                               $array = array();
                                               $rows = $a->sql_feth($Data_communication, $sql2, $array);
                                               foreach ($rows as $value) :
                                                   $int++;
                                                   $id = $value['id'];
                                                   $pag = $value['pag'];
                                                   $label = $value['label'];
                                                   $count_lab = $value['count'];
                                                   $time = $value['time'];
                                                   ?>



                                            <tr>
                                                <td>   
                                                    <?php echo $int; ?>
                                                </td>
                                                <td> 
                                                    <div class="progress">
                                                        <div class="<?php echo $label; ?>" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($count_lab / $count * 100) ?>%">
                                                            <span class="sr-only">40% Complete (success)</span>
                                                        </div>
                                                        <span class="progress-type"><?php echo $pag; ?></span>
                                                        <span class="progress-completed"><?php echo round($count_lab / $count * 100) ?>%</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php echo $count_lab; ?>
                                                </td>
                                                <td>
                                                    <?php echo $a->time_since($time); ?>
                                                </td>
                                            </tr>


                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>    
                <br>
                <br>
                <br>
                <?php require_once '../Othercomponents/del_box.php'; ?>
            </div><!-- /.content-wrapper -->
            <?php require_once '../Component/footer.php'; ?>
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <?php require_once '../Component/js.php'; ?>
        <script>
            $(document).on("click", '.del', function (event) {
                var id = $(this).attr('id');
                var Image = $(this).attr('Image');
                $('#delete').modal('show');
                $("#del2").click(function () {
                    $.post('./phpajax/Delete_the_file.php', {id: id, Image: Image}, function (data) {
                        location.reload();
                    });
                });
            });
        </script>
  <script src="../../js/Shortcuts.js" type="text/javascript"></script>
  
    </body>
</html>
