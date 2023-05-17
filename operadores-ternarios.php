<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Ternarios</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h3>Operadores Ternarios</h3>
    <hr>
</body>
</html>

<?php
    
    $a = 400;
    $b = 50;

    if ($a > $b) 
    {
        echo "El numero $a es mayor al numero $b";
    }
    elseif($a < $b)
    {
        echo "El numero $a es menor al numero $b";
    }
    else
    {
        echo "Son iguales estos numeros";
    }

    echo "<br>";
    //Esto seria un if normal
    
    $valor = $a > $b ? 'es mayor' : 'es menor';
    echo $valor;
    
    echo "<br>";

    $y = 50;

    $resultado= $y == 50 ? 'El número  es igual a 50' : ($y == 30? 'El número  es igual a 30':($y == 60? 'El número  es igual a 30':'no es ningun numero<br>'));

    echo $resultado."<br>";

    $numero1 = 700;
    $numero2 = 700;

    $comparacion = $numero1 > $numero2 ? 'El numero '.$numero1.' es mayor al numero '.$numero2:($numero1 < $numero2 ? 'El numero '.$numero1.' es menor al numero '.$numero2:'Estos numeros son iguales');
    
    echo $comparacion;

    

?>
