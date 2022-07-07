<!DOCTYPE html>
<html>
<body>
    
    <!--suma de numeros enteros -->
    <?php
    
    $numVar1 = 20;  //declarar variable
    $numVar2 = 100; //declarar variable
    $numVar3 = 0.5;
    $numVar4 = 0.2;
    echo "ejemplo de suma:<br> 20 + 100 = ?<br>";// 
    $suma = $numVar1 + $numVar2; //
    echo "¿la suma es? <br>" . $suma;
    ?>
     
    <hr>
    

    <!--suma de numeros decimales-->
    <?php
    
    $numVar1 = 0.2;
    $numVar2 = 0.5;
    $numVar3 = 0.1;
    echo" ejemplo de suma decimal:<br>  0.2 + 0.5 + 0.1 = ?<br>";
    $suma = $numVar1 + $numVar2 + $numVar3;
    echo "¿la suma es? <br> " . $suma;
    ?>
    
    <hr>
    <!--multiplicacion de numeros enteros-->
    <?php
    
    $numVar1 = 7;
    $numVar2 = 9;
    echo" ejemplo de multiplicacion:<br> 7 x 9 = ?<br>";
    $multiplicacion = $numVar1 * $numVar2;
    echo "¿la multiplicacion es? <br> " . $multiplicacion;
    ?>

<hr>
    <!--concatenacion-->
    <?php
    
    $text = "REYNALDO";
    $text2 = "CHAVARRIA";
    
    // concatenacion
    $texto = $text . $text2;
    echo " concatenacion es ? <br" . $texto;
    ?>
    
</body>
</html>
