<?php

  if(!empty($_POST)) {
    $element1 = (integer) $_POST["element1"];
    $element2 = (integer) $_POST["element2"];
    $operator = $_POST["operator"];
    $resultado = 0;
    switch ($operator) {
      case '+':
          $resultado = $element1 + $element2;
        break;
      case '-':
          $resultado = $element1 - $element2;
        break;
      case '*':
          $resultado = $element1 * $element2;
        break;
      case '/':
          $resultado = $element1 / $element2;
        break;
    }
    if($element1 == '' || $element2 == '') {
      echo "<p class='calculator__form__result calculator__form__result--error'>Preencha todos os campos.</p>";
    } else {
      echo "<p class='calculator__form__result calculator__form__result'>".$resultado."</p>";
    }
  }

?>
