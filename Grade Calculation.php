<?php
  
    echo "<h1>PHP Program for calculating grades according to the % .</h1><br>";

    echo '<br><br>';

    $sub=array(95,86,75,98,73);
    
    echo '<h4>Marks scored in 5 subjects by a student:</h4>';

    echo 'Maths = ',$sub[0],'<br> Science = ',$sub[1],'<br> English = ',$sub[2],
                '<br>  Computer = ',$sub[3],'<br>  Hindi = ',$sub[4],'<br><br>';

    for($a=0;$a<5;$a++)
      {
        
          $b=$sub[$a]*(100/110);
        
          $b=number_format((float)$b, 2, '.', '');
        
          $sub[$a]="$b%";
      }

    echo '<h4>% marks in subjects:</h4>';

    print_r($sub);

    echo '<br><br>';
 
    $d;
 
    for($a=0;$a<5;$a++)
       {
           if($sub[$a]>=90)
          
               $d[$a]='A';
       
           elseif($sub[$a]>=80)
           
               $d[$a]='B';
       
           elseif($sub[$a]>=70)
           
               $d[$a]='C';
       
           elseif($sub[$a]>=60)
           
               $d[$a]='D';
       
           else
           
               $d[$a]='E';
       };
    
    echo '<h4>Grades secured in subjects according to %:</h4>';
    
    print_r($d);

    echo '<br><br>';
    
 

?>