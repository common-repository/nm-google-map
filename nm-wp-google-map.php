<?php
/*
Plugin Name: NM WP Google Map
Plugin URI: http://nitinmaurya.com/
Description: This plugin is useful to change the url of main website, pages and posts as well as it also replace all OLD URL with NEW URL in whole database.
Version: 1.0
Author: Nitin Maurya
Author URI: http://nitinmaurya.com/
License: A "Slug" license name e.g. GPL2
*/
register_activation_hook(__FILE__,'nm_wp_google_map_install');
function nm_wp_google_map_install(){
	global $wp_version;
	if(version_compare($wp_version, "3.2.1", "<")) {
		deactivate_plugins(basename(__FILE__));
		wp_die("This plugin requires WordPress version 3.2.1 or higher.");
	}
}
add_action('admin_menu','nm_wp_google_map_menu');
    function nm_wp_google_map_menu(){
        add_menu_page('WP Google Map', 'WP Google Map','administrator', 'nm-wp-google-map.php', 'nm_wp_google_map_action', plugins_url('link.png', __FILE__));
   }
function nm_wp_google_map_action(){
	$option_name1 = 'set_address' ;
	$option_name2 = 'set_latitude' ;
	$option_name3 = 'set_zoomlevel' ;
	$option_name4 = 'set_mapwidth_1' ;	
	$option_name5 = 'set_mapwidth_2' ;	
	$option_name6 = 'set_mapheight_1' ;	
	$option_name7 = 'set_mapheight_2' ;	
	$option_name8 = 'set_infowindow' ;
	$option_name9 = 'set_marker' ;
	
	switch($_REQUEST[act]) {
			case "save":
				nm_wp_google_map_url();
				break;
			default:
				
	}
	$set_address=get_option( $option_name1 );
	$set_latitude=get_option( $option_name2 );
	$set_zoomlevel=get_option( $option_name3 );
	$set_mapwidth_1=(get_option( $option_name4 )=="")?'100':get_option( $option_name4 );
	$set_mapwidth_2=(get_option( $option_name5 )=="")?'%':get_option( $option_name5 );
	$set_mapheight_1=(get_option( $option_name6 )=="")?'350':get_option( $option_name6 );
	$set_mapheight_2=(get_option( $option_name7 )=="")?'px':get_option( $option_name7 );
	$set_infowindow=get_option( $option_name8 );
	$set_marker=(get_option( $option_name9 )=="")?'marker1.png':get_option( $option_name9 );
	require_once('form.php');
}   
 

function nm_wp_google_map_url(){
		$option_name1 = 'set_address' ;
		$option_name2 = 'set_latitude' ;
		$option_name3 = 'set_zoomlevel' ;
		$option_name4 = 'set_mapwidth_1' ;	
		$option_name5 = 'set_mapwidth_2' ;	
		$option_name6 = 'set_mapheight_1' ;	
		$option_name7 = 'set_mapheight_2' ;	
		$option_name8 = 'set_infowindow' ;		
		$option_name9 = 'set_marker' ;
		
		$new_value1 = ($_REQUEST['set_address']=="")?'': $_REQUEST['set_address'];
		if ( get_option( $option_name1 ) !== false ) {
			update_option( $option_name1, $new_value1 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name1, $new_value1, $deprecated, $autoload );
		}
		
		
		$new_value2 = ($_REQUEST['set_latitude']=="")?'': $_REQUEST['set_latitude'];
		if ( get_option( $option_name2 ) !== false ) {
			update_option( $option_name2, $new_value2 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name2, $new_value2, $deprecated, $autoload );
		}
		
		$new_value3 = ($_REQUEST['set_zoomlevel']=="")?'5': $_REQUEST['set_zoomlevel'];
		if ( get_option( $option_name3 ) !== false ) {
			update_option( $option_name3, $new_value3 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name3, $new_value3, $deprecated, $autoload );
		}
		
		$new_value4 = ($_REQUEST['set_mapwidth_1']=="")?'100': $_REQUEST['set_mapwidth_1'];
		if ( get_option( $option_name4 ) !== false ) {
			update_option( $option_name4, $new_value4 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name4, $new_value4, $deprecated, $autoload );
		}
		
		$new_value5 = ($_REQUEST['set_mapwidth_2']=="")?'%': $_REQUEST['set_mapwidth_2'];
		if ( get_option( $option_name5 ) !== false ) {
			update_option( $option_name5, $new_value5 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name5, $new_value5, $deprecated, $autoload );
		}
		
		$new_value6 = ($_REQUEST['set_mapheight_1']=="")?'350': $_REQUEST['set_mapheight_1'];
		if ( get_option( $option_name6 ) !== false ) {
			update_option( $option_name6, $new_value6 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name6, $new_value6, $deprecated, $autoload );
		}
		
		$new_value7 = ($_REQUEST['set_mapheight_2']=="")?'px': $_REQUEST['set_mapheight_2'];
		if ( get_option( $option_name7 ) !== false ) {
			update_option( $option_name7, $new_value7 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name7, $new_value7, $deprecated, $autoload );
		}
		
		$new_value8 = ($_REQUEST['set_infowindow']=="")?'': $_REQUEST['set_infowindow'];
		if ( get_option( $option_name8 ) !== false ) {
			update_option( $option_name8, $new_value8 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name8, $new_value8, $deprecated, $autoload );
		}
		
		$new_value9 = ($_REQUEST['set_marker']=="")?'marker1.png': $_REQUEST['set_marker'];
		if ( get_option( $option_name9 ) !== false ) {
			update_option( $option_name9, $new_value9 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name9, $new_value9, $deprecated, $autoload );
		}
}


