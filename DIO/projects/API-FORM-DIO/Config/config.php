<?php
// Define uma constante chamada ROOT_PATH que guarda o caminho da pasta raiz do projeto
define("ROOT_PATH", __DIR__ . "/../");

// Define uma constante chamada DATABASE_FILE que guarda o caminho para o arquivo database.json
define("DATABASE_FILE", ROOT_PATH . "database.json");

// Importa (inclui) o arquivo BaseController.php da pasta Controller/Api
require_once ROOT_PATH . "/Controller/Api/BaseController.php";

// Importa (inclui) o arquivo UserModel.php da pasta Model
require_once ROOT_PATH . "/Model/UserModel.php";


?>