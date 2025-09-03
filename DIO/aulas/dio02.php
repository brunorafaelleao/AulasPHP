<?php
//Aula 02 sobre tipos de variáveis em PHP: Constantes
/*define('CONSTANTE', 'Valor da constante');
echo CONSTANTE;*/

/*Um entregador de delivery ganha 80 reais por dia
porém ainda tem as gorjetas dos clientes*/

//criar a constante do valor fixo do dia que é 80 reais
//para segunda-feira
define('DIARIA', 80);
$gorjeta = 30;
$diaria = DIARIA + $gorjeta;

echo "Na segunda-feira o valor do dia foi $diaria reais\n";

//para terça-feira
$gorjeta = 20;
$diaria = DIARIA + $gorjeta;
echo "Na terça-feira o valor do dia foi $diaria reais\n";