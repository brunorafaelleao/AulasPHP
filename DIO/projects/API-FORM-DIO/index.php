<?php
//

// Importa (inclui) o arquivo de configuração localizado em Config/config.php
require __DIR__ . "/Config/config.php";

// Pega a URL requisitada pelo cliente (sem domínio), ex: /api/v1/user/get
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Quebra a URL em partes, separando pelo caractere "/"
$uri = explode('/', $uri);

// Verifica se a primeira parte da URL não é "api" ou se a segunda não é "v1"
// Se for diferente, retorna erro 404 e encerra o programa
if ((isset($uri[1]) && $uri[1] != 'api') || (isset($uri[2]) && $uri[2] != 'v1')) {
  header("HTTP/1.1 404 Not Found");
  exit();
}
// Caso seja "api/v1", mas a terceira parte não seja "user" ou não exista uma quarta parte
// também retorna erro 404 e encerra o programa
elseif ((isset($uri[3]) && $uri[3] != 'user') || !isset($uri[4])) {
  header("HTTP/1.1 404 Not Found");
  exit();
}

// Importa o arquivo do UserController
require ROOT_PATH . "/Controller/Api/UserController.php";

// Cria uma instância (objeto) do UserController
$user = new UserController();

// Monta o nome do método a ser chamado dinamicamente, ex: "getAction" ou "createAction"
$methodName = $uri[4] . 'Action';

// Chama o método da classe UserController de acordo com a URL requisitada
$user->{$methodName}();


?>