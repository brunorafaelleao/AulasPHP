<?php

namespace Controllers;

class ContatoController extends Controller
{

  // private $view;
  public function __construct()
  {
    $this->view = new \Views\ContatoView('contato');
  }

  public function executar()
  {
    $this->view->render(); // Renderiza a view de contato
  }
}


?>