<?php

    //comparacion
    $a = 10;
    $b = 10;

    echo $a == $b;
    echo "<br>";
    var_dump($a == $b);
    
    $c = 5;
    $d = 5;
    
    echo "<br>";
    var_dump($c != $d);
    
    $f = 20;
    $g = 20;
    echo "<br>";
    
    if ($f != $g) 
    {
        echo "Si son diferentes";
        echo "<br>";
    }
    else
    {
        echo "Son iguales o no se que";

    }
    
    //logicos
    
    $y = "true";
    $b = false;
    
    echo "<br>";
    var_dump($y || $b);
