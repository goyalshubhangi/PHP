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
	<a href='index.php?home'>< Go back</a><a href='index.php?home'>< Go back</a>
	<div class="prac">
	<form method="post" action="">
		Number: <input type="Number" name="num"><br>
		<input type="submit" name="submit" value="Calculate"><br>
	</form>

	<?php
	if(isset($_POST['submit']))
	{
		$f=1;
		$s=0;
		$a=$_POST['num'];
		echo "Fibbonacci Series upto ".$a."<br>";
		function fibbo($f,$s,$a)
		{
			if($f+$s>$a)
			{

				return ;
			}
			else{
				echo " ".$f+$s." ";
				return fibbo($s,($f+$s),$a);
			}
			
		}
		fibbo($f,$s,$a);
	}
	?>
</div>
</body>
</html>