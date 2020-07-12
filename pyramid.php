<!DOCTYPE html>
 <html lng="en">
  <head>
   <meta charset="utf-8">
    <meta name="description" content="pyramid">
	 <title>  pyramid </title>
       </head>
 <body> 
    <h1> PYRAMID </h1>
	   <?php
       for($i=0;$i<=5;$i++){	
	     for($j=0;$j<=$i;$j++){
		   echo "*";
	}
	echo "<br/>";
}
?>
<div>
<h2> PYRAMID 2 </h2>
  </div>


<?php
for($i=0;$i<=5;$i++)
{
	for($j=5-$i;$j>=0;$j--){
	echo "*";
	}
echo "<br>";
}
?>

<div> 
  <h2> TRIANGLE  </h2>
  
   </div>
 <?php
//Star Pyramid Size
    $size = 5;
      for($i=1;$i<=$size;$i++){
           for($j=1;$j<=$size-$i;$j++){
             echo "&nbsp;&nbsp;";
    }
            for($k=1;$k<=$i;$k++){
		     echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}
?>	
<div>
   <h2> NUMBER PYRAMID </h2>
    </div>
	<?php
      for($i=0;$i<=9;$i++){
 
        for ($d=10-$i; $d > 0; $d--)  {
 
         echo "&nbsp;&nbsp;";
    }
           for($j=1;$j<=$i;$j++){
 
             echo "&nbsp;".$i."&nbsp;";
    }
 
    echo "<br>";
 
}  ?>
	
  
 </body>
   </html>