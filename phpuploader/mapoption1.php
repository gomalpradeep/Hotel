<?php 
include 'database.php';
$Address=$_POST['add'];
$Address = urlencode($Address);
  $request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$Address."&sensor=true";
  $xml = simplexml_load_file($request_url) or die("url not loading");
  $status = $xml->status;
  if ($status=="OK") {
      $lat = $xml->result->geometry->location->lat;
      $lon = $xml->result->geometry->location->lng;
      $LatLng = "$Lat,$Lon";
  }

$sql="INSERT INTO `place`( `lan`, `lat`) VALUES ('$lat','$lon')";
mysql_query($sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Geocoding service</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
    </style><script src="jquery-2.1.1.min.js" type="text/javascript"></script>

   <script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>

<script>
var myCenter=new google.maps.LatLng(<?php echo $lat;?>,<?php echo $lon;?>);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:500px;height:380px;"></div>
<form method="post" action="">
 <select name="add" >
<option value="madurai">madurai</option>
<option value="delhi">delhi</option>
<option value="london">london</option>
</select>
      <input type="submit" value="submit" onclick="codeAddress()">
      </form>   
    </div>

  </body>
</html>
