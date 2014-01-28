<style>

.adp-summary {
    background-color: #79C5F2 !important;
}

      html, body, #googleMap {
        height: 100%;
        margin: 0px;
        padding: 0px;
        float:left;
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
        max-height: 100px;
      }
    </style>
    <style>
      #directions-panel {
        height: 90%;
        float: right;
        width: 390px;
        overflow: auto;
        max-height: : 100px;
      }

      #googleMap {
        margin-right: 400px;
        position: absolute !important;
      }

      #control {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }

      @media print {
        #googleMap {
          height: 500px;
          margin: 0;
        }

        #directions-panel {
          float: none;
          width: auto;
        }
      }
    </style>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDcgmImTFK3DFsD604fFdrWA3UR1HiYnKU&sensor=true">

</script>
<script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

function inicializar() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var mapOptions = {
    zoom: 18,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: new google.maps.LatLng($('#latitud_usuario').val(), $('#longitud_usuario').val())
  };
  var map = new google.maps.Map(document.getElementById('googleMap'),
      mapOptions);
  marker = new google.maps.Marker() ;
	marker.setMap(map);
	marker.setAnimation('bounce');
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('directions-panel'));


  /*var control = document.getElementById('control');
  control.style.display = 'block';
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);*/
}

function calcRoute() {
  var start = new google.maps.LatLng($('#latitud_usuario').val(), $('#longitud_usuario').val());
  var end = new google.maps.LatLng($('#latitud_empresa').val(), $('#longitud_empresa').val());
  var request = {
    origin: start,
    destination: end,
    travelMode: google.maps.TravelMode.DRIVING
  };
  	
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
        var route = response.routes[0];
    }
  });

  stepDisplay = new google.maps.InfoWindow();
}

google.maps.event.addDomListener(window, 'load', inicializar);

</script>

<div id="googleMap" style="width: 460px; height: 470px;"></div>
<div id="directions-panel"></div>