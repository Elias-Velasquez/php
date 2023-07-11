<?php

if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    // Suma
    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $multi=$valorA*$valorB;
    $div=$valorA/$valorB;

    echo $suma."<br/>";
    echo $resta."<br/>";
    echo $multi."<br/>";
    echo $div."<br/>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos+</title>
</head>
<body>
    
    <form action="ejercicio8.php" method="post">
        valor A:
        <input type="text" name="valorA" id="">
        <br/>
        valor B:
        <input type="text" name="valorB" id="">
        <br/>
        <input type="submit" value="Calcular">
    </form>

</body>
</html>