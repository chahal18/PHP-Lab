<?php
 
    echo "<h1>PHP Program for printing array in ascending & descending order.</h1><br>";
  
    $a=array(1,5,3,4,6,8,9,2,0,7);

    echo '<b>Value entered in the array</b> =';
  
    print_r($a);
 
    echo '<br><br>';
 
  
    #Ascending Order
  
 
    echo '<b>Array after applying Sorting in Ascending order</b>';
  
    echo '<br><br>';
   
 
    for($b=0;$b<10;$b++)
     {
      for($c=0;$c<10;$c++)
         {
           if($a[$b]<$a[$c])
              {
                $d=$a[$c];
                $a[$c]=$a[$b];
                $a[$b]=$d;
              }
        }
     }


    print_r($a);
 
    echo '<br><br>';

    #Descending Order

    echo '<b>Array after applying Sorting in Descending order</b>';
  
    echo '<br><br>';

    $a=array_reverse($a);
    
    print_r($a);
 
    echo '<br><br>';
 
    echo '<br><br>';

?>
