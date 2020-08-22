<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="">
	.btn{
	background: linear-gradient(to bottom, #0066ff 0%, #ffffff 132%);
	border-radius: 15%;
	}
	#name{
		    background: #ebebe0;
		    border-radius: 7%;
	}

		
</style>
</head>
<body>
	<?php 
	
if(isset($_POST['button']))
{
	$button = $_POST['button'];

	if($button=='ad')
 {
 	$name=$_POST["name"];
 	$custId=$name;
 	$n=$button;

 }
 if($button=='su')
 {
 	$name=$_POST["name"];
 	$custId=$name;
 	$n=$button;
 	
 }
 if($button=='mu')
 {
 	$name=$_POST["name"];
 	$custId=$name;
 	$n=$button;
 	
 }
 if($button=='di')
 {
 	$name=$_POST["name"];
	
 	$custId=$name;
 	$n=$button;
 }

 if($button=='=')
   
{
	$name=$_POST["name"];
	$custId=$_POST["custId"];
	$operation=$_POST["operation"];
    $n = $operation;
    if ($n=='ad') {
    	$result=$custId+$name;
    }
    if($n=='su')
    	$result=$custId-$name;
    if($n=='mu')
    	$result=$custId*$name;
    if($n=='di')
    	$result=$custId/$name;
		 }
		}
		echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>

<form method="POST">

  <input type='text'id='name' name='name'value='<?php
  if(empty($result)){echo "";} else echo $result; ?>'><br><br>
  <input type='hidden' id='custId' name='custId' value='<?php echo $custId; ?>'>
  <input type="hidden" name="operation" value="<?php echo $n; ?>">
  

<button type="submit" class="btn" name="button" value="ad">
		+
	</button>
	<button type="submit" class="btn" name="button" value="su" >
		-
	</button>
	<button type="submit" class="btn" name="button" value="mu">
		X
	</button>
	<button type="submit"class="btn" name="button" value="di">
		/
	</button>
	<button type='submit' value='='name="button" class="btn">=</button>
</form>


</body>
</html>