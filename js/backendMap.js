var map;
function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: {lat: 30.4133, lng: -91.1800},
          zoom: 14
        });
      }
	  
function addMarker(location, map, name) {
        // Add the marker at the location with the label as the name specified
        var marker = new google.maps.Marker({
          position: location,
          label: name,
          map: map
        });
      }

	  
	  
