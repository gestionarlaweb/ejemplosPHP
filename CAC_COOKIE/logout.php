<?php

	setcookie("usuario", false, -1);
	unset($_COOKIE['usuario']);

	header('Location: index.php'); // no estas logeado

?>