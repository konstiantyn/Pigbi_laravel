
function _MapObj() {
}

_MapObj.prototype.init = function (locations) {
  function CustomMarker(latlng, map, args) {
    this.latlng = latlng; 
    this.args = args; 
    this.setMap(map); 
  }
  CustomMarker.prototype = new google.maps.OverlayView();

  CustomMarker.prototype.draw = function() {
    
    var self = this;
    
    var div = this.div;

    var span;
    if (!span) {
      span = this.span = document.createElement('span');
      span.className = 'map-label';
      span.textContent = '$155.3K';
    }
    
    var img;
    if (!img) {
      img = this.img = document.createElement('img');
      img.className = 'show-on-map';
      img.style.display = 'none';
      img.style.width = '150px';
      img.style.height = '150px';
      img.style.marginLeft = '-50px';
      img.style.zIndex = 1000;
      img.src = "//thumbs.trulia-cdn.com/pictures/thumbs_3/zillowstatic/ISahrp29yiicls0000000000.jpg";
    }

    if (!div) {
    
      div = this.div = document.createElement('div');
      
      div.className = 'marker';
      
      div.style.position = 'absolute';
      div.style.cursor = 'pointer';
      div.style.width = '20px';
      div.style.height = '20px';
      
      div.appendChild(span);
      div.appendChild(img);

      if (typeof(self.args.marker_id) !== 'undefined') {
        div.dataset.marker_id = self.args.marker_id;
      }
      
      google.maps.event.addDomListener(div, "mouseover", function(event) {
        console.log('clicked');
        this.childNodes[1].style.display = 'block';
        google.maps.event.trigger(self, "click");
      });
      
      google.maps.event.addDomListener(div, "mouseleave", function(event) {
        console.log('clicked leave');
        this.childNodes[1].style.display = 'none';
        google.maps.event.trigger(self, "click");
      });
/*
      google.maps.event.addDomListener(window, 'load', function () {
        autocomplete = new google.maps.places.Autocomplete(document.getElementById('addressSearch'));
        google.maps.event.addListener(autocomplete, 'place_changed', getPlaceInfo);
      });*/
      
      /*google.maps.event.addDomListener(document.getElementById('addressSearch'), 'change', function () {
        console.log(this.value);
      });*/

      var panes = this.getPanes();
      panes.overlayImage.appendChild(div);
    }
    
    /*function getPlaceInfo() {
      var place = autocomplete.getPlace();
      console.log(place);
    }*/

    var point = this.getProjection().fromLatLngToDivPixel(this.latlng);
    
    if (point) {
      div.style.left = point.x + 'px';
      div.style.top = point.y + 'px';
    }
  };

  CustomMarker.prototype.remove = function() {
    if (this.div) {
      this.div.parentNode.removeChild(this.div);
      this.div = null;
    } 
  };

  CustomMarker.prototype.getPosition = function() {
    return this.latlng; 
  };

  var center, la=locations[0].lat, lo=locations[0].lng;
  for (var i = 1; i < locations.length; ++ i) {
    la = (la + locations[i].lat) / 2;
    lo = (lo + locations[i].lng) / 2;
  }
  console.log(la + " " + lo);
  var center = new google.maps.LatLng(la, lo);
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: center
  });

  for (var i = 0; i < locations.length; ++ i) {
    var loc = locations[i];

    var myLatlng = new google.maps.LatLng(loc.lat, loc.lng);
    console.log(myLatlng);
    var overlay = new CustomMarker(
      myLatlng, 
      map,
      {
        marker_id: '123'+i,
        colour: 'Red'
      }
    );
  
  }


  
  /*var image = "<a href='#' id='ISqt3snhq4xsz51000000000' class='map-label'><span>$2.3m</span></a>";
  //'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
  var beachMarker = new google.maps.Marker({
    position: {lat: -33.890, lng: 151.274},
    map: map,
    icon: ' ',
    content: "<a href='#' id='ISqt3snhq4xsz51000000000' class='map-label'><span>$2.3m</span></a>"
  });*/
  
 
}

window.initMap = function(locations){
  var locations = [
  {lat: -33.890542, lng: 151.274856},
  {lat: -33.923036, lng: 151.259052},
  {lat: -33.80010128657071, lng: 151.28747820854187},
  {lat: -34.028249, lng: 151.157507}
  ];
  var _map = new _MapObj();
  var initMap = _map.init(locations);
}

/*
function initMap(locations) {
  
}
*/