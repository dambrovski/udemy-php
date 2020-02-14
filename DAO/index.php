<?php


require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/
//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(2);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("j");
//echo json_encode($search);


//carrega um usuario usando o login e senha
//$usuario = new Usuario();
//$usuario->login("jose","1234567");
//echo $usuario;

//CADASTRAR ALUNO NOVO
//$aluno = new Usuario("julio","senha");
//$aluno->insert();
//echo $aluno;

//UPDATE DE UM ALUNO
//$aluno = new Usuario();
//$aluno->loadById(12);
//echo $aluno;
//echo "<br />";
//$aluno->update("professor", "kkksouprof");
//echo $aluno;

//DELETE DE UM ALUNO
$aluno = new Usuario();
$aluno->loadbyId(13);
echo $aluno;
echo "<br />";
$aluno->delete();
echo $aluno;

?>