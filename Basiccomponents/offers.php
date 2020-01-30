<div class="h1-rooms" id="offersa">
    <div class="sc-content-overlay">
        <div class="empty-space"></div>
        <div class="container">
            <div class="sc-heading style-01 text-center">
                <h3 class="title"><?php echo $index_pag->statement16; ?></h3>
                <p>
                    اضافة نص "<br>
                    للاستعلام يرجي الاتصال علي :<br>
                    0126563030<br>
                    0598999888<br>
                </p>
            </div>
            <div class="sc-rooms style-01">
                <div class="rooms-content layout-grid style-01">
                    <div class="row">
                        <?php
                        $c = $class->coulam_name($Data_communication, "best_offers");
                        $sql_lng = set_lang("SELECT * FROM `best_offers` where Language = 'English'  ", "SELECT * FROM `best_offers` where Language = 'Arabic' ");
                        $array = array();
                        $rows = $class->sql_feth($Data_communication, $sql_lng, $array);
                        foreach ($rows as $value):
                            $id = $value[$c[0]];
                            $Language = $value[$c[1]];
                            $Title = $value[$c[2]];
                            $Coin = $value[$c[3]];
                            $price = $value[$c[4]];
                            $Image = $value[$c[5]];
                            $Explanation = $value[$c[6]];
                            $Page = password_hash("best_offers", PASSWORD_DEFAULT);
                            ?>
                            <div class="room col-sm-4 clearfix">
                                <div class="room-item">
                                    <div class="room-media">

                                        <a href="offers-single.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>"><img src="cpanel/pages/layout/best_offers/uplod/<?php echo $Image; ?>" alt=""></a>
                                    </div>
                                    <div class="room-summary">
                                        <h3 class="room-title">
                                            <a href="offers-single.php?id=<?php echo $id; ?>&Page=<?php echo $Page ?>"><?php echo $Title; ?></a>
                                        </h3>
                                        <div class="room-price"><?php echo $index_pag->statement23; ?>: <span class="price"><?php echo $price; ?> <?php echo $Coin; ?></span></div>
                                        <p class="room-description"> <?php echo $Explanation; ?></p>
                                        <div class="room-meta clearfix">
                                            <div class="comment-count">1 Reviews</div>
                                            <div class="rating"><span class="star"></span>(5/5)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endforeach;
                        ?>
                    </div>
                    <div class="text-center">
                        <div class="wd wd-book-room text-center">
                            <a href="offers.pdf" target="_blank" class="book-room2"><?php echo $index_pag->statement16; ?></a>
                            <a href="#" class="book-room"><?php echo $index_pag->statement17; ?></a>
                            <div id="form-popup-room" class="form-popup-room">
                                <div class="popup-container" style="top: 132px;">
                                    <a href="#" class="close-popup"><i class="ion-android-close"></i></a>
                                    <form  action="ajax/Bookings.php" class="hotel-popup-results" id="uploadImage" method="post">
                                        <div class="room-head">
                                            <h3 class="room-title"><?php echo $index_pag->statement24; ?></h3>
                                            <p class="description"><?php echo $index_pag->statement25; ?></p>
                                            <p></p>
                                        </div>
                                        <div class="search-room-popup">
                                            <ul class="form-table clearfix">
                                                <li class="form-field">
                                                    <input type="text" name="name" id="name" required="" class="name" placeholder="<?php echo $index_pag->statement26; ?>">
                                                </li>
                                                <li class="form-field">
                                                    <input type="email" name="email" id="email" required="" class="email" placeholder="<?php echo $index_pag->statement27; ?>">
                                                </li>
                                                <li class="form-field">
                                                    <input type="number" name="Number_nights" id="name" required="" class="name" placeholder="<?php echo $index_pag->statement28; ?>">
                                                </li>
                                                <li class="form-field">
                                                    <input type="number" name="Number_individuals" id="email" required="" class="email" placeholder="<?php echo $index_pag->statement29; ?>">
                                                </li>
                                                <li class="form-field">
                                                    <input type="tel" name="phone" id="phone" required="" class="phone" placeholder="<?php echo $index_pag->statement30; ?>">
                                                </li>
                                                <li class="form-field">
                                                    <input type="text" name="add" id="add" required="" class="add" placeholder="<?php echo $index_pag->statement31; ?>">
                                                </li>
                                                <li class="form-field">
                                                    تاريخ القدوم    <input type="date" name="check_in_date" id="popup_check_in_date" required="" class="check_in_date hasDatepicker" placeholder="<?php echo $index_pag->statement33; ?>">
                                                </li>
                                                <li class="form-field">
                                                    تاريخ المغادرة:  <input type="date" name="check_out_date" id="popup_check_out_date"  required="" class="check_out_date  hasDatepicker" placeholder="<?php echo $index_pag->statement34; ?>">
                                                </li>
                                                <li class="form-field room-submit">
                                                    <input type="submit" style="margin-bottom: 10px;" class="submit" id="check_date"   value="<?php echo $index_pag->statement32; ?>">
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                    <div id="targetLayer">                 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-space"></div>
    </div>
</div>