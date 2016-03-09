<?php 

    echo '<h1>PHP Program for retrieving Students details from a file.</h1>';
	
	function read()
	  {
		echo '<h4>File Reading Process initated using fread:</h4>'; 
			  
		$file=fopen('student_details.txt','r');
	  	
	  	echo fread($file,filesize('Student_details.txt'));
		
		fclose($file);
	
	  }
		
	function read1()
	  {
	  	
		echo '<h4>File Reading Process initated using fgets:</h4>'; 
		
  		$file=fopen('student_details.txt','r');
	  	
  	  	while(!(feof($file)))
		  {
		    
			  echo '<br>'.fgets($file);
		 	
		  }
		
  		fclose($file);
		
	  }
				
	  read();
	  read1();
	
	
?>		
		
		
 
  	  

	  
 
