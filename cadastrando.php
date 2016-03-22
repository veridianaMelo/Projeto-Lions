<!DOCTYPE html>
<html>
<head>
<title>Cadastro realizado com sucesso!!!</title>
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

?>
<?php
$nome=$_POST['nome'];
$nomeConjuge=$_POST['nomeConjuge'];
$naturalidade=$_POST['naturalidade'];
$codigoClube = $_POST['codigoClube'];
$distrito = $_POST['distrito'];
$dataNascimento =$_POST['dataNascimento'];
$matricula =$_POST['matricula'];
$dataAdmissao = $_POST['dataAdmissao'];
$melvin = $_POST['melvin'];
$Delegado = $_POST['delegado'];
$DelegadoSuplente =$_POST['delegadoSuplente'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sql = mysql_query("INSERT INTO usuarios(nome, nomeConjuge,naturalidade,codigoClube,distrito,
	dataNascimento, matricula, dataAdmissao, melvin, delegado,
	delegadoSuplente,endereco,cidade,estado,email,telefone) 
VALUES ('$nome','$nomeConjuge','naturalidade','codigoClube','$distrito', '$dataNascimento'
	$matricula,$dataAdmissao,$melvin,$delegado,$delegadoSuplente,$endereco,
	$cidade,$estado,$email,$telefone)");
echo "<center><h1>Cadastro realizado com sucesso!!!</h1></center>";
?>
</body>
</html>