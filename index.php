<?php
  require 'components/header.php';
  require 'components/footer.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EAD Week</title>

  <link rel="stylesheet" href="styles/home.css" type="text/css">
  <link rel="stylesheet" href="styles/global.css">
</head>
<body>
  <div class="container">
    <div class="blur"></div>
    <?php
      DefaultHeader("Desenvolvimento Web", "#")
    ?>
    <main>
      <a href="pages/html-generator/index.php" class="card">
        <p>Gerador de HTML</p>
      </a>
      <a href="pages/imc-table/index.php" class="card">
        <p>Tabela de IMC</p>
      </a>
      <a href="pages/links-quiz/index.php" class="card">
        <p>Questionário de links</p>
      </a>
      <a href="pages/investiment-simulator/index.php" class="card">
        <p>Simulador de Investimentos</p>
      </a>
    </main>
    <?php
      DefaultFooter();
    ?>
  </div>
</body>
</html>