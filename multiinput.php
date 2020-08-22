
<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
</head>
<body>

<form action="/action_page.php">

input field : <input type="hidden" name="person" id="myInput" valu
e="rupali"><br>
<input type="submit" value="Submit">
</form>

<button onclick="myFunction()">Try it</button>
<p id="demo"></p>

<script>
function myFunction() {
  document.getElementById("myInput").value = "rupa";
  document.getElementById("demo").innerHTML = "The value of the value attribute was changed. Try to submit the form again.";
}
</script>

</body>
</html>