<?php
// Google Geocoding API Key
$apiKey  = 'API KEY GOES HERE';
$address = urlencode( 'saratpally durgapur west bengal 713206' );
$url     = "https://maps.googleapis.com/maps/api/geocode/json?address=$address&key=AIzaSyCFveobwnNhJySfU3Z_nzyIGdyaSJjeKlY";
$resp    = json_decode( file_get_contents( $url ), true );
echo '<pre>';
print_r($resp);

// Latitude and Longitude (PHP 7 syntax)
echo $lat    = $resp['results'][0]['geometry']['location']['lat'] ?? '';
echo $long   = $resp['results'][0]['geometry']['location']['lng'] ?? '';
?>