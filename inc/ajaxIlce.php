<?php
	include 'curl.php';
	$gelen = $_GET['gelenID'];
	echo $gelen;
?>
<option value="0">Seçiniz</option>
<?php 
$json = veriCek("https://banaozel.sahibinden.com/sahibinden-ral/rest/cities/".$gelen."/towns");
$data = json_decode($json, true);
for($i=0; $i < count($data["response"]["towns"]); $i++){
	$id = $data["response"]["towns"][$i]["id"];
	$label = $data["response"]["towns"][$i]["label"];
?>
	<option value="<?php echo $id; ?>"><?php echo $label; ?></option>
<?php } ?>