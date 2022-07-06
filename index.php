<?php

var_dump(require_once("config.php"));

//carrega apenas um usuário
//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

//carrega todos os usuarios
//var_dump($lista = Usuario::getList());
//echo json_encode($lista)

//carrega uma lita de usuários buscado pelo login
//$search = Usuario::search("m");
//echo json_encode($search);

//carrega um usuário usando o login e senha
$usuario = new Usuario();
$usuario->login("tulio","idk");
echo $usuario;


?>