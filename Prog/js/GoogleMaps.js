function initMap(){
	var myLatLng = {lat: 46.849057, lng: 8.251252}
	var labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

	var map = new google.maps.Map(document.getElementById('google_map'),{
		center: myLatLng,
		zoom: 8,
		disableDefaultUI: true,
		styles: [
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
	});

	var markers = locations.map(function(location, i) {
		return new google.maps.Marker({
			position: location,
			label: labels[i % labels.length]
		});
	});

	var markerCluster = new MarkerClusterer(map, markers, {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
}
var locations = [
	{lat: 47.424903, lng: 9.615275},
	{lat: 46.136965, lng: 7.040954},
	{lat: 47.178107, lng: 8.521029},
	{lat: 46.011439, lng: 8.965526},
	{lat: 46.445795, lng: 7.467661},
	{lat: 46.773790, lng: 7.374042},
	{lat: 46.882680, lng: 9.134083},
	{lat: 47.163489, lng: 7.327233},
	{lat: 47.178107, lng: 8.521029},
	{lat: 46.011439, lng: 8.965526},
	{lat: 46.445795, lng: 7.467661},
	{lat: 46.773790, lng: 7.374042},
	{lat: 46.882680, lng: 9.134083},
	{lat: 47.163489, lng: 7.327233}
]
