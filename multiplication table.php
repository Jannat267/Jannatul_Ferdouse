<!DOCTYPE html>
<html>
<head>
	<title>Multiplication table</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="a">
<input type="text" name="b">
      <input type="submit" name="save" value="OK">
      <input type="submit" name="ok" value="save">

		
	</form>
	<?php 
	
if(isset($_POST["save"]))
{
	$a=$_POST["a"];
	$b=$_POST["b"];
    for ($i=1; $i <=$b; $i=$i+.1) { 
    	echo $a."X".$i."=".$a*$i;echo "<br>";
    }
 }
 if(isset($_POST["ok"]))
{
  $a=$_POST["a"]; 
  $b=$_POST["b"];
       echo "$a $b";
   }

?>

</body>
</html>