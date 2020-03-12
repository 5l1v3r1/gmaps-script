<?php
	include 'curl.php';
	$gelen = $_GET['gelenID'];
?>
<option value="0">Seçiniz</option>
<?php 
$json = veriCek("https://banaozel.sahibinden.com/sahibinden-ral/rest/countries/".$gelen."/cities");
$data = json_decode($json, true);
for($i=0; $i < count($data["response"]["cities"]); $i++){
	$id = $data["response"]["cities"][$i]["id"];
	$label = $data["response"]["cities"][$i]["label"];
?>
<option value="<?php echo $id; ?>" title="<?php echo $label; ?>"><?php echo $label; ?></option>
<?php } ?>