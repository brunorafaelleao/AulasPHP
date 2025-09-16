<?php
/*
//tratamento apenas com o throw

echo "Estamos na prática de exceções" . "<br>";

function divisao($dividendo, $divisor)
{
  if ($divisor == 0) {
    throw new Exception("O número não pode ser dividido por zero");
  }
  $resultado = $dividendo / $divisor;

  echo "O resultado da divisão é: $resultado";

}

divisao(10, 0);

*/





//tratamento apenas com o try e catch


function divisao($dividendo, $divisor)
{

  try {
    if ($divisor == 0) {
      throw new Exception("O número não pode ser dividido por zero" . "<br>");
    }
    $resultado = $dividendo / $divisor;

    echo "O resultado da divisão é: $resultado" . "<br>";

  } catch (Exception $e) {
    echo "Mensagem: " . $e->getMessage();
  }

}


$valor1 = 10;
$valor2 = 4;
divisao($valor1, $valor2);
echo "Os números apresentados como dividendo e divisor foram $valor1 e $valor2 respectivamente." . "<br>";


