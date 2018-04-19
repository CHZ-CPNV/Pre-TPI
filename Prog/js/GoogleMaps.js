var StyleMap = [
	{
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#ebe3cd"
			}
		]
	},
	{
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#523735"
			}
		]
	},
	{
		"elementType": "labels.text.stroke",
		"stylers": [
			{
				"color": "#f5f1e6"
			}
		]
	},
	{
		"featureType": "administrative",
		"elementType": "geometry.stroke",
		"stylers": [
			{
				"color": "#c9b2a6"
			}
		]
	},
	{
		"featureType": "administrative.land_parcel",
		"elementType": "geometry.stroke",
		"stylers": [
			{
				"color": "#dcd2be"
			}
		]
	},
	{
		"featureType": "administrative.land_parcel",
		"elementType": "labels",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "administrative.land_parcel",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#ae9e90"
			}
		]
	},
	{
		"featureType": "landscape.natural",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#dfd2ae"
			}
		]
	},
	{
		"featureType": "poi",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#dfd2ae"
			}
		]
	},
	{
		"featureType": "poi",
		"elementType": "labels.text",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "poi",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#93817c"
			}
		]
	},
	{
		"featureType": "poi.park",
		"elementType": "geometry.fill",
		"stylers": [
			{
				"color": "#a5b076"
			}
		]
	},
	{
		"featureType": "poi.park",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#447530"
			}
		]
	},
	{
		"featureType": "road",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#f5f1e6"
			}
		]
	},
	{
		"featureType": "road.arterial",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#fdfcf8"
			}
		]
	},
	{
		"featureType": "road.highway",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#f8c967"
			}
		]
	},
	{
		"featureType": "road.highway",
		"elementType": "geometry.stroke",
		"stylers": [
			{
				"color": "#e9bc62"
			}
		]
	},
	{
		"featureType": "road.highway.controlled_access",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#e98d58"
			}
		]
	},
	{
		"featureType": "road.highway.controlled_access",
		"elementType": "geometry.stroke",
		"stylers": [
			{
				"color": "#db8555"
			}
		]
	},
	{
		"featureType": "road.local",
		"elementType": "labels",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "road.local",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#806b63"
			}
		]
	},
	{
		"featureType": "transit.line",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#dfd2ae"
			}
		]
	},
	{
		"featureType": "transit.line",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#8f7d77"
			}
		]
	},
	{
		"featureType": "transit.line",
		"elementType": "labels.text.stroke",
		"stylers": [
			{
				"color": "#ebe3cd"
			}
		]
	},
	{
		"featureType": "transit.station",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#dfd2ae"
			}
		]
	},
	{
		"featureType": "water",
		"elementType": "geometry.fill",
		"stylers": [
			{
				"color": "#b9d3c2"
			}
		]
	},
	{
		"featureType": "water",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#92998d"
			}
		]
	}
]
var NbPlace = new Array("120");
var NumAbris = new Array("PC_A280");
var Lat = new Array("47.4249");
var Lng = new Array("9.61528");
var contentString = '<table>'+
											'<div>Test affichage du pop-up</div>'+
											'<tr>'+
												'<td>N°Abris : </td><td><input type="text" name="'+NumAbris+'"></td>'+
												'<td><input class="btn" type="submit" value="Organiser un visite" /></td>'+
											'</tr>'+
											'<tr><td>Nombre de place : </td><td><input type="text" name="'+NbPlace+'"></td></tr>'+
											'<tr><td>Lat : </td><td><input type="text" name="'+Lat+'"></td></tr>'+
											'<tr><td>Lng : </td><td><input type="text" name="'+Lng+'"></td></tr>'+
											'<tr><td><a href="index.php?action=publipostage">Salut</a></td></tr>'+
										'</table>';
function initMap(){
	var myLatLng = {lat: 46.849057, lng: 8.251252}
	$('input[type=hidden]').each(function(){
    Lat.push($('#phpLat').val());
		Lng.push($('#phpLng').val());
		NbPlace.push($('#phpNbP').val());
		NumAbris.push($('#phpNumA').val());
	});

	var map = new google.maps.Map(document.getElementById('google_map'),{
		center: myLatLng,
		zoom: 8,
		disableDefaultUI: true,
		styles: StyleMap
	});

	var infowindow = new google.maps.InfoWindow();
	var markers = locations.map(function(location, i) {
	  var marker = new google.maps.Marker({
	    position: location
	  });
	  google.maps.event.addListener(marker, 'click', function(evt) {
	    infowindow.setContent(location.info);
	    infowindow.open(map, marker);
	  })
	  return marker;
	});

	var markerCluster = new MarkerClusterer(map, markers,
		{imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

}
var locations = [
	{lat: Lat, lng: Lng, info: contentString}
]
