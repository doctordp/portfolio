
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $a=$_POST["a"];
    $b=$_POST["b"];

    $resultadoAnd = ($a == 1 && $b == 1)? 1 : 0;
    $resultadoOR = ($a == 1 || $b == 1)? 1 : 0;
    $resultadoXOR = (($a == 1 && $b == 0) || ($a == 0 && $b == 1))? 1 : 0;

    echo "<br /><br /><br />";
    echo "Si tus valores hubiesen entrado por una puerta AND, los resultados saldrían: $resultadoAnd <br />";
    echo "Si tus valores hubiesen entrado por una puerta OR, los resultados saldrían: $resultadoOR <br />";
    echo "Si tus valores hubiesen entrado por una puerta XOR, los resultados saldrían: $resultadoXOR <br />";
?>
<br><br>
<input type="button" onclick="window.location='index.php'" value="Volver a la principal"> <br>
<input type="button" onclick="window.location='puertasLogicasForm.php'" value="Calcular otra">

</body>
</html>