<?php
/*
********************
Titular: Vinicius Dias
Saldo atual: R$ 1000
*********************
1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair

*/
$dadosConta = [
'titular' => 'Vinicius Dias',
'saldo' => 1000
];


echo "Para iniciar a aplicação, digite o nome do titular da conta: ";
$pessoa = trim(fgets(STDIN));


while ($pessoa != $dadosConta['titular']){
    echo "Titular não encontrado. Digite o nome do titular da conta: ";
    $pessoa = trim(fgets(STDIN));
}


echo "\n\nBem vindo, {$dadosConta['titular']}!\n";
echo "Dados da sua conta: \n";
echo "Titular: {$dadosConta['titular']}\n";
echo "Saldo atual: R$ {$dadosConta['saldo']}\n\n";

echo "O que deseja fazer?\n";
echo "1. Consultar saldo atual\n";
echo "2. Sacar valor\n";
echo "3. Depositar valor\n";
echo "4. Sair\n\n";

$opcao = (int) fgets(STDIN);
do {
  echo "O que deseja fazer?\n";
  echo "1. Consultar saldo atual\n";
  echo "2. Sacar valor\n";
  echo "3. Depositar valor\n";
  echo "4. Sair\n\n";
  $opcao = (int) fgets(STDIN);
    switch ($opcao){
      case 1:
        echo "Saldo atual: R$ {$dadosConta['saldo']}\n\n";
        break;
      case 2:
        echo "Digite o valor que deseja sacar: ";
        $saque = (float) fgets(STDIN);
        if ($saque > $dadosConta['saldo']){
            echo "Saldo insuficiente\n";
        } else {
            $dadosConta['saldo'] -= $saque;
            echo "Saque de R$ $saque realizado com sucesso\n";
            echo "Saldo atual: R$ {$dadosConta['saldo']}\n";
        }
        break;
      case 3:
        echo "Digite o valor que deseja depositar: ";
        $deposito = (float) fgets(STDIN);
        $dadosConta['saldo'] += $deposito;
        echo "Depósito de R$ $deposito realizado com sucesso\n";
        echo "Saldo atual: R$ {$dadosConta['saldo']}\n";
        break;
      case 4:
        echo "Obrigado por utilizar nossos serviços! Até breve!\n";
        break;
      default:
        echo "Opção inválida\n";
        break;
  }
} while ($opcao != 4);



/* Resolução do instrutor


// Inicialização das variáveis
$saldo = 1_000.00; // Saldo inicial
$titular = "Vinicius"; // Titular da conta
$opcao = 0;

// Função para exibir o menu
function exibirMenu($saldo, $titular) {
    echo "******************\n";
    echo "Titular: $titular\n";
    echo "Saldo atual: R$" . number_format($saldo, 2) . "\n";
    echo "******************\n";
    echo "Opções:\n";
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "******************\n";
}

// Loop principal do programa
do {
    exibirMenu($saldo, $titular); // Exibe o menu
    echo "Escolha uma opção: ";
    $opcao = (int) fgets(STDIN); // Lê a opção do usuário

    switch ($opcao) {
        case 1:
            echo "Saldo atual: R$" . number_format($saldo, 2) . "\n";
            break;
        case 2:
            echo "Digite o valor a sacar: ";
            $valorSacar = (float) fgets(STDIN);
            if ($valorSacar > $saldo) {
                echo "Saldo insuficiente!\n";
            } else {
                $saldo -= $valorSacar;
                echo "Saque realizado com sucesso!\n";
            }
            break;
        case 3:
            echo "Digite o valor a depositar: ";
            $valorDepositar = (float) fgets(STDIN);
            $saldo += $valorDepositar;
            echo "Depósito realizado com sucesso!\n";
            break;
        case 4:
            echo "Adeus!\n";
            break;
        default:
            echo "Opção inválida!\n";
            break;
    }
} while ($opcao != 4);

?>
*/