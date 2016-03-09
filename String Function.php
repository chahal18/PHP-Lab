<?php

 echo "<h1>PHP Program for Checking whether the Variables<br> are Empty or not using Empty Function.</h1><br>";
$a;
$b=10;

empty($a);
empty($b);
empty($c);

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