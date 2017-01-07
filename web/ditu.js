var mapObj = new AMap.Map('container', {
  center: [116.39, 39.9],
  zoom: 11
});

var icon = new AMap.Icon({
  image: 'http://vdata.amap.com/icons/b18/1/2.png', //24px*24px
  size: new AMap.Size(24, 24)
});

var marker1 = new AMap.Marker({
  icon: icon, //24px*24px
  position: provinces[i].center.split(','),
  offset: new AMap.Pixel(-12, -12),
  map: mapObj
});

var marker2 = new AMap.Marker({
  icon: icon, //24px*24px
  position: provinces[i].center.split(','),
  offset: new AMap.Pixel(-50, -75),
  map: mapObj
});

var marker3 = new AMap.Marker({
  icon: icon, //24px*24px
  position: provinces[i].center.split(','),
  offset: new AMap.Pixel(-100, -90),
  map: mapObj
});

var marker4 = new AMap.Marker({
  icon: icon, //24px*24px
  position: provinces[i].center.split(','),
  offset: new AMap.Pixel(-12, -123),
  map: mapObj
});
