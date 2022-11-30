<!--
<?php
	$mysqli = new mysqli('localhost', 'root', '', 'contactos');
	$mysqli->set_charset("utf8");
	$query = $mysqli->query("INSERT INTO personas (id_Contacto, Nombre, Número)
     VALUES (NULL, '".$_POST['nombre']."', '".$_POST['telefono']."');");
	header("Location: index.php");
?>
-->
<?php 
$mysqli = new mysqli('localhost', 'root', '', 'contactos');
$query = $mysqli->query("INSERT INTO personas (id_contacto, Nombres, Número) VALUES (NULL, '".$_POST['nombres']."', '".$_POST['telefono']."');");
header("Location: index.php");
?>