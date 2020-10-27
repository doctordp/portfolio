
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
    $c=$_POST["c"];

    $x1= (-$b+sqrt($b**2-4*$a*$c)/(2*$a));
    $x2= (-$b-sqrt($b**2-4*$a*$c)/(2*$a));

    echo "<br /><br /><br />";
    echo "Las soluciones a tu ecuación son $x1 y $x2";
?>
<br><br>
<input type="button" onclick="window.location='index.php'" value="Volver a la principal"> <br>
<input type="button" onclick="window.location='ecuacionSegundoGradoForm.php'" value="Calcular otra">

</body>
</html>