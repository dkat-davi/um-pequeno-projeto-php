<?php
  function Card($label, $redirectTo) {
    echo 
      '<a href="'. $redirectTo .'" class="card">'.
        '<p>'. $label .'</p>'.
      '</a>';
  }
?>