<!DOCTYPE html>
<html>
<body>
<?php
$b = $_POST['input6'];
$a = explode(", ", $b);
sort($a);
$alength=count($a);
for($x=0;$x<$alength;$x++)
{
  echo $a[$x];
  echo "<br>";
}
?>
</body>
</html>
