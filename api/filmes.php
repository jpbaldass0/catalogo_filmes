<?php
header("Content-Type: application/json; charset=utf-8");
// Inclui o arquivo responsável pela conexão com o banco
require_once "../config/conexao.php";
// Consulta todos os filmes cadastrados
$sql = "SELECT * FROM filmes";
$resultado = $conexao->query($sql);
$filmes = [];
// Converte cada registro do banco em um array associativo
while ($filme = $resultado->fetch_assoc()) {
 $filmes[] = $filme;
}
// Retorna a lista de filmes em formato JSON
echo json_encode(
 $filmes,
 JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);