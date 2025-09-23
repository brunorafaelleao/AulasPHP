<?php

class Venda
{
  private $data;
  private $produto;
  private $quantidade;
  private $valorTotal;

  public function __construct($data, $produto, $quantidade, $valorTotal)
  {
    $this->data = $data;
    $this->produto = $produto;
    $this->quantidade = $quantidade;
    $this->valorTotal = $valorTotal;
  }

  public function dadosVenda()
  {
    return "Data: $this->data, Produto: $this->produto, Quantidade: $this->quantidade, Valor Total: R$ $this->valorTotal reais";
  }

}

$minhaVenda = new Venda(
  '23/09/2025',
  'Notebook',
  2,
  5000.00
);

echo $minhaVenda->dadosVenda();