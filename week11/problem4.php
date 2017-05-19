<!DOCTYPE html>
<html>
<body>

<?php
$a = $_POST['input4'];
$s = array("uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", 
"diez", "once", "doce", "trece", "catorce", "quince", "dieciseis", "diecisiete",
 "dieciocho", "diecinueve", "veinte");

if($a==="one")
{$x = 0;}

else if($a==="two")
{$x = 1;}

else if($a==="three")
{$x = 2;}

else if($a==="four")
{$x = 3;}

else if($a==="five")
{$x = 4;}

else if($a==="six")
{$x = 5;}

else if($a==="seven")
{$x = 6;}

else if($a==="eight")
{$x = 7;}

else if($a==="nine")
{$x = 8;}

else if($a==="ten")
{$x = 9;}

else if($a==="eleven")
{$x = 10;}

else if($a==="twelve")
{$x = 11;}

else if($a==="thirteen")
{$x = 12;}

else if($a==="fourteen")
{$x = 13;}

else if($a==="fifteen")
{$x = 14;}

else if($a==="sixteen")
{$x = 15;}

else if($a==="seventeen")
{$x = 16;}

else if($a==="eighteen")
{$x = 17;}

else if($a==="nineteen")
{$x = 18;}

else if($a==="twenty")
{$x = 19;}

if($x<=20){
echo "The word \"", $a, "\" in Spainish is \"", $s[$x], "\"";}
else{
echo "The English cardinal \"", $a, "\" is not between \"one\" and 
\"twenty\"";}
?>

</body>
</html>
