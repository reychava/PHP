<!DOCTYPE html>
<html>
    <body>

        <?php
        /* Variable */
            $numVar1 = 20;
            $numVar2 = 60;
            $numVar3 = 40;

            /* Declarar 2 variables mayor */
            if ($numVar1 > $numVarar2) {
                echo "El numero $numVar1 es el mayor";
            } elseif ($numVar2 > $numVar1) {
            echo "El numero $numVar2 es el mayor";}

            echo "<hr>";

            /* Declarar 3 variables menor */
            if ($numVar1 < $numVar2 and $numVar1 < $numVar3) {
                echo "El numero $numVar1 es menor que $numVar2 y $numVar3";
            } elseif ($numVar2 < $numVar1 and $numVar2 < $numVar3) {
            echo "El numero $var2 es menor que $numVar1 y $numVar3";
            } else echo "El numero $numVar3 es menor que $numVar1 y $numVar2";



        ?> 

    </body>
</html>