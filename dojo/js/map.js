var map;
/*var dojoName;
var marker = [];
var infowindow = [];
*/
var icon;
var data = [
  {
    name: '<a href="./kashiwa/">CoderDojo Kashiwa</a>',
    lat: 35.858800,
    lng: 139.975661,
    url: '../image/mapdojoLogo.png',
  },{
    name: '<a href="./kashiwanoha">CoderDojo Kashiwa-no-ha</a>',
    lat: 35.894852,
    lng: 139.951670,
    url: '../image/mapdojohaLogo.png',
  },{
    name: '<a href="http://www.code-for-nagareyama.org/?cat=11">CoderDojo Nagareyama</a>',
    lat: 35.876213,
    lng: 139.938837,
    url: '../image/mapdojoLogo.png',
  },{
    name: '<a href="./kashiwa-shounan">CoderDojo Kashiwa-Shounan</a>',
    lat: 35.845026,
    lng: 140.006910,
    url: './kashiwa-shounan/images/mapLogo.png',
  },{
    name: '<a href="./minamikashiwa">CoderDojo Minami-Kashiwa</a>  ',
    lat: 35.831266,
    lng: 139.955996,
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

    for(var i=0; i<data.length; i++){
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
  for(var i=0; i<data.length; i++){
    infoWindow[i].close();
  }
}