   <script src="js/libs/jquery-1.12.4.min.js"></script><!-- jQuery -->
        <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="js/libs/stellar.min.js"></script><!-- counter -->
        <script src="js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script src="js/libs/moment.min.js"></script><!-- moment -->
        <script src="js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
        <script src="js/theme-customs.js"></script><!-- Theme Custom -->
        <!-- REVOLUTION JS FILES -->
        <script  src="js/libs/revolution/jquery.themepunch.tools.min.js"></script>
        <script src="js/libs/revolution/jquery.themepunch.revolution.min.js"></script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src="js/libs/revolution/extensions/revolution.extension.actions.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.carousel.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.migration.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.navigation.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.parallax.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="js/libs/revolution/extensions/revolution.extension.video.min.js"></script>
        <script>
            /* Start OF WRAPPING FUNCTION */
            function setREVStartSize(e) {
                try {
                    e.c = jQuery(e.c);
                    var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                    if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                        var u = (e.c.width(), jQuery(window).height());
                        if (void 0 != e.fullScreenOffsetContainer) {
                            var c = e.fullScreenOffsetContainer.split(",");
                            if (c)
                                jQuery.each(c, function (e, i) {
                                    u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                        }
                        f = u
                    } else
                        void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                    e.c.closest(".rev_slider_wrapper").css({height: f})
                } catch (d) {
                    console.log("Failure at Presize of Slider:" + d)
                }
            }
            ;
            var revapi2,
                    tpj;
            (function () {
                if (!/loaded|interactive|complete/.test(document.readyState))
                    document.addEventListener("DOMContentLoaded", onLoad);
                else
                    onLoad();
                function onLoad() {
                    if (tpj === undefined) {
                        tpj = jQuery;
                        if ("off" == "on")
                            tpj.noConflict();
                    }
                    if (tpj("#rev_slider_2_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_2_1");
                    } else {
                        revapi2 = tpj("#rev_slider_2_1").show().revolution({
                            sliderType: "standard",
                            sliderLayout: "fullscreen",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                mouseScrollReverse: "default",
                                onHoverStop: "off",
                                arrows: {
                                    style: "zeus",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_onleave: false,
                                    tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 20,
                                        v_offset: 0
                                    }
                                }
                                ,
                                bullets: {
                                    enable: true,
                                    hide_onmobile: false,
                                    style: "hermes",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 60,
                                    space: 25,
                                    tmp: ''
                                }
                            },
                            viewPort: {
                                enable: true,
                                outof: "wait",
                                visible_area: "80%",
                                presize: false
                            },
                            responsiveLevels: [1240, 1024, 778, 480],
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: [1240, 1024, 778, 480],
                            gridheight: [600, 600, 500, 400],
                            lazyType: "none",
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "on",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                    ;
                    /* END OF revapi call */
                }
                ;
                /* END OF ON LOAD FUNCTION */
            }());
            /* End OF WRAPPING FUNCTION */
            var d = new Date();
            document.getElementById("day").setAttribute('value', d.getDate());
            document.getElementById("month").setAttribute('value', format_month());
            document.getElementById("multidate2").setAttribute('value', format_full());
            document.getElementById("day2").setAttribute('value', d.getDate() + 1);
            document.getElementById("month2").setAttribute('value', format_month());
            function format_full() {
                var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'September', 'November', 'December'];
                return months[d.getMonth()] + ' ' + d.getDate() + ', ' + d.getFullYear();
            }
            function format_month() {
                var months = ['Jan', 'Feb', 'March', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                return months[d.getMonth()];
            }
        </script>