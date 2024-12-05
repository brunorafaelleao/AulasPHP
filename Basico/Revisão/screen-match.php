<?php
//  echo "Bem-vindo ao Screen Match!\n";
// //  echo "\n";
 
//  $nomeFilme = "Top Gun - Maverick";
//  $anoLancamento = 2022;
//  $notaFilme = 8.8;
//  $incluidoNoPlano = true;

//  echo "Nome do filme: ". $nomeFilme. "\n";
//   // echo "\n";
//  echo 0.1+0.2;
$pessoa = $argv[1];


$idade = match ($pessoa) {
  "Bruno" => 35,
  "Chiara" => 0,
  "Karol" => 32,
  default => "Idade desconhecida",
 };
 echo "A idade da pessoa é: $idade";


?>
