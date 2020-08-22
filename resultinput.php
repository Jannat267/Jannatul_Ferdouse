<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$name=$_POST["name"];
	$custId=$_POST["custId"];

	if(isset($_POST["add"]))
 {
 	$custId=$name;
 }

if(isset($_POST["sub"]))
{
	$c=$name+$custId;
}
      

	 ?>

</body>
</html>