<?php
if( isset($_COOKIE['usuario'])){ // ver si esta definida la cookie y entra aquí y sigue para adelante
	
}else{  // si no existe
	header('Location: index.php'); // no estas logeado
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>gestión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- container o container-fluid -->
	<div class="container-fluid">	
		<!-- cabezera -->
		<header>
			<div>
				<div class="fondo_negro">	
					<p class="centrado">
						<img  src="cabezera.jpeg">
					</p>	
					<a href="logout.php">Logout</a>
				</div>
			</div>
		</header>		
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 ">
			</div>
			<div class="col-md-4 ">
<?php 

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$dni = $_POST['dni'];
	$edad = $_POST['edad'];
	$pais = $_POST['pais'];
	$sexo = $_POST['sexo'];
	$discapacidad = $_POST['discapacidad'];

?>
	<form action="index.php" method="POST">
		<div class="form-group">
		  <label>Nombre: <?php echo $nombre;?> </label>					    
		</div>
		<div class="form-group">
		  <label>Apellidos: <?php echo $apellidos;?> </label>					    
		</div>
		<div class="form-group">
		  <label>DNI: <?php echo $dni;?> </label>					    
		</div>
		<div class="form-group">
		  <label>Edad: <?php echo $edad;?> </label>					   
		</div>
		<div class="form-group">
		  <label>País de residencia: <?php echo $pais;?> </label>				    	
		</div>
		<div class="form-group">
		  <label>Sexo: <?php echo $sexo;?> </label>					   				    				    
		</div>
		<div class="form-group">
		  <label>Discapacidad: <?php echo $discapacidad;?> </label>				   				    
		</div>
		<button type="Enviar" class="btn btn-primary">Volver</button> 
	</form>

<?php 

 $precio = 50;


	// EDADES
	if($edad < 15 ){   // menos de 15 años
		$precio = 30;
	}

	if($edad > 59 ){  // más de 60 años
		$precio = 20;
	}

// var_dump ($precio);
	// DISCACIDADES
	if( $discapacidad == "visual" ){
		$precio = $precio * 0.50;	
	}

	if( $discapacidad == "auditiva" ){
		$precio = $precio * 0.75;
	}
// var_dump ($precio);


// Conseguir JSON

	$json = json_encode( $_POST );

		
	$tickets_actuales = scandir('ficheros');
	$num_tickets = count($tickets_actuales) - 1;
// Guardamos: http://php.net/manual/es/function.file-put-contents.php

		file_put_contents("ficheros/".date("Y-m-d-".$num_tickets).".txt", $json);



 ?>
									 
					<hr/>

					<div class="container-fluid">
								<div class="row">
									<div class="col-md-6">
									<p> Edad</p>
									</div>
									<div class="col-md-6">
									<p> <?php echo $edad;?> </p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									<p> Apellidos</p>
									</div>
									<div class="col-md-6">
									<p> <?php echo $apellidos;?> </p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									<p> DNI</p>
									</div>
									<div class="col-md-6">
									<p> <?php echo $dni;?> </p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									<p> Discapacidad</p>
									</div>
									<div class="col-md-6">
									<p> <?php echo $discapacidad;?>  </p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									<p> Precio final: </p>
									</div>
									<div class="col-md-6">
									<p> <?php echo $precio;?>  </p>
									</div>
								</div>
							
					</div>
					<br>
					<hr/>


						
			</div>
			<div class="col-md-4 ">		
			</div>
		</div>  <!-- fin fila (ROW) -->	
	</div> <!-- fin Container -->	
	<div class="container-fluid">
		<footer class="footer">
			<h6>Desarrollado por David Rabassa</h6>
		</footer>
	</div>



</body>
</html>
