
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $numero=$_POST["numero"];
    echo "<br /><br /><br />";
    echo "Tu número es ".((($numero%2)==0)? "par" : "impar");
?>
<br><br>
<input type="button" onclick="window.location='index.php'" value="Volver a la principal"> <br>
<input type="button" onclick="window.location='parOImparForm.php'" value="Calcular otra">

</body>
</html>