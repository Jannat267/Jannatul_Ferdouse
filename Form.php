<html>
<head>
<titel>Form</title>
</head>
<body>
<form method="post"action="formresult.php">
<table width="200px"border="2px" style="background-color: pink;">

<tr>

<td>Name</td><td><input type="text" name="n"/><td>
</tr>
<tr>
<td>Phone</td><td><input type="text" name="phone"/></td>
</tr>
<tr>
<td>Email</td><td><input type="text" name="email"/></td>
</tr>
<tr>
<td>Blood group</td><td><select name="bg">

<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<option>AB+</option>
<option>AB-</option>
</select>
</td>
</tr>
<tr>
<td>Gender</td>
<td>
<input type="radio" name="gender"value="m">Male<br>
<input type="radio" name="gender"value="f">Female

</td>

</tr>
<tr>
<td>Hobies</td>
<td>
<input type="checkbox" name="reading">Reading
<input type="checkbox" name="cyclying">Cyclying
<input type="checkbox" name="gaming">Gaming
<input type="checkbox" name="singing">Singing
<input type="checkbox" name="sleeping">Sleeping
</td>
</tr>
<tr>
<td>University</td><td><input type="text" name="uni"/></td>
</tr>
<tr>
<td>Address</td><td><input type="text" name="address"/></td>
</tr>
</table>
<tr>
<th>
<input type="submit" name="save"value="Save"/ style="color:white; 
background:#FF1493;margin: 10px;padding: 10px;border-radius: 10%; ">
</th>
</tr>

</form>
</body>
</html>
