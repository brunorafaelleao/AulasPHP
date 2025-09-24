<?php
// Importa o arquivo Database.php que contém a classe responsável por acessar o "banco de dados" (JSON)
require_once ROOT_PATH . "/Model/Database.php";

// Define a classe UserModel, que herda (extends) a classe Database
class UserModel extends Database
{
  // Método público getUsers, que recebe um limite de registros e retorna um array de usuários
  public function getUsers(int $limit): array
  {
    // Chama o método select() da classe Database (herdado) passando o limite e retorna o resultado
    return $this->select($limit);
  }
}
