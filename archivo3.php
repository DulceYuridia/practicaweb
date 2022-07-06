<!DOCTYPE html>
<html>
<body>

<?php
// Comprobar si el tipo de una variable es entero  
$x = 63;
var_dump(is_int($x));

echo "<br>";

// Revisar otra vez...
$y = 12; 
var_dump(is_int($y));
echo "<br>"
?>  

<?php
echo(min(0, 150, 30, 20, -8, -333) . "<br>");
echo(max(0, 50, 30, 20, -8, -200));
?>

</body>
</html>