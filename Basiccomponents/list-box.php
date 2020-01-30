<div class="sc-list-box style-01" id="features">
    <?php
                      

    ?>
    <div class="container">
        <div class="list-box-slider owl-carousel owl-theme">
            <?php
            $c = $class->coulam_name($Data_communication, "features");
            $sql_lng = set_lang("SELECT * FROM `features` where Language = 'English'  ", "SELECT * FROM `features` where Language = 'Arabic' ");
            $array = array();
            $rows = $class->sql_feth($Data_communication, $sql_lng, $array);
            foreach ($rows as $value):
                $id = $value[$c[0]];
                $Language = $value[$c[1]];
                $Icons = $value[$c[2]];
                $Title = $value[$c[3]];
                $Explanation = $value[$c[4]];
                ?>
                <div class="box-item">
                    <img  style="width: 20%;"  src="<?php echo $Icons; ?>">
                    <h5 class="box-title"><?php echo $Title; ?></h5>
                    <p class="description"><?php echo $Explanation; ?></p>
                    <a href="rooms.html" class="btn-link"></a>
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</div>