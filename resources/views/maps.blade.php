@extends('layouts.app')
@section('content')




<div id="map"></div>

<script>
	function initMap(){
		var options = {

			zoom: 8,
			center: {lat: 3.3973, lng: 38.5559}
		}

		var map = new google.maps.Map(document.getElementById('map'), options);

		//Add marker

		var marker = new google.maps.Marker({
			position:{lat: 3.5033, lng: 38.3640},
			map:map 
		});

		var infoWindow = new google.maps.infoWindow({
			content: '<h1>Mwatate</h1>'
		});

		marker.addListener('click', function(){
			infoWindow.open(map, marker);
		});
	}
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAejnodeIa-VQjN7tj_RaAC_0jU9vFuChM&callback=initMap">
</script>

@endsection