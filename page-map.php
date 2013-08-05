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





 <div id="romeluv-global-map" style="width: 100%; height:320px;  "></div>
          
            <script type="text/javascript">
           
              var map = new google.maps.Map(document.getElementById("romeluv-global-map"), {
                zoom: 17,
                
                mapTypeId: google.maps.MapTypeId.ROADMAP
              });
          
              var infowindow = new google.maps.InfoWindow();
            var bounds = new google.maps.LatLngBounds();
              var marker, i;
             var myIcon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/kml/pal3/icon34.png", null, null, null, new google.maps.Size(30,30));
                                  marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(52.53269103999427, 13.326115608215332),
                                    map: map,
                                    icon:  myIcon
                                  });
                                  bounds.extend(marker.position);
                                        google.maps.event.addListener(marker, "mousedown", (function(marker, i) {
                                          return function() {
                                            infowindow.setContent("<p style='width:95%'><a class='romeluv-google-map-link' href=\"http://postbeschwerde.de/?p=121\"'><b>Von Kundenverhöhnung und verschwundenen Päckchen</b></a><br /> <i>DHL</i>  <br /><b>Sickingenstraße 7, 10553 Berlin </b><br /><br /></p>");
                                            infowindow.open(map, marker);
                                          }
                                        })(marker, i));
                                        
                                          
                                           var myIcon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/kml/pal3/icon34.png", null, null, null, new google.maps.Size(30,30));
                                  marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(52.53269103999427, 13.326115608215332),
                                    map: map,
                                    icon:  myIcon
                                  });
                                  bounds.extend(marker.position);
                                        google.maps.event.addListener(marker, "mousedown", (function(marker, i) {
                                          return function() {
                                            infowindow.setContent("<p style='width:95%'><a class='romeluv-google-map-link' href=\"http://postbeschwerde.de/?p=107\"'><b>Variante 523b: Die Benachrichtigungskarte für jemand anderen</b></a><br /> <i>DHL</i>  <br /><b>Sickingenstraße 7, 10553 Berlin </b><br /><br /></p>");
                                            infowindow.open(map, marker);
                                          }
                                        })(marker, i));
                                        
                                          
                                           var myIcon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/kml/pal3/icon34.png", null, null, null, new google.maps.Size(30,30));
                                  marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(52.53269103999427, 13.326115608215332),
                                    map: map,
                                    icon:  myIcon
                                  });
                                  bounds.extend(marker.position);
                                        google.maps.event.addListener(marker, "mousedown", (function(marker, i) {
                                          return function() {
                                            infowindow.setContent("<p style='width:95%'><a class='romeluv-google-map-link' href=\"http://postbeschwerde.de/?p=87\"'><b>Benachrichtigung am Boden &#8211; Vom Winde verweht</b></a><br /> <i>DHL</i>  <br /><b>Sickingenstraße 7, 10553 Berlin </b><br /><br /></p>");
                                            infowindow.open(map, marker);
                                          }
                                        })(marker, i));
                                        
                                          
                                           var myIcon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/kml/pal3/icon34.png", null, null, null, new google.maps.Size(30,30));
                                  marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(51.8160512150937, 13.216145038604736),
                                    map: map,
                                    icon:  myIcon
                                  });
                                  bounds.extend(marker.position);
                                        google.maps.event.addListener(marker, "mousedown", (function(marker, i) {
                                          return function() {
                                            infowindow.setContent("<p style='width:95%'><a class='romeluv-google-map-link' href=\"http://postbeschwerde.de/?p=48\"'><b>DPD klingelt nicht &#8211; Paket nicht zustellbar</b></a><br /> <i>DPD</i>  <br /><b>Straße der Jugend 8a, 04916 Schönewalde </b><br /><br /></p>");
                                            infowindow.open(map, marker);
                                          }
                                        })(marker, i));
                                        
                                          
                                           var myIcon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/kml/pal3/icon34.png", null, null, null, new google.maps.Size(30,30));
                                  marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(52.5329, 13.32569),
                                    map: map,
                                    icon:  myIcon
                                  });
                                  bounds.extend(marker.position);
                                        google.maps.event.addListener(marker, "mousedown", (function(marker, i) {
                                          return function() {
                                            infowindow.setContent("<p style='width:95%'><a class='romeluv-google-map-link' href=\"http://postbeschwerde.de/?p=35\"'><b>Wer hat mein Paket? &#8211; Folge 5347</b></a><br /> <i>DHL</i>  <br /><b>Sickingenstraße 8, 10553 Berlin </b><br /><br /></p>");
                                            infowindow.open(map, marker);
                                          }
                                        })(marker, i));
                                        
                                          
                                         
       //  Fit these bounds to the map
    map.fitBounds(bounds);
     </script>
     
																</div> <!-- end #content-area -->

				</div> <!-- end #entries-area-content -->
			</div> <!-- end #entries-area-inner -->
		</div> <!-- end #entries-area -->
	</div> <!-- end .container -->
</div> <!-- end #main-content -->




<?php get_footer(); ?>