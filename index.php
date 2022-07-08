<?php

var_dump(require_once("config.php"));

/*
Carrega apenas um usuário:
$root = new Usuario();
$root->loadbyId(4);
echo $root;
*/

/*
Carrega todos os usuarios:
var_dump($lista = Usuario::getList());
echo json_encode($lista)
*/

/*
Carrega uma lita de usuários buscado pelo login:
$search = Usuario::search("m");
echo json_encode($search);
*/

/*
Carrega um usuário usando o login e senha:
$usuario = new Usuario();
$usuario->login("tulio","idk");
echo $usuario;
*/

/*
Inserindo um novo usuario:
$aluno = new Usuario("aluno", "tatum");
$aluno->insert();
echo $aluno;
*/

/*
Atualizar um usuario
$usuario = new Usuario();
$usuario->loadById(9);
$usuario->update("jaylen", "brown");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(9);
$usuario->delete();

echo $usuario;

?>