<?php
 
    echo '<h1>PHP Program for applying all the arrays functions on Non-Associative & Associative arrays. </h1>';
    
    $a=array(15,2,34,55,45,26);
 
    $b['Maths']='Non-med';
 
    $b['Physics']='Non-med';
 
    $b['Chemistry']='Non-med';
 
    $b['Biology']='Med';
 
    $b['Zoology']='Med';

    echo '<h4>Displaying Non-Associative array</h4>';
    
    print_r($a);
 
    echo '<br><br>';
 
    echo '<h4>Displaying Associative array</h4>';
    
    print_r($b);
 
    echo '<br><br>';
 
    echo '<br><br>';


#Size of array
    echo '<h3>Displaying Size of arrays</h3>';

    $A=sizeof($a);
 
    $B=sizeof($b);
 
    echo '<h4>Size of Non-Associative array:</h4>',$A, '<br>', '<h4>Size of Associative array:</h4>',$B;
 
    echo '<br><br>';

    echo '<br><br>';


#Reversing the array
    
    echo '<h3>Reversing the array</h3>';
 
    $A=array_reverse($a);
 
    $B=array_reverse($b);
    
    echo '<h4>Non-Associative array after reversal.</h4>';
 
    print_r($A);
 
    echo '<br><br>';
    
    echo '<h4>Associative array after reversal.</h4>';
 
    print_r($B);
 
    echo '<br><br>';
 
    echo '<br><br>';

#Imploding the array into string
    
    echo '<h3>Imploding the array into string</h3>';
 
    $A=implode(" ",$a);
 
    $B=implode(" ",$b);
 
    echo '<h4>Non-Associative array after Imploding:</h4>',$A,'<br>','<h4>Associative array after Imploding:</h4>', $B;
 
    echo '<br><br>';
 
    echo '<br><br>';


#Sorting array in ascending order
    
    echo '<h3>Sorting array in ascending order</h3>';
 
    $A=$a;
 
    $B=$b;
 
    sort($A);
 
    asort($B);
    
    echo '<h4>Non-Associative array after Sorting:</h4>';
 
    print_r($A);
 
    echo '<br><br>';
 
    echo '<h4>Associative array after Sorting</h4>';
    
    print_r($B);
 
    echo '<br><br>';
 
    echo '<br><br>';


#Sorting array in descending order
    
    echo '<h3>Sorting array in descending order</h3>';
 
    $A=$a;
 
    $B=$b;
 
    rsort($A);
 
    arsort($B);
    
    echo '<h4></h4>';
 
    print_r($A);
 
    echo '<br><br>';
    
    echo '<h4></h4>';
 
    print_r($B);
 
    echo '<br><br>';
 
    echo '<br><br>';

#Sorting the Index values in associative array
    
    echo '<h3>Sorting the Index values in associative array</h3>';
 
    ksort($B);
    
    echo '<h4>Associative array after Sorting</h4>';
 
    print_r($B);
 
    echo '<br><br>';
 
    echo '<br><br>';

#Interchanging the keys and values of array
    
    echo '<h3>Interchanging the keys and values of array</h3>';
 
    $A=array_flip($a);
 
    $B=array_flip($b);
    
    echo '<h4>Non-Associative array after Sorting</h4>';
 
    print_r($A);
 
    echo '<br><br>';
    
    echo '<h4>Associative array after Sorting</h4>';
 
    print_r($B);
 
    echo '<br><br>';
 
    echo '<br><br>';

?>
