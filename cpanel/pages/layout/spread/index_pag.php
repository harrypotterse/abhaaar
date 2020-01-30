<?php
require_once '../../../../Classes/Achieve.php';
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Component.php';
$pag = new Component();
$sql = "SELECT * FROM `page_components` where id=1";
$row = $pag->fetchObject_SQL($Data_communication, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> الصفحة الرئسية</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php require_once '../Component/css.php'; ?>
        <link href="css/add.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" type="image/x-icon" href="../icons8-code-64.png">
        <style>
            textarea.form-control.News {
                background: #3c8dbc;
                color: white;
                line-height: 36px;
                transition: 0.3s;
                opacity: 0.6;
            }
            textarea.form-control.News:hover {
                background: #3c8dbc;
                color: white;
                line-height: 36px;
                opacity: 1

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
                    <section class="content-header">
                        <h1>
                            الصفحة الرئسية

                        </h1>
                    </section>
                    <br>
                    <div class="col-lg-offset-2 col-lg-10 col-lg-offset-2">
                        <!--                        ==============================================================-->

                        <br>
                        <!--                        ==============================================================-->

                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                    <p>Step 1</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-success btn-circle" disabled="disabled">2</a>
                                    <p>Step 2</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-info btn-circle" disabled="disabled">3</a>
                                    <p>Step 3</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-info btn-circle" disabled="disabled">4</a>
                                    <p>Step 4</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-5" type="button" class="btn btn-warning btn-circle" disabled="disabled">5</a>
                                    <p>Step 5</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-6" type="button" class="btn btn-warning btn-circle" disabled="disabled">6</a>
                                    <p>Step 6</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-7" type="button" class="btn btn-danger btn-circle" disabled="disabled">7</a>
                                    <p>Step 7</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-8" type="button" class="btn btn-danger btn-circle" disabled="disabled">8</a>
                                    <p>Step 8</p>
                                </div>

                            </div>
                        </div>
                        <!--                        ==============================================================-->


                        <form role="form" action="phpajax/index_pag.php" id="uploadImage"  method="post">

                            <div class="row setup-content" id="step-1">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index_pag/1.png" class="img-thumbnail" alt=""/>
                                        <h3> Step 1</h3>
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component1"><?php echo $row->statement1; ?></textarea>
                                        </div>    
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component2"><?php echo $row->statement2; ?></textarea>
                                        </div>    
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component3"><?php echo $row->statement3; ?></textarea>
                                        </div>  
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component4"><?php echo $row->statement4; ?></textarea>
                                        </div> 
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component5"><?php echo $row->statement5; ?></textarea>
                                        </div>    
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component6"><?php echo $row->statement6; ?></textarea>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-2">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index_pag/2.png" class="img-thumbnail" alt=""/>

                                        <h3> Step 2</h3>

                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component7"><?php echo $row->statement7; ?></textarea>
                                        </div>   
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component8"><?php echo $row->statement8; ?></textarea>
                                        </div>    
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component9"><?php echo $row->statement9; ?></textarea>
                                        </div>    




                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-3">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index_pag/3.png" class="img-thumbnail" alt=""/>
                                        <h3> Step 3</h3>
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component10"><?php echo $row->statement10; ?></textarea>
                                        </div> 

                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-4">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index_pag/4.png" class="img-thumbnail" alt=""/>

                                        <h3> Step 4</h3>

                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component11"><?php echo $row->statement11; ?></textarea>
                                        </div> 
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component12"><?php echo $row->statement12; ?></textarea>
                                        </div> 
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component13"><?php echo $row->statement13; ?></textarea>
                                        </div>  
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component14"><?php echo $row->statement14; ?></textarea>
                                        </div>   
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component15"><?php echo $row->statement15; ?></textarea>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-5">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index_pag/5.png" class="img-thumbnail" alt=""/>

                                        <h3> Step 5</h3>
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component16"><?php echo $row->statement16; ?></textarea>
                                        </div>   
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component17"><?php echo $row->statement17; ?></textarea>
                                        </div>   
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component18"><?php echo $row->statement18; ?></textarea>
                                        </div>  

                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-6">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index_pag/6.png" class="img-thumbnail" alt=""/>

                                        <h3> Step 6</h3>

                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component19"><?php echo $row->statement19; ?></textarea>
                                        </div>   
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component20"><?php echo $row->statement20; ?></textarea>
                                        </div>   

                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-7">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index_pag/7.png" class="img-thumbnail" alt=""/>
                                        <h3> Step 7</h3>
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component21"><?php echo $row->statement21; ?></textarea>
                                        </div>  



                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-8">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index_pag/8.png" class="img-thumbnail" alt=""/>
                                        <h3> Step 8</h3>
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component22"><?php echo $row->statement22; ?></textarea>
                                        </div>  
                                        <input type="submit" class="btn btn-primary btn-block btn-lg" value="تحديث مكونات الصفحة"></input>
                                    </div>
                                </div>
                            </div>

                            <div id="targetLayer" style="
                                 display:none;
                                 "></div>
                        </form>


                    </div>
                </div>

                <?php require_once '../Othercomponents/lastadd.php'; ?>

            </div><!-- /.content-wrapper -->
            <?php require_once '../Component/footer.php'; ?>

        </div><!-- ./wrapper -->

        <?php require_once '../Component/js.php'; ?>
        <script src="js/jquery.form.js" type="text/javascript"></script>
        <script src="js/add.js" type="text/javascript"></script>
        <style>
            .stepwizard-step p {
                margin-top: 10px;
            }

            .stepwizard-row {
                display: table-row;
            }

            .stepwizard {
                display: table;
                width: 100%;
                position: relative;
            }

            .stepwizard-step button[disabled] {
                opacity: 1 !important;
                filter: alpha(opacity=100) !important;
            }

            .stepwizard-row:before {
                top: 14px;
                bottom: 0;
                position: absolute;
                content: " ";
                width: 100%;
                height: 1px;
                background-color: #ccc;
                z-order: 0;

            }

            .stepwizard-step {
                display: table-cell;
                text-align: center;
                position: relative;
            }

            .btn-circle {
                width: 30px;
                height: 30px;
                text-align: center;
                padding: 6px 0;
                font-size: 12px;
                line-height: 1.428571429;
                border-radius: 15px;
            }
        </style>
        <script>
            $(document).ready(function () {

                var navListItems = $('div.setup-panel div a'),
                        allWells = $('.setup-content'),
                        allNextBtn = $('.nextBtn');

                allWells.hide();

                navListItems.click(function (e) {
                    e.preventDefault();
                    var $target = $($(this).attr('href')),
                            $item = $(this);

                    if (!$item.hasClass('disabled')) {
                        navListItems.removeClass('btn-primary').addClass('btn-default');
                        $item.addClass('btn-primary');
                        allWells.hide();
                        $target.show();
                        $target.find('input:eq(0)').focus();
                    }
                });

                allNextBtn.click(function () {
                    var curStep = $(this).closest(".setup-content"),
                            curStepBtn = curStep.attr("id"),
                            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                            curInputs = curStep.find("input[type='text'],input[type='url']"),
                            isValid = true;

                    $(".form-group").removeClass("has-error");
                    for (var i = 0; i < curInputs.length; i++) {
                        if (!curInputs[i].validity.valid) {
                            isValid = false;
                            $(curInputs[i]).closest(".form-group").addClass("has-error");
                        }
                    }

                    if (isValid)
                        nextStepWizard.removeAttr('disabled').trigger('click');
                });

                $('div.setup-panel div a.btn-primary').trigger('click');
            });

        </script>

    </body>
</html>
