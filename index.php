<?php

echo "My first PHP script!";
echo "<br>";
echo "Mis datos:";
$nombre="Lizbet Olvera Morales";
$edad=18;
$estatura=1.67;
echo "Soy... ". strtoupper($nombre)."  tengo" . $edad ." años y mido" .
$estatura ."metros";
echo"<br>";
var_dump(is_int($nombre));
echo"<br>";
$x=34;
$y=356.78;
$z=$x+$y;
echo "La suma es $x + $y = $z <br>";
$x=45;
$y=38;
$z=$x-$y;
echo "La resta es $x + $y = $z <br>";
$x=30;
$y=20;
$z=$x*$y;
echo "La Multiplicacion es $x * $y = $z <br>";
$x=45;
$y=15;
$z=$x/$y;
echo "La division es $x / $y = $z <br>";
$x=20;
$y=55;
$z=$x^$y;
echo "El exponente es $x ^ $y = $z <br>";
echo(pow(2,4) . "<br>");
echo(pow(-2,4) . "<br>");
echo(pow(-2,-4) . "<br>");
echo(pow(-2,-3.2));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica php</title>
</head>
<body>
    
</body>
</html>