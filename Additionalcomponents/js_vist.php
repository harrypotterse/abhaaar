     <script src="js/libs/jquery.min.js"></script><!-- jQuery -->
        <script src="js/libs/stellar.min.js"></script><!-- parallax -->
        <script src="js/libs/bootstrap.min.js"></script><!-- Bootstrap -->
        <script src="js/libs/smoothscroll.min.js"></script><!-- smoothscroll -->
        <script src="js/libs/owl.carousel.min.js"></script><!-- Owl Carousel -->
        <script src="js/libs/jquery.magnific-popup.min.js"></script><!-- Magnific Popup -->
        <script src="js/libs/theia-sticky-sidebar.min.js"></script><!-- Sticky sidebar -->
        <script src="js/libs/counter-box.min.js"></script><!-- counter -->
        <script src="js/libs/moment.min.js"></script><!-- moment -->
        <script src="js/libs/jquery-ui.min.js"></script><!-- ui -->
        <script src="js/libs/daterangepicker.min.js"></script><!-- date -->
        <script src="js/libs/daterangepicker.min-date.min.js"></script><!-- date2 -->
        <script src="js/libs/jquery.thim-content-slider.min.js"></script><!-- Slider -->
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6tZmmzTRRVWBoZdOctY-wAAdbm5S-2VM%20&amp;callback=sc_Map">
        </script>
        <script src="js/theme-customs.js"></script><!-- Theme Custom -->
        <!-- Google Map -->
        <script>
                    // Initialize and add the map
                    function sc_Map() {
                        // The location of London
                        var manutd = {
                            lat: -37.8040982,
                            lng: 144.9570935
                        };
                        // The map, centered at London
                        var map = new google.maps.Map(
                                document.getElementById('google-map'), {zoom: 12, center: manutd});
                        // The marker, positioned at London
                        var marker = new google.maps.Marker({position: manutd, map: map});
                    }
        </script>