<?php
$host = 'localhost';
$usuario = 'root';
$password = '';
$database = 'data_user';


$conn = new mysqli($host, $usuario, $password);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $database";
if (!$conn->query($sqlCreateDB)) {
    die("erro" . $conn->error);
}

$conn->select_db($database);


$sqlCreateTable = "
    CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) UNIQUE NOT NULL,
        email VARCHAR(255) NOT NULL,
        cpf VARCHAR(14) UNIQUE NOT NULL,
        senha VARCHAR(255) NOT NULL,
        datanasc Date
    );
";

if (!$conn->query($sqlCreateTable)) {
    die("Erro: " . $conn->error);
}
?>