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

var infoWindow = [];
var markers = [];

function initMap() {

    map = new google.maps.Map(document.getElementById('dojo-map'), {
        center: {lat: 35.872980, lng: 139.969545} ,
        zoom: 13,
        gestureHandling: 'cooperative'
	  });

    for(var i=0; i<4; i++){
      makeMarker(i);
      makeWindow(i);
    }

}

function makeMarker(num){
  markers[num] = new google.maps.Marker({
    position: {lat: data[num]['lat'], lng: data[num]['lng']},
    icon: icon = new google.maps.MarkerImage(data[num]['url']),
    map: map,
  });
  
  infoWindow[num] = new google.maps.InfoWindow({
    content: '<p>' + data[num]['name'] + '</p>'
  });

  console.log(infoWindow);
  
}

function makeWindow(num){
  markers[num].addListener('click', function(){
    closeWindow();
    infoWindow[num].open(markers[num].getMap(), markers[num]);
  });
}

function closeWindow(){
  for(var i=0; i<4; i++){
    infoWindow[i].close();
  }
}