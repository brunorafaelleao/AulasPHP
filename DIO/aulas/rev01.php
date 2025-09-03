<!-- Esse arquivo é sobre a revisão de PHP sobre variáveis e datas -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Doc PHP</title>
</head>

<body>
  <?php
  date_default_timezone_set('America/Caracas');
  $nome = "Bruno"; ?>
  <h1>Projeto 1 de PHP</h1>
  <?php echo "Olá, $nome! Seja bem vindo ao curso de PHP!"; ?>
  <p>Agora é: <?php echo date("d/m/Y H:i"); ?> </p>
</body>

</html>