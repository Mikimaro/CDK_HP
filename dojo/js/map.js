var map;
var marker = [];
var data = [
  {
    name: 'CoderDojo Kashiwa',
    lat: 35.858800,
    lng: 139.975661
  },{
    name: 'CoderDojo Kashiwa-no-ha',
    lat: 35.894852,
    lng: 139.951670
  },{
    name: 'CoderDojo Nagareyama',
    lat: 35.876213,
    lng: 139.938837
  },{
    name: 'CoderDojo Minami-Kashiwa',
    lat: 0,
    lng: 0
  },{
    name: 'CoderDojo Shounan-machi',
    lat: 0,
    lng: 0
  }
];

function initMap() {
    map = new google.maps.Map(document.getElementById('dojo-map'), {
        center: {lat: 35.867840, lng: 139.975904} ,
        zoom: 13,
        gestureHandling: 'cooperative'
	});
 
    for (var i = 0; i < data.length; i++) {
        dojoName = data[i]['name'],
        markerLatLng = {lat: data[i]['lat'], lng: data[i]['lng']}, 
        marker[i] = new google.maps.Marker({
          title: dojoName,
          position: markerLatLng, 
          map: map
        });
    }
 
};
