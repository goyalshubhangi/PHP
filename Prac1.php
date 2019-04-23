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
		<p>Enter three numbers</p>
		Number1: <input type="number" name="num1"><br>
		Number2: <input type="number" name="num2"><br>
		Number3: <input type="number" name="num3"><br>
		<input type="submit" name="submit" value="Calculate Largest Number">
	</form>

	<?php
	if(isset($_POST['submit'])){
		$a=$_POST['num1'];
		$b=$_POST['num2'];
		$c=$_POST['num3'];
		largest($a,$b,$c);
		echo "The numbers were: ".$a." ".$b." ".$c."<br";
	}
	function largest($a,$b,$c){
		if($a>$b && $a>$c)
		{
			echo "The largest number is " .$a."<br>";
		}
		else if($b>$a && $b>$c)
		{
			echo "The largest number is " .$b."<br>";
		}
		else{
			echo "The largest number is " .$c."<br>";
		}
	}
	?>
</div>
</body>
</html>