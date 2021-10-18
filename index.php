<?php

require_once("config.php");

//Carrega Apenas um usuario em especifico 
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

// Carrega uma Lista de Usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma Lista de Usuarios Buscando pelo Login 
//$search = Usuario:: search("Alan");
//echo json_encode($search);

//Carregar um Usuario usando o Login e a senha
//$usuario = new Usuario();
//$usuario ->login("Alan","123456");
//echo $usuario;

//Criando um Novo usuario com o Insert
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//Alterando Usuario
//$usuario = new Usuario();
//$usuario->loadById(11);
//$usuario->update("professor", "zooom");
//echo $usuario;

//Deletando um Usuario

$usuario = new Usuario();
$usuario->loadById(11);
$usuario->delete();

echo $usuario;

?>
