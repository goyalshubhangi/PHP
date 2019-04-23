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
	<form method="POST"  action="">
	Number <input type="Number" name="num">
	<input type="submit" name="submit" value="Sum">
</form>

<?php 
if(isset($_POST['submit']))
{
	$sum=0;
	$add=1;
	$a=$_POST['num'];
	echo "The input number is: ".$a."<br>";
	for($i=0;$i<$a;$i++)
	{
		$sum=$sum+$add;
		$add=$add+2;
	}
	echo "The sum of first ".$a." odd numbers is ".$sum."<br>";
}
?>
</div>

</body>
</html>