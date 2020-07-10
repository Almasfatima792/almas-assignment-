<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
     <meta name="decription" content="assignment">
	   <title> assignment </title>
	    </head>
		<body>
<?php
	 $marks=array(
		'zara'=>array(
		  'maths' =>50,
		  "science" =>60,
		  'computer' =>75
		  ),
		  'sara'=>array(
		    'maths' =>45,
			'science' =>50,
			'computer' =>60
		    ),
			'fatima' =>array(
			  'maths'=>60,
			  'science'=>70,
			  'computer'=>80
			  )
		 	  
			);
		echo"Marks for Zara in science: ";
	    echo$marks['zara']['science'] . "<br>";
		echo"Marks for sara in maths : ";
		echo$marks['sara']['maths'] . "<br>";
		echo"Marks for fatima in computer: ";
		echo$marks['fatima']['computer'];
		 ?>
		
			 </body>
			  </html>