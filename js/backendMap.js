var map;
var rider1 = {lat: 30.41, lng: -91.18};
var rider2 = {lat: 30.403441, lng: -91.183599};
var rider3 = {lat: 30.368702, lng: -91.171043};
var rider4 = {lat: 30.475827, lng: -91.125020 };
function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: {lat: 30.4133, lng: -91.1800},
          zoom: 14
        });
		addMarker(rider1, map, 'John');
		addMarker(rider2, map, 'Jim');
		addMarker(rider3, map, 'Justin');
		addMarker(rider4, map, 'Zach');
      }
	  
function addMarker(location, map, name) {
        // Add the marker at the location with the label as the name specified
        var marker = new google.maps.Marker({
          position: location,
          label: name,
          map: map
        });
      }

	  
	  