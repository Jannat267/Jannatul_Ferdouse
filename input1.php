<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<?php
		if (isset($_POST['same'])) {
			$button = $_POST['same'];
				if ($button == '+') {
				$input = $_POST['input'];
				$operation = $button;
				$result = $button;
			}
			if ($button == '-') {
				$input = $_POST['input'];
				$operation = $button;
				$result = $button;
			}
			if ($button == '*') {
				$input = $_POST['input'];
				$operation = $button;
				$result = $button;
			}
			if ($button == '/') {
				$input = $_POST['input'];
				$operation = $button;
				$result = $button;
			}
			if($button == 'final'){
				$input = $_POST['input'];
				$hidden = $_POST['hidinput'];
				$operation = $_POST['operation'];
					if ($operation == '+') {
						$result = $input + $hidden;
						//echo "$result";
					}
					if ($operation == '-') {
						$result =  $hidden - $input;
						//echo "$result";
					}
					if ($operation == 'x') {
						$result = $input * $hidden;
						//echo "$result";
					}
					if ($operation == '/') {
						$result = $input / $hidden;
						//echo "$result";
					}
			}
		}

		

	?>



	<form action="" method="POST" >
		<div class="form-control">
			Value : <input type="text" name="input" value="<?= empty($result)? "" : "$result" ?>" class="form-input">
		</div>
		<input type="hidden" name="hidinput" value="<?= empty($input)? "" : "$input" ?>">
		<input type="hidden" name="operation" value="<?= empty($operation)? "" : "$operation" ?>">
		<button type="submit" name="same" value="+" class="btn btn-success">+</button>
		<button type="submit" name="same" value="-" class="btn btn-success">-</button>
		<button type="submit" name="same" value="x" class="btn btn-success">x</button>
		<button type="submit" name="same" value="/" class="btn btn-success">/</button>
		<button type="submit" name="same" value="final" class="btn btn-primary">=</button>

		
	</form>
</body>
</html>
stackpath.bootstrapcdn.com