<?php
echo "Exercitando php\n\n";
echo "<br><br>";

echo "1 - Escreva um programa em PHP que exiba seu nome na tela:\n";
echo "<br>";
echo "Meu nome é Bruno Rafael\n\n";

echo "<br><br>";

echo "2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado:\n";
echo "<br>";
$nota1 = 7;
$nota2 = 8;
$nota3 = 9;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média entre as notas ($nota1, $nota2, $nota3) é: $media\n\n";
echo "<br><br>";

echo "3 - Crie um programa em PHP que converta metros para centímetros:\n";
echo "<br>";
$metros = 2;
$centimetros = $metros * 100;
echo "A conversão de '$metros' metros para centímetros é: $centimetros centímetros.\n\n";
echo "<br><br>";

echo "4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.\n";
echo "<br>";
$ano = 1700;
if ($ano%400 == 0 || ($ano%4 == 0 && $ano%100 !=0)){
  echo "O ano $ano é bissexto.\n\n";
}else{
  echo "O ano $ano não é bissexto.\n\n";
}
echo "<br><br>";

echo "5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.\n";
echo "<br>";
$tempCelsius = 37;
$tempFahrenheit = ($tempCelsius * 1.8) + 32;
echo "A temperatura de $tempCelsius ºC em Fahrenheit é: $tempFahrenheit ºF.\n\n";
echo "<br><br>";
?>