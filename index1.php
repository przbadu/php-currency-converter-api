<?php
	$base 		= "USD";
	$target 	= "INR";
	$currency = $base."_".$target;
	$url 			= 'http://www.freecurrencyconverterapi.com/api/v2/convert?q='.$currency;
	$data 		= file_get_contents($url);
	$json 		= json_decode($data);
	// $rates = $json["rates"];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Currency Converter</title>
	</head>
	<body>
		<div>
			<?php echo $currency ?>
			<?php print_r($json->results->$currency->val) ?>
		</div>
	</body>
</html>




$base_target    = $base."_".$target;
$url            = "http://www.freecurrencyconverterapi.com/api/v2/convert?q=".$base_target;

$data           = file_get_contents($url);
$json           = json_decode($data);
$exchange_rate  = $json->results->$base_target->val;

return round($amount*$exchange_rate,2);
