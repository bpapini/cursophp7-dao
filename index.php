<?php

	require_once("config.php");

	/*$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios);
	*/


	//carrega um usuário
	/*
	$root = new Usuario();
	$root->loadById(3);
	echo $root;
	*/


	//carrega uma lista de usuários
	/*
	$lista = Usuario::getList();
	echo json_encode($lista, JSON_UNESCAPED_SLASHES);
	*/


	//carrega uma lista de usuários buscando pelo login
	/*
	$search = Usuario::search("o");
	echo json_encode($search);
	*/


	//carrega um usuário com base em seu login e senha
	/*
	$usuario = new Usuario();
	$usuario->login("Bruno", "0987654321");
	echo $usuario;
	*/


	//inserir novo registro
	/*
	$aluno = new Usuario("aluno", "111444777");
	$aluno->insert();
	echo $aluno;
	*/


	$usuario = new Usuario();
	$usuario->loadById(7);

	$usuario->update("professor", "996633");

	echo $usuario;

?>