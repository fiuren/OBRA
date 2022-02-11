<?php
	
	require 'conexion.php';

	$id = $_GET['id'];
	
	$sql = "DELETE FROM citas WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>