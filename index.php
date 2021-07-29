<?php  

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//Carrega um usuário
/*$root = new Usuario();

$root->loadbyId(3);

echo $root;
*/

//Carrega uma lista de usuários
/*
$lista = Usuario::getList();

echo json_encode($lista);
*/

//Carrega uma lista de usuários, buscando peo login:
/*
$search = Usuario::search("jo");

echo json_encode($search);
*/

//Carrega um usuário, usando o login e a senha:
/*
$usuario = new Usuario();

$usuario->login("root", "!@#$");

echo $usuario;
*/

/*
$aluno = new Usuario();

$aluno->setDeslogin("aline");

$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;
*/

$aluno = new Usuario("aline", "@lun0");

$aluno->insert();

echo $aluno;


?>