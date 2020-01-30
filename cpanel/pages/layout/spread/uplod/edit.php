<?php
require_once '../../../../Classes/Achieve.php';
require_once '../../../../FileConnection/Data_connection.php';
try {
    $class = new Achieve();
    $query = "select * from index_pag  ";
    $array = array();
    $rows = $class->sql_feth($Data_communication, $query, $array);

    foreach ($rows as $value) :

        $component1 = $value['component1'];
        $component2 = $value['component2'];
        $component3 = $value['component3'];
        $component4 = $value['component4'];
        $component5 = $value['component5'];
        $component6 = $value['component6'];
        $component7 = $value['component7'];
        $component8 = $value['component8'];
        $component9 = $value['component9'];
        $component10 = $value['component10'];
        $component11 = $value['component11'];
        $component12 = $value['component12'];
        $component13 = $value['component13'];
        $component14 = $value['component14'];
        $component15 = $value['component15'];
        $component16 = $value['component16'];
        $component17 = $value['component17'];
        $component18 = $value['component18'];
        $component19 = $value['component19'];
        $component20 = $value['component20'];
        $component21 = $value['component21'];
        $component22 = $value['component22'];
        $component23 = $value['component23'];
        $component24 = $value['component24'];
    endforeach;
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE 2 | Fixed Layout</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php require_once '../Component/css.php'; ?>
        <link href="css/add.css" rel="stylesheet" type="text/css"/>

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
                            صفحة المدرسة 

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

                        <form role="form">
                            <div class="row setup-content" id="step-1">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index/1.JPG" class="img-thumbnail" alt=""/>
                                        <h3> Step 1</h3>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component" name="component1" value="<?php echo $component1; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component"  name="component2" value="<?php echo $component2; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component3"><?php echo $component3; ?></textarea>
                                        </div>      
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component4"><?php echo $component4; ?></textarea>
                                        </div>      
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component" name="component5" value="<?php echo $component5; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-2">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index/2.JPG" class="img-thumbnail" alt=""/>

                                        <h3> Step 2</h3>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component" name="component6" value="<?php echo $component6; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component" name="component7" value="<?php echo $component7; ?>" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-3">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index/3.JPG" class="img-thumbnail" alt=""/>
                                        <h3> Step 2</h3>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component" name="component8" value="<?php echo $component8; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component" name="component9" value="<?php echo $component9; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component10"><?php echo $component10; ?></textarea>
                                        </div>      
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component11"><?php echo $component11; ?></textarea>
                                        </div>    
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle" placeholder=" component"  name="component12"  value="<?php echo $component12; ?>"/>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-4">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index/4.JPG" class="img-thumbnail" alt=""/>

                                        <h3> Step 2</h3>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component"  name="component13"  value="<?php echo $component13; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component"  name="component14" value="<?php echo $component14; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-5">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index/5.JPG" class="img-thumbnail" alt=""/>

                                        <h3> Step 2</h3>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component" name="component15"  value="<?php echo $component15; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component" name="component16"  value="<?php echo $component16; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component17"><?php echo $component17; ?></textarea>
                                        </div>      
                                        <div class="form-group">
                                            <label>component </label>
                                            <textarea class="form-control News" rows="3" placeholder="معلومات عن ..." style="font-size: 18px;height:150px;" name="component18"><?php echo $component18; ?></textarea>
                                        </div>      

                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-6">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index/6.JPG" class="img-thumbnail" alt=""/>

                                        <h3> Step 2</h3>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component"  name="component20"  value="<?php echo $component20; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component"  name="component21"  value="<?php echo $component21; ?>" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-7">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index/7.JPG" class="img-thumbnail" alt=""/>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component"  name="component21"  value="<?php echo $component22; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component"  name="component23"  value="<?php echo $component23; ?>" />
                                        </div>

                                        <h3> Step 2</h3>

                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-8">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <img src="img/index/8.JPG" class="img-thumbnail" alt=""/>

                                        <h3> Step 2</h3>
                                        <div class="form-group">
                                            <label class="control-label">component</label>
                                            <input maxlength="100" type="text" required="required" class="form-control input-lg NewsTitle"  placeholder=" component" name="component24"  value="<?php echo $component24; ?>"   />
                                        </div>
                                        <button class="btn btn-primary nextBtn btn-lg btn-block" type="button" >Next</button>
                                    </div>
                                </div>
                            </div>
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
