<?php

    $numero = 40;

    if ($numero % 2 == 0) 
    {
        echo "El numero es par";
    }
    else
    {
        echo "El numero no es par";
    }

    echo "<br>";

    $numero2 = 70;

    if ($numero2 == 50) 
    {
        echo "El numero es 50<br>";

        if ($numero2 % 2 == 0 ) 

        {

            $resultado = $numero2 + 2;

            echo "El resultado de la operacion 1 es $resultado";

        } 

    }

    elseif($numero2 == 70)

    {

        echo "El numero es 70<br>";

        $resultado2 = $numero2 + 7;

        echo "La suma de 70 + 7 es ".$resultado2;

    }

    else

    {
        echo "Eres gil y moriras gil";
    }

    