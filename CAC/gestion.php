
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
				</div>
			</div>
		</header>		
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 ">
			</div>
			<div class="col-md-4 ">
				
					 <form action="entrada.php" method="POST">
					  <div class="form-group">
					    <label>Nombre:</label>
					    <input type="name" class="form-control" name="nombre">
					  </div>
					  <div class="form-group">
					    <label>Apellidos:</label>
					    <input type="name" class="form-control" name="apellidos">
					  </div>
					  <div class="form-group">
					    <label>DNI:</label>
					    <input type="name" class="form-control" name="dni">
					  </div>
					  <div class="form-group">
					    <label>Edad:</label>
					    <input type="name" class="form-control" name="edad">
					  </div>
					  <div class="form-group">
					    <label>País de residencia:</label>
					    <select name="pais" class="form-control">
					    	<option value="España">España</option>
					    	<option value="Italia">Italia</option>
					    	<option value="francia">Francia</option>
					    	<option value="Alemania">Alemania</option>
					    	<option value="Inglaterra">Inglaterra</option>
					    </select>	
					  </div>
					  <div class="form-group">
					    <label>Sexo:</label>
					    	<br>
					    	<input type="radio" name="sexo" value="hombre" checked > Hombre<br>
							<input type="radio" name="sexo" value="mujer"> Mujer<br>  
							<br> 			    
					  </div>
					  <div class="form-group">
					    <label name="name">Discapacidad:</label>
					    <select name="discapacidad" class="form-control">
					    	<option value="no">No</option>
					    	<option value="visual">Visual</option>
					    	<option value="auditiva">Auditiva</option>
					    </select>
					  </div>
					  <button type="Enviar" class="btn btn-primary">Enviar</button> 
					</form>
				 <hr/>	
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
// Pasamos información de la entrada por formulario a ENTRADA.PHP
$i = 1;
?>

</body>
</html>