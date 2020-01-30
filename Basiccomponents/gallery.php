<div class="sc-gallery style-01" id="pictures">
    <div class="gallery-slider owl-carousel owl-theme">
        <?php
        $c = $class->coulam_name($Data_communication, "pictures");
        $sql_lng = set_lang("SELECT * FROM `pictures` where Language = 'English' ORDER BY `pictures`.`id` DESC  ", "SELECT * FROM `pictures` where Language = 'Arabic'  ORDER BY `pictures`.`id` DESC");
        $array = array();
        $rows = $class->sql_feth($Data_communication, $sql_lng, $array);
        foreach ($rows as $value):
            $id = $value['id'];
            $Language = $value['Language'];
            $Image = $value['Image'];
            $Title = $value['Title'];
            ?>      
            <div class="item">
                <div class="gallery">
                    <a href="#gallery-<?php echo $id; ?>" class="btn-gallery"><img src="cpanel/pages/layout/pictures/uplod/<?php echo $Image; ?>" alt=""></a>
                    <div id="gallery-<?php echo $id; ?>" class="hidden">
                        <?php
                        $c = $class->coulam_name($Data_communication, "gallery");
                        $query = "SELECT * FROM `gallery` where idg = ? ";
                        $array = array($id);
                        $rows = $class->sql_feth($Data_communication, $query, $array);
                        foreach ($rows as $value):
                            $ids = $value[$c[0]];
                            $Gallery = $value[$c[2]];
                            ?>
                            <a  href="cpanel/pages/layout/gallery/uplod/<?php echo $Gallery; ?>"><img src="cpanel/pages/layout/gallery/uplod/<?php echo $Gallery; ?>" alt=""></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="content">
                    <h4 class="title"><a href="#"><?php echo $Title; ?></a></h4>
                    <span class="count"><?php echo count_comant($Data_communication, $id) ?> <?php echo $index_pag->statement35; ?></span>
                </div>
            </div>
            <?php
        endforeach;
        ?>      

    </div>
</div>