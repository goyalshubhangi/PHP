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
	String: <input type="text" name="string">
	<input type="submit" name="submit" value="Check">
</form>

<?php 
if(isset($_POST['submit'])){
	$a=$_POST['string'];
	echo "The input string is ".$a."<br>";
	if(ctype_lower($a))
	{
		echo "The given String is in Lower case<br>";
	}
	else
		echo "The given String is not in Lower case<br>";

}

?>
</div>
</body>
</html>