<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
	  .title
	  {
		background:#f3f3f7;
		padding:5px;
		font-family:palatino linotype;
	  }
	        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

    </style>
  </head>
  <body>
      <div id="floating-panel">
    <b>Start: </b>
<!--    <select id="start">
      <option value="chicago, il">Brooklyn</option>
    </select>-->
    <input type="text" id="start" placeholder="Your Location Here.." style="color:black;border:0.75px solid black;" />
    <b>End: </b>
    <select id="end">
      <option value="Angel Touch Physical Therapy, New York">Angel Touch Physical Therapy, New York</option>
    </select>
    </div>

    <div id="map"></div>
    <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 19,
          center: {lat: 40.677127, lng: -73.709260}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5sTHJ-Lf2WLlTyOdfS22XKe5VY5_dXqE&callback=initMap">
    </script>
  </body>
</html>