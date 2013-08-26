<!DOCTYPE html>

<?php
/*
Template Name: Map Page
*/
?>

<?php get_header(); ?>

<div id="main-content" class="fullwidth">

   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

  <div id="global-map" style="width:960px; height:520px;"></div>

  <script type="text/javascript">

var line;

    var map = new google.maps.Map(document.getElementById("global-map"), {
      zoom: 17,
      center: new google.maps.LatLng(43.703223, -72.288576),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

 var lineCoordinates = [
    new google.maps.LatLng(22.291, 153.027),
    new google.maps.LatLng(18.291, 153.027)
  ];

  var lineSymbol = {
    path: google.maps.SymbolPath.CIRCLE,
    scale: 8,
    strokeColor: '#393'
  };

  line = new google.maps.Polyline({
    path: lineCoordinates,
    icons: [{
      icon: lineSymbol,
      offset: '100%'
    }],
    map: map
  });

  animateCircle();


function animateCircle() {
    var count = 0;
    window.setInterval(function() {
      count = (count + 1) % 200;

      var icons = line.get('icons');
      icons[0].offset = (count / 2) + '%';
      line.set('icons', icons);
  }, 20);
}

google.maps.event.addDomListener(window, 'load', initialize);

     </script>


   </div> <!-- end #main-content -->




   <?php get_footer(); ?>