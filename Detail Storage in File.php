<?php
    
    echo '<h1>PHP Program to store the details of the Student in a File using File operations. </h1>';
	
	$file=fopen('untitled.txt','w');
	
	$name='Shubham';
	
	$roll='23';
	
	$sub='php';
	
	$a= "\n";
	
	fwrite($file, $name.$a.$roll.$a.$sub.$a);
	
	fclose($file);
	
?>