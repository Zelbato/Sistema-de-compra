<?php
$host = 'localhost';  // Corrigido de 'Localhost' para 'localhost' (minúsculo)
$port = '3306';
$userName = 'root';
$passoword = '';  // Corrigido o erro de digitação em "password"
$dbName = 'compras';

// Criando a conexão com MySQL
$conexao = new mysqli($host, $userName, $passoword, $dbName);

// Verificando se houve erro na conexão
if ($conexao->connect_errno) {
    echo "Falha ao conectar: (" . $conexao->connect_errno . ") " . $conexao->connect_error;
} else {
    // echo "Conexão feita com sucesso"; // Você pode remover isso em produção
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('BASE_URL', '/Sistema-de-compra/public/');

?>
