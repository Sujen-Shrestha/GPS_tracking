<!DOCTYPE html>
   <html lang="en">
   <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--for reloading-->
   <meta http-equiv="Cache-control" content="no-cache">
   <!--css for whole website-->
   <link rel="stylesheet" href=".\css\style.css">
   <!--css for responsive-->
   <link rel="stylesheet" href=".\css\responsive.css">
   <!--css for animations-->
   <link rel="stylesheet" href=".\css\animate.css">
   <!--link to use google fonts-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
         rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap" rel="stylesheet">
   <!--for favicon-->
   <link rel="icon" type="images/logo.png" href="images/logo.png">
   <!-- for map-->
   <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
   <title>GPS tracking and Scheduling System</title>
   </head>
   <body>
      <!--This will add the upper navigation to the website-->
      <?php include './frontend/menu.php';?>
      <div id = "map" class="map"></div>
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

      <?php include './frontend/footer.php';?>
   </body>  
   <script src="./js/script.js"></script>  
</html>
