<!DOCTYPE html>

<?php
/*
Template Name: Map Page
*/
?>

<?php get_header(); ?>

<div id="main-content" class="fullwidth">

  <script src="http://maps.google.com/maps/api/js?sensor=false"  type="text/javascript"></script>

  <div id="global-map" style="width:100%; height:520px;"></div>

  <script type="text/javascript">

    var map = new google.maps.Map(document.getElementById("global-map"), {
      zoom: 20,
      center: new google.maps.LatLng(43.703223, -72.288576),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var bounds = new google.maps.LatLngBounds();

    var infowindow = new google.maps.InfoWindow();
    
    var marker, i;

    bounds.extend(marker.position);
    google.maps.event.addListener(marker, "mousedown", (function(marker, i) {
      return function() {
        infowindow.setContent("<p style='width:95%'><a class='romeluv-google-map-link' href=\"http://postbeschwerde.de/?p=121\"'><b>Von Kundenverhöhnung und verschwundenen Päckchen</b></a><br /> <i>DHL</i>  <br /><b>Sickingenstraße 7, 10553 Berlin </b><br /><br /></p>");
        infowindow.open(map, marker);
      }
    })(marker, i));


       //  Fit these bounds to the map
       map.fitBounds(bounds);
     </script>


   </div> <!-- end #main-content -->




   <?php get_footer(); ?>