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
  position: [116.439092, 39.944305],
  map: mapObj
});