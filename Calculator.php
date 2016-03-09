<?php
echo "<h1>PHP Program for Calculator.</h1><br>";
$a=10;
$b=5;
$d=3;

echo "Calculator Window!!","<br>";

switch($d)
{
 case 1: echo "Addition","<br>";
          $c=$a+$b;
         echo "a+b= ",$c;
         break;

 case 2: echo "Subtraction","<br>";
          $c=$a-$b;
         echo "a-b= ",$c;
         break;

 case 3: echo "Multiplication","<br>";
          $c=$a*$b;
         echo "a*b= ",$c;
         break;

 case 4: echo "Division","<br>";
          $c=$a/$b;
         echo "a/b= ",$c;
         break;

 default: echo "Wrong Choice";
}

?>