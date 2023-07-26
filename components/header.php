<?php
  function DefaultHeader($header, $link) {
    echo 
    '<header>'. 
      '<h1>'. $header . '</h1>'.
      '<a href="'. $link .'" class="home"> Home |^^^|</a>'.
    '</header>';
  }
?>