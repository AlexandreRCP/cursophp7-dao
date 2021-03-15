<?php 
	require_once("config.php");

/*	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);
*/
	// Carrega 1 usuário
//	$cad = new Usuario();
//	$cad->loadById(2);
//	echo $cad;

	//Carrega uma lista de usuários

//	$list = Usuario::getList();
//	echo json_encode($list)

	//Carrega uma lista de usuário buscando pela pesquisa
//	$search = Usuario::search("Al");
//	echo json_encode($search);

	//Carrega um usuário usando o login e a senha
//	$usuario = new Usuario();
//	$usuario->login("Alexandre Paiva", "123456");

//	echo $usuario;
/*	Criando um novo usuário
	$aluno = new Usuario("Jão Murilo", "homenzinho");

	$aluno->insert();

	echo $aluno;
*/

	$usuario = new Usuario();

	$usuario->loadById(1);

	$usuario->upDate("professor", "professor");
?>