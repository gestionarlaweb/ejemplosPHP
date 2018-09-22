<!DOCTYPE html>
<html>
<head>
	<title>CAC Valencia</title>
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
				</div>
			</div>
		</header>		
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 ">
				<p class="centrado">
					<img  src="acceso.jpeg">
				</p>
			</div>
			<div class="col-md-4 ">
				<?php
					if( isset($_POST['nombre']) ){
						// Si hay algo en el formulario metete por aqui
		 	
							$nombre_fichero = "seguridad.txt";
							$gestor = fopen($nombre_fichero, "r");
							// metemos el contenido del fichero en la cadena String $contenido_fichero
							$contenido_fichero = fread($gestor, filesize($nombre_fichero));
							
							$nombre_pass = ($_POST['nombre'].":".$_POST['password']);


							if ($contenido_fichero == $nombre_pass) {
							  echo "Usuario y Password correcto";
							  header('Location: gestion.php');
							}else{
								echo "No es correcto usuario o password";
							}

							fclose($gestor);
					}				
				?>

				<form action="" method="POST">
				 <div class="form-group">
					  <label for="name">Nombre:</label>
					  <input type="name" class="form-control" name="nombre">
					</div>
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input type="password" class="form-control" name="password">
					</div>
					  
					<button type="Enviar" class="btn btn-primary">Submit</button>
				</form>
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

<?php 
// Formulario de entrada y redireccionamos a GESTION.PHP

?>

</body>
</html>
