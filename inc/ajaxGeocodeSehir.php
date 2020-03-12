<?php
	include 'curl.php';
	$gelen = $_GET['gelenID'];

	$json = veriCek("https://banaozel.sahibinden.com/sahibinden-ral/rest/boundaries/City/".$gelen."?version=2");
	$data = json_decode($json, true);
	$geocode = "";
	$geocode2 = "";
	for($i=0; $i < count($data["response"]["polygons"]); $i++){
		$geocode .= "#GMAP#".$data["response"]["polygons"][$i];
	}
	
 
?>
<?php echo $geocode; ?>
	