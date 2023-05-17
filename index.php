<?php
    //constantes
    // define('PI',3.1415);
    // echo PI;

    // define('arreglo',['leon',
    //                   'zorro',
    //                   'puma',
    //                   'elefante',
    //                   'tigre']);

    // echo arreglo[2];

    // if(defined('PI')) 
    // {
    //     echo 'La constante si fue escrita';
    // }

    // echo "mi version de php es ". PHP_VERSION;

    // echo "mi sistema operativo es ". PHP_OS;

    // echo __LINE__;

    $nombre = "Jordi ";
    $apellidos = "Chavarry";

    echo "Su nombre es $nombre y su apellido es $apellidos";
    echo "<br>";
    echo 'Su nombre es '.$nombre.' y su apellido es '.$apellidos;
    
    echo "<br>";
    define('DNI',70374259);
    echo 'Su DNI es'.DNI;
    
    echo "<br>";
    if (defined('DNI')) 
    {
        echo 'La constante si ha sido definida';
    }
    
    echo "<br>";
    echo "Hola mi querida gente, 'como' estan en este dia tan \"especial\" de la semana";
    
    echo "<br>";
    define('arreglo',['persona',
                      'animal',
                      'cantante',
                      'soldado'
                     ]);

    echo 'Lo que elegi es ser un '.arreglo[2];

    