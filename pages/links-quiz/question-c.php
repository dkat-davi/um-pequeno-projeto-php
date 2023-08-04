<?php
  include '../../components/header.php';
  include '../../components/footer.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questionário de Links</title>

  <link rel="stylesheet" href="../../styles/links-quiz.css" type="text/css">
  <link rel="stylesheet" href="../../styles/global.css">
</head>
<body>
  <div class="container">
    <div class="blur"></div>
    <?php
      DefaultHeader('Questionário de Links', '../../index.php')
    ?>

    <?php
      $resp1= $_GET['resp1'];
      $resp2= $_GET['resp2'];
    ?>

    <main>
      <h2>Q3. Corporis earum eligendi deserunt odio nostrum! Numquam veniam itaque?</h2>
      <div>
        <?= "<a href=\"question-d.php?resp1={$resp1}&resp2={$resp2}&resp3=1\" class=\"correta\">A) Repellendus nulla voluptas molestiae maiores culpa.</a>"; ?>
        <?= "<a href=\"question-d.php?resp1={$resp1}&resp2={$resp2}&resp3=2\">B) Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>"; ?>
        <?= "<a href=\"question-d.php?resp1={$resp1}&resp2={$resp2}&resp3=3\">C) Eveniet quas aut quibusdam. Architecto, nesciunt? Iepellendus.</a>"; ?>
        <?= "<a href=\"question-d.php?resp1={$resp1}&resp2={$resp2}&resp3=4\" >D) Eligendi facilis inventore ad aut fugit doloribus eos doloremque!</a>"; ?>
        <?= "<a href=\"question-d.php?resp1={$resp1}&resp2={$resp2}&resp3=5\">E) Lorem consectetur, adipisicing elit. Blanditiis, maxime dicta autem.</a>"; ?>
      </div>

      <button>
        <a href="question-a.php">Cancelar</a>
      </button>

    </main>
    <?php
      DefaultFooter();
    ?>
  </div>
</body>
</html>