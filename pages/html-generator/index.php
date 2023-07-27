<?php
  include '../../components/header.php';
  include '../../components/footer.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de HTML</title>

  <link rel="stylesheet" href="../../styles/html-generator.css" type="text/css">
  <link rel="stylesheet" href="../../styles/global.css">
</head>
<body>
  <div class="container">
    <div class="blur"></div>
    <?php
      DefaultHeader('HTML Generator', '../../index.php')
    ?>

    <?php
      $quantidade = 1;
      $type = '';

      if(isset($_GET['qtdo']) && isset($_GET['type'])) {
        $quantidade = $_GET['qtdo'];
        $type = $_GET['type'];
      }
    ?>

    <main>
      <div id="input">
        <form method="get" id="html-generator">
          <h2>Critérios para geração</h2>
          <fieldset>
            <div>
              <label for="qtdo">Quantidade de elementos</label>
              
              <input 
                type="number"
                name="qtdo"
                id="qtdo"
                max="15"
                min="1"
                value="<?= $quantidade ?>"
              >
              
              <span>(1 a 15)</span>
            </div>

            <div>
              <input 
                type="radio"
                name="type"
                value="text"
                id="text"
                onchange="document.forms['html-generator'].submit();"
                <?php if ($type === 'text') echo 'checked'; ?>
              >

              <label for="text">Texto</label>
            </div>

            <div>
              <input 
                type="radio"
                name="type"
                value="password"
                id="password"
                onchange="document.forms['html-generator'].submit();"
                <?php if ($type === 'password') echo 'checked'; ?>
              >

              <label for="password">Senha</label>
            </div>

            <div>
              <input 
                type="radio"
                name="type"
                value="button"
                id="button"
                onchange="document.forms['html-generator'].submit();"
                <?php if ($type === 'button') echo 'checked'; ?>
              >

              <label for="button">Botão</label>
            </div>

            <div>
              <input 
                type="radio"
                name="type"
                value="radio"
                id="radio"
                onchange="document.forms['html-generator'].submit();"
                <?php if ($type === 'radio') echo 'checked'; ?>
              >
              <label for="radio">Rádio</label>
            </div>

            <div>
              <input
                type="radio"
                name="type" 
                value="checkbox" 
                id="checkbox" 
                onchange="document.forms['html-generator'].submit();"
                <?php if ($type === 'checkbox') echo 'checked'; ?>
              >
              <label for="checkbox">Caixa de seleção</label>
            </div>

            <div>
              <input 
                type="radio"
                name="type"
                value="range"
                id="range" 
                onchange="document.forms['html-generator'].submit();"
                <?php if ($type === 'range') echo 'checked'; ?>
              >
              <label for="range">Faixa</label>
            </div>
          </fieldset>
          
        </form>
      </div>
      <div id="result">
        <h2>Resultado gerado</h2>
        <fieldset>
          <div id="input-result">
            <?php
              if($type !== '') {
                for ($i=1; $i <= $quantidade; $i++) { 
                  switch ($type) {
                    
                    case 'text':
                      echo "<input type=\"{$type}\" name=\"senha{$i}\" id=\"senha{$i}\">";
                      break;

                    case 'password':
                      echo "<input type=\"{$type}\" name=\"text{$i}\" id=\"text{$i}\">";
                      break;

                    case 'button':
                      echo "<input type=\"{$type}\" name=\"botao{$i}\" id=\"botao{$i}\" value=\"Botão {$i}\">";
                      break;
                    
                    case 'radio':
                      echo "<div style=\"display:flex;\"><input type=\"{$type}\" name=\"radio{$i}\" id=\"radio{$i}\" value=\"radio{$i}\"><label for=\"radio{$i}\">&nbsp;Radio&nbsp;{$i}</label></div>";
                      break;

                    case 'checkbox':
                      echo "<div style=\"display:flex;\"><input type=\"{$type}\" name=\"checkbox{$i}\" id=\"checkbox{$i}\" value=\"checkbox{$i}\"><label for=\"checkbox{$i}\">&nbsp;Caixa&nbsp;de&nbsp;Seleção&nbsp;{$i}</label></div>";
                      break;

                    case 'range':
                      echo "<div style=\"display:flex;\"><input type=\"{$type}\" name=\"range{$i}\" id=\"range{$i}\" value=\"".mt_rand($i, $i * 10)."\" min=\"0\" max=\"100\"><label for=\"range{$i}\">&nbsp;Faixa&nbsp;{$i}</label></div>";
                      break;
                    
                    default:
                      break;
                  }
                  
                }
              }
            ?>
          </div>
          <div id="code-result">
            <?php
              if($type !== '') {
                for ($i=1; $i <= $quantidade; $i++) { 
                  switch ($type) {
                    
                    case 'text':
                      echo "<div>&lt;input type=\"{$type}\" name=\"senha{$i}\" id=\"senha{$i}\"&gt;</div>";
                      break;

                    case 'password':
                      echo "<div>&lt;input type=\"{$type}\" name=\"text{$i}\" id=\"text{$i}\"&gt;</div>";
                      break;

                    case 'button':
                      echo "<div>&lt;input type=\"{$type}\" name=\"botao{$i}\" id=\"botao{$i}\" value=\"Botão {$i}\"></div>";
                      break;
                    
                    case 'radio':
                      echo "<div style=\"display:flex;\">&lt;input type=\"{$type}\" name=\"radio{$i}\" id=\"radio{$i}\" value=\"radio{$i}\"&gt;&lt;label for=\"radio{$i}\"&gt;Radio&nbsp;{$i}&lt;/label&gt;</div>";
                      break;

                    case 'checkbox':
                      echo "<div style=\"display:flex;\">&lt;input type=\"{$type}\" name=\"checkbox{$i}\" id=\"checkbox{$i}\" value=\"checkbox{$i}\"&gt;&lt;label for=\"checkbox{$i}\"&gt;Caixa&nbsp;de&nbsp;Seleção&nbsp;{$i}&lt;/label&gt;</div>";
                      break;

                    case 'range':
                      echo "<div style=\"display:flex;\">&lt;input type=\"{$type}\" name=\"range{$i}\" id=\"range{$i}\" value=\"".mt_rand($i, $i * 10)."\" min=\"0\" max=\"100\"&gt;&lt;label for=\"range{$i}\"&gt;Faixa&nbsp;{$i}&lt;/label&gt;</div>";
                      break;
                    
                    default:
                      break;
                  }
                  
                }
              }
            ?>
          </div>
        </fieldset>
      </div>
    </main>
    <?php
      DefaultFooter();
    ?>
  </div>
</body>
</html>