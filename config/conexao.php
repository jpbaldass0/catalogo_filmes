<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "catalogo_filmes";
$conexao = new mysqli($host, $usuario, $senha, $banco);
if ($conexao->connect_error) {
 die("Erro na conexão com o banco de dados.");
}
$conexao->set_charset("utf8mb4");