var mysql = require('mysql');
var con = mysql.createConnection({
	host:
	user:
	password:
	database:
});
var map, infoWindow;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 30.4133, lng: -91.1800},
        zoom: 14
    });
    infoWindow = new google.maps.InfoWindow;
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            con.connect(function(err){
	    if(err) throw err;
	    var sql = "INSERT INTO member_loc (userid, lat, lng) VALUES ( ,position.coords.latitude, position.coords.longitude)";\
	    con.query(sql, function(err,result){
		    if(err) throw err;
	    });
con.query("SELECT lat, lng FROM member_loc", function (err, results, feilds){
	if(err) throw err; 
	for(var i = 0, i < results.length, i++){
		var pos{ 
			lat: results[i].lat,
			lng: results[i].lng;
		}
			addMarker(pos,map);
	      });
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
}
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
}