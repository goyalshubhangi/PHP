<!DOCTYPE html>
<html>
<head>
	<title>Shubhangi Goyal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta author="SHUBHANGI GOYAL">
	<link rel="icon" href="favicon.png">
	<link rel="stylesheet" href="all.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Raleway|Redressed" rel="stylesheet">
</head>
<body>
<a href='index.php?home'>< Go back</a>
	<div class="prac">
	<form method="post" action=" ">
		String: <input type='text' name='string'>
		<input type='submit' name='submit' value='REVERSE'>
	</form>

<?php
if(isset($_POST['submit'])){
	$a=$_POST['string'];
	echo "The input string is " .$a."<br>";
	$b=strrev($a);
	echo "Reverse =" .$b."<br";
}
?>
</div>
</body>
</html>