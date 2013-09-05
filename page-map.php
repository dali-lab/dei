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
  new google.maps.LatLng(43.703223, -72.288576),
  new google.maps.LatLng(43.703223, -72.208576)
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