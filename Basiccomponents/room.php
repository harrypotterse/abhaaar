<div class="h4-group-check-room" id="offers">
    <div class="container w-1192">
        <div class="sc-travel style-01">
            <div class="row">
                <?php
                $c = $class->coulam_name($Data_communication, "offers");
                  $sql_lng = set_lang("SELECT * FROM `offers` where Language = 'English'  ", "SELECT * FROM `offers` where Language = 'Arabic' ");
                $array = array();
                $rows = $class->sql_feth($Data_communication, $sql_lng, $array);
                foreach ($rows as $value):
                    $id = $value[$c[0]];
                    $Language = $value[$c[1]];
                    $Title = $value[$c[2]];
                    $Offer = $value[$c[3]];
                    $Explanation = $value[$c[4]];
                    $Image = $value[$c[5]];
                    ?>
                    <div class="item col-sm-3">
                        <div class="content">
                            <img src="cpanel/pages/layout/offers/uplod/<?php echo $Image; ?>" alt="">
                               <div class="inner">
                                <div class="country"><?php echo $Title?></div>
                                <div class="name"><a href="#"><?php echo $Offer; ?></a></div>
                                <div class="rating"><span class="rating-star"></span></div>
                                <div class="info"> <?php echo $Explanation;?></div>
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