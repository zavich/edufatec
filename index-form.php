<?php

$conexao = mysql_connect("localhost", "root", "root") or die(mysql_error());

if($conexao != null)
{

$db = mysql_select_db("fatec", $conexao);

$nome 		= $_POST["nome"];
$sobrenome 	= $_POST["sobrenome"];
$email 		= $_POST["email"];
$senha 		= $_POST["senha"];
$curso 		= $_POST["curso"];
$observacao = $_POST["observacao"];

$query = "insert into aluno values(null,'".$nome."', '".$sobrenome."','".$email."', '".$curso."','".$observacao."','".$senha."')";
$rst   = mysql_query($query) or die("Erro SQL : ".mysql_error() . " - SQL : ".$query); 
echo "<p>Dados Gravados com sucesso</p>";

}
else
{
	echo 'Falta conectar com o banco de dados';
}


?>

