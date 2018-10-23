
function initMap(LatC, lonC, markerArray, myZoom) {
  
  
  var map = new google.maps.Map(document.getElementById('map'), {
   center: {lat:parseFloat(LatC), lng: parseFloat(lonC)},
    zoom: myZoom,
  });



  // Prtint Markers
  var iconBase = 'https://www.laboratoriosathos.com/wp-content/uploads/2018/02/marker.png';

  var infowindow = new google.maps.InfoWindow();

  for (var i = markerArray.length - 1; i >= 0; i--) {
    var marker = new google.maps.Marker({
      position: {lat: parseFloat(markerArray[i].lat), lng: parseFloat(markerArray[i].lon)},
      map: map,
      title: markerArray[i].des,
      icon: iconBase,
      animation: google.maps.Animation.DROP,
    });

    google.maps.event.addListener(marker, 'click', (function (marker, i) {
      return function () {
        infowindow.setContent(markerArray[i].des);
        infowindow.open(map, marker);
      }
    })(marker, i)); 
  }
}

(function ($, root, undefined) {
	$(function () {
		'use strict';
	
			$.getJSON("https://www.laboratoriosathos.com/ubicaciones.json", function(datos) {
				
        var latC;
        var lonC;
        var markerArray = new Array;
        
        function printMap(index){


          $.each(datos, function(i, item) {
            if (item.idUbi == index ) {
            	latC = item.lat
							lonC = item.lon
          		markerArray = item.locales;
            }
          });

          $.each(markerArray, function(i, item) {
            $('.infoPanels').append("<div class='item animated fadeInRight'>"+item.des+"</div>")
          });

    

          initMap(latC, lonC, markerArray, 10);

        }


        $(".searchMap").change(function(){
        	$('.infoPanels').empty();
        	printMap($(this).val());
        })

        $.each(datos, function(i, item) {
        	var locales = item.locales
        	$.each(locales, function(k, item2){
          	markerArray.push(item2);
        	})
        });

        latC = 4.5111763;
				lonC = -73.00311;

        initMap(latC,lonC,markerArray, 6);

			})

			
	
	})
})(jQuery, this);
