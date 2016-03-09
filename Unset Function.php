<?php

echo "<h1>PHP Program for deleting the Variables using Unset Function.</h1><br>";

$a;
$b=10;

unset($a);
unset($b);
unset($c);

if(isset($a))
echo "A exists!!";
else 
echo "A don't exists!!";

echo "<br>";

if(isset($b))
echo "B exists!!";
else 
echo "B don't exists!!";

echo"<br>";

if(isset($c))
echo "C exists!!";
else
echo "C don't exists!!";

?>