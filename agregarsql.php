<?php
	$mysqli = new mysqli('localhost', 'root', '', 'contactos');
	$mysqli->set_charset("utf8");
	$query = $mysqli->query("INSERT INTO personas (id_Contacto, Nombre, Número)
     VALUES (NULL, '".$_POST['nombre']."', '".$_POST['telefono']."');");
	header("Location: index.php");
?>