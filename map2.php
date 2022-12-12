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

// Generate the OpenStreetMap embed code
$embedCode = '<iframe width="100%" height="90%" frameborder="0"
src="https://www.openstreetmap.org/export/embed.html?bbox=-0.005908966064453125%2C51.470022345224%2C0.005245208740234375%2C51.47134206173713&layer=mapnik&marker=' . $latitude . '%2C' . $longitude . '"
style="border: 1px solid black"></iframe>';

// Output the OpenStreetMap embed code
echo $embedCode;

?>
