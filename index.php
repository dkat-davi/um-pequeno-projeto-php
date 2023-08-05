<?php
  include 'components/header.php';
  include 'components/footer.php';
  include 'components/card.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desenvolvimento Web</title>

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/home.css" type="text/css">
</head>
<body>
  <div class="container">
    <div class="blur"></div>
    <header>
      <h1>Desenvolvimento Web</h1>
    </header>
    <main>
      <?php
        Card('Gerador de HTML', 'pages/html-generator/index.php');
        Card('Tabela de IMC', 'pages/imc-table/index.php');
        Card('Questionário de links', 'pages/links-quiz/question-a.php');
        Card('Simulador de Investimentos', 'pages/investiment-simulator/index.php');
      ?>
    </main>
    <?php
      DefaultFooter();
    ?>
  </div>
</body>
</html>