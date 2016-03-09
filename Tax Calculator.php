<?php
    
    echo '<h1>PHP Program to Calculate Tax on the salary of an Employee </h1>';

    echo '<h4>Note:</h4> If salary is less than 180K, then Tax is not applicable!!<br>       If salary is between 180K & 400K, then Tax is 10%<br>       Whereas if the salary is more than 400K, then Tax is 20%<br><br>';
    
    
    $a[0]='Aman';
    
    $em[0]=150000;
    
    $a[1]='Sid';
    
    $em[1]=250000;
    
    $a[2]='Shaan';
    
    $em[2]=650000;
    
    function tax($d)
      {
		  static $t;
		  $t++;
		  
		  echo '<h4><br><br>Salary of employee(',$t,') is ',$d,'</h4>';
       
          if ($d<180000)
              
              echo 'There is to be no tax paid for the salary ',$d;
          
          else
             {
                 if($d<400000)
                   {
                       $e=$d/10;
                       
                       echo "Tax to be paid is 10% for the salary $d and the resulted Tax is : ",$e;
                   }
                 
                 else
                   {
                    
                       $e=$d/20;
                       
                       echo "Tax to be paid is 20% for the salary $d and the resulted Tax is : ",$e;
                       
                   }
                 
             }
          
      }
    
    for ($i=0;$i<3;$i++)
      {
       
          tax($em[$i]);
      }
    
    
?>