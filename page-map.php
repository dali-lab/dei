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
      zoom: 10,
      center: new google.maps.LatLng(43.703223, -72.288576),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

google.maps.event.addDomListener(window, 'load', initialize);
     </script>


   </div> <!-- end #main-content -->




   <?php get_footer(); ?>