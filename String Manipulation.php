<?php
echo "<h1>PHP Program for String Manipulations using functions.</h1><br>";

$a="hello everyone. i know php";
$g="hello everyone. i know php";

echo "a=",$a;

echo"<br>";

$b=strtoupper($a);
echo "b=",$b;

echo"<br>";

$c=strtolower($a);
echo "c=",$c;

echo "<br>";

$d=ucfirst($a);
echo "d=",$d;

echo "<br>";

$e=ucwords($a);
echo "e=",$e;

echo "<br>";

$f=strcmp($a,$g);
echo "f=",$f;

echo "<br>";

$h=strlen($a);
echo "h=",$h;

echo "<br>";

$i=trim($a);
echo "i=",$i;

echo "<br>";

$j=substr($a,6);
echo "j=",$j;

?>