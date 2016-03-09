<?php

    echo '<h1>PHP Program to generate Employee Id.</h1>';
    
    function genid($a)
      {
          static $b=1;
          
          echo '<br><br><b>Employee name :<b> ',$a;
          
          echo '<br><br><b>Employee Id : <b>',$b;
          
          $b++;
       
      }
    
    $a='Aman';
    
    genid($a);
    
    $a='Sid';

    genid($a);
    
    $a='Shaan';
    
    genid($a);
    
?>
    
  
    
