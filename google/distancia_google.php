<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDcgmImTFK3DFsD604fFdrWA3UR1HiYnKU&sensor=true"></script>
<script src="../js/gmap3v5.1.1/gmap3.js"></script>

<script type="text/javascript">
var mapa;
var marcador;
var geocoder;            

function inicializar(){    
geocoder = new google.maps.Geocoder();  
var latitud = $('#latitud').val();
var longitud = $('#longitud').val();
var myLatlng = new google.maps.LatLng(latitud,longitud);
var mapOptions = {
      zoom: 18,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
}
mapa = new google.maps.Map(document.getElementById('test'), mapOptions);  

marker = new google.maps.Marker ({position: new google.maps.LatLng(latitud, longitud), title: $('#val_titulo').val(), icon: "http://maps.google.com/mapfiles/marker_green.png"}) ;
marker.setMap(mapa);

google.maps.event.addListener(mapa, 'click', function (event){
    creaMarcador(event.latLng);
});

}
google.maps.event.addDomListener(window, 'load', inicializar);

 $(function(){

    $("#test").gmap3();

    $('#test-ok').click(function(){
      //var addr = $('#test-address').val();

      $("#display p").empty();
      var coordinates = $("#geofenceCoords").val();
      var jsonObj = jQuery.parseJSON(coordinates); 


      //if ( !addr || !addr.length ) return;

        $("#test").gmap3({
        getlatlng:{

         //address:addr,

            callback: function(results){
              var markers=[];
              $.each(jsonObj, function(i, item) {

              var marker = new Object();
                  marker.lat = jsonObj[i].latitude;
                  marker.lng = jsonObj[i].longitude;
                  marker.options = new Object();
                  marker.options.icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/marker.png");
                  markers.push(marker);
              });


              $("#test").gmap3({
                marker:{
                  //latLng:results[0].geometry.location,
                  values: markers,
                  options: {draggable: false}
              },
              autofit:{},
            });
          }
        }
      });
    });

    $('#test-address').keypress(function(e){
      if (e.keyCode == 13){
        $('#test-ok').click();
      }
    });
  });

function Carga_marcador(){
	var coordinates = $("#geofenceCoords").val();
  	var jsonObj = jQuery.parseJSON(coordinates); 


      //if ( !addr || !addr.length ) return;

        $("#googleMap").gmap3({
        getlatlng:{

         //address:addr,

            callback: function(results){
              var markers=[];
              $.each(jsonObj, function(i, item) {

              var marker = new Object();
                  marker.lat = jsonObj[i].latitude;
                  marker.lng = jsonObj[i].longitude;
                  marker.options = new Object();
                  marker.options.icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/marker.png");
                  markers.push(marker);
              });


              $("#googleMap").gmap3({
                marker:{
                  //latLng:results[0].geometry.location,
                  values: markers,
                  options: {draggable: false}
              },
              autofit:{},
            });
          }
        }
      });
    //});

    $('#test-address').keypress(function(e){
      if (e.keyCode == 13){
        $('#test-ok').click();
      } 
  	});
}
function creaMarcador(localizacion){                
    // Crear marcador
       if (marcador) marcador.setMap(null);                   
       marcador = new google.maps.Marker({
       position: localizacion,
       draggable: true, 
       map: mapa
    });
    mapa.setCenter(localizacion);
     // Rellenar X e Y
    $('form#formulario input#latitud').val(localizacion.lat());
    $('form#formulario input#longitud').val(localizacion.lng());
    //document.formulario.latitud.value=localizacion.lat();
    //document.formulario.longitud.value=localizacion.lng();

    // Modificar X e Y al mover
    google.maps.event.addListener(marcador,'drag',function(event){
        $('form#formulario input#latitud').val(event.latLng.lat());
        $('form#formulario input#longitud').val(event.latLng.lng());
        //mapa.setCenter(localizacion);
    });

}

function direc(){            
var dire = document.getElementById("direccion").value;
var ciudad = $("#sel_ciudad option:selected").text();   
var barrio = $("#sel_barrio option:selected").text();   
var direccion = ciudad+", "+barrio;

  geocoder.geocode( {'address': direccion}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
      mapa.setCenter(results[0].geometry.location);
      creaMarcador(results[0].geometry.location);
  }
 else {
      alert("Geocode was not successful for the following reason: " + status);
}                
});

}
</script>

<div id="googleMap" style="width: 550px; height: 550px;"></div>