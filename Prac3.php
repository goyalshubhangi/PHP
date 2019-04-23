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
	<form method="Post" action="">
		Enter a Number: <input type="Number" name="num" min="0"><br>
		<input type="submit" name="submit" value="Check">
	</form>

	<?php
	if(isset($_POST['submit'])){
		$a=$_POST['num'];
		echo "The Input Number is:".$a."<br>";
		$flag=0;
	for($i=2;$i<=$a;$i++)
	{
		if($a%$i==0)
		{
			$flag++;
		}
	}
	if($flag==1)
	{
		echo "The Number IS Prime Number<br>";
	}
	else
	{
		echo "The Number IS Not Prime Number<br>";	
	}
	}
	?>
</div>
</body>
</html>