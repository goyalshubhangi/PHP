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
	Element 1: <input type="" name="string1"><br><br>
	Element 2: <input type="" name="string2"><br><br>
	Element 3: <input type="" name="string3"><br><br>
	Element 4: <input type="" name="string4"><br><br>
	Element 5: <input type="" name="string5"><br><br>
	<input type="submit" name="submit" value="SORT">
</form>
	<?php
	if(isset($_POST['submit']))
	{
		$a=$_POST['string1'];
		$b=$_POST['string2'];
		$c=$_POST['string3'];
		$d=$_POST['string4'];
		$e=$_POST['string5'];
		$change=array($a,$b,$c,$d,$e);
		echo "Original array is:<br>";
		for($i=0;$i<5;$i++)
		{
			echo $change[$i]."<br>";
		}
		sort($change);
		echo "Sorted array is:<br>";
		for($i=0;$i<5;$i++)
		{
			echo $change[$i]."<br>";
		}
	}
	?>
</div>
</body>
</html>