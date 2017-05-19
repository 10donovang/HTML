<!DOCTYPE html>
<html>
<body>
<?php
$n = $_POST['n'];
$x = $_POST['x'];
$t = 1;
while($t <= $x){
echo "N: ", $t, "X:", $t * $n, "<br>";
$t = $t + 1;}
?>
</body>
</html>
