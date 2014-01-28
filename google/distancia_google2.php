<!-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDcgmImTFK3DFsD604fFdrWA3UR1HiYnKU&sensor=true"></script> 
<script src="../js/gmap3v5.1.1/gmap3.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>-->
<style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #map-canvas {
        height: 100%;
        width: 50%;
      }
      #content-pane {
        float:right;
        width:48%;
        padding-left: 2%;
      }
      #outputDiv {
        font-size: 11px;
      }
    </style>
    <script>
    var latitud;
    var longitud;
    //var id_usuario;
    var myvar0;
    var myvar1;
    var myvar2;
    var myvar3;
    var myvar4;
    var myvar5;
    var myusu0;
    var myusu1;
    var myusu2;
    var myusu3;
    var myusu4;
    var myusu5;

    var destinationA;
	var map;
	var geocoder;
	var bounds = new google.maps.LatLngBounds();
	var markersArray = [];
	var origenArray = [];
	var textorigen ;
	var destinationIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=D|FF0000|000000';
	var originIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=O|FFFF00|000000';

function crear_arreglo(){

	id_usuario = "<?= $_SESSION['id_empleado'] ?>";//alert(id_usuario);
	latitud = "<?= $_SESSION['latitud_empresa'] ?>";
	longitud = "<?= $_SESSION['longitud_empresa'] ?>";
	
	for(i = 0; i <= (<?= $_SESSION['datos'] ?>.total-3); i++){
        window['myvar' + i] = new google.maps.LatLng(String(<?= $_SESSION['datos'] ?>[i]['latitud']), String(<?= $_SESSION['datos'] ?>[i]['longitud']));
        window[' myusu' + i] = <?= $_SESSION['datos'] ?>[i]['usuario_id_usua'];

    }
        
	//console.log(origenArray);
	//console.log(textorigen);
	
	destinationA = new google.maps.LatLng(latitud, longitud);
	
    initialize();
    calculateDistances();
}

function initialize() {
  var opts = {
    center: new google.maps.LatLng(55.53, 9.4),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), opts);
  geocoder = new google.maps.Geocoder();


}

function calculateDistances() {
	var service = new google.maps.DistanceMatrixService();
  service.getDistanceMatrix(
    {
      origins: [myvar0, myvar1, myvar2, myvar3, myvar4, myvar5],
      destinations: [destinationA],
      travelMode: google.maps.TravelMode.DRIVING,
      unitSystem: google.maps.UnitSystem.METRIC,
      avoidHighways: false,
      avoidTolls: false
    }, callback);
  
}

function callback(response, status) {
  if (status != google.maps.DistanceMatrixStatus.OK) {
    console.log('Error was: ' + status);
  } else {
    var origins = response.originAddresses;
    var destinations = response.destinationAddresses;
    var outputDiv = document.getElementById('outputDiv');
    outputDiv.innerHTML = '';
    deleteOverlays();

    for (var i = 0; i < origins.length; i++) {
      var results = response.rows[i].elements;
      //console.log(response);
      addMarker(origins[i], false,  window[' myusu' + i]);
      for (var j = 0; j < results.length; j++) {
        addMarker(destinations[j], true);
        outputDiv.innerHTML += '<p>'+origins[i] + ' hasta ' + destinations[j]
            + ': Son ' + results[j].distance.text + ' Aproximadamente en '
            + results[j].duration.text + '</p>';
      }
    }
  }
}

function addMarker(location, isDestination, id_usuario) {
  var icon;
  if (isDestination) {
    icon = destinationIcon;
  } else {
    icon = originIcon;
  }
  geocoder.geocode({'address': location}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      bounds.extend(results[0].geometry.location);
      map.fitBounds(bounds);
      //alert(id_usuario);
      var contentString = '<div id="content">'+
      '<div id="bodyContent">'+
      '<span>, '+id_usuario+'</span>'+
      '</div>'+
      '</div>';

      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      var marker = new google.maps.Marker({
        map: map,
        draggable:true,
    	   //animation: google.maps.Animation.BOUNCE,
        position: results[0].geometry.location,
        icon: icon,
        title: location
      });
      markersArray.push(marker);

      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
      });
    } else {
      console.log('Geocode was not successful for the following reason: '
        + status);
    }
  });


}

function deleteOverlays() {
  for (var i = 0; i < markersArray.length; i++) {
    markersArray[i].setMap(null);
  }
  markersArray = [];
}


google.maps.event.addDomListener(window, 'load', initialize);

    </script>

    <div id="content-pane">
      <div id="inputs">
        
      </div>
        <div id="datos_reg" style="width: 80%;">
        <div id="outputDiv"></div>
      </div>
    </div>
    <div id="map-canvas" style="position: absolute !important;"></div>
