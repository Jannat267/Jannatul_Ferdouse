<html>
<body>
	<?php 

   $a=$_POST["a"];
   $b=$_POST["b"];
   
   $c=$a+$b;
   $d=$a-$b;
   $e=$a*$b;
   $f=$a/$b;

 if(isset($_POST["add"]))
 {
 	echo "Addition = ".$c;
 }
 if(isset($_POST["sub"]))
 {
 	echo "Substraction = ".$d;
 }
 if(isset($_POST["mul"]))
 {
 	echo "Multiplication = ".$e;
 }
 if(isset($_POST["div"]))
 {
 	echo "Division = ".$f;
 }





 ?>
</body>
</html>