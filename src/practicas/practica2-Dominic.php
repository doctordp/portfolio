<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Práctica 2</h1> </ br>";

    echo "<h3>Ejercicio 1</h3> </ br>";
    $inicial = 60;
    while($inicial >= 45){
        echo "$inicial <br />";
        $inicial--;
    }

    echo "<br /><br />";
    echo "<h3>Ejercicio 2</h3> </ br>";
    $contador = 1;
    while($contador <= 5){
        echo $contador*2 ."<br />";
        $contador++;
    }

    echo "<br /><br />";
    echo "<h3>Ejercicio 3</h3> </ br>";
    for($i = 60; $i >= 45; $i--){
        echo $i ."<br />";
    }

    
    echo "<br /><br />";
    echo "<h3>Ejercicio 4</h3> </ br>";
    for($contador = 1; $contador <= 5; $contador++){
        echo $contador*2 ."<br />";
    }
    
    echo "<br /><br />";
    echo "<h3>Ejercicio 5</h3> </ br>";
    for($i = 10; $i <= 200; $i+=10){
        echo $i."<br />";
    }
    
    echo "<br /><br />";
    echo "<h3>Ejercicio 6</h3> </ br>";
    $numeroAComparar1 = 10;
    $numeroAComparar2 = 20;
    echo "El mayor es: ". (($numeroAComparar1 > $numeroAComparar2) ?  $numeroAComparar1 :  $numeroAComparar2);
    
    echo "<br /><br />";
    echo "<h3>Ejercicio 7</h3> </ br>";
    $numeroAComparar3 = 15;
    $numeroAComparar4 = 35;
    $numeroAComparar5 = 5;
    if($numeroAComparar3 < $numeroAComparar4 && $numeroAComparar3 < $numeroAComparar5){
        echo "El menor es: $numeroAComparar3";
    }else if ($numeroAComparar4 < $numeroAComparar3 && $numeroAComparar4 < $numeroAComparar5){
        echo "El menor es: $numeroAComparar4";
    } else {
        echo "El menor es: ".$numeroAComparar5;
    }
    
    echo "<br /><br />";
    echo "<h3>Ejercicio 8</h3> </ br>";
    $precioVentas = 2530;
    switch($precioVentas){
        case ($precioVentas > 0 && $precioVentas <= 100):
            echo "El beneficio es: ".$precioVentas;
        break;
        case ($precioVentas > 1000 && $precioVentas <= 2000):
            echo "El beneficio es: ".$precioVentas+=($precioVentas*0.05);
        break;
        case ($precioVentas > 2000 && $precioVentas <= 3000):
            echo "El beneficio es: ".$precioVentas+=($precioVentas*0.1);
        break;
        case ( $precioVentas > 3000):
            echo "El beneficio es: ".$precioVentas+=($precioVentas*0.15);
        break;
    }
    
    echo "<br /><br />";
    echo "<h3>Ejercicio 9</h3> </ br>";
    $todasLasLetras = "abcdefghijklmñopqrstuwxyz";
    $posicionAMostrar = "ñ";
    echo "La posición de la ñ es: ".(strpos($todasLasLetras, $posicionAMostrar)+1);
    
    
    echo "<br /><br />";
    echo "<h3>Ejercicio 10</h3> </ br>";
    $sumando1 = 0;
    $sumando2 = 1;
    $resultado = 0;
    echo "1<br />";
    for($i = 0; $i < 10; $i++){
        $resultado = $sumando1 + $sumando2;
        echo $resultado."<br />";
        $sumando1 = $sumando2;
        $sumando2 = $resultado;
    }
    
    
    echo "<br /><br />";
    echo "<h3>Ejercicio 11</h3> </ br>";
    $resultado1al10 = 0;
    for($i = 0; $i <= 10; $i++){
        $resultado += $i;
    }
    echo "El resultado de la suma de los 10 primeros número es: ".$resultado;
    
    
    echo "<br /><br />";
    echo "<h3>Ejercicio 12</h3> </ br>";
    $array1 = array('aa', '11', '34', 'ff', 'mm');
    $array2 = array('ff', 'hh', 'mn', '33', '34');
    $arrayComunes = array();
    for($i = 0; $i < count($array1); $i++){
        for($j = 0; $j < count($array2); $j++){
            if(strcmp($array1[$i], $array2[$j]) == 0 &&
            array_search($array1[$i], $arrayComunes) == null){
                array_push($arrayComunes, $array1[$i]);
            }
        }
    }
    print_r($arrayComunes);
    
    
    echo "<br /><br />";
    echo "<h3>Ejercicio 13</h3> </ br>";
    for($i = 1; $i <= 10; $i++){
        echo "Todo OK, contador: $i<br />";
    }
    
    
    echo "<br /><br />";
    echo "<h3>Ejercicio 14</h3> </ br>";
    $numeroAOperar1 = 15;
    $numeroAOperar2 = 40;
    $simboloOperar = '*';
    function operarDosNumeros ($numero1, $numero2, $operacion) {
        switch ($operacion){
            case (strcmp($operacion, '+')):
                return $numero1 + $numero2;
            break;
            case (strcmp($operacion, '-')):
                return $numero1 - $numero2;
            break;
            case (strcmp($operacion, '*')):
                return $numero1 + $numero2;
            break;
            case (strcmp($operacion, '/')):
                return $numero1/$numero2;
            break;
            default:
                return "Operación no soportada";
            break;
        }
    }

    echo "El restulado de $numeroAOperar1 * $numeroAOperar2 es: ". operarDosNumeros($numeroAOperar1, $numeroAOperar2, $simboloOperar);
    
    
    echo "<br /><br />";
    echo "<h3>Ejercicio 15</h3> </ br>";
    $variableAEvaluar = 1;
    switch($variableAEvaluar){
        case 1:
            echo "ES UNO, GRACIAS POR ASISTIR A MI TED TALK";
        break;
    }

    ?>
</body>
</html>