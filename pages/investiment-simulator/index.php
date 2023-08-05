<?php
  include '../../components/header.php';
  include '../../components/footer.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simulador de Investimentos</title>

  <link rel="stylesheet" href="../../styles/investiment-simulator.css" type="text/css">
  <link rel="stylesheet" href="../../styles/global.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<?php
  function calcularDados($ini, $ap, $porc) {
    $rendimento = (($porc / 100) * ($ini + $ap));
    $total = $ini + $ap + $rendimento;

    return [
      'rendimento' => $rendimento,
      'total' => $total
    ];
  }
?>

<body>
  <div class="container">
    <div class="blur"></div>
    <?php
      DefaultHeader('Simulador de Investimentos', '../../index.php')
    ?>

    <?php
      $aporteini = '500';
      $periodo = '12';
      $porcentagem = '0.7';
      $aportmen = '350';

      if(isset($_GET['aporteini']) && isset($_GET['periodo']) && isset($_GET['rendimento']) && isset($_GET['aportemen'])) {
        $aporteini = $_GET['aporteini'];
        $periodo = $_GET['periodo'];
        $porcentagem = $_GET['rendimento'];
        $aportmen = $_GET['aportemen'];
      }
    ?>

    <main>
      <form method="get">
        <fieldset>
          <legend>Parâmetros</legend>
          <?= "<label>Aporte inicial (R$):<input type=\"number\" name=\"aporteini\" value=\"{$aporteini}\" max=\"999999.99\"> [até R$ 999.999,99]</label>"?>
          
          <?= "<label>Período (meses): <input type=\"number\" name=\"periodo\" value=\"{$periodo}\" min=\"1\" max=\"480\"> [1 a 480]</label>" ?>
          
          <?= "<label>Rendimento mensal (%): <input type=\"number\" name=\"rendimento\" value=\"{$porcentagem}\" max=\"20\" step=\"0.1\"> [até 20%]</label>" ?>
          
          <?= "<label>Aporte mensal (R$): <input type=\"number\" name=\"aportemen\" value=\"{$aportmen}\" max=\"999999.99\"> [até R$ 999.999,99]</label>" ?>

          
          <button>Processar</button>
        </fieldset>
      </form>
      <div>
        <table>
        
              <?php
                if($_GET['aporteini']) {
                  echo
                  '<thead>
                    <tr>
                      <th>Mês</th>
                      <th>Valor inicial (R$)</th>
                      <th>Aporte (R$)</th>
                      <th>Rendimento (R$)</th>
                      <th>Total (R$)</th>
                    </tr>
                  </thead>';
                  echo "<tbody>";
        
                  $inicial = $aporteini;
                  $aporte = 0;

                  for ($i=1; $i <= $periodo; $i++) {
                    $dados = calcularDados($inicial, $aporte, $porcentagem);
                    
                    echo
                      "<tr>
                        <td>{$i}</td>
                        <td>". number_format($inicial, 2) ."</td>
                        <td>". ($i === 1 ? '---' : number_format($aporte, 2)) ."</td>
                        <td>". number_format($dados['rendimento'], 2) ."</td>
                        <td> ". number_format($dados['total'], 2) ." </td>
                      </tr>";
                      $aporte = $aportmen;
                      $inicial = $dados['total'];
                  }
                  echo "</tbody>";
                }
        
              ?>
        
        
        </table>
      </div>
    </main>
    <?php
      DefaultFooter();
    ?>
  </div>
</body>
</html>