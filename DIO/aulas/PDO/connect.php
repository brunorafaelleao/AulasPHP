<?php
// Conexão com o banco de dados

$pdo = null;

try {
  $pdo = new PDO('mysql:host=mysql;dbname=exemplo', 'root', '12345');
} catch (Exception $e) {
  echo $e->getMessage();
  die();
}

return $pdo;



