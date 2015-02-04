// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', initMap);

function addAMarkerToMap(map, marker)
{
    // Let's also add a marker while we're at it
    var gmarker = new google.maps.Marker({
        position: marker.latLng,
        map: map,
        title: marker.title,
		icon: marker.icon
    });
	
	var infowindow = new google.maps.InfoWindow({
		content: marker.popupContent
	});
	  
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
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
    };

    var icons = initIcons();
	

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

	// Add markers and info windows
    window.markers.forEach(function(marker){
    	addAMarkerToMap(map, marker);
    });
	
	// Add path
	var flightPath = new google.maps.Polyline({
		path: window.flightPlanCoordinates,
		geodesic: true,
		strokeColor: '#FF0000',
		strokeOpacity: 1.0,
		strokeWeight: 2
	});
	flightPath.setMap(map);	
	
	// Add legend
	map.controls[google.maps.ControlPosition.LEFT_CENTER].push(
	  document.getElementById('legend'));
}
