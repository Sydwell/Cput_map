

<!DOCTYPE html>
<html>
    <head>
        <title>Simple Map</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">

        <style>
            html, body {
                height: 100%;
                margin: 0px;
                padding: 0px
            }
            #map-canvas {
                
                height: 90%;
                margin: 0px;
                padding: 0px
            }
            
        </style>
        <script src="js/vendor/jquery-2.1.3.js"></script>
        <script src="js/vendor/bootstrap.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script>
            $('document').ready(function () {
                var castle = new google.maps.LatLng(-33.9260235, 18.427518);
                var markerCastle = new google.maps.Marker({
                    position: castle,
                });
                var absaCentre = new google.maps.LatLng(-33.9204413, 18.450199);
                var markerAbsa = new google.maps.Marker({
                    position: absaCentre,
                });
               // var cput = new google.maps.LatLng(-33.931235, 18.4242882);
               var cput = new google.maps.LatLng(-33.931235, 18.430199);
                var markerCput = new google.maps.Marker({
                    position: cput,
                });
                var map;
                var mapOptions = {
                    zoom: 15,
                    center: new google.maps.LatLng(-33.93, 18.42)
                };
                map = new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);
                markerCastle.setMap(map);
                markerAbsa.setMap(map);
                markerCput.setMap(map);

                $("#cput_locate_btn").click(function () {
                    //map.setZoom(17);
                    map.setCenter(markerCput.getPosition());
                });
                $("#absa_locate_btn").click(function () {
                //    map.setZoom(17);
                    map.setCenter(markerAbsa.getPosition());
                });
                 $("#castle_locate_btn").click(function () {
                //    map.setZoom(17);
                    map.setCenter(markerCastle.getPosition());
                });
            });
        </script>
    </head>
    <body>
        <div id="map-canvas"></div>
        <button id='absa_locate_btn'>Absa Centre</button>
        <button id='cput_locate_btn'>CPUT</button>
        <button id='castle_locate_btn'>Castle</button>
    </body>
</html>
