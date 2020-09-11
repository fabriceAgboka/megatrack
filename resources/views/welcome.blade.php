<meta http-equiv="refresh" content="30">
@extends('Default')
@section('contenu')
    <style>
      	#map {
        	height: 520px;
        	width: 100%;
       	}
    </style>
  
    <h3>Home</h3>

    <div id="map"></div>

    <script>
		function initMap(){
		  	var uluru = {lat: {{$camion->lat}}, lng: {{$camion->lng}}};
		  	var map = new google.maps.Map(
		      document.getElementById('map'), {zoom: 10, center: uluru});
		  	var marker = new google.maps.Marker({position: uluru, map: map});
		}
    </script>
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTZf48_WbYP3ZYUyrHlBoLcw2sdFIsgho&callback=initMap">
    </script>
@stop