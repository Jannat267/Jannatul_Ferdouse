<html>
<head>
	<style type="text/css">
		table
		{
		 background: linear-gradient(to bottom, #0000ff 0%, #66ccff 100%);
		color: white;
		}
	</style>
</head>
<boby>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")

{
	$name=$_POST["n"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$bg=$_POST["bg"];
	$gender=$_POST["gender"];
	$reading=$_POST["reading"];
	$cyclying=$_POST["cyclying"];
	$gaming=$_POST["gaming"];
	$singing=$_POST["singing"];
	$sleeping=$_POST["sleeping"];
	$uni=$_POST["uni"];
	$address=$_POST["address"];
	
	echo"<table border='2'>
	<tr>
	<td>Name</td>
	<td>".$name."</td>
	</tr>
	<tr>
	<td>Phone</td>
	<td>".$phone."</td>
	</tr>
	<tr>
	<td>Email</td>
	<td>".$email."</td>
	</tr>
	<tr>
	<td>Blood group</td>
	<td>".$bg."</td>
	</tr>
	<tr>
	<td>Gender</td>
	<td>".$gender."</td>
	</tr>
	<tr>
	<td>Hobies</td><td>";
	if($_POST["reading"]=="on")
	echo"Reading<br>";
	if($_POST["cyclying"]=="on")
	echo"Cyclying<br>";
	if($_POST["gaming"]=="on")
	echo"Gaming<br>";
	if($_POST["singing"]=="on")
	echo"Singing<br>";
	if($_POST["sleeping"]=="on")
	echo"Sleeping<br>";
	echo"</td>
	</tr>
	<tr>
	<td>University</td>
	<td>".$uni."</td>
	</tr>
	<tr>
	<td>address</td>
	<td>".$address."</td>
	</tr>
	</table>";
}
?>
</body>
</html>