
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $base=$_POST["base"];
    $altura=$_POST["altura"];

    echo "<br /><br /><br />";
    echo "El área de tu rectángulo es ".$base*$altura;
?>
<br><br>
<input type="button" onclick="window.location='index.php'" value="Volver a la principal"> <br>
<input type="button" onclick="window.location='areRectanguloForm.php'" value="Calcular otra">

</body>
</html>