<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	
if(isset($_POST["save"]))
{
	$a=$_POST["a"];
	$b=$_POST["b"];
    for ($i=1; $i <=$b; $i=$i+.1) { 
    	echo $a."X".$i."=".$a*$i;echo "<br>";
    }
    	




}
	


	 ?>

</body>
</html>