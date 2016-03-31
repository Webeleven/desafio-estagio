<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
    <main class="container">
      <header class="header">
        <h1 class="header__titlepage">Calculadora</h1>
      </header>
      <section class="calculator">
        <form class="calculator__form" action="index.php" method="post">
          <input type="number" name="element1" class="calculator__form__element">
          <select class="calculator__form__element calculator__form__operators" name="operator">
            <option value="+">Somar</option>
            <option value="-">Subtrair</option>
            <option value="*">Multiplicar</option>
            <option value="/">Dividir</option>
          </select>
          <input type="number" name="element2" class="calculator__form__element">
          <button class="calculator__form__submit" type="submit" name="calculator-action">Calcular</button>
        </form>
        <?php require("functions/calculator.php"); ?>
      </section>
    </main>
  </body>
</html>
