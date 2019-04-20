 <html>
 <style>
                .google-map {
                    position: relative;
                }
                .google-map #map {
                    width: 100%px;
                    height: 600px;
                    background-color: #ff432e;
                }
                .contact-info {
                    background-color: #ffffff;
                    box-shadow: 0 0 3px;
                    position: absolute;
                    right: 20%;
                    top: 30%;

                    padding: 30px 30px;
                    font-size: 10px;
                    font-family: 'PT Sans Narrow', Arial, sans-serif;
                }

                .contact-info li {
                    padding-bottom: 10px;
                }

                .contact-info h4 {
                    padding-bottom: 10px;
                }

                .contact-info li strong {
                    font-weight: 600;
                }
</style>
			<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<div class="google-map" onload="showPosition()">-->
			<div class="google-map" >
              
				<script>
            function initMap() {
                var uluru = {lat:<?php echo $_GET["longi"]; ?>,lng:<?php echo $_GET["lati"];?>};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 18,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
                var infowindow = new google.maps.InfoWindow();
                google.maps.event.addListener(map, 'idle', function () {
                    infowindow.setContent('<div><strong>Your Institute</strong></div>');
                    infowindow.open(map, marker);
                });

            }
				</script>
		<?php 
		
		function distance($lat1, $lon1, $lat2, $lon2, $unit) {
  if (($lat1 == $lat2) && ($lon1 == $lon2)) {
    return 0;
  }
  else {
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "K") {
      return ($miles * 1.609344);
    } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
      return $miles;
    }
  }
}
//echo $_GET["lati"];
//echo $_GET["long"];

//echo distance(23.1349577, 72.5092241,$_GET["long"],$_GET["lati"], "M") . " Miles<br>";
echo "<b>Institute's distance from your location is ". round(distance(21.1458682,73.0875466, $_GET["longi"],$_GET["lati"], "K")) . " Kilometers</b><br>";
?>
<br/>
<input type="button" id="btnback" value="Go Back" onclick="javascript:history.go(-1)">
<br/>
<?php
//echo distance(23.1349577, 72.5092241,$_GET["long"], $_GET["lati"],  "N") . " Nautical Miles<br>";
?>
<!--key=AIzaSyD0dNebyIk7-cRYHbfesp551-orxqc_6js-->
				<br/>
				<div id="map"></div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0dNebyIk7-cRYHbfesp551-orxqc_6js&callback=initMap">
        </script>  
		
</html>


