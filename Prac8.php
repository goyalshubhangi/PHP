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
	<form method="POST"  action="">
	String: <textarea  name="string"></textarea>
	<input type="submit" name="submit" value="Remove Spaces">
</form>

<?php 
if(isset($_POST['submit']))
{
	$a=$_POST['string'];
	$b=str_replace(' ','',$a);
	echo "The Original String is ".$a."<br>";
	echo "The String after removing white spaces is ".$b."<br>";
}
?>
</div>

</body>
</html>