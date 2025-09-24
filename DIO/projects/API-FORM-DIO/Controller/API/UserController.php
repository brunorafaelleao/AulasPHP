<?php
// Define a classe UserController que herda (extends) da classe BaseController
class UserController extends BaseController
{
  // Método público chamado listAction (será executado quando a rota /user/list for chamada)
  public function listAction()
  {
    // Inicializa a variável de erro como vazia
    $erroDescription = '';

    // Pega o método HTTP usado na requisição (ex: GET, POST, PUT, DELETE)
    $requestMethod = $_SERVER["REQUEST_METHOD"];

    // Chama um método da classe para obter parâmetros da URL (provavelmente via query string)
    $stringParamsArray = $this->getStringParamns();

    // Verifica se o método da requisição é GET
    if (strtoupper($requestMethod) == 'GET') {
      try {
        // Cria um novo objeto do próprio UserController (possivelmente deveria ser UserModel)
        $userModel = new UserController();

        // Define um limite padrão de 10 registros
        $intLimit = 10;

        // Caso exista um parâmetro 'limit' na URL, ele substitui o valor padrão
        if (isset($stringParamsArray['limit']) && $stringParamsArray['limit']) {
          $intLimit = $stringParamsArray['limit'];
        }

        // Chama o método getUsers() para buscar os usuários no banco, respeitando o limite
        $userArray = $userModel->getUsers($intLimit);

        // Converte os dados de usuários para JSON
        $responseData = json_encode($userArray);

      } catch (Error $e) {
        // Caso ocorra um erro, guarda a descrição e define o cabeçalho de erro 500 (erro interno)
        $erroDescription = $e->getMessage() . ' Something went wrong! Please try again later.';
        $errorHeader = 'HTTP/1.1 500 Internal Server Error';
      }
    } else {
      // Caso o método da requisição NÃO seja GET, define erro 422 (método não suportado)
      $erroDescription = 'Method not supported';
      $errorHeader = 'HTTP/1.1 422 Unprocessable Entity';
    }

    // ---- ENVIO DA RESPOSTA ----
    if (!$erroDescription) {
      // Se não houve erro, envia os dados convertidos em JSON com status 200 (OK)
      $this->sendOutput(
        $responseData,
        array('Content-Type: application/json', 'HTTP/1.1 200 OK')
      );
    } else {
      // Se houve erro, envia mensagem de erro em JSON com o cabeçalho apropriado
      $this->sendOutput(
        json_encode(array('error' => $erroDescription)),
        array('Content-Type: application/json', $errorHeader)
      );
    }

  }
}
