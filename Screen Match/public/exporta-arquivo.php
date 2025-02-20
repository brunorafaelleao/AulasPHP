<?php

// var_dump ($_POST );

//array associativo com os dados do filme passados no formulário html
$filme = [
  'nome' => $_POST['nome'],
  'anoLancamento' => $_POST['ano'],
  'nota' => $_POST['nota'],
  'genero' => $_POST['genero'],
];

//salva o array em um arquivo json
file_put_contents('filme.json', json_encode($filme));

//função para direcionar o usuário para a página de sucesso
header('Location: /sucesso.php?filme= ' . $filme['nome']);