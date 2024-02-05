<script>
    if (document.getElementsByClassName("ts-full-screen").length) {
        document.getElementsByClassName("ts-full-screen")[0].style.height = window.innerHeight + "px";
    }
</script>
<script src="<?php echo route['a'] ?>js/jquery-3.3.1.min.js"></script>
<script src="<?php echo route['a'] ?>js/popper.min.js"></script>
<script src="<?php echo route['a'] ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo route['a'] ?>js/imagesloaded.pkgd.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
<script src="<?php echo route['a'] ?>js/isInViewport.jquery.js"></script>
<script src="<?php echo route['a'] ?>js/jquery.particleground.min.js"></script>
<script src="<?php echo route['a'] ?>js/owl.carousel.min.js"></script>
<script src="<?php echo route['a'] ?>js/scrolla.jquery.min.js"></script>
<script src="<?php echo route['a'] ?>js/jquery.validate.min.js"></script>
<script src="<?php echo route['a'] ?>js/jquery-validate.bootstrap-tooltip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
<script src="<?php echo route['a'] ?>js/jquery.wavify.js"></script>
<script src="<?php echo route['a'] ?>js/custom.js"></script>

<!--Google map-->

<script>
    /*
    var latitude = 34.038405;
    var longitude = -117.946944;
    var markerImage = "<?php echo route['a'] ?>img/map-marker.png";
    var mapElement = "map";
    var mapStyle = [{
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [{
            "color": "#444444"
        }]
    }, {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [{
            "color": "#f2f2f2"
        }]
    }, {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "poi",
        "elementType": "labels.text",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "road",
        "elementType": "all",
        "stylers": [{
            "saturation": -100
        }, {
            "lightness": 45
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [{
            "visibility": "simplified"
        }]
    }, {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "water",
        "elementType": "all",
        "stylers": [{
            "color": "#dbdbdb"
        }, {
            "visibility": "on"
        }]
    }];
    google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapStyle, mapElement));
    */
</script>

</body>

</html>