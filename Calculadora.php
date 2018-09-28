<?php
  $numero1 = 0;
  $numero2 = 0;
  $operador = "ADD";
  $resultado = "";

  

  $isGet = "Esta fue una petición no de formulario";
  /*
  GET // localhost/nw/p1/formulario.php
  POST // localhost/nw/p1/formulario.php  --- body las variables

  Hola hola
  */
  if(isset($_POST["btnProcesar"])){
    $numero1 = floatval($_POST["txtNum1"]);
    $numero2 = floatval($_POST["txtNum2"]);
    $operador = $_POST["cmbOperator"];
    switch ($operador) {
      case 'ADD':
        $resultado = "La Suma de " . $numero1 . " y " . $numero2 . " es igual a " . ($numero1 + $numero2);
        break;
      case 'SUB':
        $resultado = "La Substracción de " . $numero1 . " y " . $numero2 . " es igual a " . ($numero1 - $numero2);
          break;
      case 'MUL':
        $resultado = "La Multiplicación de " . $numero1 . " y " . $numero2 . " es igual a " . ($numero1 * $numero2);
        break;
      case 'DIV':
        $resultado = "La División de " . $numero1 . " y " . $numero2 . " es igual a " . ($numero1 / $numero2);
          break;
      case 'FAC':
      $factorial=1;
      for($cont=2;$cont<=$numero1;$cont++){
      $factorial=$factorial * $cont;
      }
        $resultado = "El factorial de " . $numero1 . " es igual a " . $factorial;
          break;
      default:
        $resultado = "Operación no valida!";
        break;
    }
    $isGet = "Esta fue una petición de formulario POST " . $numero1 . " | " . $numero2;
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculadora Simple</title>
  </head>
  <body>
    <h1>Calculadora Simple</h1>
    <form action="calculadora.php" method="post">
      <label for="txtNum1">Número 1</label>
      <input id="txtNum1" name="txtNum1"
        type="number" value="<?php echo $numero1; ?>"/>
      <br />
      <label for="txtNum2">Número 2</label>
      <input id="txtNum2" name="txtNum2"
        type="number"
        value="<?php echo $numero2; ?>"
        />
      <br />
      <label for="cmbOperator">Operación</label>
      <select name="cmbOperator" id="cmbOperator">
        <option value="FAC">Factorial</option>
        <option value="ADD">Sumar</option>
        <option value="SUB">Restar</option>
        <option value="MUL">Multiplicar</option>
        <option value="DIV">Dividir</option>
      </select>
      <input type="submit"
        name="btnProcesar" value="Procesar" />
    </form>
    <br>
    <div style="background-color:#000;color:#0F0;font-family:monospace;">
      <?php echo $isGet; ?>
    </div>
    <br>
    <div style="background-color:#000;color:#FFF;font-family:monospace;">
      <?php echo $resultado; ?>
    </div>
  </body>
</html>
