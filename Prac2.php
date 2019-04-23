<!DOCTYPE html>
<html>
<head>
	<title>Shubhangi Goyal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta author="SHUBHANGI GOYAL">
	<link rel="stylesheet" href="all.css">
	<link rel="icon" href="favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Raleway|Redressed" rel="stylesheet">
</head>
<body>
	<a href='index.php?home'>< Go back</a>
	<div class="prac">
	<form method="post" action="">
		Number: <input type="number" name="num1" min="1"><br>
		<input type="submit" name="submit" value="Calculate Factorial">
	</form>

	<?php
	if(isset($_POST['submit']))
	{
		$a=$_POST['num1'];
		echo "The given number is :".$a."<br>";
		fact($a);
	}
	function fact($a){
		$f=1;
		for($i=$a;$i>1;$i--)
		{
			$f=$f*$i;
		}
		echo " The factorial of the given number is :".$f."<br>";	
	}


	?>
</div>
</body>
</html>