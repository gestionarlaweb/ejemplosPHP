<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>


	<!--
		action: Dónde mandar los datos del formulario
			URL absoluta: Con http://
			URL relativa: gestion.php
			Y en blanco action="": Manda al mismo fichero

		method: Cómo manda los datos
			GET: Manda la información por la URL
			POST:

	-->
	<form action="json.php" method="POST">
		<div>Nombre:</div>
		<input type="text" name="nombre">
		<div>Apellido:</div>
		<input type="text" name="apellido">
		<br><br>
		<input type="submit" name="">
	</form>

	<?php

	// VARIABLES DEL SISTEMA: Empiezan por $_

	// $_GET: Array del sistema con las variables de la URL
/*
	if( isset($_GET['nombre']) == true ){
		echo "Me llamo ".$_GET['nombre']." ".$_GET['apellido'];
	}


	// $_POST: Array del sistema con las variables transparentes
	if( isset($_POST['nombre']) == true ){
		echo "Me llamo ".$_POST['nombre']." ".$_POST['apellido'];
	}
*/

	?>



</body>
</html>