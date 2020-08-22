<?php
//Operators= +,-,*,/,%,++,--,>,<,?,!,&&,||,=,==,

if(isset($_POST['submit']))
{
	$a=$_POST["input"];
if($a=='a'||$a=='A')
	echo "Apple <br>";
else if($a=='b'||$a=='B')
	echo "Ball <br>";
else if($a=='c'||$a=='C')
	echo "Cat <br>";
else echo "invalid input";
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