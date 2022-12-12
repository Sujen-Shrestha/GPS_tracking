<?php
$con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
mysqli_select_db($con, 'sagar');

$result = mysqli_query($con, "SELECT * FROM locations");
while ($row = mysqli_fetch_array($result)) {
  $lat_d = $row['latitude'];
  $long_d = $row['longitude'];
}

$result = array(array('latitude' => $lat_d, 'longitude' => $long_d));

?>
<!doctype html>
<html>

<head>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript">
    var map;

    function initialize() {

      var latlng = new google.maps.LatLng(<?php echo $lat_d;?>,<?php echo $long_d;?>);
      var myOptions = {
        zoom: 14,
        center: latlng,
        panControl: true,
        zoomControl: true,
        scaleControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }

      map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
      <?php

      $result = mysqli_query($con,"SELECT * FROM locations");
      while ($row = mysqli_fetch_array($result)) {

        echo "addMarker(new google.maps.LatLng(" . $row['latitude'] . ", " . $row['longitude'] . "), map);";
      } ?>
    }

    function addMarker(latLng, map) {
      var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: '/GPS_tracking/icons8-container-truck-30.png'
      });

      return marker;
    }
  </script>
</head>

<body onload="initialize()">
  <div id="map_canvas" style="position:relative;width:1345px;height:600px;border:solid black 1px;"></div>
  </div>
</body>

</html>