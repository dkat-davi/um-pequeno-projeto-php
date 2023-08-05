<?php
  function DefaultHeader($header, $redirectTo) {
    echo 
    '<header>'. 
      '<h1>'. $header . '</h1>'.
      '<a href="'. $redirectTo .'" class="home"> Home <i class="fa-solid fa-house"></i></a>'.
    '</header>';
  }
?>