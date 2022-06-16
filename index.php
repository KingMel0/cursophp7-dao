<?php

var_dump(require_once("config.php"));

//carrega apenas um usuário
//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

//carrega todos os usuarios
var_dump($lista = Usuario::getList());

echo json_encode($lista)


?>