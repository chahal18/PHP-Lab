<?php
echo "<h1>PHP Program for Fibonacci Series.</h1><br>";
$b=0;
$c=1;

echo "Fibonacci Series Upto 6 numbers <br>",$b,"<br>",$c,"<br>";

for($a=0;$a<=3;$a++)
 {
   $d=$c+$b;
   $b=$c;
   $c=$d;
   echo $d,"<br>";

 }
?>
