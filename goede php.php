<?php 

date_default_timezone_set("Europe/Amsterdam");

$time = date("H:i");

if ($time >= "06:00" and $time < "12:00") {
	$text = "Goedemorgen!";
	$img = "backgrounds/morning.png";
} elseif ($time >= "12:00" and $time < "18:00") {
	$text = "Goedemiddag!";
	$img = "backgrounds/afternoon.png";
	$thing = "plane.png";
	$ID = "plane";
} elseif ($time >= "18:00" and $time < "24:00") {
	$text = "Goedenavond!";
	$img = "backgrounds/evening.png";
} elseif ($time >= "00:00" and $time < "06:00") {
	$text = "Ga slapen!";
	$img = "backgrounds/night.png";
	$thing = "ufo.png";
	$ID = "UFO";
}

?>
<!DOCTYPE html>
<html>
	
	<head>
		<title>goede php</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="php.css">
	</head>
	
	<body background="<?php echo $img; ?>">

		<img src="<?php echo $thing; ?>" id="<?php echo $ID; ?>" >
		
		<h1><?php echo $text; ?><br>
		Toen deze pagina werd geladen was het <?php echo $time; ?></h1>
	
	</body>

</html>