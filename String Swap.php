<?php
    
    echo '<h1>PHP Program to swap two Strings using both Call by Value & Call by Reference.</h1>';
    
    $a='Racecar';
 
    $b='Nascar';
    
    echo '<h4>Entered Strings are:</h4>';
    
    echo 'a = ',$a,'<br> b = ',$b;
    
    function swap($a,$b)
      {
          echo '<h4>Call by value function is used.</h4>';
          
          $c=$a;
   
          $a=$b;
   
          $b=$c;
   
          echo '<h4>After swapping!!</h4>a = ',$a,'<br> b = ',$b;
    
      }

    function swapping(&$a,&$b)
      {
      
          echo '<h4>Call by value function is used.</h4>';
          
          $c=$a;
          
          $a=$b;
          
          $b=$c;
          
          echo '<h4>After swapping!!</h4>a = ',$a,'<br> b = ',$b;
          
      }

    
    swap($a,$b);
    
    echo '<h4>Original value of string after using Call by Value function </h4>';
    
    echo 'a = ',$a,'<br> b = ',$b;
    
    swapping($a,$b);
    
    echo '<h4>Original value of string after using Call by Reference function </h4>';
    
    echo 'a = ',$a,'<br> b = ',$b;


?>