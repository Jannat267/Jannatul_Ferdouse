<?php
//Operators= +,-,*,/,%,++,--,>,<,?,!,&&,||,=,==,

if(isset($_POST['submit']))
{
	$a=$_POST["input"];
if($a<0||$a>100)
	echo "Invalid Input";
elseif($a>0 && $a <=33)
	echo "F";
elseif($a>33 && $a <=50)
	echo "c";
elseif($a>50 && $a <=60)
	echo "B";
elseif($a>60 && $a <=70)
	echo "A-";
elseif($a>70 && $a <=80)
	echo "A";
elseif($a>80 && $a<=100)
	echo "A+";
else echo "invalid Input";
 
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
	<input type="text" name="input">
	<input type="submit" name="submit">
	</form>

</body>
</html>