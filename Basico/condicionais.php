<?php
$var1 = 10;
$var2 = 20;
echo 'Para os valores de Num1 = '.$var1.' e Num2 = '.$var2;
echo '<br>'.'<br>';

//igualdade
echo 'igualdade: Num1 = Num2 ';
echo '<br>';
if($var1 == $var2){
    echo 'Verdadeiro';
}else{
  echo 'Falso';
}
echo '<br>'.'<br>';


//diferença
echo 'diferença: Num1 diferente de Num2';
echo '<br>';
if($var1 != $var2){
  echo 'Verdadeiro';
}else{
echo 'Falso';
}
echo '<br>'.'<br>';

//maior
echo 'maior: Num1 > Num2';
echo '<br>';
if($var1 > $var2){
  echo 'Verdadeiro';
}else{
echo 'Falso';
}
echo '<br>'.'<br>';

//maior ou igual
echo 'maior ou igual: Num1 >= Num2';
echo '<br>';
if($var1 >= $var2){
  echo 'Verdadeiro';
}else{
echo 'Falso';
}
echo '<br>'.'<br>';

//menor
echo 'menor: Num1 < Num2';
echo '<br>';
if($var1  < $var2){
  echo 'Verdadeiro';
}else{
echo 'Falso';
}
echo '<br>'.'<br>';

//menor ou igual
echo 'menor: Num1 < Num2';
echo '<br>';
if($var1  <= $var2){
  echo 'Verdadeiro';
}else{
echo 'Falso';
}
echo '<br>'.'<br>';

?>