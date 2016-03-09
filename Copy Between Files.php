<?php 

    echo '<h1>PHP Program for copying details from one file to another.</h1>';
	
	$file1=fopen('student_details.txt','r');
	
	$file=fread($file1,filesize('student_details.txt'));
	
	$file2=fopen('student_details1.txt','w');
	
	fwrite($file2, $file);
	
	$file2=fopen('student_details1.txt','r');
	
	echo fread($file2,filesize('student_details1.txt'));
	
	fclose($file1);
	
	fclose($file2);
	
?>	