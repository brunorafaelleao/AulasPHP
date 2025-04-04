<?php

class Application
{
    public function executar()
    {
        // $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
        $url = isset($_SERVER['REQUEST_URI']) ? explode('/', trim($_SERVER['REQUEST_URI'], '/'))[0] : 'Home';

        $url = ucfirst($url); // Primeira letra maiúscula
        $url = $url.'Controller'; // Adiciona o sufixo Controller

        if(file_exists('Controllers/'.$url.'.php')){
            $className = 'Controllers\\'.$url;
            echo 'Estou entrando no controller: '.$url;
            $controler = new $className; // Instancia a classe do controller
            $controler->executar();
        }else{
            die('Controller não encontrado!');  
        }
    }
}



?>
<!-- 
//C:\Users\Admin\Documents\GitHub\AulasPHP\Basico\Revisão\aula-mvc\Controllers\ContatoController.php -->