<!DOCTYPE html>

<?php
/*
Template Name: Map Page
*/
?>

<?php get_header(); ?>

   <div id="main-content" class="fullwidth">
	<div class="container clearfix">
		<div id="entries-area">
			<div id="entries-area-inner">
				<div id="entries-area-content" class="clearfix">
					<div id="content-area">


<div id="map_canvas">

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

</div>

																</div> <!-- end #content-area -->

				</div> <!-- end #entries-area-content -->
			</div> <!-- end #entries-area-inner -->
		</div> <!-- end #entries-area -->
	</div> <!-- end .container -->
</div> <!-- end #main-content -->




<?php get_footer(); ?>