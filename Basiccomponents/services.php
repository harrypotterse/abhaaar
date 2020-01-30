<div class="group-destination" id="services">
    <div class="sc-content-overlay">
        <div class="container">
            <div class="empty-space"></div>
            <div class="sc-heading style-01 text-center">
                <h3 class="title"><?php echo $index_pag->statement10; ?></h3>
            </div>
            <div class="sc-posts style-01 auto-height">
                <div class="item row">
                    <?php
                    $c = $class->coulam_name($Data_communication, "services");
                    $sql_lng = set_lang("SELECT * FROM `services` where Language = 'English'  ", "SELECT * FROM `services` where Language = 'Arabic' ");
                    $array = array();
                    $rows = $class->sql_feth($Data_communication, $sql_lng, $array);
                    foreach ($rows as $value):
                        $id = $value[$c[0]];
                        $Language = $value[$c[1]];
                        $Title = $value[$c[2]];
                        $Service = $value[$c[3]];
                        $Explanation = $value[$c[4]];
                        $Image = $value[$c[5]];
                        $Page = password_hash("services", PASSWORD_DEFAULT);
                        ?>
                        <div class="post col-sm-6 col-md-4">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="services-single.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>"><img src="cpanel/pages/layout/services/uplod/<?php echo $Image; ?>" alt=""></a>
                                </div>
                                <div class="content">
                                    <h3 class="title">   <a href="services-single.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>"><?php echo $Title; ?></a></h3>
                                    <div class="short-text"> <?php echo $Service; ?></div>
                                    <div class="summary"><?php echo $Explanation; ?></div>
                                    <a href="services-single.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>" class="read-more"></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>