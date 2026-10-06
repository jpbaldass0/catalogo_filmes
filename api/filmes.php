<?php
header("Content-Type: application/json; charset=utf-8");
require_once "../config/conexao.php";
// Recupera o id informado pela URL, se existir
$id = $_GET["id"] ?? null;
// Se nenhum id foi informado, retorna todos os filmes
if ($id === null) {
 $sql = "SELECT * FROM filmes";
 $resultado = $conexao->query($sql);
 $filmes = [];
 while ($filme = $resultado->fetch_assoc()) {
 $filmes[] = $filme;
 }
 echo json_encode(
 $filmes,
 JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
 );
 exit;
}

$stmt = $conexao->prepare(
 "SELECT * FROM filmes WHERE id = ?"
);

$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$filme = $resultado->fetch_assoc();
echo json_encode(
 $filme,
 JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);