var map;

<div id="map"></div>

function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: {lat: 30.4133, lng: 91.1800},
          zoom: 8
        });
      }
