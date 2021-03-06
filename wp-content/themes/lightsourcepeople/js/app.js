window.initMap = function() {

  var myLatLng = { lat: 51.407810, lng: 0.015069 };

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng,
    scrollwheel: false,
    styles: [{
      "elementType": "geometry",
      "stylers": [{
        "color": "#1d2c4d"
      }]
    }, {
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#8ec3b9"
      }]
    }, {
      "elementType": "labels.text.stroke",
      "stylers": [{
        "color": "#1a3646"
      }]
    }, {
      "featureType": "administrative",
      "elementType": "geometry",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "administrative.country",
      "elementType": "geometry.stroke",
      "stylers": [{
        "color": "#4b6878"
      }]
    }, {
      "featureType": "administrative.land_parcel",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#64779e"
      }]
    }, {
      "featureType": "administrative.province",
      "elementType": "geometry.stroke",
      "stylers": [{
        "color": "#4b6878"
      }]
    }, {
      "featureType": "landscape",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#374555"
      }]
    }, {
      "featureType": "landscape.man_made",
      "elementType": "geometry.stroke",
      "stylers": [{
        "color": "#334e87"
      }]
    }, {
      "featureType": "landscape.natural",
      "elementType": "geometry",
      "stylers": [{
        "color": "#023e58"
      }]
    }, {
      "featureType": "poi",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [{
        "color": "#283d6a"
      }]
    }, {
      "featureType": "poi",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#6f9ba5"
      }]
    }, {
      "featureType": "poi",
      "elementType": "labels.text.stroke",
      "stylers": [{
        "color": "#1d2c4d"
      }]
    }, {
      "featureType": "poi.park",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#023e58"
      }]
    }, {
      "featureType": "poi.park",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#3C7680"
      }]
    }, {
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [{
        "color": "#304a7d"
      }]
    }, {
      "featureType": "road",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#2f3d4d"
      }]
    }, {
      "featureType": "road",
      "elementType": "labels.icon",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "road",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#98a5be"
      }]
    }, {
      "featureType": "road",
      "elementType": "labels.text.stroke",
      "stylers": [{
        "color": "#1d2c4d"
      }]
    }, {
      "featureType": "road.highway",
      "elementType": "geometry",
      "stylers": [{
        "color": "#2c6675"
      }]
    }, {
      "featureType": "road.highway",
      "elementType": "geometry.stroke",
      "stylers": [{
        "color": "#255763"
      }]
    }, {
      "featureType": "road.highway",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#b0d5ce"
      }]
    }, {
      "featureType": "road.highway",
      "elementType": "labels.text.stroke",
      "stylers": [{
        "color": "#023e58"
      }]
    }, {
      "featureType": "transit",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "transit",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#98a5be"
      }]
    }, {
      "featureType": "transit",
      "elementType": "labels.text.stroke",
      "stylers": [{
        "color": "#1d2c4d"
      }]
    }, {
      "featureType": "transit.line",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#283d6a"
      }]
    }, {
      "featureType": "transit.station",
      "elementType": "geometry",
      "stylers": [{
        "color": "#3a4762"
      }]
    }, {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [{
        "color": "#0e1626"
      }]
    }, {
      "featureType": "water",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#313f4f"
      }]
    }, {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#4e6d70"
      }]
    }]
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!',
    icon: {
      url: '/wp-content/themes/lightsourcepeople/images/logo_white.svg',
      scaledSize: new google.maps.Size(120, 57),
    }
  });

}


$(function() {
  $('.hamburger').click(function() {
    $('.responsive-menu').slideToggle();
  })

  if ($('#map').length) {
    initMap();
  }

  $("#sectors").mouseenter(function (e) {
    e.preventDefault();
    $('.sectors-sub-menu').fadeIn();
  });

  $("#sectors").mouseleave(function (e) {
    e.preventDefault();
    $('.sectors-sub-menu').hide();
  });

  $('#sectors-btn').click(function () {
    $('.sectors-menu').slideToggle();
  });


  $("#candidates").mouseenter(function (e) {
    e.preventDefault();
    $('.sub-menu').fadeIn();
  });

  $("#candidates").mouseleave(function (e) {
    e.preventDefault();
    $('.sub-menu').hide();
  });

  $('#sectors-btn').click(function(){
    $('.sectors-sub-menu').slideToggle();
  })
  $('#canidate-btn').click(function () {
    $('.candidate-menu').slideToggle();
  });

});



$(function(){
  $('.single-testimonial').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  centerMode: true,
  fade: true,
  cssEase: 'linear',
  focusOnSelect: true,
  centerPadding: 0,
  prevArrow: "<img class='a-left control-c prev slick-prev' src='http://geni-packaging.com/wordpress/wp-content/themes/tjarksandtjarks/assets/img/back_white.png'>",
  nextArrow: "<img class='a-right control-c next slick-next' src='http://geni-packaging.com/wordpress/wp-content/themes/tjarksandtjarks/assets/img/forward_white.png'>",
});
})
