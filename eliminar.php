<?php
	$id = $_GET['id'];
	$mysqli = new mysqli('localhost', 'root', '', 'contactos');
	$mysqli->set_charset("utf8");
	$query = $mysqli->query("DELETE FROM personas WHERE id_Contacto='".$id."'");
	header("location: bajas.php");
?>