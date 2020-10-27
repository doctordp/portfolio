<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>

        <?php
            echo "<h1>Práctica 1</h1> </ br>";

            echo "<h3>Ejercicio 1</h3> </ br>";

            $hoy = getdate();
            
            echo "Today is $hoy[weekday] $hoy[mday]/$hoy[mon]/$hoy[year] </ br> </ br>";

            echo "<h3>Ejercicio 2</h3> </ br>";

            define ("MIPI", pi());
            $radio_circulo = 4;

            echo "El área de un círculo de 4cm de radio es " .round(MIPI*pow($radio_circulo, 2), 3) ." centímetros cuadrados </ br> </ br>";


            echo "<h3>Ejercicio 3</h3> </ br>";
            $dias_semana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
            echo "El último día de la semana es " .array_pop($dias_semana). "</ br> </ br>";

            echo "<h3>Ejercicio 4</h3> </ br>";
            $numeros_enteros = array (2, 3, 5, 10, 20);
            echo "La suma de los elementos del array es ". array_sum($numeros_enteros). "</ br> </ br>";

            echo "<h3>Ejercicio 5</h3> </ br>";
            $numeros_ordenar = array(15, 20, 34, 2, 84, 12, 3, 5, 14, 15);
            echo "Teniendo este array ";
            print_r($numeros_ordenar);
            echo "</ br> se ordena con la función sort y queda así: </br>";
            sort($numeros_ordenar);
            print_r($numeros_ordenar);
            echo "</ br> </ br>";

            echo "<h3>Ejercicio 6</h3> </ br>";

            function mostrarAsociativo(){
                $array_asociativo = array(
                    "clase 1" => "valor 1",
                    "clase 2" => "valor 2",
                    "clase 3" => "valor 3"
                );
                foreach($array_asociativo as $clases=>$valores){
                    echo "</br>".$clases." tiene guardado el valor ". $valores;
                    echo "</br>";
                }
            };

            mostrarAsociativo();

            echo "</ br> </ br>";
            echo "<h3>Ejercicio 7</h3> </ br>";
            $array_con_comunes_1 = array(1, 2, 5, 6);
            $array_con_comunes_2 = array(1, 2, 9, 12);
            $fuck = count($array_con_comunes_1);

            function elementosEnComunODistintos ($array1, $array2) {
                $arrayComunes = array();
                $arrayDistintos = array();
                for($i = 0; $i < count($array1); $i++){
                    for($j = 0; $j < count($array2); $j++){
                        if($array1[$i] === $array2[$j]){
                            array_push($arrayComunes, $array1[$i]);
                        }else{
                            if(array_search($array1[$i], $arrayDistintos) == null){
                                array_push($arrayDistintos, $array1[$i]);
                            }
                            if(array_search($array2[$j], $arrayDistintos) == null){
                                array_push($arrayDistintos, $array2[$j]);
                            }
                        }
                    }
                }
                print_r($arrayComunes);
                echo "</ br>";
                print_r($arrayDistintos);
            }

            elementosEnComunODistintos($array_con_comunes_1, $array_con_comunes_2);

            echo "</ br> </ br>";
            echo "<h3>Ejercicio 8</h3> </ br>";
            $array2elementos = array(1, 2);
            echo "Este es el array de dos elementos";
            print_r($array2elementos);
            array_push($array2elementos, 3, 4, 5);
            echo "</br> Este es el mismo array con 3 elementos más, usando array_push(): ";
            print_r($array2elementos);
            echo "<br /> El último elemento del array es, usando array_pop(): ";
            print array_pop($array2elementos);

            
            echo "</ br> </ br>";
            echo "<h3>Ejercicio 9</h3> </ br>";
            $arrayConNombres = array("Gerardo", "Flipencio", "Dominic", "Joker", "Khal Drogo", "Tony Stark", "Estacio");
            echo "Mi array con nombres es el siguiente: ";
            print_r($arrayConNombres);
            echo "</ br> </ br>";
            echo "<br />";
            function buscarNombre ($arrayNombres, $nombreABuscar) {
                for ($i = 0; $i < count($arrayNombres); $i++) {
                    if (strcmp($arrayNombres[$i], $nombreABuscar) === 0) {
                        echo "\nHe usado la función strcmp() para encontrar mi nombre: $arrayNombres[$i] en la posición $i";
                    }else {
                        continue;
                    }
                }
            }
            buscarNombre($arrayConNombres, "Dominic");

            echo "</ br> </ br>";
            echo "<h3>Ejercicio 10</h3> </ br>";
            $cadena1 = "Cadena1";
            echo "$cadena1 <br />";
            $cadena2 = "Cadena2";
            echo "$cadena2 <br />";
            $cadenaResultado = $cadena1.$cadena2;
            echo "$cadenaResultado";

            
            echo "</ br> </ br>";
            echo "<h3>Ejercicio 11</h3> </ br>";
            $cadenaConEspaciosDeMAs = " Esta cadena tien un espacio de más al principio y otra al final, pero se lo quito con la función trim() ";
            echo $cadenaConEspaciosDeMAs;
            echo "<br />Número de caracteres del string: ".strlen($cadenaConEspaciosDeMAs);
            echo "<br />Número de caracteres del mismo String aplicando trim(): ".strlen(trim($cadenaConEspaciosDeMAs));
            

            echo "</ br> </ br>";
            echo "<h3>Ejercicio 12</h3> </ br>";
            $stringDeLaProfe = "Había una vez un programador con un ordenador nuevo y una pantalla de 27\" ...";
            echo $stringDeLaProfe;
            function encontrarTodasLasApariciones ($stringLargo, $palabraABuscar) {
                $numeroDeVeces = 0;
                $posiciones = array();
                $desdeDondeBusco = 0;
                do {
                    $auxPos = strpos($stringLargo, $palabraABuscar, $desdeDondeBusco);
                    if($auxPos != null) {
                            if(strcmp(substr($stringLargo, ($auxPos + strlen($palabraABuscar)), 1), " ") === 0){    
                            $numeroDeVeces++;
                            array_push($posiciones, $auxPos);
                            $desdeDondeBusco += ($auxPos + strlen($palabraABuscar));
                            continue;
                            }else {
                                $desdeDondeBusco += 1;
                                continue;
                            }
                    }else{
                        break;
                    }
                }while(0 < 1);
                echo "<br />La palabra $palabraABuscar se repite $numeroDeVeces veces en las posiciones: ";
                if(count($posiciones)>0){
                    for($i = 0; $i < count($posiciones); $i++){
                        echo " ".$posiciones[$i];
                    }
                }
                
            }
            encontrarTodasLasApariciones($stringDeLaProfe, "una");
            encontrarTodasLasApariciones($stringDeLaProfe, "un");

            echo "</ br> </ br>";
            echo "<h3>Ejercicio 13</h3> </ br>";

            $cadenaSaludo = "Hola, soy Dominic y soy alumno de DAW2";
            echo "Cadena original: $cadenaSaludo";
            echo "<br />Mi nobre sacado de ahí: ".substr($cadenaSaludo, 10, 7);

            
            echo "</ br> </ br>";
            echo "<h3>Ejercicio 13</h3> </ br>";
            function dosFuncionesStringYArray(){
                $stringAconvertir = " Hola ";
                $arrayAleatorio = array("nada");
                array_push($arrayAleatorio, trim($stringAconvertir));
                $stringResult = implode(",", $arrayAleatorio);

                echo "<br /> Simplemente he usado trim() e implode para string y array_push e implode (incluye las dos) para array.";
                echo "<br />Simple y eficaz, un 10...";
                echo "<br /> porfa";
            }
            dosFuncionesStringYArray();
            



        ?>

    </body>
</html>