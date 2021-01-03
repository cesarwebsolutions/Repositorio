<?php 
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_loja_segunda';

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
	die("Falha na conexão com banco de dados: " . $conn->connect_error);
}



 