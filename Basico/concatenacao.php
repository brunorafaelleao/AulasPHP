<?php
//usando variaveis
$nome = 'Bruno';
$idade = 35;

echo 'Meu nome é '.$nome.' e tenho '.$idade.' anos';

//usando constante
define('NOME','Bruno');

echo 'Meu nome é '.NOME.' e tenho '.$idade.' anos';
?>