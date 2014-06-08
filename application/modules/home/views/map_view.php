<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Bản đồ chỉ đường - Tính phí vận chuyển</title>
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
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;
var haight = new google.maps.LatLng(<?php echo $data['lat_di']?>, <?php echo $data['long_di']?>);
var oceanBeach = new google.maps.LatLng(<?php echo $data['lat_den']?>, <?php echo $data['long_den']?>);

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var mapOptions = {
    zoom: 14,
    center: haight
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  directionsDisplay.setMap(map);
}

function calcRoute() {
  //var selectedMode = document.getElementById('mode').value;
  var request = {
      origin: haight,
      destination: oceanBeach,
      // Note that Javascript allows us to access the constant
      // using square brackets and a string value as its
      // "property."
      travelMode: google.maps.TravelMode['DRIVING']
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body onload="calcRoute();">
    <div id="panel">
    <b>Tổng đoạn đường: <?php echo round($data['distance']) ?>KM- Phí vận chuyển: <?php echo round($data['fee_ship']);?>VNĐ</b>
    </div>
    <div id="map-canvas"></div>
  </body>
</html>