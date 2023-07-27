<?php
  function DefaultHeader($header, $redirectTo) {
    echo 
    '<header>'. 
      '<h1>'. $header . '</h1>'.
      '<a href="'. $redirectTo .'" class="home"> Home |^^^|</a>'.
    '</header>';
  }
?>