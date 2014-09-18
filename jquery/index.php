<?
$conexao = mysql_connect("localhost", "root", "root") or die(mysql_error);
$db = mysql_select_db("fatec", $conexao) or die();
$id = $_POST["Email"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$curso = $_POST["curso"];
$observacao = $_POST["observacao"];

$query = "insert into aluno (id,nome,email,senha,curso,observacao) values ($id, $nome, $Email, $senha, $observacao)";
$query = mysql_query($query, $conexao); 
echo "<p>Dados Gravados com sucesso</p>";
?>