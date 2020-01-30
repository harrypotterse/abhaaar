<div class="h1-bg-testimonial" id="testimonial" style="background-image: url('<?php echo $index_pag->statement39; ?>');">
    <div class="sc-content-overlay">
        <div class="container rectangle-overlay">
            <div class="sc-testimonials style-01">
                <h3 class="heading"><?php echo $index_pag->statement19; ?><br> <?php echo $index_pag->statement20; ?></h3>
                <div class="testimonial-slider" data-itemsvisible="3" data-nav="false">
                    <?php
                    $c = $class->coulam_name($Data_communication, "customer_opinions");
                    $sql_lng = set_lang("SELECT * FROM `customer_opinions` where Language = 'English'  ", "SELECT * FROM `customer_opinions` where Language = 'Arabic' ");
                    $array = array();
                    $rows = $class->sql_feth($Data_communication, $sql_lng, $array);
                    foreach ($rows as $value):
                        $id = $value[$c[0]];
                        $Explanation = $value[$c[4]];
                        $Name = $value[$c[2]];
                        $Function = $value[$c[3]];
                        ?>
                        <div class="item">
                            <div class="content">
                                
                                <div class="rating-star"></div>
                                <div class="description">
                                    <?php echo $Explanation; ?>
                                </div>
                                <div class="user-info">
                                    <h4 class="name"><?php echo $Name; ?></h4>
                                    <div class="regency"><?php echo $Function; ?></div>
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