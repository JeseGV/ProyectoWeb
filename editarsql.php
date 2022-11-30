<?php
	$mysqli = new mysqli('localhost', 'root', '', 'contactos');
	$mysqli->set_charset("utf8");
	$query = $mysqli->query("UPDATE personas SET Nombre='".$_POST['nombre']."', 
	Teléfono='".$_POST['telefono']."' WHERE id_Contacto='".$_POST['idcontacto']."'");
	header("location: cambios.php");
?>