function nm_show_google_map_action($arg){
$option_name1 = 'set_address' ;
$option_name2 = 'set_latitude' ;
$option_name3 = 'set_zoomlevel' ;
$option_name4 = 'set_mapwidth_1' ;	
$option_name5 = 'set_mapwidth_2' ;	
$option_name6 = 'set_mapheight_1' ;	
$option_name7 = 'set_mapheight_2' ;
$option_name8 = 'set_infowindow' ;	
$option_name9 = 'set_marker' ;	

$set_address=get_option( $option_name1 );
$set_latitude=get_option( $option_name2 );
$zoom=(get_option( $option_name3 )=="")?5:get_option( $option_name3 );
$set_mapwidth_1=(get_option( $option_name4 )=="")?'100':get_option( $option_name4 );
$set_mapwidth_2=(get_option( $option_name5 )=="")?'%':get_option( $option_name5 );
$set_mapheight_1=(get_option( $option_name6 )=="")?'350':get_option( $option_name6 );
$set_mapheight_2=(get_option( $option_name7 )=="")?'px':get_option( $option_name7 );
$set_infowindow=(get_option( $option_name8 )=="")?'':get_option( $option_name8 );
$set_marker=(get_option( $option_name9 )=="")?'marker1.png':get_option( $option_name9 );

$width=$set_mapwidth_1.$set_mapwidth_2;
$height=$set_mapheight_1.$set_mapheight_2;
$str="";
$str.='<div id="map_canvas" class="map-box" style="width:'.$width.'; height:'.$height.';"></div>';
$str.='<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">var styles = [
  {
    stylers: [{ hue: "#00ffe6" },{ saturation: -120 }]
  },{
    featureType: "road",
    elementType: "geometry",
    stylers: [{ lightness: 100 },{ visibility: "simplified" }]
  },{
    featureType: "road",
    elementType: "labels",
    stylers: [{ visibility: "off" }]
  }
];</script>';
if($set_latitude!=""){
$str.='<script type="text/javascript">
var locations = ["'.$set_latitude.'"]; 
var bounds  = new google.maps.LatLngBounds();
var map = new google.maps.Map(document.getElementById("map_canvas"), {
    zoom:'.$zoom.',
    center: new google.maps.LatLng('.$set_latitude.'),
	disableDefaultUI: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
});
map.setOptions({styles: styles});';
if($set_infowindow!=""){
	$str.='var infowindow = new google.maps.InfoWindow({content: "'.$set_infowindow.'"});';
}
$str.='var marker, i;
var geocoder = new google.maps.Geocoder();
marker= new google.maps.Marker({
       	position: new google.maps.LatLng('.$set_latitude.') ,
		map: map, 
		icon: {
            url: "'.plugins_url(  'markers/'.$set_marker , __FILE__ ) .'",
            size: new google.maps.Size(35,44)
           },
  });
marker.setMap(map);	';
if($set_infowindow!=""){  
	$str.='google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});';	
}
$str.='</script>';

}else{
$set_address=($set_address=="")?'1600 Amphitheatre Parkway, Mountain View, CA':$set_address;
$str.='<script type="text/javascript">
var locations = ["'.$set_address.'"];
var map = new google.maps.Map(document.getElementById("map_canvas"), {
    zoom: '.$zoom.',
    mapTypeId: google.maps.MapTypeId.ROADMAP,
	disableDefaultUI: true
});';
if($set_infowindow!=""){
$str.='var infowindow = new google.maps.InfoWindow({content: "'.$set_infowindow.'"});';
}
$str.='var marker, i;

for (i = 0; i < locations.length; i++) {
	var geocoder = new google.maps.Geocoder();
    geocoder.geocode( { 
        "address": locations[i]
    }, function(results, status){

        if (status == google.maps.GeocoderStatus.OK) {
			 var bounds  = new google.maps.LatLngBounds();
			 map.setOptions({styles: styles});
			 marker = new google.maps.Marker({
                position: results[0].geometry.location,
                map: map, 
                 icon: {
                  url: "'.plugins_url( 'markers/'.$set_marker , __FILE__ ) .'",
                  size: new google.maps.Size(35,44)
              } 
            });';
if($set_infowindow!=""){			
$str.='google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});';		
}
$str.='var myLatLng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
bounds.extend(myLatLng);
map.fitBounds(bounds);
map.panToBounds(bounds);
map.setZoom('.$zoom.');

        } 
    });
	
}</script>';
}
 echo  $str;
}


add_shortcode('nm_show_google_map', 'nm_show_google_map_action');

?>