<!DOCTYPE html>
<html>
<head>
	<title>Shubhangi Goyal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<meta author="Shubhangi Goyal">
	<link rel="stylesheet" type="text/css" href="all.css">
	<link rel="icon" href="favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Raleway|Redressed" rel="stylesheet">
</head>
<body>
	<a href='index.php?home'>< Go back</a>
	<div class="prac">
<form method="POST"  action="">
	String: <input type="text" name="string">
	<input type="submit" name="submit" value="Check">
</form>

<?php 
if(isset($_POST['submit']))
{
	$a=$_POST['string'];
	echo "The input string is ".$a."<br>";
	$b=strrev($a);
	echo "The reversed string is ".$b."<br>";
	if($a==$b)
	{
		echo "The String is Pallindrome<br>";

	}
	else
	{
		echo "The String is not Pallindrome<br>";
	}
}

?>
</div>
</body>
</html>