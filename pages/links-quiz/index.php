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
      $resp1 = $_GET['resp1'];
      $resp2 = $_GET['resp2'];
      $resp3 = $_GET['resp3'];
      $resp4 = $_GET['resp4'];

      $opcao1 = '';
      $opcao2 = '';
      $opcao3 = '';
      $opcao4 = '';

      switch ($resp1) {
        case '1':
          $opcao1 = 'A';
          break;
        
        case '2':
          $opcao1 = 'B';
          break;  
        
        case '3':
          $opcao1 = 'C';
          break;

        case '4':
          $opcao1 = 'D';
          break;
        default:
          $opcao1 = 'E';
          break;
      }

      switch ($resp2) {
        case '1':
          $opcao2 = 'A';
          break;
        
        case '2':
          $opcao2 = 'B';
          break;  
        
        case '3':
          $opcao2 = 'C';
          break;

        case '4':
          $opcao2 = 'D';
          break;
        default:
          $opcao2 = 'E';
          break;
      }

      switch ($resp3) {
        case '1':
          $opcao3 = 'A';
          break;
        
        case '2':
          $opcao3 = 'B';
          break;  
        
        case '3':
          $opcao3 = 'C';
          break;

        case '4':
          $opcao3 = 'D';
          break;
        default:
          $opcao3 = 'E';
          break;
      }

      switch ($resp4) {
        case '1':
          $opcao4 = 'A';
          break;
        
        case '2':
          $opcao4 = 'B';
          break;  
        
        case '3':
          $opcao4 = 'C';
          break;

        case '4':
          $opcao4 = 'D';
          break;
        default:
          $opcao4 = 'E';
          break;
      }

      $resp1 = $resp1 === '2' ? 'OK' : 'NOT OK';
      $resp2 = $resp2 === '4' ? 'OK' : 'NOT OK';
      $resp3 = $resp3 === '1' ? 'OK' : 'NOT OK';
      $resp4 = $resp4 === '5' ? 'OK' : 'NOT OK';
    ?>

    <main>
      <h2>Resultado</h2>
      
      <br>

      <?php
        echo "<p>1. {$opcao1} {$resp1}</p>";
        echo "<p>2. {$opcao2} {$resp2}</p>";
        echo "<p>3. {$opcao3} {$resp3}</p>";
        echo "<p>4. {$opcao4} {$resp4}</p>";
      ?>

      <br><br>

      <a href="../../index.php">Página Inicial</a>
    </main>
    <?php
      DefaultFooter();
    ?>
  </div>
</body>
</html>