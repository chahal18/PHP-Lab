<?php
echo "<h1>PHP Program for extracting Words from a String.</h1><br>";
$a= "Hello Everyone, I Know Php";

echo $a,"<br>","Now Exploding the sentence","<br>";

$b= explode(" ", $a);

echo $b[0],"<br>",$b[1],"<br>",$b[2],"<br>",$b[3],"<br>",$b[4],"<br>";

?>