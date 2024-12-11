<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="index.php" method="POST">
        <label for="n1">Número 1:</label>
        <input type="number" name="n1" id="n1" required><br><br>
        <label for="n2">Número 2:</label>
        <input type="number" name="n2" id="n2" required><br><br>
        <input type="submit" name="suma" value="Sumar">
        <input type="submit" name="resta" value="Restar">
        <input type="submit" name="multiplicacion" value="Multiplicar">
        <input type="submit" name="division" value="Dividir">
    </form>

    <?php
  
  function suma($n1,$n2){
    return $n1+$n2;
  }
  function resta($n1,$n2){
    return $n1-$n2;
  }
  function multiplicacion($n1,$n2){
    return $n1*$n2;
  }
  function division($n1,$n2){
    return $n1/$n2;
  }
        if(isset($_POST['suma'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            echo "El resultado de la suma es: ".suma($n1,$n2);
        }
        if(isset($_POST['resta'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            echo "El resultado de la resta es: ".resta($n1,$n2);
        }
        if(isset($_POST['multiplicacion'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            echo "El resultado de la multiplicación es: ".multiplicacion($n1,$n2);
        }
        if(isset($_POST['division'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            if($n2==0){
                echo "No se puede dividir por cero";
            }else{
                echo "El resultado de la división es: ".division($n1,$n2);
            }
        }
    ?>
</body>
</html>