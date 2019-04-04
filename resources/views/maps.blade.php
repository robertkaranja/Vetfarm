@extends('layouts.app')
@section('content')




<div id="map"></div>

<script>
	function initMap(){
		var options = {

			zoom: 13,
			center: {lat: 1.2921, lng: 36.8219}
		}

		var map = new google.maps.Map(document.getElementById('map'), options);

		//Add marker

		var marker = new google.maps.Marker({
			position:{lat: 1.2921, lng: 36.8219},
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