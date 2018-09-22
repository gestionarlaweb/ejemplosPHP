<?php

	# JSON: JavaScript Object Notation

	//print_r($_POST);

	$json = json_encode( $_POST ); // Pasa de Array a String JSON

	$array = json_decode( $json, true ); // Pasa JSON a Array

	print_r($array['nombre']);


?>