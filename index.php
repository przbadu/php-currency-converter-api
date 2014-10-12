<?php
	$url 	= 'https://openexchangerates.org/api/latest.json?app_id=c081d4df0a3340399917fc2d422e15a2';
	$data = file_get_contents($url);
	$json = json_decode($data);
	// $rates = $json["rates"];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Currency Converter</title>
	</head>
	<body>
		<div>
			<?php print_r($json->rates->INR) ?>
		</div>
	</body>
</html>