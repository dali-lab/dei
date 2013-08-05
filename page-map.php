<!DOCTYPE html>

<?php
/*
Template Name: Map Page
*/
?>

<?php get_header(); ?>

    
  <div id="main-content"<?php if ($fullwidth) echo ' class="fullwidth"'; ?>>
  	<style>
      #map_canvas {
        width: 500px;
        height: 400px;
      }
    </style>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, ‘load’, initialize);
    </script>
    
<div id="map_canvas"></div>
   

</div> <!-- end #main-content -->

<?php get_footer(); ?>