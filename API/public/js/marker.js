
function _MapObj() {
}

_MapObj.prototype.init = function () {
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
      span.textContent = this.args.price;
    }
    // console.log(this.args.imageurl);
    var img; var ID = this.args.IDforSearch;
    if (!img) {
      img = this.img = document.createElement('img');
      img.className = 'show-on-map';
      img.id = this.args.marker_id;
      img.style.display = 'none';
      img.style.width = '150px';
      img.style.height = '150px';
      img.style.marginLeft = '-50px';
      img.style.zIndex = 1000;
      img.src = this.args.imageurl;
    }

    if (!div) {
    
      div = this.div = document.createElement('div');
      
      div.className = 'marker';
      
      div.style.position = 'absolute';
      div.style.cursor = 'pointer';
      div.style.width = '20px';
      div.style.height = '20px';
      div.style.zIndex = 400;
      
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

      google.maps.event.addDomListener(div, "click", function(event) {
        $.ajax({
          url: "/detail",
          method: "GET",
          data: { ID: ID },
          success: detailView
        });
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
  var center, la=Number(locations[0].la), lo=Number(locations[0].lo);
  for (var i = 0; i < locations.length; ++ i) {
    la = (la + Number(locations[i].la)) / 2;
    lo = (lo + Number(locations[i].lo)) / 2;
  }
  
  var center = new google.maps.LatLng(la, lo);console.log(la + " " + lo);
  var map = new google.maps.Map(document.getElementById('mapview'), {
    zoom: 11,
    center: center
  });

  for (var i = 0; i < locations.length; ++ i) {
    var loc = locations[i];
    var myLatlng = new google.maps.LatLng(loc.la, loc.lo);
    var overlay = new CustomMarker(
      myLatlng, 
      map,
      {
        IDforSearch: searchresult.data[i].id,
        marker_id: 'pigbimap'+i,
        colour: 'Red',
        imageurl: imageurls[i],
        price: searchresult.data[i].ListPrice/1000 + 'K'
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
  
  $('div.cardItem').hover(function () {
    var index = $(this).find('img.img-grid').data('id') % 30;
    $('#pigbimap'+index).toggle();
    map.setCenter(new google.maps.LatLng(Number(locations[index].la), Number(locations[index].lo)));    
  });  
}

window.initMap = function(){
  /*var locations = [
  {lat: -33.890542, lng: 151.274856},
  {lat: -33.923036, lng: 151.259052},
  {lat: -33.80010128657071, lng: 151.28747820854187},
  {lat: -34.028249, lng: 151.157507}
  ];*/
  var _map = new _MapObj();
  var initMap = _map.init();
}

/*
function initMap(locations) {
  
}
*/
function detailView(res) {
    $('#Taxes').text("$"+JSON.parse(res.Taxes).Tax.Amount+"/mo");
    $('#ListPrice').text("$"+res.ListPrice);
    $('#Bedrooms').text(res.Bedrooms);
    $('#Bathrooms').text(res.Bathrooms);
    $('#PropertySubType').text(res.PropertySubType);
    $('#ListingDate').text(res.ListingDate);
    // --------------------------------------
    $('#ListingTitle').text(res.ListingTitle);
    $('#ListingDescription').text(res.ListingDescription);

    console.log(JSON.parse(res.Photos).Photo);
    var photos = "";
    var indicators = "";
    for (var i = 0; i < JSON.parse(res.Photos).Photo.length; ++ i) {
      if (i == 0) {
        indicators += '<li data-target="#myCarousel" data-slide-to="' + i + '" class="active"></li>';
        photos +=   '<div class="item active">' +
              '<img class="center" src="' + JSON.parse(res.Photos).Photo[i].MediaURL +
              '" alt="New York"></div>';
      }
      else {
        indicators += '<li data-target="#myCarousel" data-slide-to="' + i + '"></li>'
        photos +=   '<div class="item">' +
              '<img class="center" src="' + JSON.parse(res.Photos).Photo[i].MediaURL +
              '" alt="New York"></div>';
      }
    }
    total_slides_counts = JSON.parse(res.Photos).Photo.length;
    document.getElementById("Photos").innerHTML = photos;
    document.getElementById("photo_indicators").innerHTML = indicators;
    $("#total_slides_counts").text(total_slides_counts);
    // --------------------------------------
    $("#FullName").text(JSON.parse(res.ListingParticipants).Participant.FirstName + " " + JSON.parse(res.ListingParticipants).Participant.LastName);
    $("#PrimaryContactPhone").text(getFormattedPhoneNumber(JSON.parse(res.ListingParticipants).Participant.PrimaryContactPhone));
    $("#OfficePhone").text(getFormattedPhoneNumber(JSON.parse(res.ListingParticipants).Participant.OfficePhone));
    $("#Address1").text(JSON.parse(res.Address)["commons:FullStreetAddress"]);
    $("#Address2").text(JSON.parse(res.Address)["commons:City"] + " " + JSON.parse(res.Address)["commons:StateOrProvince"] + " " + JSON.parse(res.Address)["commons:PostalCode"]);
    // ---------------------------------------
    $('#myModal').show();   
  }
  function getFormattedPhoneNumber(num) {
    return "(" + num.slice(0,3) + ") " + num.slice(3,6) + "-" + num.slice(6);
  }