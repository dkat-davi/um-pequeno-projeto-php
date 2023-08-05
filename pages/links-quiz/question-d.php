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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
      $resp3=$_GET['resp3'];
    ?>

    <main>
      <h2>Q4. Voluptate, aliquid neque quasi tenetur cupiditate culpa fugiat perferendis?</h2>
      <div>
      <?= "<a href=\"index.php?resp1={$resp1}&resp2={$resp2}&resp3={$resp3}&resp4=1\">A) Repellendus nulla voluptas molestiae maiores culpa.</a>"; ?>
        <?= "<a href=\"index.php?resp1={$resp1}&resp2={$resp2}&resp3={$resp3}&resp4=2\">B) Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>"; ?>
        <?= "<a href=\"index.php?resp1={$resp1}&resp2={$resp2}&resp3={$resp3}&resp4=3\">C) Eveniet quas aut quibusdam. Architecto, nesciunt? Iepellendus.</a>"; ?>
        <?= "<a href=\"index.php?resp1={$resp1}&resp2={$resp2}&resp3={$resp3}&resp4=4\">D) Eligendi facilis inventore ad aut fugit doloribus eos doloremque!</a>"; ?>
        <?= "<a href=\"index.php?resp1={$resp1}&resp2={$resp2}&resp3={$resp3}&resp4=5\" class=\"correta\">E) Lorem consectetur, adipisicing elit. Blanditiis, maxime dicta autem.</a>"; ?>
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