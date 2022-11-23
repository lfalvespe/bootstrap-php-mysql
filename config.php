<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cadastro';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//Testando a conexão

if ($conexao -> connect_errno) {
	echo "Erro: Falha na conexão com o banco de dados.";
}else {
	echo "Conexão efetuada com sucesso!";
}

?>

