<div class="sc-posts style-01" id="blogs">
    <div class="row">
        <?php
        $c = $class->coulam_name($Data_communication, "blog");
        $sql_lng = set_lang("SELECT * FROM `blog` where Language = 'English' AND  Type='Basic' ORDER BY `blog`.`id` DESC  limit 1  ", "SELECT * FROM `blog` where Language = 'Arabic' AND  Type='Basic' ORDER BY `blog`.`id` DESC  limit 1 ");
        $array = array();
        $rows = $class->sql_feth($Data_communication, $sql_lng, $array);
        foreach ($rows as $value):
            $id = $value[$c[0]];
            $Language = $value[$c[1]];
            $Author = $value[$c[2]];
            $Tags = $value[$c[3]];
            $Section = $value[$c[4]];
            $Date = $value[$c[5]];
            $Title = $value[$c[6]];
            $Explanation = $value[$c[7]];
            $Image = $value[$c[8]];
            $Page = password_hash("blog", PASSWORD_DEFAULT);
            ?> 
            <div class="item-first col-sm-12 col-md-6">
                <div class="post col-sm-12 col-md-12">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="blog-single.php?id=<?php echo $id_blog; ?>&Page=<?php echo $Page ?>"><img src="cpanel/pages/layout/blog/uplod/<?php echo $Image; ?>" alt=""></a>
                        </div>
                        <div class="content">
                            <div class="category"><a href="#"><?php echo $Tags; ?> </a></div>
                            <h3 class="title"> <a href="blog-single.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>"><?php echo $Title; ?></a></h3>
                            
                            <div class="date"><i class="ion-android-calendar"></i><?php echo $Date; ?></div>
                            <div class="summary"><?php echo $Explanation; ?></div>
                            <a href="blog-single.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>"><?php echo $index_pag->statement36; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endforeach;
        ?>
        <div class="item col-sm-12 col-md-6">
            <?php
            $c = $class->coulam_name($Data_communication, "blog");
            $sql_lng = set_lang("SELECT * FROM `blog` where Language = 'English' AND Type='ordinary' ORDER BY `blog`.`id` DESC limit 4 ", "SELECT * FROM `blog` where Language = 'Arabic' AND Type='ordinary' ORDER BY `blog`.`id` DESC limit 4");
             $sql_lng;
            $array = array();
            $rows = $class->sql_feth($Data_communication, $sql_lng, $array);
            foreach ($rows as $value):
                $id = $value[$c[0]];
                $Language = $value[$c[1]];
                $Author = $value[$c[2]];
                $Tags = $value[$c[3]];
                $Section = $value[$c[4]];
                $Date = $value[$c[5]];
                $Title = $value[$c[6]];
                $Explanation = $value[$c[7]];
                $Image = $value[$c[8]];
                ?>
                <div class="post col-sm-6 col-md-6">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="blog-single.html"><img src="cpanel/pages/layout/blog/uplod/<?php echo $Image; ?>" alt=""></a>
                        </div>
                        <div class="content">
                            <div class="category"><a href="#"><?php echo $Tags; ?></a></div>
                            <h3 class="title">   <a href="blog-single.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>"><?php echo $Section; ?></a></h3>
                            <div class="summary"><?php echo $Explanation; ?></div>
                            <a style="color:white"   href="blog-single.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>"><?php echo $index_pag->statement36; ?></a>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</div>