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
	<form action="" method="Post">
		Enter the number: <input type="number" name="num">
		<input type="submit" name="submit" value="Print">
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$a=$_POST['num'];
		$curr=2;
		echo "First ".$a." even numbers are:<br>";
		for($i=0;$i<$a;$i++)
		{
				$print=$curr;
				echo $print."<br>";
				$curr=$curr+2;
		}
	}

	?>
</div>
</body>
</html>