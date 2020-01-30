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
        <title>معرض الصور </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php require_once '../Component/css.php'; ?>
        <link href="css/add.css" rel="stylesheet" type="text/css"/>
        <link href="css/datatabel.css" rel="stylesheet" type="text/css"/>
        <style>
            span.des {
                color: #8a9292;
            }

            .select-css {
                display: block;
                font-size: 16px;
                font-family: 'Cairo', sans-serif;
                font-weight: 700;
                color: #444;
                line-height: 1.3;
                padding: .6em 1.4em .5em .8em;
                width: 100%;
                max-width: 100%; 
                box-sizing: border-box;
                margin: 0;
                border: 1px solid #aaa;
                box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
                border-radius: .5em;
                -moz-appearance: none;
                -webkit-appearance: none;
                appearance: none;
                background-color: #fff;
                background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
                    linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
                background-repeat: no-repeat, repeat;
                background-position: right .7em top 50%, 0 0;
                background-size: .65em auto, 100%;
            }
            .select-css::-ms-expand {
                display: none;
            }
            .select-css:hover {
                border-color: #888;
            }
            .select-css:focus {
                border-color: #aaa;
                box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
                box-shadow: 0 0 0 3px -moz-mac-focusring;
                color: #222; 
                outline: none;
            }
            .select-css option {
                font-weight:normal;
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
                    <div class="progress " >
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0">Raise the status of the image </div>
                    </div>
                    <form id="uploadImage" action="phpajax/add.php" method="post">
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <div class="hover08 column">
                                        <div>
                                            <figure>     <img src="img/2.png" alt="" class="img-thumbnail"/></figure></div></div>

                                  <?php require_once '../Othercomponents/info_linke.php'; ; ?> 
                                    <div class="form-group">
                                        <label class="control-label">المعرض </label>
                                        <select class="form-control Language select-css" name="idg" id="sel1" style="height: 44px;font-size: 16px;font-weight: 600;">
                                            <?php
                                             try {
                                                 
                                             
                                            $query = "select * from pictures";
                                            $array = array();
                                            $rows = $class->sql_feth($Data_communication, $query, $array);
                                            foreach ($rows as $value):
                                                $id = $value['id'];
                                                $statement1 = $value['Title'];
                                                ?>
                                                <option value="<?php echo $id; ?>"><?php echo $statement1; ?></option>
                                            <?php endforeach; ?>
                                            <?php
                            } catch (PDOException $ex) {
                                echo $ex;
                                                 
                                             }                
                            ?>
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
