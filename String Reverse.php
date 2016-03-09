<?php
    
    echo '<h1>PHP Program to permanently reverse the string using function. </h1>';

    $a='Racecar';
    
    $b=strrev($a);
    
    echo'<h4>Entered String is:</h4>';
    
    echo $a,'<br><br>';


    function rev($a)
      {
   
          global $a;
   
          $a=strrev($a);
   
          echo '<h4>String after reversal is:</h4>';
          
          echo $a,'<br><br>';
      }


    rev($a);
 
    echo '<h4>Checking that whether the string is completely reversed or not.</h4>';
    
    echo 'Current value of string = ',$a;
    
    $a=($a=$b)?'<h4>Yes, string is permanently reversed.</h4>':'<h4>No, string is not permanently reversed.</h4>';
    
    echo $a;

?>

