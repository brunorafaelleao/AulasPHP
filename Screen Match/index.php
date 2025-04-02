<?php
 
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem vindo(a) ao Screen Match!\n";

$filme = new Filme();
$filme -> nome = 'Thor - Ragnarok';
$filme -> anoLancamento = 2021;
$filme -> genero = 'Ação';
$filme -> nota = 4.5;

var_dump($filme);