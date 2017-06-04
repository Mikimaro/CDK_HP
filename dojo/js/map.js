var map;
var dojoName;
var marker = [];
var icon;
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

    icon = new google.maps.MarkerImage('image/dojoIcon.png',
         
          
    );
 
    for (var i = 0; i < data.length; i++) {
        dojoName = data[i]['name'],
        markerLatLng = {lat: data[i]['lat'], lng: data[i]['lng']}, 
        marker[i] = new google.maps.Marker({
          title: dojoName,
          icon: icon,
          position: markerLatLng, 
          map: map
        });
    }
 
};
