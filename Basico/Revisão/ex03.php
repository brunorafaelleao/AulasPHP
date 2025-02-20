<?php

/*
//1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido
//como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5],
//o programa deve exibir [1, 2, 3, 4, 5].
$elementos = [1, 2, 2, 3, 4, 4, 5];
$elementosSemDuplicatas = array_unique($elementos);
// print_r($elementosSemDuplicatas);
echo '['. implode(', ', $elementosSemDuplicatas) . ']';
*/

/*
//2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão
// com a informação se o aluno foi aprovado ou não.
//Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.
$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

foreach ($notas as $nota) {
    $resultado = $nota > 6 ? "aprovado" : "reprovado";

    echo "Esse(a) aluno(a) foi $resultado com a nota $nota \n";
}
*/

/*
//3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.
$conta = [
    'titular' => 'João',
    'saldo' => 1000
];
echo "O titular da conta é {$conta['titular']} e o saldo é R$ {$conta['saldo']}";
*/

/*
//4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.
$familia = ['Bruno', 'Karoline', 'Chiara'];
echo "Família antes: " . implode(', ', $familia)."\n";
$familia [] = 'Francisco';
echo "Familia depois de 2 anos: ".implode(', ',$familia);
*/
?>