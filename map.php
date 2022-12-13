<!DOCTYPE html>
        <html>
           <head>
              <title>OSM and Leaflet</title>
              <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
           </head>
<body>
              <div id = "map" style = "width: 900px; height: 580px"></div>
            <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
              <script>

<?php
   $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
   mysqli_select_db($con, 'sagar');

   $result = mysqli_query($con, "SELECT * FROM locations");
   while ($row = mysqli_fetch_array($result)) {
         $lat_d = $row['latitude'];
         $long_d = $row['longitude'];
   }

   $result = array(array('latitude' => $lat_d, 'longitude' => $long_d));
   // Set the latitude and longitude coordinates of the location
   $latitude = $lat_d;
   $longitude = $long_d;
?>
                  const lat = <?php echo $latitude; ?>;
                  const long = <?php echo $longitude; ?>;;



                 // Creating map options

                 var mapOptions = {
                    center: [lat, long],
                    zoom: 13
                 }
                 
                 // Creating a map object
                 var map = new L.map('map', mapOptions);
                 
                 // Creating a Layer object
                 var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
                 
                 // Adding layer to the map
                 map.addLayer(layer);
                 
                 const leafletMarkers = L.layerGroup([


                 //adding marker
                 <?php

                     $result = mysqli_query($con,"SELECT * FROM locations");
                     while ($row = mysqli_fetch_array($result)) {

                     echo "new L.Marker([" . $row['latitude'] . ", " . $row['longitude'] . "]),\n";
                     
                     } ?>
                 ]);
                 leafletMarkers.addTo(map);
            </script>
           </body>
           
        </html>