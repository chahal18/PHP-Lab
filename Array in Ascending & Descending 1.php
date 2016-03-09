<?php

    echo "<h1>PHP Program for printing array in ascending & decsending order using sort & rsort functions.</h1><br>";

    $a=array(1,5,3,4,6,8,9,2,0,7);
    
    echo '<b>Value entered in the array</b> =';
    
    print_r($a);
    
    echo '<br><br>';
    
    echo '<b>Array after applying Sorting in Ascending order</b>';

    echo '<br><br>';

    sort($a);

    print_r($a);

    echo '<br><br>';

    echo '<br><br>';
    
    echo '<b>Array after applying Sorting in Descending order</b>';

    echo '<br><br>';

    rsort($a);

    print_r($a);

    echo '<br><br>';
    
    
?>



