<?php
  include '../../components/header.php';
  include '../../components/footer.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela de IMC</title>

  <link rel="stylesheet" href="../../styles/imc-table.css" type="text/css">
  <link rel="stylesheet" href="../../styles/global.css">
</head>
<body>
  <div class="container">
    <div class="blur"></div>
    <?php
      DefaultHeader('Tabela de IMC', '../../index.php')
    ?>
    <?php
      function calcularIMC($peso, $altura) {
        $imc = $peso / (($altura / 100) * ($altura / 100));
        return  number_format($imc, 1);
      }

      function getDados($imc) {
        $dados = [
          'imcType' => '',
          'color' => '',
        ];

        if ($imc < 16) {
          $dados['imcType'] = 'Baixo muito grave';
          $dados['color'] = 'rgb(0, 0, 50)';
        }
        else if ($imc < 17) {
          $dados['imcType'] = 'Baixo grave';
          $dados['color'] = 'rgb(0, 0, 100)';
        }
        else if ($imc < 18.5) {
          $dados['imcType'] = 'Baixo';
          $dados['color'] = 'rgb(0, 0, 200)';
        }
        else if ($imc < 25) {
          $dados['imcType'] = 'Ideal';
          $dados['color'] = 'rgb(0, 255, 0)';
        } 
        else if ($imc < 30) {
          $dados['imcType'] = 'Sobrepeso';
          $dados['color'] = 'rgb(255, 255, 0)';
        } 
        else if ($imc < 35) {
          $dados['imcType'] = 'Obesidade I';
          $dados['color'] = 'rgb(200, 0, 0)';
        } 
        else if ($imc < 40) {
          $dados['imcType'] = 'Obesidade II';
          $dados['color'] = 'rgb(100, 0, 0)';
        } 
        else if ($imc >= 40) {
          $dados['imcType'] = 'Obesidade III';
          $dados['color'] = 'rgb(50, 0, 0)';
        } 

        return $dados;
      }
    ?>
    <main>
      <table>
        <thead>
          <tr>
            <?php
              
              echo "<th style=\"border:none;\"></th>";
              for ($j=46; $j <= 120; $j++) { 
                echo "<th style=\"transform:rotate(-90deg)\">$j</th>";   
              } 

            ?>
          </tr>
        </thead>
        <tbody>
          
          <?php
            for ($i=146; $i <= 210; $i++) { 
              echo "<tr>";
              echo "<th scope=\"row\">{$i}</th>";   
              for ($j=46; $j <= 120; $j++) { 
                $imc = calcularIMC($j, $i);
                $valores = getDados($imc);
                echo "<td style=\"background-color:{$valores['color']};\"  title=\"{$valores['imcType']} \n{$j}Kg \n{$i}cm \n{$imc}\"></td>";   
              } 
              echo "</tr>";
            }
            
          ?>
        </tbody>
      </table>
    </main>
    <?php
      DefaultFooter();
    ?>
      
  </div>
</body>
</html>