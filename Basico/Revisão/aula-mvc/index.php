<?php
//funcao anonima atribuida a variavel $autoload.
// A funcao recebe um parametro $class e inclui o arquivo com o nome da classe.
$autoload = function($class){
  include($class.'.php');
};

// Registra a funcao anonima como autoloader. Quando uma classe é chamada, o autoloader é chamado automaticamente.
spl_autoload_register($autoload);

//instancia a classe Application e chama o metodo run.
// A classe Application deve estar no arquivo Application.php, que é carregado pelo autoloader.
$app = new Application();
$app->executar();

?>

