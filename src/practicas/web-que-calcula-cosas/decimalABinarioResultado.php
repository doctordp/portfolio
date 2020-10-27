
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $decimal=$_POST["decimal"];


    echo "<br /><br /><br />";
    echo "Tu número en binario es ".decbin($decimal);
?>
<br><br>
<input type="button" onclick="window.location='index.php'" value="Volver a la principal"> <br>
<input type="button" onclick="window.location='decimalABinarioForm.php'" value="Calcular otra">

</body>
</html>