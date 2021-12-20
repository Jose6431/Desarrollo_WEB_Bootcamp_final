<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con PHP</title>
</head>
<body>
    
<?php
    $x = 12;//valor entero
    $y = 34.3; //real
    $z= $x+$y;
    //echo incrusta php dentro de html
    echo "<h1>El valor de z es $z </h1>";
    $a = "Hola mundo";
    $nombre= "juan";
    //punto para concatenar
    echo $a. " - " . $nombre ; 
    //condicional if
    if($x>$y){
        echo "<h2> $x es mayor que $y </h2>";
    }else{
        echo "<h2> $y es mayor que $x </h2>";
    }

    //condicional for

    for($i = 0; $i<strlen($nombre); $i++){
        echo "<br>".$nombre[$i];
    }


?>

<form action="procesador.php" method="POST">
    <input type="text" name="nombres">
    <input type="text" name="edad">

    <button type="submit"> Enviar Datos</button>
   
</form>



</body>
</html>