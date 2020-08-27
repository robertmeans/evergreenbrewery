     function initialize() {
    var map_canvas = document.getElementById('map');
    var map_options = {
        center: new google.maps.LatLng(40.238356, -76.960925),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(map_canvas, map_options);
    var i=new google.maps.Marker({
        position:new google.maps.LatLng(40.238356, -76.960925),
        map:map
        })
  }
  google.maps.event.addDomListener(window, 'load', initialize);