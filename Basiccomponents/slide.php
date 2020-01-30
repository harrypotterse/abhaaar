<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullscreen-container no-mask-bg" data-alias="home-3" data-source="gallery" style="padding:0px;background-image:url('images/slides/h3-slider3.jpg');background-repeat:no-repeat;background-size:cover;background-position:center center;">
    <!-- START REVOLUTION SLIDER 5.4.7.4 fullscreen mode -->
    <div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7.4">
        <ul>

            <!-- SLIDE  -->
            <?php
            $c = $class->coulam_name($Data_communication, "slides");

            $query = "SELECT * FROM `slides` where id = 1  ";
            $sql_lng = set_lang("SELECT * FROM `slides` where id = 4  ", "SELECT * FROM `slides` where id = 1  ");
            $array = array();
            $rows = $class->sql_feth($Data_communication, $sql_lng, $array);
            foreach ($rows as $value):
                $id = $value[$c[0]];
                $language = $value[$c[1]];
                $Image = $value[$c[2]];
                $Title = $value[$c[3]];
                $Subtitle = $value[$c[4]];
                $Additional_Address = $value[$c[5]];
                ?>
                <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="cpanel/pages/layout/slides/uplod/<?php echo $Image; ?>" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="cpanel/pages/layout/slides/uplod/<?php echo $Image; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 7 -->
                    <h1 class="tp-caption   tp-resizeme"
                        id="slide-6-layer-1"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-60']"
                        data-fontsize="['64','64','64','40']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;","speed":1500,"to":"o:1;","delay":300,"ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"to":"opacity:0;","ease":"Power2.easeIn"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 11; white-space: nowrap; font-size: 64px; font-weight: 700; color: rgba(255,255,255,1);text-transform:uppercase;">
    <?php echo $Title; ?></h1>
                    <!-- LAYER NR. 8 -->
                    <p class="tp-caption   tp-resizeme"
                       id="slide-6-layer-2"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['5','5','5','5']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-type="text"
                       data-responsive_offset="on"
                       data-frames='[{"from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","speed":1500,"to":"o:1;","delay":900,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                       data-textAlign="['left','left','left','left']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]"
                       style="z-index: 12; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);">
    <?php echo $Subtitle; ?></p>
                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption   tp-resizeme  thim-link-slider"
                         id="slide-6-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['60','60','60','60']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","speed":1500,"to":"o:1;","delay":900,"ease":"Power3.easeOut"},{"delay":"wait","speed":100,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 13; white-space: nowrap; font-size: 15px; font-weight: 700; color: rgba(255,255,255,1);text-transform:uppercase;">
                        <a href="#"><?php echo $Additional_Address; ?></a></div>
                </li>
    <?php
endforeach;
?>
            <!-- SLIDE  -->
            <?php
            $c = $class->coulam_name($Data_communication, "slides");
            $sql_lng = set_lang("SELECT * FROM `slides` where id = 5  ", "SELECT * FROM `slides` where id = 2 ");
            $array = array();
            $rows = $class->sql_feth($Data_communication, $sql_lng, $array);
            foreach ($rows as $value):
                $id = $value[$c[0]];
                $language = $value[$c[1]];
                $Image = $value[$c[2]];
                $Title = $value[$c[3]];
                $Subtitle = $value[$c[4]];
                $Additional_Address = $value[$c[5]];
                ?>
                <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="cpanel/pages/layout/slides/uplod/<?php echo $Image; ?>" data-rotate="0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="cpanel/pages/layout/slides/uplod/<?php echo $Image; ?>" alt="" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <h1 class="tp-caption   tp-resizeme"
                        id="slide-4-layer-1"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-60']"
                        data-fontsize="['64','64','64','40']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"to":"y:-50px;opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; white-space: nowrap; font-size: 64px; font-weight: 700; color: rgba(255,255,255,1);">
    <?php echo $Title; ?> </h1>
                    <!-- LAYER NR. 2 -->
                    <p class="tp-caption   tp-resizeme"
                       id="slide-4-layer-2"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['5','5','5','5']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-type="text"
                       data-responsive_offset="on"
                       data-frames='[{"from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","speed":1500,"to":"o:1;","delay":900,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                       data-textAlign="['left','left','left','left']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]"
                       style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);">
    <?php echo $Subtitle; ?> </p>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme  thim-link-slider"
                         id="slide-4-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['60','60','60','60']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","speed":1500,"to":"o:1;","delay":900,"ease":"Power3.easeOut"},{"delay":"wait","speed":100,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 7; white-space: nowrap; font-size: 15px; font-weight: 700; color: rgba(255,255,255,1);text-transform:uppercase;">
                        <a href="#offers"><?php echo $Additional_Address; ?></a></div>
                </li>
    <?php
endforeach;
?>
            <!-- SLIDE  -->
            <?php
            $c = $class->coulam_name($Data_communication, "slides");
            $sql_lng = set_lang("SELECT * FROM `slides` where id = 6  ", "SELECT * FROM `slides` where id = 3 ");
            $query = "SELECT * FROM `slides` where id = 3  ";
            $array = array();
            $rows = $class->sql_feth($Data_communication, $sql_lng, $array);
            foreach ($rows as $value):


                $id = $value[$c[0]];
                $language = $value[$c[1]];
                $Image = $value[$c[2]];
                $Title = $value[$c[3]];
                $Subtitle = $value[$c[4]];
                $Additional_Address = $value[$c[5]];
                ?>
                <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="cpanel/pages/layout/slides/uplod/<?php echo $Image; ?>" data-rotate="0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="cpanel/pages/layout/slides/uplod/<?php echo $Image; ?>" alt="" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <h1 class="tp-caption   tp-resizeme"
                        id="slide-4-layer-1"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-60']"
                        data-fontsize="['64','64','64','40']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"to":"y:-50px;opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; white-space: nowrap; font-size: 64px; font-weight: 700; color: rgba(255,255,255,1);">
    <?php echo $Title; ?> </h1>
                    <!-- LAYER NR. 2 -->
                    <p class="tp-caption   tp-resizeme"
                       id="slide-4-layer-2"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['5','5','5','5']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-type="text"
                       data-responsive_offset="on"
                       data-frames='[{"from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","speed":1500,"to":"o:1;","delay":900,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                       data-textAlign="['left','left','left','left']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]"
                       style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);">
    <?php echo $Subtitle; ?></p>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme  thim-link-slider"
                         id="slide-4-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['60','60','60','60']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","speed":1500,"to":"o:1;","delay":900,"ease":"Power3.easeOut"},{"delay":"wait","speed":100,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 7; white-space: nowrap; font-size: 15px; font-weight: 700; color: rgba(255,255,255,1);text-transform:uppercase;">
                        <a href="#"><?php echo $Additional_Address; ?></a></div>
                </li>
<?php endforeach; ?>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>     