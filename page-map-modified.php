<!DOCTYPE html>

<?php
/*
Template Name: Map Page
*/
?>
<?php
$et_ptemplate_settings = array();
$et_ptemplate_settings = maybe_unserialize( get_post_meta( get_the_ID(), 'et_ptemplate_settings', true ) );

$fullwidth = isset( $et_ptemplate_settings['et_fullwidthpage'] ) ? (bool) $et_ptemplate_settings['et_fullwidthpage'] : false;

$et_ptemplate_blogstyle = isset( $et_ptemplate_settings['et_ptemplate_blogstyle'] ) ? (bool) $et_ptemplate_settings['et_ptemplate_blogstyle'] : false;

$et_ptemplate_showthumb = isset( $et_ptemplate_settings['et_ptemplate_showthumb'] ) ? (bool) $et_ptemplate_settings['et_ptemplate_showthumb'] : false;

$blog_cats = isset( $et_ptemplate_settings['et_ptemplate_blogcats'] ) ? (array) $et_ptemplate_settings['et_ptemplate_blogcats'] : array();
$et_ptemplate_blog_perpage = isset( $et_ptemplate_settings['et_ptemplate_blog_perpage'] ) ? (int) $et_ptemplate_settings['et_ptemplate_blog_perpage'] : 10;
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
  new google.maps.LatLng(43.701501,-72.286372),
new google.maps.LatLng(43.701842,-72.286448),
new google.maps.LatLng(43.701811,-72.286796),
new google.maps.LatLng(43.702071,-72.286828),
new google.maps.LatLng(43.702614,-72.28736),
new google.maps.LatLng(43.702603,-72.287681),
new google.maps.LatLng(43.702575,-72.288006),
new google.maps.LatLng(43.703607,-72.288199),
new google.maps.LatLng(43.704134,-72.287899),
new google.maps.LatLng(43.70453,-72.287888),
new google.maps.LatLng(43.705515,-72.287794),
new google.maps.LatLng(43.70581,-72.288046),
new google.maps.LatLng(43.70636,-72.288159),
new google.maps.LatLng(43.706969,-72.287982),
new google.maps.LatLng(43.707322,-72.287703),
new google.maps.LatLng(43.707272,-72.287338),
new google.maps.LatLng(43.707035,-72.286893),
new google.maps.LatLng(43.707551,-72.287268),
new google.maps.LatLng(43.7075,-72.286887),
new google.maps.LatLng(43.707403,-72.28649),
new google.maps.LatLng(43.707605,-72.28634),
new google.maps.LatLng(43.708008,-72.286566),
new google.maps.LatLng(43.708497,-72.286195)
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

  // Calling a newly created function (Joshua)
  //initialize();

  function animateCircle() {
    var count = 0;
    window.setInterval(function() {
      count = (count + 1) % 200;

      var icons = line.get('icons');
      icons[0].offset = (count / 2) + '%';
      line.set('icons', icons);
    }, 20);
  }

// Newly created function (Joshua); adapted from Google API Resources
  function initialize2() {
  	if (GBrowserIsCompatible()) {
  		// Did not include this line from the Google sample: var map = new GMap2(document.getElementById("map_canvas"));
  		// And this line:         map.setCenter(new GLatLng(37.4419, -122.1419), 13);
  		// And this line: GEvent.addListener(map, "click", function(overlay,latlng) {
  		var lat = 43.704441; // Inputted a numerical value vs. the sample's "latlng.lat()"
  		var long = -72.288693; // Inputted a numerical value vs. the sample's "latlng.lng()"
  		var latOffset = 0.01;
  		var lonOffset = 0.01;
  		var polygon = new GPolygon([
  			new GLatLng(lat, lon-lonOffset),
  			new GLatLng(lat + latOffset, lon),
  			new GLatLng(lat, lon + lonOffset),
            new GLatLng(lat - latOffset, lon),
            new GLatLng(lat, lon - lonOffset)
		  ], "#f33f00", 5, 1, "#ff0000", 0.2);
		  map.addOverlay(polygon);
  		});
  	}
  } 


  
  function showOverlays() {
    setAllMap(map);
  }

  function clearOverlays() {
    setAllMap(null);
  }

  google.maps.event.addDomListener(window, 'load', initialize);

</script>

<button onclick="clearOverlays()">Hide Overlays</button>
<button onclick="showOverlays()">Show All Overlays</button>
<button onclick="deleteOverlays()">Delete Overlays</button>



</div> <!-- end #main-content -->




<?php get_footer(); ?>
