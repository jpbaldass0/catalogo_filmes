<?php
header("Content-Type: application/json; charset=utf-8");

$filmes = [
 [
 "id" => 1,
 "titulo" => "Interestelar",
 "genero" => "Ficção científica",
 "ano" => 2014
 ],

 [
 "id" => 2,
 "titulo" => "Toy Story",
 "genero" => "Animação",
 "ano" => 1995
 ],

 [
 "id" => 3,
 "titulo" => "O Auto da Compadecida",
 "genero" => "Comédia",
 "ano" => 2000
 ]
];


// Recupera o id informado pela URL, se existir
$id = $_GET["id"] ?? null;
// Se nenhum id foi informado, retorna todos os filmes
if ($id === null) {
 echo json_encode(
 $filmes,
 JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
 );
 exit;
}

// Procura pelo filme correspondente ao id informado
foreach ($filmes as $filme) {
 if ($filme["id"] == $id) {
 echo json_encode(
 $filme,
 JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
 );
 exit;
 }
}
