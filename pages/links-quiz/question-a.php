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
    <main>
      <h2>Q1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, sint?</h2>
      <div>
        <a href="question-b.php?resp1=1">A) Repellendus nulla voluptas molestiae maiores culpa.</a>
        <a href="question-b.php?resp1=2" class="correta">B) Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
        <a href="question-b.php?resp1=3">C) Eveniet quas aut quibusdam, modi recusandae reiciendis. Architecto, nesciunt? Iure, velit repellendus.</a>
        <a href="question-b.php?resp1=4">D) Eligendi aperiam nam perspiciatis facilis inventore ad aut fugit doloribus eos doloremque!</a>
        <a href="question-b.php?resp1=5">E) Lorem consectetur, adipisicing elit. Blanditiis, maxime dicta autem.</a>
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