
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

    echo "<br /><br /><br />";
    echo "Tus números restados dan el resultado ".($a-$b);
?>
<br><br>
<input type="button" onclick="window.location='index.php'" value="Volver a la principal"> <br>
<input type="button" onclick="window.location='restaForm.php'" value="Calcular otra">

</body>
</html>