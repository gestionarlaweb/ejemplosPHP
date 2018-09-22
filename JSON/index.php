<!DOCTYPE html>
<html>
<head>
	<title>JSON</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="padding: 15px;">
	<h3>PRUEBAS JSON</h3>
	<hr>

	<?php

		$json='{"nombre":"david","apellidos":"rabassa planas"}';
		$array=json_decode($json, true);
		foreach ($array as $key => $value) {
			echo "{$key}:{$value}<br>";
		}

	?>

</body>
</html>
