<?php include 'inc/curl.php'; ?>
<?php error_reporting(0); ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Google Maps Proje v2</title>
	
	<!-- css -->
	<link rel="stylesheet" type="text/css" media="all" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="assets/css/style.css?<?php echo time(); ?>" />
	
	<!-- js -->
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
	<!-- maps -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&libraries=geometry&sensor=false&key=AIzaSyDA0Y2ndKKvhj6EIAoBs2ydwr-HqiHZobs"></script>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript" src="http://www.geocodezip.com/geoxml3_test/geoxml3_kmlStr.js"></script>
	<script type="text/javascript" src="assets/js/maps.min.js?<?php echo time(); ?>"></script>
	
</head>
<body>

	<!-- container -->
	<div class="container">
		
		<!-- header -->
		<header id="header">
		
			<!-- Konum Seç -->
			<div class="konumSec col-md-12">
			
				<!-- Ülkeler -->
				<div class="ulkeler col-md-4">
					<div class="form-group">
						<label>Ülke:</label>
						<select class="form-control" id="ulkeler">
						<option>Seçiniz</option>
						<?php 
							$json = veriCek("https://banaozel.sahibinden.com/sahibinden-ral/rest/countries");
							$data = json_decode($json, true);
							for($i=0; $i < count($data["response"]["countries"]); $i++){
								$id = $data["response"]["countries"][$i]["id"];
								$label = $data["response"]["countries"][$i]["label"];
						?>
							<option value="<?php echo $id; ?>" title="<?php echo $label; ?>"><?php echo $label; ?></option>
						<?php } ?>
						</select>
					</div>
				</div>
				
				<!-- İller -->
				<div class="iller col-md-4">
					<div class="form-group">
						<label>İller:</label>
						<select class="form-control" id="iller">
							<option>Seçiniz</option>
						</select>
					</div>
				</div>
				
				<!-- İlçeler -->
				<div class="ilceler col-md-4">
					<div class="form-group">
						<label>İlçeler:</label>
						<select class="form-control" id="ilceler">
							<option>Seçiniz</option>
						</select>
					</div>
				</div>
				
			</div>
			<!-- /Konum Seç -->
			
			<!-- Durum -->
			<div class="durum col-md-12"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Lütfen bekleyin.</div>
			
			<!-- Mesaj -->
			<div class="mesaj col-md-12"></div>
		</header>
		<!-- /header -->
		
		<!-- main -->
		<main id="main">
			
			<!-- Harita -->
			<div class="col-md-12">
				<div id="harita"></div>
			</div>
			
			<!-- Koordinat bilgileri -->
			<div class="col-md-12">
				
				<!-- Koordinatlar -->
				<div class="row koordinatlar">
					<div class="enlem col-md-6 form-group">
						<label>Enlem:</label>
						<input type="text" class="form-control" id="enlemKoor">
					</div>
					<div class="boylam col-md-6 form-group">
						<label>Boylam:</label>
						<input type="text" class="form-control" id="boylamKoor">
					</div>
				</div>
				
				<!-- Adres bilgileri -->
				<div class="row adresbilgileri">
					<div class="col-md-12 form-group">
						<label>Koordinat Adresi:</label>
						<input type="text" class="form-control" id="koordinatAdresi">
					</div>
				</div>
			
			</div>
			
			<!-- gecocode -->
			<div class="col-md-12">
				<div class="gecocode form-group">
					<label>Encode Geo:</label>
					<textarea class="form-control" id="encodeGeoSehir"></textarea>
				</div>
			</div>
			
			
			
		</main>
		<!-- /main -->
		

	
	
</body>
</html>