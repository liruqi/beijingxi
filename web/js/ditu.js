var mapObj = new AMap.Map('mapcnt', {
  center: [116.39, 39.9],
  zoom: 10
});

var marker1 = new AMap.Marker({
  position: [116.320265, 39.894062],
  map: mapObj,
  clickable: true
});

var marker2 = new AMap.Marker({
  position: [116.488552, 39.98057],
  map: mapObj,
  clickable: true
});

var marker3 = new AMap.Marker({
  position: [116.474894, 40.012378],
  map: mapObj,
  clickable: true
});

var marker4 = new AMap.Marker({
  position: [116.460899, 39.990007],
  map: mapObj,
  clickable: true
});

var marker5 = new AMap.Marker({
  position: [116.491926, 39.926322],
  map: mapObj,
  clickable: true

});

var marker6 = new AMap.Marker({
  position: [116.310319, 39.97937],
  map: mapObj,
  clickable: true
});

var marker7 = new AMap.Marker({
  position: [116.381424,39.874488],
  map: mapObj,
  clickable: true
});

var marker8 = new AMap.Marker({
  position: [116.441677,39.878704],
  map: mapObj,
  clickable: true
});

var markers = [marker1, marker2, marker3, marker4, marker5, marker6, marker7, marker8];

var markClick = function(e){
  window.location.href="/reserve.php?id=bjw";
}

for(var i=0;i<8;i++) {
  var mark = markers[i];
  mark.on('click',markClick);
}
