<?php 
	require_once("config.php");

/*	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);
*/

	$cad = new Usuario();

	$cad->loadById(2);

	echo $cad;
?>