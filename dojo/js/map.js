var map;
/*var dojoName;
var marker = [];
var infowindow = [];
*/
var icon;
var data = [
  {
    name: 'CoderDojo Kashiwa',
    lat: 35.858800,
    lng: 139.975661,
    url: '../image/mapdojoLogo.png',
  },{
    name: 'CoderDojo Kashiwa-no-ha',
    lat: 35.894852,
    lng: 139.951670,
    url: '../image/mapdojohaLogo.png',
  },{
    name: 'CoderDojo Nagareyama',
    lat: 35.876213,
    lng: 139.938837,
    url: '../image/mapdojoLogo.png',
  },{
    name: 'CoderDojo Minami-Kashiwa',
    lat: 0,
    lng: 0,
    url: '../image/mapdojoLogo.png',
  },{
    name: 'CoderDojo Shounan-machi',
    lat: 35.845026,
    lng: 140.006910,
    url: '../image/mapdojoLogo.png',
  }
];

function initMap() {

    map = new google.maps.Map(document.getElementById('dojo-map'), {
        center: {lat: 35.872980, lng: 139.969545} ,
        zoom: 13,
        gestureHandling: 'cooperative'
	  });

    data.forEach(function(val){
      var marker = new google.maps.Marker({
        position: {lat: val.lat, lng: val.lng},
        icon: icon = new google.maps.MarkerImage(val.url),
        map: map,
      });

      google.maps.event.addListener(marker, 'click', function(){
        var infoWindows = new google.maps.InfoWindow({
          content: '<p>' + val.name + '</p>'
        })
        if(infoWindows)infoWindows.close();
        infoWindows.open(marker.getMap(), marker);
      });
      
    });
 
    /*
    for (var i = 0; i < data.length; i++) {
        dojoName = data[i]['name'],

        markerLatLng = {lat: data[i]['lat'], lng: data[i]['lng']}, 

        infowindow[i] = new google.maps.InfoWindow({
          content: data[i]['contents'],
        });

        marker[i] = new google.maps.Marker({
          title: dojoName,
          icon: icon = new google.maps.MarkerImage(data[i]['url']),
          position: markerLatLng, 
          map: map
        });

        marker[i].addListener('click', function() { 
          infowindow[i].open(map);
        });
    }
    */

};
