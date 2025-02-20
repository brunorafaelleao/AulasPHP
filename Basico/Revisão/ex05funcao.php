<?php
/* Feito em 20/02/2025 11:24
//1-Escreva uma função em PHP que receba dois números inteiros e uma string
// representando a operação matemática e retorne o resultado da operação.
function calculadora($operacao, $vlr1, $vlr2) {
    switch ($operacao) {
        case 'soma':
            return $vlr1 + $vlr2;
        case 'subtracao':
            return $vlr1 - $vlr2;
        case 'multiplicacao':
            return $vlr1 * $vlr2;
        case 'divisao':
            if ($vlr2 == 0) {
                return 'Erro: Divisão por zero';
            }
            return $vlr1 / $vlr2;
        default:
            return 'Operação inválida';
    }
}

echo "Escolha uma das funções abaixo para testar a operação: \n";
echo "1 - Soma \n";
echo "2 - Subtração \n";
echo "3 - Multiplicação \n";
echo "4 - Divisão \n";

echo "Digite o nome da função: ";
$operacao = strtolower(trim(fgets(STDIN)));

echo "\nAgora escolha os valores: \n";
echo "Valor 1: ";
$vlr1 = (int)trim(fgets(STDIN));
echo "\nValor 2: ";
$vlr2 = (int)trim(fgets(STDIN));

echo "Você escolheu a operação $operacao e os valores $vlr1 e $vlr2. O resultado é: " . calculadora($operacao, $vlr1, $vlr2);
*/


