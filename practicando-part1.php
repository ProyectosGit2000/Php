<?php

    $nombre = "Jordi Chavarry";
    $edad = 23;

    $saludo = 'Hola usuario: '.$nombre.', con edad de: '.$edad.' años';

    echo $saludo;

    echo "<br>";
    
    echo "Este es un 'saludo' espero q te encuentres \"bien\"";
    
    echo "<br>";
    echo "tu version de php es ".PHP_VERSION;
    
    //constantes
    
    echo "<br>";
    define('PI',13.1415);
    echo PI;
    echo "<br>";
    
    define('arreglo',['Leon',
                      'Anguila',
                      'Cebra',
                      'Venado'
                     ]);

    echo arreglo[2];

    echo "<br>";
    
    if(defined('arreglo'))
    {
        echo 'Si se ha creado esa constante';
    }
    else
    {
        echo 'La constante no se ha creado';
    }
    
    // operadores matematicos y asignacion
    echo "<br>";
    
    $num1 = 15;
    $num2 = 20;
    
    $operacion = ($num1 + $num2) + 5 * (8 - 2);
    
    echo $operacion;
    
    //operadores de comparacion
    
    echo "<br>";
    $numero1 = 30;
    $numero2 = 30;

    if ($numero1 == $numero2) 
    {
        echo "Los numeros son iguales";
    }
    else
    {
        echo "Los numeros son diferentes";
    }
    
    echo "<br>";
    $numero3 = 45;
    $numero4 = 55;
    
    echo ($numero3 < $numero4);
    
    // operadores logicos
    
    echo "<br>";
    $numero5 = "true";
    $numero6 = false;

    $comparacion = $numero5 || $numero6;
    $comparacion3 = $numero5 && $numero6;

    echo $comparacion;