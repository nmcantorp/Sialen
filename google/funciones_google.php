<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDcgmImTFK3DFsD604fFdrWA3UR1HiYnKU&sensor=true">

</script>

<script type="text/javascript">
var mapa;
var marcador;
var geocoder;            

function inicializar(){    
geocoder = new google.maps.Geocoder();  
var latitud = 4.607652573620602;
var longitud = -74.22080039978027;
var myLatlng = new google.maps.LatLng(latitud,longitud);
var mapOptions = {
      zoom: 15,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
}
mapa = new google.maps.Map(document.getElementById('googleMap'), mapOptions);  

marker = new google.maps.Marker ({position: new google.maps.LatLng(latitud, longitud), title: $('#val_titulo').val()}) ;
marker.setMap(mapa);

google.maps.event.addListener(mapa, 'click', function (event){
    creaMarcador(event.latLng)
    });

}
google.maps.event.addDomListener(window, 'load', inicializar);

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
     //alert(localizacion.lat()+" - " + localizacion.lng());
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

<div id="googleMap" style="width: 550px; height: 380px;" lass="map"></div>