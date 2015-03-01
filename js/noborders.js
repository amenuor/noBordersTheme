// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', initMap);

function addAMarkerToMap(map, marker)
{
	//Create a Marker object
    var gmarker = new google.maps.Marker({
        position: marker.latLng,
        map: map,
        title: marker.title,
		icon: marker.icon
    });
	
	//Create a popup InfoWindow
	var infowindow = new google.maps.InfoWindow({
		content: marker.popupContent
	});
	
	//Attach the popup to the marker  
	google.maps.event.addListener(gmarker, 'click', function() {
	      infowindow.open(map,gmarker);
    });
	
}

function initMap() {
		
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 4,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(32.6700, 53.9400), // Iran

        // How you would like to style the map. 
        // This is where you would paste any style found on https://snazzymaps.com/ for instance.
        styles: [{"featureType":"landscape","stylers":[{"hue":"#F1FF00"},{"saturation":-27.4},{"lightness":9.4},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#0099FF"},{"saturation":-20},{"lightness":36.4},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#00FF4F"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FFB300"},{"saturation":-38},{"lightness":11.2},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#00B6FF"},{"saturation":4.2},{"lightness":-63.4},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#9FFF00"},{"saturation":0},{"lightness":0},{"gamma":1}]}]
    };	

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');
	if(mapElement == null)
		return;

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

	// Add markers and info windows
    window.markers.forEach(function(marker){
    	addAMarkerToMap(map, marker);
    });
	
	//Adjust zoom level in order to always display all markers
	var latlngbounds = new google.maps.LatLngBounds();
	for (var i = 0; i < window.railwayDiariesCoordinates.length; i++) {
	    latlngbounds.extend(window.railwayDiariesCoordinates[i]);
	}
	map.fitBounds(latlngbounds);
	
	
	// Add path
	var railwayDiariesPath = new google.maps.Polyline({
		path: window.railwayDiariesCoordinates,
		geodesic: true,
		strokeColor: '#FF0000',
		strokeOpacity: 1.0,
		strokeWeight: 2
	});
	railwayDiariesPath.setMap(map);	
	
	// Add legend
	map.controls[google.maps.ControlPosition.LEFT_CENTER].push(
	  document.getElementById('legend'));
}
